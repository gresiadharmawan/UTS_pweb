@extends('layouts.layout')

@section('title', 'Login Page')

@section('content')
<h1>Login Page</h1>
<form action="{{ url('/contact') }}">
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" required>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>
@endsection
