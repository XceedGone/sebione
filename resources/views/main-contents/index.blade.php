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

                <div class="card" style="width: 18rem;">
                    <x-card title="companies" :number="count($companies)" link="/show-companies" />
                </div>
                <div class="card ml-10" style="width: 18rem;">
                    <x-card title="employees" :number="count($employees)" link="/show-employees" />
                </div>


            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </div>
@endsection
