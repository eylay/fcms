<section class="section-padding gray-bg" id="team-page">
    <div class="container">
        @include('partials.section_title_and_description')
        <div class="row">

            @foreach ($section->contents as $content)
                <div class="col-md-{{$content->cols}}">
                    <div class="single-team">
                        <div class="team-photo">
                            <img src="{{asset($content->picture_path)}}" alt="{{$content->title}}">
                        </div>
                        <h4>{{$content->title}}</h4>
                        <h6>{{$content->subtitle}}</h6>
                        @if ($content->link_name)
                            <div class="social-menu">
                                <a href="{{$content->link_href}}" class="button">{{$content->link_name}}</a>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
