<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('assets/css/regist.css')}}">
    <!--My animate CSS-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <img src="logo.png" alt="">
                    <div class="text">
                        <p>Join the community of AL-MUTTAQIN ISLAMIC HIGH SCHOOL</p>
                    </div>
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                        <header>Create account</header>
                        <form action="/registerakunuser" method="post" class="user">
                            @csrf
                            <div class="input-field">
                                <input type="text" class="input" id="name" autocomplete="off" name="name">
                                <label for="name">Name</label>
                            </div>
                            <div class="input-field">
                                    <input type="text" class="input" id="email" autocomplete="off" name="email">
                                    <label for="email">Email</label>
                                </div>
                            <div class="input-field">
                                    <input type="password" class="input" id="pass" name="password">
                                    <label for="pass">Password</label>
                                </div>
                            <div class="input-field">
                                <button type="submit" class="submit">Sign Up</button>
                            </div>
                            <div class="signin">
                                <span>Already have an account? <a href="/login">Log in here</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
