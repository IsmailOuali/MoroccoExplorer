<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://cdn.tailwindcss.com"></script>

        <title>Blog</title>
    </head>
    <body class="bg-black">
      <header class="bg-black">
        <div class="object-top opacity-65 bg-gradient-to-r from-sky-500 to-indigo-200 bg-cover rounded">
          <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
              <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="/images/logo.png" class="h-16" alt="Flowbite Logo" />
                    <span class="self-center text-3xl text-white font-bold whitespace-nowrap">MoroccoExplorer</span>
                  </a>
                  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <button type="button" class="text-white bg-amber-700 font-medium rounded-lg text-sm px-4 py-2 text-center">Get started</button>
                      <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center bg-black p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden" aria-controls="navbar-cta" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </button>
                  </div>
                  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                      <ul class="flex flex-col font-medium p-4 bg-transparent md:p-0 mt-4  rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 ">
                      <li>
                        <a href="#" class="block py-2 px-3 md:p-0 text-white text-2xl rounded md:bg-transparent md:text-blue-700 md:dark:text-amber-500" aria-current="page">Home</a>
                      </li>
                      <li>
                        <a href="#" class="block py-2 px-3 md:p-0 text-white text-2xl rounded md:hover:bg-transparent md:hover:text-amber-700">Store</a>
                      </li>
                      <li>
                        <a href="#" class="block py-2 px-3 md:p-0 text-white text-2xl rounded md:hover:bg-transparent md:hover:text-amber-700">Travel</a>
                      </li>
                      <li>
                        <a href="#" class="block py-2 px-3 md:p-0 text-white text-2xl rounded md:hover:bg-transparent md:hover:text-amber-700">Blog</a>
                      </li>
                      <li>
                        <a href="#" class="block py-2 px-3 md:p-0 text-white text-2xl rounded md:hover:bg-transparent md:hover:text-amber-700">Contact</a>
                      </li>
                    </ul>
                  </div>
            </div>
          </header>

          <section class="py-6 sm:py-12 bg-sky-800" >

            <div class="container p-6 mx-auto space-y-8">

              <div class="space-y-2 text-center">
                <h2 class="text-3xl font-bold">About Last Activities</h2>
                <p class="font-serif text-sm text-gray-400">What happens in Morocco Stay In Morocco.</p>
              </div>

              <div class="grid grid-cols-1 gap-x-4 gap-y-8 md:grid-cols-2 lg:grid-cols-4">
                <article class="flex flex-col bg-gray-400">
                  <div class="min-h-20 bg-gray-100 flex items-center justify-center">
                    <div class="bg-white rounded-xl overflow-hidden shadow-xl hover:scale-105 hover:shadow-2xl transform duration-500 cursor-pointer">
                      <div class="p-4">
                        <spna class="bg-red-500 py-2 px-4 text-sm font-semibold text-white rounded-full cursor-pointer">24/12/2023</spna>
                        <h1 class="mt-4 text-3xl font-bold hover:underline cursor-pointer">Collaboration day</h1>
                        <p class="mt-2 font-sans text-gray-700">by Edward</p>
                      </div>
                      <div class="">
                        <img class="w-80" src="https://media.gettyimages.com/id/918670394/photo/woman-working-on-argan-oil-factory-in-morocco.jpg?s=612x612&w=0&k=20&c=OxNLpoQPvkKdMMOF_-e-KBoIXVPrWZp_EyuCon3Ka5g=" />
                        <p class="absolute text-lg transform translate-x-20 -translate-y-24 bg-blue-600 text-white py-3 px-6 rounded-full cursor-pointer hover:scale-105 duration-500">More Details</p>
                      </div>
                    </div>
                  </div>
                </article>
                <article class="flex flex-col bg-gray-400">
                  <div class="min-h-20 bg-gray-100 flex items-center justify-center">
                    <div class="bg-white rounded-xl overflow-hidden shadow-xl hover:scale-105 hover:shadow-2xl transform duration-500 cursor-pointer">
                      <div class="p-4">
                        <spna class="bg-red-500 py-2 px-4 text-sm font-semibold text-white rounded-full cursor-pointer">24/12/2023</spna>
                        <h1 class="mt-4 text-3xl font-bold hover:underline cursor-pointer">Collaboration day</h1>
                        <p class="mt-2 font-sans text-gray-700">by Edward</p>
                      </div>
                      <div class="">
                        <img class="w-80" src="https://media.gettyimages.com/id/918670394/photo/woman-working-on-argan-oil-factory-in-morocco.jpg?s=612x612&w=0&k=20&c=OxNLpoQPvkKdMMOF_-e-KBoIXVPrWZp_EyuCon3Ka5g=" />
                        <p class="absolute text-lg transform translate-x-20 -translate-y-24 bg-blue-600 text-white py-3 px-6 rounded-full cursor-pointer hover:scale-105 duration-500">More Details</p>
                      </div>
                    </div>
                  </div>
                </article>
                <article class="flex flex-col bg-gray-400">
                  <div class="min-h-20 bg-gray-100 flex items-center justify-center">
                    <div class="bg-white rounded-xl overflow-hidden shadow-xl hover:scale-105 hover:shadow-2xl transform duration-500 cursor-pointer">
                      <div class="p-4">
                        <spna class="bg-red-500 py-2 px-4 text-sm font-semibold text-white rounded-full cursor-pointer">24/12/2023</spna>
                        <h1 class="mt-4 text-3xl font-bold hover:underline cursor-pointer">Collaboration day</h1>
                        <p class="mt-2 font-sans text-gray-700">by Edward</p>
                      </div>
                      <div class="">
                        <img class="w-80" src="https://media.gettyimages.com/id/918670394/photo/woman-working-on-argan-oil-factory-in-morocco.jpg?s=612x612&w=0&k=20&c=OxNLpoQPvkKdMMOF_-e-KBoIXVPrWZp_EyuCon3Ka5g=" />
                        <p class="absolute text-lg transform translate-x-20 -translate-y-24 bg-blue-600 text-white py-3 px-6 rounded-full cursor-pointer hover:scale-105 duration-500">More Details</p>
                      </div>
                    </div>
                  </div>
                </article>
                <article class="flex flex-col bg-gray-400">
                  <div class="min-h-20 bg-gray-100 flex items-center justify-center">
                    <div class="bg-white rounded-xl overflow-hidden shadow-xl hover:scale-105 hover:shadow-2xl transform duration-500 cursor-pointer">
                      <div class="p-4">
                        <spna class="bg-red-500 py-2 px-4 text-sm font-semibold text-white rounded-full cursor-pointer">24/12/2023</spna>
                        <h1 class="mt-4 text-3xl font-bold hover:underline cursor-pointer">Collaboration day</h1>
                        <p class="mt-2 font-sans text-gray-700">by Edward</p>
                      </div>
                      <div class="">
                        <img class="w-80" src="https://media.gettyimages.com/id/918670394/photo/woman-working-on-argan-oil-factory-in-morocco.jpg?s=612x612&w=0&k=20&c=OxNLpoQPvkKdMMOF_-e-KBoIXVPrWZp_EyuCon3Ka5g=" />
                        <p class="absolute text-lg transform translate-x-20 -translate-y-24 bg-blue-600 text-white py-3 px-6 rounded-full cursor-pointer hover:scale-105 duration-500">More Details</p>
                      </div>
                    </div>
                  </div>
                </article>
                <article class="flex flex-col bg-gray-400">
                  <div class="min-h-20 bg-gray-100 flex items-center justify-center">
                    <div class="bg-white rounded-xl overflow-hidden shadow-xl hover:scale-105 hover:shadow-2xl transform duration-500 cursor-pointer">
                      <div class="p-4">
                        <spna class="bg-red-500 py-2 px-4 text-sm font-semibold text-white rounded-full cursor-pointer">24/12/2023</spna>
                        <h1 class="mt-4 text-3xl font-bold hover:underline cursor-pointer">Collaboration day</h1>
                        <p class="mt-2 font-sans text-gray-700">by Edward</p>
                      </div>
                      <div class="">
                        <img class="w-80" src="https://media.gettyimages.com/id/918670394/photo/woman-working-on-argan-oil-factory-in-morocco.jpg?s=612x612&w=0&k=20&c=OxNLpoQPvkKdMMOF_-e-KBoIXVPrWZp_EyuCon3Ka5g=" />
                        <p class="absolute text-lg transform translate-x-20 -translate-y-24 bg-blue-600 text-white py-3 px-6 rounded-full cursor-pointer hover:scale-105 duration-500">More Details</p>
                      </div>
                    </div>
                  </div>
                </article>
                
              </div>
            </div>
        </section>

        <section  class="pt-16 pb-8 bg-sky-800">
          <div class="max-w-screen-xl p-5 mx-auto bg-sky-600 text-gray-100">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4 md:gap-0 lg:grid-rows-2">
              <div class="relative flex items-end justify-start w-full text-left bg-sky-500 b cursor-pointer h-96 md:col-span-2 lg:row-span-2 lg:h-full group" style="background-image: url(https://st2.depositphotos.com/2369507/8210/i/380/depositphotos_82107266-stock-photo-beautiful-tajines-in-moroccoafrica.jpg);">
                <div class="absolute top-0 bottom-0 left-0 right-0"></div>
                <div class="absolute top-0 left-0 right-0 flex items-center justify-between mx-5 mt-3">
                  <a rel="noopener noreferrer" href="#" class="px-3 py-2 text-xs font-semibold tracking-wider uppercase hover:underline text-gray-100 bg-violet-400">Art</a>
                  <div class="flex flex-col justify-start text-center text-gray-100">
                    <span class="text-3xl font-semibold leading-none tracking-wide">31</span>
                    <span class="leading-none uppercase">Jul</span>
                  </div>
                </div>
                <h2 class="z-10 p-5">
                  <a rel="noopener noreferrer" href="#" class="font-medium text-md group-hover:underline lg:text-2xl lg:font-semibold text-gray-100">Fuga ea ullam earum assumenda, beatae labore eligendi.</a>
                </h2>
              </div>
              <div class="relative flex items-end justify-start w-full text-left bg-gray-500 bg-center bg-cover cursor-pointer h-96 group" style="background-image: url(&quot;https://source.unsplash.com/random/240x320&quot;);">
                <div class="absolute top-0 bottom-0 left-0 right-0"></div>
                <div class="absolute top-0 left-0 right-0 flex items-center justify-between mx-5 mt-3">
                  <a rel="noopener noreferrer" href="#" class="px-3 py-2 text-xs font-semibold tracking-wider uppercase hover:underline text-gray-100 bg-violet-400">Politics</a>
                  <div class="flex flex-col justify-start text-center text-gray-100">
                    <span class="text-3xl font-semibold leading-none tracking-wide">04</span>
                    <span class="leading-none uppercase">Aug</span>
                  </div>
                </div>
                <h2 class="z-10 p-5">
                  <a rel="noopener noreferrer" href="#" class="font-medium text-md group-hover:underline text-gray-100"> Autem sunt tempora mollitia magnam non voluptates</a>
                </h2>
              </div>
              <div class="relative flex items-end justify-start w-full text-left bg-gray-500 bg-center bg-cover cursor-pointer h-96 group" style="background-image: url(&quot;https://source.unsplash.com/random/241x320&quot;);">
                <div class="absolute top-0 bottom-0 left-0 right-0"></div>
                <div class="absolute top-0 left-0 right-0 flex items-center justify-between mx-5 mt-3">
                  <a rel="noopener noreferrer" href="#" class="px-3 py-2 text-xs font-semibold tracking-wider uppercase hover:underline text-gray-100 bg-violet-400">Health</a>
                  <div class="flex flex-col justify-start text-center text-gray-100">
                    <span class="text-3xl font-semibold leading-none tracking-wide">01</span>
                    <span class="leading-none uppercase">Aug</span>
                  </div>
                </div>
                <h2 class="z-10 p-5">
                  <a rel="noopener noreferrer" href="#" class="font-medium text-md group-hover:underline text-gray-100">Inventore reiciendis aliquam excepturi</a>
                </h2>
              </div>
              <div class="relative flex items-end justify-start w-full text-left bg-gray-500 bg-center bg-cover cursor-pointer h-96 group" style="background-image: url(&quot;https://source.unsplash.com/random/242x320&quot;);">
                <div class="absolute top-0 bottom-0 left-0 right-0"></div>
                <div class="absolute top-0 left-0 right-0 flex items-center justify-between mx-5 mt-3">
                  <a rel="noopener noreferrer" href="#" class="px-3 py-2 text-xs font-semibold tracking-wider uppercase hover:underline text-gray-100 bg-violet-400">Science</a>
                  <div class="flex flex-col justify-start text-center text-gray-100">
                    <span class="text-3xl font-semibold leading-none tracking-wide">28</span>
                    <span class="leading-none uppercase">Jul</span>
                  </div>
                </div>
                <h2 class="z-10 p-5">
                  <a rel="noopener noreferrer" href="#" class="font-medium text-md group-hover:underline text-gray-100">Officiis mollitia dignissimos commodi optio vero animi</a>
                </h2>
              </div>
              <div class="relative flex items-end justify-start w-full text-left bg-gray-500 bg-center bg-cover cursor-pointer h-96 group" style="background-image: url(&quot;https://source.unsplash.com/random/243x320&quot;);">
                <div class="absolute top-0 bottom-0 left-0 right-0 "></div>
                <div class="absolute top-0 left-0 right-0 flex items-center justify-between mx-5 mt-3">
                  <a rel="noopener noreferrer" href="#" class="px-3 py-2 text-xs font-semibold tracking-wider uppercase hover:underline text-gray-100 bg-violet-400">Sports</a>
                  <div class="flex flex-col justify-start text-center text-gray-100">
                    <span class="text-3xl font-semibold leading-none tracking-wide">19</span>
                    <span class="leading-none uppercase">Jul</span>
                  </div>
                </div>
                <h2 class="z-10 p-5">
                  <a rel="noopener noreferrer" href="#" class="font-medium text-md group-hover:underline text-gray-100">Doloribus sit illo necessitatibus architecto exercitationem enim</a>
                </h2>
              </div>
            </div>
          </div>
        </section>
        <footer class="footer footer-center p-10 bg-gradient-to-r from-blue-800 opacity-40 text-white">
          <div class="flex">
  
              <aside>
                  <img class="w-1/4" src="/images/logo-big.png" alt="">                    
  
                  <p class="py-4">Copyright © 2024 - MoroccoExplorer</p>
              </aside> 
              <div class="justify-center align-center  gap-4 ">
                  <a href="" class="p-8 text-2xl font-semibold underline hover:text-blue-800">Home</a>
                  <a href="" class="p-8 text-2xl font-semibold underline hover:text-blue-800">Travels</a>
                  <a href="" class="p-8 text-2xl font-semibold underline hover:text-blue-800">Blog</a>
                  <a href="" class="p-8 text-2xl font-semibold underline hover:text-blue-800">Contact</a>
                  <a href="" class="p-8 text-2xl font-semibold underline hover:text-blue-800">Store</a>
              </div>
          </div>
      </footer>    

    </body>

</html>