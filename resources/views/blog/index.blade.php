@extends('layouts.app')

@section('content')
<section class="section bg-gradient-to-br from-blue-50 to-purple-50 px-4 sm:px-6 lg:px-8">
    <div class="container mx-auto">
        <h1 class="text-3xl sm:text-4xl font-bold text-center mb-8 sm:mb-12 gradient-text" data-aos="fade-up">Blog Posts</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            @foreach($posts as $post)
            <div class="bg-white rounded-lg overflow-hidden shadow-sm card-hover" data-aos="fade-up">
                <div class="relative overflow-hidden group">
                    <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4 sm:p-6">
                        <div class="text-white">
                            <h3 class="text-lg sm:text-xl font-semibold mb-2">{{ $post->title }}</h3>
                            <p class="text-sm">{{ Str::limit($post->excerpt, 100) }}</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 sm:p-6">
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-gray-500">{{ $post->published_at->format('M d, Y') }}</span>
                        <a href="{{ route('blog.show', $post->slug) }}" class="text-blue-500 hover:text-blue-600">Read More →</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-8">
            {{ $posts->links() }}
        </div>
    </div>
</section>
@endsection 