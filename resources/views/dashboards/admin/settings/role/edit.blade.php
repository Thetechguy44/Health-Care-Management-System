@extends('dashboards.admin.settings.layouts.app')
@section('title', isset($title) ? $title: 'Edit Role')
@section('content')
<div class="page-wrapper" style="min-height: 617px;">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Edit Role</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form Method="Post" action="{{ route('admin.roles.update', $role->id) }}">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label>Role Name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="name" value="{{ $role->name }}">
                    </div>
                    <!-- <div class="form-group">
                        <label class="display-block">Status</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="role_active" value="option1" checked="">
                            <label class="form-check-label" for="role_active">
                            Active
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="role_inactive" value="option2">
                            <label class="form-check-label" for="role_inactive">
                            Inactive
                            </label>
                        </div>
                    </div> -->
                    <div class="form-group">
                        <label class="display-block">Permissions</label>
                        <div class="m-b-30">
                            <ul class="list-group row">
                                <div class="row">
                                    @foreach($permissions as $permission)
                                    <div class="col-lg-4">
                                        <li class="list-group-item">
                                            {{$permission->name}}
                                            <div class="material-switch float-right">
                                                <input id="{{$permission->name}}" type="checkbox" name="permissions[]" value="{{$permission->name}}" @isset($role) @if(in_array($permission->id, $rolePermissions) ? true : false) checked @endif @endisset>
                                                <label for="{{$permission->name}}" class="badge-success"></label>
                                            </div>
                                        </li>
                                    </div>
                                    @endforeach
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn" type="submit">Update Role</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection