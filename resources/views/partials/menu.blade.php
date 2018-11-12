<div class="mainmenu-area" data-spy="affix" data-offset-top="100">
    <div class="container">
        <!--Logo-->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand logo">
                <h2>colid</h2>
            </a>
        </div>
        <!--Logo/-->
        <nav class="collapse navbar-collapse" id="primary-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#home-page"> <i class="fa fa-home"></i> خانه </a></li>
                @foreach ($menu_items as $item)
                    <li><a href="{{$item->link}}"> <i class="fa fa-{{$item->icon}}"></i> {{$item->name}} </a></li>
                @endforeach
            </ul>
        </nav>
    </div>
</div>
