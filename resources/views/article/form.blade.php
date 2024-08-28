<div class="space-y-6">
    <div>
        <label for="articleGroup" class="block text-sm font-medium text-gray-700 dark:text-gray-300">@lang('Article Group')</label>
        <select id="articleGroup" name="articleGroup" class="mt-1 block w-full rounded-md shadow-sm form-select dark:bg-gray-700 dark:text-gray-300 @error('articleGroup') border-red-500 @enderror">
            <option value="">@lang('Select an Article Group')</option>
            @foreach($articleGroups as $group)
                <option value="{{ $group->id }}" {{ old('articleGroup', $article->article_group_id) == $group->id ? 'selected' : '' }}>
                    {{ $group->name }}
                </option>
            @endforeach
        </select>
        @error('articleGroup')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">@lang('Article Name')</label>
        <input id="name" type="text" name="name" class="mt-1 block w-full rounded-md shadow-sm form-input dark:bg-gray-700 dark:text-gray-300 @error('name') border-red-500 @enderror" value="{{ old('name', $article->name) }}">
        @error('name')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="price" class="block text-sm font-medium text-gray-700 dark:text-gray-300">@lang('Price')</label>
        <input id="price" type="text" name="price" class="mt-1 block w-full rounded-md shadow-sm form-input dark:bg-gray-700 dark:text-gray-300 @error('price') border-red-500 @enderror" value="{{ old('price', $article->price) }}">
        @error('price')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">@lang('Description')</label>
        <textarea id="description" name="description" class="mt-1 block w-full rounded-md shadow-sm form-input dark:bg-gray-700 dark:text-gray-300 @error('description') border-red-500 @enderror">{{ old('description', $article->description) }}</textarea>
        @error('description')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300">@lang('Image')</label>
        <input id="image" type="file" name="image" class="mt-1 block w-full rounded-md shadow-sm form-input dark:bg-gray-700 dark:text-gray-300 @error('image') border-red-500 @enderror">
        @error('image')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
        @if ($article->image)
            <div class="mt-2">
                <img src="{{ asset('storage/' . $article->image) }}" alt="Current Image" class="max-h-40">
            </div>
        @endif
    </div>
</div>
