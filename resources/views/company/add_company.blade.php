@extends('components.layout')
@section('content')


<div class="page-wrapper">
    <!--page-content-wrapper-->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--breadcrumb-->

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <!--end breadcrumb-->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-12 mx-auto">
                            <div class="">
                                <div class="">

                                    <form action="{{url('company-save')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="border p-4 rounded">
                                            <div class="card-title d-flex align-items-center">
                                                <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                                                </div>
                                                <h5 class="mb-0 text-info">Company Registration</h5>
                                            </div>
                                            <hr>
                                            <div class="row mb-3">
                                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter
                                                    Company
                                                    Name <span style="color:red;">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="company_name"
                                                        id="inputEntercompanyName" placeholder="Enter Company Name"
                                                        value="{{old('company_name')}}">
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

                                            <div class=" row mb-3">
                                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Company
                                                    Logo
                                                    Address</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="image" type="file" id="formFile">
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