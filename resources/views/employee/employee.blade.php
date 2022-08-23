@extends('components.layout')
@section('content')
<div class="page-wrapper">
    <!--page-content-wrapper-->
    <div class="page-content-wrapper">
        <div class="page-content">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <!--breadcrumb-->

            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">


                    <a class="btn btn-primary float-right" href="{{url('addemployee')}}">Add Employee</a>
                    <div class="table-responsive mt-5">
                        <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="example_length"><label>Show <select
                                                name="example_length" aria-controls="example"
                                                class="custom-select custom-select-sm form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="example_filter" class="dataTables_filter"><label>Search:<input
                                                type="search" class="form-control form-control-sm" placeholder=""
                                                aria-controls="example"></label></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example" class="table table-striped table-bordered dataTable"
                                        style="width: 100%;" role="grid" aria-describedby="example_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1"
                                                    colspan="1" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="width: 158px;">First Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                    colspan="1" aria-label="Position: activate to sort column ascending"
                                                    style="width: 245px;">Last Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                    colspan="1" aria-label="Office: activate to sort column ascending"
                                                    style="width: 114px;">Company</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                    colspan="1" aria-label="Office: activate to sort column ascending"
                                                    style="width: 114px;">Email</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                    colspan="1" aria-label="Office: activate to sort column ascending"
                                                    style="width: 114px;">Phone</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($employee as $employees)

                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{$employees->first_name}}</td>
                                                <td class="sorting_1">{{$employees->last_name}}</td>
                                                <td>{{$employees->company}}</td>
                                                <td>{{$employees->email}}</td>
                                                <td>{{$employees->phone}}</td>
                                                <td>
                                                    <a href="{{url('employee-edit')}}/{{$employees->id}}"
                                                        class="btn btn-warning">Edit</a>
                                                    <a href="{{url('employee-delete')}}/{{$employees->id}}"
                                                        class="btn btn-danger">Delete</a>

                                                </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>


                                </div>
                            </div>
                            <div class="row mt-3">
                                {{$employee->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--end page-content-wrapper-->
</div>
@endsection