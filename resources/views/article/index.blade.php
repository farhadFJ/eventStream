@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Articles') }}
    </h2>
@endsection

@section('content')
    <div class="flex items-start w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex-1 py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-lg sm:rounded-lg p-6 move-in-animation">

                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-md">
                            <thead class="bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300">
                            <tr>
                                <th class="px-6 py-3 text-left text-sm font-medium uppercase">ID</th>
                                <th class="px-6 py-3 text-left text-sm font-medium uppercase">Article</th>
                                <th class="px-6 py-3 text-left text-sm font-medium uppercase">Article Group</th>
                                <th class="px-6 py-3 text-left text-sm font-medium uppercase">Price</th>
                                <th class="px-6 py-3 text-left text-sm font-medium uppercase">Description</th>
                                <th class="px-6 py-3 text-left text-sm font-medium uppercase">Image</th>
                                <th class="px-6 py-3 text-left text-sm font-medium uppercase">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($articles)
                                @foreach ($articles as $article)
                                    <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors duration-300">
                                        <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">{{ $article->id }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">{{ $article->name }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">{{ $article->group->name }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">{{ $article->price }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">{{ $article->description }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400"><img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->name }}" class="h-24"></td>
                                        <td class="px-6 py-4 text-sm">
                                            <a href="{{ route('articles.edit', $article->id) }}" class="text-blue-600 dark:text-blue-400 hover:underline">
                                                <i class="fas fa-edit mr-1"></i>
                                            </a>

                                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="inline-block ml-2">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 dark:text-red-400 hover:underline" onclick="return confirm('Are you sure you want to delete this restaurant?')">
                                                    <i class="fas fa-trash-alt mr-1"></i>
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-8 flex justify-center">
                        <a href="{{ route('articles.create') }}" class="flex items-center justify-center h-12 px-6 py-3 text-lg font-medium text-white transition-colors duration-150 bg-green-600 rounded-full shadow-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50 transform hover:scale-105">
                            <i class="fas fa-plus mr-2"></i> @lang('Create Article')
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

