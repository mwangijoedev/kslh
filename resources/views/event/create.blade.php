<x-layout1>
     <nav aria-label="Breadcrumb" class="text-xs text-center">
      <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 lg:max-w-7xl ">
        <li>
          <!-- standard home -->
          <div class="flex items-center">
            <a href="/hotel/create" class="mr-2 text-sm font-medium text-gray-500">Hotel</a>
            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
              <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
            </svg>
          </div>
        </li>
        <li>
          <div class="flex items-center">
            <a href="/room/create" class="mr-2 text-sm font-medium text-gray-500">Rooms</a>
            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
              <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
            </svg>
          </div>
        </li>
        <li>
          <div class="flex items-center">
            <a href="/restaurant/create" class="mr-2 text-sm font-medium text-gray-500">Restaurant</a>
            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
              <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
            </svg>
          </div>
        </li>
        <li>
          <div class="flex items-center">
            <a href="/hall/create" class="mr-2 text-sm font-medium text-gray-500">Conference Hall</a>
            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
              <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
            </svg>
          </div>
        </li>
        <li>
          <div class="flex items-center">
            <a href="/bar/create" class="mr-2 text-sm font-medium text-gray-500">Bar</a>
            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
              <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
            </svg>
          </div>
        </li>
        <li class="text-sm">
          <a href="/event/create" aria-current="page" class="font-medium text-gray-300 hover:text-gray-600">Event</a>
        </li>
      </ol>
    </nav>
    <header>
      <h2 class="text-gray-300 my-2 text-4xl text-center font-audiowide ">CREATE AN EVENT</h2>
    </header>
   <div class="md:mx-30 md:mb-20 rounded-sm bg-gray-950 h-screen">
      <form method="POST" action="/event/store" class="md:mb-20 p-5 glass bg-gray-950 h-screen overflow-scroll no-scrollbar" enctype="multipart/form-data" >
          @csrf
          <!-- Inputs  -->
      <!--Closure 1 -->   
          <div class="mt-5 grid grid-cols-1 md:grid-cols-2 gap-4">
          <div class=" md:col-span-1">
                  {{-- Name --}}
                  <div class="col-span-full">
                      <div class="w-full mt-2 grid grid-cols-1">
                      <label for="name" class="text-xs text-gray-300 mb-2 ">Event name</label>
                          <input type="text" name="name" id="name" autocomplete="name" class="rounded-md bg-gray-100/20 px-3 py-1.5 text-base text-black placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Catering">
                          <x-input-error :messages="$errors->get('name')" class="mt-2" />
                      </div>
                  </div>
                  {{-- description --}}
                  <div class="col-span-full">
                      <div class="w-full mt-2 grid grid-cols-1">
                      <label for="description" class="text-xs text-gray-300 mb-2">Event Description ( 2000 words max )</label>
                      <textarea name="description" id="description" rows="2" autocomplete="description" class="rounded-md bg-gray-100/20 px-3 py-1.5 text-base text-black placeholder:text-gray-400 focus:outline-none sm:text-sm/6"></textarea>
                      <x-input-error :messages="$errors->get('description')" class="mt-2" />
                      </div>
                  </div>
                  {{-- Image1 --}}
                  <div class="col-span-full">
                      <div class="w-full mt-2 grid grid-cols-1">
                          <label for="image1" class="text-sm text-gray-300 ">Upload Event Image (left)</label>
                              <div class="mt-2">
                              <input type="file" name="image1" id="image1" accept="image/*"
                                  class="block rounded-md bg-gray-100/20 grow px-4 py-1.5 text-base text-gray-black outline-1 -outline-offset-1 outline-gray-300 file:mr-4 file:py-1.5 file:px-4 file:rounded-md file:border-0 file:bg-indigo-600 file:text-white hover:file:bg-indigo-700 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"/>
                              </div>
                          <x-input-error :messages="$errors->get('image1')" class="mt-2" />
                      </div>
                  </div>
                  {{-- Image2 --}}
                  <div class="col-span-full">
                      <div class="w-full mt-2 grid grid-cols-1">
                          <label for="image2" class="text-sm text-gray-300 ">Upload Event Image (Middle)</label>
                              <div class="mt-2">
                              <input type="file" name="image2" id="image2" accept="image/*"
                                  class="block rounded-md bg-gray-100/20 grow px-4 py-1.5 text-base text-gray-black outline-1 -outline-offset-1 outline-gray-300 file:mr-4 file:py-1.5 file:px-4 file:rounded-md file:border-0 file:bg-indigo-600 file:text-white hover:file:bg-indigo-700 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"/>
                              </div>
                          <x-input-error :messages="$errors->get('image2')" class="mt-2" />
                      </div>
                  </div>
                
          </div>
      <!-- Closure 2 -->
          <div class="md:col-span-1">
              {{-- Image3 --}}
                  <div class="col-span-full">
                      <div class="w-full mt-2 grid grid-cols-1">
                          <label for="image" class="text-sm text-gray-300 ">Upload Event Image (Right)</label>
                              <div class="mt-2">
                              <input type="file" name="image3" id="image3" accept="image/*"
                                  class="block rounded-md bg-gray-100/20 grow px-4 py-1.5 text-base text-gray-black outline-1 -outline-offset-1 outline-gray-300 file:mr-4 file:py-1.5 file:px-4 file:rounded-md file:border-0 file:bg-indigo-600 file:text-white hover:file:bg-indigo-700 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"/>
                              </div>
                          <x-input-error :messages="$errors->get('image3')" class="mt-2" />
                      </div>
                  </div>
              {{--Service Tag --}}
              <div class="col-span-full">
                  <div class=" w-full mt-2 grid grid-cols-1">
                      <label for="service_tag" class="text-xs text-gray-300  mb-2">Service Type</label>
                      <select name="service_tag" id="service_tag" class="rounded-md bg-gray-100/20 px-3 py-1.5 text-base text-black placeholder:text-gray-400 focus:outline-none sm:text-sm/6">
                      <option value="">--Select Service Type--</option>
                      <option value="event">Event Service</option>
                      </select>
                  </div>
                  <x-input-error :messages="$errors->get('service_tag')" class="mt-2" />
              </div>
              {{-- Event type --}}
              <div class="col-span-full">
                  <div class=" w-full mt-2 grid grid-cols-1">
                      <label for="type" class="text-xs text-gray-300  mb-2">Event Type</label>
                      <select name="type" id="type" class="rounded-md bg-gray-100/20 px-3 py-1.5 text-base text-black placeholder:text-gray-400 focus:outline-none sm:text-sm/6">
                      <option value="">--Select Event Type--</option>
                      <option value="function">Function</option>
                      <option value="recreation">Recreation</option>
                      <option value="entertainment">Entertainment</option>
                      </select>
                  </div>
                  <x-input-error :messages="$errors->get('type')" class="mt-2" />
              </div>
              {{-- Hotel Tag --}}
              <div class="col-span-full">
                  <div class=" w-full mt-2 grid grid-cols-1">
                      <label for="hotel_tag" class="text-xs text-gray-300  mb-2">Hotel Tag</label>
                      <select name="hotel_tag" id="hotel_tag" class="rounded-md bg-gray-100/20 px-3 py-1.5 text-base text-black placeholder:text-gray-400 focus:outline-none sm:text-sm/6">
                      <option value="">--Choose a Hotel Tag--</option>
                      <option value="mombasa">Mombassa Beach Hotel</option>
                      <option value="voi">Voi Safari Lodge</option>
                      <option value="ngulia">Ngulia Safari Lodge</option>
                      </select>
                  </div>
                  <x-input-error :messages="$errors->get('hotel_tag')" class="mt-2" />
              </div>
          </div>
          </div>
          <!-- submit button  -->
          <div class=" absolute right-0 sm:grid sm:grid-cols-2 sm:gap-4 mt-1o w-1/2 pl-10 flex flex-col justify-between items-center space-y-4 ">
          <div class="col-span-1">
              <button type="submit" 
              class="px-4 bg-blue-950 text-white font-semibold hover:bg-white/50 hover:text-black
                  transition-all ease-in-out duration-200 text-xs px-12 py-2 mt-5 rounded-md">
                  Save
              </button>
          </div>
          <div class="col-span-1">
              <a href="/dashboard" class="px-4 bg-red-500 text-black font-semibold hover:bg-red-800 hover:text-black
                  transition-all ease-in-out duration-200 text-xs px-12 py-2 rounded-md">Cancel</a>
          </div>
          </div>
      </form>
    </div>
</x-layout1>
