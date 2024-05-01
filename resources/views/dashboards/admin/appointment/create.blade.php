@extends('dashboards.admin.layouts.app')
@section('title', isset($title) ? $title: 'Appointments')
@section('content')
<div class="page-wrapper" style="min-height: 648px;">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add Appointment</h4>
            </div>
        </div>
        @livewire('admin.book-appointment')
    </div>
</div>
@endsection