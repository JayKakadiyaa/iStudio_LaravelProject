<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register | iSTUDIO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body{
            margin:0;
            font-family:'Poppins',sans-serif;
            background: linear-gradient(135deg,#0f766e,#14b8a6);
            height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
        }
        .auth-card{
            background:#fff;
            width:400px;
            padding:35px;
            border-radius:12px;
            box-shadow:0 20px 40px rgba(0,0,0,.2);
            text-align:center;
        }
        .auth-card h2{
            color:#0f766e;
            margin-bottom:5px;
        }
        .auth-card p{
            color:#555;
            margin-bottom:25px;
        }
        input{
            width:100%;
            padding:12px;
            margin-bottom:15px;
            border:1px solid #ccc;
            border-radius:6px;
            font-size:14px;
        }
        button{
            width:100%;
            padding:12px;
            background:#0f766e;
            color:#fff;
            border:none;
            border-radius:6px;
            font-size:15px;
            cursor:pointer;
        }
        button:hover{
            background:#115e59;
        }
        .auth-link{
            margin-top:15px;
            font-size:14px;
        }
        .auth-link a{
            color:#0f766e;
            text-decoration:none;
            font-weight:500;
        }
        .error{
            color:red;
            font-size:13px;
            margin-bottom:10px;
        }
    </style>
</head>
<body>

<div class="auth-card">
    <h2>Create Account</h2>
    <p>Join iSTUDIO today</p>

    @if ($errors->any())
        <div class="error">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="/register">
        @csrf

        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

        <button type="submit">Register</button>
    </form>

    <div class="auth-link">
        Already have an account? <a href="/login">Login</a>
    </div>
</div>

</body>
</html>
