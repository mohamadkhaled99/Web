<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../CSS/Index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <title>Add Course</title>
    <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/unispace"/>
    <link rel="stylesheet" href="https://allfont.net/allfont.css?fonts=comic-sans-ms-bold"/>
        

    <style>
        label {
            display: inline-block;
            width: 150px;
            text-align: right;
            padding-right: 50px;
        }

        input {
            display: inline-block;
            border-radius: 5px;
        }

        #SignIn {
            margin-left: 20px;
        }

    </style>
</head>
<body>
    <header>
        <div class="inner">
            <nav>
                <li><span><a href="PersonalInformation.php">Personal Information</a></span></li>
                <li><span><a href="CoursesInformation.php">Courses Information</a></span></li>
                <li><span><a href="ExperiencesInformation.php">Experiences Information</a></span></li>
                <li><span><a href="AddCourse.php" style="color: white;">Add Course</a></span></li>
                <li><span><a href="AddExperiences.php">Add Experiences</a></span></li>
            </nav>

            <div class="logo">
                <div>
                    <img src="../Images/Azhar_blue_LOGO.png" alt="Azhar_blue_LOGO">
                </div>
            </div>
        </div>
    </header>
    <div class="body">
        <h1 style="margin-left: 50px;">Add Course</h1>
        <form action="CoursesInformation.php" class="Courses" method="post">
            <img id="image" name="image" src="../Images/Exp.jpeg" alt="Google logo">

            <div class="test">

                <label for="Course">Course Name : </label>
                <input type="text" id="Course" name="CourseName" placeholder="CS 50"><br><br>

                <label for="hours">Number OF Hours : </label>
                <input type="number" id="hours" name="Hours" placeholder="50"><br><br>

                <label for="StartDate">Start Date : </label>
                <input type="date" id="StartDate" name="StartDate" max="2025-12-31"><br><br>
               
                <label for="EndDate">End Date : </label>
                <input type="date" id="EndDate" name="EndDate" max="2025-12-31"><br><br>

                <label for="Institution">institutions : </label>
                <input type="text" id="Institution" name="Institution" placeholder=""><br><br>

                <label for="File">File : </label>
                <input type="file" id="File" name="File" placeholder="Gaza"><br><br>

                <button type="submit" name="submit" id = "SignIn">Sign in</button>

            </div>
        </form>
    </div>

    <div id="footer">
        <p>&copy; My Website 2023. mohamadkhaled All rights reserved</p>
    </div>
    
</body>
</html>