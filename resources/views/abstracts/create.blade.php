<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Abstract') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white">
                    <form method="POST" action="{{ route('abstracts.store') }}">
                        @csrf
                        
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label class="block text-gray-700">Title</label>
                                <input type="text" name="title" value="{{ old('title') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                            </div>

                            <div>
                                <label class="block text-gray-700">Conference Name</label>
                                <input type="text" name="conference_name" value="{{ old('conference_name') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                            </div>

                            <div>
                                <label class="block text-gray-700">Date</label>
                                <input type="date" name="date" value="{{ old('date') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                            </div>

                            <div>
                                <label class="block text-gray-700">Page No.</label>
                                <input type="text" name="page_no" value="{{ old('page_no') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
                            </div>

                            <div>
                                <label class="block text-gray-700">Publication Type</label>
                                <select name="publication_type" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                    <option value="National">National</option>
                                    <option value="International">International</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-gray-700">Category</label>
                                <select name="category" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                    <option value="Oral presentation">Oral presentation</option>
                                    <option value="Post">Post</option>
                                    <option value="Presentation">Presentation</option>
                                </select>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
