<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tddProject</title>
</head>
<body>
    <h4>Projects</h4>
    <ul>
        @foreach($projects as $project)
            <a href="{{ $project->path() }}">{{$project->title}}</a>
        @endforeach
    </ul>
</body>
</html>
