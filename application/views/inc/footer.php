<footer class="sticky top-full mt-10 container mx-auto  w-full justify-center inset-x-5 z-10 pin-t bg-white bg-opacity-10 rounded-2xl backdrop-filter backdrop-blur-sm shadow-5xl border border-b-0 border-r-0">
            <div class="grid grid-cols-2 divide-x divide-gary-200 m-2 md:grid-cols-2 lg:grid-cols-3 backdrop-filter backdrop-blur-sm shadow-5xl rounded-3xl ">
                <div class="p-2.5 flex justify-center  bg-white bg-opacity-20 rounded-l-3xl">
                    <div class="items-center justify-center w-full">
                        <img class="h-14 flex w-full" src="images/logo.svg" alt="SOS Logo">
                        <p>Let's Make Digital World with Software Development</p>
                        <span>You can find & join us in Socials :</span>
                        <div class="flex flex-shrink-0 justify-center w-full">
                            <img  class="block h-8 w-auto cursor-pointer hover:opacity-50" src="images/youtube.svg">
                            <img  class="block h-8 w-auto cursor-pointer hover:opacity-50" src="images/instagram.svg">
                            <img  class="block h-8 w-auto cursor-pointer hover:opacity-50" src="images/twitter.svg">
                            <img  class="block h-8 w-auto cursor-pointer hover:opacity-50" src="images/telegram.svg">
                            <img  class="block h-8 w-auto cursor-pointer hover:opacity-50 fill-gray-300" src="images/facebook.svg">
                        </div>
                    </div>
                </div>
                <div class="p-2.5 flex justify-center bg-white bg-opacity-20 ">
                    <div class="items-center justify-center">
                        <p class="text-lg font-extrabold text-purple-700">Let's Learn</p>
                        <div class="flex flex-col">
                            <a href="#" class="ml-5 duration-500 font-medium text-pink-700 hover:font-normal hover:text-green-500 hover:text-lg" ><span class="text-2xl text-white">&rsaquo;</span> Programming </a>
                            <a href="#" class="ml-5 duration-500 font-medium text-pink-700 hover:font-normal hover:text-green-500 hover:text-lg" ><span class="text-2xl text-white">&rsaquo;</span> Graphics Designing </a>
                            <a href="#" class="ml-5 duration-500 font-medium text-pink-700 hover:font-normal hover:text-green-500 hover:text-lg" ><span class="text-2xl text-white">&rsaquo;</span> Video Editing </a>
                            <a href="#" class="ml-5 duration-500 font-medium text-pink-700 hover:font-normal hover:text-green-500 hover:text-lg" ><span class="text-2xl text-white">&rsaquo;</span> Office Suite </a>
                            <a href="#" class="ml-5 duration-500 font-medium text-pink-700 hover:font-normal hover:text-green-500 hover:text-lg" ><span class="text-2xl text-white">&rsaquo;</span> OS </a>
                        </div>
                    </div>
                </div>
                <div class="p-2.5 flex justify-center bg-white bg-opacity-20 rounded-tr-3xl rounded-br-3xl">
                    <div class="items-center justify-center">
                        <p class="text-lg font-extrabold text-purple-700">Why We</p>
                        <div class="flex flex-col">
                            <a href="#" class="ml-5 duration-500 font-medium text-pink-700 hover:font-normal hover:text-green-500 hover:text-lg" ><span class="text-2xl text-white">&rsaquo;</span> About Us </a>
                            <a href="#" class="ml-5 duration-500 font-medium text-pink-700 hover:font-normal hover:text-green-500 hover:text-lg" ><span class="text-2xl text-white">&rsaquo;</span> Contact Us </a>
                        </div>
                        <p class="text-lg font-extrabold text-purple-700">Map</p>
                        <div class="flex flex-col">
                            
                        </div>
                    </div>
                </div>
            </div>
			<div class="w-full bg-white bg-opacity-20 rounded-b-3xl rounded-br-3xl">
				<div class="items-center justify-center">
					<p class="text-lg font-extrabold text-[#9eff16] text-center">&copy; & Designed By -: <a href="https://masterstuffs.com" class="text-sky-500 hover:text-[#fdda3f] duration-500">Master Stuffs</a></p>
					
				</div>
			</div>
        </footer>
    <script>
        let anim = document.getElementById('anim');
        let usermenu = document.getElementById('usermenu');
        usermenu.addEventListener('click', function(e)
        {
            if(anim.classList.contains('fade'))
            {
                anim.style.display = '';
                
                setTimeout(() => {
                    anim.classList.remove('fade');
                                }, 100);
            }
            else
            {
                setTimeout(() => {
                                    anim.style.display = 'none';
                                }, 500);
                anim.classList.add('fade');
            }
        });
        var menu = document.getElementById('menu');
        var mobileMenu = document.getElementById('mobile-menu');
        var height = mobileMenu.clientHeight;
        var width = mobileMenu.clientWidth;
        // initialize them (within mobileMenu.style)
        mobileMenu.style.height = height + 'px';
        mobileMenu.style.width = width + 'px';

        mobileMenu.style.visibility = 'hidden';
        //mobileMenu.style.opacity = '0';
        mobileMenu.style.height = '0';
        mobileMenu.style.width = '0';
        mobileMenu.style.padding = '0';
        menu.addEventListener
        ('click', function()
        {
            if(mobileMenu.style.visibility == 'hidden'){
                mobileMenu.style.visibility = 'visible';
                //mobileMenu.style.opacity = '1';
                mobileMenu.style.height = height + 'px';
                mobileMenu.style.width = width + 'px';
                mobileMenu.style.padding = '.5em';
            }
            else{
                mobileMenu.style.visibility = 'hidden';
                //mobileMenu.style.opacity = '0';
                mobileMenu.style.height = '0';
                mobileMenu.style.width = '0';
                mobileMenu.style.padding = '0';
            }

        });
    </script>
</html>