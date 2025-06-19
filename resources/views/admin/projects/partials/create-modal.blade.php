<div id="createModal" tabindex="-1"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    {{ __('Create New Project') }}
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    onclick="document.getElementById('createModal').classList.add('hidden')">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="p-6 space-y-6">
                    <div class="mb-4">
                        <label for="nama" class="block font-semibold mb-1">{{ __('Project Name') }}</label>
                        <input type="text" name="nama" id="nama" required maxlength="255"
                            class="w-full border border-gray-300 rounded px-3 py-2" />
                        @error('nama') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div class="mb-4">
                        <label for="deskripsi" class="block font-semibold mb-1">{{ __('Description') }}</label>
                        <textarea name="deskripsi" id="deskripsi" rows="4" class="w-full border border-gray-300 rounded px-3 py-2"></textarea>
                        @error('deskripsi') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div class="mb-4">
                        <label for="tanggal_mulai" class="block font-semibold mb-1">{{ __('Start Date') }}</label>
                        <input type="date" name="tanggal_mulai" id="tanggal_mulai" required class="w-full border border-gray-300 rounded px-3 py-2" />
                        @error('tanggal_mulai') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div class="mb-4">
                        <label for="tanggal_selesai" class="block font-semibold mb-1">{{ __('End Date') }}</label>
                        <input type="date" name="tanggal_selesai" id="tanggal_selesai" class="w-full border border-gray-300 rounded px-3 py-2" />
                        @error('tanggal_selesai') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div class="mb-4">
                        <label for="gambar" class="block font-semibold mb-1">{{ __('Project Image') }}</label>
                        <input type="file" name="gambar" id="gambar" accept="image/*" class="w-full" onchange="previewImage(event, 'createImagePreview')" />
                        @error('gambar') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                        <img id="createImagePreview" src="#" alt="Image Preview" class="mt-2 max-h-40 max-w-40 object-contain rounded hidden" />
                    </div>
                </div>
                <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">{{ __('Save') }}</button>
                    <button type="button" onclick="document.getElementById('createModal').classList.add('hidden')" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">{{ __('Cancel') }}</button>
                </div>
            </form>
        </div>
    </div>
