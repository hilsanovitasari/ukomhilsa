<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #ffffff;
        }

        .login-container {
            border: 1px solid #ccc;
            padding: 50px;
            border-radius: 5px;
            background-color: #eb8a8a;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
        }

        .login-container input {
            display: block;
            margin-bottom: 10px;
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .login-container button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: beige;
            color: #fdfdfd;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <center>
            <h2 style="color: #000000">LOGIN ADMIN</h2>
        </center>
        <form>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required />
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required />
            <button type="submit"><a href="index.php"><a href="tampilan3.php">Login</a></button>
        </form>
    </div>
</body>

</html>