<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=11">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <!-- CSS -->
        <link rel="stylesheet" href="signin.css">
        <title> Responsive Login and Signup Form </title>                
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <style>
            h1.h1{background-color:rgb(230,57,70); color:#FFF; text-align:center;}
        </style>
                        
    </head>
    <body>

    <div class="head"><h1 class="h1">Online Library Management System</h1></div>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Admin Login</header>
                    <form action="../admin/admin_authenticate.php" method="POST">
                        <div class="field input-field">
                            <input type="email" name="ad_email" placeholder="Email" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" name="ad_pass" placeholder="Password" class="password">
                        </div>

                        <div class="field button-field">
                            <button><b>Login</b></button>
                        </div>
                    </form>

                </div>

            </div>

            <!-- Signup Form -->

            <div class="form signup" style="float: right;">
                <div class="form-content">
                    <header>User Login</header>
                    <form action="user_auth.php" method="POST">
                        <div class="field input-field">
                            <input type="email" name="Uemail" placeholder="Email" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" name="Upass" placeholder="Password" class="password">
                        </div>

                        <div class="field button-field">
                            <button><b>Login</b></button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </body>
</html>