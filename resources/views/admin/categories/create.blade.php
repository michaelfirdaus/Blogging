@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

    <div class="card">
        <div class="card-header">
            Create a new category
        </div>

        <div class="card-body">
            <form action="{{ route('category.store') }}" method="post">
                {{ csrf_field() }}
                <div class="card card-header">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="card-body">
                </div>
                <div class="text-center mt-3">
                    <button class="btn btn-success" type="submit">Create Category</button>
                </div>
            </form>
        </div>
    </div>
@endsection