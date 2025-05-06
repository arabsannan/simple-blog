@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
<div class="max-w-4xl mx-auto py-6 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Edit Post</h1>

    <!-- Edit Post Form -->
    <form action="{{ url('/posts/' . $post->id) }}" method="POST" class="bg-white shadow-md rounded-lg p-8 space-y-6">
        @method('PUT')
        @csrf

        <!-- Title Input -->
        <div>
            <label for="title" class="block text-lg font-medium text-gray-700 mb-2">Title:</label>
            <input type="text" name="title" id="title" value="{{ $post->title }}" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        </div>

        <!-- Content Input -->
        <div>
            <label for="content" class="block text-lg font-medium text-gray-700 mb-2">Content:</label>
            <textarea name="content" id="content" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                rows="6">{{ $post->content }}</textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="px-6 py-3 text-white bg-gray-800 hover:bg-gray-700 rounded-lg shadow-md transition duration-200">
            Update Post
        </button>
    </form>
</div>
@endsection