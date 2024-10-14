<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bookmarks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="py-10 px-5">
                    <x-section-heading>New Bookmarks</x-section-heading>
                    <div class="grid lg:grid-cols-2 gap-8 mt-6">
                            @foreach ($bookmarks as $bookmark)
                                <div class=" space-y-6">
                                    <x-bookmarks.card  :$bookmark/>
                                </div>
                            @endforeach
                    </div>
                </section>
                <section class="py-10 px-5">
                    <x-section-heading>Tags:</x-section-heading>
                    <div class="mt-6 space-x-1">
                        @foreach ($tags as $tag)
                        <x-tag :$tag/>
                    @endforeach
                    </div>
                </section>

            </div>
        </div>
    </div>
</x-app-layout> 