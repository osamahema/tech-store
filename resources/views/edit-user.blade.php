@extends('layouts.app')

@section('content')

<h1 class="page-title">Edit User</h1>

<div class="form-card">

    <form action="/update-user/{{ $user->id }}" method="POST">

        @csrf

        <label>User Name</label>

        <input type="text" name="name"
               value="{{ $user->name }}" required>

        <label>Email</label>

        <input type="email" name="email"
               value="{{ $user->email }}" required>

        <label>New Password</label>

        <input type="password" name="password"
               placeholder="Leave empty to keep current password">

        <button type="submit" class="btn">
            Update User
        </button>

    </form>

</div>

@endsection