<div class="space-y-6">
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">@lang('Article Group Name')</label>
        <input id="name" type="text" name="name" class="mt-1 block w-full rounded-md shadow-sm form-input dark:bg-gray-700 dark:text-gray-300 @error('name') border-red-500 @enderror" value="{{ old('name') }}">
        @error('name')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
</div>
