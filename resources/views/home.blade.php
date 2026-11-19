@extends('layouts.app')

@section('title', 'Home - Tech Store')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<div class="row">

    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-2">
                    Products Management
                </div>
                <div class="h5 mb-3 font-weight-bold text-gray-800">
                    Manage Your Products
                </div>
                <a href="/products" class="btn btn-primary btn-sm">
                    <i class="fas fa-box mr-1"></i> View Products
                </a>
                <a href="/add-product" class="btn btn-success btn-sm">
                    <i class="fas fa-plus mr-1"></i> Add Product
                </a>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-2">
                    Users Management
                </div>
                <div class="h5 mb-3 font-weight-bold text-gray-800">
                    Manage Store Users
                </div>
                <a href="/users" class="btn btn-primary btn-sm">
                    <i class="fas fa-users mr-1"></i> View Users
                </a>
                <a href="/add-user" class="btn btn-success btn-sm">
                    <i class="fas fa-user-plus mr-1"></i> Add User
                </a>
            </div>
        </div>
    </div>

</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            Welcome to Tech Store
        </h6>
    </div>
    <div class="card-body">
        <p>
            Welcome to Tech Store Management System.
            You can manage products and users through the dashboard.
        </p>
    </div>
</div>

@endsection