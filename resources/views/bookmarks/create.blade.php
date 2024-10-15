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
          {{-- <li>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
  
          </li>
          <li>
            <a href="/blog">Blog</a>
          </li>
           --}}
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
  
          </li>
          <li>
            <span class="opacity-50">Create Bookmarks</span>
          </li>
        </ul>
      </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden  sm:rounded-lg">
                <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                    <form action="{{ route('bookmarks.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="grid grid-cols-4 gap-4">
                            <div class="col-span-2">
                                <x-label for="title" value="{{ __('Title') }}" />
                                <x-form.input id="title" type="text" class="mt-1 block w-full" name="title" placeholder="Nayeem Hassan's Profile."   />
                                <x-input-error for="name" class="mt-2" />
                            </div>
                    
                            <div class="col-span-2">
                                <x-label for="url" value="{{ __('URL') }}" />
                                <x-form.input id="url" type="text" class="mt-1 block w-full" name="url" placeholder="https://www.nayeemhr.com"   />
                                <x-input-error for="url" class="mt-2" />
                            </div>
                            <div class="col-span-2">
                                <x-label for="tags" value="{{ __('Tags') }}" />
                                <x-form.input id="tags" type="text" class="mt-1 block w-full" name="tags" placeholder="Tags (comma seperated)"   />
                                <x-input-error for="tags" class="mt-2" />
                            </div>
                            <div class="">
                                <x-label for="type" value="{{ __('Type') }}" />
                                <div class="mt-1">
                                    <div class="relative">
                                      {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-check2 absolute inset-y-0 left-0 z-10 w-4 h-4 my-auto ml-3 stroke-[1.3]">
                                        <path d="M21 14V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h8"></path>
                                        <line x1="16" x2="16" y1="2" y2="6"></line>
                                        <line x1="8" x2="8" y1="2" y2="6"></line>
                                        <line x1="3" x2="21" y1="10" y2="10"></line>
                                        <path d="m16 20 2 2 4-4"></path>
                                      </svg> --}}
                                      <select class="bg-[length:20px_auto] disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-700/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-700/50 bg-chevron-black transition duration-200 ease-in-out w-full text-sm border-slate-300/60 shadow-sm py-3 px-3 pr-8   focus:border-gray-300 focus:ring-0 sm:w-full rounded-[0.5rem] dark:!box" name="type" id="type">
                                        @php
                                    $type_list = ['video', 'article', 'podcast', 'blog', 'course', 'book', 'tool', 'other'];
                                    @endphp
                                        <option value="">Select</option>
                                        @foreach ($type_list as $item)
                                            <option value="{{$item}}">{{ucwords($item)}}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                    
                                  </div>
                            </div>
                            <div class="">
                                <x-label for="status" value="{{ __('Status') }}" />
                                <div class="mt-1">
                                    <div class="relative">
                                      <select class="bg-[length:20px_auto] disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-700/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-700/50 bg-chevron-black transition duration-200 ease-in-out  w-full text-sm border-slate-300/60 shadow-sm py-3 px-3 pr-8 focus:border-gray-300 focus:ring-0 sm:w-full rounded-[0.5rem] dark:!box " name="status" id="status">
                                        @php
                                    $status_list = ['new', 'in progress', 'completed', 'continue'];
                                    @endphp
    
                                @foreach ($status_list as $item)
                                    <option value="{{$item}}">{{ucwords($item)}}</option>
                                @endforeach
                                </select>
                                    </div>
                                    
                                  </div>
                            </div>
                            <div class="col-span-4">
                                <x-label for="notes" value="{{ __('Notes') }}" />
                                <textarea name="notes" id="notes" class="mt-1 block bg-[length:20px_auto] disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-700/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-700/50 bg-chevron-black transition duration-200 ease-in-out w-full text-sm border-slate-300/60 shadow-sm py-2 px-3 pr-8 focus:border-gray-300 focus:ring-0 sm:w-full rounded-[0.5rem] dark:!box" placeholder="Write your Notes here." rows="8" cols="40" ></textarea>
                                <x-input-error for="notes" class="mt-2" />
                            </div>
                        </div>
                        <button type="butsubmitton" class=" text-white mt-6  bg-cyan-700 border-cyan-700 px-4 py-3.5 rounded-lg hover:text-white hover:bg-cyan-800 hover:border-cyan-800 " href="{{ route('bookmarks.create') }}">
                            
                            <span class="align-middle">Save</span>
                        </button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

</x-app-layout>
