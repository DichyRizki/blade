@extends('main')
@section('container')

@include('partials.navbar')

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-8">
            <form action="{{ route('post.update', $post->id) }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="" class="form-label">Name Post</label>
                    <input type="text" name="post_name" class="form-control" value="{{ $post->post_name }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Description</label>
                    <textarea type="text" name="description" class="form-control"> {{ $post->description }} </textarea>
                </div>
                <button class="btn btn-primary">
                    Save Post
                </button>
            </form>
        </div>
    </div>
</div>

@endsection