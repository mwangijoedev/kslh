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
          <a href="/create" aria-current="page" class="font-medium text-gray-300 hover:text-gray-600">Create</a>
        </li>
      </ol>
    </nav>
    <header>
      <h2 class="text-gray-300 my-2 text-4xl text-center font-audiowide ">CREATE A NEW PACKAGE</h2>
    </header>

  <form method="POST" action="/accommodation/store" class="pl-40 glass mx-30 h-screen overflow-scroll no-scrollbar" enctype="multipart/form-data" >
      @csrf
    <div class="space-y-12">
        <div class="border-b border-gray-900/10">
          <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
            <div class="sm:col-span-4 grid grid-rows-2">
              {{-- Name --}}
              <div class="col-span-full">
                <label for="name" class="text-xs text-gray-300 font-bold ">Package Name</label>
                <div>
                  <input type="text" name="name" id="name" autocomplete="name" class="block w-1/2 rounded-md bg-amber-100 px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Enter Package Name">
                  <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
              </div>
              {{-- Price & Currency--}}
              <div class="col-span-full">
                <label for="price" class="text-xs text-gray-300 font-bold">Price</label>
                <div class="mt-1">
                  <div class="w-1/2 flex items-center rounded-md bg-white pl-3">
                    <div class="shrink-0 text-base text-gray-500 select-none px-3 sm:text-sm/6">eg. 540</div>
                    <input type="number" name="price" id="price" step="0.01" min="0" autocomplete="price" class="block min-w-0 grow py-1.5 pr-3 pl-5 
                                  text-base text-gray-900 placeholder:text-gray-400 focus:outlin-none bg-amber-100 sm:text-sm/6" placeholder="Enter Package Price">
                  </div>
                  <x-input-error :messages="$errors->get('price')" class="mt-2" />
                  <div class="w-1/2 mt-2 grid grid-cols-1">
                    <select id="currency" name="currency" autocomplete="currency" class="appearance-none rounded-md bg-amber-100 py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                      <option value="USD">USD ($)</option>
                      <option value="KES">KES (Ksh)</option>
                    </select>
                      <x-input-error :messages="$errors->get('currency')" class="mt-2" />
                  </div>
                </div>
              </div>
            </div>
            {{-- Availability  --}}
            <div class="col-span-full">
              <div class="mt-2 w-1/2">
                <label for="dates" class="text-xs text-gray-300 font-bold">Availablity</label>
                <div class="flex items-center rounded-md bg-white pl-3">
                  <div class="shrink-0 text-base text-gray-500 select-none px-3 sm:text-sm/6">From</div>
                  <input type="date" name="from" id="from" autocomplete="from" class="block min-w-0 grow py-1.5 pr-3 pl-5 bg-amber-100 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Enter Package Name">
                </div>
                <x-input-error :messages="$errors->get('from')" class="mt-2" />
              </div>
              <div class="mt-2 w-1/2">
                <div class="flex items-center rounded-md bg-white pl-3">
                  <div class="shrink-0 text-base text-gray-500 select-none px-3 sm:text-sm/6">to</div>
                  <input type="date" name="to" id="to" autocomplete="to" class="block min-w-0 grow py-1.5 pr-3 pl-5 bg-amber-100 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Enter Package Name">
                </div>
                <x-input-error :messages="$errors->get('to')" class="mt-2" />
              </div>
            </div>
            {{-- description --}}
            <div class="col-span-full">
              <label for="description" class="text-xs text-gray-300 font-bold">Package Description ( 2000 words )</label>
              <div class="mt-2">
                <textarea name="description" id="description" rows="2" autocomplete="description" class="block w-1/2 rounded-md bg-amber-100 px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
              </div>
            </div>
          {{-- Itenary --}}
            <div class="col-span-full">
                <div class="sm:col-span-3">
                  <label for="description" class="text-xs text-gray-300 font-bold">3-Day Itenary</label>
                  <div class="mt-2">
                  <textarea name="day1" id="day1" rows="2" class=" w-1/2 rounded-md bg-amber-100 px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                  </div>
                  <x-input-error :messages="$errors->get('itenary')" class="mt-2" />
                </div>
            </div>
            {{-- Hotel Tag --}}
      <div class="col-span-full">
        <div class="sm:col-span-3">
          <label for="tag" class="text-xs text-gray-300 font-bold">Hotel Tag</label>
            <div class="mt-2">
              <select name="tag" id="tag" class="w-1/2 rounded-md bg-amber-100 px-3 py-1.5 text-base 
                      text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 
                      focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                <option value="">-- Choose a Hotel-Tag --</option>
                <option value="mombasa">Mombassa Beach Hotel</option>
                <option value="voi">Voi Safari Lodge </option>
                <option value="ngulia">Ngulia Safari Lodge</option>
              </select>
            </div>
          <x-input-error :messages="$errors->get('location')" class="mt-2" />
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
