<x-layout title="index-post">
    {{-- @dd($posts) --}}


    <div class="p-6 gap-5 flex justify-start items-center">
    @forelse ($posts as $post)
    <div class="w- p-2 bg-white rounded-xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all transform duration-500">
      <img class="mx-auto w-40 object-cover rounded-t-md" src="{{Storage::url($post->img)}}" alt="" />
      <div class="mt-4">
        <h1 class="text-2xl font-bold text-gray-700"> {{$post->title}} </h1>
        <p class="text-sm mt-2 text-gray-700"> {{$post->description}} </p>
        <div class="mt-4 mb-2 flex justify-between pl-4 pr-2">
          <button class="block text-xl font-semibold text-gray-700 cursor-auto">$ {{$post->price}}</button>
          <button class="text-lg block font-semibold py-2 px-6 text-green-100 hover:text-white bg-green-400 rounded-lg shadow hover:shadow-md transition duration-300">Info</button>
        </div>
      </div>
    </div>
    @empty
    <h2>nessun articolo</h2>
    @endforelse
</div>
</x-layout>