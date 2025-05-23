<div>
      <livewire:breadcrumb-component/>
    <header>
      <h2 class="text-gray-300 my-2 text-4xl text-center font-audiowide ">CREATE AN EVENT</h2>
    </header>
   <div class="md:mx-30 md:mb-20 rounded-sm bg-gray-950 h-screen">
      <form wire:submit.prevent="save" wire:confirm="Save This Event ?" class="md:mb-20 p-5 glass bg-gray-950 h-screen overflow-scroll no-scrollbar" enctype="multipart/form-data" >
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
                  {{-- Varieties --}}
                  <div class="col-span-full">
                      <div class="w-full mt-2 grid grid-cols-1">
                      <label for="varieties" class="text-xs text-gray-300 mb-2">Event Varieties ( Collon separated ':')</label>
                      <textarea name="varieties" id="varieties" rows="2" autocomplete="varieties" class="rounded-md bg-gray-100/20 px-3 py-1.5 text-base text-black placeholder:text-gray-400 focus:outline-none sm:text-sm/6"></textarea>
                      <x-input-error :messages="$errors->get('varieties')" class="mt-2" />
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
               {{-- Category --}}
                  <div class="col-span-full">
                      <div class="w-full mt-2 grid grid-cols-1">
                      <label for="categories" class="text-xs text-gray-300 mb-2">Event Categories ( Comma separated ',')</label>
                      <textarea name="categories" id="categories" rows="2" autocomplete="categories" class="rounded-md bg-gray-100/20 px-3 py-1.5 text-base text-black placeholder:text-gray-400 focus:outline-none sm:text-sm/6"></textarea>
                      <x-input-error :messages="$errors->get('categories')" class="mt-2" />
                      </div>
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
          <div class=" absolute right-0 sm:grid sm:grid-cols-2 sm:gap-4 mt-1 w-1/2 pl-10 flex flex-col justify-between items-center space-y-4 ">
                <div class="col-span-1">
                <button type="submit"
                    class="px-4 bg-blue-950 text-white font-semibold hover:bg-white/50 hover:text-black
                        transition-all ease-in-out duration-200 text-xs px-12 py-2 mt-4 rounded-md">
                        Save
                </button>
                </div>
                <div class="col-span-1">
                <a href="/dashboard" wire:navigate class="px-4 bg-red-500 text-black font-semibold hover:bg-red-800 hover:text-black
                        transition-all ease-in-out duration-200 text-xs px-12 py-2 rounded-md">Cancel</a>
                </div>
            </div>
            <div class="absolute right-50 mt-15">
                <a wire:navigate href="/create-hotel"
                    class="mt-5 inline-flex items-center px-4 py-2 border border-indigo-500 
                    text-indigo-300 hover:bg-indigo-600 hover:text-white text-sm font-medium 
                    rounded-md transition duration-300">
                        create hotel &rarr;
                </a>
            </div>
      </form>
    </div>
</div>
