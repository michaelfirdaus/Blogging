@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

    <div class="card">
        <div class="card-header">
            Edit blog settings
        </div>

        <div class="card-body">
            <form action="{{ route('settings.update') }}" method="post">
                {{ csrf_field() }}
                <div class="card card-header">
                    <label for="name">Site name</label>
                    <input type="text" name="site_name" value="{{ $settings->site_name }}" class="card-body">
                </div>
                <div class="card card-header">
                    <label for="name">Address</label>
                    <input type="text" name="address" class="card-body" value="{{ $settings->address }}">
                </div>
                <div class="card card-header">
                    <label for="name">Contact Phone</label>
                    <input type="text" name="contact_number" class="card-body" value="{{ $settings->contact_number }}">
                </div>
                <div class="card card-header">
                    <label for="name">Contact Email</label>
                    <input type="text" name="contact_email" class="card-body" value="{{ $settings->contact_email }}">
                </div>
                <div class="text-center mt-3">
                    <button class="btn btn-success" type="submit">Update site settings</button>
                </div>
            </form>
        </div>
    </div>
@endsection