<div>
    <button wire:click="$set('showModal', true)" class="bg-blue-600 text-black px-4 py-2 rounded mb-4">
        + Add Category
    </button>

    @if (session()->has('message'))
        <div class="p-3 text-green-700 bg-green-100 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <div x-data="{ open: @entangle('showModal') }" x-show="open" class="fixed inset-0 flex items-center justify-center z-50 bg-transparent bg-opacity-50">
        <div class="bg-white rounded-lg p-6 w-full max-w-md" @click.away="open = false">
            <h2 class="text-lg font-bold mb-4">Add Category</h2>
            <form wire:submit.prevent="create">
                <input type="text" wire:model="name" placeholder="Category name" class="w-full p-2 border rounded mb-2">
                @error('name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
                <div class="flex justify-end mt-4">
                    <button type="button" @click="open = false" class="mr-2 px-4 py-2 bg-gray-300 rounded">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-black rounded">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
