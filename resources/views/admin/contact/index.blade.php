@extends('components.layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6">Contact Messages</h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <button
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4"
        onclick="document.getElementById('createModal').classList.remove('hidden')"
    >
        Add New Contact
    </button>

    <table class="min-w-full bg-white border border-gray-300 rounded">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Name</th>
                <th class="py-2 px-4 border-b">Email</th>
                <th class="py-2 px-4 border-b">Message</th>
                <th class="py-2 px-4 border-b">Created At</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td class="py-2 px-4 border-b">{{ $contact->id }}</td>
                <td class="py-2 px-4 border-b">{{ $contact->name }}</td>
                <td class="py-2 px-4 border-b">{{ $contact->email }}</td>
                <td class="py-2 px-4 border-b">{{ $contact->message }}</td>
                <td class="py-2 px-4 border-b">{{ $contact->created_at->format('Y-m-d H:i') }}</td>
                <td class="py-2 px-4 border-b">
                    <button
                        class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded"
                        onclick="openEditModal({{ $contact->id }})"
                    >
                        Edit
                    </button>
                    <form action="{{ route('admin.contact.destroy', $contact->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this contact?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-600 hover:bg-red-800 text-white font-bold py-1 px-3 rounded">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $contacts->links() }}
    </div>

    @include('admin.contact.partials.create-modal')
    @include('admin.contact.partials.edit-modal')
</div>

<script>
    function openEditModal(id) {
        // Fetch the edit modal content via AJAX and show it
        fetch(`/admin/contact/${id}/edit`)
            .then(response => response.text())
            .then(html => {
                const modalContainer = document.getElementById('editModalContainer');
                modalContainer.innerHTML = html;
                modalContainer.classList.remove('hidden');
            });
    }
</script>
@endsection
