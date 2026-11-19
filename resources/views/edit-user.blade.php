@extends('layouts.app')

@section('title', 'Edit User - Tech Store')

@section('content')

<h1 class="h3 mb-4 text-gray-800">Edit User</h1>

<div class="row">
    <div class="col-lg-8">

        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Update User Information
                </h6>
            </div>

            <div class="card-body">

                <form action="/update-user/{{ $user->id }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>User Name</label>

                        <input type="text"
                               name="name"
                               class="form-control"
                               value="{{ old('name', $user->name) }}"
                               required>
                    </div>

                    <div class="form-group">
                        <label>Email Address</label>

                        <input type="email"
                               name="email"
                               class="form-control"
                               value="{{ old('email', $user->email) }}"
                               required>
                    </div>

                    <div class="form-group">
                        <label>New Password</label>

                        <input type="password"
                               name="password"
                               class="form-control"
                               placeholder="Leave empty to keep current password">

                        <small class="form-text text-muted">
                            Leave this field empty if you do not want to change the password.
                        </small>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update User
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