<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stockyard Dashboard | iSTUDIO</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body { margin: 0; font-family: 'Poppins', sans-serif; background-color: #f8fafc; color: #333; }
        
        /* Navbar matching your design */
        nav { 
            background: #0f766e; 
            padding: 15px 50px; 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            color: white; 
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .logo { font-weight: 600; font-size: 20px; letter-spacing: 1px; }
        .user-info { display: flex; align-items: center; gap: 20px; }
        
        .logout-btn { 
            background: white; 
            color: #0f766e; 
            border: none; 
            padding: 7px 18px; 
            border-radius: 5px; 
            cursor: pointer; 
            font-weight: 600;
            transition: 0.3s;
        }
        .logout-btn:hover { background: #e2e8f0; }

        .main-container { padding: 50px 10%; }

        /* Welcome Card */
        .welcome-card { 
            background: white; 
            padding: 40px; 
            border-radius: 15px; 
            border-left: 8px solid #14b8a6; 
            box-shadow: 0 10px 25px rgba(0,0,0,0.05); 
            margin-bottom: 40px; 
        }
        .welcome-card h1 { color: #0f766e; margin: 0; font-size: 28px; }
        .welcome-card p { color: #64748b; font-size: 16px; margin-top: 10px; }

        /* Action Section */
        .action-box { 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            background: #fff; 
            padding: 30px; 
            border-radius: 12px; 
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
        }
        .action-text h3 { color: #0f766e; margin: 0 0 5px 0; }
        .action-text p { color: #64748b; margin: 0; }

        .go-btn { 
            background: #0f766e; 
            color: white; 
            padding: 14px 28px; 
            border-radius: 8px; 
            text-decoration: none; 
            font-weight: 500;
            transition: 0.3s;
        }
        .go-btn:hover { background: #115e59; transform: translateY(-2px); }
    </style>
</head>
<body>

<nav>
    <div class="logo">Stockyard Dashboard</div>
    <div class="user-info">
        <span>Welcome, <strong><?php echo e(Auth::user()->name); ?></strong></span>
        
        <form action="<?php echo e(route('logout')); ?>" method="POST" style="margin: 0;">
            <?php echo csrf_field(); ?>
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>
</nav>

<div class="main-container">
    <div class="welcome-card">
        <h1>Welcome back, <?php echo e(Auth::user()->name); ?>! 👋</h1>
        <p>You have successfully authenticated. Your session is now active.</p>
    </div>

    <div class="action-box">
        <div class="action-text">
            <h3>Continue to Main Website</h3>
            <p>Explore your home projects, services, and team details.</p>
        </div>
        <a href="<?php echo e(url('/')); ?>" class="go-btn">Go to Main Website</a>
    </div>
</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\iStudio\resources\views/frontend/dashboard.blade.php ENDPATH**/ ?>