@extends('layouts.index')

@section( 'content' )
    <h1 class="mb-4 text-4xl text-center">Edit Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        @method( 'patch' )
        <label for="title" class="block mb-2">Title</label>
        <input id="title"
               type="text"
               name="title"
               value="{{ $post->title }}"
               class="w-full mb-4 p-2 border border-gray-200 focus:border-gray-400 outline-none rounded">
        <label for="body" class="block mb-2">Body</label>
        <textarea id="body"
                  name="body"
                  rows="5"
                  class="w-full mb-4 p-2 border border-gray-200 focus:border-gray-400 outline-none rounded">{{ $post->body }}</textarea>
        <input type="submit"
               value="Edit"
               class="w-full mb-4 px-8 py-4 bg-blue-500 hover:bg-blue-400 text-white text-center rounded cursor-pointer">
        <a href="{{ route('posts.show', $post->id) }}"
           class="block px-8 py-4 bg-gray-500 hover:bg-gray-400 text-white text-center rounded">
            Back
        </a>
    </form>
@endsection
