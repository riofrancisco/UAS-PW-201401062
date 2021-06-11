<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compitable" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pemrograman Web Lab 3</title>
<link rel="stylesheet" href="style1.css">
</head>

<body style="background-image: url(bga.jpg); background-size: cover;">
    <main>
        <section>
            <form method="POST" action="#">
                <table class="center box">
                    <tr>
                        <td><h1>Register</h1></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label for="firstname">First Name :</label>
                            <br>
                            <input required name="firstname" placeholder="Your First Name">
                        </td>
                        <tr>
                        <td>
                            <label for="lastname">Last Name :</label>
                            <br>
                            <input required name="lastname" placeholder="Your Last Name">
                        </td>
                        </tr>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Email :</label>
                            <br>
                            <input required name="email" placeholder="Your Email">
                        </td>
                    </tr>
                    <tr>
                    <td>
                        <label for="Password">Create Password :</label>
                        <br>
                        <input required type="password" name="password" placeholder="Your Password">
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
                            <a href="login.html">Already have an Account, sign in here.</a>
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