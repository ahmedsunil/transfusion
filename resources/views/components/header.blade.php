@props(['link','name'])

<div class="flex flex-row justify-between align-middle pt-3 pb-6">
    <div>
        <span class="text-2xl text-red-800">{{ $slot }}</span>
    </div>
    <div>
        <a href="{{ $link }}" class="px-6 py-2 text-white bg-red-800 rounded-md hover:bg-red-700 transition duration-200 ease-in-out  active:bg-red-700 focus:border-red-700 focus:ring-red-700">{{ $name }}</a>
    </div>
</div>
