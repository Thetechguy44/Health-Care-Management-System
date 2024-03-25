@extends('dashboards.patient.layouts.app')
@section('title', isset($title) ? $title: 'Book Appointment')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Book Appointment</h2>
            <small class="text-muted">Welcome to HMS application</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 ">
				<div class="card">
					<div class="header">
						<h2>Edit Appointment</h2>
					</div>
					@livewire('edit-appointment', [$appointment])
				</div>
			</div>
		</div>
    </div>
</section>
@endsection