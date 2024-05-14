<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/vd.css">
    <title>View Profile</title>
</head>
<body>
    <div id="main_body">
        <div id="header">
            <div id="header_left">
                <a id="gb" href="{{ route('home') }}?usertype={{ $usertype }}&name={{ $name }}">Go Back</a>
            </div>
            <div id="header_right">
                <a id="ep" href="/edit-profile">Edit Profile</a>
                <a id="lo" href="/">Logout</a>
            </div>
        </div>
        <div id="container">
            <div id="text_header_container">
                <h1 id="text_header">{{ $title }} Job Details</h1>
            </div>
            <div id="profile_container">
                <table id="table">
                    @foreach($job as $key => $value)
                    <tr>
                        <td>{{ ucfirst($key) }}</td>
                        <td>{{ $value }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>