<section class="gray-bg section-padding" id="faq-page">
    <div class="container">
        @include('partials.section_title_and_description')
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <div class="panel-group" id="accordion">

                    @foreach ($section->contents as $content)
                        <div class="panel">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$content->id}}">{{$content->title}}</a>
                            </h4>
                            <div id="collapse{{$content->id}}" class="panel-collapse collapse">
                                <p>{{$content->description}}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
