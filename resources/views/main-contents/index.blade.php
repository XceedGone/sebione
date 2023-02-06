@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Dashboard') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

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
            <!--Show card-->
            <div class="row">
                @unless(count($companies) == 0)
                    @foreach ($companies as $company)
                        <x-company-card :company='$company' />
                    @endforeach
                @else
                    <p>No Listing to show</p>
                @endunless
            </div>   
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <div class="mt-6 p-4">
        {{$companies->links()}}
    </div>
@endsection
