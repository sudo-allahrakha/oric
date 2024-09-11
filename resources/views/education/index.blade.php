<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Education') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('education.create') }}"
                        class="bg-gray-700 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Add
                        Education</a>

                    <table class="min-w-full mt-4">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left">Degree</th>
                                <th class="px-6 py-3 text-left">University</th>
                                <th class="px-6 py-3 text-left">Year</th>
                                <th class="px-6 py-3 text-left">Discipline</th>
                                <th class="px-6 py-3 text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($educations as $education)
                                <tr>
                                    <td class="px-6 py-4">{{ $education->degree }}</td>
                                    <td class="px-6 py-4">{{ $education->university }}</td>
                                    <td class="px-6 py-4">{{ $education->year }}</td>
                                    <td class="px-6 py-4">{{ $education->discipline }}</td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('education.edit', $education->id) }}"
                                            class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        <form action="{{ route('education.destroy', $education->id) }}" method="POST"
                                            class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-red-600 hover:text-red-900">Delete</button>
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
