<div>
    <input wire:model.live.debounce.250ms="search" class="form-control mb-3w" type="text"
        placeholder="{{ __('messages.search') }}" />
{{-- @dump($programmes) --}}
    <div class="sidebar-widget">
        @if (count($announces) > 0  )
            <h5>{{ __('messages.announcements') }}</h5>
        <ul class="category-list my-4" data-scroll-reveal="enter from the bottom after 0.2s" data-scroll-reveal-id="9"
            data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
            @foreach ($announces as $ann)
                <li><a href="{{ route('announces.show', ['slug'=>$ann->slug]) }}">{{$ann->title}}</a></li>
            @endforeach
        </ul>
        @endif

    </div>
    {{-- {{ $programmes->links() }} --}}
</div>
