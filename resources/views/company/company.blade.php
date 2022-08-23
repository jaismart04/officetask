@extends('components.layout')
@section('content')
<div class="page-wrapper">
    <!--page-content-wrapper-->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!--breadcrumb-->

            <!--end breadcrumb-->
            <?php //dd(session()->all());
            ?>
            <div class="card">
                <div class="card-body">
                    <div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>

                    <a class="btn btn-primary float-right" href="{{url('add')}}">Add Company</a>
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
                                                    style="width: 158px;">Company Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                    colspan="1" aria-label="Position: activate to sort column ascending"
                                                    style="width: 245px;">Email</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                    colspan="1" aria-label="Office: activate to sort column ascending"
                                                    style="width: 114px;">Logo</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                    colspan="1" aria-label="Office: activate to sort column ascending"
                                                    style="width: 114px;">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($company as $companies)

                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{$companies->company_name}}</td>
                                                <td>{{$companies->email}}</td>
                                                <td>
                                                    @if($companies->logo)
                                                    <img src="{{asset($companies->logo)}}" height="40" width="50">
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{url('company-edit')}}/{{$companies->id}}"
                                                        class="btn btn-warning">Edit</a>
                                                    <a href="{{url('company-delete')}}/{{$companies->id}}"
                                                        class="btn btn-danger">Delete</a>

                                                </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>


                                </div>
                            </div>
                            <div class="row mt-3">
                                {{$company->links()}}
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