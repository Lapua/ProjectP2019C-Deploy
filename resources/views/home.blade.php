@extends('layouts.app')

@section('title', 'HOME')

@section('content')
    @if (session('status'))
        <div class="container">
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        </div>
    @endif

        <div class="row justify-around">
            @include('common.link', ['title' => '売上確認', 'link' => 'sales'])
            @include('common.link', ['title' => '在庫管理', 'link' => 'sales'])
            @include('common.link', ['title' => 'ファイルアップロード', 'link' => 'sales'])
        </div>
        <div class="row justify-around">
            @include('common.link', ['title' => 'コンサルティング', 'link' => 'sales'])
            @include('common.link', ['title' => 'セミナー', 'link' => 'sales'])
            @include('common.link', ['title' => 'コミュニティ', 'link' => 'sales'])
        </div>
@endsection
