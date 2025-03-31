<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KSLH Packages</title>
   @vite('resources/css/app.css', 'resources/js/app.js')
</head>
<body>
<nav aria-label="Breadcrumb" class="pt-6 font-audiowide ">
  <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
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
      <!-- package category (ngulia, voi, mombasa) -->
      <div class="flex items-center">
        <a href="/accommodation/5" class="mr-2 text-sm font-medium text-gray-900">Available accommodations</a>
        <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
          <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
        </svg>
      </div>
    </li>
    <li>
      <!-- package name ->current page -->
    <li class="text-sm">
      <a href="/accommodations/create" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">Create Accommodation</a>
    </li>
  </ol>
</nav>
<form method="POST" action="{{ route('accommodation.store') }}" class="p-20" >
    @csrf
  <div class="space-y-12">
      <div class="border-b border-gray-900/10">
        <h2 class="text-base/7 font-semibold text-gray-900 my-2 ">Add an Accommodation Package</h2>

        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4 grid grid-rows-2">
            <div class="">
              <label for="name" class="block text-sm/6 font-medium text-gray-900">Package Name</label>
              <div class="mt-2">
                <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                  <div class="shrink-0 text-base text-gray-500 select-none px-3 sm:text-sm/6">eg. Valentine Pack</div>
                  <input type="text" name="name" id="name" autocomplete="name" class="block min-w-0 grow py-1.5  pr-3 pl-5 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Enter Package Name">
                </div>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
              </div>
            </div>
            
            <div class="">
              <label for="price" class="block text-sm/6 font-medium text-gray-900">Price</label>
              <div class="mt-2">
                <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                  <div class="shrink-0 text-base text-gray-500 select-none px-3 sm:text-sm/6">eg. 540</div>
                  <input type="number" name="price" id="price" step="0.01" min="0" autocomplete="price" class="block min-w-0 grow py-1.5 pr-3 pl-5 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Enter Package Price">
                </div>
                <x-input-error :messages="$errors->get('price')" class="mt-2" />
                <div class="mt-2 grid grid-cols-1">
                  <select id="currency" name="currency" autocomplete="currency" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    <option value="USD">USD ($)</option>
                    <option value="EUR">EUR (€)</option>
                    <option value="KES">KES (Ksh)</option>
                  </select>
                    <x-input-error :messages="$errors->get('currency')" class="mt-2" />
                </div>
              </div>
            </div>
          </div>

          <div class="sm:col-span-4 grid grid-rows-3 gap-3 sm:gap-3 sm:grid-cols-3 ">
            <label for="dates" class="block text-sm/6 font-medium text-gray-900">Available Dates</label>
            <div class="mt-2">
              <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                <div class="shrink-0 text-base text-gray-500 select-none px-3 sm:text-sm/6">From</div>
                <input type="date" name="from" id="from" autocomplete="from" class="block min-w-0 grow py-1.5 pr-3 pl-5 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Enter Package Name">
              </div>
              <x-input-error :messages="$errors->get('from')" class="mt-2" />
            </div>
            <div class="mt-2">
              <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                <div class="shrink-0 text-base text-gray-500 select-none px-3 sm:text-sm/6">to</div>
                <input type="date" name="to" id="to" autocomplete="to" class="block min-w-0 grow py-1.5 pr-3 pl-5 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Enter Package Name">
              </div>
              <x-input-error :messages="$errors->get('to')" class="mt-2" />
            </div>

          </div>

          <div class="col-span-full">
            <label for="description" class="block text-sm/6 font-medium text-gray-900">Package Description ( 2000 words )</label>
            <div class="mt-2">
              <textarea name="description" id="description" rows="2" autocomplete="description" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
              <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>
            <p class="mt-3 text-sm/6 text-gray-600">Briefly describe this package</p>
          </div>

          <div class="col-span-2 sm:col-span-full grid sm:grid-cols-3 sm:gap-2">
            <!-- primary_photo  -->
            <div class="col-span-1 ">
              <label for="primary_photo" class="block text-sm/6 font-medium text-gray-900">Primary Destination photo</label>
              <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-4 py-6">
                <div class="text-center">
                  <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                    <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
                  </svg>
                  <div class="mt-4 flex text-sm/6 text-gray-600">
                    <label for="primary_photo" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                      <span>Upload a file</span>
                      <input id="primary_photo" name="primary_photo" type="file" class="sr-only">
                    </label>
                    <p class="pl-1">or drag and drop</p>
                  </div>
                  <p class="text-xs/5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                </div>
                <x-input-error :messages="$errors->get('primary_photo')" class="mt-2" />
              </div>
            </div>
            <!-- secondary_photo   -->
            <div class="col-span-1">
              <label for="secondary_photo" class="block text-sm/6 font-medium text-gray-900">Secondary photo</label>
              <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-4 py-6">
                <div class="text-center">
                  <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                    <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
                  </svg>
                  <div class="mt-4 flex text-sm/6 text-gray-600">
                    <label for="secondary_photo" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                      <span>Upload a file</span>
                      <input id="secondary_photo" name="secondary_photo" type="file" class="sr-only">
                    </label>
                    <p class="pl-1">or drag and drop</p>
                  </div>
                  <p class="text-xs/5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                </div>
              </div>
              <x-input-error :messages="$errors->get('secondary_photo')" class="mt-2" />
            </div>
            <!-- secondary_photo2   -->
            <div class="col-span-1">
              <label for="cover-photo" class="block text-sm/6 font-medium text-gray-900"> Secondary photo (2)</label>
              <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-4 py-6">
                <div class="text-center">
                  <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                    <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
                  </svg>
                  <div class="mt-4 flex text-sm/6 text-gray-600">
                    <label for="secondary_photo2" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                      <span>Upload a file</span>
                      <input id="secondary_photo2" name="secondary_photo2" type="file" class="sr-only">
                    </label>
                    <p class="pl-1">or drag and drop</p>
                  </div>
                  <p class="text-xs/5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                </div>
              </div>
              <x-input-error :messages="$errors->get('secondary_photo2')" class="mt-2" />
            </div>  
          </div> 
              
        </div>
      </div>

        <h2 class="text-base/7 font-semibold text-gray-900"></h2>
        <p class="mt-1 text-sm/6 text-gray-600">Add daily Itinerary for the first 3 days</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-3">
              <label for="first-name" class="block text-sm/6 font-medium text-gray-900">Day 1</label>
              <div class="mt-2">
              <textarea name="day1" id="day1" rows="1" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
              </div>
              <x-input-error :messages="$errors->get('day1')" class="mt-2" />
            </div>

            <div class="sm:col-span-3">
              <label for="last-name" class="block text-sm/6 font-medium text-gray-900">Day 2</label>
              <div class="mt-2">
              <textarea name="day2" id="day2" rows="1" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
              </div>
              <x-input-error :messages="$errors->get('day2')" class="mt-2" />
            </div>

            <div class="sm:col-span-4">
              <label for="email" class="block text-sm/6 font-medium text-gray-900">Day 3</label>
              <div class="mt-2">
              <textarea name="day3" id="day3" rows="1" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
              </div>
              <x-input-error :messages="$errors->get('day3')" class="mt-2" />
            </div>
        </div>


        <p class="mt-1 text-sm/6 text-gray-600 pt-10 ">Package Inclusions and Exclusions</p>
        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="package_inclusions" class="block text-sm/6 font-medium text-gray-900">Inclusions</label>
            <p id="comments-description" class="text-gray-500 text-sm">Each option Should be comma separated.</p>
            <div class="mt-2">
            <textarea name="package_inclusions" id="package_inclusions" rows="1" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
            </div>
            <x-input-error :messages="$errors->get('package_inclusions')" class="mt-2" />
          </div>

          <div class="sm:col-span-3">
            <label for="package_exclusions" class="block text-sm/6 font-medium text-gray-900">Exclusions</label>
            <p id="comments-description" class="text-gray-500 text-sm ">Each option Should be comma separated.</p>
            <div class="mt-2">
            <textarea name="package_exclusions" id="package_exclusions" rows="1" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
            </div>
            <x-input-error :messages="$errors->get('package_exclusions')" class="mt-2" />
          </div>

          <div class="sm:col-span-3 pt-10">
            <label for="package_type" class="block text-sm/6 font-medium text-gray-900">Package Type</label>
            <div class="mt-2 grid grid-cols-1">
              <select id="package_type" name="package_type" autocomplete="country-name" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                <option>Luxury</option>
                <option>Beach Resort</option>
                <option>Budget Stay</option>
                <option>Tented Camp</option>
              </select>
            </div>
            <x-input-error :messages="$errors->get('package_type')" class="mt-2" />
          </div>

          <div class="col-span-full">
            <label for="street-address" class="block text-sm/6 font-medium text-gray-900">Highlight 1</label>
            <div class="mt-2">
              <input type="text" name="highlight1" id="highlight1" autocomplete="highlight" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
            </div>
            <x-input-error :messages="$errors->get('highlight1')" class="mt-2" />          
          </div>

          <div class="sm:col-span-2 sm:col-start-1">
            <label for="city" class="block text-sm/6 font-medium text-gray-900">Highlight 2</label>
            <div class="mt-2">
              <input type="text" name="highlight2" id="highlight2" autocomplete="address-level2" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
            </div>
            <x-input-error :messages="$errors->get('highlight2')" class="mt-2" />
          </div>

          <div class="sm:col-span-2">
            <label for="region" class="block text-sm/6 font-medium text-gray-900">Highlight 3</label>
            <div class="mt-2">
              <input type="text" name="highlight3" id="highlight3" autocomplete="address-level1" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
            </div>
            <x-input-error :messages="$errors->get('highlight3')" class="mt-2" />
          </div>

          <div class="sm:col-span-2">
            <label for="postal-code" class="block text-sm/6 font-medium text-gray-900">Highlight 4</label>
            <div class="mt-2">
              <input type="text" name="highlight4" id="highlight4" autocomplete="postal-code" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
            </div>
            <x-input-error :messages="$errors->get('highlight4')" class="mt-2" />
          </div>
        </div>
  </div>
  
  <!-- code containing featured, offers and restrict checkboxes -->
<!-- 
    <div class="pt-10 border-l pl-3 border-gray-900/10 ">
      <h2 class="text-base/7 font-semibold text-gray-900">Additional&nbsp;information</h2>
      <div class="mt-10 space-y-10">
        <fieldset >
          <legend class="text-sm/6 font-semibold text-gray-900">Featured</legend>
          <div class="mt-6 space-y-6">
            <div class="flex gap-3">
              <div class="flex h-6 shrink-0 items-center">
                <div class="group grid size-4 grid-cols-1">
                  <input id="featured" aria-describedby="featured" name="featured" type="checkbox" checked class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                  <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                    <path class="opacity-0 group-has-checked:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path class="opacity-0 group-has-indeterminate:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <x-input-error :messages="$errors->get('featured')" class="mt-2" />
              </div>
              <div class="text-sm/6">
                <label for="comments" class="font-medium text-gray-900">Featured&nbsp;Package</label>
                <p id="featured" class="text-gray-500">Listed among the featured packages for more trafic.</p>
              </div>
            </div>
            <div class="flex gap-3">
              <div class="flex h-6 shrink-0 items-center">
                <div class="group grid size-4 grid-cols-1">
                  <input id="restrict" aria-describedby="restricted" name="restricted" type="checkbox" class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                  <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                    <path class="opacity-0 group-has-checked:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path class="opacity-0 group-has-indeterminate:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>

              </div>
              <div class="text-sm/6">
                <label for="candidates" class="font-medium text-gray-900">Restrict</label>
                <p id="Restrict-Description" class="text-gray-500">Prevents the Accommodation package from being modified.</p>
              </div>
            </div>
            <div class="flex gap-3">
              <div class="flex h-6 shrink-0 items-center">
                <div class="group grid size-4 grid-cols-1">
                  <input id="offers" aria-describedby="offers" name="offers" type="checkbox" class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                  <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                    <path class="opacity-0 group-has-checked:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path class="opacity-0 group-has-indeterminate:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <x-input-error :messages="$errors->get('offers')" class="mt-2" />
              </div>
              <div class="text-sm/6">
                <label for="offers" class="font-medium text-gray-900">Offers</label>
                <p id="offers-description" class="text-gray-500">Provide a discount for Premium users.</p>
              </div>
            </div>
          </div>
        </fieldset>
      </div>
    </div>
  </div> -->

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
</div>
</form>

</div>
</body>
</html>
