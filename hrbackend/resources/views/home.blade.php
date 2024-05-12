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
            <a id="vp" href="/view-profile">View Profile</a>
            <a id="ep" href="/edit-profile">Edit Profile</a>
            <a id="lo" href="/">Log Out</a>
        </div>
        <div id = "container">
            <div id="text_header_container">
                <h1 id="text_header">Vacancies Open</h1>
            </div>
            <div id="job_containers">
                <div id="jc_left">
                    <h2 id="title">Job Title</h2>
                    <p id="faculty">Faculty</p>
                    <div id="skills_container">
                        <div id="skills">
                            <p id="skills_text">React Js</p>
                        </div>
                        <div id="skills">
                            <p id="skills_text">React Js</p>
                        </div>
                        <div id="skills">
                            <p id="skills_text">React Js</p>
                        </div>
                    </div>
                    <p id="exp">Min Experience: </p>
                    <p id="post_details">Posted On: 00/00/000 | Open Till: 00/00/0000 | Total Applicants: 00</p>
                </div>
                <div id="jc_right">
                    <button id="view_details">View Details</button>
                </div>
            </div>
            <div id="job_containers">
                <div id="jc_left">
                    <h2 id="title">Job Title</h2>
                    <p id="faculty">Faculty</p>
                    <div id="skills_container">
                        <div id="skills">
                            <p id="skills_text">React Js</p>
                        </div>
                        <div id="skills">
                            <p id="skills_text">React Js</p>
                        </div>
                        <div id="skills">
                            <p id="skills_text">React Js</p>
                        </div>
                    </div>
                    <p id="exp">Min Experience: </p>
                    <p id="post_details">Posted On: 00/00/000 | Open Till: 00/00/0000 | Total Applicants: 00</p>
                </div>
                <div id="jc_right">
                    <button id="view_details">View Details</button>
                </div>
            </div>
        </div>
    </div>   
</body>
</html>