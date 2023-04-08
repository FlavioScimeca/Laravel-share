<x-layout title="Create-form">
    {{-- Be like water. --}}
    <!-- component -->
<div class="flex items-center justify-center p-12">
    <div class="mx-auto w-full max-w-4xl">
        <form action="">
        <div class="mb-5">
          <label
          class="mb-3 block text-base font-medium"
          >
            
          {{$title}}
          </label>
          <input
            type="text"
            wire:model.lazy="title"
            id="name"
            placeholder="Full Name"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
        <div class="mb-5">
          <label
            class="mb-3 block text-base font-medium"
          >
            Price
          </label>
          <input
          type="number"
            wire:model.lazy="price"
            id="subject"
            placeholder="Enter your subject"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </div>
        <div class="mb-5">
          <label
          for="message"
            class="mb-3 block text-base font-medium"
            >
            Description
        </label>
          <textarea
          rows="4"
          wire:model="description"
          id="message"
          placeholder="Type your message"
            class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          ></textarea>
        </div>
        <div>
          <button
            class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none"
            >
            Submit
        </button>
    </div>
</form>
</div>
</div>
</x-layout>
