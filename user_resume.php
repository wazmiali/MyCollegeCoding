<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$degree=$_POST['degree'];
$university=$_POST['university'];
$graduation_year=$_POST['graduation_year'];
$skills=$_POST['skills'];
$hobbies=$_POST['hobbies'];
$experience_year=$_POST['experience_year'];

echo "<!DOCTYPE html>
<html lang='en'>
<head>
      
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Your Resume</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        header {
            text-align: center;
        }
        header h1 {
            color: #3498db;
        }
        header p {
            color: #777;
        }
        section {
            margin-top: 20px;
        }
        h2 {
            color: #3498db;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 8px;
        }
        .skills {
            columns: 2;
        }
        .hobbies {
            columns: 2;
        }
    </style>

</head>
<body>

    <div class='container'>
        <header>
            <h1>$name</h1>
            <p>Web Developer</p>
        </header>

        <section>
            <h2>Contact Information</h2>
            <ul>
                <li>Email: $email</li>
                <li>Phone: $phone</li>
                <li>Address: $address</li>
            </ul>
        </section>

        <section>
            <h2>Education</h2>
            <ul>
                <li>Degree: $degree</li>
                <li>University: $university</li>
                <li>Graduation Year: $graduation_year</li>
            </ul>
        </section>
                
        <section>
                <h2>Experience</h2>
                <ul>
                <li>Experience Year: $experience_year</li>
                </ul>            
        
        </section>
        <section>
            <h2>Skills</h2>
            <p>$skills</p>                
        </section>
        
        <section>
            <h2>Hobbies</h2>
            <p>$hobbies</p>                
        </section>
    </div>


    <a href='data:text/html;charset=utf-8," . urlencode($html) . "' download='resume.html'>
        <button>Download CV</button>
    </a>



</body>
</html>";
?>
