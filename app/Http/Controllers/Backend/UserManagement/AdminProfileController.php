<?php

namespace App\Http\Controllers\Backend\UserManagement;

use App\helper\ViewHelper;
use App\Http\Controllers\Controller;
use App\Models\Backend\RoleManagement\Role;
use App\Models\Backend\UserManagement\Student;
use App\Models\Backend\UserManagement\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class AdminProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_if(Gate::denies('manage-user'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $allAdmin = User::whereHas('roles', function ($query) {
            $query->whereIn('role_id', [1, 2, 5, 6, 7, 8, 9, 10, 11]);
        })->select('id', 'name', 'mobile', 'status')->orderBy('id', 'DESC')->get();

        return view('backend.role-management.user.admin.admin_profile', compact('allAdmin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort_if(Gate::denies('create-user'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $roles = Role::select('id', 'title')->where('status', 1)->get();
        return view('backend.role-management.user.admin.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        abort_if(Gate::denies('store-user'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:11|min:11|unique:users,mobile,' . $request->user_id,
            'password' => 'required|min:6',
        ]);
        $this->user = User::createOrUpdateUser($request);
        foreach ($request->roles as $role)
        {
            if ($role == '3')
            {
                //teacher
                Teacher::createOrUpdateTeacher($request, $this->user);
            } elseif ($role == '4')
            {
                //student
                Student::createOrUpdateStudent($request, $this->user);
            }
        }
        return redirect()->route('admin_profile.index')->with('success', 'Admin created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        abort_if(Gate::denies('edit-user'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('backend.role-management.user.admin.create', [
            'roles' => Role::select('id', 'title')->where('status', 1)->get(),
            'user' => User::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        abort_if(Gate::denies('update-user'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $this->user = User::createOrUpdateUser($request, $id);

        foreach ($this->user->roles as $role) {
            if ($role->id == 3)
            {
                //teacher
                Teacher::createOrUpdateTeacher($request, $this->user, $request->teacher_id);
            } elseif ($role->id == 4)
            {
                 //student
                Student::createOrUpdateStudent($request, $this->user, $request->student_id);
            }
        }
        if (empty($request->user_try_update) && $request->user_try_update != 1)
        {
            return redirect()->route('admin_profile.index')->with('success', 'Admin updated successfully.');
        } else {
            return back()->with('success', 'Admin updated successfully.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        abort_if(Gate::denies('delete-user'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if ($id != 1)
        {
            User::find($id)->delete();
            return ViewHelper::returnSuccessMessage('Admin deleted successfully.');
        } else {
            return ViewHelper::returEexceptionError('Please Contact your developer for deleting default user');
        }
    }
}
