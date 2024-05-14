<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <title>GIKI Job Portal</title>
</head>
<body>
    <div id = "main_body">
        <div id = "header">
            <div id="header_left">
                <form action="/search-results" method="get" id="search-form">
                    <input type="text" name="search" id="search-input" placeholder="Search Jobs..">
                    <button type="submit" id="search-button">🔍</button>
                </form>
            </div>
            @if (session('usertype') == 'hr' || session('usertype') == 'hr/')
                <a id="vp" href="{{ route('post-jobs') }}?usertype={{ session('usertype') }}&name={{ session('name') }}">+ Add a New Vacancy</a>
            @elseif ($usertype == 'hr' || $usertype == 'hr/')
                <a id="vp" href="{{ route('post-jobs') }}?usertype={{ $usertype }}&name={{ $name }}">+ Add a New Vacancy</a>
            @endif
            <a id="vp" href="/view-profile">View Profile</a>
            <a id="ep" href="/edit-profile">Edit Profile</a>
            <a id="lo" href="/">Log Out</a>
        </div>
        <div id = "container">
            <div id="text_header_container">
                <h1 id="text_header">Vacancies Open {{ session('usertype') ? session('usertype').session('name') : "" }} {{ $usertype ? $usertype.$name : "" }}</h1>
            </div>
            @foreach($jobs as $job)
            <div id="job_containers">
                <div id="jc_left">
                    <h2 id="title">{{ $job->name }}</h2>
                    <p id="faculty">{{ $job->faculty }}</p>
                    <div id="skills_container">
                        @foreach(array_slice(explode("#", $job->skills), 1) as $skill)
                        <div id="skills">
                            <p id="skills_text">{{ $skill }}</p>
                        </div>
                        @endforeach
                    </div>
                    <p id="exp">Min Experience: {{ $job->experience }} Years</p>
                    <p id="post_details">Posted On: {{ $job->created_at }} | Open Till: {{ $job->open_until }} | Total Applicants: {{ $job->total_applicants }}</p>
                </div>
                <div id="jc_right">
                    <a href="{{ route('view-details') }}?usertype={{ $usertype }}&name={{ $name }}&title={{ $job->name }}"><button id="view_details">View Details</button></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>   
</body>
</html>