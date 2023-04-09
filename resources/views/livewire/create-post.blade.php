    {{-- Be like water. --}}
    <!-- component -->
<div class="flex items-center justify-center p-12">
    <div class="mx-auto w-full max-w-4xl">
        <form wire:submit.prevent="store">
        <div class="mb-5">
          <label
          class="mb-3 block text-base font-medium"
          >
            
          Title
          </label>
          <input
            type="text"
            wire:model.lazy="title"
            id="name"
            placeholder="title"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
          @error('title') <span class="p-2 border-2 border-red-700">{{ $message }}</span> @enderror
        </div>
        {{-- start photo --}}
        <div class="mb-5">
          {{-- @if ($img)
          Photo Preview:
          <img class="h-20 w-20" src="{{ $img->temporaryUrl() }}">
          @endif --}}
          <input type="file" wire:model="img">
          @error('img') <span class="error">{{ $message }}</span> @enderror
        </div>
        {{-- end photo --}}
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
          @error('price') <span class="p-2 border-2 border-red-700">{{ $message }}</span> @enderror
        </div>
        <div class="mb-5">
          <label
          for="message"
            class="mb-3 block text-base font-medium"
            >
            Description
        </label>
        @error('description') <span class="p-2 border-2 border-red-700">{{ $message }}</span> @enderror
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
          type="submit"
            class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none"
            >
            Submit
        </button>
    </div>
</form>
</div>
</div>
