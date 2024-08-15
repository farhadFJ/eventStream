@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Edit Article Group') }}
    </h2>
@endsection

@section('content')
    <div class="flex items-start w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex-1 py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <form action="{{ route('articleGroups.update', $articleGroup->id) }}" method="POST">
                        @csrf
                        @method('PUT')
<<<<<<< HEAD

                        @php
                            $fields = [
                                'name' => 'Article Group',
                            ];
                        @endphp

                        @foreach ($fields as $field => $label)
                            <div class="mb-4">
                                <label for="{{ $field }}" class="block text-gray-700 dark:text-gray-300">{{ $label }}</label>
                                <input id="{{ $field }}" type="text" name="{{ $field }}" class="form-input mt-1 block w-full rounded-md shadow-sm{{ $errors->has($field) ? ' border-red-500' : ' border-gray-300' }}" value="{{ old($field, $articleGroup->$field) }}">
                                @if ($errors->has($field))
                                    <span class="text-red-500 text-sm mt-2" role="alert">
                                        <strong>{{ $errors->first($field) }}</strong>
                                    </span>
                                @endif
                            </div>
                        @endforeach
=======
                        <div class="space-y-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">@lang('Article Group Name')</label>
                                <input id="name" type="text" name="name" class="mt-1 block w-full rounded-md shadow-sm form-input dark:bg-gray-700 dark:text-gray-300 @error('name') border-red-500 @enderror" value="{{ old('name',$articleGroup->name) }}">
                                @error('name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
>>>>>>> create-article

                        <button type="submit" class="flex items-center justify-center h-10 px-6 mt-6 text-lg font-medium text-white transition-colors duration-150 bg-green-600 rounded-full shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50" dusk="submit-button">
                            <i class="fas fa-save mr-2"></i> @lang('Update ArticleGroup')
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
