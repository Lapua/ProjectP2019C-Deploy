<button class="col-3 h-32 my-5 bg-blue-200 text-xl font-bold text-gray-700 border-2 border-gray-700"
        onclick="location.href='{{ route($link) }}'">
    {{ $title }}<br>
    <div class="text-base font-normal">{{ $detail }}</div>
</button>
