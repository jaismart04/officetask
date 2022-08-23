@extends('components.layout')
@section('content')

<div class="page-wrapper">
    <!--page-content-wrapper-->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--breadcrumb-->

            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif


                    <div class="row">
                        <div class="col-xl-12 mx-auto">
                            <div class="">
                                <div class="">

                                    <form action="{{url('employee-save')}}" method="POST">
                                        @csrf
                                        <div class="border p-4 rounded">
                                            <div class="card-title d-flex align-items-center">
                                                <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                                                </div>
                                                <h5 class="mb-0 text-info">Employee Registration</h5>
                                            </div>
                                            <hr>
                                            @foreach($company as $cm)
                                            <input type="hidden" name="company_id" value="{{$cm->id}}">
                                            @endforeach
                                            <div class="row mb-3">
                                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                                    Choose Company <span style="color:red;">*</span></label>
                                                <div class="col-sm-9">
                                                    <select class="form-select mb-3" name="company"
                                                        aria-label="Default select example">
                                                        <option selected=""> Choose Company</option>
                                                        @foreach($company as $cm)
                                                        <option value="{{$cm->company_name}}">{{$cm->company_name}}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                                    First Name <span style="color:red;">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="first_name"
                                                        id="inputEntercompanyName" placeholder="Enter first Name"
                                                        value="{{old('first_name')}}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                                    last Name <span style="color:red;">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="last_name"
                                                        id="inputEntercompanyName" placeholder="Enter last Name"
                                                        value="{{old('last_name')}}">
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Email
                                                    Address</label>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control" name="email"
                                                        id="inputEmailAddress2" placeholder="Email Address"
                                                        value="{{old('email')}}">
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">
                                                    Phone</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="phone"
                                                        id="inputEntercompanyName" placeholder="Enter number"
                                                        value="{{old('phone')}}">
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
    </div>
    <!--end page-content-wrapper-->
</div>

@endsection