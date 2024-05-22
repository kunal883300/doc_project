<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scheduled Sessions</title>
</head>
<body>
    <div>
        @foreach ($scheduledSessions as $session)
            <p>{{ $session->name }}</p>
            <span>{{ $session->minutes }} minutes</span>
       
        @endforeach
    </div>
</body>
</html>
