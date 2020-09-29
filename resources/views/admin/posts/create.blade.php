@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

    <div class="card">
        <div class="card card-header">
            Create a new post
        </div>

        <div class="card-body">
            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card mb-2">
                    <div class="card card-header">
                        <label for="title">Title</label>
                    </div>
                    <div class="card card-body">
                        <input type="text" name="title" class="card-body">
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card card-header">
                        <label for="featured">Featured image</label>
                    </div>
                    <div class="card card-body">
                        <input type="file" name="featured" class="card-body">
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card card-header">
                        <label for="category">Select a category</label>
                    </div>
                    <div class="card card-body">
                        <select name="category_id" id="category" class="card-body">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card card-header">
                        <label for="tags">Select Tags</label>
                    </div>
                    <div class="card card-body">
                        @foreach($tags as $tag)
                            <div class="checkbox">
                                <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}"> {{ $tag->tag }}</label>
                            </div>
                        @endforeach
                    </div>  
                </div>
                <div class="card">
                    <div class="card card-header">
                        <label for="content">Content</label>
                    </div>
                    <div class="card card-body">
                        <textarea name="content" id="content" cols="5" rows="5"></textarea>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button class="btn btn-success" type="submit">Create Post</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#content').summernote();
        });
    </script>
@endsection

@section('styles')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
