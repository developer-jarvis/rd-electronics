<!DOCTYPE html>
<html lang="en">
<?php include_once "common/head.php" ?>

<body>
    <?php include_once "common/header.php" ?>
    <!-- ================================================== -->

    <section class="breadcrumb-section projects-breadcrumb">
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
                            <li class="breadcrumb-item active" aria-current="page">Our Projects</li>
                        </ol>
                    </nav>
                    <h1 class="page-title">Our Projects</h1>
                    <p class="page-subtitle">Showcasing our successful electrical and IT infrastructure projects across
                        India with innovative solutions and exceptional quality</p>
                </div>
                <div class="col-md-4 text-end">
                    <div class="breadcrumb-actions">
                        <a href="tel:8744940446" class="btn btn-primary btn-sm me-2">
                            <i class="fas fa-phone"></i>
                            <span>Call Now</span>
                        </a>
                        <a href="<?php echo $base_url; ?>contact.php" class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-envelope text-white"></i>
                            <span class="text-white">Get Quote</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECT OVERVIEW SECTION -->
    <section class="section bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="service-content">
                        <span class="section-badge">Project Excellence</span>
                        <h2 class="section-title">Delivering Innovation Across Industries</h2>
                        <p class="section-description">
                            RD Electronics has successfully completed 500+ projects across various sectors,
                            delivering cutting-edge electrical and IT infrastructure solutions. Our portfolio
                            spans from government institutions to private enterprises, showcasing our expertise
                            and commitment to excellence.
                        </p>

                        <div class="service-highlights">
                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-trophy"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>500+ Projects</h5>
                                    <p>Successfully completed across India</p>
                                </div>
                            </div>

                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>50+ Clients</h5>
                                    <p>Satisfied customers nationwide</p>
                                </div>
                            </div>

                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>22+ Cities</h5>
                                    <p>Pan-India project coverage</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-image-container">
                        <div class="service-main-image">
                            <img src="<?php echo $base_url; ?>assets/images/others/team.jpg" alt="RD Electronics Project Team"
                                class="img-fluid">
                            <div class="image-overlay">
                                <div class="overlay-content">
                                    <h4>99%</h4>
                                    <p>Success Rate</p>
                                </div>
                            </div>
                        </div>

                        <div class="floating-stats">
                            <div class="stat-card">
                                <h3>24/7</h3>
                                <p>Support</p>
                            </div>
                            <div class="stat-card">
                                <h3>ISO</h3>
                                <p>Certified</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURED PROJECTS SECTION -->
    <section class="section section-alt">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge">Featured Projects</span>
                <h2 class="section-title">Our Success Stories</h2>
                <p class="section-description">
                    Explore our portfolio of successful projects that demonstrate our technical expertise and commitment
                    to excellence.
                </p>
            </div>

            <div class="row g-4">
                <!-- Project 1: Eastman -->
                <div class="col-lg-6">
                    <div class="project-card">
                        <div class="project-image">
                            <img src="<?php echo $base_url; ?>assets/images/projects/eastman.jpeg" alt="Eastman Project"
                                class="img-fluid">
                            <div class="project-overlay">
                                <div class="project-category">Electrical Service</div>
                            </div>
                        </div>
                        <div class="project-content">
                            <h4>Eastman</h4>
                            <p class="project-description">
                                TRICOLITE ENERGY Solutions Pvt Ltd
                            </p>
                            <div class="project-details">
                                <div class="detail-item">
                                    <span class="detail-label">Duration:</span>
                                    <span class="detail-value">120 Days</span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Scope:</span>
                                    <span class="detail-value">Complete Campus</span>
                                </div>
                            </div>
                            <div class="project-tags">
                                <span class="tag">Electrical Infrastructure</span>
                                <span class="tag">Data Cabling</span>
                                <span class="tag">Smart Systems</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 2: Executive Enclave -->
                <div class="col-lg-6">
                    <div class="project-card">
                        <div class="project-image">
                            <img src="<?php echo $base_url; ?>assets/images/projects/executive-enclave.jpeg" alt="Executive Enclave Project"
                                class="img-fluid">
                            <div class="project-overlay">
                                <div class="project-category">Executive Enclave (PMO)</div>
                            </div>
                        </div>
                        <div class="project-content">
                            <h4>IT Networking Passive Work</h4>
                            <p class="project-description">
                                Labotek
                            </p>
                            <div class="project-details">
                                <div class="detail-item">
                                    <span class="detail-label">Duration:</span>
                                    <span class="detail-value">180 Days</span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Scope:</span>
                                    <span class="detail-value">Critical Infrastructure</span>
                                </div>
                            </div>
                            <div class="project-tags">
                                <span class="tag">Fiber Optic</span>
                                <span class="tag">Security Systems</span>
                                <span class="tag">Communication</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 3: Guwahati Airport -->
                <div class="col-lg-6">
                    <div class="project-card">
                        <div class="project-image">
                            <img src="<?php echo $base_url; ?>assets/images/projects/guwahati-airport.jpeg" alt="Guwahati Airport Project"
                                class="img-fluid">
                            <div class="project-overlay">
                                <div class="project-category">Guwahati Airport Terminal 2</div>
                            </div>
                        </div>
                        <div class="project-content">
                            <h4>Electrical Service</h4>
                            <p class="project-description">
                                Keme Pvt Ltd
                            </p>
                            <div class="project-details">
                                <div class="detail-item">
                                    <span class="detail-label">Duration:</span>
                                    <span class="detail-value">60 Days</span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Network Points:</span>
                                    <span class="detail-value">300+ Points</span>
                                </div>
                            </div>
                            <div class="project-tags">
                                <span class="tag">Network Infrastructure</span>
                                <span class="tag">WiFi Solutions</span>
                                <span class="tag">AV Systems</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 4: HSBC Bank -->
                <div class="col-lg-6">
                    <div class="project-card">
                        <div class="project-image">
                            <img src="<?php echo $base_url; ?>assets/images/projects/hsbc-bank.jpeg" alt="HSBC Bank Project" class="img-fluid">
                            <div class="project-overlay">
                                <div class="project-category">HSBC Bank</div>
                            </div>
                        </div>
                        <div class="project-content">
                            <h4>Electrical Service</h4>
                            <p class="project-description">
                                Nutech Contracts Pvt Ltd
                            </p>
                            <div class="project-details">
                                <div class="detail-item">
                                    <span class="detail-label">Duration:</span>
                                    <span class="detail-value">90 Days</span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Power Capacity:</span>
                                    <span class="detail-value">2 MVA</span>
                                </div>
                            </div>
                            <div class="project-tags">
                                <span class="tag">Banking Systems</span>
                                <span class="tag">Power Systems</span>
                                <span class="tag">Security</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 5: IIM Bodh Gaya -->
                <div class="col-lg-6">
                    <div class="project-card">
                        <div class="project-image">
                            <img src="<?php echo $base_url; ?>assets/images/projects/iim-bodh-gaya.jpeg" alt="IIM Bodh Gaya Project" class="img-fluid">
                            <div class="project-overlay">
                                <div class="project-category">Indian Institute of Management Bodh Gaya</div>
                            </div>
                        </div>
                        <div class="project-content">
                            <h4>Electrical Services</h4>
                            <p class="project-description">
                                Amber Electrotech Limited
                            </p>
                            <div class="project-details">
                                <div class="detail-item">
                                    <span class="detail-label">Duration:</span>
                                    <span class="detail-value">150 Days</span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Scope:</span>
                                    <span class="detail-value">Complete Campus</span>
                                </div>
                            </div>
                            <div class="project-tags">
                                <span class="tag">Educational Infrastructure</span>
                                <span class="tag">Smart Classrooms</span>
                                <span class="tag">Campus Network</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 6: Indian Oil R&D -->
                <div class="col-lg-6">
                    <div class="project-card">
                        <div class="project-image">
                            <img src="<?php echo $base_url; ?>assets/images/projects/indian-oil-faridabad.jpeg" alt="Indian Oil R&D Project"
                                class="img-fluid">
                            <div class="project-overlay">
                                <div class="project-category">Indian Oil R&D Faridabad</div>
                            </div>
                        </div>
                        <div class="project-content">
                            <h4>Electrical Service</h4>
                            <p class="project-description">
                                Meghna Electric Works
                            </p>
                            <div class="project-details">
                                <div class="detail-item">
                                    <span class="detail-label">Duration:</span>
                                    <span class="detail-value">75 Days</span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Capacity:</span>
                                    <span class="detail-value">5 MVA</span>
                                </div>
                            </div>
                            <div class="project-tags">
                                <span class="tag">Industrial Systems</span>
                                <span class="tag">R&D Infrastructure</span>
                                <span class="tag">Power Distribution</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Projects -->
                <div class="col-lg-6">
                    <div class="project-card">
                        <div class="project-image">
                            <img src="<?php echo $base_url; ?>assets/images/projects/kartavya-bhawan.jpeg" alt="Kartavya Bhavan Project"
                                class="img-fluid">
                            <div class="project-overlay">
                                <div class="project-category">Kartavya Bhavan (CCS - 1,2 & 3)</div>
                            </div>
                        </div>
                        <div class="project-content">
                            <h4>IT Networking Passive Work</h4>
                            <p class="project-description">Labotek</p>
                            <div class="project-details">
                                <div class="detail-item">
                                    <span class="detail-label">Duration:</span>
                                    <span class="detail-value">75 Days</span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Capacity:</span>
                                    <span class="detail-value">5 MVA</span>
                                </div>
                            </div>
                            <div class="project-tags">
                                <span class="tag">Government Infrastructure</span>
                                <span class="tag">Network Systems</span>
                                <span class="tag">Security</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="project-card">
                        <div class="project-image">
                            <img src="<?php echo $base_url; ?>assets/images/projects/parliament.jpeg" alt="New Parliament Project" class="img-fluid">
                            <div class="project-overlay">
                                <div class="project-category">New Parliament Building</div>
                            </div>
                        </div>
                        <div class="project-content">
                            <h4>IT Networking Passive Work</h4>
                            <p class="project-description">Labotek</p>
                            <div class="project-details">
                                <div class="detail-item">
                                    <span class="detail-label">Duration:</span>
                                    <span class="detail-value">200 Days</span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Scope:</span>
                                    <span class="detail-value">National Infrastructure</span>
                                </div>
                            </div>
                            <div class="project-tags">
                                <span class="tag">Government</span>
                                <span class="tag">Critical Infrastructure</span>
                                <span class="tag">High Security</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECT STATISTICS SECTION -->
    <section class="stats-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Projects Completed</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <span class="stat-number">50+</span>
                        <span class="stat-label">Happy Clients</span>
                     </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <span class="stat-number">22+</span>
                        <span class="stat-label">Cities Covered</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <span class="stat-number">99%</span>
                        <span class="stat-label">Success Rate</span>
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
                            <h2>Ready to Start Your Next Project?</h2>
                            <p>Let's discuss your requirements and create a customized solution for your business. Our
                                expert team is ready to deliver innovative electrical and IT infrastructure solutions
                                tailored to your needs.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <div class="cta-actions">
                            <a href="tel:8744940446" class="btn btn-primary btn-lg">
                                <i class="fas fa-phone"></i>
                                <span>Call Now</span>
                            </a>
                            <a href="https://wa.me/918744940446" target="_blank" class="btn btn-secondary btn-lg">
                                <i class="fab fa-whatsapp"></i>
                                <span>WhatsApp</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- =================================================== -->
    <?php include_once "common/footer.php" ?>

</body>

</html>
