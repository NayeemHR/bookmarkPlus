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
        <a href="{{route('bookmarks.index')}}">Bookmarks</a>
      </li>
      
      <li>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
        </svg>

      </li>
      <li>
        <span class="opacity-50">Tag: {{ $tag->name }}</span>
      </li>
    </ul>
  </x-slot>
      
  
      
      <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              <div class=" overflow-hidden sm:rounded-lg">
                  <section class="py-6 px-5">
                      <div class="col-span-12">
                          <div class="flex flex-col md:h-10 gap-y-3 md:items-center md:flex-row">
                            <div class="font-heading text-xl mb-4 font-semibold">Tag: "{{ $tag->name }}"</div>
                          </div>
                          
                          @if($bookmarks->isEmpty() )
                              <p>No bookmarks found.</p>
                          @else
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
                          @endif
                        </div>
                  </section>
  
              </div>
          </div>
      </div>
  </x-app-layout> 