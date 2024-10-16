<x-app-layout>
    {{-- <section class=" bg-cyan-100" >
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-black">Payments tool for software companies</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">From checkout to global sales tax compliance, companies around the world use Flowbite to simplify their payment stack.</p>
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Get started
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Speak to Sales
                </a> 
            </div>
            {{-- <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ asset('images/hero-bg.jpg') }}" alt="bookmarkPlus">
            </div>                 --}}
        {{--</div>
    </section> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-soft-cream text-charcoal-gray">
                <h1 class="font-heading text-4xl">Welcome to My Website</h1>
                <p class="font-body text-lg">This is some body text using Poppins.</p>
                <button class="font-button bg-terracotta text-soft-cream">Call to Action</button>
              </div> --}}
            <div class="overflow-hidden sm:rounded-lg">
                
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                            <section class="py-6 px-5">
                                <div class="font-heading text-xl font-semibold">Recent Tags</div>
                                <div class="mt-4 space-x-1">
                                    @foreach ($tags as $tag)
                                    <x-tag :$tag size='base'/>
                                @endforeach
                                </div>
                            </section>
            
                            <section class="py-6 px-5">
                                <div class="col-span-12">
                                    <div class="flex flex-col md:h-10 gap-y-3 md:items-center md:flex-row">
                                      <div class="font-heading text-xl font-semibold">Recent Bookmarks</div>
                                      
                                    </div>
                                    <div class="mt-2 overflow-auto lg:overflow-visible">
                                      <table class=" w-full text-left border-spacing-y-[10px] border-separate">
                                        <thead>
                                          
            
                                            @foreach ($bookmarks as $bookmark)
                                                <div class=" space-y-6">
                                                    <x-bookmarks.card  :$bookmark/>
                                                </div>
                                            @endforeach
            
                                          
                      
                                        </thead>
                                      </table>
                                    </div>
                                    
                                  </div>
                            </section>
                            
            
                        </div>
                    
            </div>
        </div>
    </div>
</x-app-layout>
