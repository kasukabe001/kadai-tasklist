@if (count($tasks) > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>タスク</th>
                <th>ステータス</th>
                <th>登録日</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                <td>{{ $task->content }}</td>
                <td>{{ $task->status }}</td>
                <td>{{ $task->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- ページネーションのリンク --}}
    {{ $tasks->links() }}
@else
    <p>タスクが登録されていません。</p>
@endif    

