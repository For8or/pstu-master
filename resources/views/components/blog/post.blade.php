<div class="p-4 bg-white rounded shadow">
    <a href="{{route('blog.show',$post)}}" class="space-y-4">
        <h2 class="text-xl font-bold">{{ $post->title }}</h2>
        <p>{!! Str::limit(($post->body), 100, '....') !!}</p>
    </a>
</div>
