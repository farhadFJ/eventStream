@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Edit Articles') }}
    </h2>
@endsection

@section('content')
    <div class="flex items-start w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex-1 py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <form action="{{ route('articles.update', $article->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="articleGroup" class="block text-sm font-medium text-gray-700 dark:text-gray-300">@lang('Article Group')</label>
                            <select id="articleGroup" name="articleGroup" class="mt-1 block w-full rounded-md shadow-sm form-select dark:bg-gray-700 dark:text-gray-300 @error('articleGroup') border-red-500 @enderror">
                                <option value="">@lang('Select an Article Group')</option>
                                @foreach($articleGroups as $group)
                                    <option value="{{ $group->id }}" {{ old('articleGroup') == $group->id ? 'selected' : '' }}>
                                        {{ $group->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('articleGroup')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        @php
                            $fields = [
                                'name' => 'Article',
                                'price' => 'Price',
                            ];
                        @endphp

                        @foreach ($fields as $field => $label)
                            <div class="mb-4">
                                <label for="{{ $field }}" class="block text-gray-700 dark:text-gray-300">{{ $label }}</label>
                                <input id="{{ $field }}" type="text" name="{{ $field }}" class="mt-1 block w-full rounded-md shadow-sm form-select dark:bg-gray-700 dark:text-gray-300{{ $errors->has($field) ? ' border-red-500' : ' border-gray-300' }}" value="{{ old($field, $article->$field) }}">
                                @if ($errors->has($field))
                                    <span class="text-red-500 text-sm mt-2" role="alert">
                                        <strong>{{ $errors->first($field) }}</strong>
                                    </span>
                                @endif
                            </div>
                        @endforeach

                        <button type="submit" class="flex items-center justify-center h-10 px-6 mt-6 text-lg font-medium text-white transition-colors duration-150 bg-green-600 rounded-full shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50" dusk="submit-button">
                            <i class="fas fa-save mr-2"></i> @lang('Update Article')
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
