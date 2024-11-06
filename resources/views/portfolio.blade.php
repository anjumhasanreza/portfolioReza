<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CDN for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            color: black;
            background-color: #f8f9fa;
        }

        .navbar {
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }

        .hero {
            height: 100vh;
            background: url('https://via.placeholder.com/1200x800') no-repeat center center;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .hero h1 {
            font-size: 3rem;
        }

        .section {
            padding: 60px 20px;
        }

        .skills .skill {
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .project-card {
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            text-align: center;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #343a40;
            color: white;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">MyPortfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="hero">
        <div>
            <h1>Welcome to My Portfolio</h1>
            <p>Web Developer | Designer | Creator</p>
            <a href="#contact" class="btn btn-primary">Get in Touch</a>
        </div>
    </section>

    <!-- About Section -->
    <section class="section" id="about">
        <div class="container">
            <h2 class="text-center mb-4">About Me</h2>
            <p class="text-center">Hello! I'm a passionate web developer with expertise in creating responsive and visually appealing websites. I love coding and continuously improving my skills to deliver high-quality projects.</p>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="section bg-light" id="skills">
        <div class="container">
            <h2 class="text-center mb-4">Skills</h2>
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="skill">
                        <i class="fab fa-php fa-lg"></i>
                        <h5>PHP</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="skill">
                        <i class="fab fa-laravel fa-lg"></i>
                        <h5>Laravel</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="skill">
                        <i class="fas fa-cogs fa-lg"></i>
                        <h5>CodeIgniter</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="skill">
                        <i class="fab fa-vuejs fa-lg"></i>
                        <h5>Vue.js</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="skill">
                        <i class="fab fa-react fa-lg"></i>
                        <h5>React</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="skill">
                        <i class="fab fa-html5 fa-lg"></i>
                        <h5>HTML</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="skill">
                        <i class="fab fa-css3-alt fa-lg"></i>
                        <h5>CSS</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="skill">
                        <i class="fab fa-bootstrap fa-lg"></i>
                        <h5>Bootstrap</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="skill">
                        <i class="fab fa-js fa-lg"></i>
                        <h5>JavaScript</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="skill">
                        <i class="fab fa-wordpress fa-lg"></i>
                        <h5>WordPress</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="skill">
                        <i class="fas fa-database fa-lg"></i>
                        <h5>MySQL</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="skill">
                        <i class="fas fa-credit-card fa-lg"></i>
                        <h5>Payment Gateway Integration</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="skill">
                        <i class="fab fa-shopify fa-lg"></i>
                        <h5>Shopify</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="skill">
                        <i class="fas fa-mobile-alt fa-lg"></i>
                        <h5>Flutter</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="skill">
                        <i class="fas fa-link fa-lg"></i>
                        <h5>API</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="section" id="projects">
        <div class="container">
            <h2 class="text-center mb-4">Projects</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="project-card">
                        <img src="https://via.placeholder.com/350x200" alt="Project 1" class="img-fluid">
                        <div class="p-3">
                            <h5>Project One</h5>
                            <p>A description of the project goes here. Briefly explain the technologies and features.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project-card">
                        <img src="https://via.placeholder.com/350x200" alt="Project 2" class="img-fluid">
                        <div class="p-3">
                            <h5>Project Two</h5>
                            <p>A description of the project goes here. Briefly explain the technologies and features.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project-card">
                        <img src="https://via.placeholder.com/350x200" alt="Project 3" class="img-fluid">
                        <div class="p-3">
                            <h5>Project Three</h5>
                            <p>A description of the project goes here. Briefly explain the technologies and features.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section bg-light" id="contact">
        <div class="container">
            <h2 class="text-center mb-4">Contact</h2>
            <form action="https://example.com/contact" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2023 Your Name. All rights reserved.</p>
        <p>Follow me on <a href="#">LinkedIn</a> | <a href="#">GitHub</a> | <a href="#">Twitter</a></p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
