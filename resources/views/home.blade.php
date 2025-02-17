<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css', 'resources/js/app.js')
    <title>Wakurugenzi Store</title>
    <link rel="icon" href="{{Vite::asset('resources/images/logo3.png')}}" type="image/x-icon">
    <style>
  .no-scrollbar::-webkit-scrollbar {
    display: none; /* for Chrome, Safari, and Opera */
  }
  .no-scrollbar {
    -ms-overflow-style: none;  /* for Internet Explorer and Edge */
    scrollbar-width: none;  /* for Firefox */
  }
</style>
    
</head>

<body class="bg-black text-gray-900 overflow-auto no-scrollbar bg-cover bg-center">
    <nav class=" z-50 bg-transparent hover:bg-white transition-ease-in-out duration-500 hover:bg-opacity-20 hover:rounded hover:rounded-lg flex justify-between items-center sticky top-0 xsm:flex-col sm:flex-col  md:flex-row ">
        <a href="/" wire:navigate > <div class=" px-10 py-10 bg-transparent bg-cover bg-center" style="background-image: url('{{ Vite::asset('resources/images/logo6.png')}}');" ></div></a>
        <div class="space-x-6 font-bold text-green-400 xs-flex xs:flex-col sm:flex-row">
            <a href="/showproducts" wire:navigate class="hover:text-green-600 transition duration-300">Merch</a>      
            <a href="/tshirts" wire:navigate class="hover:text-green-600 transition duration-300">T-Shirts</a>
            <a href="/sweatshirts" wire:navigate class="hover:text-green-600 transition duration-300">Sweatshirts</a>  
            <a href="/hoodies" wire:navigate class="hover:text-green-600 transition duration-300">Hoodies</a>
            <a href="/jackets" wire:navigate class="hover:text-green-600 transition duration-300">Jackets</a> 
        </div>
        <div class="space-x-6"> 
            @guest    
                <a href="/register" wire:navigate class="text-white px-4 py-2 m-4 rounded-lg hover:bg-green-900 hover:text-black transition duration-300">Sign&nbsp;Up</a> 
            @endguest          
            @auth    
                <form action="/signout" method="post" >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-white px-4 py-2 m-4 rounded-lg hover:bg-green-900 hover:text-black transition duration-300">Sign&nbsp;Out</button>   
                </form>
            @endauth
        </div>
    </nav>   

    <main class="px-8 mb-10">
        <header class="mt-10 sm:mt-1">
            <h2 class="text-4xl font-bold text-green-600 ">You imagine...We create</h2>
            <p class="mt-4 text-gray-600">From Draco to you !</p>
        </header>

 <header id="mkurugenzi.ke" class=" p-10 mt-0 mb-20 flex justify-center items-center xs:flex-col sm:flex-col  md:flex-row rounded-lg bg-transparent hover:scale-95 hover:bg-white hover:bg-opacity-10  transition-all ease-in-out duration-700 group">
        <div class="mt-0">            
            <p class="text-gray-800 text-4xl group-hover:scale-101 group-hover:text-white group-hover:text-3xl transition-all ease-in-out duration-500">
               Welcome to Draco                                                                                                      Store
            </p>
            <p class="text-gray-400 ml-10 text-md group-hover:scale-101 group-hover:text-green-700  transition-all ease-in-out duration-500">
              Straight out the kitchen
            </p>
            <p class="text-gray-400 ml-10 text-md  group-hover:scale-101 group-hover:text-green-700  transition-all ease-in-out duration-500">
             Just hot!!
            </p>
            <form action="/showproducts" method="get">
                @csrf
                <button class="px-10 py-3 mt-10 text-xl text-black hover:bg-green-900 ml-auto bg-green-400 rounded-lg hover:scale-105 transition-all transition-ease-in-out duration-500 ">
                    Shop Now!
                </button>
            </form>
        </div>
         <div class=" ml-auto my-auto  shadow shadow-lg h-screen w-full min-w-[335px] max-h-[470px] max-w-[440px] mt-10 rounded rounded-lg bg-cover bg-center group-hover:scale-101 transition-all ease-in-out duration-500 hover:shadow-lg" style="background-image: url('{{ Vite::asset('resources/images/cover.jpg') }}');">
            <p class="mt-20 ml-6 text-md font-bold text-green-700">UTAFRAIAA...</p>
            <div class="p-8 mt-20">
                <h1 class="text-5xl font-bold text-green-400 group-hover:text-gray-400 transition-ease-in-out duration-500 ">Merch Iko Intact</h1>
            </div>
            
        </div>
 </header>
 
 <section id="mkuru" class="rounded-xl flex flex-cols justify-between bg-cover bg-center mb-10 xs:flex-col sm:flex-col  md:flex-row group" style="background-image: url('{{ Vite::asset('resources/images/paint.png') }}');"  >
 <div class=" ml-auto mb-20  shadow shadow-lg w-full min-w-[435px] max-h-[300px] xs:max-h-[470px] mt-10 rounded rounded-lg" >
            <div class="p-8 mt-5">
                <h1 class="text-5xl font-bold text-gray-200">Qaribu</h1>
                <p class="mt-4 ml-6 text-2xl font-bold text-gray-700">Utafraiaaa...</p>
            </div>
        </div>
        <div class="p-20">
            <p class="text-gray-300 p-20 bg-black bg-opacity-50 rounded-xl shadow-lg group-hover:scale-110 group-hover:bg-opacity-90 transition-all transition-ease-in-out duration-500">
            Elevate your wardrobe with Draco's exclusive collection of polos, jackets, and hoodies, crafted for leaders and trendsetters. Our premium apparel is designed for those who exude confidence and ambition. Stand out, lead the way, and make a bold statement shop at Draco's today and own your style!
        </p>
            <button class="px-10 py-3 mt-10 text-xl text-black hover:bg-green-900 ml-auto bg-green-400 rounded-lg hover:scale-105 transition-all transition-ease-in-out duration-500 ">
                Shop Now!
            </button>
        </div>

        <!-- <div style="background-image: url('{{ Vite::asset('resources/images/logo.png')}}');">
            
        </div> -->
 
        

 </section>
 
 <h2 class="text-4xl font-bold text-green-600 my-20 text-center">Merchandise</h2>
    <section>
    <div class="grid grid-cols-1 medium2:grid-cols-3 gap-12 ">
        @foreach ($products as $product )
            <div class=" max-w-[500px] px-[10px] text-white flex flex-col sm:flex-row  justify-evenly items-center border border-blue-900 rounded-lg mx-5 hover:scale-105 hover:bg-white hover:bg-opacity-[50] transform-all duration-500 ease-in-out group " id="main">
                    <div class="p-2">
                        <div id="image" class="inline-flex px-[100px] py-[100px] bg-cover bg-center rounded-lg overflow-hidden group-hover:shadow-2xl group-hover:shadow-[black] transition-all duration-500 ease-in-out" style="background-image: url('{{asset($product->itempath)}}');" >
                        
                        </div>
                    </div>

                <div class="p-4 flex flex-col " id="name & description">
                    <div class=" px-[20px] rounded-xl text-2xl font-bold text-gray-700 group-hover:shadow-lg group-hover:shadow-[black] transition-all duration-500 ease-in-out " id="name" >
                        <p>{{$product->name}}</p>
                    </div>
                    <div class="flex flex-col p-4 text-green-400 group-hover:font-bold " id="description">
                        <p class="text-sm" >{{$product->size}}</p>
                        <p>{{$product->cost}}</p>
                    </div>
                    <button class="bg-green-700 self-end text-black px-[30px] text-center rounded-lg hover:scale-110 hover:bg-green-400 transition-all duration-500 ease-in-out ">
                        Buy 
                    </button>                
                </div>
            </div>
        @endforeach
        @foreach ($tshirts as $tshirt )
            <div class=" max-w-[500px] px-[10px] text-white flex flex-col sm:flex-row  justify-evenly items-center border border-blue-900 rounded-lg mx-5 hover:scale-105 hover:bg-white hover:bg-opacity-[50] transform-all duration-500 ease-in-out group " id="main">
                    <div class="p-2">
                        <div id="image" class="inline-flex px-[100px] py-[100px] bg-cover bg-center rounded-lg overflow-hidden group-hover:shadow-2xl group-hover:shadow-[black] transition-all duration-500 ease-in-out" style="background-image: url('{{asset($tshirt->itempath)}}');" >
                        
                        </div>
                    </div>

                <div class="p-4 flex flex-col " id="name & description">
                    <div class=" px-[20px] rounded-xl text-2xl font-bold text-gray-700 group-hover:shadow-lg group-hover:shadow-[black] transition-all duration-500 ease-in-out " id="name" >
                        <p>{{$tshirt->name}}</p>
                    </div>
                    <div class="flex flex-col p-4 text-green-400 group-hover:font-bold " id="description">
                        <p class="text-sm" >{{$tshirt->size}}</p>
                        <p>{{$tshirt->cost}}</p>
                    </div>
                    <button class="bg-green-700 self-end text-black px-[30px] text-center rounded-lg hover:scale-110 hover:bg-green-400 transition-all duration-500 ease-in-out ">
                        Buy 
                    </button>                
                </div>
            </div>
        @endforeach
        @foreach ($sweatshirts as $sweatshirt )
            <div class=" max-w-[500px] px-[10px] text-white flex flex-col sm:flex-row  justify-evenly items-center border border-blue-900 rounded-lg mx-5 hover:scale-105 hover:bg-white hover:bg-opacity-[50] transform-all duration-500 ease-in-out group " id="main">
                    <div class="p-2">
                        <div id="image" class="inline-flex px-[100px] py-[100px] bg-cover bg-center rounded-lg overflow-hidden group-hover:shadow-2xl group-hover:shadow-[black] transition-all duration-500 ease-in-out" style="background-image: url('{{asset($sweatshirt->itempath)}}');" >
                        
                        </div>
                    </div>

                <div class="p-4 flex flex-col " id="name & description">
                    <div class=" px-[20px] rounded-xl text-2xl font-bold text-gray-700 group-hover:shadow-lg group-hover:shadow-[black] transition-all duration-500 ease-in-out " id="name" >
                        <p>{{$sweatshirt->name}}</p>
                    </div>
                    <div class="flex flex-col p-4 text-green-400 group-hover:font-bold " id="description">
                        <p class="text-sm" >{{$sweatshirt->size}}</p>
                        <p>{{$sweatshirt->cost}}</p>
                    </div>
                    <button class="bg-green-700 self-end text-black px-[30px] text-center rounded-lg hover:scale-110 hover:bg-green-400 transition-all duration-500 ease-in-out ">
                        Buy 
                    </button>                
                </div>
            </div>
        @endforeach
        @foreach ($hoodies as $hoodie )
            <div class=" max-w-[500px] px-[10px] text-white flex flex-col sm:flex-row  justify-evenly items-center border border-blue-900 rounded-lg mx-5 hover:scale-105 hover:bg-white hover:bg-opacity-[50] transform-all duration-500 ease-in-out group " id="main">
                    <div class="p-2">
                        <div id="image" class="inline-flex px-[100px] py-[100px] bg-cover bg-center rounded-lg overflow-hidden group-hover:shadow-2xl group-hover:shadow-[black] transition-all duration-500 ease-in-out" style="background-image: url('{{asset($hoodie->itempath)}}');" >
                        
                        </div>
                    </div>

                <div class="p-4 flex flex-col " id="name & description">
                    <div class=" px-[20px] rounded-xl text-2xl font-bold text-gray-700 group-hover:shadow-lg group-hover:shadow-[black] transition-all duration-500 ease-in-out " id="name" >
                        <p>{{$hoodie->name}}</p>
                    </div>
                    <div class="flex flex-col p-4 text-green-400 group-hover:font-bold " id="description">
                        <p class="text-sm" >{{$hoodie->size}}</p>
                        <p>{{$hoodie->cost}}</p>
                    </div>
                    <button class="bg-green-700 self-end text-black px-[30px] text-center rounded-lg hover:scale-110 hover:bg-green-400 transition-all duration-500 ease-in-out ">
                        Buy 
                    </button>                
                </div>
            </div>
        @endforeach
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
    </section>

        <h2 class="text-4xl font-bold text-green-600 my-20 text-center">Tickets</h2>
        <section class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-12" id="tickets" >
           @foreach ($tickets as $ticket)
           <x-job-card :$ticket>
                
            </x-job-card> 
           @endforeach
        </section>


        <section id="mkuru" class="flex flex-cols justify-between mb-10 mt-20 rounded-xl bg-cover hover:bg-center transition-ease-in-out duration-500 xs:flex-col sm:flex-col  md:flex-row " style="background-image: url('{{ Vite::asset('resources/images/cover.jpg') }}');"  >
 <div class=" ml-auto mb-20 h-screen w-full min-w-[435px] max-h-[470px] mt-10 rounded rounded-lg" >
            <div class="p-8 mt-5">
                <h1 class="text-5xl font-bold text-green-800 font-bold ">Merchandise</h1>
                <p class="mt-4 ml-6 text-2xl font-bold text-gray-900">From hoodies, t-shirts, trousers, Jackets </p>
            </div>
        </div>
        <div class="p-20 mt-20">
            <em class="text-gray-900 font-semibold text-2xl ">
                "Step into your everyday style with Draco – premium polos, jackets, and hoodies for the bold and ambitious!"
            </em>
        </div>
 

 </section>
    </main>

    <footer class=" flex flex-col sm:flex-rows justify-between mt-10 border-t border-green-400 pt-10 bg-cover bg-center" style="background-image: url('{{ Vite::asset('resources/images/paint.png') }}');" >
        <div class="flex flex-col md:flex-row justify-evenly">
            <p class=" ml-10 text-center text-gray-600 font-bold text-3xl">Quick links</p>

            <div class=" ml-20 flex flex-col text-white ">
                <a href="/showproducts" wire:navigate class="hover:text-green-600 transition duration-300">Merch</a>      
                <a href="/tshirts" wire:navigate class="hover:text-green-600 transition duration-300">T-Shirts</a>
                <a href="/sweatshirts" wire:navigate class="hover:text-green-600 transition duration-300">Sweatshirts</a>  
                <a href="/hoodies" wire:navigate class="hover:text-green-600 transition duration-300">Hoodies</a>
                <a href="/jackets" wire:navigate class="hover:text-green-600 transition duration-300">Jackets</a>
                <a href="/showtickets" wire:navigate class="hover:text-green-600 transition duration-300">Grab a ticket</a>
 
            </div>
            <div class=" ml-20 flex flex-col text-white ">
                <a href="/Blog" wire:navigate class="hover:text-green-600 transition duration-300">Blog-comming soon!</a>
                <a href="/createproducts" wire:navigate class="hover:text-green-600 transition duration-300">Create Products</a>      
                <a href="/createtickets" wire:navigate class="hover:text-green-600 transition duration-300">Create Tickets</a>
                <a href="/showtickets" wire:navigate class="hover:text-green-600 transition duration-300">Draco's Experience</a>  
                <a href="https://njugush.ke/en-us/?hls=true" wire:navigate class="hover:text-green-600 transition duration-300">Draco.ke</a>
                <a href="/search/accommodation" wire:navigate class="hover:text-green-600 transition duration-300">Get Accommodation</a>
                <a href="/createaccommodation" wire:navigate class="hover:text-green-600 transition duration-300">Add Accommodation</a>


                <!-- <a href="/jackets" class="hover:text-green-600 transition duration-300">Contact Us</a> -->
            </div>
            <div>
            <form action="/subscribe" method="POST" class="flex flex-col space-y-2 " >
                    <p class="text-xl text-white">Contact Us :</p>
                    <input type="name" name="email" placeholder="E-mail" class="bg-white bg-opacity-20 text-gray-200 w-full border border-blue-600 rounded-lg py-3 p-4 hover:border-green-400 transition-all duration-500 ease-in-out ">
                    <textarea name="message" class="bg-white bg-opacity-20 text-gray-200 w-full border border-blue-600 rounded-lg py-3 p-4 hover:border-green-400 transition-all duration-500 ease-in-out " placeholder="Message: " ></textarea>
                    <button type="submit" class=" self-end px-10 py-1 mt-10 text-sm text-black hover:bg-green-900 ml-auto bg-green-400 rounded-lg hover:scale-105 transition-all transition-ease-in-out duration-500 ">
                        send
                    </button> 
                    <div class=" self-end flex flex-row space-x-5 justify-center items-center bg-transparent text-gray-700 font-bold text-xl p-8  text-center">
                        <p>Explore More -></p>
                        <a href="https://www.youtube.com/@Mkurugenziii" target="_blank" ><div class=" px-5 py-5 bg-transparent bg-cover bg-center" style="background-image: url('{{ Vite::asset('resources/images/instagram.png')}}');"></div></a>
                        <a href="https://www.instagram.com/abelmutua/" target="_blank" ><div class=" px-5 py-5 bg-transparent bg-cover bg-center" style="background-image: url('{{ Vite::asset('resources/images/youtube.png')}}');"></div></a>
                    </div>
                   
                    <p class="text-xl text-gray-700">Telephone : +254 7* *** ***</p>
                    <p class="text-xl text-gray-700">Email: info@draco.co.ke</p>
                </form>

            </div>
        </div>
        <div class="flex flex-col justify-center items-center bg-transparent text-gray-700 font-bold text-xl p-8  text-center">
            <div class=" px-10 py-10 bg-transparent bg-cover bg-center" style="background-image: url('{{ Vite::asset('resources/images/logo3.png')}}');"></div>

            <p>&copy; 2024 Draco's Store All rights reserved.</p>
            <div class="mt-4">
                <a href="#" class="hover:text-green-600 transition duration-300 mx-2">Privacy Policy</a>
                <a href="#" class="hover:text-green-600 transition duration-300 mx-2">Terms of Service</a>
                <a href="#" class="hover:text-green-600 transition duration-300 mx-2">Contact Us</a>
            </div>
        </div>
    </footer>
    
</body>

</html>
