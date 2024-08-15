
<<<<<<< HEAD
    <div class="flex items-start w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex-1 py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 dark:text-gray-300">Name</label>
                            <input id="name" type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="phone_number" class="block text-gray-700 dark:text-gray-300">Phone Number</label>
                            <input id="phone_number" type="text" name="phone_number" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" value="{{ old('phone_number') }}">
                            @if ($errors->has('phone_number'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone_number') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="country" class="block text-gray-700 dark:text-gray-300">Country</label>
                            <input id="country" type="text" name="country" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" value="{{ old('country') }}">
                            @if ($errors->has('country'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('country') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="city" class="block text-gray-700 dark:text-gray-300">City</label>
                            <input id="city" type="text" name="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" value="{{ old('city') }}">
                            @if ($errors->has('city'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('city') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="street" class="block text-gray-700 dark:text-gray-300">Street</label>
                            <input id="street" type="text" name="street" class="form-control{{ $errors->has('street') ? ' is-invalid' : '' }}" value="{{ old('street') }}">
                            @if ($errors->has('street'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('street') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="postal_code" class="block text-gray-700 dark:text-gray-300">Postal Code</label>
                            <input id="postal_code" type="text" name="postal_code" class="form-control{{ $errors->has('postal_code') ? ' is-invalid' : '' }}" value="{{ old('postal_code') }}">
                            @if ($errors->has('postal_code'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('postal_code') }}</strong>
                                </span>
                            @endif
                        </div>
{{--                    <button type="submit" class="flex items-center justify-center h-10 px-6 mt-6 text-lg font-medium text-white transition-colors duration-150 bg-green-600 rounded-full shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50" dusk="submit-button">--}}
{{--                        <i class="fas fa-plus mr-2"></i> @lang('Create Company')--}}
{{--                    </button>--}}
=======
    <div class="min-w-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-md ">
        <div class="flex-1 py-12">
            <div class="max-w-7xl mx-auto sm:px-6 ">
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
                        <input id="{{ $field }}" type="text" name="{{ $field }}" class="mt-1 block w-full rounded-md shadow-sm form-select dark:bg-gray-700 dark:text-gray-300{{ $errors->has($field) ? ' border-red-500' : ' border-gray-300' }}" value="{{ old($field, $company->$field) }}">
                        @if ($errors->has($field))
                            <span class="text-red-500 text-sm mt-2" role="alert">
                                        <strong>{{ $errors->first($field) }}</strong>
                                    </span>
                        @endif
                    </div>
                @endforeach
>>>>>>> create-article
                </div>
            </div>
        </div>
    </div>

