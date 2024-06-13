<x-layout>
    <div class="container-fluid pt-5 pb-5">
        <div class="container text-center">
            <h2 class="display-3" id="blog">{{ $title }}</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum ab quae voluptatem eius cupiditate
                recusandae quo ratione amet fugiat nemo.</p>

            <div class="container">
                <div class="row">
                    @foreach ($posts as $postingan)
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                @if ($postingan->gambar)
                                <img src="{{ url('img/banner').'/'. $postingan->gambar }}" class="card-img-top" alt="article">
                                @endif
                                <div class="card-body text-start">
                                    <h5 class="card-title">{{ $postingan['title'] }}</h5>
                                    <p>{{$postingan->created_at->diffForHumans()}}</p>
                                    <p class="card-text text-left">{{ Str::limit($postingan['body'],50) }}</p>
                                </div>
                                <div class="card-body text-start">
                                    <a href="/authors/{{ $postingan->author->id }}" class="card-link text-left text-decoration-none">{{ $postingan->author->name }}</a>
                                    <a href="/posts/{{$postingan['slug']}}" class="card-link text-right text-decoration-none">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{$posts->links()}}
            </div>

        </div>
    </div>




    </div>
    </div>
</x-layout>
