<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/ep.css">
    <title>View Profile</title>
</head>
<body>
    <div id="main_body">
        <div id="header">
            <div id="header_left">
                <a id="gb" href="/home">Go Back</a>
            </div>
            <div id="header_right">
                <a id="ep" href="/view-profile">View Profile</a>
                <a id="lo" href="/">Logout</a>
            </div>
        </div>
        <div id="container">
            <div id="text_header_container">
                <h1 id="text_header">Edit Profile</h1>
            </div>
            <div id="profile_container">
                <form id="ep_form">
                    <div id="ep_form_left">
                        <label for="email">Email</label>
                        <input name="email" type="email" id = "email" placeholder="e.g johndoe@example.com"/>
                        <label for="password">Password</label>
                        <input name="password" type="text" id = "password" placeholder="Must have at least 8 characters"/>
                        <label name="name">Full Name</label>
                        <input name="name" type="text" id = "name" placeholder="e.g John Doe"/>
                        <label for="phone">Phone Number</label>
                        <input name="phone" type="text" id = "phone" placeholder=" Without spaces e.g: +920000000000"/>
                        <label for="address">Address</label>
                        <input name="address" type="text" id = "address" placeholder="Address"/>
                        <label for="major">Major</label>
                        <input name="major" type="text" id = "major" placeholder="e.g Chemical Engineering, Computer Science etc"/>
                    </div>
                    <div id="ep_form_right">
                        <label for="gpa">CGPA</label>
                        <input name="gpa" type="text" id = "gpa" placeholder="-.--/4.00"/>
                        <label for="faculty">Faculty</label>
                        <input name="faculty" type="text" id = "faculty" placeholder="e.g Computer Science, Chemical Engineering etc"/>
                        <label for="job_type">Preferred Job Type</label>
                        <input name="job_type" type="text" id = "job_type" placeholder="e.g Professor, Lecturer, Researcher etc"/>
                        <label for="resume">Resume</label>
                        <input name="resume" type="file" id = "resume" accept="application/pdf"/>
                        <label for="linkedin">Linked In Profile</label>
                        <input name="linkedin" type="text" id = "linkedin" placeholder="e.g linkedin.com/in/johndoe"/>
                        <label for="porfolio">Portfolio/Personal Website</label>
                        <input name="portfolio" type="text" id = "portfolio" placeholder="e.g www.johndoe.com"/>
                    </div>
                    <input name="submit" type="submit" id="submit_button" />
                </form>
            </div>
        </div>
    </div>
</body>
</html>