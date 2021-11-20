@extends('layout')

@section('title', "Remborn - Posts")
    
@section("content")
    <main class="container mx-auto">
        <article class="pt-4 h-full">
            <h2 class="text-xl text-red-500 hover:text-red-800">
                {{ $post -> title }}
            </h2>
            <hr>
            <p class="py-4">
                {{ $post -> content }}
            </p>
            <span>
                Categoría: <small>{{ $post -> category }}</small>
            </span>
            <section class="pt-4">
                <button type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-500 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-400 text-lg">
                    <a href="{{ route('posts.edit', $post) }}">Editar</a>
                </button>
                <form class="inline-block" method="POST" enctype="multipart/form-data" action="{{ route('posts.destroy', $post) }}" autocomplete="on">
                    @csrf
                    @method("delete")
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-500 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-400 text-lg">
                        Eliminar
                    </button>
                </form>
            </section>
        </article>
    </main>
@endsection