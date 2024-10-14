@props(['newbookmark'])

<x-panel class="flex flex-row ">
    <div class="relative w-2/5 m-0 overflow-hidden text-gray-700 bg-white rounded-r-none bg-clip-border rounded-xl shrink-0">
        <img
            src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1471&amp;q=80"
            alt="card-image" class="object-cover w-full h-full" />
    </div>
    <div class="flex flex-col w-3/5 p-4">
        <div class="self-start text-sm">
            {{$newbookmark->owner->name}}
        </div>
        <div class="py-2 ">
            <h3 class="group-hover:text-blue-600 text-xl font-bold transition-colors duration-300"><a href="{{$newbookmark->url}}" target="_blank">{{$newbookmark->title}}</a></h3>
            {{-- <p class="text-sm mt-2">{{ $newbookmark->notes}}</p> --}}
        </div>
        <div class="flex justify-between items-center mt-auto">
            <div class="">
                @foreach ($newbookmark->tags as $tag)
                <x-tag :$tag size="base" />
                @endforeach
            </div>

            {{-- <x-employer-logo :employer="$bookmark->employer" size="small"/> --}}
        </div>
    </div>

</x-panel>
