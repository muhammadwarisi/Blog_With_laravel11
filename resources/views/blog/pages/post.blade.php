<x-layout>
    <div class="container pt-5">
        <img src="{{ asset('img/news/img07.jpg') }}" class="rounded mx-auto d-block" alt="article">
        <h5 class="card-title">{{ $post['title'] }}</h5>
        <p class="card-text text-left">{{ $post['body'] }}</p>
        <a href="/posts" class="card-link text-right">&laquo; Back</a>
    </div>
</x-layout>
