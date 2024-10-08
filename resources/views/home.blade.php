<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 56px; /* Adjust padding to account for fixed navbar */
        }
        .hero-section {
            background: url('your-hero-image.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            text-align: center;
            padding: 100px 0;
        }
        .hero-section h1 {
            font-size: 4rem;
        }
        .card {
            margin: 20px 0;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Happy School Palace</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}"  >Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="{{route('dashboard.log')}}">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard.log')}}" >Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard.log')}}" >Teachers</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section" id="home">
        <div class="container">
            <h1>Welcome to Our School Learning System /h1>
            <p>Explore our Knowledge and learn more about us.</p>

            <a href="{{route('dashboard.log')}}" class="btn btn-primary btn-lg">Get Started</a>

        </div>
    </header>

    <!-- Main Content -->
    <div class="container mt-5">
        <!-- Services Section -->
        <section id="services">
            <h2 class="text-center">Our Teachers</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('dashboard2/images/faces/face1.jpg')}}" class="card-img-top" alt="image">
                        <div class="card-body">
                            <h5 class="card-title">Sir Henry</h5>
                            <p class="card-text">PHD in Computer Scinece.</p>
                            <a href="service1.html" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('dashboard2/images/faces/face2.jpg')}}" class="card-img-top" alt="image">
                        <div class="card-body">
                            <h5 class="card-title">Maam Emma</h5>
                            <p class="card-text">Master in English.</p>
                            <a href="service2.html" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('dashboard2/images/faces/face3.jpg')}}" class="card-img-top" alt="image">
                        <div class="card-body">
                            <h5 class="card-title">Dr Jhon Alex</h5>
                            <p class="card-text">Doctor MBSS Pharmacology</p>
                            <a href="service3.html" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="mt-5">
            <h2 class="text-center">About Us</h2>
            <p class="text-center">Information about the School and its Learning.</p>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="mt-5">
            <h2 class="text-center">Contact Us</h2>
            <p class="text-center">Contact information or form.</p>
        </section>
    </div>

    <!-- Footer -->
    <footer class="bg-light py-4">
        <div class="container text-center">
            <p>&copy; 2024 Happy School. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
