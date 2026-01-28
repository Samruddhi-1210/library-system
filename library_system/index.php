<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Library System</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<style>
    /* Body */
    body {
        background: #f4f6f8;
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        color: #1f2937;
    }

    /* Navbar */
    .navbar {
        background: #1e3a8a; /* dark blue */
        padding: 15px 40px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .navbar-brand {
        font-size: 28px;
        font-weight: 700;
        color: #fff !important;
    }

    /* Welcome Block */
    .welcome-block {
        background: #3b82f6; /* blue shade */
        text-align: center;
        padding: 60px 30px;
        color: #fff;
        margin: 20px auto;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    .welcome-block h1 {
        font-size: 46px;
        font-weight: 800;
        margin-bottom: 10px;
    }
    .welcome-block p {
        font-size: 18px;
        font-weight: 500;
    }

    /* Cards */
    .soft-card {
        background: #fff;
        padding: 35px 25px;
        border-radius: 15px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        transition: all 0.35s ease;
        text-align: center;
    }
    .soft-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.18);
    }
    .soft-card h3 {
        font-size: 26px;
        font-weight: 700;
        margin-bottom: 15px;
    }
    .soft-card p {
        font-size: 16px;
        color: #555;
        margin-bottom: 20px;
    }

    /* Buttons */
    .btn-modern {
        width: 100%;
        padding: 14px;
        border-radius: 12px;
        font-weight: 600;
        font-size: 16px;
        margin-top: 10px;
        transition: 0.3s;
        color: #fff !important;
    }
    .btn-purple { background: #8b5cf6; }
    .btn-purple:hover { background: #7c3aed; }
    .btn-green { background: #10b981; }
    .btn-green:hover { background: #059669; }
    .btn-red { background: #ef4444; }
    .btn-red:hover { background: #dc2626; }

    /* Card container */
    .card-area {
        max-width: 960px;
        margin: auto;
        margin-bottom: 60px;
    }

    /* Footer */
    footer {
        background: #6b7280; /* muted gray */
        text-align: center;
        padding: 25px 0;
        color: #fff;
        font-size: 14px;
    }
    footer span { 
        display: inline-block;
        padding: 0 6px;
        font-weight: 600;
    }
    footer .red { color: #ef4444; }
    footer .green { color: #10b981; }
    footer .blue { color: #3b82f6; }
    footer .purple { color: #8b5cf6; }

    /* Animations */
    .soft-card {
        transform: translateY(0);
        opacity: 0;
        animation: fadeUp 0.7s forwards;
    }
    .soft-card:nth-child(1){ animation-delay: 0.2s; }
    .soft-card:nth-child(2){ animation-delay: 0.4s; }

    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(20px);}
        to { opacity: 1; transform: translateY(0);}
    }

    @media (max-width:768px){
        .welcome-block h1{ font-size: 36px; }
        .soft-card h3{ font-size: 22px; }
    }
</style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand">Library System</a>
</nav>

<!-- Welcome Block -->
<div class="welcome-block">
    <h1>Welcome to the Library</h1>
    <p>Professional • Modern • Interactive</p>
</div>

<!-- Cards Section -->
<div class="container card-area">
    <div class="row">

        <!-- USER CARD -->
        <div class="col-md-6 mb-4">
            <div class="soft-card">
                <h3>User Section</h3>
                <p>Create your account or login to access book services.</p>
                <a href="user/register.php" class="btn btn-purple btn-modern">Register</a>
                <a href="user/login.php" class="btn btn-green btn-modern">Login</a>
            </div>
        </div>

        <!-- ADMIN CARD -->
        <div class="col-md-6 mb-4">
            <div class="soft-card">
                <h3>Admin Section</h3>
                <p>Manage users, books, and entire library records.</p>
                <a href="admin/login.php" class="btn btn-red btn-modern">Admin Login</a>
            </div>
        </div>

    </div>
</div>

<!-- Footer -->
<footer>
    &copy; <?= date("Y") ?> Library System. Designed with 
    <span class="red">❤</span> <span class="green">💻</span> <span class="blue">📚</span> <span class="purple">✨</span>
</footer>

</body>
</html>
