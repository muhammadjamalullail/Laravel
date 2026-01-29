@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Edit Student</h3>
                    <p class="mt-1 text-sm text-gray-600">Update the student's information.</p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="{{ route('mahasiswas.update', $mahasiswa) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="shadow sm:rounded-md sm:overflow-hidden border border-gray-200">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                            <!-- NIM -->
                            <div>
                                <label for="nim" class="block text-sm font-medium text-gray-700">NIM</label>
                                <input type="text" name="nim" id="nim" value="{{ old('nim', $mahasiswa->nim) }}"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('nim') border-red-500 @enderror"
                                    required>
                                @error('nim')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Name -->
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                <input type="text" name="name" id="name" value="{{ old('name', $mahasiswa->name) }}"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('name') border-red-500 @enderror"
                                    required>
                                @error('name')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Major -->
                            <div>
                                <label for="major" class="block text-sm font-medium text-gray-700">Major</label>
                                <input type="text" name="major" id="major" value="{{ old('major', $mahasiswa->major) }}"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('major') border-red-500 @enderror"
                                    required>
                                @error('major')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Entry Year -->
                            <div>
                                <label for="entry_year" class="block text-sm font-medium text-gray-700">Entry Year</label>
                                <input type="number" name="entry_year" id="entry_year"
                                    value="{{ old('entry_year', $mahasiswa->entry_year) }}" min="2000"
                                    max="{{ date('Y') + 1 }}"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('entry_year') border-red-500 @enderror"
                                    required>
                                @error('entry_year')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <a href="{{ route('mahasiswas.index') }}"
                                class="text-sm text-gray-600 hover:text-gray-900 mr-4">Cancel</a>
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection