@extends('layouts.default')
@section('content')
<style>
.login-card {
    padding: 30px;
}
.login-card-content {
    top: 15%;
}
</style>
<div class="page-content bg-gray-100">
    <div class="py-6">
        <div class="container d-flex align-items-center justify-content-center h-100" style="">
            <div class="row no-gutters w-100">
                <!-- <div class="col-lg bg-cover bg-center login-image" style="background-image: url(/images/bg/login-house.jpg);height: 555px;">
                </div> -->
                <div class="col-lg">
                    <div class="login-card align-items-center justify-content-center bg-white">
                        <div class="card login-card-content">
                            <div class="card-body p-5">
                                <h3 class="mb-4" style="text-align: center;"><i class="fal fa-user"></i>&nbsp;&nbsp;Account Login</h3>
                                <form method="POST" action="/login" accept-charset="UTF-8"><input name="_token" type="hidden" value="eHJ1jMagWSM79uzObaMMzGV1KhZc436u3qR45P7I">
                                    
                                    <div class="form-row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6">
                                            <!-- Email -->
                                            <div class="form-group ">
                                                <label for="email" class="sr-only">Email</label>
                                                <input class="form-control" placeholder="Email" required name="email" type="email" id="email">
                                            </div>
                                        </div> 
                                        <div class="col-md-3"></div>                                       
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6">
                                            <!-- Password -->
                                            <div class="form-group ">
                                                <label for="password" class="sr-only">Password</label>
                                                <input class="form-control" placeholder="Password" required name="password" type="password" value="" id="password">
                                            </div>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary btn-block text-uppercase">Sign In</button>
                                        </div>
                                        <div class="col-md-3"></div>                                        
                                    </div>
                                    <!-- Remember Me -->
                                    <div class="form-row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6">
                                            <div class="row mt-5 remember align-items-center">
                                                <div class="col-sm">
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="remember" name="remember" type="checkbox" value="1">
                                                        <label for="remember" class="form-check-label">Remember Me</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm text-sm-right">
                                                    <a href="/password/reset">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop