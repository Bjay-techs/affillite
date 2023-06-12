 @include('user.user-dashboard-base')<?php
use Illuminate\Support\Facades\Auth;
use App\Models\User;
 $user=Auth::user();
                    $userId = $user->id;
                    // Do something with the user ID
                 //   return( "Logged-in user ID:  . $userId");
                    $user = User::find($userId);
                    $name=$user->name;
                    $email=$user->email;
                    $phone=$user->phone;
                    $package=$user->has_paid_package;
  ?>
<div>


    <!DOCTYPE html>
    <html>

    <head>
        <title>User package activation </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <div class="container">
            <h2>Activation Code @if(session('message'))
                <div class="alert alert-danger">
                    {{ session('message') }}
                </div>
                @endif<br>

            </h2>
            <form action="{{route('user.dashboard.validate')}}" method="post">
                <!-- <form action="{{route('user.dashboard.validate')}}" method="post"> -->
                @csrf

                <div class="form-group">
                    <label for="name">enter activation code that we sent
                        after buying package to the email <br>
                        used in registration to activate your account</label>
                    <input type="text" id="name" name="code" placeholder="Enter code" required>
                </div>

                <input type="submit" value="submit">
            </form>
        </div>
    </body>

    </html>

    <style>
    .container {
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f2f2f2;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    h2 {
        text-align: center;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="file"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    /* Responsive Styles */
    @media screen and (max-width: 480px) {
        .container {
            padding: 10px;
        }

        input[type="submit"] {
            font-size: 14px;
        }
    }

    .alert {
        background-color: red;
    }
    </style>
</div>
 