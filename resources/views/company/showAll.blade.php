@extends('layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Company Lists</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                    <li class="breadcrumb-item active">Company</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

 <!-- Main content -->
 <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <a href="/create/" class="btn btn-app bg-gradient-success">
                    <i class="fas fa-plus"></i> Add Company
                </a>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ __('Companies') }}</h1>

            </div>

            <!-- /.col -->
        </div><!-- /.row -->

        <!--Show card-->
        @unless(count($companies) == 0)
        <div class="row">    
                @foreach ($companies as $company)
                    <x-company-card :company='$company' />
                @endforeach
                @else
                <p>No Listing to show</p>
            @endunless
        </div>
    </div><!-- /.container-fluid -->
</div>

<div class="mt-6 p-4">
    {{$companies->links()}}
</div>

@endsection