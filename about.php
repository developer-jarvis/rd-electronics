<!DOCTYPE html>
<html lang="en">
<?php include_once 'common/head.php'; ?>

<body>
    <?php include_once 'common/header.php'; ?>

    <!-- BREADCRUMB SECTION -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?php echo $base_url; ?>index.php">
                                    <i class="fas fa-home"></i>
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                    <h1 class="page-title">About RD Electronics</h1>
                    <p class="page-subtitle">Your trusted partner for comprehensive IT networking and electrical solutions across India</p>
                </div>
                <div class="col-md-4 text-end">
                    <div class="breadcrumb-actions">
                        <a href="tel:8744940446" class="btn btn-primary btn-sm me-2">
                            <i class="fas fa-phone"></i>
                            <span>Call Now</span>
                        </a>
                        <a href="<?php echo $base_url; ?>contact.php" class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-envelope text-white"></i>
                            <span class="text-white">Contact</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COMPANY OVERVIEW SECTION -->
    <section class="section bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <span class="section-badge">Our Story</span>
                        <h2 class="section-title">The Magical Journey Since 2020</h2>
                        <p class="section-description">
                            Under the visionary leadership of <strong>Mr. Rajan Kumar Ray</strong>, RD Electronics has established
                            itself as Bihar's premier technology solutions provider. Our insightful journey is about offering an
                            amazing experience to customers where they unite with their needs for their particular service.
                        </p>

                        <div class="company-highlights">
                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>Established 2020</h5>
                                    <p>5+ years of excellence in service delivery</p>
                                </div>
                            </div>

                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>Bihar Based</h5>
                                    <p>Serving clients across 15+ cities in Bihar</p>
                                </div>
                            </div>

                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-award"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>Quality Certified</h5>
                                    <p>GST & UDYAM Registered with TATA certification</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-image-container">
                        <div class="about-main-image">
                            <img src="<?php echo $base_url; ?>assets/images/certificate/1.jpeg" alt="RD Electronics Team" class="img-fluid">
                            <div class="image-overlay">
                                <div class="overlay-content">
                                    <h4>5+ Years</h4>
                                    <p>Industry Experience</p>
                                </div>
                            </div>
                        </div>

                        <div class="floating-stats">
                            <div class="stat-card">
                                <h3>50+</h3>
                                <p>Happy Clients</p>
                            </div>
                            <div class="stat-card">
                                <h3>100+</h3>
                                <p>Projects Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOUNDER MESSAGE SECTION -->
    <section class="section section-alt">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="founder-image-container">
                        <div class="founder-image">
                            <img src="<?php echo $base_url; ?>assets/images/about/owner.jpeg" alt="Mr. Rajan Kumar Ray" class="img-fluid">
                            <div class="founder-badge">
                                <i class="fas fa-user-tie"></i>
                                <span>Proprietor</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="founder-content">
                        <span class="section-badge">Leadership</span>
                        <h2 class="section-title">Message from Our Proprietor</h2>
                        <div class="founder-message">
                            <p>
                                "At RD Electronics, we believe in transforming challenges into opportunities. Since our inception in 2020,
                                we have been committed to delivering cutting-edge IT networking and electrical solutions that empower
                                businesses across India."
                            </p>
                            <p>
                                "Our success is built on three pillars: technical excellence, customer satisfaction, and continuous innovation.
                                We don't just provide services; we build lasting partnerships with our clients."
                            </p>
                            <div class="founder-signature">
                                <h5>Mr. Rajan Kumar Ray</h5>
                                <p>Proprietor, RD Electronics</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES OVERVIEW SECTION -->
    <section class="section bg-white">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge">Our Expertise</span>
                <h2 class="section-title">Comprehensive Solutions Under One Roof</h2>
                <p class="section-description">
                    We offer a complete range of IT networking and electrical services designed to meet
                    the diverse needs of modern businesses and industries.
                </p>
            </div>

            <div class="row g-4">
                <!-- IT Networking Services -->
                <div class="col-lg-6">
                    <div class="service-overview-card">
                        <div class="service-header">
                            <div class="service-icon">
                                <i class="fas fa-network-wired"></i>
                            </div>
                            <div class="service-title">
                                <h4>IT Networking Services</h4>
                                <p>Advanced networking solutions for modern businesses</p>
                            </div>
                        </div>

                        <div class="service-list">
                            <div class="service-item">
                                <i class="fas fa-ethernet"></i>
                                <span>Data Cabling Work</span>
                            </div>
                            <div class="service-item">
                                <i class="fas fa-video"></i>
                                <span>CCTV Security & Surveillance</span>
                            </div>
                            <div class="service-item">
                                <i class="fas fa-project-diagram"></i>
                                <span>Fibre Cable Splicing</span>
                            </div>
                            <div class="service-item">
                                <i class="fas fa-search-plus"></i>
                                <span>OTDR Testing Services</span>
                            </div>
                            <div class="service-item">
                                <i class="fas fa-volume-up"></i>
                                <span>Audio & Video Solutions</span>
                            </div>
                            <div class="service-item">
                                <i class="fas fa-fire-extinguisher"></i>
                                <span>Fire Alarm Systems</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Electrical Services -->
                <div class="col-lg-6">
                    <div class="service-overview-card">
                        <div class="service-header">
                            <div class="service-icon">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <div class="service-title">
                                <h4>Electrical Services</h4>
                                <p>Complete electrical solutions for all power needs</p>
                            </div>
                        </div>

                        <div class="service-list">
                            <div class="service-item">
                                <i class="fas fa-plug"></i>
                                <span>Electrical Wiring (Single & Three Phase)</span>
                            </div>
                            <div class="service-item">
                                <i class="fas fa-tools"></i>
                                <span>Panel / DB Installation</span>
                            </div>
                            <div class="service-item">
                                <i class="fas fa-battery-full"></i>
                                <span>UPS & Inverter Solutions</span>
                            </div>
                            <div class="service-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Electrical Testing</span>
                            </div>
                            <div class="service-item">
                                <i class="fas fa-user-hard-hat"></i>
                                <span>Technical Manpower Supply</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US SECTION -->
    <section class="section section-alt">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge">Why Choose Us</span>
                <h2 class="section-title">What Makes Us Different</h2>
                <p class="section-description">
                    We are committed to delivering excellence in every project with our unique approach and values.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h5>Expert Team</h5>
                        <p>Skilled professionals with 5+ years of industry experience and continuous training.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h5>Timely Delivery</h5>
                        <p>We complete projects on schedule without compromising on quality or safety standards.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h5>Quality Assurance</h5>
                        <p>High-quality materials, certified processes, and comprehensive testing protocols.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h5>24/7 Support</h5>
                        <p>Round-the-clock technical support and maintenance services for complete peace of mind.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT CTA SECTION -->
    <section class="section bg-white">
        <div class="container">
            <div class="cta-container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="cta-content">
                            <h2>Ready to Transform Your Business?</h2>
                            <p>Contact RD Electronics today for professional IT networking and electrical solutions tailored to your needs.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <div class="cta-actions">
                            <a href="tel:8744940446" class="btn btn-primary btn-lg me-3">
                                <i class="fas fa-phone"></i>
                                <span>Call Now</span>
                            </a>
                            <a href="<?php echo $base_url; ?>contact.php" class="btn btn-outline-primary btn-lg">
                                <i class="fas fa-envelope"></i>
                                <span>Get Quote</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================================== -->
     <?php include_once 'common/footer.php'; ?>
</body>

</html>
