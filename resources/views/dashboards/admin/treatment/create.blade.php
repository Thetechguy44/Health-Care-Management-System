@extends('dashboards.admin.layouts.app')
@section('title', isset($title) ? $title: 'Treatments')
@section('content')
<div class="page-wrapper" style="min-height: 648px;">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add Treatments</h4>
            </div>
        </div>
        @livewire('admin.add-treatment')
    </div>
</div>
@endsection