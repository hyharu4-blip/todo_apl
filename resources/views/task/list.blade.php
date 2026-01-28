@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <h1 class="text-center fw-bold mb-4">タスク一覧画面</h1>
            <div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>タスク名</th>
                            <th>詳細</th>
                            <th>締切日</th>
                            <th>状態</th>
                            <th>完了日</th>
                            <th>完了処理</th>
                            <th>編集処理</th>
                            <th>削除処理</th>
                        </tr>
                    </thead>
                    <tobody>
                        @if(count($tasks) === 0)
                            <tr>
                                <td colspan="9"><span>登録されているタスクはありません。</span>
                            </tr>
                        @endif
                        @foreach($tasks as $task)
                        <tr>
                            <td>{{ $task->id }}</td>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->detail }}</td>
                            <td>{{ optional( $task->deadline )->format('Y-m-d') }}</td>
                            <td>@if( $task->finish_fig == 1) 完了 @else 未完了 @endif</td>
                            <td>{{ optional( $task->finish_date )->format('Y-m-d') }}</td>
                            <td>完了</td>
                            <td>削除</td>
                            <td>編集</td>
                        </tr>
                        @endforeach
                    </tobody>
                </table>
            </div>
    </div>
</div>
@endsection
