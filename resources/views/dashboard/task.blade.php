@extends('main')
@section('container')

@include('partials.navbar')

<div class="container my-5">
    <div class="row">
        <div class="col">
            <h2>Post</h2>
        </div>
        <div class="col-auto">
            <a href="{{ route('post.create') }}" class="btn btn-primary">Buat Post</a>
        </div>
    </div>

    <div class="row my-5">

        @forelse ($post as $item)
        <div class="col-12 col-md-4 col-lg-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">{{ $item->post_name }}</h4>
                    <p>{{ $item->description }}</p>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-end">

                <a href="{{ route('post.edit', $item->id) }}" class="btn btn-warning me-2">Edit</a>

                <form action="{{ route('post.destroy', $item->id) }}" method="post">
                @csrf
                @method('delete')
                    <button class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
        
        @empty

        <h4>No Post</h4>
            
        @endforelse
        
    </div>
</div>
{{-- <a href="{{ route('logout') }}">Logout</a> --}}

@endsection
