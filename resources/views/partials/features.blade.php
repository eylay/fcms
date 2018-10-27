<section class="gray-bg section-padding" id="feature-page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                <div class="page-title">
                    <h2>SPECIAL FEATURES</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptates, temporibus at, facere harum fugiat!</p>
                </div>
            </div>
        </div>
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
