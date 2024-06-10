<x-layout>
    <div class="container-fluid pt-5 pb-5">
        <div class="container text-center">
            <h2 class="display-3" id="blog">{{ $title }}</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum ab quae voluptatem eius cupiditate
                recusandae quo ratione amet fugiat nemo.</p>

            <div class="container">
                <div class="row">
                    @foreach ($posts as $posts)
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('img/news/img07.jpg') }}" class="card-img-top" alt="article">
                                <div class="card-body text-start">
                                    <h5 class="card-title">{{ $posts['title'] }}</h5>
                                    <p class="card-text text-left">{{ Str::limit($posts['body'],50) }}</p>
                                </div>
                                <div class="card-body text-start">
                                    <a href="#" class="card-link text-left">{{ $posts['author'] }}</a>
                                    <a href="/posts/{{$posts['slug']}}" class="card-link text-right">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>




    </div>
    </div>
</x-layout>
