@extends('layouts.app')

@section('title', 'Add User - Tech Store')

@section('content')

<h1 class="h3 mb-4 text-gray-800">Add New User</h1>

<div class="row">
    <div class="col-lg-8">

        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    User Information
                </h6>
            </div>

            <div class="card-body">

                <form action="/add-user" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>User Name</label>

                        <input type="text"
                               name="name"
                               class="form-control"
                               value="{{ old('name') }}"
                               placeholder="Enter user name"
                               required>
                    </div>

                    <div class="form-group">
                        <label>Email Address</label>

                        <input type="email"
                               name="email"
                               class="form-control"
                               value="{{ old('email') }}"
                               placeholder="Enter email address"
                               required>
                    </div>

                    <div class="form-group">
                        <label>Password</label>

                        <input type="password"
                               name="password"
                               class="form-control"
                               placeholder="Enter password"
                               required>
                        <small class="form-text text-muted">
                            Password must contain at least 8 characters.
                        </small>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-user-plus"></i> Add User
                    </button>

                    <a href="/users" class="btn btn-secondary">
                        Cancel
                    </a>

                </form>

            </div>
        </div>

    </div>
</div>

@endsection