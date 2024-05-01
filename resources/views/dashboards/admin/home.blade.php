@extends('dashboards.admin.layouts.app')
@section('title', isset($title) ? $title: 'Dashboard')
@section('content')
<div class="page-wrapper">
	<div class="content">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
				<div class="dash-widget">
					<span class="dash-widget-bg1"><i class="fa fa-user-md" aria-hidden="true"></i></span>
					<div class="dash-widget-info text-right">
						<h3>{{$providerCount}}</h3>
						<span class="widget-title1">Providers <i class="fa fa-check" aria-hidden="true"></i></span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
				<div class="dash-widget">
					<span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
					<div class="dash-widget-info text-right">
						<h3>{{$patientCount}}</h3>
						<span class="widget-title2">Patients <i class="fa fa-check" aria-hidden="true"></i></span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
				<div class="dash-widget">
					<span class="dash-widget-bg3"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
					<div class="dash-widget-info text-right">
						<h3>{{$appointmentCount}}</h3>
						<span class="widget-title3">Appointments <i class="fa fa-check" aria-hidden="true"></i></span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
				<div class="dash-widget">
					<span class="dash-widget-bg4"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
					<div class="dash-widget-info text-right">
						<h3>{{$treatmentCount}}</h3>
						<span class="widget-title4">Treatments <i class="fa fa-check" aria-hidden="true"></i></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-6 col-lg-8 col-xl-8">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title d-inline-block">Upcoming Appointments</h4> <a href="{{ route('admin.appointments.index') }}" class="btn btn-primary float-right">View all</a>
					</div>
					<div class="card-body p-0">
						<div class="table-responsive">
							<table class="table mb-0">
								<thead class="d-none">
									<tr>
										<th>Patient Name</th>
										<th>Doctor Name</th>
										<th>Date and Time</th>
										<th class="text-right">Status</th>
									</tr>
								</thead>
								<tbody>
									@foreach($appointments as $appointment)
									<tr>
										<td style="min-width: 200px;">
											<h2><a href="profile.html">{{$appointment->patient->user->name}}<span>{{$appointment->patient->user->address}}</span></a></h2>
										</td>                 
										<td>
											<h5 class="time-title p-0">Appointment With</h5>
											<p>{{$appointment->healthProvider->user->name}}</p>
										</td>
										<td>
											<h5 class="time-title p-0">On</h5>
											<p>{{$appointment->date}}</p>
										</td>
										<td class="text-right">
											<span class="custom-badge status-{{$appointment->status ? 'green' : 'red'}}">{{$appointment->status ? 'Complete' : 'Not Complete'}}</span>	
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 col-xl-4">
				<div class="card member-panel">
					<div class="card-header bg-white">
						<h4 class="card-title mb-0">Healthcare Providers</h4>
					</div>
					<div class="card-body">
						<ul class="contact-list">
							@foreach($healthProviders as $provider)
							<li>
								<div class="contact-cont">
									<div class="float-left user-img m-r-10">
										<a href="{{ route('admin.health_providers.show',$provider->id) }}" title="{{$provider->user->name}}">
											@if($provider->user->avatar)
											<img src="{{asset('storage/users-avatar/'.$provider->user->avatar)}}" alt="" class="w-40 rounded-circle">
											@else
											<img src="{{asset('default/users/img/default-avatar.png')}}" alt="" class="w-40 rounded-circle">
											@endif
											<span class="status online"></span>
										</a>
									</div>
									<div class="contact-info">
										<span class="contact-name text-ellipsis">{{$provider->user->name}}</span>
										<span class="contact-date">{{$provider->user->subject}}, {{$provider->user->qualification}}</span>
									</div>
								</div>
							</li>
							@endforeach
						</ul>
					</div>
					<div class="card-footer text-center bg-white">
						<a href="{{ route('admin.health_providers.index') }}" class="text-muted">View all Healthcare Providers</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-6 col-lg-8 col-xl-8">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title d-inline-block">New Patients </h4> <a href="{{ route('admin.patients.index') }}" class="btn btn-primary float-right">View all</a>
					</div>
					<div class="card-block">
						<div class="table-responsive">
							<table class="table mb-0 new-patient-table">
								<tbody>
									@foreach($patients as $patient)
									<tr>
										<td>
											@if($patient->user->avatar)
												<img width="28" height="28" class="rounded-circle" src="{{asset('storage/users-avatar/'.$patient->user->avatar)}}" alt="">
											@else
												<img width="28" height="28" class="rounded-circle" src="{{asset('default/users/img/default-avatar.png')}}" alt="">
											@endif 
											<h2>{{$patient->user->name}}</h2>
										</td>
										<td>{{$patient->user->email}}</td>
										<td>{{$patient->user->phone}}</td>
										<td>{{$patient->user->dob}}</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 col-xl-4">
				<div class="card member-panel">
					<div class="card-header bg-white">
						<h4 class="card-title mb-0">Latest Treated Patients</h4>
					</div>
					<div class="card-body">
						<ul class="contact-list">
							@foreach($treatments as $treatment)
							<li>
								<div class="contact-cont">
									<div class="float-left user-img m-r-10">
										@if($treatment->patient->user->avatar)
										<img src="{{asset('storage/users-avatar/'.$treatment->patient->user->avatar)}}" alt="" class="w-40 rounded-circle">
										@else
										<img src="{{asset('default/users/img/default-avatar.png')}}" alt="" class="w-40 rounded-circle">
										@endif
										<span class="status online"></span>
									</div>
									<div class="contact-info">
										<span class="contact-name text-ellipsis">{{$treatment->patient->user->name}}</span>
									</div>
								</div>
							</li>
							@endforeach
						</ul>
					</div>
					<div class="card-footer text-center bg-white">
						<a href="{{ route('admin.treatments.index') }}" class="text-muted">View all Treatments</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection