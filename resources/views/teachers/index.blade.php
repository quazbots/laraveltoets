<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers</title>
</head>
<body>
    <h1>Teachers</h1>
    <ul>
        @foreach($teachers as $teacher)
            <li>
                {{ $teacher->name }} - Hobbies: {{ $teacher->hobbies }}
                <ul>
                    @foreach($teacher->subjects as $subject)
                        <li>{{ $subject->name }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</body>
</html>
