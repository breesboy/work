<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GODMODE</title>
    <style type="text/css">
        input{
            width: 100%;
            box-sizing: border-box;
            margin: 10px 0px;
            padding: 5px;
            border-radius: 10px;
        }
        form{
            border-radius: 25px;
            width: 25%;
            background: darkgray;
            padding: 35px 30px;
            margin-top: 100px;
            position: relative;
            top: 70%;
            left: 33%;
            transform: translate(-50%,)
        }
        input[type=submit]{
            color: white;
            background: blue;
            border-color: blue;
            font-size: 20px;
            font-weight: bold;
            border-radius: 10px;
        }
    </style>
</head>
<body>
 <form method="post" action="insertdata.php">
    <center>
    <h1>Add student</h1></center>
    <label>Id</label>
    <input type="text" name="id">
    <label for="">Name</label>
    <input type="text" name="name">
    <label for="">Age</label>
    <input type="number"name="age">
    <label for="">Sex</label>
    <input type="text" name="sex">
    <input type="submit" value="Insert User">
</form>
</body>
</html>