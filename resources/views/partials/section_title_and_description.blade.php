@if ($section->title || $section->description)
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
            <div class="page-title">
                <h2>{{$section->title}}</h2>
                <p>{{$section->description}}</p>
            </div>
        </div>
    </div>
@endif
