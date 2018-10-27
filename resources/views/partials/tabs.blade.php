<section class="angle-bg sky-bg section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div id="caption_slide" class="carousel slide caption-slider" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">

                            @foreach ($section->contents as $key => $content)
                                <div class="item row @if($key==0) active @endif">
                                    <div class="v-center">
                                        <div class="col-xs-12 col-md-6">
                                            <div class="caption-title" data-animation="animated fadeInUp">
                                                <h2>{{$content->title}}</h2>
                                            </div>
                                            <div class="caption-desc" data-animation="animated fadeInUp">
                                                <p>{{$content->description}}</p>
                                            </div>
                                            @if ($content->link_name)
                                                <div class="caption-button" data-animation="animated fadeInUp">
                                                    <a href="{{$content->link_href}}" class="button">{{$content->link_name}}</a>
                                                </div>
                                            @endif
                                        </div>
                                        @if ($content->picture1)
                                            <div class="col-xs-6 col-md-3">
                                                <div class="caption-photo one" data-animation="animated fadeInRight">
                                                    <img src="{{asset($content->picture1)}}">
                                                </div>
                                            </div>
                                        @endif
                                        @if ($content->picture2)
                                            <div class="col-xs-6 col-md-3">
                                                <div class="caption-photo two" data-animation="animated fadeInRight">
                                                    <img src="{{asset($content->picture2)}}">
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach

                    </div>
                    <!-- Indicators -->
                    <ol class="carousel-indicators caption-indector">

                        @foreach ($section->contents as $key => $content)
                            <li data-target="#caption_slide" data-slide-to="{{$key}}" @if($key==0) class="active" @endif>
                                <strong> {{$content->subtitle}} </strong>
                            </li>
                        @endforeach

                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
