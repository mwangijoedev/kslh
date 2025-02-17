<x-layout>
    <div class="p-4 mb-10 w-full h-full bg-white/60 rounded-md border border-transparent 
     hover:border-blue-600 hover:bg-white/5 transition-all duration-700 group">
        <div class="flex-col items-center">
            <div>
                <div class="font-bold text-gray-700 text-4xl mb-4">
                    <p>{{$user->employer->name}}</p>
                </div>
                <div>
                    <x-employer-logo :employer="$user->employer" size="max"/>
                </div>
                
            </div>
            <div class="text-black group-hover:text-white transition-all duration-700">
                <div class="mt-5 font-bold ">Your Details:</div>
                <x-forms.form action="/profile/{{$user->id}}/edit" method="POST">
                @method('PATCH')
                    <x-forms.input name="name" label="Name" type="text" value="{{$user->name}}"/>
                    <x-forms.input name="email" label="Email" type="email" value="{{$user->email}}"/>
                    <x-forms.input name="password" label="Password" type="password"/>
                    <x-forms.input name="password_confirmation" label="Password Confirmation" type="password"/>
                    <x-forms.divider/>
                    <x-forms.button type="submit">Change</x-forms.button>
                </x-forms.form>
            </div>
            </div>
    </div>


</x-layout>