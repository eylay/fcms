<section class="section-padding overlay client-area overlay" id="client-page">
    <div class="container">
        <div class="row text-center">
            <div class="col-xs-12">
                <div class="clients">
                    @foreach ($section->contents as $content)
                        <div class="item">
                            <img src="{{asset($content->picture_path)}}" alt="{{$content->title}}">
                            <strong> {{$content->title}} </strong>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
