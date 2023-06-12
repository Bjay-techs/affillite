@include('home.include.user-base')
    <auth-card>
        <slot name="logo">
        
        </slot>
<center>
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}" style="width:400px;height:300px;background:whitesmoke; padding-top:50px">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" :value="__('Email')" />
 
                <input id="email" class="block mt-1 w-full" type="email" name="email" style="background:cyan" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button>
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form></center>
    </auth-card>

