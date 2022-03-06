@extends('templates.index')
@section('title')
    Blog
@endsection
@section('content')
    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Our Blog</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <!-- Blog Post Excerpt -->
                @foreach ($posts as $post)
                    <div class="col-sm-6">
                        <div class="blog-post blog-single-post">
                            <div class="single-post-title">
                                <h2>{{ Str::limit($post->title, 20) }}</h2>
                            </div>

                            <div class="single-post-image">
                                <img src="{{ asset('storage' . $post->image) }}" alt="Post Title">
                            </div>

                            <div class="single-post-info">
                                <i class="glyphicon glyphicon-time"></i>15 OCT, 2014 <a href="#" title="Show Comments"><i
                                        class="glyphicon glyphicon-comment"></i>11</a>
                            </div>

                            <div class="single-post-content">
                                <p>
                                    {{Str::limit($post->content, 100)}}
                                </p>
                                <a href="{{ route('posts.show', $post->id)}}" class="btn">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Pagination -->
                <div class="pagination-wrapper ">
                    {{-- <ul class="pagination pagination-sm">
                        <li class="disabled"><a href="#">Previous</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Next</a></li>
                    </ul> --}}
                    {{$posts->links()}}
                </div>

            </div>
        </div>
    </div>
@endsection
