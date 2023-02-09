@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Company</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/show-companies">Back</a></li>
                        <li class="breadcrumb-item active">Company Add Form</li>
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
                        <h3 class="card-title">Company Details</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="/addCompany" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Company name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter email"
                                    name="name" value="{{ old('name') }}">

                                @error('name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email"
                                    name="email" value="{{ old('email') }}">

                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="website">Company website</label>
                                <input type="text" class="form-control" id="website" placeholder="Enter link"
                                    name="website" value="{{ old('website') }}">

                                @error('website')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="logo">Company Logo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="logo" name="logo">
                                        <label class="custom-file-label" for="logo">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                                @error('logo')
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
