@extends('dashboards.admin.layouts.app')
@section('title', isset($title) ? $title: 'Specialities')
@section('content')
<div class="page-wrapper" style="min-height: 648px;">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Specialities</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="{{route('admin.specialities.create')}}" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Speciaity</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Specialities</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php 
                        $i = 1
                        @endphp
                        @foreach ($specialities as $speciality)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$speciality->specialities}}</td>
                                <td>
                                    <div class="dropdown dropdown-action">
                                        <form action="{{route('admin.specialities.destroy',$speciality->id)}}" method="Post">
                                            @csrf
                                            @method('delete')
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(22px, 27px, 0px);" x-out-of-boundaries="">
                                            <a class="dropdown-item" href="{{route('admin.specialities.edit',$speciality->id)}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <button class="dropdown-item" type="submit" data-toggle="modal" data-target="#delete_appointment"><i class="fa fa-trash-o m-r-5"></i> Delete</button>
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
@endsection