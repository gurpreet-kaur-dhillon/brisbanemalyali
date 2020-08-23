
<div class="p-4"></div>
<div class="container mt-5">
    <div class="card o-hidden border-0 shadow-lg">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <!--  <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                <div class="col-lg-8 m-auto">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <div id="signupMsg"></div>
                        <form class="user" id="userRegisterForm" method="post" action="loginaction">
                            <input type="hidden" name="createAccount">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="registerFirstName"
                                        placeholder="First Name" name="firstName">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="registerLastName"
                                        placeholder="Last Name" name="lastName">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="registerInputEmail"
                                    placeholder="Email Address" name="email">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="registerPassword"
                                        placeholder="Password" name="password">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                        id="registerRepeatPassword" placeholder="Repeat Password" name="repeatPassword">
                                </div>
                            </div>

                            <button class="btn btn-primary btn-user btn-block cust_btn-primary" id="registerUserBtn" type="submit">Register Account</button>
                            <!-- <hr>
                <a href="index.html" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a> -->
                        </form>

                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="user/login">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
