<section class="price-area overlay section-padding" id="price-page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                <div class="page-title">
                    <h2>Afortable Price</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptates, temporibus at, facere harum fugiat!</p>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach ($section->contents as $content)
                <div class="col-md-{{$content->cols}}">
                    <div class="price-table">
                        @if ($content->icon)
                            <span class="price-info"><i class="fa fa-{{$content->icon}}"></i></span>
                        @endif
                        <h3 class="text-uppercase price-title">{{$content->title}}</h3>
                        <hr>
                        <ul class="list-unstyled">
                            @foreach (explode("\n", $content->description) as $value)
                                <li>{{$value}}</li>
                            @endforeach
                        </ul>
                        <hr>
                        @if ($content->link_name)
                            <a href="{{$content->link_href}}" class="button">{{$content->link_name}}</a>
                        @endif
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
