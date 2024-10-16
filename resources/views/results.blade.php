<x-app-layout>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden sm:rounded-lg">
                <section class="py-6 px-5">
                    <div class="col-span-12">
                        <div class="flex flex-col md:h-10 gap-y-3 md:items-center md:flex-row">
                          <div class="font-heading text-xl mb-4 font-semibold">Search Results for "{{ request('q') }}"</div>
                        </div>
                        

                              
                        
                        <div class="mt-2 overflow-auto lg:overflow-visible">
                          @if ($tags->isEmpty() && $bookmarks->isEmpty())
                            <p>Opss. No tag or bookmark found.</p>
                          @endif
                          <table class="w-full text-left border-spacing-y-[10px] border-separate">
                            <thead>
                              @if (!$tags->isEmpty())
                                @foreach($tags as $tag)
                                <x-tag :$tag size='base' />
                                @endforeach
                              @endif
                              @if(!$tags->isEmpty() && !$bookmarks->isEmpty())

                              <div class="w-full mt-4 border-b border-neutral-200 dark:border-neutral-200"></div>
                              @endif

                              @if (!$bookmarks->isEmpty())
                              @foreach ($bookmarks as $bookmark)
                                  <div class=" space-y-6">
                                      <x-bookmarks.card  :$bookmark/>
                                  </div>
                              @endforeach
                              @endif
                              
                              
                              
                            </thead>
                          </table>
                        </div>
                      </div>
                </section>

            </div>
        </div>
    </div>
</x-app-layout> 