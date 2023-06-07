<div class="p-4 bg-white rounded shadow">
    <a href="{{route('blog.show',$post->slug)}}" class="space-y-4">
        <h2 class="text-xl font-bold">{{ trim(trim($post->title, '<div>'), '</div>') }}</h2>
        <p>{{ trim(trim($post->title, '<div>'), '</div>') }}</p>
    </a>
</div>
