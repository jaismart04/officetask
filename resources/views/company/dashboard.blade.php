@extends('components.layout')
@section('content')
<div class="page-wrapper">
    <!--page-content-wrapper-->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="d-flex mb-2">
                                <div>
                                    <p class="mb-0 font-weight-bold">Teams</p>
                                    <h2 class="mb-0">2</h2>
                                </div>
                                <div class="ml-auto align-self-end">
                                    <p class="mb-0 font-14 text-primary"><i class='bx bxs-up-arrow-circle'></i>
                                        <span>2</span>
                                    </p>
                                </div>
                            </div>
                            <div id="chart1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="d-flex mb-2">
                                <div>
                                    <p class="mb-0 font-weight-bold">Employees</p>
                                    <h2 class="mb-0">5</h2>
                                </div>
                                <div class="ml-auto align-self-end">
                                    <p class="mb-0 font-14 text-success"><i class='bx bxs-up-arrow-circle'></i>
                                        <span>5</span>
                                    </p>
                                </div>
                            </div>
                            <div id="chart2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="d-flex mb-2">
                                <div>
                                    <p class="mb-0 font-weight-bold">Sample</p>
                                    <h2 class="mb-0">2,346</h2>
                                </div>
                                <div class="ml-auto align-self-end">
                                    <p class="mb-0 font-14 text-danger"><i class='bx bxs-down-arrow-circle'></i>
                                        <span>236</span>
                                    </p>
                                </div>
                            </div>
                            <div id="chart3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end page-content-wrapper-->
</div>
@endsection