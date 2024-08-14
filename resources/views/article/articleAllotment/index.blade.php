@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Article Allocation') }}
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
                                <th class="px-6 py-3 text-left text-sm font-medium uppercase">Article ID</th>
                                <th class="px-6 py-3 text-left text-sm font-medium uppercase">Article Name</th>
                                <th class="px-6 py-3 text-left text-sm font-medium uppercase">Allocated Restaurants</th>
                                <th class="px-6 py-3 text-left text-sm font-medium uppercase">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($articles as $article)
                                <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors duration-300">
                                    <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">{{ $article->id }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">{{ $article->name }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">
                                        @if($article->restaurants->isEmpty())
                                            <span class="text-red-500">No restaurants allocated</span>
                                        @else
                                            <ul class="list-disc pl-5">
                                                @foreach($article->restaurants as $restaurant)
                                                    <li>{{ $restaurant->name }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-sm">
                                        <a href="{{ route('articles.articleAllotment.edit', $article->id) }}" class="text-blue-600 dark:text-blue-400 hover:underline">
                                            <i class="fas fa-edit mr-1"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

{{--                    <div class="mt-8 flex justify-center">--}}
{{--                        {{ $articles->links() }}--}}
{{--                    </div>--}}

                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('select[name="restaurant_ids[]"]').select2({
            placeholder: "Select Restaurants",
            allowClear: true
        });
    });
</script>
@endsection

