<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guidance_Management_System</title>
</head>
<body>
<style type="text/css">
    * {
        margin: 0%;
        padding: 0%;
        box-sizing: border-box;
    }

    .container{
        display: flex;
        height: 500px;
        width: 800px;
        border: 1px;
        margin: auto;
        margin-top: 50px;
    }

    .form{
        display: flex;
        flex-direction: column;
        width: 400px;
        align-items: center;
        background-color: whitesmoke;
    }

    .form h2{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        margin: 40px;
        margin-top: 50px;
    
    }

    .box{
        padding: 12px;
        width: 65%;
        margin: 10px;
        border: 1px solid black;
        outline: navy;
        border-radius: 20px;

    }

    .form button{
        padding: 12px 30px;
        width: 200px;
        margin-top: 15px;
        border-radius: 20px;
        background-color: #6091aa;
        color: white;
        font-weight: bold;

    }

    .form button:hover{
        cursor: pointer;
        background-color: #616466;
    }

    .form a{
        text-decoration: none;
        color: black;
        margin-top: 15px;

    }

    .form a:hover{
        color: #CDD1D2;
    }

    .side{
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .side img{
        width: 450px;
        height: 500px;
    }

    </style>

    <div class="container">
        <form action="login.php" class="form">
            <center>
                <h2>Guidance Counsilor Management System</h2>
            </center>
            <button><a href="login.php">Login as Student</a></button>
            <button><a href="login.php">Login as Admin</a></button>
            <a href="signup.php">Click to Signup</a>

        </form>
        <div class="side">
            <img src="assets/images/clarc1.jpg" alt="">
        </div>
    </div>
</body>
</html>