@extends('dashboards.admin.layouts.app')
@section('title', isset($title) ? $title: 'Edit Appointments')
@section('content')
<div class="page-wrapper" style="min-height: 648px;">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Edit Appointment</h4>
            </div>
        </div>
        @livewire('admin.edit-appointment',[$appointment])
    </div>
</div>
@endsection