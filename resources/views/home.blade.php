<x-layout>

    <section class="flex flex-col gap-8 justify-center items-center text-center text-text bg-yellow min-h-screen">
        <h1 class=" font-bold font-manuka uppercase leading-[164px] text-center text-[200px] tracking-[2px] max-md:mt-10 max-md:max-w-full max-md:text-4xl max-md:leading-9">
            Start with<br/> your own.
        </h1>
        <p class=" w-[700px] text-lg leading-6 max-md:max-w-full font-grotesqueregular font-normal text-center">
            The Branch is not for profit and not for sale. We’re not here to get you to
            buy anything, generate clicks, or to convert to a party. We’re here to be
            your flashlight for the dark corners of the Internet as we help make sense of
            the world.

            So, if you want to silence the echo chambers and restore your faith in good
            faith, join us.
        </p>
        <a class=" flex gap-2.5 justify-center px-6 py-5 mt-8 text-xs font-black tracking-wider leading-4 uppercase border border-solid border-text rounded-[110px] max-md:px-5 max-md:mt-10 hover:text-background hover:bg-text">
            <div class="grow">WHY WE DO IT</div>
            <svg class="w-3.5 h-3.5 fill-current text-current group-hover:text-background"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M7 17L17 7M17 7H8M17 7V16"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </g>
            </svg>
        </a>
    </section>

    <section class="flex flex-col mt-20 px-16 min-h-[100vh]">
        <div class="flex gap-5 justify-between items-center h-[72px] pt-5 w-full max-md:flex-wrap max-md:max-w-full border-t border-solid border-text">
            <x-section-title>Our shows</x-section-title>
            <div class="flex gap-5 justify-between my-auto">
                <a class="flex gap-2.5 justify-center px-6 py-4  text-xs font-black font-grotesque tracking-wider leading-4 uppercase border border-solid border-text rounded-[110px] max-md:px-5 max-md:mt-10 hover:text-background hover:bg-text">
                    <span class="grow">ALL SHOW</span>
                    <svg class="w-3.5 h-3.5 fill-current text-current group-hover:text-background"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M7 17L17 7M17 7H8M17 7V16"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </g>
                    </svg>
                </a>
                <div class="flex gap-2.5 my-auto">
                    <button class="flex justify-center items-center p-3 rounded-full border border-solid border-text hover:bg-text text-text hover:text-background group">
                        <svg class="w-[15px] h-[16px]  text-current" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVG">
                                <path id="Vector" d="M13.9417 8.00024H2.71112" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round"/>
                                <path id="Vector_2" d="M7.76515 1.82373L1.58868 8.0002L7.76515 14.1767" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round"/>
                            </g>
                        </svg>
                    </button>
                    <button class="flex justify-center items-center p-3 rounded-full border border-solid border-text hover:bg-text text-text hover:text-background group">
                        <svg class="w-[15px] h-[16px] text-current" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVG">
                                <path id="Vector" d="M1.05835 8.00024H12.2889" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round"/>
                                <path id="Vector_2" d="M7.23486 1.82373L13.4113 8.0002L7.23486 14.1767" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round"/>
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="px-5 mt-16 w-full max-md:mt-10 max-md:max-w-full">
            <div class="flex gap-[30px] max-md:flex-col max-md:gap-0">
                @foreach (range(1, 4) as $i)
                    <x-show-card />
                @endforeach
            </div>
        </div>
    </section>

    <section class="flex w-full px-[60px] h-[510px] max-md:flex-col max-md:gap-0">
        <div class="flex flex-col w-[60%] px-[60px] py-24 max-md:ml-0 max-md:w-full text-text bg-pink">
          <div class="flex flex-col grow   text-xs font-black leading-4  max-md:pl-5 max-md:max-w-full">
            <div class="mt-3 tracking-wider font-grotesque uppercase max-md:max-w-full">
              Featured Story
            </div>
            <div class="mt-5 text-[50px] font-financierdisplay font-normal leading-[50px] max-md:max-w-full max-md:text-4xl">
              Introducing “Killing Justice”
            </div>
            <div class="mt-5 text-base font-grotesqueregular leading-[26px] break-words max-md:max-w-full">
              We’re excited to announce our newest show in partnership with Crooked Media!
            </div>
            <x-navigator href="#">Read more</x-navigator>
          </div>
        </div>
        <div class="flex flex-col w-[40%] max-md:ml-0 max-md:w-full">
          <img
            loading="lazy"
            src="{{ Vite::asset("resources/images/Killing-Justice.png") }}"
            class="grow w-full aspect-square max-w-[510px] max-md:max-w-full"
          />
        </div>
    </section>


    <section class="flex flex-col mt-20 px-16 min-h-[100vh]">
        <x-section-title class="border-t border-solid border-text">Feature Episodes</x-section-title>

        <div class="pb-20">
            <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                <div class="flex flex-col w-[36%] max-md:ml-0 max-md:w-full">
                    <div class="flex flex-col grow self-stretch  max-md:mt-10 max-md:max-w-full">
                        <img
                            loading="lazy"
                            src="{{ Vite::asset("resources/images/NPU-Live-Podcard.jpeg") }}"
                            class="w-full aspect-square max-md:max-w-full"
                        />
                        <div class="flex gap-2 items-center py-px mt-9 text-xs font-black font-grotesque tracking-wider leading-4 uppercase text-text max-md:flex-wrap">
                            <a class="hover:text-yellow">NATIONAL PARENTS UNION PODCAST</a>
                            <span>&ndash;</span>
                            <a class="hover:text-yellow">EPISODE 12</a>
                        </div>
                        <abbr class="mt-2.5 text-3xl leading-8 hover:text-yellow text-text font-financierdisplay max-md:max-w-full">
                            What Parents Need to Know About Project 2025
                        </abbr>
                        <x-navigator href="#">All episode</x-navigator>
                    </div>
                </div>


                <div class="flex flex-col ml-5 w-[64%] max-md:ml-0 max-md:w-full">
                    <div class="flex flex-col pb-16 max-md:mt-10 max-md:max-w-full">
                        @foreach (range(1, 3) as $i)
                            <x-episode-card />
                        @endforeach
                    </div>

            </div>
            </div>
        </div>

    </section>

    <section class="flex flex-col mb-20 px-16 min-h-[100vh]">
            <div class="flex gap-5 justify-between items-center h-[72px] pt-5 w-full max-md:flex-wrap max-md:max-w-full border-t border-solid border-text">
                <x-section-title>ARTICLES</x-section-title>

                <div class="flex gap-5 justify-between my-auto">
                    <a class="flex gap-2.5 justify-center px-6 py-4  text-xs font-black font-grotesque tracking-wider leading-4 uppercase border border-solid border-text rounded-[110px] max-md:px-5 max-md:mt-10 hover:text-background hover:bg-text">
                        <span class="grow">ALL ARTICLES</span>
                        <svg class="w-3.5 h-3.5 fill-current text-current group-hover:text-background"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M7 17L17 7M17 7H8M17 7V16"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>


            <div class="flex flex-col">
                <div class="pt-20 pb-[30px] w-full border-b border-solid border-text  max-md:max-w-full">
                    <div class="flex max-md:flex-col max-md:gap-0">
                        <div class="flex flex-col w-[67%] max-md:ml-0 max-md:w-full">
                            <img
                                loading="lazy"
                                src="{{ Vite::asset("resources/images/Newsletter-Banner.png")}}"
                                alt="Killing justice banner"
                                class="grow w-full aspect-[1.89] max-w-[870px] max-md:mt-5 max-md:max-w-full"
                            />
                        </div>
                        <div class="flex flex-col w-[33%] max-md:ml-0 max-md:w-full">
                            <div class="flex flex-col grow  pb-20 max-md:mt-5 max-md:max-w-full">
                                <div class="flex  max-md:flex-wrap">
                                    <x-tag>News</x-tag>
                                    <x-tag>Politics</x-tag>
                                </div>
                                <a
                                    href="#"
                                    class="mt-2.5 text-5xl leading-[50px] text-text font-financierdisplay hover:text-yellow max-md:max-w-full max-md:text-4xl max-md:leading-10"
                                >
                                    Introducing “Killing

                                    Justice”
                                </a>
                                <div
                                    class="mt-2.5 text-base leading-5 text-neutral-400 font-grotesqueregular max-md:max-w-full"
                                >
                                    By Ravi Gupta
                                </div>
                                <x-navigator href="#">Read it now</x-navigator>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full max-md:max-w-full pt-[30px]">
                <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                    @foreach(range(1, 3) as $i)
                        <x-article-card />
                    @endforeach
                </div>
            </div>
        </div>

    </section>


    <section class="flex flex-col mb-20 px-16 min-h-[100vh]">
        <div class="flex gap-20 py-20 border-t border-solid border-text max-md:flex-col max-md:gap-0">
            <div class="flex flex-col w-[40%] max-md:ml-0 max-md:w-full">
                <div class="flex flex-col max-md:mt-10 max-md:max-w-full">
                    <img
                    loading="lazy"
                    src={{ Vite::asset("resources/images/AlexisGreen_alt.png")}}
                    alt="AlexisGreen"
                    class="w-full aspect-auto max-md:max-w-full"
                    />
                    <div class="flex items-center mt-8 max-md:flex-wrap max-md:max-w-full">
                        <div class="px-5 pb-2 text-text">
                            <div>
                                <p class="font-financierdisplay text-3xl leading-7">Alexis McDonell</p>
                                <p class="mt-2.5 text-xs font-black font-grotesque tracking-wider leading-4 uppercase">
                                    Misinformation, Human Rights, Environment
                                </p>
                            </div>

                            <div class="flex items-center gap-2.5 my-auto mt-2">
                                <button class="flex justify-center items-center p-3 rounded-full border border-solid border-text hover:bg-text text-text hover:text-background group">
                                    <svg class="w-[15px] h-[16px]  text-current" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVG">
                                            <path id="Vector" d="M13.9417 8.00024H2.71112" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round"/>
                                            <path id="Vector_2" d="M7.76515 1.82373L1.58868 8.0002L7.76515 14.1767" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round"/>
                                        </g>
                                    </svg>
                                </button>
                                <button class="flex justify-center items-center p-3 rounded-full border border-solid border-text hover:bg-text text-text hover:text-background group">
                                    <svg class="w-[15px] h-[16px] text-current" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVG">
                                            <path id="Vector" d="M1.05835 8.00024H12.2889" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round"/>
                                            <path id="Vector_2" d="M7.23486 1.82373L13.4113 8.0002L7.23486 14.1767" stroke="currentColor" stroke-linecap="square" stroke-linejoin="round"/>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-[60%] max-md:ml-0 max-md:w-full">
            <div class="flex flex-col grow px-5 pb-20 mt-36 max-w-[600px] text-text max-md:mt-10 max-md:max-w-full"

            >
                <div
                class="text-xs font-black tracking-wider font-grotesque leading-4 uppercase max-md:max-w-full"
                >
                The Branch Creator Program
                </div>
                <div
                class="mt-4 text-7xl font-financierdisplay leading-[65px] max-md:max-w-full max-md:text-4xl max-md:leading-9"
                >
                Help us build a real
                <br />
                social network.
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="flex flex-col items-center px-4 py-60 text-center bg-pink text-text">
        <div class="mt-20 font-bold uppercase font-manuka leading-[160px] text-[200px] tracking-[2px] max-md:mt-10 max-md:max-w-full max-md:text-4xl">
            Let’s be faster.
        </div>

        <div class="mt-7 text-lg leading-6 font-grotesqueregular w-[45%] max-md:max-w-full">
            We believe the most important conversations in society happen in the dark
            corners of the Internet—on platforms dominated by political arsonists,
            nihilists, and extremists. Our mission is to infuse more empathy, nuance, and
            objectivity into those conversations. Join us.
        </div>

        <div class="flex flex-wrap justify-center content-center items-center self-stretch px-16 py-px mt-8 text-xs font-black tracking-wider leading-4 uppercase max-md:px-5 max-md:max-w-full">
            <div class="flex gap-2.5">
                <div class="flex gap-5 justify-between my-auto">
                    <a class="flex gap-2.5 justify-center px-6 py-4  text-xs font-black font-grotesque tracking-wider leading-4 uppercase border border-solid border-text rounded-[110px] max-md:px-5 max-md:mt-10 hover:text-background hover:bg-text">
                        <span class="grow">Join us</span>
                        <svg class="w-3.5 h-3.5 fill-current text-current group-hover:text-background"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M7 17L17 7M17 7H8M17 7V16"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </a>
                </div>

                <div class="flex gap-5 justify-between my-auto">
                    <a class="flex gap-2.5 justify-center px-6 py-4  text-xs font-black font-grotesque tracking-wider leading-4 uppercase border border-solid border-text rounded-[110px] max-md:px-5 max-md:mt-10 hover:text-background hover:bg-text">
                        <span class="grow">ALL ARTICLES</span>
                        <svg class="w-3.5 h-3.5 fill-current text-current group-hover:text-background"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M7 17L17 7M17 7H8M17 7V16"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

</x-layout>

