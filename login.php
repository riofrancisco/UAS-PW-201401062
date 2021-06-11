<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compitable" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pemrograman Web Lab 3</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Girassol&display=swap');
    .center{
        margin-left: auto;
        margin-right: auto;
        margin-top: 150px;
    }
    .box{
        background-color: turquoise;
        border-radius: 8px;
        width: 40%;
    }
    label, h1, a {
        color: slateblue;
        font-family: 'Girassol', cursive;
    }
    table {
        padding: 20px;
    }
    input {
        width: 100%;
        box-sizing: border-box;
        padding: 8px 14px;
        margin-bottom: 10px;
    }
    input[type=checkbox]{
        width: 20%;
    }
    input[type=submit]{
        background-color: yellowgreen;
        border: none;
    }
    h1 {
        font-size: 32px;
        text-align: center;
        margin: 20px;
    }
    footer {
        color: white;
        text-align: center;
        text-shadow: 2px 2px #000000;
        margin-top: 10px;
    }
</style>

<body style="background-image: url(bga.jpg); background-size: cover;">
    <main>
        <section>
            <form method="POST" action="aksi_login.php">
                <table class="center box">
                    <tr>
                        <td><h1>Login</h1></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Username :</label>
                            <br>
                            <input name="username" type="text" placeholder="Your Username">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Password :</label>
                            <br>
                            <input name="password" type="password" placeholder="Your Password">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input required type="checkbox" name="checkbox" value="on">
                            <label for="checkbox">Remember Me</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="submit"></input>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="register.html">Create a New Account</a>
                        </td>
                    </tr>
                </table>
            </form>
        </section>
    </main>
</body>
<footer>
    Lab Pemrograman Web 3
</footer>
