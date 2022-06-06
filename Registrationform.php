<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
</head>
<body>
<h2>eMobilis Student Registration Form</h2>
<form action="sendto.php"method="post">
    <label for="fname">First Name</label>
    <input type="text"id="fname"name="fname"><br>
    <label for="lname">Last Name</label>
    <input type="text"id="lname"name="lname"><br>
    <label for="email">Email Address</label>
    <input type="email"id="email"name="email"><br>
    <label for="DOB">Date of Birth</label>
    <input type="date"id="DOB"name="DOB"><br>
    <input type="submit"value="Register">
</form>
</body>
</html>


