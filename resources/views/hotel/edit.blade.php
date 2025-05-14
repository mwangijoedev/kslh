<x-layout1>
     <nav aria-label="Breadcrumb" class="text-xs text-center">
      <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 lg:max-w-7xl ">
        <li>
          <!-- standard home -->
          <div class="flex items-center">
            <a href="/" class="mr-2 text-sm font-medium text-gray-500">Home</a>
            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
              <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
            </svg>
          </div>
        </li>
        <li>
          <div class="flex items-center">
            <a href="/dashboard" class="mr-2 text-sm font-medium text-gray-500">Available Now</a>
            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
              <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
            </svg>
          </div>
        </li>
        <li class="text-sm">
          <a href="/create" aria-current="page" class="font-medium text-gray-300 hover:text-gray-600">Create Hotel</a>
        </li>
      </ol>
    </nav>
    <header>
      <h2 class="text-gray-300 my-2 text-4xl text-center font-audiowide ">EDIT HOTEL INFO</h2>
    </header>

  <form method="POST" action="/hotel/store" class="relative pl-40 glass mx-30 h-screen overflow-scroll no-scrollbar" enctype="multipart/form-data">
      @csrf
    <div class="space-y-12 absolute top-0 left-10 right-0 bottom-0">
        <div class="border-b border-gray-900/10">
          <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
              {{-- Name --}}
              <div class="col-span-full grow">
                <label for="name" class="text-xs text-gray-300 font-bold ">Hotel Name</label>
                <div>
                  <input type="text" name="name" id="name" class="block w-1/2 rounded-md bg-amber-100 px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Enter Hotel Name">
                  <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
              </div>
            {{-- Description --}}
            <div class="col-span-full">
              <label for="description" class="text-xs text-gray-300 font-bold">Hotel Description ( 2000 words )</label>
              <div class="mt-2">
                <textarea name="description" id="description" rows="2" autocomplete="description" class="block w-1/2 rounded-md bg-amber-100 px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
              </div>
            </div>
            {{-- Image --}}
            <div class="col-span-full">
                <div class="sm:col-span-3">
                    <label for="image" class="text-xs text-gray-300 font-bold">Upload Hotel Image</label>
                        <div class="mt-2">
                        <input 
                            type="file" 
                            name="image" 
                            id="image" 
                            accept="image/*"
                            class="block w-1/2 rounded-md bg-amber-100 px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 file:mr-4 file:py-1.5 file:px-4 file:rounded-md file:border-0 file:bg-indigo-600 file:text-white hover:file:bg-indigo-700 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                        />
                        </div>
                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                </div>
            </div>

          {{-- Highlights --}}
            <div class="col-span-full">
                <div class="sm:col-span-3">
                  <label for="description" class="text-xs text-gray-300 font-bold">Hotel Highlights (Comma Separated)</label>
                  <div class="mt-2">
                  <textarea name="highlights" id="highlights" rows="2" class=" w-1/2 rounded-md bg-amber-100 px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                  </div>
                  <x-input-error :messages="$errors->get('itenary')" class="mt-2" />
                </div>
            </div>
             {{-- Location --}}
              <div class="col-span-full">
                <label for="location" class="text-xs text-gray-300 font-bold ">Location</label>
                <div>
                  <input type="location" name="location" id="location" autocomplete="location" class="block w-1/2 rounded-md bg-amber-100 px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Enter Hotel Location">
                  <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
              </div>
            </div>
    </div>

    <div class="mt-6 mb-20 w-1/2 flex items-center justify-end gap-x-6">
      <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
      <button type="submit" class="px-4 bg-amber-900 
                                                                  text-white 
                                                                  font-bold
                                                                  hover:bg-amber-800
                                                                  hover:text-gray-900
                                                                  hover:scale-105
                                                                  transition-all ease-in-out duration-200
                                                                  text-xs
                                                                  px-8 py-2
                                                                  rounded-md">Save</button>
    </div>
  </div>
  </form>


</x-layout1>
