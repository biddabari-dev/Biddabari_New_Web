@extends('backend.master')

@section('title', 'Admins')

@section('body')
    <div class="row py-5">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header bg-warning">
                    <h4 class="float-start text-white">Super-Admin & Admin</h4>
                    <a href="{{ route('admin_profile.index') }}" class="btn rounded-circle position-absolute end-0 me-3">
                        <i class="fa-regular fa-file-lines fa-2x text-white"></i>
                    </a>
                </div>
                <div class="card-body modal-fix" id="roleForm" data-modal-parent="roleForm" >
                    <form action="{{ isset($user) ? route('admin_profile.update', $user->id) : route('admin_profile.store') }}" method="post">
                        @csrf
                        @if(isset($user))
                            @method('put')
                        @endif

                        <div class="mt-2">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', isset($user) ? $user->name : '') }}" />

                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mt-2">
                            <label for="mobile">Mobile</label>
                            <input type="text" name="mobile" id="mobile" class="form-control @error('mobile') is-invalid @enderror" value="{{ old('mobile', isset($user) ? $user->mobile : '') }}"{{ isset($user) ? 'readonly' : '' }} />

                            @error('mobile')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mt-2">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" value="" placeholder="{{ isset($user) ? 'Change' : 'Enter' }} Password" />

                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mt-2 select2-div">
                            <label for="">Roles</label>
                            <select name="roles[]" class="form-control select2" multiple required data-placeholder="Select A Role" id="">
                                @foreach($roles as $role)
                                    @if (Auth::check() && Auth::user()->roles->contains('id', 1))
                                        <option value="{{ $role->id }}"
                                            @if(isset($user) && !empty($user->roles))
                                                @foreach($user->roles as $userRole)
                                                    @if($role->id == $userRole->id) selected @endif
                                                @endforeach
                                            @endif
                                        >
                                            {{ $role->title }}
                                        </option>
                                    @elseif(!isset($user) && $role->id == 4)
                                        <option value="{{ $role->id }}">{{ $role->title }}</option>
                                    @elseif(isset($user) && $role->id == 4)
                                        <option value="{{ $role->id }}"
                                                @foreach($user->roles as $userRole)
                                                    @if($role->id == $userRole->id) selected @endif
                                                @endforeach
                                            >{{ $role->title }}</option>
                                    @else
                                        @if(isset($user))
                                            @foreach($user->roles as $userRole)
                                                @if($role->id == $userRole->id || $role->id == 4)
                                                    <option value="{{ $role->id }}"
                                                        @if($role->id == $userRole->id) selected @endif>
                                                        {{ $role->title }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endif
                                @endforeach

                            </select>
                        </div>

                       {{-- <div class="mt-2 select2-div">
                            <label for="roles">Roles</label>
                            <select name="roles[]" class="form-control select2 @error('roles') is-invalid @enderror" multiple required data-placeholder="Select A Role" id="roles">
                                @foreach($roles as $role)
                                    @if (Auth::check() && Auth::user()->roles->contains('id', 1))
                                        <option value="{{ $role->id }}"
                                                @if(isset($user) && !empty($user->roles))
                                                @foreach($user->roles as $userRole)
                                                @if($role->id == $userRole->id) selected @endif
                                            @endforeach
                                            @endif
                                        >
                                            {{ $role->title }}
                                        </option>
                                    @elseif(!isset($user) && $role->id == 4)
                                        <option value="{{ $role->id }}">{{ $role->title }}</option>
                                    @elseif(isset($user) && $role->id == 4)
                                        <option value="{{ $role->id }}"
                                                @foreach($user->roles as $userRole)
                                                @if($role->id == $userRole->id) selected @endif
                                            @endforeach
                                        >{{ $role->title }}</option>
                                    @else
                                        @if(isset($user))
                                            @foreach($user->roles as $userRole)
                                                @if($role->id == $userRole->id || $role->id == 4)
                                                    <option value="{{ $role->id }}"
                                                            @if($role->id == $userRole->id) selected @endif>
                                                        {{ $role->title }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endif
                                @endforeach
                            </select>

                            @error('roles')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>--}}


                        <div class="mt-2">
                            <label for="">Is Published</label>
                            <div class="material-switch">
                                <input id="someSwitchOptionInfo" name="status" type="checkbox" {{ isset($user) && $user->status == 0 ? '' : 'checked' }} />
                                <label for="someSwitchOptionInfo" class="label-info"></label>
                            </div>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-success btn-sm float-end" value="{{ isset($user) ? 'Update' : 'Create' }} Admin" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
@push('style')
@endpush

@push('script')

@endpush
