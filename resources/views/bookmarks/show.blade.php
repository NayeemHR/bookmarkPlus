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
        <span class="opacity-50">{{ $bookmark->title }}</span>
      </li>
    </ul>
  </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                
                <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                    
                    <div class="nc-SingleHeader ">
                        <div class="space-y-5">
                          <div class="nc-CategoryBadgeList flex flex-wrap space-x-2" data-nc-id="CategoryBadgeList">
                            <div class="">
                                @foreach ($bookmark->tags as $tag)
                                <x-tag :$tag size='small' />
                                @endforeach
                            </div>
                          </div>
                            <h1 class=" text-neutral-900 font-semibold text-3xl md:text-4xl md:!leading-[150%] lg:text-5xl dark:text-black-100 max-w-4xl font-heading " title="Trending web &amp; landing page designs in 2023">{{ $bookmark->title }}
                            </h1>
                            <a href="{{$bookmark->url}}" target="_blank" class="font-semibold text-cyan-700 hover:underline text-sm">
                                {{ $bookmark->url }}
                              </a>
                          
                          <div class="w-full border-b border-neutral-200 dark:border-neutral-200"></div>
                          <div class="flex flex-col sm:flex-row justify-between sm:items-end space-y-5 sm:space-y-0 sm:space-x-5 rtl:space-x-reverse">
                            <div class="nc-PostMeta2 flex items-center flex-wrap text-neutral-700 text-left dark:text-neutral-200 text-sm leading-none flex-shrink-0">
                              <a class="flex items-center space-x-2 rtl:space-x-reverse" href="/author/the-demo-author-slug">
                                <div class="wil-avatar relative flex-shrink-0 inline-flex items-center justify-center overflow-hidden text-neutral-100 uppercase font-semibold shadow-inner rounded-full shadow-inner h-10 w-10 sm:h-11 sm:w-11 text-xl ring-1 ring-white dark:ring-neutral-900">
                                  <img alt="Foulcher Nathanil" loading="lazy" decoding="async" data-nimg="fill" class="absolute inset-0 w-full h-full object-cover" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent" sizes="100px" srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2F3.054bee42.jpg&amp;w=16&amp;q=75 16w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2F3.054bee42.jpg&amp;w=32&amp;q=75 32w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2F3.054bee42.jpg&amp;w=48&amp;q=75 48w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2F3.054bee42.jpg&amp;w=64&amp;q=75 64w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2F3.054bee42.jpg&amp;w=96&amp;q=75 96w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2F3.054bee42.jpg&amp;w=128&amp;q=75 128w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2F3.054bee42.jpg&amp;w=256&amp;q=75 256w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2F3.054bee42.jpg&amp;w=384&amp;q=75 384w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2F3.054bee42.jpg&amp;w=640&amp;q=75 640w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2F3.054bee42.jpg&amp;w=750&amp;q=75 750w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2F3.054bee42.jpg&amp;w=828&amp;q=75 828w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2F3.054bee42.jpg&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2F3.054bee42.jpg&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2F3.054bee42.jpg&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2F3.054bee42.jpg&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2F3.054bee42.jpg&amp;w=3840&amp;q=75 3840w" src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2F3.054bee42.jpg&amp;w=3840&amp;q=75">
                                  <span class="wil-avatar__name">F</span>
                                </div>
                              </a>
                              <div class="ms-3">
                                <div class="flex items-center">
                                  <a class="block font-semibold" href="/author/the-demo-author-slug">{{$bookmark->owner->name}}</a>
                                </div>
                                <div class="text-xs mt-[6px]">
                                  <span class="text-neutral-700 dark:text-neutral-300">{{ \Carbon\Carbon::parse($bookmark->created_at)->format('d-m-Y') }}</span>
                                  
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="nc-SingleMetaAction2 ">
                              <div class="flex flex-row space-x-2.5 rtl:space-x-reverse items-center">
                                <div class="nc-PostCardLikeAndComment flex space-x-2 ">
                                  <button class="nc-PostCardLikeAction relative min-w-[68px] flex items-center rounded-full leading-none group transition-colors px-4 h-9 text-sm text-neutral-700 bg-neutral-50 dark:text-neutral-200 dark:bg-neutral-800 hover:bg-rose-50 dark:hover:bg-rose-100 hover:text-rose-600 dark:hover:text-rose-500" >
                                    <span class="">{{ucwords($bookmark->type)}}</span>
                                  </button>
                                  <a href="#comments" class="nc-PostCardCommentBtn relative items-center min-w-[68px] rounded-full text-neutral-6000 bg-neutral-50 transition-colors dark:text-neutral-200 dark:bg-neutral-800 hover:bg-teal-50 dark:hover:bg-teal-100 hover:text-teal-600 dark:hover:text-teal-500 hidden sm:flex  px-4 h-9 text-sm " title="Comments">
                                    
                                    <span class="">{{ucwords($bookmark->status)}}</span>
                                  </a>
                                </div>
                                @if (auth()->user()->can('update', $bookmark) || auth()->user()->can('delete', $bookmark))

                                <div class="px-1">
                                  <div class="border-s border-neutral-200 dark:border-neutral-700 h-6"></div>
                                </div>

                                @endif

                                
                                <div class="flex gap-2">
                                    @can('update', $bookmark)

                                    <div class="relative inline-block" data-headlessui-state="">
                                          <a href="{{ route('bookmarks.edit', $bookmark->id) }}" class="btn btn-secondary">
                                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                              <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                              </svg>
                                              
                                          </a>
                                        </div>
                                        @endcan
                                        @can('delete', $bookmark)
                                  <div class="relative inline-block" data-headlessui-state="">
                                     <form action="{{ route('bookmarks.destroy', $bookmark->id) }}" method="POST" style="display:inline;">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-danger">
                                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                  <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                              </svg>
                                          </button>
                                      </form>
                                    </div>
                                    @endcan
                                </div>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="container my-10 sm:my-12">
                        <img alt="single" loading="lazy" width="1260" height="750" decoding="async" data-nimg="1" class="w-full rounded-xl" sizes="(max-width: 1024px) 100vw, 1280px" src="https://placehold.co/600x400" alt="">
                      </div>
                      <div id="single-entry-content" class=" !max-w-screen-md dark:prose-invert">
                        <h4>Notes:</h4>
                        <p>
                            {{$bookmark->notes}}
                        </p>
                      </div>

                      


                </div>
            </div>
        </div>
    </div>

    

</x-app-layout>
