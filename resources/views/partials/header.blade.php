<header class="header-area overlay full-height relative v-center" id="home-page"
    style="background: #000000 url('{{asset($header->bg_path)}}') no-repeat scroll center center / cover;">
    <div class="absolute anlge-bg"></div>
    <div class="container">
        <div class="row v-center">
            <div class="col-xs-12 col-md-7 header-text">
                <h2> {{$header->title}} </h2>
                <p> {{$header->description}} </p>
                <a href="{{$header->btn_link}}" class="button white"> {{$header->btn_name}} </a>
            </div>
            @if ($header->mobile_visible)
                <div class="hidden-xs hidden-sm col-md-5 text-right">
                    <div class="screen-box screen-slider">
                        @foreach ($header->photos as $photo)
                            <div class="item">
                                <img src="{{$photo->path}}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</header>
