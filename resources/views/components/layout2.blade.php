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
        <!-- <header class="">
            <h2 class="text-4xl font-bold text-green-600 ">Shop from a wide varienty of products</h2>
            <p class="mt-4 text-gray-600">From Mkuru to you !</p>
        </header> -->
        
            {{$slot}}
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
                <a href="/Blog" wire:navigate class="hover:text-green-600 transition duration-300">Blog</a>
                <a href="/createproducts" wire:navigate class="hover:text-green-600 transition duration-300">Create Products</a>      
                <a href="/createtickets" wire:navigate class="hover:text-green-600 transition duration-300">Create Tickets</a>
                <!-- <a href="/showtickets" wire:navigate class="hover:text-green-600 transition duration-300">Trinity Experience</a>   -->
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
                   
                    <p class="text-xl text-gray-700">Telephone : +254 7** *** ***</p>
                    <p class="text-xl text-gray-700">Email: info@draco.co.ke</p>
                </form>

            </div>
        </div>
        <div class="flex flex-col justify-center items-center bg-transparent text-gray-700 font-bold text-xl p-8  text-center">
            <div class=" px-10 py-10 bg-transparent bg-cover bg-center" style="background-image: url('{{ Vite::asset('resources/images/logo6.png')}}');"></div>

            <p>&copy; 2024 Draco Store All rights reserved.</p>
            <div class="mt-4">
                <a href="#" class="hover:text-green-600 transition duration-300 mx-2">Privacy Policy</a>
                <a href="#" class="hover:text-green-600 transition duration-300 mx-2">Terms of Service</a>
                <a href="#" class="hover:text-green-600 transition duration-300 mx-2">Contact Us</a>
            </div>
        </div>
    </footer>
</body>

</html>
