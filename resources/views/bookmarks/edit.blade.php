
{{-- <div class="container">
    <h1>Update Bookmark</h1>

    <form action="{{ route('bookmarks.update', $bookmark->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $bookmark->title }}" required>
        </div>

        <div class="form-group">
            <label for="url">URL</label>
            <input type="url" name="url" class="form-control" value="{{ $bookmark->url }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div> --}}
{{-- {{dd($bookmark)}} --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Bookmark') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                    <form action="{{ route('bookmarks.update', $bookmark->id) }}" method="POST">
                        @csrf
        @method('PUT')
                        <div class="grid grid-cols-4 gap-4">
                            <div class="col-span-2">
                                <x-label for="title" value="{{ __('Title') }}" />
                                <x-form.input id="title" type="text" class="mt-1 block w-full" name="title" placeholder="Nayeem Hassa Profile." value="{{ $bookmark->title }}" required  />
                                <x-input-error for="name" class="mt-2" />
                            </div>
                    
                            <div class="col-span-2">
                                <x-label for="url" value="{{ __('URL') }}" />
                                <x-form.input id="url" type="text" class="mt-1 block w-full" name="url" placeholder="https://www.nayeemhr.com" value="{{ $bookmark->url }}" required  />
                                <x-input-error for="url" class="mt-2" />
                            </div>
                            <div class="col-span-2">
                                @php
                                    $tag_values = $bookmark->tags->pluck('name')->implode(',');
                                @endphp
                                <x-label for="tags" value="{{ __('Tags') }}" />
                                <x-form.input id="tags" type="text" class="mt-1 block w-full" name="tags" placeholder="Tags (comma seperated)" value="{{$tag_values}}"  />
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
                                      <select required class="bg-[length:20px_auto] disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-700/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-700/50 bg-chevron-black transition duration-200 ease-in-out w-full text-sm border-slate-300/60 shadow-sm py-3 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:!bg-darkmode-700 dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:bg-chevron-white sm:w-full rounded-[0.5rem] dark:!box" name="type" id="type">
                                        @php
                                    $type_list = ['video', 'article', 'podcast', 'blog', 'course', 'book', 'tool', 'other'];
                                    @endphp
                                        <option value="">Select</option>
                                        @foreach ($type_list as $item)
                                            <option value="{{$item}}" {{ (old('type') ?? $bookmark->type) == $item ? 'selected' : '' }}>{{ucwords($item)}}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                    
                                  </div>
                            </div>
                            <div class="">
                                <x-label for="status" value="{{ __('Status') }}" />
                                <div class="mt-1">
                                    <div class="relative">
                                      <select required class="bg-[length:20px_auto] disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-700/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-700/50 bg-chevron-black transition duration-200 ease-in-out  w-full text-sm border-slate-300/60 shadow-sm py-3 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:!bg-darkmode-700 dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:bg-chevron-white sm:w-full rounded-[0.5rem] dark:!box " name="status" id="status">
                                        @php
                                    $status_list = ['new', 'in progress', 'completed', 'continue'];
                                    @endphp
    
                                @foreach ($status_list as $item)
                                    <option value="{{$item}}" {{ (old('status') ?? $bookmark->status) == $item ? 'selected' : '' }}>{{ucwords($item)}}</option>
                                @endforeach
                                </select>
                                    </div>
                                    
                                  </div>
                            </div>
                            <div class="col-span-4">
                                <x-label for="notes"  value="{{ __('Notes') }}" />
                                <textarea name="notes"  id="notes" class="mt-1 block bg-[length:20px_auto] disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-700/50 [&amp;[readonly]]:bg-slate-100 [&amp;[readonly]]:cursor-not-allowed [&amp;[readonly]]:dark:bg-darkmode-700/50 bg-chevron-black transition duration-200 ease-in-out w-full text-sm border-slate-300/60 shadow-sm py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:!bg-darkmode-700 dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:bg-chevron-white sm:w-full rounded-[0.5rem] dark:!box" placeholder="Write your Notes here." rows="8" cols="40" >{{ old('notes', $bookmark->notes) }}</textarea>
                                <x-input-error for="notes" class="mt-2" />
                            </div>
                        </div>
                        <x-button type="submit" class="btn btn-primary mt-6">Save</x-button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

</x-app-layout>
