<?php
// index.php - Paygem Frontend Landing Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paygem by Dynextron - Next-Gen Payment Gateway</title>
    <!-- Google Fonts: Cursive for branding, Poppins for clean UI text -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <style>
        :root {
            --light-green: #eafaf1;
            --mid-green: #2ecc71;
            --dark-green: #145a32;
            --glow-green: #00ff66;
            --glass-bg: rgba(255, 255, 255, 0.6);
            --glass-border: rgba(255, 255, 255, 0.3);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--light-green);
            color: #333;
            overflow-x: hidden;
            position: relative;
        }

        /* Animated Graphic Background Blobs */
        .blob {
            position: absolute;
            filter: blur(80px);
            z-index: -1;
            opacity: 0.6;
            animation: float 10s infinite alternate ease-in-out;
        }
        .blob-1 {
            width: 400px; height: 400px;
            background: var(--mid-green);
            top: -100px; left: -100px;
            border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%;
        }
        .blob-2 {
            width: 500px; height: 500px;
            background: var(--dark-green);
            bottom: -200px; right: -100px;
            border-radius: 60% 40% 30% 70% / 50% 60% 40% 40%;
            animation-delay: 2s;
        }

        @keyframes float {
            0% { transform: translateY(0) scale(1); }
            100% { transform: translateY(30px) scale(1.1); }
        }

        /* Navigation */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background: rgba(234, 250, 241, 0.8);
            backdrop-filter: blur(10px);
            position: sticky;
            top: 0;
            z-index: 100;
            border-bottom: 1px solid var(--glass-border);
        }

        .logo {
            font-family: 'Dancing Script', cursive;
            font-size: 2.8rem;
            color: var(--dark-green);
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark-green);
            font-weight: 600;
            margin-left: 30px;
            transition: color 0.3s;
        }
        
        .nav-links a:hover {
            color: var(--mid-green);
        }

        .btn {
            background: linear-gradient(135deg, var(--mid-green), var(--dark-green));
            color: white !important;
            padding: 10px 25px;
            border-radius: 30px;
            box-shadow: 0 4px 15px rgba(20, 90, 50, 0.3);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 255, 102, 0.4);
        }

        /* Hero Section */
        .hero {
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0 20px;
        }

        .hero-content {
            background: var(--glass-bg);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid var(--glass-border);
            padding: 60px 40px;
            border-radius: 30px;
            box-shadow: 0 25px 45px rgba(0,0,0,0.05);
            max-width: 900px;
        }

        .hero h1 {
            font-family: 'Dancing Script', cursive;
            font-size: 4.5rem;
            color: var(--dark-green);
            margin-bottom: 20px;
            line-height: 1.1;
        }

        .hero p {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 30px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            font-style: italic;
        }

        /* Features Grid */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            padding: 50px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .card {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: transform 0.3s;
            border-top: 4px solid var(--mid-green);
        }

        .card:hover {
            transform: translateY(-10px);
            border-top-color: var(--dark-green);
        }

        .card h3 {
            font-family: 'Dancing Script', cursive;
            font-size: 2.2rem;
            color: var(--dark-green);
            margin-bottom: 15px;
        }

        .card .rate {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--mid-green);
            margin-bottom: 15px;
        }

        footer {
            text-align: center;
            padding: 30px;
            background: var(--dark-green);
            color: var(--light-green);
            margin-top: 50px;
        }

        @media (max-width: 768px) {
            .hero h1 { font-size: 3rem; }
            nav { padding: 15px 20px; flex-direction: column; gap: 15px; }
            .nav-links { display: flex; gap: 15px; }
            .nav-links a { margin: 0; }
        }
    </style>
</head>
<body>

    <!-- Animated Background Graphics -->
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>

    <nav>
        <div class="logo">Paygem</div>
        <div class="nav-links">
            <a href="#features">Pricing</a>
            <a href="/api/docs">Developers</a>
            <a href="/merchant/login" class="btn">Merchant Console</a>
        </div>
    </nav>

    <section class="hero">
        <div class="hero-content">
            <h1>The elegant way to accept payments.</h1>
            <p>Seamless UTR verification and zero-friction checkouts for your business. Powered by Dynextron Services, built for scalability.</p>
            <a href="/merchant/register" style="display: inline-block; margin-top: 20px; font-size: 1.2rem; padding: 15px 40px;" class="btn">Start Processing Today</a>
        </div>
    </section>

    <section id="features" class="features">
        <div class="card">
            <h3>Direct Settlement</h3>
            <div class="rate">0.5%</div>
            <p><strong>Merchant QR Model</strong></p>
            <p style="margin-top: 10px; color: #666; font-size: 0.9rem;">
                Customers scan your own UPI QR code. Funds hit your bank directly. Paygem only deducts a tiny 0.5% fee from your prepaid digital wallet for automated UTR verification and API integration.
            </p>
        </div>

        <div class="card">
            <h3>Paygem Managed</h3>
            <div class="rate">0.9%</div>
            <p><strong>T+7 Settlement Model</strong></p>
            <p style="margin-top: 10px; color: #666; font-size: 0.9rem;">
                Use the master Paygem QR infrastructure. We handle the collections, deduct our 0.9% gateway fee, and route the remaining balance directly to your bank account every 7 days.
            </p>
        </div>

        <div class="card">
            <h3>Developer First</h3>
            <div class="rate">API</div>
            <p><strong>Custom Solutions</strong></p>
            <p style="margin-top: 10px; color: #666; font-size: 0.9rem;">
                When you're ready to scale, build entirely custom checkout flows using our dedicated REST API and secure HMAC-SHA256 webhook system.
            </p>
        </div>
    </section>

    <footer>
        <p>A subsidiary of Dynextron Services India Limited</p>
        <p style="font-size: 0.8rem; margin-top: 5px; opacity: 0.7;">&copy; <?php echo date("Y"); ?> Paygem. All rights reserved.</p>
    </footer>

</body>
</html>
