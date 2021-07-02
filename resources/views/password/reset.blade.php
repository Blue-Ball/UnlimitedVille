<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- App Metadata -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="eHJ1jMagWSM79uzObaMMzGV1KhZc436u3qR45P7I">
    <meta name="stripe-key" content="">

    <!-- Page Metadata -->
    <title>Reset Password | Unlimitedville</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="/css/fontawesome-all.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css?id=9e3eb6f3a767892937e1">

    <!-- Scripts -->

</head>

<body class="auth" id="">
    <div class="page-wrap " id="app">
        <div class="container page-content d-flex align-items-center justify-content-center h-100">
            <div class="card card-small">
                <div class="card-body p-4">
                    <h4 class="text-center mb-4 text-secondary text-uppercase font-weight-300">Reset Password</h4>

                    <p class="mb-4 justify">If you have forgotten your password, we will send a reset link to you. Just
                        provide the <strong>email address you use to sign in</strong> to your account.</p>
                    <form method="POST" action="/password/email" accept-charset="UTF-8"><input name="_token"
                            type="hidden" value="eHJ1jMagWSM79uzObaMMzGV1KhZc436u3qR45P7I">
                        <!-- Email -->
                        <div class="form-group ">
                            <label for="email" class="sr-only">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-fw fa-envelope"></i>
                                    </div>
                                </div>
                                <input class="form-control input-lg" placeholder="Registered Email Address" name="email"
                                    type="email" id="email">
                            </div>
                        </div>
                        <div class="my-4">
                            <button type="submit" class="btn btn-primary btn-lg btn-block text-uppercase">Send Password
                                Reset Link</button>
                        </div>
                    </form>
                    <hr class="my-4">
                    <div class="text-center"><a href="/login"><i class="fa fa-caret-left"></i>&nbsp;&nbsp;Back to
                            Login</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="/js/manifest.js"></script>
    <script src="/js/vendor.js"></script>
    <!-- Freshchat -->
    <script src="https://wchat.freshchat.com/js/widget.js"></script>
    <!-- <script src="/js/freshChatInit.js"></script> -->

    <!-- Page Scripts -->
</body>

</html>
