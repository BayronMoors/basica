<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            @foreach (App\Models\Work::where('inSlider', '=',  1)->inRandomOrder()->limit(2)->get() as $key => $work)
            <li data-target="#main-slider" data-slide-to="{{ $key + 1}}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            <div class="item active" style="background-image: url(img/slides/1.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content centered">
                                <h2 class="animation animated-item-1">Welcome to BASICA! A Bootstrap3 Template</h2>
                                <p class="animation animated-item-2">Sed mattis enim in nulla blandit tincidunt.
                                    Phasellus vel sem convallis, mattis est id, interdum augue. Integer luctus massa
                                    in arcu euismod venenatis. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.item-->
            @foreach (App\Models\Work::where('inSlider', '=',  1)->inRandomOrder()->limit(2)->get() as $key => $work)
            <div class="item" style="background-image: url(img/slides/{{$key + 2}}.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content center centered">
                                <h2 class="animation animated-item-1">{{$work->title}}</h2>
                                <p class="animation animated-item-2">{{Str::limit($work->content, 50)}}
                                </p>
                                <br>
                                <a class="btn btn-md animation animated-item-3" href="{{ route('works.show', $work->id)}}">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        <!--/.carousel-inner-->
    </div>
    <!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="icon-angle-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="icon-angle-right"></i>
    </a>
</section>