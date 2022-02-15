<div class="col-sm-6 featured-news">
    <h2>Latest Blog Posts</h2>
    @foreach ($posts as $post)
    <div class="row">
        <div class="col-xs-4"><a href="{{ route('posts.show', $post->id)}}"><img src="{{ asset('storage' . $post->image) }}" alt="Post Title"></a></div>
        <div class="col-xs-8">
            <div class="caption"><a href="{{ route('posts.show', $post->id)}}">{{$post->title}}</a></div>
            <div class="date">{{$post->created_at->format('d F Y')}}</div>
            <div class="intro">{{Str::limit($post->content, 90)}} <a href="{{ route('posts.show', $post->id)}}">Read more...</a></div>
        </div>
    </div>
    @endforeach

</div>
