@extends('backend.master')

@section('title')
    Add Employee
@endsection

@section('content')
    <section>
        <div class="app-content main-content mt-0">
            <div class="side-app">

                <!-- CONTAINER -->
                <div class="main-container container-fluid">


                    <!-- PAGE-HEADER -->
                    <div class="page-header">
                        <div>
                            <h1 class="page-title">Add Employee</h1>
                        </div>
                        <div class="ms-auto pageheader-btn">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Employee</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add Employee</li>
                            </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- ROW -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h3 class="card-title">Add Employee</h3>
                                </div>
                                <div class="card-body">
                                    <p class="text-center text-success">{{Session::get('msg')}}</p>
                                    <form class="needs-validation" novalidate action="{{route('employee.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <h6 class="text-center"><i>Employee INFO</i></h6>
                                        <br><br>
                                        <div class="form-row">
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                                <label for="employee_name">Name</label> <span class="text-danger"><b>*</b></span>
                                                <input name="employee_name" type="text" class="form-control" id="employee_name" value="">
                                                <p class="text-danger pt-2">{{$errors->has('employee_name') ? $errors->first('employee_name') : ''}}</p>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                                <label for="employee_designation_id">Select Designation</label> <span class="text-danger"><b>*</b></span>
                                                <select name="employee_designation_id" class="form-control" id="employee_designation_id">
                                                    <option value="" disabled selected>Select Designation</option>
                                                    @foreach ($designations as $designation)
                                                        <option value="{{ $designation->id }}">
                                                            {{ $designation->designation_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <p class="text-danger pt-2">{{$errors->has('employee_designation_id') ? $errors->first('employee_designation_id') : ''}}</p>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                                <label for="employee_mobile">Mobile</label> <span class="text-danger"><b>*</b></span>
                                                <input name="employee_mobile" type="number" class="form-control" id="employee_mobile">
                                                <p class="text-danger pt-2">{{$errors->has('employee_mobile') ? $errors->first('employee_mobile') : ''}}</p>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                                <label for="employee_voter_id">Voter ID</label> <span class="text-danger"><b>*</b></span>
                                                <input name="employee_voter_id" type="number" class="form-control" id="employee_voter_id">
                                                <p class="text-danger pt-2">{{$errors->has('employee_voter_id') ? $errors->first('employee_voter_id') : ''}}</p>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                                                <label for="employee_address">Address</label> <span class="text-danger"><b>*</b></span>
                                                <textarea name="employee_address" class="form-control" id="employee_address" cols="30" rows="3"></textarea>
                                                <p class="text-danger pt-2">{{$errors->has('employee_address') ? $errors->first('employee_address') : ''}}</p>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                                <label for="employee_image">picture</label>
                                                <input name="employee_image" type="file" accept="image/*" id="employee_image" class="form-control">
                                                <p class="text-danger pt-2">{{$errors->has('employee_image') ? $errors->first('employee_image') : ''}}</p>
                                            </div>
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary">ADD EMPLOYEE</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
