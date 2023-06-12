<x-guest-layout>
    <style>
    input {
        padding: 0px solid black;
    }
    </style>
    <div class="container-login100">
        <div class="wrap-login100 col-md-4" style="margin-top: 5px;">
            <form class="login100-form validate-form" action="{{ route('register') }}" method="POST">@csrf <span
                    class="login100-form-title">Register Form </span><br>@foreach (['danger', 'warning', 'success',
                'info'] as $msg) @if (Session::has('alert-'.$msg)) <div class="alert alert-{{$msg}}" role="alert"> {
                    {
                    Session: :get('alert-'.$msg)
                    }
                    }

                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;

                    </a>
                </div>@endif @endforeach @if ($errors->any()) <div class="alert alert-danger">
                    <ul>@foreach ($errors->all() as $error) <li>

                            {{$error}}
                        </li>@endforeach </ul>
                </div>@endif <div class="wrap-input100 validate-input">
                    <x-input-label for="name" />
                    <x-text-input id="name" class="input100" type="text" name="name" :value="old('name')" required
                        placeholder="Enter Your Full Name" /><span class="focus-input100"></span>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="wrap-input100 validate-input">
                    <x-input-label for="phone" />
                    <x-text-input id="phone" class="input100" type="text" name="phone" :value="old('phone')" required
                        placeholder="Enter Your Phone" /><span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input">
                    <x-input-label for="country" /><select id="countrySelect" name="country"
                        class="form-control selectpicker input100">
                        <option disabled="disabled" selected="selected">Select a country</option>
                    </select>
                    <script type="text/javascript">
                    fetch("https://restcountries.com/v3.1/all")
                        .then(response => response.json())
                        .then(data => {

                            // Extract country names from the API response
                            var countryNames = data.map(country => country.name.common);
                            countryNames.sort();
                            // Populate the select element with country options
                            var countrySelect = document.getElementById("countrySelect");
                            countryNames.forEach(countryName => {
                                var option = document.createElement("option");
                                option.value = countryName;
                                option.text = countryName;
                                countrySelect.appendChild(option);
                            });
                        })
                        .catch(error => {
                            console.log("Error:", error);
                        });
                    </script>

                </div>
                <!--{{$code=$request->referral}}-->
                <div class="wrap-input100 validate-input">
                    <x-input-label for="referee" />
                    <x-text-input id="referee" class="input100" type="text" name="referee_id" value="{{$request->referral??'none'}}"
                        readonly />
                    <span class=" focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input">
                    <x-input-label for="email" />
                    <x-text-input id="email" class="input100" type="text" name="email" :value="old('email')" required
                        placeholder="Enter Your Email" /><span class="focus-input100"></span>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="wrap-input100 validate-input">
                    <x-input-label for="password" /><span class="btn-show-pass"><i class="zmdi zmdi-eye"></i></span>
                    <x-text-input id="password" class="input100" type="password" name="password" required
                        placeholder="Enter Your Password" /><span class="focus-input100 border border-top-1"></span>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="wrap-input100 validate-input">
                    <x-input-label for="password_confirmation" /><span class="btn-show-pass"><i
                            class="zmdi zmdi-eye"></i></span>
                    <x-text-input id="password_confirmation" class="input100" type="password"
                        name="password_confirmation" required placeholder="Re-enter Password" /><span
                        class="focus-input100"></span>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <div class="wrap-input100 validate-input"><label for="terms" class="input-checkbox-label"><input
                            type="checkbox" id="terms" name="terms" class="input-checkbox" />I have read
                        and agree
                        to the <a href="" style="color: red">Terms and Conditions and Privacy Policy</a></label></div>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div><button class="login100-form-btn" id="logbutton"
                            type="submit"><span>Register</span>
                            <div class="spinner-border m-5" style="width: 3rem; height: 3rem; display: none"
                                role="status" id="loader"></div>
                        </button>
                    </div>
                </div>
                <div class="flex items-center justify-end mt-4"><a
                        class="underline text-md text-gray-600 hover:text-gray-900" href="{{ route('login') }}"> {
                        {
                        __('Already registered?')
                        }
                        }

                    </a></div>
            </form>
        </div>
    </div>
    </div>
</x-guest-layout>