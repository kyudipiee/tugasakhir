<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <!--My animate CSS-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <img src="logo.png" alt="">
                    <div class="text">
                        <p>AL-MUTTAQIN ISLAMIC HIGH SCHOOL</p>
                    </div>
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                    <header>Sign In</header>
                    @if(\Session::has('alert'))
                        <div class="alert alert-danger">
                            <div>{{Session::get('alert')}}</div>
                        </div>
                    @endif
                    @if(\Session::has('alert-success'))
                        <div class="alert alert-success">
                            <div>{{Session::get('alert-success')}}</div>
                        </div>
                    @endif
                    <form action="/loginproses" method="POST" class="user">
                        @csrf
                        <div class="input-field">
                            <input type="text" class="input" id="email" required="" autocomplete="off" name="email">
                            <label for="email">Email</label>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        <div class="input-field">
                                <input type="password" class="input" id="pass" required="" name="password">
                                <label for="pass">Password</label>
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        <div class="input-field">
                            <button type="submit" class="submit">Sign In</button>
                        </div>
                        <div class="signin">
                            <span>Already have an account? <a href="/registerakun">Register Now</a></span>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
