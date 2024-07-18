@extends('dashboards.admin.layouts.app')
@section('title', isset($title) ? $title: 'Admins')
@section('content')
<div class="page-wrapper" style="min-height: 617px;">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Employee</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="add-employee.html" class="btn btn-primary float-right btn-rounded"><i class="fa fa-plus"></i> Add Employee</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th style="min-width:200px;">Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Role</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>NS-0001</td>
                                <td>
                                    <img width="28" height="28" src="assets/img/user.jpg" class="rounded-circle" alt=""> <h2>Albina Simonis</h2>
                                </td>
                                <td>albinasimonis@example.com</td>
                                <td>828-634-2744</td>
                                <td>
                                    <span class="custom-badge status-green">Nurse</span>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(22px, 27px, 0px);" x-out-of-boundaries="">
                                            <a class="dropdown-item" href="edit-employee.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection