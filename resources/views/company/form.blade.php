
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
                </div>
            </div>
        </div>
    </div>

