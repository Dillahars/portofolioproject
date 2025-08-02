<x-layouts.app :title="__('Projects')">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">{{ __('Projects') }}</h1>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('admin.projects.create') }}">
                <button type="button" data-modal-target="add-create-Modal" data-modal-toggle="add-create-Modal" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
                    {{ __('Create New Project') }}
                </button>
        </a>
        @if($projects->isEmpty())
            <p>{{ __('No projects found.') }}</p>
        @else
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b text-black">{{ __('No.') }}</th>
                        <th class="py-2 px-4 border-b text-black">{{ __('Name') }}</th>
                        <th class="py-2 px-4 border-b text-black">{{ __('Description') }}</th>
                        <th class="py-2 px-4 border-b text-black">{{ __('Start Date') }}</th>
                        <th class="py-2 px-4 border-b text-black">{{ __('End Date') }}</th>
                        <th class="py-2 px-4 border-b text-black">{{ __('Link Github') }}</th>
                        <th class="py-2 px-4 border-b text-black">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $index => $project)
                    <tr>
                        <td class="py-2 px-4 border-b text-black">{{ $index + 1 }}</td>
                        <td class="py-2 px-4 border-b text-black">{{ $project->nama }}</td>
                        <td class="py-2 px-4 border-b text-black">{{ $project->deskripsi }}</td>
                        <td class="py-2 px-4 border-b text-black">{{ $project->tanggal_mulai }}</td>
                        <td class="py-2 px-4 border-b text-black">{{ $project->tanggal_selesai ?? '-' }}</td>
                        <td class="py-2 px-4 border-b text-black">{{ $project->link_github }}</td>
                        <td class="py-2 px-4 border-b text-black">
                            @if ($project->image_path)
                                <img src="{{ asset($project->image_url) }}" alt="{{ $project->name }} screenshot" />
                            @else
                                -
                            @endif
                        </td>
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

    @include('admin.projects.partials.create-modal')
</x-layouts.app>
