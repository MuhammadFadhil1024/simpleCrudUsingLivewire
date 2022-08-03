<div>
    <div class="mb-5">
        @if (session()->has('message'))
        <div class="bg-blue-500 text-white font-bold rounded-t px-4 py-2">
            Berhasil
        </div>
        <div class="border border-t-0 border-blue-400 rounded-b bg-blue-100 px-4 py-3 text-blue-700">
            <p>{{session('message')}}</p>
        </div>
        @endif
    </div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="mb-3">
        <label class="block text-gray-700 text-lg font-bold mb-2" for="username">
            Title
        </label>
        <input 
        class="shadow appearance-none border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
        id="username"
        wire:model="title"
        type="text" 
        placeholder="title">
        {{-- {{$title}} --}}
        @error('title') <span class="error text-red-600">{{ $message }}</span> @enderror
    </div>

    <div class="mt-6">
        <label class="block text-gray-700 text-lg font-bold mb-2" for="username">
            Content
        </label>
        <textarea class="shadow appearance-none border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
        wire:model="content"
        id="" 
        cols="30" 
        rows="5"
        placeholder="content"
        >
        </textarea>
        @error('content') <span class="error text-red-600">{{ $message }}</span> @enderror
    </div>

    <div class="flex justify-end mt-6">
        <button wire:click="createArticle" class="shadow bg-blue-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
            Save
        </button>
    </div>
</div>
