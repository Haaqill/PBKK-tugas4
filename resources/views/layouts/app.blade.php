<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Profil Akademis')
    </title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>
        body {
            background: #f8fafc;
            color: #1e293b;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: black;
            border-bottom: 1px solid black;
        }

        .navbar-brand {
            color: white;
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        .hero {
            min-height: 75vh;

            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            color: white;
            background-image:
                linear-gradient(
                    135deg,
                    rgba(15, 23, 42, 0.95),
                    rgba(30, 41, 59, 0.75),
                    rgba(59, 130, 246, 0.45)
                ),
                url('images/IFl.jpg');
            background-size: cover;
            background-position: center;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 850px;
            padding: 80px 20px;
        }

        .hero-label {
            font-size: 14px;
            letter-spacing: 3px;
            font-weight: 600;
            opacity: 0.8;
            text-transform: uppercase;
        }

        .hero-title {
            font-size: clamp(3rem, 7vw, 5.5rem);
            font-weight: 700;
            letter-spacing: -4px;
            line-height: 1.05;
        }

        .hero-title span {
            opacity: 0.75;
        }

        .hero-subtitle {
            font-size: 1.15rem;
            line-height: 1.8;
            max-width: 650px;
            margin: 0 auto;
            opacity: 0.85;
            color: #fefefe;
        }

        .profile-section {
            padding: 90px 0;
            background: #f8fafc;
        }

        .profile-header {
            text-align: center;
            margin-bottom: 45px;
        }

        .profile-header p {
            letter-spacing: 2px;
            font-size: 13px;
            font-weight: 600;
            color: #64748b;
        }

        .profile-header h2 {
            font-weight: 700;
            letter-spacing: -1px;
        }
        
        .profile-card {
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 20px;
            padding: 35px;
            transition: 0.25s ease;
        }

        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(15, 23, 42, 0.08);
        }

        .avatar {
            width: 75px;
            height: 75px;
            border-radius: 50%;
            background: #0f172a;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            font-weight: bold;
        }

        .info-label {
            color: #64748b;
            font-size: 13px;
            margin-bottom: 3px;
        }

        .info-value {
            font-weight: 600;
            color: #1e293b;
        }

        @media (max-width: 768px) {
            .hero {min-height: 70vh;}
            .hero-title {letter-spacing: -2px;}
            .profile-section {padding: 60px 0;}
            .profile-card {padding: 25px;}
        }

        .error-page {
            min-height: 75vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .error-code {
            font-size: clamp(7rem, 20vw, 12rem);
            font-weight: 800;
            line-height: 0.9;
            letter-spacing: -8px;
            color: #e2e8f0;
        }

        .error-title {
            font-weight: 700;
            letter-spacing: -1px;
        }

        .error-description {
            max-width: 500px;
            margin: 0 auto;
            color: #64748b;
            line-height: 1.7;
        }

        .error-button {
            border-radius: 50px;
            padding: 12px 28px;
            font-weight: 600;
        }


    </style>

    @yield('style')
</head>

<body>

<nav class="navbar navbar-expand-lg">
    <div class="container py-2">

        <a class="navbar-brand" href="{{ route('home') }}">
            Profil Akademis
        </a>

        <div class="d-flex gap-2">

            <a href="{{ route('home') }}" class="btn btn-sm btn-outline-light">
                Home
            </a>

            <a href="{{ route('hitung.ipk', ['ip1' => '3.40', 'ip2' => '3.75']) }}" class="btn btn-sm btn-outline-light">
                Kalkulator IPK
            </a>

            <a href="{{ route('agent', ['tema' => 'ByeByeCleaner']) }}" class="btn btn-sm btn-outline-light">
                Project Agent
            </a>

        </div>

    </div>
</nav>


<main>
    @yield('content')
</main>

</body>
</html>