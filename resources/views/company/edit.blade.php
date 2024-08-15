@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Edit Company') }}
    </h2>
@endsection

@section('content')
    <div class="flex items-start w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex-1 py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <form action="{{ route('companies.update', $company->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        @php
                            $fields = [
                                'name' => 'Name',
                                'phone_number' => 'Phone Number',
                                'country' => 'Country',
                                'city' => 'City',
                                'street' => 'Street',
                                'postal_code' => 'Postal Code'
                            ];
                        @endphp

                        @foreach ($fields as $field => $label)
                            <div class="mb-4">
                                <label for="{{ $field }}" class="block text-gray-700 dark:text-gray-300">{{ $label }}</label>
                                <input id="{{ $field }}" type="text" name="{{ $field }}" class="form-input mt-1 block w-full rounded-md shadow-sm{{ $errors->has($field) ? ' border-red-500' : ' border-gray-300' }}" value="{{ old($field, $company->$field) }}">
                                @if ($errors->has($field))
                                    <span class="text-red-500 text-sm mt-2" role="alert">
                                        <strong>{{ $errors->first($field) }}</strong>
                                    </span>
                                @endif
                            </div>
                        @endforeach

                        <button type="submit" class="flex items-center justify-center h-10 px-6 mt-6 text-lg font-medium text-white transition-colors duration-150 bg-green-600 rounded-full shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50" dusk="submit-button">
                            <i class="fas fa-save mr-2"></i> @lang('Update Company')
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
