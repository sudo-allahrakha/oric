<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Abstracts Published') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('abstracts.create') }}" class="mb-4 inline-block bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-700">Add Abstract</a>

                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="min-w-full bg-white border">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b">Title</th>
                                <th class="py-2 px-4 border-b">Conference</th>
                                <th class="py-2 px-4 border-b">Date</th>
                                <th class="py-2 px-4 border-b">Page No.</th>
                                <th class="py-2 px-4 border-b">Publication Type</th>
                                <th class="py-2 px-4 border-b">Category</th>
                                <th class="py-2 px-4 border-b">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($abstracts as $abstract)
                                <tr>
                                    <td class="py-2 px-4 border-b">{{ $abstract->title }}</td>
                                    <td class="py-2 px-4 border-b">{{ $abstract->conference_name }}</td>
                                    <td class="py-2 px-4 border-b">{{ $abstract->date }}</td>
                                    <td class="py-2 px-4 border-b">{{ $abstract->page_no }}</td>
                                    <td class="py-2 px-4 border-b">{{ $abstract->publication_type }}</td>
                                    <td class="py-2 px-4 border-b">{{ $abstract->category }}</td>
                                    <td class="py-2 px-4 border-b">
                                        <a href="{{ route('abstracts.edit', $abstract) }}" class="text-blue-500 hover:underline">Edit</a>
                                        <form action="{{ route('abstracts.destroy', $abstract) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:underline ml-2">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
