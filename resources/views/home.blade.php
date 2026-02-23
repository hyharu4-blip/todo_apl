@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>タスク管理アプリへようこそ！</h1>
            <!-- 20260223 開発練習6 yomura haruto add s -->
            <div class="d-inline-block text-start">
                <h3>・未完了のタスクが<a href="{{ route('show_task_list', ['home_move' => 1]) }}" class="mx-1 fs-2">{{ $nocomplete }}件</a>あります。</h2>
            </div>
            <!-- 20260223 開発練習6 yomura haruto add e -->
        </div>
    </div>
</div>
@endsection
