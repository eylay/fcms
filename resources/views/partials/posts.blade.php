<section class="section-padding gray-bg" id="blog-page">
    <div class="container">

        @include('partials.section_title_and_description')
        
        <div class="row">

            @foreach ($section->contents as $content)

                <div class="col-xs-12 col-sm-4">
                    <div class="single-blog">
                        <div class="blog-photo">
                            <img src="{{asset($content->picture_path)}}" alt="{{$content->title}}">
                        </div>
                        <div class="blog-content">
                            <h3>{{$content->title}}</h3>
                            <p>{{$content->description}}</p>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
</section>
