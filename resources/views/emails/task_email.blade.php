<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>{{ $task->title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        h1 {
            background-color: #3498db;
            color: #fff;
            padding: 20px;
            margin: 0;
        }

        .content {
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <h1>{{ $task->title }}</h1>
    <div class="content">
        <p>{{ $task->description }}</p>
        <!-- Include any other task-related information as needed -->
    </div>
</body>

</html>
