@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

    <div class="card">
        <div class="card-header">
            Edit Your Profile
        </div>

        <div class="card-body">
            <form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card card-header">
                    <label for="name">Username</label>
                    <input type="text" name="name" value="{{ $user->name }}" class="card-body">
                </div>
                <div class="card card-header">
                    <label for="name">Email</label>
                    <input type="text" name="email" value="{{ $user->email }} "class="card-body">
                </div>
                <div class="card card-header">
                    <label for="name">New Password</label>
                    <input type="password" name="password" class="card-body">
                </div>
                <div class="card card-header">
                    <label for="name">Upload new avatar</label>
                    <input type="file" name="avatar" class="card-body">
                </div>
                <div class="card card-header">
                    <label for="name">Facebook Profile</label>
                    <input type="text" name="facebook" value="{{ $user->profile->facebook }}" class="card-body">
                </div>
                <div class="card card-header">
                    <label for="name">Youtube Profile</label>
                    <input type="text" name="youtube" value="{{ $user->profile->youtube }}" class="card-body">
                </div>
                <div class="card card-header">
                    <label for="about">About you</label>
                    <textarea name="about" id="about" cols="6" rows="6" value="{{ $user->profile->about }}" class="form-control"></textarea>
                </div>
                <div class="text-center mt-3">
                    <button class="btn btn-success" type="submit">Update Profile</button>
                </div>
            </form>
        </div>
    </div>
@endsection