<div>
    <input wire:model.live.debounce.250ms="search" class="form-control mb-3" type="text"
        placeholder="{{ __('messages.search') }}" />

    <div class="sidebar-widget">
        @if (count($programmes) > 0 )
            <h5>{{ __('messages.courses') }}</h5>
        <ul class="category-list my-4" data-scroll-reveal="enter from the bottom after 0.2s" data-scroll-reveal-id="9"
            data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
            @foreach ($programmes as $prof)
                <li><a href="{{ route('homepage') }}">{{ $prof->diploma_type }} ({{ $prof->department->name }})</a></li>
            @endforeach
        </ul>
        @endif

    </div>
    {{-- {{ $programmes->links() }} --}}
</div>
