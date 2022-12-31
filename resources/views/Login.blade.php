<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login Page - Schoolyte</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Glory:wght@800&display=swap');">

        <!-- Bootstrap -->
        <link href="https://fonts.googleapis.com/css2?family=Glory:wght@800&display=swap');">

        <!-- Main CSS-->
        <link href="Style/Login.css" rel="stylesheet">

            <body>
                <img src="assets/logo.png" class="logo-img" alt="logo-Scoolyte">

                <form action={{ route('postlogin') }} method="post" class="LoginForm">
                    {{ csrf_field() }}

                    <div class="title">
                        LOGIN
                    </div>

                    <div  class="label">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label-ID">E-mail</label>
                        <input type="text" name="id" class="form-controlx" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan E-mail anda" required value="admin@example.com">
                        <div id="emailHelp" class="form-text" ></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label-PW">Password</label>
                        <input type="password" name="password" class="form-controly" id="exampleInputPassword1" maxlength="8"  placeholder="Masukkan password anda" required value="password">
                        <div id="emailHelp" class="form-text" ></div>
                    </div>
                    </div>
                    <button type="submit" class="btn-login" >Login</button>

                </form>
                <img src="assets/login1.png" class='login-img' alt=" " />
            </body>
</html>
