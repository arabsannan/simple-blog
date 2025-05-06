@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
<div class="max-w-4xl mx-auto py-6 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Create a New Post</h1>

    <!-- Create Post Form -->
    <form action="{{ url('/posts') }}" method="POST" class="bg-white shadow-md rounded-lg p-8 space-y-6">
        @csrf

        <!-- Title Input -->
        <div>
            <label for="title" class="block text-lg font-medium text-gray-700 mb-2">Title:</label>
            <input type="text" name="title" id="title" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        </div>

        <!-- Content Input -->
        <div>
            <label for="content" class="block text-lg font-medium text-gray-700 mb-2">Content:</label>
            <textarea name="content" id="content" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                rows="6"></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="px-6 py-3 text-white bg-gray-800 hover:bg-gray-700 rounded-lg shadow-md transition duration-200">
            Create Post
        </button>
    </form>
</div>
@endsection