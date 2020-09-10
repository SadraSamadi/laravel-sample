@extends('layouts.index')

@section( 'content' )
    <h1 class="text-4xl text-center">Posts</h1>
    @if( count($posts) > 0 )
        @foreach( $posts as $post )
            <a href="{{ route('posts.show', $post->id) }}"
               class="block my-4 p-4 hover:bg-gray-100 border border-solid border-gray-200 rounded">
                {{ $post->title }}
            </a>
        @endforeach
    @else
        <p class="my-4 p-4 bg-gray-200 text-center border border-solid border-gray-300 rounded">No posts yet!</p>
    @endif
    <a href="{{ route('posts.create') }}"
       class="block px-8 py-4 bg-green-500 hover:bg-green-400 text-white text-center rounded">
        Create
    </a>
@endsection
