<x-base-layout>
    {{-- Meta Description --}}
    {{--@section('meta_description',$post->metaDescription())--}}
    {{-- Title --}}
    @section('title', $post->title)
    <main class="min-h-screen">
        <section class ="container pt-24 mx-auto space-y-4">
            <article class="p-4 bg-white">
                <img src="{{ Storage::url('images/' . $post->cover_image)}}" >
                <h1 class="mb-2 text-2xl font-bold"> {{$post->title}}</h1>
                <div> {!! $post->body !!}</div>
            </article>
        </section>
    </main>
</x-base-layout>