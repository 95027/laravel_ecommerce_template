<div class="grid grid-cols-2 gap-2 gap-y-6 mb-4 ">
    <div class="w-full">
        <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Product
            Name <abbr class="text-red-600">*</abbr></label>
        <input type="text" name="title"
            class="py-3 px-4 block w-full border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0 border"
            placeholder="ABCDEFGHIJKLMNOPQRSTUVWXYZ" required>
    </div>
    <div>
        <label for="hs-select-label" class="block text-sm font-medium mb-2 dark:text-white">Select
            Brand <abbr class="text-red-600">*</abbr></label>
        <select name="brandId" required
            class="py-3 px-4 pe-9 block w-full border border-gray-300 rounded-lg text-sm focus:border-outline-none focus:ring-0 ">
            <option selected value="" hidden>Select Brand</option>
            @foreach ($brands as $brand)
                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="hs-select-label" class="block text-sm font-medium mb-2 dark:text-white">Select
            Category <abbr class="text-red-600">*</abbr></label>
        <select name="categoryId" required wire:model.live="categoryId"
            class="py-3 px-4 pe-9 block w-full border border-gray-300 rounded-lg text-sm focus:border-outline-none focus:ring-0 ">
            <option selected value="" hidden>Select Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="hs-select-label" class="block text-sm font-medium mb-2 dark:text-white">Select
            Sub-Category</label>
        <select name="subCategoryId"
            class="py-3 px-4 pe-9 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0 ">
            <option selected value="" hidden>Sub-Category</option>
            @foreach ($subcategories as $subcategory)
                <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="max-w-full">
        <label for="textarea-label-with-helper-text" class="block text-sm font-medium mb-2 dark:text-white">Short
            Description <abbr class="text-red-600">*</abbr></label>
        <textarea id="textarea-label-with-helper-text" required name="short_description"
            class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-outline-none focus:ring-0 "
            rows="3" placeholder="Say hi, we'll be happy to chat with you." aria-describedby="hs-textarea-helper-text"></textarea>
    </div>
    <div class="max-w-full">
        <label for="textarea-label-with-helper-text"
            class="block text-sm font-medium mb-2 dark:text-white">Description</label>
        <textarea id="textarea-label-with-helper-text"
            class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-outline-none focus:ring-0 "
            rows="3" placeholder="Say hi, we'll be happy to chat with you." aria-describedby="hs-textarea-helper-text"
            name="description"></textarea>
    </div>
</div>
