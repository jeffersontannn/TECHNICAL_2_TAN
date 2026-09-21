<!DOCTYPE html>
<html>
<head>
    <title>Welcome - TANJ</title>
    <style>
        html{
            margin:0;
            padding:0;
        }

        body{
            font-family:Arial, Helvetica, sans-serif;
            background:#f2f2f2;
            margin:0;
            padding:0;
            min-height:100vh;
            display:flex;
            flex-direction:column;
        }

        .header{
            background:#2c3e50;
            color:white;
            padding:20px 30px;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        .header .logo{
            font-size:24px;
            font-weight:bold;
            margin:0;
        }

        .header .logo span{
            color:#3498db;
        }

        .header .nav{
            display:flex;
            gap:20px;
        }

        .header .nav a{
            color:white;
            text-decoration:none;
            font-size:14px;
            opacity:0.9;
        }

        .header .nav a:hover{
            opacity:1;
        }

        .container{
            max-width:1000px;
            margin:0 auto;
            padding:40px 20px;
            flex:1;
            width:100%;
        }

        .hero{
            text-align:center;
            margin:40px 0;
        }

        .hero h1{
            font-size:48px;
            color:#2c3e50;
            margin:0 0 10px 0;
        }

        .hero p{
            font-size:18px;
            color:#666;
            margin:0;
        }

        .features{
            display:flex;
            justify-content:space-between;
            gap:20px;
            margin:40px 0;
        }

        .feature{
            flex:1;
            background:white;
            padding:30px;
            border-radius:10px;
            text-align:center;
            box-shadow:0 2px 10px rgba(0,0,0,0.1);
        }

        .feature h3{
            color:#2c3e50;
            margin-top:0;
        }

        .cta{
            text-align:center;
            margin:40px 0;
        }

        .cta-buttons{
            display:flex;
            justify-content:center;
            gap:20px;
        }

        .cta button, .cta a.button{
            background:#2c3e50;
            color:white;
            border:none;
            padding:15px 40px;
            font-size:18px;
            border-radius:30px;
            cursor:pointer;
            text-decoration:none;
            display:inline-block;
        }

        .cta a.button-secondary{
            background:white;
            color:#2c3e50;
            border:2px solid #2c3e50;
        }

        .cta button:hover, .cta a.button:hover{
            background:#34495e;
            transform:scale(1.05);
            transition:transform 0.3s;
        }

        .cta a.button-secondary:hover{
            background:#ecf0f1;
            transform:scale(1.05);
            transition:transform 0.3s;
        }

        .footer{
            text-align:center;
            padding:20px;
            background:#333;
            color:white;
            width:100%;
            box-sizing:border-box;
            margin-top:auto;
        }

        @media (max-width: 768px) {
            .header{
                flex-direction:column;
                text-align:center;
                gap:10px;
            }
            .header .nav{
                gap:15px;
            }
            .hero h1{
                font-size:32px;
            }
            .features{
                flex-direction:column;
            }
            .cta-buttons{
                flex-direction:column;
                align-items:center;
            }
        }
    </style>
</head>
<body>

<div class="header">
    <div class="logo">
        TANJ <span>User Management</span>
    </div>
    <div class="nav">
        <a href="<?= base_url('auth/login') ?>">Login</a>
        <a href="<?= base_url('auth/register') ?>">Create Account</a>
    </div>
</div>

<div class="container">

<div class="hero">
    <h1>Welcome to TANJ</h1>
    <p>Your Secure User Management System</p>
</div>

<div class="features">
    <div class="feature">
        <h3>🔐 Secure</h3>
        <p>Advanced security features to protect your data and user information.</p>
    </div>
    <div class="feature">
        <h3>👥 User Management</h3>
        <p>Easy-to-use admin panel for managing users and permissions.</p>
    </div>
    <div class="feature">
        <h3>⚡ Fast</h3>
        <p>Lightweight and efficient system built for optimal performance.</p>
    </div>
</div>

<div class="cta">
    <div class="cta-buttons">
        <a href="<?= base_url('auth/login') ?>">
            <button class="button">Login</button>
        </a>
        <a href="<?= base_url('auth/register') ?>" class="button button-secondary">Create Account</a>
    </div>
</div>

</div>

<div class="footer">
    © Jefferson Tan - TANJ User Management System
</div>

</body>
</html>