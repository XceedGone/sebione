@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Employee Lists</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                        <li class="breadcrumb-item active">Employees</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container-fluid">
        <!--Add Employee Button-->
        {{-- <div class="row">
            <div class="col-md-6">
                <a href="/create/id/{{ $company->id }}" class="btn btn-app bg-gradient-success">
                    <i class="fas fa-plus"></i> Add Employee
                </a>
            </div>
        </div> --}}
        <div class="row">
            @unless(count($employee) == 0)
                @foreach ($employee as $emp)
                    @foreach ($company as $comp)
                        <x-employee-card :company='$comp' :employee='$emp' />
                    @endforeach
                @endforeach
            @else
                <div class="error-page">
                    <h2 class="headline text-warning">204</h2>

                    <div class="error-content">
                        <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! No list to show.</h3>

                        <p>
                            This company doesn't have any employees yet! Please add employee first.
                        </p>


                    </div>
                    <!-- /.error-content -->
                </div>
                <!-- /.error-page -->
            @endunless
        </div>

    </div>
    <div class="mt-6 p-4">
        {{ $employee->links() }}
    </div>
@endsection
