<div id="createModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg p-6 w-full max-w-md">
        <h2 class="text-xl font-bold mb-4">Add New Contact</h2>
        <form action="{{ route('admin.contact.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block font-semibold mb-1">Name</label>
                <input type="text" name="name" id="name" required class="w-full border border-gray-300 rounded px-3 py-2" value="{{ old('name') }}">
                @error('name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block font-semibold mb-1">Email</label>
                <input type="email" name="email" id="email" required class="w-full border border-gray-300 rounded px-3 py-2" value="{{ old('email') }}">
                @error('email')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="message" class="block font-semibold mb-1">Message</label>
                <textarea name="message" id="message" required class="w-full border border-gray-300 rounded px-3 py-2" rows="4">{{ old('message') }}</textarea>
                @error('message')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex justify-end gap-2">
                <button type="button" onclick="document.getElementById('createModal').classList.add('hidden')" class="px-4 py-2 rounded bg-gray-300 hover:bg-gray-400">Cancel</button>
                <button type="submit" class="px-4 py-2 rounded bg-blue-600 text-white hover:bg-blue-700">Create</button>
            </div>
        </form>
    </div>
</div>
