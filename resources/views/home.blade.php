@extends('layouts.app')

@section('title', 'HOME')

@section('content')
<div class="container">
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">Links</div>--}}

                {{--<div class="card-body">--}}
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
</div>
<div class="w-screen">
    <div class="border-4 border-gray-300 max-w-5xl m-auto">
        <div class="flex flex-wrap mx-5">
            @include('common.link', ['title' => '売上確認', 'link' => 'sales'])
            @include('common.link', ['title' => '在庫管理', 'link' => 'sales'])
            @include('common.link', ['title' => 'ファイルアップロード', 'link' => 'sales'])
            @include('common.link', ['title' => 'コンサルティング', 'link' => 'sales'])
            @include('common.link', ['title' => 'セミナー', 'link' => 'sales'])
            @include('common.link', ['title' => 'コミュニティ', 'link' => 'sales'])
        </div>
    </div>
</div>
@endsection
