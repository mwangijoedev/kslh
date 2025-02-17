<x-layout2>
    <section class=" flex flex-row sm:flex-col p-10 sm:space-y-4 xs:flex-col lg:flex-row lg:space-x-3 mt-20 mb-20 bg-cover bg-center hover:scale-90 transition-all duration-500 ease-in-out " style="background-image: url('{{ Vite::asset('resources/images/paint.png') }}');" >

        <header class="">
            <h2 class="text-4xl font-bold text-green-600 ">Add an Accommodation to fit your guest's wants</h2>
            <p class="mt-4 text-gray-600">From Draco to you !</p>
        </header>

    <div class="lg:w-1/2">
        <form action="/createaccommodation" method="POST" class="space-y-6 flex flex-col" enctype="multipart/form-data" >
            @csrf 
            <input type="text" name="title" placeholder="Title" class="bg-white bg-opacity-20 text-gray-200 w-full border border-blue-600 rounded-lg py-3 p-4">
                @error ('title') 
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            <input type="text" name="location" placeholder="location" class="bg-white bg-opacity-20 text-gray-200 w-full border border-blue-600 rounded-lg py-3 p-4">
                @error ('location') 
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            <input type="text" name="cost" placeholder="Cost" class="bg-white bg-opacity-20 text-gray-200 w-full border border-blue-600 rounded-lg py-3 p-4">
                @error ('cost') 
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            <!-- <input type="file" name="itempath" placeholder="Photo" class="bg-white bg-opacity-20 text-gray-200 w-full border border-blue-600 rounded-lg py-3 p-4">
                @error ('itempath') 
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror -->

                <div class="relative">
                    <label for="photo" class="bg-white bg-opacity-20 text-gray-200 w-full border border-blue-600 rounded-lg py-3 p-4 cursor-pointer flex items-center justify-center">
                        Display Image
                    </label>
                    <input type="file" id="photo" name="photo" class="hidden">
                    @error('photo') 
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

            <select name="deals" id="deals" class="bg-white bg-opacity-20 text-gray-200 w-full border border-blue-600 rounded-lg py-3 p-4" >
                <option value="fully refundable">Fully Refundable</option>
                <option value="No prepayment needed">No Prepayment needed</option>
                <option value="Properties with special offers">Properties with special offers</option>
            </select>
                @error ('type') 
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            <fieldset class="flex flex-row">
                <x-accommodation.tagcheckbox 
                    header="Assets" 
                    titles="Hotels Lodgings B&Bs Lodges Resorts Hostels Motels Condos"
                />

                <x-accommodation.tagcheckbox 
                    header="Amenities" 
                    titles="wifi casino sauna massage fishing parking hiking spa pool bar/lounge BBQ"
                />

                <x-accommodation.tagcheckbox 
                    header="Style" 
                    titles="Budget mid-range luxury family-friendly business romantic"
                />

                <x-accommodation.tagcheckbox 
                    header="Hotel Rank" 
                    titles="4-Star 3-Star 2-Star"
                />
                
            </fieldset>         
            <button type="submit" class=" self-end px-10 py-3 mt-10 text-xl text-black hover:bg-green-900 ml-auto bg-green-400 rounded-lg hover:scale-105 transition-all transition-ease-in-out duration-500 ">
                Add Accommodation
            </button>
        </form>
    </div>
   
    </section>

</x-layout2>
