<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DataWise - Landing Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            background-color: #0f0f0f;
            font-family: 'Segoe UI', sans-serif;
            color: #ffffff;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            padding: 20px 40px;
            align-items: center;
            background-color: #0f0f0f;
        }
        .navbar .logo {
            font-weight: bold;
            font-size: 20px;
        }
        .navbar ul {
            display: flex;
            list-style: none;
            gap: 30px;
        }
        .navbar ul li {
            color: #ccc;
            cursor: pointer;
        }
        .navbar .auth-buttons {
            display: flex;
            gap: 15px;
        }
        .navbar .auth-buttons a {
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 6px;
            font-size: 14px;
        }
        .btn-login {
            color: #4ade80;
        }
        .btn-register {
            background-color: #4ade80;
            color: #000;
        }
        .hero {
            display: flex;
            justify-content: space-between;
            padding: 80px 40px;
            flex-wrap: wrap;
        }
        .hero .text {
            max-width: 600px;
        }
        .hero h1 {
            font-size: 52px;
            margin-bottom: 20px;
        }
        .hero p {
            color: #a1a1aa;
            margin-bottom: 40px;
            font-size: 18px;
            line-height: 1.5;
        }
        .hero-buttons {
            display: flex;
            gap: 20px;
        }
        .hero-buttons a {
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: bold;
            text-decoration: none;
        }
        .btn-register-main {
            background-color: #4ade80;
            color: #000;
        }
        .btn-login-main {
            border: 1px solid #ccc;
            color: #fff;
        }
        .hero .images {
            display: grid;
            grid-template-columns: repeat(2, 100px);
            grid-gap: 20px;
        }
        .hero .images img {
            width: 100px;
            height: 100px;
            border-radius: 20px;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .hero {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="logo">Product</div>
        <ul>
            <li>Dasboard</li>
            <li>Product</li>
            <li>Support</li>
        </ul>
        <div class="auth-buttons">
            <a href="/login" class="btn-login">Login</a>
            <a href="/register" class="btn-register">Register</a>
        </div>
    </nav>

    <section class="hero">
        <div class="text">
            <h1>Welcome Website Product</h1>
            <p>Step into the future with our state-of-the-art AI solutions. Unleash the potential of machine learning to innovate, optimize, and transform your business processes.</p>
            <div class="hero-buttons">
                <a href="/register" class="btn-register-main">Register</a>
                <a href="/login" class="btn-login-main">Login</a>
            </div>
        </div>
        <div class="images">
            <img src="https://source.unsplash.com/random/100x100?teamwork" alt="">
            <img src="https://source.unsplash.com/random/100x101?office" alt="">
            <img src="https://source.unsplash.com/random/100x102?people" alt="">
            <img src="https://source.unsplash.com/random/100x103?meeting" alt="">
            <img src="https://source.unsplash.com/random/100x104?team" alt="">
            <img src="https://source.unsplash.com/random/100x105?discussion" alt="">
        </div>
    </section>

</body>
</html>
