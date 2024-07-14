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
            <div class="text-[80px] font-bold font-manuka uppercase  text-text max-md:text-4xl">
                Our Shows
            </div>
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
                    <div class="flex flex-col w-3/12 max-md:ml-0 max-md:w-full">
                        <div class="flex flex-col self-stretch max-md:mt-8">
                            <img loading="lazy" src="{{ Vite::asset("resources/images/Lost-Debate.png")}}" class="w-full aspect-square" />
                            <div class="mt-5 text-3xl leading-7 text-text font-financierdisplay">Lost Debate</div>
                            <div class="mt-2.5 text-base leading-5 text-text font-grotesqueregular">Good-faith conversations that cut through<br />the noise.</div>
                            <a href="" class="flex items-center gap-2 mt-2 text-xs font-black tracking-wider leading-6 uppercase text-text font-grotesque hover:underline group">All Episodes
                                    <span class="flex flex-col justify-center items-start p-1 text-background bg-text rounded-full border group-hover:bg-pink">
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
                                    </span>
                                </a>


                        </div>
                    </div>
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
            <a href="#"
               class="flex items-center gap-2  mt-5
                      text-xs font-black tracking-wider leading-6 uppercase
                      text-text font-grotesque hover:underline group">
                Read more

                <span class="flex flex-col justify-center items-start p-1
                       text-background bg-text rounded-full border group-hover:bg-background">
                    <svg class="w-3.5 h-3.5 fill-current text-current group-hover:text-text"
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
                </span>
            </a>
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
            <div class="text-[80px] mb-16 font-bold font-manuka uppercase  text-text max-md:text-4xl border-t border-solid border-text">
                FEATURED EPISODES
            </div>

        <div class="pb-20">
            <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                <div class="flex flex-col w-[36%] max-md:ml-0 max-md:w-full">
                    <div class="flex flex-col grow self-stretch px-5 max-md:mt-10 max-md:max-w-full">
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
                        <div class="flex gap-2.5 items-start pr-20 pb-7 mt-2.5 max-md:flex-wrap max-md:pr-5">
                            <a href="#" class="flex items-center gap-2 mt-2 text-xs font-black tracking-wider leading-6 uppercase text-text font-grotesque hover:underline group">
                                About episode
                                <span class="flex flex-col justify-center items-start p-1 text-background bg-text rounded-full border group-hover:bg-pink">
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
                                </span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="flex flex-col ml-5 w-[64%] max-md:ml-0 max-md:w-full">
                    <div class="flex flex-col pb-16 max-md:mt-10 max-md:max-w-full">
                        <div class="pb-10 border-b border-solid border-text max-md:max-w-full">
                            <div class="flex max-md:flex-col max-md:gap-0 ">
                                <div class="flex flex-col w-[19%] max-md:ml-0 max-md:w-full">
                                    <img loading="lazy"
                                        src="{{Vite::asset("resources/images/Citizen-Stewart.png")}}"
                                        class="shrink-0 max-w-full aspect-square w-[150px] max-md:mt-8" />
                                </div>
                                <div class="flex flex-col ml-1 w-[81%] max-md:ml-0 max-md:w-full">
                                    <div class="flex flex-col grow px-5  max-md:mt-8 max-md:max-w-full">
                                        <div class="flex gap-0 py-px text-xs font-black tracking-wider leading-4 uppercase text-text font-grotesque max-md:flex-wrap">
                                            <a class="hover:text-yellow">CITIZEN STEWART SHOW</a>
                                            <span>–</span>
                                            <a class="hover:text-yellow">EPISODE 86</a>
                                        </div>
                                        <a class="mt-2.5 text-3xl leading-8 text-text font-financierdisplay max-md:max-w-full">
                                            Did All That Pandemic Aid Help?
                                        </a>
                                        <div class="flex gap-2.5 items-start pr-20 pb-2.5 mt-2.5 max-md:flex-wrap max-md:pr-5">
                                            <a href="" class="flex items-center gap-2 mt-2 text-xs font-black tracking-wider leading-6 uppercase text-text font-grotesque hover:underline group">
                                                About episode
                                                <span class="flex flex-col justify-center items-start p-1 text-background bg-text rounded-full border group-hover:bg-pink">
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
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-10 border-b border-solid border-text max-md:max-w-full">
                            <div class="flex max-md:flex-col max-md:gap-0 ">
                                <div class="flex flex-col w-[19%] max-md:ml-0 max-md:w-full">
                                    <img loading="lazy"
                                        src="{{Vite::asset("resources/images/Citizen-Stewart.png")}}"
                                        class="shrink-0 max-w-full aspect-square w-[150px] max-md:mt-8" />
                                </div>
                                <div class="flex flex-col ml-1 w-[81%] max-md:ml-0 max-md:w-full">
                                    <div class="flex flex-col grow px-5  max-md:mt-8 max-md:max-w-full">
                                        <div class="flex gap-0 py-px text-xs font-black tracking-wider leading-4 uppercase text-text font-grotesque max-md:flex-wrap">
                                            <a class="hover:text-yellow">CITIZEN STEWART SHOW</a>
                                            <span>–</span>
                                            <a class="hover:text-yellow">EPISODE 86</a>
                                        </div>
                                        <a class="mt-2.5 text-3xl leading-8 text-text font-financierdisplay max-md:max-w-full">
                                            Did All That Pandemic Aid Help?
                                        </a>
                                        <div class="flex gap-2.5 items-start pr-20 pb-2.5 mt-2.5 max-md:flex-wrap max-md:pr-5">
                                            <a href="" class="flex items-center gap-2 mt-2 text-xs font-black tracking-wider leading-6 uppercase text-text font-grotesque hover:underline group">
                                                About episode
                                                <span class="flex flex-col justify-center items-start p-1 text-background bg-text rounded-full border group-hover:bg-pink">
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
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-10 max-md:max-w-full">
                            <div class="flex max-md:flex-col max-md:gap-0 ">
                                <div class="flex flex-col w-[19%] max-md:ml-0 max-md:w-full">
                                    <img loading="lazy"
                                        src="{{Vite::asset("resources/images/Citizen-Stewart.png")}}"
                                        class="shrink-0 max-w-full aspect-square w-[150px] max-md:mt-8" />
                                </div>
                                <div class="flex flex-col ml-1 w-[81%] max-md:ml-0 max-md:w-full">
                                    <div class="flex flex-col grow px-5  max-md:mt-8 max-md:max-w-full">
                                        <div class="flex gap-0 py-px text-xs font-black tracking-wider leading-4 uppercase text-text font-grotesque max-md:flex-wrap">
                                            <a href="#" class="hover:text-yellow">CITIZEN STEWART SHOW</a>
                                            <span>–</span>
                                            <a href="#" class="hover:text-yellow">EPISODE 86</a>
                                        </div>
                                        <a class="mt-2.5 text-3xl leading-8 text-text font-financierdisplay max-md:max-w-full">
                                            Did All That Pandemic Aid Help?
                                        </a>
                                        <div class="flex gap-2.5 items-start pr-20 pb-2.5 mt-2.5 max-md:flex-wrap max-md:pr-5">
                                            <a href="#" class="flex items-center gap-2 mt-2 text-xs font-black tracking-wider leading-6 uppercase text-text font-grotesque hover:underline group">
                                                About episode
                                                <span class="flex flex-col justify-center items-start p-1 text-background bg-text rounded-full border group-hover:bg-pink">
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
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
            </div>
        </div>

    </section>



     <section class="flex flex-col mt-20 px-16 min-h-[100vh]">
        <div class="flex gap-5 justify-between items-center h-[72px] pt-5 w-full max-md:flex-wrap max-md:max-w-full border-t border-solid border-text">
            <div class="text-[80px] font-bold font-manuka uppercase  text-text max-md:text-4xl">
                ARTICLES
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


        <div class="flex flex-col pb-20">
  <div
    class="py-20 w-full border-b border-solid border-text border-opacity-30 max-md:max-w-full"
  >
    <div class="flex gap-5 max-md:flex-col max-md:gap-0">
      <div class="flex flex-col w-[67%] max-md:ml-0 max-md:w-full">
        <img
          loading="lazy"
          srcset="..."
          class="grow w-full aspect-[1.89] max-w-[870px] max-md:mt-5 max-md:max-w-full"
        />
      </div>
      <div class="flex flex-col ml-5 w-[33%] max-md:ml-0 max-md:w-full">
        <div
          class="flex flex-col grow px-5 pb-20 max-md:mt-5 max-md:max-w-full"
        >
          <div
            class="flex gap-0 text-xs font-black tracking-wider leading-4 uppercase text-text max-md:flex-wrap"
          >
            <div>News</div>
            <div>, </div>
            <div>Politics</div>
          </div>
          <div
            class="mt-2.5 text-5xl leading-[50px] text-text max-md:max-w-full max-md:text-4xl max-md:leading-10"
          >
            Introducing “Killing
            <br />
            Justice”
          </div>
          <div
            class="mt-2.5 text-base leading-5 text-neutral-400 max-md:max-w-full"
          >
            By Ravi Gupta
          </div>
          <div
            class="flex gap-3 items-start pr-20 pb-2.5 mt-2.5 max-md:flex-wrap max-md:pr-5"
          >
            <div
              class="text-xs font-black tracking-wider leading-4 uppercase text-text"
            >
              READ IT NOW
            </div>
            <div
              class="flex justify-center items-center px-1.5 w-5 h-5 bg-text rounded-[40px]"
            >
              <img
                loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/a0b1cb41a5a05b5ab36432fbb9471202fce1afbf14b468ceee57336ed6b7200a?"
                class="w-2.5 aspect-square"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="px-5 mt-8 w-full max-md:max-w-full">
    <div class="flex gap-5 max-md:flex-col max-md:gap-0">
      <div class="flex flex-col w-[33%] max-md:ml-0 max-md:w-full">
        <div class="flex flex-col grow self-stretch max-md:mt-8">
          <img
            loading="lazy"
            srcset="..."
            class="w-full aspect-[1.41]"
          />
          <div
            class="flex gap-0 mt-5 text-xs font-black tracking-wider leading-4 uppercase text-text"
          >
            <div>News</div>
            <div>, </div>
            <div>Politics</div>
          </div>
          <div class="mt-2.5 text-3xl leading-8 text-text">
            Israel-Palestine: What to read, watch,
            <br />
            and listen to
          </div>
          <div class="mt-3 text-base leading-5 text-neutral-400">
            By Ravi Gupta
          </div>
          <div class="flex gap-3 items-start pr-20 pb-2.5 mt-2.5 max-md:pr-5">
            <div
              class="text-xs font-black tracking-wider leading-4 uppercase text-text"
            >
              READ IT NOW
            </div>
            <div
              class="flex justify-center items-center px-1.5 w-5 h-5 bg-text rounded-[40px]"
            >
              <img
                loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/db3b1768a54bb85f392a6bdaaf65d7818b30b17606a1fd218cbc3dd0a23fc3aa?"
                class="w-2.5 aspect-square"
              />
            </div>
          </div>
        </div>
      </div>
      <div class="flex flex-col ml-5 w-[33%] max-md:ml-0 max-md:w-full">
        <div class="flex flex-col grow self-stretch pb-8 max-md:mt-8">
          <img
            loading="lazy"
            srcset="..."
            class="w-full aspect-[1.41]"
          />
          <div
            class="mt-5 text-xs font-black tracking-wider leading-4 uppercase text-text"
          >
            Education
          </div>
          <div class="mt-2.5 text-3xl leading-8 text-text">
            The Problem With Kendi
          </div>
          <div class="mt-3 text-base leading-5 text-neutral-400">
            By Ravi Gupta
          </div>
          <div class="flex gap-3 items-start pr-20 pb-2.5 mt-2.5 max-md:pr-5">
            <div
              class="text-xs font-black tracking-wider leading-4 uppercase text-text"
            >
              READ IT NOW
            </div>
            <div
              class="flex justify-center items-center px-1.5 w-5 h-5 bg-text rounded-[40px]"
            >
              <img
                loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/bf7550c28692ecd802c800a9e94ee8ca8e8baf07eb97d6b5f2bac645664110b3?"
                class="w-2.5 aspect-square"
              />
            </div>
          </div>
        </div>
      </div>
      <div class="flex flex-col ml-5 w-[33%] max-md:ml-0 max-md:w-full">
        <div class="flex flex-col grow self-stretch pb-8 max-md:mt-8">
          <img
            loading="lazy"
            srcset="..."
            class="w-full aspect-[1.41]"
          />
          <div
            class="mt-5 text-xs font-black tracking-wider leading-4 uppercase text-text"
          >
            Education
          </div>
          <div class="mt-2.5 text-3xl leading-8 text-text">
            On AI and Inequality
          </div>
          <div class="mt-3 text-base leading-5 text-neutral-400">
            By Ravi Gupta
          </div>
          <div class="flex gap-3 items-start pr-20 pb-2.5 mt-2.5 max-md:pr-5">
            <div
              class="text-xs font-black tracking-wider leading-4 uppercase text-text"
            >
              READ IT NOW
            </div>
            <div
              class="flex justify-center items-center px-1.5 w-5 h-5 bg-text rounded-[40px]"
            >
              <img
                loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/70bfba664e7c55daab896a5951602637788e1d570014a73cbeca276efaaa81e5?"
                class="w-2.5 aspect-square"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



    </section>

</x-layout>

