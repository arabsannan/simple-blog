@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">All Posts</h1>

    <!-- Create New Post Button -->
    <a href="{{ url('/posts/create') }}"
        class="inline-block mb-4 px-6 py-3 text-white bg-gray-800 hover:bg-gray-700 rounded-lg shadow-md transition duration-200">
        Create a New Post
    </a>

    <!-- Post List -->
    <ul class="space-y-6">
        @foreach($posts as $post)
        <li class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition duration-200">
            <h2 class="text-2xl font-semibold text-gray-800">{{ $post->title }}</h2>
            <p class="text-gray-600 mt-2">{{ Str::limit($post->content, 150) }}</p>

            <div class="mt-4 flex space-x-4">
                <!-- Edit Post -->
                <a href="{{ url('/posts/' . $post->id ) }}"
                    class="text-green-600 hover:text-blue-700 font-semibold">View</a>

                <!-- Edit Post -->
                <a href="{{ url('/posts/' . $post->id . '/edit') }}"
                    class="text-blue-600 hover:text-blue-700 font-semibold">Edit</a>

                <!-- Delete Post -->
                <form action="{{ url('/posts/' . $post->id) }}" method="POST" style="display:inline;">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="text-red-600 hover:text-red-700 font-semibold">Delete</button>
                </form>
            </div>
        </li>
        @endforeach
    </ul>
</div>
@endsection