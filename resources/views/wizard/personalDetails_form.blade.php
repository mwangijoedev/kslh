<x-layout1>
    <div class=" relative min-h-screen flex flex-col sm:justify-center items-center sm:pt-0 bg-no-repeat bg-cover bg-center top-0 rounded-lg " style="background-image: url('{{ Vite::asset('resources/images/beach.jpg') }}');" >
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class=" absolute top-0 left-0 right-0 bottom-0 min-h-screen flex flex-col z-5 sm:justify-center items-center sm:pt-0 bg-no-repeat bg-cover bg-center rounded-lg " style="background-image: url('{{ Vite::asset('resources/images/hut.jpg') }}');" >
        <div class=" w-full sm:max-w-md mt-6 px-6 py-4 glass shadow-xl overflow-hidden  sm:rounded-lg">
            <p class="text-4xl text-center text-amber-950">Personal Details</p> {{--Change this to something more welcoming and friendly --}}
            <form method="POST" action="/wizard" class=" z-3 " >
                @csrf
                <!-- Name -->
                <div>
                    <x-input-label for="name" class="font-audiowide " :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="name" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <!-- Number of Kids -->
                <div class="mt-4">
                    <x-input-label for="number_kids" class=" font-audiowide " :value="__('number_kids')" />
                    <x-text-input id="number_kids" class="block mt-1 w-full"
                                    type="number"
                                    name="number_kids"
                                    required autocomplete="number" />
                    <x-input-error :messages="$errors->get('number_kids')" class="mt-2" />
                    {{-- Step input --}}
                    <input type="number" name="step1" id="step1" value="1" hidden>
                </div>
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ms-3">
                        {{ __('Next') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
    </div>
</x-layout1>