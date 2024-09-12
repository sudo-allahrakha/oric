<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Research Domains') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <a href="{{ route('research-domains.create') }}" class="bg-gray-700 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Add New Domain</a>

                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th>Research Area</th>
                                <th>Keywords</th>
                                <th>Targeted SDGs</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($researchDomains as $domain)
                                <tr>
                                    <td>{{ $domain->research_area }}</td>
                                    <td>{{ implode(', ', $domain->keywords) }}</td>
                                    <td>{{ implode(', ', $domain->targeted_sdg) }}</td>
                                    <td>
                                        <a href="{{ route('research-domains.edit', $domain->id) }}" class="text-indigo-500">Edit</a>
                                        <form action="{{ route('research-domains.destroy', $domain->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500">Delete</button>
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
