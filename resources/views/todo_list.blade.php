<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        h1 {
            text-align: center;
            padding: 20px 0;
        }

        .container {
            margin: 0 auto;
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .table-header h2 {
            margin: 0;
        }

        .table-header .btn {
            padding: 5px 10px;
        }

        .table-content {
            overflow-x: auto;
        }
    </style>
</head>

<body>
    <h1>ToDo List</h1>
    <div class="container">
        <div class="table-header">
            <h2>タスクの一覧</h2>
            <a class="btn btn-primary" href="/create-page">タスクを追加</a>
        </div>
        <div class="table-content">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>タスクの名前</th>
                        <th>タスクの説明</th>
                        <th>担当者の名前</th>
                        <th>見積時間(h)</th>
                        <th colspan="2">操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($todos as $todo)
                        <tr>
                            <td>{{ $todo->task_name }}</td>
                            <td>{{ $todo->task_description }}</td>
                            <td>{{ $todo->assign_person_name }}</td>
                            <td>{{ $todo->estimate_hour }}</td>
                            <td><a href="/edit-page/{{ $todo->id }}" class="btn btn-primary">編集</a></td>
                            <td><a href="/delete-page/{{ $todo->id }}" class="btn btn-danger">削除</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
