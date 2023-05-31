<x-base-layout>
    <main class="min-h-screen">
        <section class="container pt-24 mx-auto space-y-4">

            {{-- Header --}}
            <header class="container max-w-screen-lg mx-auto flex">
                <img class="mx-auto" src="{{ asset('img/other/news.gif') }}" alt="news" />
            </header>

            {{-- Livewire ShowPost --}}
            <livewire:post.show-post>

        </section>
    </main>
</x-base-layout>
