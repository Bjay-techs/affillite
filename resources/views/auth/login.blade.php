<x-guest-layout>
    <span class="login100-form-title">
        Login Form<br>

    </span>
    <b>
        <x-input-error :messages="$errors->get('password')" class="mt-2 bg-danger " style="width:300px" />
        <x-input-error :messages="$errors->get('email')" class="mt-2 bg-danger" style="width:300px" />

        <div class="container-login100 ">
            <div class="wrap-login100 mt-3 mb-3">

                <form class=" validate-form" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                        <input class="input100" name="email" type="email" placeholder="Enter Email" name="email"
                            :value="old('email')" required>
                        <span class="focus-input100" ></span>

                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" name="password" type="password" placeholder="Enter Password"
                            name="password" required autocomplete="current-password">
                        <span class="focus-input100"></span>

                    </div>
                    <div style="margin-bottom: 1rem;">
                        <label for="remember_me" style="display: flex; align-items: center;">
                            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                            <span style="margin-left: 1.5rem; font-size: 1.575rem;">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" id="logbutton">
                                Login
                                <div class="spinner-border m-5" style="width: 3rem; height: 3rem;display:none"
                                    role="status" id="loader"></div>
                            </button>
                        </div>
                    </div>

                    <br>

                    <div class="text-center ">
                        <span class="txt">
                            Don’t have an account?
                        </span>
                        <a href="{{ route('register') }}" class="signuping">
                            Register Here
                        </a>
                        <!--<br>-->
                    <!--<span class="txt">-->
                    <!--       <a href="{{ route('password.request') }}" style="color:red" class="signuping"> forget Password</a>-->
                    <!--    </span>-->
                      
                      </div>
                      
                </form>
            </div>
        </div>
        </div>

        <script>
        document.getElementById("logbutton").addEventListener("click", function() {
            document.getElementById("loader").style.display = "block";
        });
        </script>
</x-guest-layout>