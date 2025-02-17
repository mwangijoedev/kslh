<x-layout2>
    <section class=" flex flex-row sm:flex-col p-10 sm:space-y-4 xs:flex-col lg:flex-row lg:space-x-3 mt-20 mb-20 bg-cover bg-center hover:scale-90 transition-all duration-500 ease-in-out " style="background-image: url('{{ Vite::asset('resources/images/paint.png') }}');" >

        <header class="">
            <h2 class="text-4xl font-bold text-green-600 ">Add Tickets to store</h2>
            <p class="mt-4 text-gray-600">From Draco to you !</p>
        </header>

    <div class="lg:w-1/2">
        <form action="/createtickets" method="POST" class="space-y-6 flex flex-col" enctype="multipart/form-data" >
            @csrf 
            <input type="name" name="name" placeholder="Name" class="bg-white bg-opacity-20 text-gray-200 w-full border border-blue-600 rounded-lg py-3 p-4">
                @error ('name') 
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            <input type="text" name="description" placeholder="Description" class="bg-white bg-opacity-20 text-gray-200 w-full border border-blue-600 rounded-lg py-3 p-4">
            @error ('description') 
                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
            @enderror
         
            <input type="file" name="path" placeholder="Photo" class="bg-white bg-opacity-20 text-gray-200 w-full border border-blue-600 rounded-lg py-3 p-4">
                @error ('path') 
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
           
            <button type="submit" class=" self-end px-10 py-3 mt-10 text-xl text-black hover:bg-green-900 ml-auto bg-green-400 rounded-lg hover:scale-105 transition-all transition-ease-in-out duration-500 ">
                Add Ticket
            </button>
        </form>
    </div>
   
    </section>

</x-layout2>