<div class="container mb-5">
    <div class="section-title position-relative pb-3 mb-5" style="max-width: 600px;">
        {{-- <h5 class="fw-bold text-primary text-uppercase">Blog</h5> --}}
        <h1 class="mb-0">{{__('Actualité')}}(V2)</h1>
        <small>(still not responsive in small screens)</small>
    </div>
    <section id="news" class="white-bg padding-top-bottom">
        <div class="container">
            <div class="timeline">
                @foreach ($u as $key => $posts)
                    <div class="row">
                        @php
                            $isLeft = true;
                            $prevMonth = null;
                        @endphp
                        @foreach ($posts as $post)
                            @php
                                $currentMonth = \Carbon\Carbon::parse($post->created_at)->format('M Y');
                            @endphp
                            @if ($prevMonth !== $currentMonth)
                                </div> <!-- close previous row -->
                                <div class="date-title">
                                    <span>{{ $currentMonth }}</span>
                                </div>
                                <div class="row">
                            @endif
                            <div class="col-sm-6 news-item{{ $isLeft ? '' : ' right' }}">
                                <div class="news-content">
                                    <div class="date">
                                        <p>{{ \Carbon\Carbon::parse($post->created_at)->format('d') }}</p>
                                         <small>{{ \Carbon\Carbon::parse($post->created_at)->format('M') }}</small>
                                    </div>
                                    <h2 class="news-title"><a href="{{route('posts.show', $post->slug)}}">{{ $post->title }}</a></h2>
                                    <div class="news-media">
                                        <a href="">
                                            <img class="img-fluid w-100 border" src="{{ url('storage/'.$post->image) }}" alt="">
                                        </a>
                                    </div>
                                    <p class="text-truncate">{!! strip_tags($post->body) !!}</p>
                                    <a class="date2" href="#">
                                        {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</a>
                                </div>
                            </div>
                            @php
                                $isLeft = !$isLeft;
                                $prevMonth = $currentMonth;
                            @endphp
                        @endforeach
                        </div> <!-- close row -->
                @endforeach
                <div class="date-title"><a class="btn btn-warning rounded-2" href="{{ route('posts.index') }}">OlderPosts</a></div>
            </div>
        </div>
    </section>
</div>

{{-- 
<div class="container">
    <div class="section-title position-relative pb-3 mb-5" style="max-width: 600px;">
        <h5 class="fw-bold text-primary text-uppercase">Blog</h5>
        <h1 class="mb-0">Actualité (version 2)</h1>
    </div>
    <section id="news" class="white-bg padding-top-bottom">
        <div class="container">
            <div class="timeline">
                @foreach ($u as $key => $posts)
                    <div class="row">
                        @php
                            $isLeft = true;
                            $prevMonth = null;
                        @endphp
                        @foreach ($posts as $post)
                            @php
                                $currentMonth = \Carbon\Carbon::parse($post->created_at)->format('M Y');
                            @endphp
                            @if ($prevMonth !== $currentMonth)
                                </div> <!-- close previous row -->
                                <div class="date-title">
                                    <span>{{ $currentMonth }}</span>
                                </div>
                                <div class="row">
                            @endif
                            <div class="col-sm-6 news-item{{ $isLeft ? '' : ' right' }}">
                                <div class="news-content">
                                    <div class="date">
                                        <p>{{ \Carbon\Carbon::parse($post->created_at)->format('d') }}</p>
                                        <small>{{ \Carbon\Carbon::parse($post->created_at)->format('M') }}</small>
                                    </div>
                                    <h2 class="news-title">{{ $post->title }}</h2>
                                    <div class="news-media">
                                        <a href="#">
                                            <img class="img-fluid w-100" src="{{ url('img/blog-2.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <p class="text-truncate">{!! strip_tags($post->body) !!}</p>
                                    <a class="" href="#">
                                        {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</a>
                                </div>
                            </div>
                            @php
                                $isLeft = !$isLeft;
                                $prevMonth = $currentMonth;
                            @endphp
                        @endforeach
                        </div> <!-- close row -->
                @endforeach
                <div class="date-title"><a class="btn btn-warning rounded-2" href="{{ route('posts.index') }}">Older
                    Posts</a></div>
            </div>
        </div>
    </section>
</div> --}}