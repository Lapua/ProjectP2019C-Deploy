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
            @include('common.link', ['title' => '売上確認', 'detail' => '売り上げの確認', 'link' => 'sales'])
            @include('common.link', ['title' => '在庫管理', 'detail' => '在庫の管理', 'link' => 'sales'])
            @include('common.link', ['title' => 'ファイルアップロード', 'detail' => '領収書やレシートの送信', 'link' => 'sales'])
        </div>
        <div class="row justify-around">
            @include('common.link', ['title' => 'コンサルティング', 'detail' => 'ビジネス戦略のアドバイス', 'link' => 'sales'])
            @include('common.link', ['title' => 'セミナー', 'detail' => 'セミナーをチェック', 'link' => 'sales'])
            @include('common.link', ['title' => 'コミュニティ', 'detail' => '他会員とコミュニケーション', 'link' => 'sales'])
        </div>
@endsection
