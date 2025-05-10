<x-layout1>
    <div class=" relative min-h-screen flex flex-col sm:justify-center items-center sm:pt-0 bg-no-repeat bg-cover bg-center top-0 rounded-lg " style="background-image: url('{{ Vite::asset('resources/images/beach.jpg') }}');" >

        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class=" absolute top-0 left-0 right-0 bottom-0 min-h-screen flex flex-col z-5 sm:justify-center items-center sm:pt-0 bg-no-repeat bg-cover bg-center rounded-lg " style="background-image: url('{{ Vite::asset('resources/images/hut.jpg') }}');" >
        <div class=" w-full sm:max-w-md mt-6 px-6 py-4 glass shadow-xl overflow-hidden  sm:rounded-lg">
            <p class="text-4xl text-center text-amber-950">Preferences</p>
            <form method="POST" action="{{ route('login') }}" class=" z-3 " >
                @csrf
                <!-- Booking Preference -->
                <div>
                    <x-input-label for="pricing" class=" font-audiowide " :value="__('pricing')" />
                    <x-text-input id="pricing" class="block mt-1 w-full" type="number" name="pricing" :value="old('pricing')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('pricing')" class="mt-2" />
                </div>
                <!-- Prefered Destination -->
                <div class="mt-4">
                    <x-input-label for="destination" class=" font-audiowide " :value="__('destination')" />
                    <x-text-input id="destination" class="block mt-1 w-full"
                            type="select"
                            name="destination"
                            required autocomplete="current-destination">
                        <option value="Mombasa">Mombasa</option>
                        <option value="Ngulia">Ngulia</option>
                        <option value="Voi">Voi</option>
                    </x-text-input>    
                    <x-input-error :messages="$errors->get('destination')" class="mt-2" />
                    {{-- Step input --}}
                    <input type="number" name="step2" id="step2" value="2" hidden>
                </div>
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ms-3">
                        {{ __('Finish') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
    </div>
</x-layout1>