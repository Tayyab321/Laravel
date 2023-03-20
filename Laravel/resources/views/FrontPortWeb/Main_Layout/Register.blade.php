@include('FrontPortWeb.Layout.header');
@if(session('status'))
    <script>alert("{{session('status')}}")</script>
@endif
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-reg"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form action = "{{route('reg_form')}}" method = "post" class="user">
                        @method('get')
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="First Name" name="F_name">
                                        <span class = 'text-danger'>
                                        @error('F_name')
                                        {{"$message"}}
                                        @enderror
                                        </span>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="exampleLastName"
                                        placeholder="Last Name" name="L_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                    placeholder="Email Address" name="email">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Password" name="pswrd">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                        id="exampleRepeatPassword" placeholder="Confirm Password" name="Cpswrd">
                                </div>
                            </div>
                            <!-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </a> -->
                            <button type = "submit" class="btn btn-danger btn-user btn-block" name = "btn-register" >
                                Register Account</button>
                            <hr>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="large" href="forgot-password.php">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="large" href="{{route('login')}}">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('FrontPortWeb.Layout.footer');