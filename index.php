<!DOCTYPE html>
<html lang="en">

<?php include_once 'common/head.php'; ?>

<body>
    <?php include_once 'common/header.php'; ?>
    <!-- HERO CAROUSEL SECTION -->
    <section class="hero-carousel-section">
        <div id="rdElectronicsCarousel" class="carousel slide carousel-fade h-100" data-bs-ride="carousel" data-bs-interval="5000">

            <!-- Carousel Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#rdElectronicsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#rdElectronicsCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#rdElectronicsCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <!-- Carousel Inner -->
            <div class="carousel-inner h-100">
                <div class="carousel-item active h-100">
                    <img src="<?php echo $base_url; ?>assets/images/banner/1.jpg" class="carousel-image" alt="RD Electronics - Professional IT Networking Services">
                    <div class="carousel-caption-overlay">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 text-center">
                                    <h1 class="hero-title">Welcome to RD Electronics</h1>
                                    <p class="hero-subtitle">Shaping the Future of Smart Infrastructure</p>
                                    <p class="hero-description">The magical journey began in 2020 under the vision of Mr. Rajan Kumar Ray. We deliver comprehensive technology solutions that empower industries across India.</p>
                                    <a href="<?php echo $base_url; ?>contact.php" class="btn btn-primary btn-lg me-3">Get Started</a>
                                    <a href="<?php echo $base_url; ?>about.php" class="btn btn-outline-light btn-lg">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100">
                    <img src="<?php echo $base_url; ?>assets/images/banner/2.jpg" class="carousel-image" alt="RD Electronics - Expert Electrical Solutions">
                    <div class="carousel-caption-overlay">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 text-center">
                                    <h1 class="hero-title">Complete Electrical Solutions</h1>
                                    <p class="hero-subtitle">Powering Your Business Growth</p>
                                    <p class="hero-description">From single-phase to three-phase installations, panel setups to UPS solutions - we power your business with safe, reliable electrical infrastructure.</p>
                                    <a href="tel:8744940446" class="btn btn-primary btn-lg me-3">Call Now</a>
                                    <a href="<?php echo $base_url; ?>projects.php" class="btn btn-outline-light btn-lg">View Projects</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100">
                    <img src="<?php echo $base_url; ?>assets/images/banner/3.jpg" class="carousel-image" alt="RD Electronics - Skilled Technical Manpower">
                    <div class="carousel-caption-overlay">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 text-center">
                                    <h1 class="hero-title">Expert Technical Manpower</h1>
                                    <p class="hero-subtitle">Skilled Workforce for Your Projects</p>
                                    <p class="hero-description">Providing skilled and unskilled technical manpower for projects across India. Our certified professionals ensure quality work and timely completion.</p>
                                    <a href="https://wa.me/918744940446" target="_blank" class="btn btn-primary btn-lg me-3">WhatsApp Us</a>
                                    <a href="<?php echo $base_url; ?>contact.php" class="btn btn-outline-light btn-lg">Get Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enhanced Navigation Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#rdElectronicsCarousel" data-bs-slide="prev">
                <div class="carousel-nav-btn">
                    <i class="fas fa-chevron-left"></i>
                </div>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#rdElectronicsCarousel" data-bs-slide="next">
                <div class="carousel-nav-btn">
                    <i class="fas fa-chevron-right"></i>
                </div>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- ABOUT SECTION WITH IMAGE -->
    <section class="section bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="about-image-container">
                        <img src="<?php echo $base_url; ?>assets/images/certificate/1.jpeg" alt="RD Electronics Team" class="index-about-image">
                        <div class="about-overlay-card">
                            <h4>5+ Years</h4>
                            <p>Industry Experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-content">
                        <span class="section-badge">About RD Electronics</span>
                        <h2 class="section-title">The Magical Journey Since 2020</h2>
                        <p class="section-description">
                            Under the visionary leadership of <strong>Mr. Rajan Kumar Ray</strong>, RD Electronics has established
                            itself as Bihar's premier technology solutions provider. Our insightful journey is about offering an
                            amazing experience to customers where they unite with their needs for their particular service.
                        </p>

                        <div class="about-features">
                            <div class="feature-item">
                                <img src="<?php echo $base_url; ?>assets/images/about/certified.jpg" alt="Quality" class="feature-icon">
                                <div>
                                    <h5>Quality Certified</h5>
                                    <p>GST & UDYAM Registered with TATA certification</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <img src="<?php echo $base_url; ?>assets/images/others/team.jpg" alt="Experience" class="feature-icon">
                                <div>
                                    <h5>Expert Team</h5>
                                    <p>Highly trained staff with 5+ years experience</p>
                                </div>
                            </div>
                        </div>

                        <a href="<?php echo $base_url; ?>about.php" class="btn btn-primary">Learn More About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES GRID WITH IMAGES -->
    <section class="section section-alt">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge">Our Services</span>
                <h2 class="section-title">Complete Solutions Under One Roof</h2>
                <p class="section-description">
                    We offer best professional solutions and services with a strong commitment to quality,
                    safety, innovation, flexibility, timely completion and client satisfaction.
                </p>
            </div>

            <!-- Floating Particles Background -->
            <div class="floating-particles">
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
            </div>

            <!-- IT NETWORKING SERVICES SECTION -->
            <div class="service-category-header">
                <h3><i class="fas fa-network-wired me-2"></i>IT Networking Services</h3>
                <p>Advanced networking solutions for modern businesses</p>
            </div>

            <div class="services-grid">
                <!-- Data Cabling Work -->
                <div class="service-item">
                    <div class="service-card">
                        <div class="service-card-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/data-cabling.jpeg" alt="Data Cabling Work">
                        </div>
                        <div class="service-card-content">
                            <div class="service-card-icon">
                                <i class="fas fa-ethernet"></i>
                            </div>
                            <h4 class="service-card-title">Data Cabling Work</h4>
                            <p class="service-card-desc">Professional structured cabling solutions</p>
                            <div class="service-card-details">
                                <ul>
                                    <li>Cat 6 & Cat 6A Cabling</li>
                                    <li>Fiber Optic Installation</li>
                                    <li>Network Infrastructure</li>
                                </ul>
                                <a href="<?php echo $base_url; ?>services/data-cabling.php" class="service-card-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CCTV Security & Surveillance -->
                <div class="service-item">
                    <div class="service-card">
                        <div class="service-card-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/cctv.jpeg" alt="CCTV Security & Surveillance">
                        </div>
                        <div class="service-card-content">
                            <div class="service-card-icon">
                                <i class="fas fa-video"></i>
                            </div>
                            <h4 class="service-card-title">CCTV Security & Surveillance</h4>
                            <p class="service-card-desc">Advanced security systems for complete protection</p>
                            <div class="service-card-details">
                                <ul>
                                    <li>IP Camera Installation</li>
                                    <li>DVR/NVR Setup</li>
                                    <li>Remote Monitoring</li>
                                </ul>
                                <a href="<?php echo $base_url; ?>services/cctv.php" class="service-card-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fibre Cable Splicing -->
                <div class="service-item">
                    <div class="service-card">
                        <div class="service-card-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/fibre-splicing.jpeg" alt="Fibre Cable Splicing">
                        </div>
                        <div class="service-card-content">
                            <div class="service-card-icon">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <h4 class="service-card-title">Fibre Cable Splicing</h4>
                            <p class="service-card-desc">Expert fiber optic splicing and termination services</p>
                            <div class="service-card-details">
                                <ul>
                                    <li>Fusion Splicing</li>
                                    <li>Mechanical Splicing</li>
                                    <li>Fiber Testing</li>
                                </ul>
                                <a href="<?php echo $base_url; ?>services/fibre-splicing.php" class="service-card-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- OTDR Testing Services -->
                <div class="service-item">
                    <div class="service-card">
                        <div class="service-card-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/otdr-testing.jpeg" alt="OTDR Testing Services">
                        </div>
                        <div class="service-card-content">
                            <div class="service-card-icon">
                                <i class="fas fa-search-plus"></i>
                            </div>
                            <h4 class="service-card-title">OTDR Testing Services</h4>
                            <p class="service-card-desc">Comprehensive fiber optic testing and analysis</p>
                            <div class="service-card-details">
                                <ul>
                                    <li>Loss Measurement</li>
                                    <li>Fault Location</li>
                                    <li>Performance Certification</li>
                                </ul>
                                <a href="<?php echo $base_url; ?>services/otdr-testing.php" class="service-card-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Audio & Video Solutions -->
                <div class="service-item">
                    <div class="service-card">
                        <div class="service-card-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/audio-video.jpg" alt="Audio & Video Solutions">
                        </div>
                        <div class="service-card-content">
                            <div class="service-card-icon">
                                <i class="fas fa-volume-up"></i>
                            </div>
                            <h4 class="service-card-title">Audio & Video Solutions</h4>
                            <p class="service-card-desc">Professional AV systems for all environments</p>
                            <div class="service-card-details">
                                <ul>
                                    <li>Sound System Installation</li>
                                    <li>Video Conferencing Setup</li>
                                    <li>Digital Signage</li>
                                </ul>
                                <a href="<?php echo $base_url; ?>services/audio-video.php" class="service-card-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fire Alarm Systems -->
                <div class="service-item">
                    <div class="service-card">
                        <div class="service-card-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/fire-alarm.jpeg" alt="Fire Alarm Systems">
                        </div>
                        <div class="service-card-content">
                            <div class="service-card-icon">
                                <i class="fas fa-fire-extinguisher"></i>
                            </div>
                            <h4 class="service-card-title">Fire Alarm Systems</h4>
                            <p class="service-card-desc">Life safety systems for complete fire protection</p>
                            <div class="service-card-details">
                                <ul>
                                    <li>Smoke Detection Systems</li>
                                    <li>Fire Suppression</li>
                                    <li>Emergency Notification</li>
                                </ul>
                                <a href="<?php echo $base_url; ?>services/fire-alarm.php" class="service-card-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- ELECTRICAL SERVICES SECTION -->
        <div class="service-category-header">
            <h3><i class="fas fa-bolt me-2"></i>Electrical Services</h3>
            <p>Complete electrical solutions for all your power needs</p>
        </div>

        <div class="services-grid">
            <!-- Electrical Wiring -->
            <div class="service-item">
                <div class="service-card">
                    <div class="service-card-image">
                        <img src="<?php echo $base_url; ?>assets/images/services/electrical-wiring.jpeg" alt="Electrical Wiring">
                    </div>
                    <div class="service-card-content">
                        <div class="service-card-icon">
                            <i class="fas fa-plug"></i>
                        </div>
                        <h4 class="service-card-title">Electrical Wiring</h4>
                        <p class="service-card-desc">Complete electrical installation and maintenance</p>
                        <div class="service-card-details">
                            <ul>
                                <li>Cable Tray and Raceway & Conduit</li>
                                <li>Single & Three Phase Wiring</li>
                                <li>Industrial Installations</li>
                            </ul>
                            <a href="<?php echo $base_url; ?>services/electrical-wiring.php" class="service-card-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Panel & DB Installation -->
            <div class="service-item">
                <div class="service-card">
                    <div class="service-card-image">
                        <img src="<?php echo $base_url; ?>assets/images/services/panel.jpeg" alt="Panel & DB Installation">
                    </div>
                    <div class="service-card-content">
                        <div class="service-card-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h4 class="service-card-title">Panel / DB Installation</h4>
                        <p class="service-card-desc">Professional electrical panel and distribution board setup</p>
                        <div class="service-card-details">
                            <ul>
                                <li>Main Distribution Panels</li>
                                <li>Sub-Distribution Panels</li>
                                <li>Control Panels</li>
                            </ul>
                            <a href="<?php echo $base_url; ?>services/panel-installation.php" class="service-card-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- UPS & Inverter Solutions -->
            <div class="service-item">
                <div class="service-card">
                    <div class="service-card-image">
                        <img src="<?php echo $base_url; ?>assets/images/services/ups.jpeg" alt="UPS & Inverter Solutions">
                    </div>
                    <div class="service-card-content">
                        <div class="service-card-icon">
                            <i class="fas fa-battery-full"></i>
                        </div>
                        <h4 class="service-card-title">UPS & Inverter Solutions</h4>
                        <p class="service-card-desc">Reliable power backup systems for uninterrupted operations</p>
                        <div class="service-card-details">
                            <ul>
                                <li>Online UPS Systems</li>
                                <li>Solar Inverters</li>
                                <li>Battery Backup Solutions</li>
                            </ul>
                            <a href="<?php echo $base_url; ?>services/ups-inverter.php" class="service-card-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Electrical Testing -->
            <div class="service-item">
                <div class="service-card">
                    <div class="service-card-image">
                        <img src="<?php echo $base_url; ?>assets/images/services/electrical-testing.jpg" alt="Electrical Testing">
                    </div>
                    <div class="service-card-content">
                        <div class="service-card-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h4 class="service-card-title">Electrical Testing</h4>
                        <p class="service-card-desc">Comprehensive testing and certification services</p>
                        <div class="service-card-details">
                            <ul>
                                <li>Installation Testing</li>
                                <li>Safety Inspections</li>
                                <li>Performance Verification</li>
                            </ul>
                            <a href="<?php echo $base_url; ?>services/electrical-testing.php" class="service-card-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MANPOWER SERVICES SECTION -->
        <div class="service-category-header">
            <h3><i class="fas fa-users me-2"></i>Manpower Services</h3>
            <p>Skilled workforce for electrical and IT projects</p>
        </div>

        <div class="services-grid">
            <!-- Technical Manpower Supply -->
            <div class="service-item">
                <div class="service-card">
                    <div class="service-card-image">
                        <img src="<?php echo $base_url; ?>assets/images/services/man-power.jpeg" alt="Technical Manpower Supply">
                    </div>
                    <div class="service-card-content">
                        <div class="service-card-icon">
                            <i class="fas fa-user-hard-hat"></i>
                        </div>
                        <h4 class="service-card-title">Technical Manpower Supply</h4>
                        <p class="service-card-desc">Skilled workforce for electrical and IT projects</p>
                        <div class="service-card-details">
                            <ul>
                                <li>Certified Technicians</li>
                                <li>Project-based Staffing</li>
                                <li>Quality Assurance</li>
                            </ul>
                            <a href="<?php echo $base_url; ?>services/manpower-supply.php" class="service-card-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- CLIENTS SECTION WITH IMAGES -->
    <section class="section bg-white">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge">Our Valued Clients</span>
                <h2 class="section-title">Trusted by Leading Organizations</h2>
                <p class="section-description">
                    We are proud to serve prestigious clients across India and beyond, delivering excellence in every project.
                    From government institutions to private enterprises, our commitment to quality has earned us trust nationwide.
                </p>
            </div>

            <!-- Our Valued Clients - Clean Modern Design -->
            <div class="clients-showcase">
                <div class="row g-4">
                    <!-- Amber -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="client-card-modern">
                            <div class="client-logo">
                                <img src="<?php echo $base_url; ?>assets/images/clients/amber.jpeg" alt="Amber Enterprises" class="client-img">
                            </div>
                            <div class="client-info">
                                <h5>Amber Enterprises</h5>
                                <p>Construction & Contracting</p>
                                <div class="client-type">
                                    <i class="fas fa-hard-hat"></i>
                                    <span>Construction</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Elgin -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="client-card-modern">
                            <div class="client-logo">
                                <img src="<?php echo $base_url; ?>assets/images/clients/elgin.jpeg" alt="Elgin Development" class="client-img">
                            </div>
                            <div class="client-info">
                                <h5>Elgin Development</h5>
                                <p>Audio & Video Solutions</p>
                                <div class="client-type">
                                    <i class="fas fa-volume-up"></i>
                                    <span>Audio/Video</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- KEME -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="client-card-modern">
                            <div class="client-logo">
                                <img src="<?php echo $base_url; ?>assets/images/clients/keme.jpeg" alt="KEME Engineering" class="client-img">
                            </div>
                            <div class="client-info">
                                <h5>KEME Engineering</h5>
                                <p>Construction & Contracting</p>
                                <div class="client-type">
                                    <i class="fas fa-hard-hat"></i>
                                    <span>Construction</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- L&T -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="client-card-modern">
                            <div class="client-logo">
                                <img src="<?php echo $base_url; ?>assets/images/clients/l-t.jpeg" alt="Larsen & Toubro" class="client-img">
                            </div>
                            <div class="client-info">
                                <h5>Larsen & Toubro</h5>
                                <p>Construction & Infrastructure</p>
                                <div class="client-type">
                                    <i class="fas fa-star"></i>
                                    <span>Premium</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Labotek -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="client-card-modern">
                            <div class="client-logo">
                                <img src="<?php echo $base_url; ?>assets/images/clients/labotek.jpeg" alt="Labotek" class="client-img">
                            </div>
                            <div class="client-info">
                                <h5>Labotek</h5>
                                <p>Technology Solutions</p>
                                <div class="client-type">
                                    <i class="fas fa-laptop-code"></i>
                                    <span>Technology</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Meghna -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="client-card-modern">
                            <div class="client-logo">
                                <img src="<?php echo $base_url; ?>assets/images/clients/meghna.jpeg" alt="Meghna Group" class="client-img">
                            </div>
                            <div class="client-info">
                                <h5>Meghna Group</h5>
                                <p>Construction & Contracting</p>
                                <div class="client-type">
                                    <i class="fas fa-hard-hat"></i>
                                    <span>Construction</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Niveshan -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="client-card-modern">
                            <div class="client-logo">
                                <img src="<?php echo $base_url; ?>assets/images/clients/niveshan.jpeg" alt="Niveshan" class="client-img">
                            </div>
                            <div class="client-info">
                                <h5>Niveshan</h5>
                                <p>Technology Solutions</p>
                                <div class="client-type">
                                    <i class="fas fa-laptop-code"></i>
                                    <span>Technology</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Nutech -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="client-card-modern">
                            <div class="client-logo">
                                <img src="<?php echo $base_url; ?>assets/images/clients/nutech.jpeg" alt="Nutech Contracts" class="client-img">
                            </div>
                            <div class="client-info">
                                <h5>Nutech Contracts</h5>
                                <p>Construction & Contracting</p>
                                <div class="client-type">
                                    <i class="fas fa-hard-hat"></i>
                                    <span>Contractor</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SESIPL -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="client-card-modern">
                            <div class="client-logo">
                                <img src="<?php echo $base_url; ?>assets/images/clients/sesipl.jpeg" alt="SESIPL" class="client-img">
                            </div>
                            <div class="client-info">
                                <h5>SESIPL</h5>
                                <p>Engineering Services</p>
                                <div class="client-type">
                                    <i class="fas fa-tools"></i>
                                    <span>Services</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Shapoorji -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="client-card-modern">
                            <div class="client-logo">
                                <img src="<?php echo $base_url; ?>assets/images/clients/shapoorji.jpeg" alt="Shapoorji Pallonji" class="client-img">
                            </div>
                            <div class="client-info">
                                <h5>Shapoorji Pallonji</h5>
                                <p>Construction & Infrastructure</p>
                                <div class="client-type">
                                    <i class="fas fa-star"></i>
                                    <span>Premium</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TATA -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="client-card-modern">
                            <div class="client-logo">
                                <img src="<?php echo $base_url; ?>assets/images/clients/tata.jpeg" alt="TATA Group" class="client-img">
                            </div>
                            <div class="client-info">
                                <h5>TATA Group</h5>
                                <p>Conglomerate & Industries</p>
                                <div class="client-type">
                                    <i class="fas fa-crown"></i>
                                    <span>Fortune 500</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tricolite -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="client-card-modern">
                            <div class="client-logo">
                                <img src="<?php echo $base_url; ?>assets/images/clients/tricolite.jpeg" alt="Tricolite" class="client-img">
                            </div>
                            <div class="client-info">
                                <h5>Tricolite</h5>
                                <p>Electrical & Lighting Solutions</p>
                                <div class="client-type">
                                    <i class="fas fa-lightbulb"></i>
                                    <span>Electrical</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Client Statistics -->
            <div class="client-stats mt-5">
                <div class="row g-4 text-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <h3 class="text-primary">50+</h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <h3 class="text-primary">100+</h3>
                            <p>Projects Completed</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h3 class="text-primary">22+</h3>
                            <p>Cities Served</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <h3 class="text-primary">5+</h3>
                            <p>Years Experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECTS SHOWCASE -->
    <section class="section section-alt">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge">Our Projects</span>
                <h2 class="section-title">Major Projects Completed</h2>
                <p class="section-description">
                    From government buildings to educational institutions, we've successfully delivered complex projects across India and beyond.
                    Our portfolio showcases our expertise in delivering world-class technology solutions.
                </p>
            </div>

            <!-- Project Statistics -->
            <div class="project-stats mb-5">
                <div class="row g-4 text-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="project-stat-card">
                            <div class="stat-number">100+</div>
                            <div class="stat-label">Projects Completed</div>
                            <div class="stat-icon">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="project-stat-card">
                            <div class="stat-number">22+</div>
                            <div class="stat-label">Cities Covered</div>
                            <div class="stat-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="project-stat-card">
                            <div class="stat-number">50+</div>
                            <div class="stat-label">Happy Clients</div>
                            <div class="stat-icon">
                                <i class="fas fa-handshake"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="project-stat-card">
                            <div class="stat-number">₹7Cr+</div>
                            <div class="stat-label">Project Value</div>
                            <div class="stat-icon">
                                <i class="fas fa-rupee-sign"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- Government & Public Sector Projects -->
                <div class="col-lg-4 col-md-6">
                    <div class="enhanced-project-category">
                        <div class="enhanced-project-header">
                            <img src="<?php echo $base_url; ?>assets/images/others/government.jpg" alt="Government Projects" class="enhanced-project-category-image">
                            <div class="enhanced-project-header-overlay">
                                <h4><i class="fas fa-landmark me-2"></i>Government & Public Sector</h4>
                                <div class="enhanced-project-count">8+ Projects</div>
                            </div>
                        </div>
                        <div class="enhanced-project-list">
                            <div class="enhanced-project-item featured-project">
                                <i class="fas fa-building text-primary"></i>
                                <div>
                                    <h6>New Parliament Building</h6>
                                    <small class="text-muted">Electrical & IT Infrastructure</small>
                                    <div class="enhanced-project-badges">
                                        <span class="enhanced-project-badge premium">Premium</span>
                                        <span class="enhanced-project-badge completed">Completed</span>
                                    </div>
                                </div>
                            </div>
                            <div class="enhanced-project-item featured-project">
                                <i class="fas fa-university text-primary"></i>
                                <div>
                                    <h6>IIM Bodhgaya</h6>
                                    <small class="text-muted">Complete Networking Solutions</small>
                                    <div class="enhanced-project-badges">
                                        <span class="enhanced-project-badge education">Educational</span>
                                        <span class="enhanced-project-badge completed">Completed</span>
                                    </div>
                                </div>
                            </div>
                            <div class="enhanced-project-item">
                                <i class="fas fa-hospital text-primary"></i>
                                <div>
                                    <h6>AIIMS Patna</h6>
                                    <small class="text-muted">Medical Equipment Installation</small>
                                    <div class="enhanced-project-badges">
                                        <span class="enhanced-project-badge healthcare">Healthcare</span>
                                    </div>
                                </div>
                            </div>
                            <div class="enhanced-project-item">
                                <i class="fas fa-plane text-primary"></i>
                                <div>
                                    <h6>Jay Prakash Narayan Airport</h6>
                                    <small class="text-muted">Security & Surveillance Systems</small>
                                    <div class="enhanced-project-badges">
                                        <span class="enhanced-project-badge aviation">Aviation</span>
                                    </div>
                                </div>
                            </div>
                            <div class="enhanced-project-item">
                                <i class="fas fa-city text-primary"></i>
                                <div>
                                    <h6>Government Office Buildings</h6>
                                    <small class="text-muted">Complete Electrical Solutions</small>
                                </div>
                            </div>
                            <div class="enhanced-project-item">
                                <i class="fas fa-shield-alt text-primary"></i>
                                <div>
                                    <h6>Police Stations & Courts</h6>
                                    <small class="text-muted">CCTV & Security Systems</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Educational & Training Projects -->
                <div class="col-lg-4 col-md-6">
                    <div class="enhanced-project-category">
                        <div class="enhanced-project-header">
                            <img src="<?php echo $base_url; ?>assets/images/others/educational.jpg" alt="Educational Projects" class="enhanced-project-category-image">
                            <div class="enhanced-project-header-overlay">
                                <h4><i class="fas fa-graduation-cap me-2"></i>Educational & Training</h4>
                                <div class="enhanced-project-count">25+ Projects</div>
                            </div>
                        </div>
                        <div class="enhanced-project-list">
                            <div class="enhanced-project-item">
                                <i class="fas fa-school text-primary"></i>
                                <div>
                                    <h6>Multiple Schools (Bihar)</h6>
                                    <small class="text-muted">Smart Classroom Setup & WiFi</small>
                                    <div class="enhanced-project-badges">
                                        <span class="enhanced-project-badge education">K-12</span>
                                    </div>
                                </div>
                            </div>
                            <div class="enhanced-project-item">
                                <i class="fas fa-chalkboard-teacher text-primary"></i>
                                <div>
                                    <h6>Technical Training Centers</h6>
                                    <small class="text-muted">Audio-Visual & Lab Setup</small>
                                    <div class="enhanced-project-badges">
                                        <span class="enhanced-project-badge education">Training</span>
                                    </div>
                                </div>
                            </div>
                            <div class="enhanced-project-item">
                                <i class="fas fa-laptop text-primary"></i>
                                <div>
                                    <h6>Computer Labs</h6>
                                    <small class="text-muted">Network Infrastructure & Cabling</small>
                                </div>
                            </div>
                            <div class="enhanced-project-item">
                                <i class="fas fa-wifi text-primary"></i>
                                <div>
                                    <h6>Campus WiFi Networks</h6>
                                    <small class="text-muted">Wireless Solutions & Hotspots</small>
                                </div>
                            </div>
                            <div class="enhanced-project-item">
                                <i class="fas fa-book text-primary"></i>
                                <div>
                                    <h6>Digital Libraries</h6>
                                    <small class="text-muted">IT Infrastructure & Security</small>
                                </div>
                            </div>
                            <div class="enhanced-project-item">
                                <i class="fas fa-microscope text-primary"></i>
                                <div>
                                    <h6>Science Labs</h6>
                                    <small class="text-muted">Equipment Installation & Wiring</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Commercial & Industrial Projects -->
                <div class="col-lg-4 col-md-6">
                    <div class="enhanced-project-category">
                        <div class="enhanced-project-header">
                            <img src="<?php echo $base_url; ?>assets/images/others/commercial.jpg" alt="Commercial Projects" class="enhanced-project-category-image">
                            <div class="enhanced-project-header-overlay">
                                <h4><i class="fas fa-building me-2"></i>Commercial & Industrial</h4>
                                <div class="enhanced-project-count">40+ Projects</div>
                            </div>
                        </div>
                        <div class="enhanced-project-list">
                            <div class="enhanced-project-item">
                                <i class="fas fa-store text-primary"></i>
                                <div>
                                    <h6>Shopping Complexes & Malls</h6>
                                    <small class="text-muted">Complete Electrical & CCTV</small>
                                    <div class="enhanced-project-badges">
                                        <span class="enhanced-project-badge education">Retail</span>
                                    </div>
                                </div>
                            </div>
                            <div class="enhanced-project-item">
                                <i class="fas fa-hotel text-primary"></i>
                                <div>
                                    <h6>Hotels & Restaurants</h6>
                                    <small class="text-muted">Security Systems & Automation</small>
                                    <div class="enhanced-project-badges">
                                        <span class="enhanced-project-badge healthcare">Hospitality</span>
                                    </div>
                                </div>
                            </div>
                            <div class="enhanced-project-item">
                                <i class="fas fa-industry text-primary"></i>
                                <div>
                                    <h6>Manufacturing Units</h6>
                                    <small class="text-muted">Power Distribution & Control</small>
                                    <div class="enhanced-project-badges">
                                        <span class="enhanced-project-badge aviation">Industrial</span>
                                    </div>
                                </div>
                            </div>
                            <div class="enhanced-project-item">
                                <i class="fas fa-home text-primary"></i>
                                <div>
                                    <h6>Residential Complexes</h6>
                                    <small class="text-muted">Home Automation & Security</small>
                                    <div class="enhanced-project-badges">
                                        <span class="enhanced-project-badge education">Residential</span>
                                    </div>
                                </div>
                            </div>
                            <div class="enhanced-project-item">
                                <i class="fas fa-warehouse text-primary"></i>
                                <div>
                                    <h6>Warehouses & Logistics</h6>
                                    <small class="text-muted">Electrical & Surveillance</small>
                                </div>
                            </div>
                            <div class="enhanced-project-item">
                                <i class="fas fa-gas-pump text-primary"></i>
                                <div>
                                    <h6>Petrol Pumps & CNG Stations</h6>
                                    <small class="text-muted">Safety Systems & Automation</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Featured Projects Showcase -->
            <div class="enhanced-featured-projects-section mt-5">
                <div class="section-header text-center">
                    <h3 class="section-title">Featured Project Highlights</h3>
                    <p class="section-description">
                        Showcasing our most prestigious and technically challenging projects
                    </p>
                </div>

                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="enhanced-featured-project-card">
                            <div class="enhanced-featured-project-image">
                                <img src="<?php echo $base_url; ?>assets/images/clients/Indian-Parliament.jpg" alt="New Parliament Building Project">
                                <div class="enhanced-featured-project-overlay">
                                    <div class="enhanced-project-info">
                                        <h5>New Parliament Building</h5>
                                        <p>Complete electrical infrastructure and IT networking for India's new Parliament Building. A prestigious project showcasing our technical excellence.</p>
                                        <div class="enhanced-project-details">
                                            <div class="enhanced-detail-item">
                                                <i class="fas fa-calendar"></i>
                                                <span>Duration: 18 months</span>
                                            </div>
                                            <div class="enhanced-detail-item">
                                                <i class="fas fa-users"></i>
                                                <span>Team: 25+ Engineers</span>
                                            </div>
                                            <div class="enhanced-detail-item">
                                                <i class="fas fa-award"></i>
                                                <span>Status: Successfully Completed</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="enhanced-featured-project-card">
                            <div class="enhanced-featured-project-image">
                                <img src="<?php echo $base_url; ?>assets/images/clients/iim-bodhgaya.jpg" alt="IIM Bodhgaya Project">
                                <div class="enhanced-featured-project-overlay">
                                    <div class="enhanced-project-info">
                                        <h5>IIM Bodhgaya Campus</h5>
                                        <p>Complete networking solutions for one of India's premier management institutes. Advanced IT infrastructure supporting modern education.</p>
                                        <div class="enhanced-project-details">
                                            <div class="enhanced-detail-item">
                                                <i class="fas fa-calendar"></i>
                                                <span>Duration: 12 months</span>
                                            </div>
                                            <div class="enhanced-detail-item">
                                                <i class="fas fa-network-wired"></i>
                                                <span>1000+ Network Points</span>
                                            </div>
                                            <div class="enhanced-detail-item">
                                                <i class="fas fa-graduation-cap"></i>
                                                <span>Educational Excellence</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Capabilities -->
            <div class="project-capabilities mt-5">
                <div class="section-header text-center">
                    <h3 class="section-title">Our Project Capabilities</h3>
                </div>

                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="capability-card">
                            <div class="capability-icon">
                                <i class="fas fa-tools"></i>
                            </div>
                            <h5>End-to-End Solutions</h5>
                            <p>From planning to execution, we handle complete project lifecycle</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="capability-card">
                            <div class="capability-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h5>Timely Delivery</h5>
                            <p>98% on-time completion rate with quality assurance</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="capability-card">
                            <div class="capability-icon">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <h5>Quality Standards</h5>
                            <p>ISO certified processes and industry best practices</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="capability-card">
                            <div class="capability-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <h5>24/7 Support</h5>
                            <p>Round-the-clock maintenance and technical support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOUNDER MESSAGE SECTION -->
    <section class="section bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="founder-image-container">
                        <img src="<?php echo $base_url; ?>assets/images/about/owner.jpeg" alt="Mr. Rajan Kumar Ray - Founder" class="founder-image">
                        <div class="founder-badge">
                            <i class="fas fa-award"></i>
                            <span>Founder & Proprietor</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="founder-content">
                        <span class="section-badge">Message from Founder</span>
                        <h2 class="section-title">Mr. Rajan Kumar Ray</h2>
                        <h5 class="text-primary mb-3">Proprietor, RD Electronics</h5>

                        <div class="founder-message">
                            <p>
                                "Since establishing RD Electronics in 2020, our vision has been to transform Bihar's
                                technological landscape. We believe in delivering not just services, but complete solutions
                                that empower businesses and communities."
                            </p>
                            <p>
                                "Our journey from a small startup to serving prestigious clients like IIM Bodhgaya and
                                the New Parliament Building reflects our commitment to excellence. Every project we undertake
                                is a step towards building a digitally empowered Bihar."
                            </p>
                            <p>
                                "With GST registration, UDYAM certification, we ensure that our
                                clients receive world-class services backed by proper credentials and quality assurance."
                            </p>
                        </div>

                        <div class="founder-stats row g-3 mt-4">
                            <div class="col-4">
                                <div class="stat-card text-center p-3">
                                    <h4 class="text-primary mb-1">100+</h4>
                                    <small>Projects Completed</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="stat-card text-center p-3">
                                    <h4 class="text-primary mb-1">50+</h4>
                                    <small>Happy Clients</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="stat-card text-center p-3">
                                    <h4 class="text-primary mb-1">5+</h4>
                                    <small>Years Experience</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE VALUES SECTION -->
    <section class="section section-alt">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge">Our Values</span>
                <h2 class="section-title">What Drives Us Forward</h2>
                <p class="section-description">
                    Our core values guide every decision we make and every service we deliver to our valued clients.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="value-card text-center">
                        <div class="value-icon">
                            <i class="fas fa-medal"></i>
                        </div>
                        <h5>Quality Excellence</h5>
                        <p>We never compromise on quality. Every project meets the highest industry standards with proper testing and certification.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="value-card text-center">
                        <div class="value-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h5>Timely Delivery</h5>
                        <p>We understand the importance of deadlines. Our efficient project management ensures on-time completion.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="value-card text-center">
                        <div class="value-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h5>Client Satisfaction</h5>
                        <p>Our success is measured by client satisfaction. We build long-term relationships through exceptional service.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="value-card text-center">
                        <div class="value-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h5>Innovation</h5>
                        <p>We stay ahead with latest technologies and innovative solutions to meet evolving business needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS SECTION -->
    <section class="section bg-white">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge">Client Testimonials</span>
                <h2 class="section-title">What Our Clients Say</h2>
                <p class="section-description">
                    Don't just take our word for it. Here's what our valued clients have to say about our services and commitment to excellence.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">
                            "RD Electronics delivered exceptional IT networking solutions for our IIM campus. Their technical expertise and professional approach made the entire project seamless. Highly recommended for educational institutions."
                        </p>
                        <div class="testimonial-author">
                            <div class="author-info">
                                <h6>Dr. Vinay Kumar</h6>
                                <small>IT Head, IIM Bodhgaya</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">
                            "Outstanding electrical work for our construction project. RD Electronics team is highly skilled, punctual, and maintains excellent safety standards. Their three-phase installations are top-notch."
                        </p>
                        <div class="testimonial-author">
                            <div class="author-info">
                                <h6>Rajesh Sharma</h6>
                                <small>Project Manager, L&T Construction</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">
                            "Excellent CCTV and security system installation. The team provided comprehensive solutions with 24/7 support. Their fiber splicing work is precise and professional. Great value for money."
                        </p>
                        <div class="testimonial-author">
                            <div class="author-info">
                                <h6>Priya Singh</h6>
                                <small>Facility Manager, TATA Group</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">
                            "RD Electronics provided skilled technical manpower for our industrial project. Their team is well-trained, certified, and follows all safety protocols. Timely completion with quality work."
                        </p>
                        <div class="testimonial-author">
                            <div class="author-info">
                                <h6>Amit Gupta</h6>
                                <small>Operations Head, Amber Enterprises</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">
                            "Professional audio-video solutions for our conference rooms. The installation was clean, efficient, and the ongoing support is excellent. RD Electronics understands business requirements perfectly."
                        </p>
                        <div class="testimonial-author">
                            <div class="author-info">
                                <h6>Neha Verma</h6>
                                <small>Admin Manager, Labotek Solutions</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">
                            "Reliable UPS and inverter solutions for our data center. RD Electronics provided comprehensive power backup systems with excellent maintenance support. Highly professional service."
                        </p>
                        <div class="testimonial-author">
                            <div class="author-info">
                                <h6>Suresh Kumar</h6>
                                <small>Technical Director, Shapoorji Pallonji</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section class="section section-alt">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge">Frequently Asked Questions</span>
                <h2 class="section-title">Got Questions? We Have Answers</h2>
                <p class="section-description">
                    Find answers to commonly asked questions about our IT networking and electrical services.
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="accordion" id="faqAccordion">
                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    <i class="fas fa-network-wired me-3"></i>
                                    What IT networking services do you provide?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We provide comprehensive IT networking services including data cabling (Cat 6 & Cat 6A), fiber optic installation, CCTV security systems, OTDR testing, audio-video solutions, and fire alarm systems. Our team handles everything from planning to installation and ongoing maintenance.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    <i class="fas fa-bolt me-3"></i>
                                    Do you handle both single-phase and three-phase electrical work?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we handle both single-phase and three-phase electrical installations. Our services include complete electrical wiring, panel/DB installation, UPS & inverter solutions, electrical testing, and power distribution systems for residential, commercial, and industrial projects.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    <i class="fas fa-certificate me-3"></i>
                                    Are you certified and licensed for electrical work?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Absolutely! We are GST registered, UDYAM certified, and have TATA certification. Our team consists of licensed electricians and certified technicians who follow all safety standards and industry best practices. We ensure compliance with local electrical codes and regulations.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    <i class="fas fa-clock me-3"></i>
                                    What is your typical project timeline?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Project timelines vary based on scope and complexity. Small installations typically take 1-3 days, medium projects 1-2 weeks, and large commercial/industrial projects 1-6 months. We provide detailed project schedules during planning and maintain 98% on-time completion rate.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    <i class="fas fa-map-marker-alt me-3"></i>
                                    Which areas do you serve?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="faq5" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We serve clients across 22+ cities in India, with our primary base in Bihar. Our service areas include Patna, Gaya, Muzaffarpur, Bhagalpur, Samastipur, and many other cities. We also undertake projects in other states for large-scale commercial and government projects.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 6 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    <i class="fas fa-headset me-3"></i>
                                    Do you provide maintenance and support services?
                                </button>
                            </h2>
                            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="faq6" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we provide comprehensive 24/7 maintenance and support services. This includes regular system checkups, troubleshooting, emergency repairs, and preventive maintenance. We offer annual maintenance contracts (AMC) for ongoing support and priority service.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 7 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    <i class="fas fa-users me-3"></i>
                                    Do you provide technical manpower for projects?
                                </button>
                            </h2>
                            <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="faq7" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we provide skilled and certified technical manpower for electrical and IT projects. Our team includes electricians, network technicians, fiber splicing specialists, and project supervisors. All our technicians are trained, certified, and follow strict safety protocols.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 8 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                    <i class="fas fa-rupee-sign me-3"></i>
                                    How do you determine project pricing?
                                </button>
                            </h2>
                            <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="faq8" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our pricing is based on project scope, materials required, labor hours, and complexity. We provide detailed quotations with transparent pricing - no hidden costs. We offer competitive rates while maintaining high quality standards. Contact us for a free consultation and quote.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHATSAPP CONTACT FORM SECTION -->
    <section class="section bg-white">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge">Get In Touch</span>
                <h2 class="section-title">Ready to Start Your Project?</h2>
                <p class="section-description">
                    Fill out the form below and we'll get back to you within 24 hours with a detailed consultation and quote.
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form-container">
                        <form id="whatsappContactForm" class="contact-form">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fullName" class="form-label">
                                            <i class="fas fa-user me-2"></i>Full Name *
                                        </label>
                                        <input type="text" class="form-control" placeholder="Enter Your Name" id="fullName" name="fullName" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" class="form-label">
                                            <i class="fas fa-phone me-2"></i>Phone Number *
                                        </label>
                                        <input type="tel" class="form-control" placeholder="Enter Your Number" id="phone" name="phone" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">
                                            <i class="fas fa-envelope me-2"></i>Email Address
                                        </label>
                                        <input type="email" class="form-control" placeholder="Enter Your Email Address" id="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city" class="form-label">
                                            <i class="fas fa-map-marker-alt me-2"></i>City *
                                        </label>
                                        <input type="text" class="form-control" placeholder="Enter Your City" id="city" name="city" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="serviceType" class="form-label">
                                            <i class="fas fa-cogs me-2"></i>Service Required *
                                        </label>
                                        <select class="form-control" id="serviceType" name="serviceType" required>
                                            <option value="">Select Service Type</option>
                                            <optgroup label="IT Networking Services">
                                                <option value="Data Cabling Work">Data Cabling Work</option>
                                                <option value="CCTV Security & Surveillance">CCTV Security & Surveillance</option>
                                                <option value="Fibre Cable Splicing">Fibre Cable Splicing</option>
                                                <option value="OTDR Testing Services">OTDR Testing Services</option>
                                                <option value="Audio & Video Solutions">Audio & Video Solutions</option>
                                                <option value="Fire Alarm Systems">Fire Alarm Systems</option>
                                            </optgroup>
                                            <optgroup label="Electrical Services">
                                                <option value="Electrical Wiring">Electrical Wiring (Single & Three Phase)</option>
                                                <option value="Panel / DB Installation">Panel / DB Installation</option>
                                                <option value="UPS & Inverter Solutions">UPS & Inverter Solutions</option>
                                                <option value="Electrical Testing">Electrical Testing</option>
                                            </optgroup>
                                            <optgroup label="Manpower Services">
                                                <option value="Technical Manpower Supply">Technical Manpower Supply</option>
                                            </optgroup>
                                            <option value="Multiple Services">Multiple Services</option>
                                            <option value="Other">Other (Please specify in message)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="projectDetails" class="form-label">
                                            <i class="fas fa-comment-alt me-2"></i>Project Details / Message *
                                        </label>
                                        <textarea class="form-control" id="projectDetails" name="projectDetails" rows="4" placeholder="Please describe your project requirements, timeline, and any specific needs..." required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="budget" class="form-label">
                                            <i class="fas fa-rupee-sign me-2"></i>Estimated Budget (Optional)
                                        </label>
                                        <select class="form-control" id="budget" name="budget">
                                            <option value="">Select Budget Range</option>
                                            <option value="Under ₹50,000">Under ₹50,000</option>
                                            <option value="₹50,000 - ₹1,00,000">₹50,000 - ₹1,00,000</option>
                                            <option value="₹1,00,000 - ₹5,00,000">₹1,00,000 - ₹5,00,000</option>
                                            <option value="₹5,00,000 - ₹10,00,000">₹5,00,000 - ₹10,00,000</option>
                                            <option value="Above ₹10,00,000">Above ₹10,00,000</option>
                                            <option value="Discuss Later">Discuss Later</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="fab fa-whatsapp me-2"></i>Send via WhatsApp
                                    </button>
                                    <p class="form-note mt-3">
                                        <i class="fas fa-shield-alt me-1"></i>
                                        Your information is secure and will only be used to contact you about your project.
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'common/footer.php'; ?>

    <script>
        document.getElementById('whatsappContactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form data
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);

            // Validate required fields
            if (!data.fullName || !data.phone || !data.city || !data.serviceType || !data.projectDetails) {
                alert('Please fill in all required fields.');
                return;
            }

            // Create WhatsApp message
            let message = `*New Project Inquiry - RD Electronics*\n\n`;
            message += `*Name:* ${data.fullName}\n`;
            message += `*Phone:* ${data.phone}\n`;
            if (data.email) message += `*Email:* ${data.email}\n`;
            message += `*City:* ${data.city}\n`;
            message += `*Service Required:* ${data.serviceType}\n`;
            if (data.budget) message += `*Budget:* ${data.budget}\n`;
            message += `*Project Details:*\n${data.projectDetails}\n\n`;
            message += `*Sent from:* RD Electronics Website`;

            // Encode message for URL
            const encodedMessage = encodeURIComponent(message);

            // WhatsApp number (replace with your actual WhatsApp number)
            const whatsappNumber = '918744940446';

            // Create WhatsApp URL
            const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;

            // Open WhatsApp
            window.open(whatsappURL, '_blank');

            // Show success message
            alert('Redirecting to WhatsApp... Please send the message to complete your inquiry.');

            // Reset form
            this.reset();
        });
    </script>
</body>

</html>