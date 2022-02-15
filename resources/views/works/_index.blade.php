@foreach ($works as $work)
<div class="col-md-4 col-sm-6">
    <figure>
        <img src="{{ asset('storage'. $work->image) }}" alt="img04">
        <figcaption>
            <h3>Settings</h3>
            <span>{{$work->client->name}}</span>
            <a href="{{ route('works.show', $work->id) }}">Take a look</a>
        </figcaption>
    </figure>
</div>
@endforeach