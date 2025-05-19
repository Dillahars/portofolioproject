<x-layouts.app :title="__('Experience')">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">{{ __('Experience') }}</h1>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('admin.experience.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
            {{ __('Create New Experience') }}
        </a>

        @if($experiences->isEmpty())
            <p>{{ __('No experiences found.') }}</p>
        @else
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b text-black">{{ __('Company Name') }}</th>
                        <th class="py-2 px-4 border-b text-black">{{ __('Position') }}</th>
                        <th class="py-2 px-4 border-b text-black">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($experiences as $experience)
                    <tr>
                        <td class="py-2 px-4 border-b text-black">{{ $experience->company_name }}</td>
                        <td class="py-2 px-4 border-b text-black">{{ $experience->position }}</td>
                        <td class="py-2 px-4 border-b text-black">
                            <a href="{{ route('admin.experience.edit', $experience->id) }}" class="text-blue-600 hover:underline mr-2">{{ __('Edit') }}</a>
                            <form action="{{ route('admin.experience.destroy', $experience->id) }}" method="POST" class="inline-block" onsubmit="return confirm('{{ __('Are you sure?') }}');">
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
