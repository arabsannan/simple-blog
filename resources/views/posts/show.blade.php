@extends('layouts.app')

@section('title', 'Blog Post - ' . $post->title)

@section('content')
<div class="max-w-3xl mx-auto py-12 sm:px-6 lg:px-8">
    <!-- Post Header -->
    <div class="mb-6">
        <h1 class="text-4xl font-bold text-gray-900">{{ $post->title }}</h1>
        <div class="mt-2 text-lg text-gray-500">
            {{-- <span class="font-semibold">By {{ $post->author->name }}</span> | --}}
            <span>{{ $post->created_at->format('F d, Y') }}</span>
        </div>
    </div>

    <!-- Post Content -->
    <div class="prose prose-lg text-gray-700">
        {!! $post->content !!}
    </div>

    <!-- Back to Posts Link -->
    <div class="mt-8">
        <a href="{{ url('/') }}" class="text-blue-600 hover:text-blue-800">
            &larr; Back to All Posts
        </a>
    </div>
</div>
@endsection