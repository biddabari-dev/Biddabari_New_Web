
@extends('backend.master')

@section('title', 'teachers')

@section('body')
<div class="row py-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-warning">
                <h4 class="float-start text-white">All Super-Admin & Admin</h4>
                @can('create-user')
                    <a href="{{route('admin_profile.create')}}" class="rounded-circle text-white border-5 text-light f-s-22 btn position-absolute end-0 me-4" title="Add Admin">
                        <i class="fa-solid fa-circle-plus"></i>
                    </a>
                @endcan
            </div>
            <div class="card-body">


                <table class="table" id="file-datatable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Roles</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($allAdmin))
                        @foreach($allAdmin as $admin)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->mobile }}</td>
                                {{--<td>
                                    @foreach($admin->roles as $role)
                                        {{ $role->pivot->role_id }}
                                    @endforeach
                                </td>--}}
                                <td>
                                    @php
                                        $role = optional($admin->roles->first())->pivot->role_id;
                                    @endphp
                                    <p class="badge bg-primary">{{ $role == 1 ? 'Super Admin' : ($role == 2 ? 'Admin' : 'No Role') }}</p>
                                </td>

                                <td>{{ $admin->status == 1 ? 'Active' : 'Inactive' }}</td>
                                <td>
                                   @can('edit-user')
                                        <a href="{{route('admin_profile.edit',$admin->id)}}"  class="btn btn-sm btn-warning product-category-edit-btn" title="Edit Blog Category">
                                            <i class="fa-solid fa-edit"></i>
                                        </a>
                                   @endcan
                                   @can('delete-user')
                                       <form class="d-inline" action="{{ route('admin_profile.destroy', $admin->id) }}" method="post">
                                           @csrf
                                           @method('delete')
                                           <button type="submit" class="btn btn-sm btn-danger data-delete-form" title="Delete Category">
                                               <i class="fa-solid fa-trash"></i>
                                           </button>
                                       </form>
                                   @endcan
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>

@endsection
@push('style')

@endpush

@push('script')
@include('backend.includes.assets.plugin-files.datatable')
@endpush
