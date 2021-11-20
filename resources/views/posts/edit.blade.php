@extends('layout')

@section('title', "Remborn - Edit Post")
    
@section("content")
    <main class="container mx-auto">
        <section class="pt-4">
            <h2 class="text-2xl">Editar Post</h2>
            <form class="bg-white shadow-md rounded px-8 pb-8 mb-4" method="POST" enctype="multipart/form-data" action="{{ route('posts.update', $post -> id) }}" autocomplete="on">
                @csrf
                @method("put")
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 bg-white space-y-6 sm:p-6">
    
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="title" class="block text-sm font-medium text-gray-700 text-xl">
                                    Título
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="title" id="title" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300 p-1" placeholder="Insert a title..." value="{{ old("title", $post -> title) }}">
                                </div>
                            </div>
                        </div>
                        @error('title')
                            <div class="text-center inline-block">
                                <div class="p-2 bg-red-400 items-center text-red-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                                    <span class="flex rounded-full bg-red-500 uppercase px-2 py-1 text-xs font-bold mr-3">Error</span>
                                    <span class="font-semibold mr-2 text-left flex-auto">{{ $message }}</span>
                                </div>
                            </div>
                        @enderror
                        <input type="hidden" name="slug" value="slug">
          
                        <div>
                            <label for="content" class="block text-sm font-medium text-gray-700 text-xl">
                            Contenido
                            </label>
                            <div class="mt-1">
                                <textarea id="content" name="content" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md p-1" placeholder="Insert content...">{{ old("content", $post -> content) }}</textarea>
                            </div>
                        </div>
                        @error('content')
                            <div class="text-center inline-block">
                                <div class="p-2 bg-red-400 items-center text-red-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                                    <span class="flex rounded-full bg-red-500 uppercase px-2 py-1 text-xs font-bold mr-3">Error</span>
                                    <span class="font-semibold mr-2 text-left flex-auto">{{ $message }}</span>
                                </div>
                            </div>
                        @enderror
    
                        <div>
                            <label for="category" class="block text-sm font-medium text-gray-700 text-xl">
                            Categoría
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="category" id="category" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300 p-1" placeholder="Insert a category..." value="{{ old("category", $post -> category) }}">
                            </div>
                        </div>
                        @error('category')
                            <div class="text-center inline-block">
                                <div class="p-2 bg-red-400 items-center text-red-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                                    <span class="flex rounded-full bg-red-500 uppercase px-2 py-1 text-xs font-bold mr-3">Error</span>
                                    <span class="font-semibold mr-2 text-left flex-auto">{{ $message }}</span>
                                </div>
                            </div>
                        @enderror
                    </div>
    
                    <div class="px-4 py-2 bg-gray-50 w-100 sm:px-6">
                      <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-500 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-400 text-lg">
                        Edit
                      </button>
                    </div>
                </div>
            </form>
        </section>
    </main>
@endsection