        <!-- Nav Bar Start -->
        <nav class="top-5 inset-x-5 fixed z-10 pin-t bg-white bg-opacity-10 rounded-2xl backdrop-filter backdrop-blur-sm shadow-5xl border border-b-0 border-r-0">
            <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                <div class="relative flex items-center justify-between h-16">
                    <div id="menu" class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                        <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        </button>
                    </div>
                    <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-center">
                        <div class="flex-shrink-0 flex items-center">
                            <img class="block lg:hidden h-14 w-auto" src="images/logo.svg" alt="Workflow">
                            <img class="hidden lg:block h-14 w-auto" src="images/logo.svg" alt="Workflow">
                        </div>
                        <div class="hidden sm:block sm:ml-6">
                        <div class=" justify-center flex space-x-4">
                            <ul class="flex navbar">
                                <a class="p-4 items-center navbar hover:bg-cyan-500 hover:rounded-3xl duration-500 m-1 delay-100 hover:text-fuchsia-600 text-base font-medium hover:text-lg" href="#home">Home</a>
                                <a class="p-4 items-center navbar hover:bg-cyan-500 hover:rounded-3xl duration-500 m-1 delay-100 hover:text-fuchsia-600 text-base font-medium hover:text-lg" href="#news">Programming</a>
                                <a class="p-4 items-center navbar hover:bg-cyan-500 hover:rounded-3xl duration-500 m-1 delay-100 hover:text-fuchsia-600 text-base font-medium hover:text-lg" href="#contact">Code Project</a>
                                <a class="p-4 items-center navbar hover:bg-cyan-500 hover:rounded-3xl duration-500 m-1 delay-100 hover:text-fuchsia-600 text-base font-medium hover:text-lg" href="#about">About</a>
                            </ul>
                        </div>
                        </div>
                        <div id="" class="absolute inset-y-0 right-0 flex items-center pr-2 pl-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                            <button type="button" class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                                <span class="sr-only">View notifications</span>
                                <!-- Heroicon name: outline/bell -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                            </button>

                            <div id="usermenu" class="justify-center relative">
                                <div class="p-3">
                                    <button type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full" src="images/logo.svg" alt="">
                                    </button>
                                </div>
                                <div style="display: none;" id="anim" class="fade bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm m-8 border border-b-0 border-r-0 origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1  ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                    
                                    <a class="bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm items-center block px-4 py-2 hover:bg-emerald-500 hover:rounded-3xl duration-500 m-1 delay-100 text-sm font-medium hover:text-rose-500 text-white hover:text-base" role="menuitem" tabindex="-1" href="#home">Userboard</a>
                                    <a class="bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm items-center block px-4 py-2 hover:bg-emerald-500 hover:rounded-3xl duration-500 m-1 delay-100 text-sm font-medium hover:text-rose-500 text-white hover:text-base" role="menuitem" tabindex="-1" href="#news">Create Post</a>
                                    <a class="bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm items-center block px-4 py-2 hover:bg-emerald-500 hover:rounded-3xl duration-500 m-1 delay-100 text-sm font-medium hover:text-rose-500 text-white hover:text-base" role="menuitem" tabindex="-1" href="#contact">Settings</a>
                                    <a class="bg-white bg-opacity-20 backdrop-filter backdrop-blur-sm items-center block px-4 py-2 hover:bg-emerald-500 hover:rounded-3xl duration-500 m-1 delay-100 text-sm font-medium hover:text-rose-500 text-white hover:text-base" role="menuitem" tabindex="-1" href="#about">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slowtrans" id="mobile-menu" >
                <div class="sm:hidden">
                    <div class="px-2 pt-2 pb-3 space-y-1">
                        <a class="text-center items-center navbar hover:bg-cyan-500 hover:rounded-3xl duration-500 m-1 delay-100 hover:text-fuchsia-600 hover:text-lg  block px-3 py-2 rounded-md text-base font-medium" href="#home">Home</a>
                        <a class="text-center items-center navbar hover:bg-cyan-500 hover:rounded-3xl duration-500 m-1 delay-100 hover:text-fuchsia-600 hover:text-lg  block px-3 py-2 rounded-md text-base font-medium" href="#news">Programming</a>
                        <a class="text-center items-center navbar hover:bg-cyan-500 hover:rounded-3xl duration-500 m-1 delay-100 hover:text-fuchsia-600 hover:text-lg  block px-3 py-2 rounded-md text-base font-medium" href="#contact">Code Project</a>
                        <a class="text-center items-center navbar hover:bg-cyan-500 hover:rounded-3xl duration-500 m-1 delay-100 hover:text-fuchsia-600 hover:text-lg  block px-3 py-2 rounded-md text-base font-medium" href="#about">About</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Nav Bar End -->
