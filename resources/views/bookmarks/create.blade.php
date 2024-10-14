<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Bookmark') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
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
                                      <select class="bg-[length:20px_auto] disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-700/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-700/50 bg-chevron-black transition duration-200 ease-in-out w-full text-sm border-slate-300/60 shadow-sm py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:!bg-darkmode-700 dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:bg-chevron-white sm:w-full rounded-[0.5rem] dark:!box" name="type" id="type">
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
                                <x-label for="tags" value="{{ __('Status') }}" />
                                <div class="mt-1">
                                    <div class="relative">
                                      <select class="bg-[length:20px_auto] disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-700/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-700/50 bg-chevron-black transition duration-200 ease-in-out  w-full text-sm border-slate-300/60 shadow-sm py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:!bg-darkmode-700 dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:bg-chevron-white sm:w-full rounded-[0.5rem] dark:!box " name="type" id="type">
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
                                <textarea name="notes" id="notes" class="mt-1 block bg-[length:20px_auto] disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-700/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-700/50 bg-chevron-black transition duration-200 ease-in-out w-full text-sm border-slate-300/60 shadow-sm py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:!bg-darkmode-700 dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:bg-chevron-white sm:w-full rounded-[0.5rem] dark:!box" placeholder="Write your Notes here." rows="8" cols="40" ></textarea>
                                <x-input-error for="notes" class="mt-2" />
                            </div>
                        </div>
                        <x-button type="submit" class="btn btn-primary">Save</x-button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

</x-app-layout>
