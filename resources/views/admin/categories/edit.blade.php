@extends('layouts.app')

@section('content')

@include('admin.includes.errors')    

    <div class="card">
        <div class="card-header">
            Update category: {{$category->name}}
        </div>

        <div class="card-body">
            <form action="{{ route('category.update', ['id' => $category->id]) }}" method="post">
                {{ csrf_field() }}
                <div class="card card-header">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ $category->name }}" class="card-body">
                </div>
                <div class="text-center mt-3">
                    <button class="btn btn-success" type="submit">Update Category</button>
                </div>
            </form>
        </div>
    </div>
@endsection