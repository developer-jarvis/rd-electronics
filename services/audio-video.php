<!DOCTYPE html>
<html lang="en">
<?php include_once '../common/head.php'; ?>

<body>
   <?php include_once '../common/header.php'; ?>

    <!-- BREADCRUMB SECTION -->
    <section class="breadcrumb-section audio-video-breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?= $Base_Url ?>">
                                    <i class="fas fa-home"></i>
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="<?php echo $base_url; ?>index.php#services">
                                    <i class="fas fa-cogs"></i>
                                    <span>Services</span>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Audio & Video Solutions</li>
                        </ol>
                    </nav>
                    <h1 class="page-title">Audio & Video Solutions</h1>
                    <p class="page-subtitle">Professional audio-visual systems and multimedia solutions for modern businesses across India</p>
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

    <!-- SERVICE OVERVIEW SECTION -->
    <section class="section bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="service-content">
                        <span class="section-badge">AV Excellence</span>
                        <h2 class="section-title">Professional Audio & Video Solutions</h2>
                        <p class="section-description">
                            RD Electronics delivers cutting-edge audio-visual solutions for corporate, educational, and
                            entertainment environments. Our expert team designs and installs comprehensive AV systems
                            that enhance communication, collaboration, and multimedia experiences.
                        </p>

                        <div class="service-highlights">
                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-video"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>4K Ultra HD</h5>
                                    <p>Crystal clear video quality and display solutions</p>
                                </div>
                            </div>

                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-volume-up"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>Premium Audio</h5>
                                    <p>High-fidelity sound systems and acoustics</p>
                                </div>
                            </div>

                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>Smart Integration</h5>
                                    <p>Seamless system integration and automation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-image-container">
                        <div class="service-main-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/audio-video.jpg" alt="Professional Audio Video Systems" class="img-fluid">
                            <div class="image-overlay">
                                <div class="overlay-content">
                                    <h4>100+</h4>
                                    <p>AV Projects</p>
                                </div>
                            </div>
                        </div>

                        <div class="floating-stats">
                            <div class="stat-card">
                                <h3>4K</h3>
                                <p>Ultra HD</p>
                            </div>
                            <div class="stat-card">
                                <h3>7.1</h3>
                                <p>Surround</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES OFFERED SECTION -->
    <section class="section section-alt">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge">Our AV Services</span>
                <h2 class="section-title">Comprehensive Audio Visual Solutions</h2>
                <p class="section-description">
                    From conference rooms to auditoriums, we provide complete audio-visual solutions
                    tailored to your specific requirements and environment.
                </p>
            </div>

            <div class="row g-4">
                <!-- Conference Room AV -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/offices.avif" alt="Conference Room AV" class="img-fluid">
                        </div>
                        <h4>Conference Room Systems</h4>
                        <p>Complete conference room AV solutions with video conferencing, presentation systems, and collaboration tools.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Video conferencing systems</li>
                            <li><i class="fas fa-check"></i> Interactive displays</li>
                            <li><i class="fas fa-check"></i> Wireless presentation</li>
                            <li><i class="fas fa-check"></i> Audio conferencing</li>
                        </ul>
                    </div>
                </div>

                <!-- Digital Signage -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/digital-signage.jpg" alt="Conference Room AV" class="img-fluid">
                        </div>
                        <h4>Digital Signage Solutions</h4>
                        <p>Dynamic digital signage systems for advertising, information display, and brand communication.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> LED video walls</li>
                            <li><i class="fas fa-check"></i> Interactive kiosks</li>
                            <li><i class="fas fa-check"></i> Content management</li>
                            <li><i class="fas fa-check"></i> Remote monitoring</li>
                        </ul>
                    </div>
                </div>

                <!-- Sound Systems -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/professional-sound.jpg" alt="Conference Room AV" class="img-fluid">
                        </div>
                        <h4>Professional Sound Systems</h4>
                        <p>High-quality audio systems for venues, events, and installations with superior sound clarity.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> PA systems</li>
                            <li><i class="fas fa-check"></i> Background music</li>
                            <li><i class="fas fa-check"></i> Wireless microphones</li>
                            <li><i class="fas fa-check"></i> Audio mixing consoles</li>
                        </ul>
                    </div>
                </div>

                <!-- Home Theater -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/home-theatre.jpg" alt="Conference Room AV" class="img-fluid">
                        </div>
                        <h4>Home Theater Systems</h4>
                        <p>Premium home entertainment systems with immersive audio-visual experiences for residential clients.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> 4K projectors</li>
                            <li><i class="fas fa-check"></i> Surround sound</li>
                            <li><i class="fas fa-check"></i> Smart home integration</li>
                            <li><i class="fas fa-check"></i> Acoustic treatment</li>
                        </ul>
                    </div>
                </div>

                <!-- Live Event AV -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/live-event.jpg" alt="Conference Room AV" class="img-fluid">
                        </div>
                        <h4>Live Event Production</h4>
                        <p>Professional AV production services for events, conferences, and live performances with expert support.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Stage lighting</li>
                            <li><i class="fas fa-check"></i> Live streaming</li>
                            <li><i class="fas fa-check"></i> Event recording</li>
                            <li><i class="fas fa-check"></i> Technical support</li>
                        </ul>
                    </div>
                </div>

                <!-- AV Integration -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/system-integeration.jpg" alt="Conference Room AV" class="img-fluid">
                        </div>
                        <h4>System Integration</h4>
                        <p>Seamless integration of audio, video, and control systems for unified operation and management.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Control system programming</li>
                            <li><i class="fas fa-check"></i> Equipment integration</li>
                            <li><i class="fas fa-check"></i> User interface design</li>
                            <li><i class="fas fa-check"></i> System commissioning</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TECHNICAL SPECIFICATIONS SECTION -->
    <section class="section bg-white">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge">Technical Excellence</span>
                <h2 class="section-title">Advanced AV Technology Standards</h2>
                <p class="section-description">
                    Our audio-visual solutions utilize cutting-edge technology and meet international standards for optimal performance.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="tech-specs-card">
                        <h4><i class="fas fa-video me-2"></i>Video Specifications</h4>
                        <div class="specs-table">
                            <div class="spec-row">
                                <span class="spec-label">Resolution</span>
                                <span class="spec-value">4K Ultra HD (3840x2160)</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Frame Rate</span>
                                <span class="spec-value">60fps, 120fps</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Color Depth</span>
                                <span class="spec-value">10-bit, HDR support</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Connectivity</span>
                                <span class="spec-value">HDMI 2.1, DisplayPort, USB-C</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tech-specs-card">
                        <h4><i class="fas fa-volume-up me-2"></i>Audio Specifications</h4>
                        <div class="specs-table">
                            <div class="spec-row">
                                <span class="spec-label">Frequency Response</span>
                                <span class="spec-value">20Hz - 20kHz</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Dynamic Range</span>
                                <span class="spec-value">120dB+</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Channels</span>
                                <span class="spec-value">Up to 7.1 Surround</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Audio Formats</span>
                                <span class="spec-value">Dolby Atmos, DTS:X</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PROCESS WORKFLOW SECTION -->
    <section class="section section-alt">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge">Our Process</span>
                <h2 class="section-title">Professional AV Installation Workflow</h2>
                <p class="section-description">
                    Our systematic approach ensures optimal system design, professional installation, and seamless integration.
                </p>
            </div>

            <div class="process-timeline">
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="process-step">
                            <div class="step-number">01</div>
                            <div class="step-icon">
                                <i class="fas fa-search"></i>
                            </div>
                            <h5>Site Assessment</h5>
                            <p>Comprehensive evaluation of space, acoustics, lighting, and technical requirements.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="process-step">
                            <div class="step-number">02</div>
                            <div class="step-icon">
                                <i class="fas fa-drafting-compass"></i>
                            </div>
                            <h5>System Design</h5>
                            <p>Custom AV system design with equipment selection and integration planning.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="process-step">
                            <div class="step-number">03</div>
                            <div class="step-icon">
                                <i class="fas fa-hard-hat"></i>
                            </div>
                            <h5>Professional Installation</h5>
                            <p>Expert installation with proper cable management, mounting, and system configuration.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="process-step">
                            <div class="step-number">04</div>
                            <div class="step-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <h5>Testing & Training</h5>
                            <p>Complete system testing, calibration, user training, and documentation handover.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AV TECHNOLOGIES SECTION -->
    <section class="section bg-white">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge">AV Technologies</span>
                <h2 class="section-title">Cutting-Edge Audio Visual Technologies</h2>
                <p class="section-description">
                    We utilize the latest AV technologies and equipment from leading manufacturers for superior performance.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-desktop"></i>
                        </div>
                        <h5>4K Displays</h5>
                        <p>Ultra-high-definition displays with HDR support for crystal-clear visual experiences.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-video"></i>
                        </div>
                        <h5>Video Conferencing</h5>
                        <p>Advanced video conferencing solutions with AI-powered features and collaboration tools.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-wifi"></i>
                        </div>
                        <h5>Wireless Presentation</h5>
                        <p>Cable-free presentation systems with multi-device support and screen sharing capabilities.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h5>Smart Automation</h5>
                        <p>Intelligent control systems with voice activation and automated scene management.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-cloud"></i>
                        </div>
                        <h5>Cloud Integration</h5>
                        <p>Cloud-based content management and remote system monitoring capabilities.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h5>Mobile Control</h5>
                        <p>Smartphone and tablet control apps for easy system operation and management.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h5>Security Features</h5>
                        <p>Advanced security protocols and encryption for secure content delivery and system access.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h5>Analytics & Reporting</h5>
                        <p>Usage analytics and performance reporting for system optimization and maintenance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INDUSTRIES SERVED SECTION -->
    <section class="section section-alt">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge">Industries We Serve</span>
                <h2 class="section-title">Audio Visual Solutions Across Sectors</h2>
                <p class="section-description">
                    Our AV solutions enhance communication and collaboration across diverse industries with customized approaches.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/commercial-building.webp" alt="Corporate" class="img-fluid">
                        </div>
                        <h5>Corporate</h5>
                        <p>Conference rooms, boardrooms, and collaboration spaces for modern business environments.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/educational-instituions.jpg" alt="Education" class="img-fluid">
                        </div>
                        <h5>Education</h5>
                        <p>Classrooms, auditoriums, and distance learning solutions for educational institutions.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/healthcare.webp" alt="Healthcare" class="img-fluid">
                        </div>
                        <h5>Healthcare</h5>
                        <p>Medical imaging displays, telemedicine systems, and patient communication solutions.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/hospitality.jpg" alt="Hospitality" class="img-fluid">
                        </div>
                        <h5>Hospitality</h5>
                        <p>Hotel entertainment systems, conference facilities, and guest experience solutions.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/retail.jpg" alt="Retail" class="img-fluid">
                        </div>
                        <h5>Retail</h5>
                        <p>Digital signage, interactive displays, and customer engagement solutions.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/government.jpg" alt="Government" class="img-fluid">
                        </div>
                        <h5>Government</h5>
                        <p>Public address systems, emergency communications, and civic engagement solutions.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-icon">
                            <i class="fas fa-church"></i>
                        </div>
                        <h5>Houses of Worship</h5>
                        <p>Sound reinforcement, video production, and live streaming solutions for religious venues.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h5>Residential</h5>
                        <p>Home theaters, multi-room audio, and smart home entertainment systems.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US SECTION -->
    <section class="section bg-white">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge">Why Choose RD Electronics</span>
                <h2 class="section-title">Your Trusted AV Solutions Partner</h2>
                <p class="section-description">
                    With 100+ AV projects completed and cutting-edge technology expertise, we deliver exceptional audio-visual experiences.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h5>Certified Professionals</h5>
                        <p>Our AV technicians are certified and trained in the latest audio-visual technologies and installation practices.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h5>Premium Equipment</h5>
                        <p>We use only top-tier AV equipment from leading manufacturers for superior performance and reliability.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h5>Custom Design</h5>
                        <p>Tailored AV solutions designed specifically for your space, requirements, and budget.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h5>3-Year Warranty</h5>
                        <p>Comprehensive warranty coverage on all AV equipment and installation work with ongoing support.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h5>24/7 Support</h5>
                        <p>Round-the-clock technical support and maintenance services for critical AV systems.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h5>User Training</h5>
                        <p>Comprehensive user training and documentation to ensure optimal system utilization.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT CTA SECTION -->
    <section class="section section-alt">
        <div class="container">
            <div class="cta-container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="cta-content">
                            <h2>Transform Your Space with Professional AV Solutions</h2>
                            <p>Contact RD Electronics today for cutting-edge audio-visual systems that enhance communication, collaboration, and entertainment. Get a free consultation and custom design for your project.</p>
                            <div class="cta-features">
                                <div class="cta-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Free Site Assessment</span>
                                </div>
                                <div class="cta-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Custom System Design</span>
                                </div>
                                <div class="cta-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>3-Year Warranty Included</span>
                                </div>
                            </div>
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

    <!-- ============================================= -->
     <?php include_once '../common/footer.php'; ?>
</body>

</html>
