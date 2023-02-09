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
      <!-- Search section -->
      {{-- @include('partials.search') --}}
      <x-search link="/show-employees"/>

    <div class="container-fluid">
        
        <div class="row">
            @unless(count($employee) == 0)
                @foreach ($employee as $emp)
                    <x-employee-card :employee='$emp' />
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
