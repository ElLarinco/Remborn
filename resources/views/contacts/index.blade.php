@extends('layout')

@section('title', "Remborn - Contactos")
    
@section("content")
<div class="py-6 md:py-12">
    <div class="container px-4 mx-auto">
        <section class="pt-4">
            <h2 class="text-3xl md:text-4xl font-medium mb-2">Contáctanos</h2>
            <form class="bg-white shadow-md rounded px-8 pb-8 mb-4" method="POST" enctype="multipart/form-data" action="{{ route("contacts.store") }}" autocomplete="on">
                @csrf
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 bg-white space-y-6 sm:p-6">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="name" class="block text-sm font-medium text-gray-700 text-xl">
                                    Nombre
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="name" id="name" class="focus:ring-red-500 focus:border-red-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300 p-1" placeholder="Introduce un nombre...">
                                </div>
                            </div>
                            @error('name')
                                <p>{{ $message }}</p>
                            @enderror

                            <div class="col-span-3 sm:col-span-2">
                                <label for="email" class="block text-sm font-medium text-gray-700 text-xl">
                                Correo
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="email" name="email" id="email" class="focus:ring-red-500 focus:border-red-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300 p-1" placeholder="Introduce un correo...">
                                </div>
                            </div>
                            @error('email')
                                <p>{{ $message }}</p>
                            @enderror

                            <div class="col-span-3 sm:col-span-2">
                                <label for="subject" class="block text-sm font-medium text-gray-700 text-xl">
                                Asunto
                                </label>
                                <div class="mt-1">
                                    <textarea id="subject" name="subject" rows="3" class="shadow-sm focus:ring-red-500 focus:border-red-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md p-1" placeholder="Introduce el asunto..."></textarea>
                                </div>
                            </div>
                            @error('message')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="px-4 py-2 bg-gray-50 w-100 sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-500 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-400 text-lg">
                        Enviar correo
                    </button>
                    </div>
                </div>
            </form>
            @if (session("info"))
                <div role="alert" class="px-8 inline-block">
                    <div class="bg-green-500 text-white font-bold rounded-t px-4 py-2">
                    Éxito
                    </div>
                    <div class="border border-t-0 border-green-400 rounded-b bg-green-100 px-4 py-3 text-green-700">
                    <p>{{ session("info") }}</p>
                    </div>
                </div>
            @endif
        </section>
    </div>
</div>
@endsection