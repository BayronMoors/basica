@php
$tweets = json_decode(Http::withHeaders()->get('https://api.twitter.com/2/tweets/search/recent?query=from:ElonMusk&tweet.fields=created_at'))->data;
@endphp

<!-- Latest Tweets -->
<div class="col-sm-6 latest-news">
    <h2>Twitter News</h2>

    @for ($i = 0; $i < 3; $i++)
        <div class="row">
            <div class="col-sm-12">
                <div class="caption">
                    <a href="https://twitter.com/ElonMusk/status/{{ $tweets[$i]->id }}" target="_blank">
                        {{ Str::words($tweets[$i]->text, 5, '...') }}
                    </a>
                </div>
                <div class="date">{{ date('d F Y', strtotime($tweets[$i]->created_at)) }}</div>
                <div class="intro">{{ Str::words($tweets[$i]->text, 30, ' [...]') }}
                    <a href="https://twitter.com/ElonMusk/status/{{ $tweets[$i]->id }}" target="_blank">Read
                        more...</a>
                </div>
            </div>
        </div>
    @endfor

</div>
<!-- End Latest Tweets -->
