@extends('dashboards.admin.layouts.app')
@section('title', isset($title) ? $title: 'Edit Profile')
@section('content')
<div class="page-wrapper" style="min-height: 648px;">
@livewire('admin.admin-edit-profile')
</div>
@endsection