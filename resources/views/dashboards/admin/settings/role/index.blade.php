@extends('dashboards.admin.settings.layouts.app')
@section('title', isset($title) ? $title: 'Role Settings')
@section('content')
<div class="page-wrapper" style="min-height: 617px;">
    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="page-title">Roles &amp; Permissions</h4>
            </div>
            <div class="col-sm-2">
                @can('admin-create')
                <a href="{{route('admin.admins.create')}}" class="btn btn-primary btn-block"><i class="fa fa-plus"></i> Add Admin</a>
                @endcan
            </div>
            <div class="col-sm-2">
                @can('role-create')
                <a href="{{route('admin.roles.create')}}" class="btn btn-primary btn-block"><i class="fa fa-plus"></i> Add Roles</a>
                @endcan
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="roles-menu">
                    <ul>
                        @foreach($roles as $role)
                        <li class="">
                            <a href="javascript:void(0);">{{$role->name}}</a>
                            <span class="role-action">
                                <form action="{{route('admin.roles.destroy',$role->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    @can('role-edit')
                                    <a href="{{route('admin.roles.edit',$role->id)}}">
                                        <span class="action-circle large">
                                            <i class="material-icons">edit</i>
                                        </span>
                                    </a>
                                    @endcan
                                    @can('role-delete')
                                    <button type="submit" data-toggle="modal" data-target="#delete_role">
                                        <span class="action-circle large delete-btn">
                                            <i class="material-icons">delete</i>
                                        </span>
                                    </button>
                                    @endcan
                                </form>
                            </span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection