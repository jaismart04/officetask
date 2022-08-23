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
            <div class="row">
                <div class="col-xl-10 mx-auto">
                    <div class="card border-top border-0 border-4 border-info">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <form action="{{url('employee-update')}}" method="POST">
                                    @csrf

                                    <input type="hidden" name="id" value="{{$employee->id}}">
                                    <div class="border p-4 rounded">
                                        <div class="card-title d-flex align-items-center">
                                            <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                                            </div>
                                            <h5 class="mb-0 text-info">Update Employee</h5>
                                        </div>
                                        <hr>
                                        <div class="row mb-3">
                                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter
                                                First
                                                Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="first_name"
                                                    id="inputEntercompanyName" placeholder="Enter first Name"
                                                    value="{{$employee->first_name}}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter
                                                last
                                                Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="last_name"
                                                    id="inputEntercompanyName" placeholder="Enter last Name"
                                                    value="{{$employee->last_name}}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Email
                                                Address</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" name="email"
                                                    id="inputEmailAddress2" placeholder="Email Address"
                                                    value="{{$employee->email}}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">Company
                                            </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="company"
                                                    id="inputEntercompanyName" placeholder="Enter company Name"
                                                    value="{{$employee->company}}">
                                            </div>
                                        </div>

                                        <input type="hidden" name="company_id" value="{{$employee->company_id}}">





                                        <div class="row mb-3">
                                            <label for="inputEnterYourName" class="col-sm-3 col-form-label">phone

                                            </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="phone"
                                                    id="inputEntercompanyName" placeholder="Enter number"
                                                    value="{{$employee->phone}}">
                                            </div>
                                        </div>


                                        <div class="row">
                                            <label class="col-sm-3 col-form-label"></label>
                                            <div class="col-sm-9">
                                                <button type="submit"
                                                    class="btn btn-info px-5 float-right">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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