<?php

use Illuminate\Support\Facades\Auth;
use App\Models\User;

$user = Auth::user();
$name = $user->name;
$email=$user->email;
$phone=$user->phone;
?>

@include('user.user-dashboard-base')
<div>

    {{-- Nothing in the world is as soft and yielding as water. --}}
    <!DOCTYPE html>
    <html>

    <head>
        <title>User Information Update </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <div class="container">
            <h2>User Information Update <br>
                <b>Package {{$package}}</b>@if(session('success')){{'success'}}@endif

            </h2>
            <form action="{{route('profile.updates')}}" method="post">
                @csrf
              <!--   <div class=" form-group">
                    <label for="profile-pic">Profile Picture:</label>
                    <input type="file" id="profile-pic" name="pic">
                </div> -->
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="{{$name}}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="{{$email}}" disabled>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="phone" value="{{$phone}}" required>
                </div>
                <input type="submit" value="Update">
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
    </style>
</div>