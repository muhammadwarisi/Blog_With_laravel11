<x-layout>
    <!-- Hot Aimated News Tittle-->
    <div class="row">
        <div class="col-lg-12">
            <div class="trending-tittle">
                <strong>Trending now</strong>
                <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                <div class="trending-animated">
                    <ul id="js-news" class="js-hidden">
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <!-- Trending Tittle -->
            <div class="about-right mb-90">
                <div class="about-img">
                    @if ($post->gambar)
                        <img src="{{ url('img/banner') . '/' . $post->gambar }}" class="card-img-top" alt="article">
                    @endif
                </div>
                <div class="section-tittle mb-30 pt-30">
                    <h3>{{ $post['title'] }}</h3>
                </div>
                <div class="about-prea">
                    <p class="about-pera1 mb-25">{{ $post['body'] }}</p>
                </div> 
                <div class="section-tittle">
                    <h3>Unordered list style?</h3>
                </div>
                <div class="about-prea">
                    <p class="about-pera1 mb-25">The refractor telescope uses a convex lens to focus the light on the eyepiece.
                        The reflector telescope has a concave lens which means it bends in. It uses mirrors to focus the image that you eventually see.</p>
                    <p class="about-pera1 mb-25">Collimation is a term for how well tuned the telescope is to give you a good clear image of what you are looking at. You want your telescope to have good collimation so you are not getting a false image of the celestial body.</p>
                    <p class="about-pera1 mb-25">
                        My hero when I was a kid was my mom. Same for everyone I knew. Moms are untouchable. They’re elegant, smart, beautiful, kind…everything we want to be. At 29 years old, my favorite compliment is being told that I look like my mom. Seeing myself in her image, like this daughter up top, makes me so proud of how far I’ve come, and so thankful for where I come from.
                        the refractor telescope uses a convex lens to focus the light on the eyepiece.
                        The reflector telescope has a concave lens which means it bends in. It uses mirrors to focus the image that you eventually see.
                        Collimation is a term fo
                        Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones who make sure things happen—from birth to school lunch.</p> 
                        <p class="about-pera1 mb-25">
                        Mount and Wedge. Both of these terms refer to the tripod your telescope sits on. The mount is the actual tripod and the wedge is the device that lets you attach the telescope to the mount.
                        Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones who make sure things happen—from birth to school lunch.</p>
                        <p class="about-pera1 mb-25">
                        Mount and Wedge. Both of these terms refer to the tripod your telescope sits on. The mount is the actual tripod and the wedge is the device that lets you attach the telescope to the mount.
                        Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones who make sure things happen—from birth to school lunch.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <!-- Section Tittle -->
            <div class="section-tittle mb-40">
                <h3>Follow Us</h3>
            </div>
            <!-- Flow Socail -->
            <div class="single-follow mb-45">
                <div class="single-box">
                    <div class="follow-us d-flex align-items-center">
                        <div class="follow-social">
                            <a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a>
                        </div>
                        <div class="follow-count">  
                            <span>8,045</span>
                            <p>Fans</p>
                        </div>
                    </div> 
                    <div class="follow-us d-flex align-items-center">
                        <div class="follow-social">
                            <a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a>
                        </div>
                        <div class="follow-count">
                            <span>8,045</span>
                            <p>Fans</p>
                        </div>
                    </div>
                        <div class="follow-us d-flex align-items-center">
                        <div class="follow-social">
                            <a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a>
                        </div>
                        <div class="follow-count">
                            <span>8,045</span>
                            <p>Fans</p>
                        </div>
                    </div>
                    <div class="follow-us d-flex align-items-center">
                        <div class="follow-social">
                            <a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a>
                        </div>
                        <div class="follow-count">
                            <span>8,045</span>
                            <p>Fans</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- New Poster -->
            <div class="news-poster d-none d-lg-block">
                <img src="assets/img/news/news_card.jpg" alt="">
            </div>
        </div>
   </div>

        
        <h5 class="card-title">{{ $post['title'] }}</h5>
        <p class="card-text text-left">{{ $post['body'] }}</p>
        <a href="/posts" class="card-link text-right">&laquo; Back</a>
    
</x-layout>
