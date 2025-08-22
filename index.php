<?php
// index.php - Halaman utama
require_once 'config.php';

// Ambil data projects
$stmt = $pdo->query("SELECT * FROM projects ORDER BY created_at DESC");
$projects = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Web Developer</title>
    
    <!-- Google Fonts - Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#home">
            <i class="fas fa-code text-primary"></i> Portfolio
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <!-- Hero Section -->
<section id="home" class="hero-section">
    <div class="container">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1 class="display-4 fw-bold text-white mb-4">
                        Halo, Saya <span class="text-primary">Web Developer</span>
                    </h1>
                    <p class="lead text-light mb-4">
                        Saya adalah seorang web developer yang passionate dalam menciptakan 
                        website dan aplikasi web yang modern dan user-friendly.
                    </p>
                    <div class="hero-buttons">
                        <a href="#projects" class="btn btn-primary btn-lg me-3">
                            <i class="fas fa-eye"></i> Lihat Portfolio
                        </a>
                        <a href="#contact" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-envelope"></i> Hubungi Saya
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="hero-image">
                    <img src="https://via.placeholder.com/400x400/007bff/ffffff?text=Your+Photo" 
                         alt="Profile" class="img-fluid rounded-circle profile-img">
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Tentang Saya</h2>
                    <div class="section-divider"></div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <h3 class="mb-4">Web Developer & UI/UX Enthusiast</h3>
                        <p class="mb-4">
                            Saya adalah seorang web developer dengan pengalaman 3+ tahun dalam 
                            mengembangkan aplikasi web menggunakan teknologi modern. Saya memiliki 
                            passion yang besar dalam menciptakan solusi digital yang inovatif dan 
                            user-friendly.
                        </p>
                        <div class="row">
                            <div class="col-6">
                                <ul class="list-unstyled">
                                    <li><strong>Nama:</strong> John Doe</li>
                                    <li><strong>Email:</strong> john@example.com</li>
                                    <li><strong>Phone:</strong> +62 812-3456-7890</li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="list-unstyled">
                                    <li><strong>Kota:</strong> Jakarta, Indonesia</li>
                                    <li><strong>Freelance:</strong> Available</li>
                                    <li><strong>Experience:</strong> 3+ Years</li>
                                </ul>
                            </div>
                        </div>
                        <a href="cv.pdf" class="btn btn-primary" download>
                            <i class="fas fa-download"></i> Download CV
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="skills-progress">
                        <div class="skill-item">
                            <div class="d-flex justify-content-between">
                                <span>PHP</span>
                                <span>90%</span>
                            </div>
                            <div class="progress mb-3">
                                <div class="progress-bar" style="width: 90%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="d-flex justify-content-between">
                                <span>JavaScript</span>
                                <span>85%</span>
                            </div>
                            <div class="progress mb-3">
                                <div class="progress-bar" style="width: 85%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="d-flex justify-content-between">
                                <span>MySQL</span>
                                <span>80%</span>
                            </div>
                            <div class="progress mb-3">
                                <div class="progress-bar" style="width: 80%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="d-flex justify-content-between">
                                <span>React.js</span>
                                <span>75%</span>
                            </div>
                            <div class="progress mb-3">
                                <div class="progress-bar" style="width: 75%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Keahlian</h2>
                    <div class="section-divider"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="skill-card text-center">
                        <div class="skill-icon">
                            <i class="fab fa-html5"></i>
                        </div>
                        <h5>Frontend Development</h5>
                        <p>HTML5, CSS3, JavaScript, Bootstrap, React.js</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="skill-card text-center">
                        <div class="skill-icon">
                            <i class="fas fa-server"></i>
                        </div>
                        <h5>Backend Development</h5>
                        <p>PHP, Node.js, Python, RESTful API</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="skill-card text-center">
                        <div class="skill-icon">
                            <i class="fas fa-database"></i>
                        </div>
                        <h5>Database</h5>
                        <p>MySQL, PostgreSQL, MongoDB</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="skill-card text-center">
                        <div class="skill-icon">
                            <i class="fab fa-git-alt"></i>
                        </div>
                        <h5>Tools & Others</h5>
                        <p>Git, Docker, AWS, Laravel, CodeIgniter</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Portfolio Projects</h2>
                    <div class="section-divider"></div>
                </div>
            </div>
            <div class="row">
                <?php foreach($projects as $project): ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="project-card">
                        <div class="project-image">
                            <img src="https://via.placeholder.com/400x250/007bff/ffffff?text=<?= urlencode($project['title']) ?>" 
                                 alt="<?= htmlspecialchars($project['title']) ?>" class="img-fluid">
                            <div class="project-overlay">
                                <div class="project-links">
                                    <?php if($project['demo_link']): ?>
                                    <a href="<?= htmlspecialchars($project['demo_link']) ?>" target="_blank" class="btn btn-light btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <?php endif; ?>
                                    <?php if($project['github_link']): ?>
                                    <a href="<?= htmlspecialchars($project['github_link']) ?>" target="_blank" class="btn btn-light btn-sm">
                                        <i class="fab fa-github"></i>
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="project-info">
                            <h5><?= htmlspecialchars($project['title']) ?></h5>
                            <p><?= htmlspecialchars($project['description']) ?></p>
                            <div class="project-tech">
                                <small class="text-muted"><?= htmlspecialchars($project['technologies']) ?></small>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title text-white">Hubungi Saya</h2>
                    <div class="section-divider bg-primary"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <form id="contactForm" action="contact.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="subject" placeholder="Subject">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Pesan Anda" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-paper-plane"></i> Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 text-center">
                    <div class="contact-info">
                        <i class="fas fa-map-marker-alt fa-2x text-primary mb-3"></i>
                        <h5>Alamat</h5>
                        <p>Jakarta, Indonesia</p>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="contact-info">
                        <i class="fas fa-envelope fa-2x text-primary mb-3"></i>
                        <h5>Email</h5>
                        <p>john@example.com</p>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="contact-info">
                        <i class="fas fa-phone fa-2x text-primary mb-3"></i>
                        <h5>Phone</h5>
                        <p>+62 812-3456-7890</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p>&copy; 2025 Portfolio. All rights reserved.</p>
                </div>
                <div class="col-lg-6 text-end">
                    <div class="social-links">
                        <a href="#" class="text-white me-3"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-github"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>