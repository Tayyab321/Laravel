@include('FrontPortWeb.Layout.header');
@if(session('fail'))
    <script>alert("{{session('fail')}}")</script>
@elseif(session('status'))
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
                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                    </div>
                    <form action = "{{route('loggedin')}}" method = "post" class="user">
                        @method('get')
                        @csrf       
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                placeholder="Email Address" name="email">
                                <span class = 'text-danger'>
                                     @error('email')
                                     {{"$message"}}
                                     @enderror
                                    </span>
                        </div>
                        <div class="form-group">
                                <input type="password" class="form-control form-control-user"
                                    id="exampleInputPassword" placeholder="Password" name="pswrd"> 
                                    <span class = 'text-danger'>
                                     @error('pswrd')
                                     {{"The Password is required."}}
                                     @enderror
                                    </span>     
                        </div>
                        <!-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                            Register Account
                        </a> -->
                        <button type = "submit" class="btn btn-danger btn-user btn-block" name = "btn-register" >
                           Login</button>
                        <hr>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="large" href="forgot-password.php">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                        <a class="large" href="{{route('register')}}">Don't Have Account?Register!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@include('FrontPortWeb.Layout.footer');