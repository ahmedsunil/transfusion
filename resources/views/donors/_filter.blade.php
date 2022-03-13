    <div class="shadow overflow-hidden border-b border-gray-200 bg-white">
        <div class="p-4 text-sm">
            <div class="flex flex-row space-x-4">
                <div class="flex-1">
                    <x-label for="search" :value="__('Search')" />
                    <x-input id="search" class="block mt-1 w-full" type="text" name="search" :value="old('search')" required autofocus />
                </div>
                <div class="flex-1">
                    <x-label for="blood_type" :value="__('Blood Type')" />
                    <x-select name="blood_type">
                        <option value="1">All</option>
                    </x-select>
                </div>
                <div class="flex flex-row mt-6 space-x-2">
                    <x-button class="bg-red-800 hover:bg-red-700 active:bg-red-700 focus:border-red-700 focus:ring-red-700">
                        Filter
                    </x-button>
                    <x-link-button type="blood" link="">
                        Clear
                    </x-link-button>
                </div>
            </div>
        </div>
    </div>

