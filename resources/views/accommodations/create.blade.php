<x-layout1>
<form method="POST" action="{{ route('accommodation.store') }}" class="pl-20 pt-20 bg-teal-950/40">
    @csrf
    {{-- Navigation --}}
    <nav aria-label="Breadcrumb" class="font-audiowide text-center">
      <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 sm:px-6 lg:max-w-7xl lg:px-8">
        <li>
          <!-- standard home -->
          <div class="flex items-center">
            <a href="/" class="mr-2 text-sm font-medium text-gray-900">Home</a>
            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
              <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
            </svg>
          </div>
        </li>
        <li>
          <div class="flex items-center">
            <a href="/accommodation/5" class="mr-2 text-sm font-medium text-gray-900">Available Now</a>
            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
              <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
            </svg>
          </div>
        </li>
        <li class="text-sm">
          <a href="/accommodations/create" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">Create</a>
        </li>
      </ol>
    </nav>
    {{-- Header --}}
  <div class="space-y-12">
      <div class="border-b border-gray-900/10">
        <h2 class="text-base/7 font-semibold text-gray-900 my-2 ">Add an Accommodation Package</h2>
        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4 grid grid-rows-2">
            {{-- Name --}}
            <div class="col-span-full">
              <label for="name" class="block text-sm/6 font-medium text-gray-900">Package Name</label>
              <div class="mt-2">
                <div class=" w-1/2 flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                  <div class="shrink-0 text-base text-gray-500 select-none px-3 sm:text-sm/6">eg. Valentine Pack</div>
                  <input type="text" name="name" id="name" autocomplete="name" class=" w-1/2 min-w-0 grow py-1.5  pr-3 pl-5 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Enter Package Name">
                </div>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
              </div>
            </div>
            {{-- Price & Currency--}}
            <div class="col-span-full">
              <label for="price" class="block text-sm/6 font-medium text-gray-900">Price</label>
              <div class="mt-2">
                <div class="w-1/2 flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                  <div class="shrink-0 text-base text-gray-500 select-none px-3 sm:text-sm/6">eg. 540</div>
                  <input type="number" name="price" id="price" step="0.01" min="0" autocomplete="price" class="block min-w-0 grow py-1.5 pr-3 pl-5 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Enter Package Price">
                </div>
                <x-input-error :messages="$errors->get('price')" class="mt-2" />
                <div class="w-1/2 mt-2 grid grid-cols-1">
                  <select id="currency" name="currency" autocomplete="currency" class="appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    <option value="USD">USD ($)</option>
                    <option value="EUR">EUR (€)</option>
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
              <label for="dates" class="block text-sm/6 font-medium text-gray-900">Availablity</label>
              <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                <div class="shrink-0 text-base text-gray-500 select-none px-3 sm:text-sm/6">From</div>
                <input type="date" name="from" id="from" autocomplete="from" class="block min-w-0 grow py-1.5 pr-3 pl-5 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Enter Package Name">
              </div>
              <x-input-error :messages="$errors->get('from')" class="mt-2" />
            </div>
            <div class="mt-2 w-1/2">
              <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                <div class="shrink-0 text-base text-gray-500 select-none px-3 sm:text-sm/6">to</div>
                <input type="date" name="to" id="to" autocomplete="to" class="block min-w-0 grow py-1.5 pr-3 pl-5 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Enter Package Name">
              </div>
              <x-input-error :messages="$errors->get('to')" class="mt-2" />
            </div>
          </div>
          {{-- description --}}
          <div class="col-span-full">
            <label for="description" class="block text-sm/6 font-medium text-gray-900">Package Description ( 2000 words )</label>
            <div class="mt-2">
              <textarea name="description" id="description" rows="2" autocomplete="description" class="block w-1/2 rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
              <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>
          </div>
        {{-- Itenary --}}
          <div class="col-span-full">
              <div class="sm:col-span-3">
                <label for="description" class="block text-sm/6 font-medium text-gray-900">3-Day Itenary</label>
                <div class="mt-2">
                <textarea name="day1" id="day1" rows="2" class=" w-1/2 rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                </div>
                <x-input-error :messages="$errors->get('itenary')" class="mt-2" />
              </div>
          </div>
  </div>

  <div class="mt-6 mb-20 w-1/2 flex items-center justify-end gap-x-6">
    <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
</div>
</form>

</div>
</x-layout1>
