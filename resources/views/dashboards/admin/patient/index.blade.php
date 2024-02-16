@extends('dashboards.admin.layouts.app')
@section('title', isset($title) ? $title: 'Patients')
@section('content')
<div class="page-wrapper" style="min-height: 648px;">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Patients</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="{{route('admin.patients.create')}}" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Patient</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-border table-striped custom-table datatable mb-0 dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 31.3906px;">S/N</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 140.516px;">Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 81.4844px;">Date of Birth</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending" style="width: 334.266px;">Address</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 81.4844px;">Phone</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 191.453px;">Email</th>
                                            <th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 49.8906px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i = 1
                                        @endphp
                                        @foreach($patients as $patient)
                                        <tr role="row" class="odd">
                                            <td>{{$i++}}</td>
                                            <td class="sorting_1">
                                            @if($patient->user->avatar)
                                                <img width="28" height="28" src="{{asset('storage/avatar/'.$provider->user->avatar)}}" class="rounded-circle m-r-5" alt="">
                                            @else
                                            <img width="28" height="28" src="{{asset('default/users/img/default-avatar.png')}}" class="rounded-circle m-r-5" alt="">
                                            @endif
                                            {{$patient->user->firstname}} {{$patient->user->lastname}}</td>
                                            <td>{{$patient->user->dob}}</td>
                                            <td>{{$patient->user->address}} {{$patient->user->city}} {{$patient->user->state}}</td>
                                            <td>{{$patient->user->phone}}</td>
                                            <td>{{$patient->user->email}}</td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="{{route('admin.patients.edit',$patient->id)}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <form action="{{route('admin.patients.destroy',$patient->user->id)}}" method="post">
                                                        @csrf
                                                        @method('Delete')
                                                        <button class="dropdown-item" type="submit" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</button>
                                                    </form>    
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection