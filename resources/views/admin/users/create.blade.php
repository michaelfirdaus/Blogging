@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

    <div class="card">
        <div class="card-header">
            Create a new user
        </div>

        <div class="card-body">
            <form action="{{ route('user.store') }}" method="post">
                {{ csrf_field() }}
                <div class="card card-header">
                    <label for="name">User</label>
                    <input type="text" name="name" class="card-body">
                </div>
                <div class="card card-header">
                    <label for="name">Email</label>
                    <input type="text" name="email" class="card-body">
                </div>
                <div class="text-center mt-3">
                    <button class="btn btn-success" type="submit">Add User</button>
                </div>
            </form>
        </div>
    </div>
@endsection