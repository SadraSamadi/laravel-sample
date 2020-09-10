@extends('layouts.index')

@section( 'content' )
    <h2 class="text-2xl">{{ $post->title }}</h2>
    <small class="text-gray-500">{{ $post->updated_at }}</small>
    <p class="my-4">{{ $post->body }}</p>
    <a href="{{ route('posts.edit', $post->id) }}"
       class="block mb-4 px-8 py-4 bg-blue-500 hover:bg-blue-400 text-white text-center rounded">
        Edit
    </a>
    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
        @csrf
        @method( 'delete' )
        <input type="submit"
               value="Delete"
               class="w-full mb-4 px-8 py-4 bg-red-500 hover:bg-red-400 text-white text-center rounded cursor-pointer">
    </form>
    <a href="{{ route('posts.index') }}"
       class="block px-8 py-4 bg-gray-500 hover:bg-gray-400 text-white text-center rounded">
        Back
    </a>
@endsection
