@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                {{-- tombol aksi --}}
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?')"><span data-feather="x-circle"></span> Delete</button>
                </form>

                <img src="https://picsum.photos/seed/{{ $post->category->name }}/1200/400" alt="{{ $post->category->name }}"
                    class="img-fluid mt-3">

                <article class="my-3 fs-6">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
