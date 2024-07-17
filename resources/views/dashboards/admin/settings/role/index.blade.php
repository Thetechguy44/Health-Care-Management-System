@extends('dashboards.admin.settings.layouts.app')
@section('title', isset($title) ? $title: 'Role Settings')
@section('content')
<div class="page-wrapper" style="min-height: 617px;">
    <div class="content">
        <div class="row">
            <div class="col-sm-8">
                <h4 class="page-title">Roles &amp; Permissions</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <a href="add-role.html" class="btn btn-primary btn-block"><i class="fa fa-plus"></i> Add Roles</a>
                <div class="roles-menu">
                    <ul>
                        <li class="active">
                            <a href="javascript:void(0);">Administrator</a>
                            <span class="role-action">
                                <a href="edit-role.html">
                                    <span class="action-circle large">
                                        <i class="material-icons">edit</i>
                                    </span>
                                </a>
                                <a href="#" data-toggle="modal" data-target="#delete_role">
                                    <span class="action-circle large delete-btn">
                                        <i class="material-icons">delete</i>
                                    </span>
                                </a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection