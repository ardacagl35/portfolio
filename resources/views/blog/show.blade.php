@extends('layouts.app')

@section('content')
<article class="section bg-white px-4 sm:px-6 lg:px-8">
    <div class="container mx-auto max-w-4xl">
        <header class="mb-8" data-aos="fade-up">
            <h1 class="text-3xl sm:text-4xl font-bold mb-4 gradient-text">{{ $post->title }}</h1>
            <div class="flex items-center text-gray-500 text-sm">
                <span>{{ $post->published_at->format('M d, Y') }}</span>
            </div>
        </header>

        <div class="relative mb-8 rounded-lg overflow-hidden" data-aos="fade-up">
            <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-64 sm:h-96 object-cover">
        </div>

        <div class="prose prose-lg max-w-none" data-aos="fade-up">
            {!! $post->content !!}
        </div>

        <div class="mt-12 text-center" data-aos="fade-up">
            <a href="{{ route('blog.index') }}" class="inline-block gradient-bg text-white px-6 sm:px-8 py-3 rounded-lg hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                Back to Blog
            </a>
        </div>
    </div>
</article>
@endsection 