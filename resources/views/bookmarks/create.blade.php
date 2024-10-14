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
                        <div class="col-span-6 sm:col-span-4 mb-4">
                            <x-label for="title" value="{{ __('Title') }}" />
                            <x-input id="title" type="text" class="mt-1 block w-full" name="title" placeholder="Nayeem Hassan's Profile."   />
                            <x-input-error for="name" class="mt-2" />
                        </div>
                
                        <div class="col-span-6 sm:col-span-4 mb-4">
                            <x-label for="url" value="{{ __('URL') }}" />
                            <x-input id="url" type="text" class="mt-1 block w-full" name="url" placeholder="https://www.nayeemhr.com"   />
                            <x-input-error for="url" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-4 mb-4">
                            <x-label for="tags" value="{{ __('Tags') }}" />
                            <x-input id="tags" type="text" class="mt-1 block w-full" name="tags" placeholder="Tags (comma seperated)"   />
                            <x-input-error for="tags" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-4 mb-4">
                            <x-label for="type" value="{{ __('Type') }}" />
                            <select name="type" id="type">
                                @php
                                $type_list = ['video', 'article', 'podcast', 'blog', 'course', 'book', 'tool', 'other'];
                                @endphp
                            <option value="">Select</option>
                            @foreach ($type_list as $item)
                                <option value="{{$item}}">{{ucwords($item)}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="col-span-6 sm:col-span-4 mb-4">
                            <x-label for="tags" value="{{ __('Status') }}" />
                            <select name="status" id="status">
                                @php
                                $status_list = ['new', 'in progress', 'completed', 'continue'];
                                @endphp

                            @foreach ($status_list as $item)
                                <option value="{{$item}}">{{ucwords($item)}}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="col-span-6 sm:col-span-4 mb-4">
                            <x-label for="notes" value="{{ __('Notes') }}" />
                            <textarea name="notes" id="notes" class="mt-1 block w-full" placeholder="Write your Notes here." ></textarea>
                            <x-input-error for="notes" class="mt-2" />
                        </div>

                        <x-button type="submit" class="btn btn-primary">Save</x-button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

</x-app-layout>
