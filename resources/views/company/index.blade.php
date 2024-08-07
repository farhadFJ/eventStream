@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Companies') }}
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
                                <th class="px-6 py-3 text-left text-sm font-medium uppercase">Name</th>
                                <th class="px-6 py-3 text-left text-sm font-medium uppercase">Phone Number</th>
                                <th class="px-6 py-3 text-left text-sm font-medium uppercase">Country</th>
                                <th class="px-6 py-3 text-left text-sm font-medium uppercase">City</th>
                                <th class="px-6 py-3 text-left text-sm font-medium uppercase">Street</th>
                                <th class="px-6 py-3 text-left text-sm font-medium uppercase">Postal Code</th>
                                <th class="px-6 py-3 text-left text-sm font-medium uppercase">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($companies)
                                @foreach ($companies as $company)
                                    <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors duration-300">
                                        <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">{{ $company->id }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">{{ $company->name }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">{{ $company->phone_number }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">{{ $company->country }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">{{ $company->city }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">{{ $company->street }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-600 dark:text-gray-400">{{ $company->postal_code }}</td>
                                        <td class="px-6 py-4 text-sm">
                                            <a href="{{ route('companies.edit', $company->id) }}" class="text-blue-600 dark:text-blue-400 hover:underline">
                                                <i class="fas fa-edit mr-1"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-8 flex justify-center">
                        @if(!auth()->user()->company)
                            <a href="{{ route('companies.create') }}" class="flex items-center justify-center h-12 px-6 py-3 text-lg font-medium text-white transition-colors duration-150 bg-green-600 rounded-full shadow-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50 transform hover:scale-105">
                                <i class="fas fa-plus mr-2"></i> @lang('Create Company')
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
