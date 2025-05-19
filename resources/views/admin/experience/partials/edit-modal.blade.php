<x-layouts.app :title="__('Edit Experience')">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">{{ __('Edit Experience') }}</h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-800 p-2 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.experience.update', $id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="company_name" class="block font-semibold mb-1">{{ __('Company Name') }}</label>
                <input type="text" name="company_name" id="company_name" value="{{ old('company_name', $experience->company_name) }}" required class="w-full border border-gray-300 rounded px-3 py-2">
            </div>

            <div class="mb-4">
                <label for="position" class="block font-semibold mb-1">{{ __('Position') }}</label>
                <input type="text" name="position" id="position" value="{{ old('position', $experience->position) }}" required class="w-full border border-gray-300 rounded px-3 py-2">
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                {{ __('Update') }}
            </button>
        </form>
    </div>
</x-layouts.app>
