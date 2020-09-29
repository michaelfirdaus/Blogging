@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

    <div class="card">
        <div class="card-header">
            Edit tag : {{ $tag->tag }}
        </div>

        <div class="card-body">
            <form action="{{ route('tag.update', ['id' => $tag->id]) }}" method="post">
                {{ csrf_field() }}
                <div class="card card-header">
                    <label for="name">Tag Name</label>
                    <input type="text" name="tag" value="{{ $tag->tag }}" class="card-body">
                </div>
                <div class="text-center mt-3">
                    <button class="btn btn-success" type="submit">Update Tag</button>
                </div>
            </form>
        </div>
    </div>
@endsection