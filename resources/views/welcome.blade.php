<x-layout title="Welcome">

    @if (Auth::check())
    <h2>{{auth()->user()->name}}</h2>
        @else
        <h2>Ciao guest</h2>
    @endif
<h2>welcome</h2>
</x-layout>