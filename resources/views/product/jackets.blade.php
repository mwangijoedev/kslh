@props(['jackets'])
<x-layout2>
     <header class="m-10">
            <h2 class="text-4xl font-bold text-green-600 ">Rock a Mkuru-Jacket</h2>
            <p class="mt-4 text-gray-600">From Draco to you !</p>
        </header>
    <div class="grid grid-cols-1 medium2:grid-cols-2 gap-12 ">
    @foreach ($jackets as $jacket )
        <div class=" max-w-[500px] px-[10px] text-white flex flex-col sm:flex-row  justify-evenly items-center border border-blue-900 rounded-lg mx-5 hover:scale-105 hover:bg-white hover:bg-opacity-[50] transform-all duration-500 ease-in-out group " id="main">
                <div class="p-2">
                    <div id="image" class="inline-flex px-[100px] py-[100px] bg-cover bg-center rounded-lg overflow-hidden group-hover:shadow-2xl group-hover:shadow-[black] transition-all duration-500 ease-in-out" style="background-image: url('{{asset($jacket->itempath)}}');" >
                      
                    </div>
                </div>

            <div class="p-4 flex flex-col " id="name & description">
                <div class=" px-[20px] rounded-xl text-2xl font-bold text-gray-700 group-hover:shadow-lg group-hover:shadow-[black] transition-all duration-500 ease-in-out " id="name" >
                    <p>{{$jacket->name}}</p>
                </div>
                <div class="flex flex-col p-4 text-green-400 group-hover:font-bold " id="description">
                    <p class="text-sm" >{{$jacket->size}}</p>
                    <p>{{$jacket->cost}}</p>
                </div>
                <button class="bg-green-700 self-end text-black px-[30px] text-center rounded-lg hover:scale-110 hover:bg-green-400 transition-all duration-500 ease-in-out ">
                    Buy 
                </button>                
            </div>
        </div>
    @endforeach
</div>
</x-layout2>