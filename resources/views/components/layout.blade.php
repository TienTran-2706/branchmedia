<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Branch Media</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])

</head>
<body class="bg-background w-full min-h-[100vh] flex flex-col justify-between items-center transition duration-550 ease-out hover:ease-in">
    <div class="w-full">
        <div class="flex flex-col justify-center px-[8%] bg-background max-md:px-5">
            <div
                class="font-grotesque flex gap-5 justify-between items-center py-6 w-full border-b border-solid border-stone-100 max-w-[1440px] max-md:flex-wrap max-md:max-w-full"
            >
                <div
                class="flex gap-5 justify-between my-auto text-xs font-black tracking-wider leading-4 uppercase text-zinc-800 max-md:flex-wrap max-md:max-w-full"
                >
                    <img
                        loading="lazy"
                        src="{{ Vite::asset('resources/images/logo.svg')}}" alt="logo"
                        class="shrink-0 max-w-full aspect-[5] w-[141px] mr-[75px]"
                    />
                    <div class="flex gap-6 pr-11 my-auto max-md:flex-wrap ">
                        <div class="justify-center whitespace-nowrap ">Shows</div>
                        <div class="justify-center whitespace-nowrap">Articles</div>
                        <div class="justify-center whitespace-nowrap">|</div>
                        <div class="justify-center whitespace-nowrap">About</div>
                        <div class="justify-center whitespace-nowrap">Team</div>
                        <div class="flex gap-1.5 pb-px">
                        <div>Work with us</div>
                        <img
                            loading="lazy"
                            src="{{ Vite::asset('resources/images/menu-arrow-down.svg')}}" alt="drop-down"
                            class="shrink-0 my-auto w-2 aspect-square"
                        />
                        </div>
                    </div>
                </div>

                <div class="flex gap-5 justify-between">
                <div
                    class="flex gap-1.5 py-px my-auto text-xs font-black tracking-wider leading-4 uppercase whitespace-nowrap text-zinc-800"
                >
                    <div>Substacks</div>
                    <img
                    loading="lazy"
                    src="{{ Vite::asset('resources/images/menu-arrow-down.svg')}}" alt="drop-down"
                    class="shrink-0 my-auto w-2 aspect-square"
                    />
                </div>
                <div class="flex gap-2.5 self-start">
                    <div
                    class="flex  justify-center items-center p-2 border border-solid border-text rounded-[40px] hover:bg-text  transition duration-550 ease-out hover:ease-in "
                        onmouseover="this.querySelector('img').style.filter = 'invert(1)';"
                        onmouseout="this.querySelector('img').style.filter = 'invert(0)';"
                    >
                    <img
                        loading="lazy"
                        src="{{ Vite::asset('resources/images/tiktok.svg')}}" alt="tiktok-logo"
                        class="w-4 aspect-square "
                    />
                    </div>
                    <div
                    class="flex justify-center items-center p-2 border border-solid border-text rounded-[40px] hover:bg-text  transition duration-550 ease-out hover:ease-in  "
                        onmouseover="this.querySelector('img').style.filter = 'invert(1)';"
                        onmouseout="this.querySelector('img').style.filter = 'invert(0)';"
                    >
                    <img
                        loading="lazy"
                        src="{{ Vite::asset('resources/images/youtube.svg')}}" alt="youtube-logo"
                        class="w-4 aspect-square"
                    />
                    </div>
                    <div
                    class="flex justify-center items-center p-2 border border-solid border-text rounded-[40px] hover:bg-text  transition duration-550 ease-out hover:ease-in  "
                        onmouseover="this.querySelector('img').style.filter = 'invert(1)';"
                        onmouseout="this.querySelector('img').style.filter = 'invert(0)';"
                    >
                    <img
                        loading="lazy"
                        src="{{ Vite::asset('resources/images/instagram.svg')}}" alt="instagram-logo"
                        class="w-4 aspect-square"
                    />
                    </div>
                    <div
                    class="flex justify-center items-center p-2 border border-solid border-text rounded-[40px] hover:bg-text  transition duration-550 ease-out hover:ease-in  "
                        onmouseover="this.querySelector('img').style.filter = 'invert(1)';"
                        onmouseout="this.querySelector('img').style.filter = 'invert(0)';"
                    >
                    <img
                        loading="lazy"
                        src="{{ Vite::asset('resources/images/twitter.svg')}}" alt="twitter-logo"
                        class="w-4 aspect-square"
                    />
                    </div>
                </div>
                <div
                    class="flex gap-3 justify-center px-3 py-2 text-xs font-black tracking-wider leading-4 uppercase whitespace-nowrap border border-solid border-text rounded-[110px] text-text hover:text-background hover:bg-text  transition duration-550 ease-out hover:ease-in  "
                    onmouseover="this.querySelector('img').style.filter = 'invert(1)';"
                    onmouseout="this.querySelector('img').style.filter = 'invert(0)';"
                >
                    <div>donate</div>
                    <img
                    loading="lazy"
                    class="shrink-0 self-start w-2.5 aspect-[0.91]"
                    src="{{ Vite::asset('resources/images/arrow.svg')}}" alt="arrow"
                    />
                </div>
                </div>
            </div>
        </div>

        <main>
            {{ $slot }}
        </main>



        <footer class="flex flex-col self-stretch w-full px-16 pt-20 pb-10 bg-text max-md:px-5 ">
                <div class="max-w-[1440px] max-md:max-w-full">
                    <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                        <div class="flex flex-col w-[28%] max-md:ml-0 max-md:w-full">
                            <img
                            loading="lazy"
                            src=" {{ Vite::asset('resources/images/logo_footer.svg')}}" alt="logo"
                            class="shrink-0 max-w-full aspect-[1.25] w-[293px] max-md:mt-10"
                            />
                        </div>
                    <div class="flex flex-col ml-5 w-[72%] max-md:ml-0 max-md:w-full">
                        <div class="grow self-stretch max-md:mt-10 max-md:max-w-full">
                            <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                                <div class="flex flex-col w-[23%] max-md:ml-0 max-md:w-full">
                                    <div class="flex flex-col self-stretch text-3xl leading-9 whitespace-nowrap text-background max-md:mt-10 font-financierdisplay"                                >
                                        <a href="#" class="hover:text-yellow">Shows</a>
                                        <a href="#" class="mt-5 hover:text-yellow">Articles</a>
                                        <a href="#" class="mt-5 hover:text-yellow">About</a>
                                        <a href="#" class="mt-5 hover:text-yellow">Team</a>
                                    </div>
                                </div>

                                <div class="flex flex-col ml-5 w-[41%] max-md:ml-0 max-md:w-full">
                                    <div class="flex flex-col grow self-stretch text-3xl leading-9 text-stone-100 max-md:mt-10"                                >
                                        <div class="text-xs font-black tracking-wider uppercase text-neutral-400 font-grotesque">
                                        Work With Us
                                        </div>
                                        <a class="mt-5 hover:text-yellow font-financierdisplay">Pitch a Show</a>
                                        <a class="mt-5 hover:text-yellow font-financierdisplay">Careers</a>
                                        <a class="mt-5 hover:text-yellow font-financierdisplay">Education Fellowship</a>
                                        <div
                                        class="mt-10 text-xs font-black tracking-wider uppercase text-neutral-400 font-grotesque"
                                        >
                                        Substacks
                                        </div>
                                        <div class="mt-5 hover:text-yellow font-financierdisplay">Lost Debate</div>
                                        <div class="mt-5 hover:text-yellow font-financierdisplay">Imbroglio</div>
                                    </div>
                                </div>
                                <div class="flex flex-col ml-5 w-[36%] max-md:ml-0 max-md:w-full">
                                    <div class="flex flex-col grow pb-20 max-md:mt-10">
                                        <div
                                        class="text-xs font-black tracking-wider leading-4 uppercase text-neutral-400 font-grotesque"
                                        >
                                        follow us
                                        </div>
                                        <div class="flex gap-4 pr-12 mt-5 max-md:pr-5">
                                        <div
                                            class="flex justify-center items-center p-3 rounded-3xl border border-solid border-background"
                                        >
                                            <img
                                            loading="lazy"
                                            src="{{ Vite::asset('resources/images/tiktok.svg')}}"
                                            class="w-4 aspect-square"
                                            />
                                        </div>


                                        <div
                                            class="flex justify-center items-center p-3 rounded-3xl border border-solid border-background"
                                        >
                                            <img
                                            loading="lazy"
                                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/5f96da8a277bed9ff83012cb3514aa49ee2d614c52a12e85d139c0aeec9e2ebf?"
                                            class="w-4 aspect-square"
                                            />
                                        </div>
                                        <div
                                            class="flex justify-center items-center p-3 rounded-3xl border border-solid border-background"
                                        >
                                            <img
                                            loading="lazy"
                                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/6b0b5258e3ad7ebdb51460909e2c976f55cdee61c6125e8bb0498682b4fc931a?"
                                            class="w-4 aspect-square"
                                            />
                                        </div>
                                        <div
                                            class="flex justify-center items-center p-3 rounded-3xl border border-solid border-background"
                                        >
                                            <img
                                            loading="lazy"
                                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/83826c413238733ce0c6a0cfa9b1fcafaf5a42848853bfe072fda6da6dfe5b8b?"
                                            class="w-4 aspect-square"
                                            />
                                        </div>
                                        </div>
                                        <div
                                        class="flex gap-2.5 justify-center px-12 py-5 mt-7 text-xs font-black tracking-wider leading-4 text-center uppercase border border-solid bg-stone-100 border-stone-100 rounded-[110px] text-zinc-800 max-md:px-5"
                                        >
                                        <div class="flex-auto">Donate now</div>
                                        <img
                                            loading="lazy"
                                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/02cd97631c606e0f7375d02a909a5579801f5a4071916f1f80eed502c8ced7c7?"
                                            class="shrink-0 self-start w-2.5 aspect-square"
                                        />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="font-grotesque flex gap-0 justify-between pr-20 mt-28 w-full text-xs font-black tracking-wider leading-4 uppercase max-w-[1440px] text-stone-100 max-md:flex-wrap max-md:pr-5 max-md:mt-10 max-md:max-w-full">
                    <div>© 2024 The Branch. All rights reserved.</div>
                    <div>Privacy Policy</div>
                    <div>Terms and Conditions</div>
                    </div>
                </div>
        </footer>

    </div>
</body>
</html>
