<x-post.layout>
    <x-slot:content>
        {{-- profile content start --}}



        <main class="">

            <div class="">

                <header class="flex flex-wrap items-center p-4">

                    <div class="">
                        <!-- profile image -->
                        <img class="w-20 h-20 md:w-40 md:h-40 object-cover rounded-full
                     border-2 border-black p-1"
                            src="https://images.unsplash.com/photo-1502791451862-7bd8c1df43a7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=80"
                            alt="profile">
                    </div>

                    <!-- profile meta -->
                    <div class="w-8/12 md:w-7/12 ml-4">
                        <div class="md:flex md:flex-wrap md:items-center mb-4">
                            <h2 class="text-3xl inline-block font-light md:mr-2 mb-2 sm:mb-0">
                                username
                            </h2>

                            <!-- badge -->

                            <i class="fa-solid fa-circle-check"></i>


                            <!-- follow button -->
                            <a href="#"
                                class="bg-gray-800 px-2 py-1
                        text-white font-semibold text-sm rounded  text-center
                        sm:inline-block ml-1">Follow</a>
                        </div>

                        <!-- post, following, followers list for medium screens -->
                        <ul class="hidden md:flex space-x-8 mb-4">
                            <li>
                                <span class="font-semibold">136</span>
                                posts
                            </li>

                            <li>
                                <span class="font-semibold">40.5k</span>
                                followers
                            </li>
                            <li>
                                <span class="font-semibold">302</span>
                                following
                            </li>
                        </ul>

                        <!-- user meta form medium screens -->
                        <div class="hidden md:block">
                            <h1 class="font-semibold">Name</h1>
                            <p>bio goes here</p>
                        </div>

                    </div>

                    <!-- user meta form small screens -->
                    <div class="md:hidden text-sm my-2">
                        <h1 class="font-semibold">Mr Travlerrr...</h1>
                        <span>Travel, Nature and Music</span>
                        <p>Lorem ipsum dolor sit amet consectetur</p>
                    </div>

                </header>

                <!-- posts -->
                <div class="px-px md:px-3">

                    <!-- user following for mobile only -->
                    <ul
                        class="flex md:hidden justify-around space-x-8 border-t
                text-center p-2 text-gray-600 leading-snug text-sm">
                        <li>
                            <span class="font-semibold text-gray-800 block">136</span>
                            posts
                        </li>

                        <li>
                            <span class="font-semibold text-gray-800 block">40.5k</span>
                            followers
                        </li>
                        <li>
                            <span class="font-semibold text-gray-800 block">302</span>
                            following
                        </li>
                    </ul>

                    <!-- insta freatures -->
                    <ul
                        class="flex items-center justify-around md:justify-center space-x-12
                    uppercase tracking-widest font-semibold text-xs text-gray-600
                    border-t">
                        <!-- posts tab is active -->
                        <li class="md:border-t md:border-gray-700 md:-mt-px md:text-gray-700">
                            <a class="inline-block p-3" href="#">
                                <i class="fas fa-th-large text-xl md:text-xs"></i>
                                <span class="hidden md:inline">post</span>
                            </a>
                        </li>

                    </ul>
                    <!-- flexbox grid -->
                    <div class="flex flex-wrap -mx-px md:-mx-3">

                        <!-- column -->
                        <div class="w-1/3 p-px md:px-3">
                            <!-- post 1-->
                            <a href="#">
                                <article class="post  text-black relative pb-full">
                                    <!-- post image-->
                                    <img class="w-full h-full left-0 top-0 object-cover"
                                        src="https://images.unsplash.com/photo-1502791451862-7bd8c1df43a7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=80"
                                        alt="image">

                                    <i class="fas fa-square absolute right-0 top-0 m-1"></i>
                                    <!-- overlay-->
                                    <div
                                        class="overlay bg-gray-800 bg-opacity-25 w-full h-full absolute
                                left-0 top-0 hidden">
                                        <div
                                            class="flex justify-center items-center
                                    space-x-4 h-full">
                                            <span class="p-2">
                                                <i class="fas fa-heart"></i>
                                                412K
                                            </span>

                                            <span class="p-2">
                                                <i class="fas fa-comment"></i>
                                                2,909
                                            </span>
                                        </div>
                                    </div>

                                </article>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        {{-- profile content end --}}
    </x-slot:content>
</x-post.layout>
