@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Edit Subject</h3>
                    <p class="mt-1 text-sm text-gray-600">Update the subject's information.</p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="{{ route('matkuls.update', $matkul) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="shadow sm:rounded-md sm:overflow-hidden border border-gray-200">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                            <!-- Course Code -->
                            <div>
                                <label for="course_code" class="block text-sm font-medium text-gray-700">Course Code</label>
                                <input type="text" name="course_code" id="course_code"
                                    value="{{ old('course_code', $matkul->course_code) }}"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('course_code') border-red-500 @enderror"
                                    required>
                                @error('course_code')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Course Name -->
                            <div>
                                <label for="course_name" class="block text-sm font-medium text-gray-700">Course Name</label>
                                <input type="text" name="course_name" id="course_name"
                                    value="{{ old('course_name', $matkul->course_name) }}"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('course_name') border-red-500 @enderror"
                                    required>
                                @error('course_name')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Credits -->
                            <div>
                                <label for="credits" class="block text-sm font-medium text-gray-700">Credits</label>
                                <input type="number" name="credits" id="credits"
                                    value="{{ old('credits', $matkul->credits) }}" min="1"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('credits') border-red-500 @enderror"
                                    required>
                                @error('credits')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <a href="{{ route('matkuls.index') }}"
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