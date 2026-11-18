@extends('layouts.app')

@section('content')

<h1 class="page-title">Add New User</h1>

<div class="form-card">

    <form action="/add-user" method="POST">

        @csrf

        <label>User Name</label>
        <input type="text" name="name"
               value="{{ old('name') }}"
               placeholder="Enter user name" required>

        <label>Email</label>
        <input type="email" name="email"
               value="{{ old('email') }}"
               placeholder="Enter email" required>

        <label>Password</label>
        <input type="password" name="password"
               placeholder="Enter password" required>

        <button type="submit" class="btn">
            Add User
        </button>

    </form>

</div>

@endsection