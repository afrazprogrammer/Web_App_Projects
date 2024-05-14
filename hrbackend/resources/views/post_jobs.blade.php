<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/post_jobs.css">
    <title>View Profile</title>
</head>
<body>
    <div id="main_body">
        <div id="header">
            <div id="header_left">
                <a id="gb" href="{{ route('home') }}?usertype={{ $usertype }}&name={{ $name }}">Go Back</a>
            </div>
            <div id="header_right">
                <a id="ep" href="/view-profile">View Profile</a>
                <a id="lo" href="/">Logout</a>
            </div>
        </div>
        <div id="container">
            <div id="text_header_container">
                <h1 id="text_header">Post a Job {{ $name }} </h1>
            </div>
            <div id="profile_container">
                <form id="ep_form" action="{{ route('home') }}?usertype={{ $usertype }}&name={{ $name }}" method='POST'>
                    @csrf
                    <div id="ep_form_left">
                        <label for="title">Title</label>
                        <input name="title" type="text" id = "email" placeholder="e.g AI Lab Engineer"/>
                        <label for="p_langs">Programming Languages</label>
                        <input name="p_langs" type="text" id = "password" placeholder="Write it like '#ReactJS#Python#C++#RubyonRails'"/>
                        <label name="skills">Skills</label>
                        <input name="skills" type="text" id = "name" placeholder="Write it like #teaching#leadership#programming#databases"/>
                        <label for="exp">Experience</label>
                        <input name="exp" type="number" id = "phone" placeholder="Give just a number e.g 1 or 10"/>
                        <label for="open_till">Open Till</label>
                        <input name="open_till" type="date" id = "address" placeholder="Address"/>
                    </div>
                    <div id="ep_form_right">
                        <label for="desc">Description</label>
                        <input name="desc" type="text" id = "major" placeholder="Description"/>
                        <label for="faculty">Faculty</label>
                        <input name="faculty" type="text" id = "gpa" placeholder="e.g Computer Science, Mechanical Engineering, Chemical Engineering"/>
                        <input name="submit" type="submit" id="submit_button" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>