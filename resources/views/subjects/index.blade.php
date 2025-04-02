<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subjects</title>
</head>
<body>
    <h1>Subjects</h1>
    <ul>
        @foreach($subjects as $subject)
            <li>
                {{ $subject->name }} - Description: {{ $subject->description }}
                <br>
                Taught by: {{ $subject->teacher->name }}
            </li>
        @endforeach
    </ul>
</body>
</html>
