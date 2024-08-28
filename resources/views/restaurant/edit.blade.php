@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Edit Restaurant') }}
    </h2>
@endsection

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-4">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
            <form action="{{ route('restaurants.update',$restaurant->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('restaurant.form')
                <button type="submit" class="flex items-center justify-center h-10 px-6 mt-6 text-lg font-medium text-white transition-colors duration-150 bg-green-600 rounded-full shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50" dusk="submit-button">
                    <i class="fas fa-save mr-2"></i> @lang('Update Restaurant')
                </button>
            </form>
        </div>
    </div>
@endsection

