<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | iSTUDIO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0f766e, #14b8a6);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .auth-card {
            background: #fff;
            width: 380px;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 20px 40px rgba(0,0,0,.2);
            text-align: center;
        }
        .auth-card h2 {
            margin-bottom: 5px;
            color: #0f766e;
            font-weight: 600;
        }
        .auth-card p {
            color: #555;
            margin-bottom: 25px;
        }
        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box; /* Crucial for layout alignment */
            font-size: 14px;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #0f766e;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            cursor: pointer;
            font-weight: 500;
            transition: background 0.3s ease;
        }
        button:hover {
            background: #115e59;
        }
        .auth-link {
            margin-top: 20px;
            font-size: 14px;
        }
        .auth-link a {
            color: #0f766e;
            text-decoration: none;
            font-weight: 500;
        }
        /* Error Alert for "Authenticate users only" and login failures */
        .error-alert {
            color: #b91c1c;
            background: #fef2f2;
            padding: 12px;
            border-radius: 6px;
            font-size: 13px;
            margin-bottom: 15px;
            border: 1px solid #fee2e2;
            text-align: left;
        }
        /* Success Alert after registration */
        .success-alert {
            color: #15803d;
            background: #f0fdf4;
            padding: 12px;
            border-radius: 6px;
            font-size: 13px;
            margin-bottom: 15px;
            border: 1px solid #dcfce7;
            text-align: left;
        }
    </style>
</head>
<body>

<div class="auth-card">
    <h2>Welcome Back</h2>
    <p>Login to iSTUDIO</p>

    <?php if(session('auth_error')): ?>
        <div class="error-alert">
            <strong>Access Denied:</strong> <?php echo e(session('auth_error')); ?>

        </div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <div class="error-alert">
            <?php echo e($errors->first()); ?>

        </div>
    <?php endif; ?>

    <?php if(session('success')): ?>
        <div class="success-alert">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('login.submit')); ?>">
        <?php echo csrf_field(); ?>

        <input type="email" name="email" placeholder="Email Address" value="<?php echo e(old('email')); ?>" required autofocus>
        
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Login</button>
    </form>

    <div class="auth-link">
        Don’t have an account? <a href="<?php echo e(route('register')); ?>">Register Now</a>
    </div>
</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\iStudio\resources\views/frontend/login.blade.php ENDPATH**/ ?>