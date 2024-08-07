@extends('dashboards.admin.layouts.app')
@section('title', isset($title) ? $title: 'Treatments')
@section('content')
<div class="page-wrapper" style="min-height: 648px;">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Treatments</h4>
            </div>
            @can('treatment-create')
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="{{route('admin.treatments.create')}}" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Treatment</a>
            </div>
            @endcan
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Patient Name</th>
                                <th>Problem</th>
                                <th>Diagnose</th>
                                <th>Vaccination</th>
                                <th>Healthcare Provider</th>
                                <th>Provider Name</th>
                                <th>Speciality</th>
                                <th>Address</th>
                                <th>Ammont Paid</th>
                                <th>Mode of Payment</th>
                                <th>Treatment Date</th>
                                <th>Time</th>
                                @canany(['treatment-edit','treatment-delete'])
                                <th class="text-right">Action</th>
                                @endcanany
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=1
                            @endphp
                            @foreach ($treatments as $treatment)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$treatment->patient->user->name}}</td>
                                <td>{{$treatment->problem}}</td>
                                <td>{{$treatment->diagnose}}</td>
                                <td>{{$treatment->vaccination}}</td>
                                <td>{{$treatment->provider}}</td>
                                <td>{{$treatment->healthProvider->user->name}}</td>
                                <td>
                                    @if($treatment->speciality)    
                                    {{$treatment->speciality->name}}
                                    @else
                                    <p></p>
                                    @endif
                                </td>
                                <td>{{$treatment->address}}</td>
                                <td>{{$treatment->amount_paid}}</td>
                                <td>{{$treatment->mode_of_payment}}</td>
                                <td>{{$treatment->date}}</td>
                                <td>{{$treatment->time}}</td>
                                <td class="text-right">
                                @canany(['treatment-edit','treatment-delete'])
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(22px, 27px, 0px);" x-out-of-boundaries="">
                                            @can('treatment-edit')
                                            <a class="dropdown-item" href="{{route('admin.treatments.edit',$treatment->id)}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            @endcan
                                            @can('treatment-delete')
                                            <form action="{{route('admin.treatments.destroy',$treatment->id )}}" method="Post">
                                                @csrf
                                                @method('Delete')
                                                <button class="dropdown-item" type="submit" data-toggle="modal" data-target="#delete_treatment"><i class="fa fa-trash-o m-r-5"></i> Delete</button>
                                            </form>
                                            @endcan
                                        </div>
                                    </div>
                                @endcanany
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$treatments->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection