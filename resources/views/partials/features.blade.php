<section class="gray-bg section-padding" id="feature-page">
    <div class="container">
        @include('partials.section_title_and_description')
        <div class="row">

            @foreach ($section->contents as $content)
                <div class="col-md-{{$content->cols ?? 3}}" style="float:right">
                    <div class="box">
                        <div class="box-icon">
                            @if ($content->picture_path)
                                <img src="{{asset($content->picture_path)}}" alt="{{$content->title}}">
                            @else
                                <i class="fa fa-{{$content->icon}} fa-4x"></i>
                            @endif
                        </div>
                        <h3>{{$content->title}}</h3>
                        <p>{{$content->description}}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
