<x-app-layout>
    

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
