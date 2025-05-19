<x-layouts.app :title="__('Projects')">
<div class="container mx-auto p-4 ">
        <h1 class="text-2xl font-bold mb-4">{{ __('Projects') }}</h1>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('admin.projects.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
            {{ __('Create New Project') }}
        </a>

        @if($projects->isEmpty())
            <p>{{ __('No projects found.') }}</p>
        @else
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b  text-black ">{{ __('Image') }}</th>
                        <th class="py-2 px-4 border-b  text-black ">{{ __('Name') }}</th>
                        <th class="py-2 px-4 border-b  text-black ">{{ __('Description') }}</th>
                        <th class="py-2 px-4 border-b  text-black ">{{ __('Start Date') }}</th>
                        <th class="py-2 px-4 border-b  text-black ">{{ __('End Date') }}</th>
                        <th class="py-2 px-4 border-b  text-black ">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $project)
                    <tr>
                        <td class="py-2 px-4 border-b text-black">
                            @if($project->image_url)
                                <img src="{{ $project->image_url }}" alt="{{ $project->name }} image" class="max-h-40 max-w-40 object-contain rounded">
                            @else
                                <span>No Image</span>
                            @endif
                        </td>
                        <td class="py-2 px-4 border-b text-black">{{ $project->name }}</td>
                        <td class="py-2 px-4 border-b text-black">{{ $project->description }}</td>
                        <td class="py-2 px-4 border-b text-black">{{ $project->start_date }}</td>
                        <td class="py-2 px-4 border-b text-black">{{ $project->end_date ?? '-' }}</td>
                        <td class="py-2 px-4 border-b text-black">
                            <a href="{{ route('admin.projects.edit', $project->id) }}" class="text-blue-600 hover:underline mr-2">{{ __('Edit') }}</a>
                            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="inline-block" onsubmit="return confirm('{{ __('Are you sure?') }}');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">{{ __('Delete') }}</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-layouts.app>
