<x-layout>
    <div class="container pt-5">
        @if ($post->gambar)
            <img src="{{ url('img/banner').'/'. $post->gambar }}" class="card-img-top" alt="article">
        @endif
        <h5 class="card-title">{{ $post['title'] }}</h5>
        <p class="card-text text-left">{{ $post['body'] }}</p>
        <a href="/posts" class="card-link text-right">&laquo; Back</a>
    </div>
</x-layout>
