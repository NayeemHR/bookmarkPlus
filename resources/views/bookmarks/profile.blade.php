<x-app-layout>
    <x-slot name="header">
      <ul class="flex font-semibold font-nunito nav-x justify-center items-center gap-1 fs-7 m-0 fw-bold">
  
        <li >
          <a class="flex" href="{{route('home')}}">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
          </svg>Home
          </a>
        </li>
        <li>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
          </svg>
  
        </li>
        <li>
          <a href="">Profile</a>
        </li>
        
        <li>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
          </svg>
  
        </li>
        <li>
          <span class="opacity-50">{{ $userinfo->name }}</span>
        </li>
      </ul>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                
                <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                    
                    
                    <div class="p-1.5 box flex flex-col box--stacked">
                        <div class="h-48 relative w-full rounded-[0.6rem] bg-gradient-to-b from-theme-1/95 to-theme-2/95">
                          <div class="w-full h-full relative overflow-hidden before:content-[''] before:absolute before:inset-0 before:bg-texture-white before:-mt-[50rem] after:content-[''] after:absolute after:inset-0 after:bg-texture-white after:-mt-[50rem]"></div>
                          <div class="absolute inset-x-0 top-0 w-32 h-32 mx-auto mt-24">
                            {{-- {{$userinfo}} --}}
                            <div class="w-full h-full overflow-hidden border-[6px] box border-white rounded-full image-fit">
                              <img alt="Tailwise - Admin Dashboard Template" src="{{ $userinfo->profile_photo_url }}">
                            </div>
                            <div class="absolute bottom-0 right-0 w-5 h-5 mb-2.5 mr-2.5 border-2 border-white rounded-full bg-success box dark:bg-success"></div>
                          </div>
                        </div>
                        <div class="rounded-[0.6rem] bg-slate-50 pt-12 pb-6 dark:bg-darkmode-500">
                          <div class="flex items-center justify-center text-xl font-medium">Brad Pitt <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-badge-check stroke-[1] w-5 h-5 ml-2 text-blue-500 fill-blue-500/30">
                              <path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"></path>
                              <path d="m9 12 2 2 4-4"></path>
                            </svg>
                          </div>
                          <div class="flex flex-col sm:flex-row items-center justify-center gap-y-2 gap-x-5 mt-2.5">
                            <div class="flex items-center text-slate-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-signal w-3.5 h-3.5 mr-1.5 stroke-[1.3]">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                                  </svg>
                                  {{$bookmarks->count()}}
                            </div>
                            
                            <div class="flex items-center text-slate-500">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-signal w-3.5 h-3.5 mr-1.5 stroke-[1.3]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                              </svg>
                              
                              
                              {{ \Carbon\Carbon::parse($userinfo->created_at)->format('d-m-Y') }}
                            </div>
                          </div>
                        </div>
                      </div>


                </div>
            </div>
        </div>
    </div>

    <div class="transition-[margin,width] duration-100 px-5 pt-[39px] pb-16 xl:ml-[91px]">
        <div class="container mt-[65px]">
          <div class="grid grid-cols-12 gap-y-10 gap-x-6">
            <div class="col-span-12">
              
              <div class="mt-10">
                <div class="flex flex-col 2xl:items-center 2xl:flex-row gap-y-3">
                  <ul class="p-0.5 border bg-slate-50/70 dark:bg-transparent dark:border-darkmode-400 flex flex-col sm:flex-row w-full 2xl:w-auto mr-auto box rounded-[0.6rem] border-slate-200" role="tablist" aria-orientation="horizontal">
                    <li class="focus-visible:outline-none flex-1 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&amp;[aria-selected='true']_button]:text-current" id="headlessui-tabs-tab-:r1:" role="tab" aria-selected="false" tabindex="-1" data-headlessui-state="" aria-controls="headlessui-tabs-panel-:ra:">
                      <button class="cursor-pointer appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 dark:border-transparent w-full xl:w-40 py-2.5 text-slate-500 whitespace-nowrap rounded-[0.6rem] flex items-center justify-center text-[0.94rem]">Profile</button>
                    </li>
                    <li class="focus-visible:outline-none flex-1 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&amp;[aria-selected='true']_button]:text-current" id="headlessui-tabs-tab-:r2:" role="tab" aria-selected="false" tabindex="-1" data-headlessui-state="" aria-controls="headlessui-tabs-panel-:rd:">
                      <button class="cursor-pointer appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 dark:border-transparent w-full xl:w-40 py-2.5 text-slate-500 whitespace-nowrap rounded-[0.6rem] flex items-center justify-center text-[0.94rem]">Events <div class="flex items-center justify-center h-5 px-1.5 ml-2 text-xs font-medium border rounded-full text-theme-1/70 bg-theme-1/10 border-theme-1/10">7</div>
                      </button>
                    </li>
                    <li class="focus-visible:outline-none flex-1 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&amp;[aria-selected='true']_button]:text-current" id="headlessui-tabs-tab-:r3:" role="tab" aria-selected="false" tabindex="-1" data-headlessui-state="" aria-controls="headlessui-tabs-panel-:re:">
                      <button class="cursor-pointer appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 dark:border-transparent w-full xl:w-40 py-2.5 text-slate-500 whitespace-nowrap rounded-[0.6rem] flex items-center justify-center text-[0.94rem]">Achievements</button>
                    </li>
                    <li class="focus-visible:outline-none flex-1 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&amp;[aria-selected='true']_button]:text-current" id="headlessui-tabs-tab-:r4:" role="tab" aria-selected="false" tabindex="-1" data-headlessui-state="" aria-controls="headlessui-tabs-panel-:rf:">
                      <button class="cursor-pointer appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 dark:border-transparent w-full xl:w-40 py-2.5 text-slate-500 whitespace-nowrap rounded-[0.6rem] flex items-center justify-center text-[0.94rem]">Contacts <div class="flex items-center justify-center h-5 px-1.5 ml-2 text-xs font-medium border rounded-full text-theme-1/70 bg-theme-1/10 border-theme-1/10">5</div>
                      </button>
                    </li>
                    <li class="focus-visible:outline-none flex-1 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&amp;[aria-selected='true']_button]:text-current" id="headlessui-tabs-tab-:r5:" role="tab" aria-selected="true" tabindex="0" data-headlessui-state="selected" aria-controls="headlessui-tabs-panel-:rg:">
                      <button class="cursor-pointer appearance-none px-3 transition-colors border shadow-sm font-medium border-slate-200 bg-white dark:text-slate-300 dark:bg-darkmode-400 dark:border-darkmode-400 w-full xl:w-40 py-2.5 text-slate-500 whitespace-nowrap rounded-[0.6rem] flex items-center justify-center text-[0.94rem]">Default</button>
                    </li>
                  </ul>
                  <div class="flex items-center gap-3 2xl:ml-auto">
                    <div class="relative mr-auto 2xl:mr-0" data-headlessui-state="">
                      <button class="transition duration-200 border shadow-sm inline-flex items-center justify-center px-3 font-medium focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary/70 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-400 dark:text-slate-300 [&amp;:hover:not(:disabled)]:bg-slate-100 [&amp;:hover:not(:disabled)]:border-slate-100 [&amp;:hover:not(:disabled)]:dark:border-darkmode-300/80 [&amp;:hover:not(:disabled)]:dark:bg-darkmode-300/80 cursor-pointer rounded-[0.6rem] bg-white py-3" id="headlessui-menu-button-:r6:" aria-haspopup="menu" aria-expanded="false" data-headlessui-state="" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-download stroke-[1.3] w-4 h-4 mr-2">
                          <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                          <polyline points="7 10 12 15 17 10"></polyline>
                          <line x1="12" x2="12" y1="15" y2="3"></line>
                        </svg>
                        <span class="truncate max-w-[3.8rem] sm:max-w-none">Share Profile</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down stroke-[1.3] w-4 h-4 ml-2">
                          <path d="m6 9 6 6 6-6"></path>
                        </svg>
                      </button>
                    </div>
                    <div class="relative inline-block" data-headlessui-state="">
                      <button class="transition duration-200 border shadow-sm inline-flex items-center justify-center px-3 font-medium focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&amp;:hover:not(:disabled)]:bg-secondary/20 [&amp;:hover:not(:disabled)]:dark:bg-darkmode-100/10 cursor-pointer rounded-[0.6rem] bg-white py-3 dark:bg-darkmode-400" aria-expanded="false" data-headlessui-state="" type="button" id="headlessui-popover-button-:r7:">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-down-wide-narrow stroke-[1.3] w-4 h-4 mr-2">
                          <path d="m3 16 4 4 4-4"></path>
                          <path d="M7 20V4"></path>
                          <path d="M11 4h10"></path>
                          <path d="M11 8h7"></path>
                          <path d="M11 12h4"></path>
                        </svg>Teams <div class="flex items-center justify-center h-5 px-1.5 ml-2 text-xs font-medium border rounded-full bg-slate-100 dark:bg-darkmode-400">42</div>
                      </button>
                    </div>
                    <div hidden="" style="position: fixed; top: 1px; left: 1px; width: 1px; height: 0px; padding: 0px; margin: -1px; overflow: hidden; clip: rect(0px, 0px, 0px, 0px); white-space: nowrap; border-width: 0px; display: none;"></div>
                    <div class="relative" data-headlessui-state="">
                      <button class="transition duration-200 border shadow-sm inline-flex items-center justify-center px-3 font-medium focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary/70 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-400 dark:text-slate-300 [&amp;:hover:not(:disabled)]:bg-slate-100 [&amp;:hover:not(:disabled)]:border-slate-100 [&amp;:hover:not(:disabled)]:dark:border-darkmode-300/80 [&amp;:hover:not(:disabled)]:dark:bg-darkmode-300/80 cursor-pointer rounded-[0.6rem] bg-white py-3 text-[0.94rem]" id="headlessui-menu-button-:r9:" aria-haspopup="menu" aria-expanded="false" data-headlessui-state="" type="button">
                        <div class="flex items-center justify-center w-5 h-5">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-more-vertical stroke-[1.3] w-4 h-4">
                            <circle cx="12" cy="12" r="1"></circle>
                            <circle cx="12" cy="5" r="1"></circle>
                            <circle cx="12" cy="19" r="1"></circle>
                          </svg>
                        </div>
                      </button>
                    </div>
                  </div>
                </div>
                <div>
                  <span aria-hidden="true" id="headlessui-tabs-panel-:ra:" role="tabpanel" aria-labelledby="headlessui-tabs-tab-:r1:" tabindex="-1" style="position: fixed; top: 1px; left: 1px; width: 1px; height: 0px; padding: 0px; margin: -1px; overflow: hidden; clip: rect(0px, 0px, 0px, 0px); white-space: nowrap; border-width: 0px;"></span>
                  <span aria-hidden="true" id="headlessui-tabs-panel-:rd:" role="tabpanel" tabindex="-1" style="position: fixed; top: 1px; left: 1px; width: 1px; height: 0px; padding: 0px; margin: -1px; overflow: hidden; clip: rect(0px, 0px, 0px, 0px); white-space: nowrap; border-width: 0px;" aria-labelledby="headlessui-tabs-tab-:r2:"></span>
                  <span aria-hidden="true" id="headlessui-tabs-panel-:re:" role="tabpanel" tabindex="-1" style="position: fixed; top: 1px; left: 1px; width: 1px; height: 0px; padding: 0px; margin: -1px; overflow: hidden; clip: rect(0px, 0px, 0px, 0px); white-space: nowrap; border-width: 0px;" aria-labelledby="headlessui-tabs-tab-:r3:"></span>
                  <span aria-hidden="true" id="headlessui-tabs-panel-:rf:" role="tabpanel" tabindex="-1" style="position: fixed; top: 1px; left: 1px; width: 1px; height: 0px; padding: 0px; margin: -1px; overflow: hidden; clip: rect(0px, 0px, 0px, 0px); white-space: nowrap; border-width: 0px;" aria-labelledby="headlessui-tabs-tab-:r4:"></span>
                  <div id="headlessui-tabs-panel-:rg:" role="tabpanel" aria-labelledby="headlessui-tabs-tab-:r5:" tabindex="0" data-headlessui-state="selected">
                    <div class="flex flex-col items-center py-14 box box--stacked mt-3.5">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-lock2 stroke-[0.3] w-24 h-24 text-primary/70 fill-primary/5">
                        <path d="M4 5V4a2 2 0 0 1 2-2h8.5L20 7.5V20a2 2 0 0 1-2 2H4"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <rect width="8" height="5" x="2" y="13" rx="1"></rect>
                        <path d="M8 13v-2a2 2 0 1 0-4 0v2"></path>
                      </svg>
                      <div class="mt-5 text-base font-medium">Two-Factor Authentication (2FA)</div>
                      <div class="px-10 mt-1 text-center text-slate-500">Enhance your account security by enabling Two-Factor Authentication in the settings.</div>
                      <button class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lock stroke-[1.3] w-4 h-4 mr-2 -ml-0.5">
                          <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                          <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>Enable Now </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      
  
  </x-app-layout>
  