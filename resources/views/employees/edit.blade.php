@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Employee</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/show-employees">Back</a></li>
                        <li class="breadcrumb-item active">Employee Add Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6 mx-auto">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit details</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="/editEmployee/{{ $employee->id }}">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="firstname">First name</label>
                                <input type="text" class="form-control" id="firstname" placeholder="Enter First Name"
                                    name="firstname" value="{{ $employee->firstname }}">

                                @error('firstname')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="lastname">Last name</label>
                                <input type="text" class="form-control" id="lastname" placeholder="Enter Last name"
                                    name="lastname" value="{{ $employee->lastname }}">

                                @error('lastname')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="hidden" class="form-control" id="company" placeholder="Enter Company"
                                    name="company" value="{{ $employee->company }}">
                                @error('company')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter Email"
                                    name="email" value="{{ $employee->email }}">
                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone number</label>
                                <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number"
                                    name="phone" value="{{ $employee->phone }}">
                                @error('phone')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="grid grid-cols-1 gap-4 place-items-center h-20">
                            {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                            <button class="bg-primary text-white rounded py-2 px-4 hover:bg-black">
                                Submit
                            </button>
                        </div>

                    </form>
                </div>
                <!-- /.card -->

            </div>
        </div>
    </div>
@endsection
