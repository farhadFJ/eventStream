<div class="space-y-6">
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">@lang('Restaurant Name')</label>
        <input id="name" type="text" name="name" class="mt-1 block w-full rounded-md shadow-sm form-input dark:bg-gray-700 dark:text-gray-300 @error('name') border-red-500 @enderror" value="{{ old('name') }}">
        @error('name')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="location" class="block text-sm font-medium text-gray-700 dark:text-gray-300">@lang('Location')</label>
        <input id="location" type="text" name="location" class="mt-1 block w-full rounded-md shadow-sm form-input dark:bg-gray-700 dark:text-gray-300 @error('location') border-red-500 @enderror" value="{{ old('location') }}">
        @error('location')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="restaurant_tel" class="block text-sm font-medium text-gray-700 dark:text-gray-300">@lang('Phone')</label>
        <input id="restaurant_tel" type="text" name="restaurant_tel" class="mt-1 block w-full rounded-md shadow-sm form-input dark:bg-gray-700 dark:text-gray-300 @error('restaurant_tel') border-red-500 @enderror" value="{{ old('restaurant_tel') }}">
        @error('restaurant_tel')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="restaurant_email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">@lang('Email')</label>
        <input id="restaurant_email" type="email" name="restaurant_email" class="mt-1 block w-full rounded-md shadow-sm form-input dark:bg-gray-700 dark:text-gray-300 @error('restaurant_email') border-red-500 @enderror" value="{{ old('restaurant_email') }}">
        @error('restaurant_email')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="opening_hours" class="block text-sm font-medium text-gray-700 dark:text-gray-300">@lang('Opening Hours')</label>
        <input id="opening_hours" type="time" name="opening_hours" class="mt-1 block w-full rounded-md shadow-sm form-input dark:bg-gray-700 dark:text-gray-300 @error('opening_hours') border-red-500 @enderror" value="{{ old('opening_hours') }}">
        @error('opening_hours')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>


</div>
