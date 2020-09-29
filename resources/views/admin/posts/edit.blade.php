@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

    <div class="card">
        <div class="card-header">
            Edit Post : {{ $post->title }}
        </div>

        <div class="card-body">
            <form action="{{ route('post.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card card-header">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="card-body" value="{{ $post->title }}">
                </div>
                <div class="card card-header">
                    <label for="featured">Featured image</label>
                    <input type="file" name="featured" class="card-body">
                </div>
                <div class="card card-header">
                    <label for="category">Select a category</label>
                    <select name="category_id" id="category" class="card-body">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                            @if($post->category->id == $category->id)
                                selected
                            @endif   
                            >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="card card-body">
                        @foreach($tags as $tag)
                            <div class="checkbox">
                                <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                                @foreach($post->tags as $t)
                                    @if($tag->id == $t->id)
                                        checked
                                    @endif
                                @endforeach
                                > {{ $tag->tag }}</label>
                            </div>
                        @endforeach
                </div> 
                <div class="card card-header">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="5" rows="5">{{ $post->content }}</textarea>
                </div>
                <div class="text-center mt-3">
                    <button class="btn btn-success" type="submit">Update Post</button>
                </div>
            </form>
        </div>
    </div>
@endsection