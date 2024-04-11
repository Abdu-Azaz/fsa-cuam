@props(['page'])
<x-filament-fabricator::layouts.base :title="$page->title">
    {{-- Header Here --}}
    <h2>
        Hello Def 
    </h2>
    <x-filament-fabricator::page-blocks :blocks="$page->blocks" />

     {{-- Footer Here --}}
</x-filament-fabricator::layouts.base>