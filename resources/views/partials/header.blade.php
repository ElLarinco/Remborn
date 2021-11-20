<header class="header-2">

    <nav class="bg-white px-2 py-2 md:py-4">
      <div class="md:container md:mx-auto md:flex md:items-center">
  
        <div class="flex justify-between items-center">
          <a href="{{ route("home") }}" class="font-bold text-xl text-red-600">Remborn</a>
          <button class="border border-solid border-gray-600 px-3 py-1 rounded text-gray-600 opacity-50 hover:opacity-75 md:hidden" id="navbar-toggle">
            <i class="fas fa-bars"></i>
          </button>
        </div>
  
        <div class="hidden md:flex flex-col md:flex-row md:ml-auto mt-3 md:mt-0" id="navbar-collapse">
            <a href="{{ route("home") }}" class="p-2 lg:px-4 md:mx-2 rounded 
            {{ (request() -> routeIs("home")) ? "bg-red-500 text-gray-100" : "" }}
            ">Inicio</a>

            <a href="{{ route("posts.index") }}" class="p-2 lg:px-4 md:mx-2 rounded 
            {{ (request() -> routeIs("posts.*")) ? "bg-red-500 text-gray-100" : "" }}">Posts</a>

            <a href="{{ route("about") }}" class="p-2 lg:px-4 md:mx-2 rounded 
            {{ (request() -> routeIs("about")) ? "bg-red-500 text-gray-100" : "" }}">Acerca</a>

            <a href="{{ route("contacts.index") }}" class="p-2 lg:px-4 md:mx-2 rounded 
            {{ (request() -> routeIs("contacts.index")) ? "bg-red-500 text-gray-100" : "" }}">Contactos</a>

            <a href="#" class="p-2 lg:px-4 md:mx-2 text-gray-100 text-center border border-transparent rounded hover:bg-red-100 hover:text-red-500 transition-colors duration-300 bg-red-600">Iniciar Sesión</a>

            <a href="#" class="p-2 lg:px-4 md:mx-2 text-red-600 text-center border border-solid border-red-600 rounded hover:bg-red-600 hover:text-white transition-colors duration-300 mt-1 md:mt-0 md:ml-1">Registrarse</a>

        </div>
      </div>
    </nav>
</header>