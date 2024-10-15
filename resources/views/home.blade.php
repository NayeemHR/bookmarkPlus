<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                            <section class="py-6 px-5">
                                <div class="text-base font-medium">Recent Tags</div>
                                <div class="mt-4 space-x-1">
                                    @foreach ($tags as $tag)
                                    <x-tag :$tag size='base'/>
                                @endforeach
                                </div>
                            </section>
            
                            <section class="py-6 px-5">
                                <div class="col-span-12">
                                    <div class="flex flex-col md:h-10 gap-y-3 md:items-center md:flex-row">
                                      <div class="text-base font-medium">Recent Bookmarks</div>
                                      
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
