@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Company</h1>
                    
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
                        <h3 class="card-title">Edit details</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="/editCompany/{{$company->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Company name</label>
                                <input type="text" class="form-control" id="name"  
                                    name="name" value="{{ $company->name }}">

                                @error('name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" 
                                    name="email" value="{{ $company->email }}">

                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="website">Company website</label>
                                <input type="text" class="form-control" id="website"  
                                    name="website" value="{{ $company->website }}">

                                @error('website')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="logo">Company Logo</label>
                                <img class="w-48 mr-6 mb-6 border border-dark"
                                src="{{ $company->logo ? asset('storage/' . $company->logo) : asset('/images/AdminLTELogo.png') }}"
                                alt="logo" />

                                <br>
                                <input type="file" id="formExample2" name="logo">

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
