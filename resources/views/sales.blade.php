@extends('layouts.app')

@section('content')
    <div class="m-4">
        <h1 class="text-gray-700 text-xl pb-2">売上</h1>
        <div class="h-1 w-full bg-blue-500 mb-10"></div>
        <div class="flex">
            <img src="{{ asset('images/sales-graph.png') }}" class="w-3/4">
            <div class="bg-blue-300 w-1/4 mx-4 flex items-center">
                <div class="m-3">ここにコンサルティング内容が入ります</div>
            </div>
        </div>
    </div>
@endsection