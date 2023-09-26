<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"
        integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-white">
    <div class="container mx-auto grid grid-flow-col gap-1">
        <section-left class="p-4 bg-gray-100 hidden sm:block">
            <!-- Column 1 Content -->
            <div class="sm:w-60 min-h-screen w-14 pt-4 transition-all md:sticky md:top-0">
                <div class="text-center text-black p-6">
                    TinyGram
                </div>
                <ul class="mt-5">
                    <li
                        class="hover:bg-gray-800 hover:text-white cursor-pointer sm:justify-start px-4 h-12 flex items-center justify-center active">
                        <i class="fa-solid fa-house"></i>
                        <span class="ml-3 hidden sm:block  font-semibold tracking-wide">
                            Home</span>
                    </li>
                    <li
                        class="hover:bg-gray-800 hover:text-white cursor-pointer sm:justify-start px-4 h-12 flex items-center justify-center">
                        <i class="fa-regular fa-bell"></i>
                        <span class="ml-3 hidden sm:block  font-semibold tracking-wide ">
                            Notification</span>
                    </li>
                    <li
                        class="hover:bg-gray-800 hover:text-white cursor-pointer sm:justify-start px-4 h-12 flex items-center justify-center">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <span class="ml-3 hidden sm:block  font-semibold tracking-wide ">
                            Search</span>
                    </li>
                    <li
                        class="hover:bg-gray-800 hover:text-white cursor-pointer sm:justify-start px-4 h-12 flex items-center justify-center">
                        <i class="fa-regular fa-message"></i>
                        <span class="ml-3 hidden sm:block font-semibold tracking-wide ">
                            Messages</span>
                    </li>
                    <li
                        class="hover:bg-gray-800 hover:text-white cursor-pointer sm:justify-start px-4 h-12 flex items-center justify-center">
                        <i class="fa-regular fa-user"></i>
                        <span class="ml-3 hidden sm:block font-semibold tracking-wide ">
                            DeveloperSharif</span>
                    </li>
                </ul>
            </div>
        </section-left>
        <section-middle class=" p-4 bg-gray-100">
            <!-- Column 2 Content -->

            <!--Post Card Start-->
            <div class="container">
                <div>
                    <div class="p-3 px-6 min-h-48 flex justify-center items-center" style="cursor: auto;">
                        <custom-card3>
                            <div class="rounded-md shadow-md sm:w-96 bg-coolGray-900 text-coolGray-100">
                                <div class="flex items-center justify-between p-3" style="cursor: auto;">
                                    <div class="flex items-center space-x-2" style="cursor: auto;">
                                        <img src="https://source.unsplash.com/user/c_v_r/1600x900" alt=""
                                            class="object-cover object-center w-8 h-8 rounded-full shadow-sm bg-coolGray-500 border-coolGray-700"
                                            style="cursor: auto;">
                                        <div class="-space-y-1" style="cursor: auto;">
                                            <h2 class="text-sm font-semibold leading-none" style="cursor: auto;">
                                                External_</h2>
                                            <span class="inline-block text-xs leading-none text-coolGray-400"
                                                style="cursor: auto;">New York City</span>
                                        </div>
                                    </div>
                                    <details class="dropdown dropdown-end">
                                        <summary class="m-1 btn"><i class="fa-solid fa-ellipsis-vertical"></i></summary>
                                        <ul class="p-2 shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-52">
                                            <li><a><i class="fa-regular fa-pen-to-square"></i> Edit</a></li>
                                            <li><a><i class="fa-solid fa-trash-can"></i> Delete</a></li>
                                        </ul>
                                    </details>
                                </div>
                                <img src="https://source.unsplash.com/user/c_v_r/1600x900" alt=""
                                    class="object-cover object-center w-full h-72 bg-coolGray-500"
                                    style="cursor: auto;">
                                <div class="p-3" style="cursor: auto;">
                                    <div class="flex items-center justify-between" style="cursor: auto;">
                                        <div class="flex items-center space-x-3">
                                            <button type="button" title="Like post"
                                                class="flex items-center justify-center">
                                                <i class="fa-regular fa-heart"></i>
                                            </button>
                                            <button type="button" title="Add a comment"
                                                class="flex items-center justify-center">
                                                <i class="fa-regular fa-comment"></i>
                                            </button>
                                            <button type="button" title="Share post"
                                                class="flex items-center justify-center">
                                                <i class="fa-solid fa-retweet"></i>
                                            </button>
                                        </div>
                                        <button type="button" title="Bookmark post"
                                            class="flex items-center justify-center">
                                            <i class="fa-regular fa-bookmark"></i>
                                        </button>
                                    </div>
                                    <div class="flex flex-wrap items-center pt-3 pb-1" style="cursor: auto;">
                                        <div class="flex items-center space-x-2">
                                            <div class="flex -space-x-1">
                                                <img alt=""
                                                    class="w-5 h-5 border rounded-full bg-coolGray-500 border-coolGray-800"
                                                    src="https://source.unsplash.com/user/c_v_r/1600x900">
                                                <img alt=""
                                                    class="w-5 h-5 border rounded-full bg-coolGray-500 border-coolGray-800"
                                                    src="https://stackdiary.com/140x100.png">
                                                <img alt=""
                                                    class="w-5 h-5 border rounded-full bg-coolGray-500 border-coolGray-800"
                                                    src="https://source.unsplash.com/user/c_v_r/1600x900"><!---->
                                            </div>
                                            <span class="text-sm"> Liked by
                                                <span class="font-semibold">Pixels</span> and
                                                <span class="font-semibold">20 others</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="space-y-3" style="cursor: auto;">
                                        <p class="text-sm" style="cursor: auto;">
                                            <span class="text-base font-semibold">External_</span> It's getting cold out
                                            there!
                                        </p>
                                        <input type="text" placeholder="Add a comment..."
                                            class="w-full py-0.5 bg-transparent border-none rounded text-sm pl-0 text-coolGray-100"
                                            style="cursor: auto;">
                                    </div>
                                </div>
                            </div>
                        </custom-card3>
                    </div>
                </div>
            </div>
            <!--post card end--> <!--Post Card Start-->
            <div class="container">
                <div>
                    <div class="p-3 px-6 min-h-48 flex justify-center items-center" style="cursor: auto;">
                        <custom-card3>
                            <div class="rounded-md shadow-md sm:w-96 bg-coolGray-900 text-coolGray-100">
                                <div class="flex items-center justify-between p-3" style="cursor: auto;">
                                    <div class="flex items-center space-x-2" style="cursor: auto;">
                                        <img src="https://source.unsplash.com/user/c_v_r/1600x900" alt=""
                                            class="object-cover object-center w-8 h-8 rounded-full shadow-sm bg-coolGray-500 border-coolGray-700"
                                            style="cursor: auto;">
                                        <div class="-space-y-1" style="cursor: auto;">
                                            <h2 class="text-sm font-semibold leading-none" style="cursor: auto;">
                                                External_</h2>
                                            <span class="inline-block text-xs leading-none text-coolGray-400"
                                                style="cursor: auto;">New York City</span>
                                        </div>
                                    </div>
                                    <button title="Open options" type="button">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                </div>
                                <img src="https://source.unsplash.com/user/c_v_r/1600x900" alt=""
                                    class="object-cover object-center w-full h-72 bg-coolGray-500"
                                    style="cursor: auto;">
                                <div class="p-3" style="cursor: auto;">
                                    <div class="flex items-center justify-between" style="cursor: auto;">
                                        <div class="flex items-center space-x-3">
                                            <button type="button" title="Like post"
                                                class="flex items-center justify-center">
                                                <i class="fa-regular fa-heart"></i>
                                            </button>
                                            <button type="button" title="Add a comment"
                                                class="flex items-center justify-center">
                                                <i class="fa-regular fa-comment"></i>
                                            </button>
                                            <button type="button" title="Share post"
                                                class="flex items-center justify-center">
                                                <i class="fa-solid fa-retweet"></i>
                                            </button>
                                        </div>
                                        <button type="button" title="Bookmark post"
                                            class="flex items-center justify-center">
                                            <i class="fa-regular fa-bookmark"></i>
                                        </button>
                                    </div>
                                    <div class="flex flex-wrap items-center pt-3 pb-1" style="cursor: auto;">
                                        <div class="flex items-center space-x-2">
                                            <div class="flex -space-x-1">
                                                <img alt=""
                                                    class="w-5 h-5 border rounded-full bg-coolGray-500 border-coolGray-800"
                                                    src="https://source.unsplash.com/user/c_v_r/1600x900">
                                                <img alt=""
                                                    class="w-5 h-5 border rounded-full bg-coolGray-500 border-coolGray-800"
                                                    src="https://stackdiary.com/140x100.png">
                                                <img alt=""
                                                    class="w-5 h-5 border rounded-full bg-coolGray-500 border-coolGray-800"
                                                    src="https://source.unsplash.com/user/c_v_r/1600x900"><!---->
                                            </div>
                                            <span class="text-sm"> Liked by
                                                <span class="font-semibold">Pixels</span> and
                                                <span class="font-semibold">20 others</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="space-y-3" style="cursor: auto;">
                                        <p class="text-sm" style="cursor: auto;">
                                            <span class="text-base font-semibold">External_</span> It's getting cold out
                                            there!
                                        </p>
                                        <input type="text" placeholder="Add a comment..."
                                            class="w-full py-0.5 bg-transparent border-none rounded text-sm pl-0 text-coolGray-100"
                                            style="cursor: auto;">
                                    </div>
                                </div>
                            </div>
                        </custom-card3>
                    </div>
                </div>
            </div>
            <!--post card end--> <!--Post Card Start-->
            <div class="container">
                <div>
                    <div class="p-3 px-6 min-h-48 flex justify-center items-center" style="cursor: auto;">
                        <custom-card3>
                            <div class="rounded-md shadow-md sm:w-96 bg-coolGray-900 text-coolGray-100">
                                <div class="flex items-center justify-between p-3" style="cursor: auto;">
                                    <div class="flex items-center space-x-2" style="cursor: auto;">
                                        <img src="https://source.unsplash.com/user/c_v_r/1600x900" alt=""
                                            class="object-cover object-center w-8 h-8 rounded-full shadow-sm bg-coolGray-500 border-coolGray-700"
                                            style="cursor: auto;">
                                        <div class="-space-y-1" style="cursor: auto;">
                                            <h2 class="text-sm font-semibold leading-none" style="cursor: auto;">
                                                External_</h2>
                                            <span class="inline-block text-xs leading-none text-coolGray-400"
                                                style="cursor: auto;">New York City</span>
                                        </div>
                                    </div>
                                    <button title="Open options" type="button">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                </div>
                                <img src="https://source.unsplash.com/user/c_v_r/1600x900" alt=""
                                    class="object-cover object-center w-full h-72 bg-coolGray-500"
                                    style="cursor: auto;">
                                <div class="p-3" style="cursor: auto;">
                                    <div class="flex items-center justify-between" style="cursor: auto;">
                                        <div class="flex items-center space-x-3">
                                            <button type="button" title="Like post"
                                                class="flex items-center justify-center">
                                                <i class="fa-regular fa-heart"></i>
                                            </button>
                                            <button type="button" title="Add a comment"
                                                class="flex items-center justify-center">
                                                <i class="fa-regular fa-comment"></i>
                                            </button>
                                            <button type="button" title="Share post"
                                                class="flex items-center justify-center">
                                                <i class="fa-solid fa-retweet"></i>
                                            </button>
                                        </div>
                                        <button type="button" title="Bookmark post"
                                            class="flex items-center justify-center">
                                            <i class="fa-regular fa-bookmark"></i>
                                        </button>
                                    </div>
                                    <div class="flex flex-wrap items-center pt-3 pb-1" style="cursor: auto;">
                                        <div class="flex items-center space-x-2">
                                            <div class="flex -space-x-1">
                                                <img alt=""
                                                    class="w-5 h-5 border rounded-full bg-coolGray-500 border-coolGray-800"
                                                    src="https://source.unsplash.com/user/c_v_r/1600x900">
                                                <img alt=""
                                                    class="w-5 h-5 border rounded-full bg-coolGray-500 border-coolGray-800"
                                                    src="https://stackdiary.com/140x100.png">
                                                <img alt=""
                                                    class="w-5 h-5 border rounded-full bg-coolGray-500 border-coolGray-800"
                                                    src="https://source.unsplash.com/user/c_v_r/1600x900"><!---->
                                            </div>
                                            <span class="text-sm"> Liked by
                                                <span class="font-semibold">Pixels</span> and
                                                <span class="font-semibold">20 others</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="space-y-3" style="cursor: auto;">
                                        <p class="text-sm" style="cursor: auto;">
                                            <span class="text-base font-semibold">External_</span> It's getting cold out
                                            there!
                                        </p>
                                        <input type="text" placeholder="Add a comment..."
                                            class="w-full py-0.5 bg-transparent border-none rounded text-sm pl-0 text-coolGray-100"
                                            style="cursor: auto;">
                                    </div>
                                </div>
                            </div>
                        </custom-card3>
                    </div>
                </div>
            </div>
            <!--post card end-->


        </section-middle>
        <section-right class=" p-4 bg-gray-100 hidden sm:block">
            <!-- Column 3 Content -->
            <div class="container w-52">
                <small>Suggested for you . <a href="">See All</a></small>
                <ul>
                    <li>User Open</li>
                    <li>User Two</li>
                    <li>User there</li>
                    <li>User Four</li>
                </ul>
            </div>
        </section-right>
    </div>
</body>

</html>