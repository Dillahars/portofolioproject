<x-layouts.app :title="__('Edit Project')">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">{{ __('Edit Project') }}</h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-800 p-2 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.projects.update', $id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block font-semibold mb-1">{{ __('Name') }}</label>
                <input type="text" name="name" id="name" value="{{ old('name', $project->name) }}" required class="w-full border border-gray-300 rounded px-3 py-2">
            </div>

            <div class="mb-4">
                <label for="description" class="block font-semibold mb-1">{{ __('Description') }}</label>
                <textarea name="description" id="description" class="w-full border border-gray-300 rounded px-3 py-2">{{ old('description', $project->description) }}</textarea>
            </div>

            <div class="mb-4">
                <label for="start_date" class="block font-semibold mb-1">{{ __('Start Date') }}</label>
                <input type="date" name="start_date" id="start_date" value="{{ old('start_date', $project->start_date) }}" required class="w-full border border-gray-300 rounded px-3 py-2">
            </div>

            <div class="mb-4">
                <label for="end_date" class="block font-semibold mb-1">{{ __('End Date') }}</label>
                <input type="date" name="end_date" id="end_date" value="{{ old('end_date', $project->end_date) }}" class="w-full border border-gray-300 rounded px-3 py-2">
            </div>

            <div class="mb-4">
                <label for="image" class="block font-semibold mb-1">{{ __('Project Image') }}</label>
                <input type="file" name="image" id="image" accept="image/*" class="w-full border border-gray-300 rounded px-3 py-2">
                @if($project->image_path)
                    <img src="{{ $project->image_path }}" alt="{{ $project->name }} image" class="mt-2 max-h-40 object-contain">
                @endif
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                {{ __('Update') }}
            </button>
        </form>
    </div>
</x-layouts.app>
