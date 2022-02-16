@section('title')
    Home
@endsection

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<html lang="en">

<head>

    @include('templates.partials._head')
</head>

<body>
    <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->


    @include('templates.partials._header')
    <!--/header-->




    @include('templates.partials._slider')
    <!--/#main-slider-->





    <!-- Our Portfolio -->

    @include('templates.partials._works', ["works" => App\Models\Work::orderBy('created_at', 'desc')->take(6)->get()])
    <!-- Our Portfolio -->

    <hr>

    <!-- Our Articles -->
    <div class="section">
        <div class="container">
            <div class="row">
                <!-- Featured News -->
                @include('templates.partials._news', ["posts" => App\Models\Post::orderBy('created_at', 'desc')->take(3)->get()])
                <!-- End Featured News -->

                <div class="col-sm-6 latest-news">
                    <h2>Lastest FaceBook/Twitter News</h2>
                    <div class="row" id="news">
                <!-- Latest News FB -->
                @include('templates.partials._news_fb')
                <!-- End Featured News -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('templates.partials._footer')
    @include('templates.partials._scripts')
    <script>
    fetch('https://musk-tweet.netlify.app/')
    .then(res => {
        console.log(res)
    })
    </script>
</body>

</html>
