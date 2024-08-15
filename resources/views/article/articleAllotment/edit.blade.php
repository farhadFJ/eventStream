@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Edit Article Allocation') }}
    </h2>
@endsection

@section('content')
    <div class="flex items-start w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex-1 py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-lg sm:rounded-lg p-6 move-in-animation">

                    <form action="{{ route('articles.allocate', $article->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="articleName" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Article Name</label>
                            <input type="text" id="articleName" value="{{ $article->name }}" disabled class="block w-full mt-1 text-sm rounded-md shadow-sm dark:bg-gray-700 dark:text-gray-300">
                        </div>

                        <div class="mb-4">
                            <label for="restaurants" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Allocated Restaurants</label>
                            <select name="restaurant_ids[]" id="restaurants" multiple class="block w-full mt-1 text-sm rounded-md shadow-sm dark:bg-gray-700 dark:text-gray-300">
                                @foreach($restaurants as $restaurant)
                                    <option value="{{ $restaurant->id }}"
                                        {{ in_array($restaurant->id, $article->restaurants->pluck('id')->toArray()) ? 'selected' : '' }}>
                                        {{ $restaurant->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-6">
                            <button type="submit" class="text-green-600 dark:text-green-400 hover:underline">
                                <i class="fas fa-save mr-1"></i> Save
                            </button>
                            <a href="{{ route('articles.articleAllotment.index') }}" class="ml-4 text-gray-600 dark:text-gray-400 hover:underline">
                                <i class="fas fa-arrow-left mr-1"></i> Back
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
