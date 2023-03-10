<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MBR - Computer Consultant</title>
    <!-- Favicon icon -->

    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">
    <link href="{{asset('assets/css/style.css')}} " rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign up your account</h4>

                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="form-group">
                                            <label for="name"><strong>Name</strong></label>
                                            <input type="text" class="form-control" placeholder="name" id="name" name="name">
                                            @error('name')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="email"><strong>Email</strong></label>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="hello@example.com">
                                            @error('email')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="password"><strong>Password</strong></label>
                                            <input type="password" id="password" name="password" class="form-control">
                                            @error('password')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="password_confirmation"><strong>Confirm Password</strong></label>
                                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                                            @error('password_confirmation')
                                                <span class="text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                                        </div>

                                    </form>

                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="{{ route('login') }}">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
     <!-- Required vendors -->
     <script src="{{asset('assets/vendor/global/global.min.js')}} "></script>
     <script src="{{asset('assets/js/quixnav-init.js')}} "></script>
     <script src="{{asset('assets/js/custom.min.js')}} "></script>
    <!--endRemoveIf(production)-->
</body>

</html>
