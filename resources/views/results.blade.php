<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Search Results') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="py-6 px-5">
                    <div class="col-span-12">
                        <div class="flex flex-col md:h-10 gap-y-3 md:items-center md:flex-row">
                          <div class="text-base font-medium">Search Results</div>
                          <div class="flex flex-col sm:flex-row gap-x-3 gap-y-2 md:ml-auto">
                            <div class="relative">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-check2 absolute inset-y-0 left-0 z-10 w-4 h-4 my-auto ml-3 stroke-[1.3]">
                                <path d="M21 14V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h8"></path>
                                <line x1="16" x2="16" y1="2" y2="6"></line>
                                <line x1="8" x2="8" y1="2" y2="6"></line>
                                <line x1="3" x2="21" y1="10" y2="10"></line>
                                <path d="m16 20 2 2 4-4"></path>
                              </svg>
                              <select class="bg-[length:20px_auto] disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-700/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-700/50 bg-chevron-black transition duration-200 ease-in-out w-full text-sm border-slate-300/60 shadow-sm py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:!bg-darkmode-700 dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:bg-chevron-white sm:w-44 rounded-[0.5rem] pl-9 dark:!box">
                                <option value="custom-date">Custom Date</option>
                                <option value="daily">Daily</option>
                                <option value="weekly">Weekly</option>
                                <option value="monthly">Monthly</option>
                                <option value="yearly">Yearly</option>
                              </select>
                            </div>
                            
                          </div>
                        </div>
                        <div class="mt-2 overflow-auto lg:overflow-visible">
                          <table class="w-full text-left border-spacing-y-[10px] border-separate">
                            <thead>
                              

                                @foreach ($bookmarks as $bookmark)
                                    <div class=" space-y-6">
                                        <x-bookmarks.card  :$bookmark/>
                                    </div>
                                @endforeach

                              
          
                            </thead>
                          </table>
                        </div>
                        <div class="flex flex-col-reverse flex-wrap items-center mt-3 flex-reverse gap-y-2 sm:flex-row">
                          <nav class="flex-1 w-full mr-auto sm:w-auto">
                            <ul class="flex w-full mr-0 sm:w-auto sm:mr-auto">
                              <li class="flex-1 sm:flex-initial">
                                <a class="transition duration-200 border py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] font-normal flex items-center justify-center text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 h-full shadow-none border-transparent">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevrons-left stroke-[1] w-4 h-4">
                                    <path d="m11 17-5-5 5-5"></path>
                                    <path d="m18 17-5-5 5-5"></path>
                                  </svg>
                                </a>
                              </li>
                              <li class="flex-1 sm:flex-initial">
                                <a class="transition duration-200 border py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] font-normal flex items-center justify-center text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 h-full shadow-none border-transparent">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left stroke-[1] w-4 h-4">
                                    <path d="m15 18-6-6 6-6"></path>
                                  </svg>
                                </a>
                              </li>
                              <li class="flex-1 sm:flex-initial">
                                <a class="transition duration-200 border py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] font-normal flex items-center justify-center text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 h-full shadow-none border-transparent">...</a>
                              </li>
                              <li class="flex-1 sm:flex-initial">
                                <a class="transition duration-200 border py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] font-normal flex items-center justify-center text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 h-full shadow-none border-transparent">1</a>
                              </li>
                              <li class="flex-1 sm:flex-initial">
                                <a class="transition duration-200 border shadow-sm py-2 cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] flex items-center justify-center text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 h-full rounded-[0.5rem] bg-white font-medium dark:bg-darkmode-400">2</a>
                              </li>
                              <li class="flex-1 sm:flex-initial">
                                <a class="transition duration-200 border py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] font-normal flex items-center justify-center text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 h-full shadow-none border-transparent">3</a>
                              </li>
                              <li class="flex-1 sm:flex-initial">
                                <a class="transition duration-200 border py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] font-normal flex items-center justify-center text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 h-full shadow-none border-transparent">...</a>
                              </li>
                              <li class="flex-1 sm:flex-initial">
                                <a class="transition duration-200 border py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] font-normal flex items-center justify-center text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 h-full shadow-none border-transparent">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right stroke-[1] w-4 h-4">
                                    <path d="m9 18 6-6-6-6"></path>
                                  </svg>
                                </a>
                              </li>
                              <li class="flex-1 sm:flex-initial">
                                <a class="transition duration-200 border py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] font-normal flex items-center justify-center text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 h-full shadow-none border-transparent">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevrons-right stroke-[1] w-4 h-4">
                                    <path d="m6 17 5-5-5-5"></path>
                                    <path d="m13 17 5-5-5-5"></path>
                                  </svg>
                                </a>
                              </li>
                            </ul>
                          </nav>
                          <select class="bg-[length:20px_auto] disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-700/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-700/50 bg-chevron-black transition duration-200 ease-in-out w-full text-sm border-slate-300/60 shadow-sm py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:!bg-darkmode-700 dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:bg-chevron-white sm:w-20 rounded-[0.5rem] dark:!box">
                            <option>10</option>
                            <option>25</option>
                            <option>35</option>
                            <option>50</option>
                          </select>
                        </div>
                      </div>
                </section>

            </div>
        </div>
    </div>
</x-app-layout> 