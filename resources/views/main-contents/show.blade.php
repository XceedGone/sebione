@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <div class="float-left">
                    <img 
                    src="{{ $company->logo ? asset('storage/' . $company->logo) : asset('/images/AdminLTELogo.png') }}"
                    alt="company logo"
                    style="width:80px; height:80px; border-radius: 50px; border: 2px solid steelblue;">
                </div>
                <div class="p-3 flex">
                    <h1 class="text-uppercase">{{$company->name}}</h1>
                </div>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/show-companies">Back</a></li>
                        <li class="breadcrumb-item active">Employees</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <x-search link="/company/{{ $company->id }}" />

    <div class="container-fluid">
        <!--Add Employee Button-->
        <div class="row">

            <div class="col-md-6 mb-3">
                {{-- <a href="/create/" class="btn btn-app bg-gradient-success">
                    <i class="fas fa-plus"></i> Add Company
                </a> --}}
                <button class="btn btn-primary"><i class="fa fa-plus"></i>
                    <a href="/create/id/{{ $company->id }}" class="text-white"> Add employee</a></button>
            </div>
        </div>
        <div class="row">
            @unless(count($employee) == 0)
                @foreach ($employee as $emp)
                    <x-employee-card :company='$company' :employee='$emp' />
                @endforeach
            @else
                @include('components.errors')
            @endunless
        </div>
    </div>
   

    <div class="mt-6 p-4">
        {{ $employee->links() }}
    </div>

@endsection
