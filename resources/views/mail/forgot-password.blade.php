<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject }}</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 100%;
        color: rgb(69, 69, 69);
    }

    body {
        background-color: #efefef;
    }

    .container {
        min-height: 80vh;
        background-color: white;
        margin: 48px 64px;
        padding: 48px 64px;
        border-radius: 16px;
        color: rgb(69, 69, 69);
    }
</style>

<body>
    <div class="container">
        <div style="margin-bottom: 32px; font-weight: bold;">Hello <span>{{ $data['user']->fullname }}</span></div>

        <div style="margin-bottom: 32px; font-size: 14px">
            You are receiving this email because we received a password reset request for your account.
        </div>

        <div style="margin-bottom: 16px;">
            <p style="margin-bottom: 16px; font-size: 14px">Your Email: <span
                    style="font-style: italic;">{{ $data['user']->email }}</span></p>
        </div>

        <div style="margin-bottom: 16px;">
            <p style="margin-bottom: 16px; font-size: 14px">Your new Password:</p>
            <div
                style="border-radius: 8px; background-color: #eeeeee; display:flex; justify-content:center; align-items: center; min-height: 100px">
                {{ $data['newPassword'] }}</div>
        </div>

        <div style="margin-bottom: 32px; color: red; font-size: 12px">
            If you did not request a password reset, no further action is required.
        </div>
    </div>
</body>

</html>
