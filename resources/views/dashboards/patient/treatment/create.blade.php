@extends('dashboards.patient.layouts.app')
@section('title', isset($title) ? $title: 'Add Treatment')
@section('content')
@include('dashboards.patient.layouts.nav')
@include('dashboards.patient.layouts.side')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Treatment</h2>
            <small class="text-muted">Welcome to HMS application</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 ">
				<div class="card">
					<div class="header">
						<h2>Add Appointment</h2>
					</div>
					@livewire('add-treatment')
				</div>
			</div>
		</div>
    </div>
</section>
@endsection