<!DOCTYPE html>
<html>

<head>
    <title>Dear Afonete user</title>
</head>

<body>@if($package=="standard")
    <h1>Standard Package activation!</h1>
    <p>Thank you for Activating standard package. We are happy to have you in our family of winners. </p>
    <p>Your account has been directly activated to Free account.This is individual email<br> from Afonete
        don't share it. <i>Fill free to upgrade your account to super package</i></p>
    @else
    <h1>Welcome on Package activation!</h1>
    <p>Thank you for Buying package. We are happy to have you in our family of winners. </p>
    <p>enter this code <b><u>{{$activation}}</u></b> to activate your package.This is individual email from Afonete
        don't share it.</p>
    <p>thank u</p>
    @endif
</body>

</html>