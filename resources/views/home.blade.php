@extends('layouts.app')

@section('content')
    <h1 class="text-center">Page statistique</h1>
    <hr class="w-50">
    <div class="d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ \App\Models\Employee::count() }}</h3>
                            <p>Employes</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="{{ route('employees.index') }}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ \App\Models\Employee::where('employee_type', 'Contract')->count() }}</h3>
                            <p>Contract Employees</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="{{ route('employees.index') }}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ \App\Models\Employee::where('employee_type', 'Full-time')->count() }}</h3>
                            <p>Full Time Employees</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="{{ route('employees.index') }}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-cyan">
                        <div class="inner">
                            <h3>{{ \App\Models\Employee::distinct('service')->count() }}</h3>
                            <p>Services Company</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-building"></i>
                        </div>
                        <a href="{{ route('employees.index') }}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ \App\Models\Employee::max('salaire') }}</h3>
                            <p>Max salary</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-money-bill-wave"></i>
                        </div>
                        <a href="{{ route('employees.index') }}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ \App\Models\Employee::min('salaire') }}</h3>
                            <p>Min salary</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-money-bill-wave"></i>
                        </div>
                        <a href="{{ route('employees.index') }}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
