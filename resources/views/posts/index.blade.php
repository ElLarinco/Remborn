@extends('layout')

@section('title', "Remborn - Posts")
    
@section("content")
    <section class="pt-4">
        <h2 class="text-3xl">Posts</h2>
        <ul class="flex pt-8 py-8">
            <li class="mr-6">
            <a href="{{ route('posts.create') }}" class="p-2 bg-red-500 text-gray-100 hover:bg-red-800 rounded">Crear Post</a>
            </li>
        </ul>
        @if (count($posts) > 0)
            <ul class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @foreach ($posts as $post)
                    <li class="border-2 rounded border-gray-300 p-2">
                        <article class="h-full">
                            <h2 class="text-xl">
                                <a href="{{ route('posts.show', $post) }}" class="text-red-500 hover:text-red-800">{{ $post -> title }}</a>
                            </h2>
                            <hr>
                            <p class="py-4">
                                {{ $post -> content }}
                            </p>
                            <span>
                                Categoría: <small>{{ $post -> category }}</small>
                            </span>
                        </article>
                    </li>
                @endforeach          
            </ul>
            {{ $posts -> links() }}
        @else
            <p>No hay posts disponibles</p>
        @endif
    </section>
@endsection