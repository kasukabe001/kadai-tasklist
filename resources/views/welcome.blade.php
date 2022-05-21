@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{ Auth::user()->name }}さんがログインしています。
        <div class="col-sm-8">
            {{-- 投稿一覧 --}}
            @include('tasks.tasks')
        </div>
        {{-- タスク作成ページへのリンク --}}
        {!! link_to_route('signup.get', '新規タスクの投稿', [], ['class' => 'btn btn-primary']) !!} 
 {{--       {!! link_to_route('tasks.create', '新規タスクの投稿', [], ['class' => 'nav-link']) !!}  --}}
    @else
        <div class="center jumbotron">
            <div class="text-center">
            <h1>Welcome to the Tasklist<br>（Lesson15 Capter8 課題）</h1>
            {{-- ユーザ登録ページへのリンク --}}
            {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection