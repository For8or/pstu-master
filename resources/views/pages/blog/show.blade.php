<x-base-layout>
    {{-- Meta Description --}}
    {{--@section('meta_description',$post->metaDescription())--}}
    {{-- Title --}}
    @section('title', $post->title)
    <main class="min-h-screen pb-1">
        <section class ="container pt-24 mx-auto space-y-4 ">
            <article class="pb-1 md:py-4 bg-white rounded-md">
                <img class="rounded-md mx-auto" src="{{ Storage::url('images/' . $post->cover_image)}}" >
                <h1 class="pl-4 mb-2 text-2xl font-bold"> {{$post->title}}</h1>
                <div class="pl-4"> {!! $post->body !!}</div>
            </article>
        </section>
    </main>
</x-base-layout>