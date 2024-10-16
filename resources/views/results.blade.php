<x-app-layout>
  {{-- <x-slot name="header">
    <ul class="flex font-semibold font-nunito nav-x justify-center items-center gap-1 fs-7 m-0 fw-bold">

      <li >
        <a class="flex" href="">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 mr-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" /></svg><h1>Search Results for "{{ request('q') }}"</h1>
        </a>
      </li>
      
    </ul>
  </x-slot> --}}
    

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden sm:rounded-lg">
                <section class="py-6 px-5">
                    <div class="col-span-12">
                        <div class="flex flex-col md:h-10 gap-y-3 md:items-center md:flex-row">
                          <div class="font-heading text-xl mb-4 font-semibold">Search Results for "{{ request('q') }}"</div>
                        </div>
                        @endif
                              @if (!$tags->isEmpty())
                              @foreach($tags as $tag)
                               <x-tag :$tag size='base' />
                              @endforeach
                              @endif

                              <div class="w-full mt-4 border-b border-neutral-200 dark:border-neutral-200"></div>
                              
                        @if($bookmarks->isEmpty() ?? $tags->isEmpty() )
                            <p>No bookmarks found.</p>
                        @else
                        <div class="mt-2 overflow-auto lg:overflow-visible">
                          <table class="w-full text-left border-spacing-y-[10px] border-separate">
                            <thead>
                              @if (!$bookmarks->isEmpty())
                              @foreach ($bookmarks as $bookmark)
                                  <div class=" space-y-6">
                                      <x-bookmarks.card  :$bookmark/>
                                  </div>
                              @endforeach
                              
                              
                            </thead>
                          </table>
                        </div>
                        @endif
                      </div>
                </section>

            </div>
        </div>
    </div>
</x-app-layout> 