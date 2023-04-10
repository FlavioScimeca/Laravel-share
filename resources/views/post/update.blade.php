<x-layout title="update-post">
    {{-- @dd($post) --}}
    <x-messages />
    {{-- @livewire('update-post', ['post' => "ciao!!"]) --}}
    @livewire('update-post', [ "post" => $post])
</x-layout>