@extends('layouts.app')

@section('content')

<h1 class="page-title">Our Users</h1>

<div class="products">

    @foreach ($users as $user)

        <div class="product-card">

            <h3>{{ $user->name }}</h3>

            <p>Email: {{ $user->email }}</p>

            <p>User ID: {{ $user->id }}</p>

            <a href="/edit-user/{{ $user->id }}" class="btn">
                Edit
            </a>

            <form action="/delete-user/{{ $user->id }}"
                  method="POST"
                  style="display:inline;">
                @csrf

                <button type="submit" class="btn"
                    onclick="return confirm('Are you sure?')">
                    Delete
                </button>
            </form>

        </div>

    @endforeach

</div>

<a href="/add-user" class="btn">Add New User</a>

@endsection