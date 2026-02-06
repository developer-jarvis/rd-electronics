<!DOCTYPE html>
<html lang="en">
<?php include_once '../common/head.php'; ?>

<body>
    <?php include_once '../common/header.php'; ?>
    <!-- ======================================================= -->
    <section class="breadcrumb-section fiber-splicing-breadcrumb">
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
                            <li class="breadcrumb-item">
                                <a href="<?php echo $base_url; ?>index.php#services">
                                    <i class="fas fa-cogs"></i>
                                    <span>Services</span>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Fiber Optic Splicing</li>
                        </ol>
                    </nav>
                    <h1 class="page-title">Fiber Optic Splicing</h1>
                    <p class="page-subtitle">Professional fiber optic splicing and fusion services for high-speed
                        connectivity across India</p>
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
                        <span class="section-badge">Fiber Optic Excellence</span>
                        <h2 class="section-title">Professional Fiber Optic Splicing Services</h2>
                        <p class="section-description">
                            RD Electronics provides expert fiber optic splicing and fusion services using advanced
                            equipment
                            and certified techniques. Our skilled technicians ensure minimal signal loss, maximum
                            reliability,
                            and optimal performance for your high-speed fiber optic networks.
                        </p>

                        <div class="service-highlights">
                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-microscope"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>Precision Splicing</h5>
                                    <p>Advanced fusion splicing with minimal signal loss</p>
                                </div>
                            </div>

                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-tachometer-alt"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>High-Speed Performance</h5>
                                    <p>Optimized for maximum data transmission speeds</p>
                                </div>
                            </div>

                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-tools"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>Professional Equipment</h5>
                                    <p>State-of-the-art fusion splicers and testing tools</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-image-container">
                        <div class="service-main-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/fibre-splicing.jpg" alt="Professional Fiber Optic Splicing"
                                class="img-fluid">
                            <div class="image-overlay">
                                <div class="overlay-content">
                                    <h4>200+</h4>
                                    <p>Fiber Projects</p>
                                </div>
                            </div>
                        </div>

                        <div class="floating-stats">
                            <div class="stat-card">
                                <h3>0.02dB</h3>
                                <p>Splice Loss</p>
                            </div>
                            <div class="stat-card">
                                <h3>100%</h3>
                                <p>Quality</p>
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
                <span class="section-badge">Our Fiber Services</span>
                <h2 class="section-title">Comprehensive Fiber Optic Splicing Solutions</h2>
                <p class="section-description">
                    From single-mode to multi-mode fiber splicing, we provide complete fiber optic services
                    with precision, reliability, and industry-leading quality standards.
                </p>
            </div>

            <div class="row g-4">
                <!-- Fusion Splicing -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/fusion-splicing.jpg" alt="Fusion Splicing" class="img-fluid">
                        </div>
                        <h4>Fusion Splicing</h4>
                        <p>Advanced fusion splicing technology for permanent, low-loss connections with superior
                            reliability and performance.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Ultra-low splice loss (0.02dB)</li>
                            <li><i class="fas fa-check"></i> Permanent connection</li>
                            <li><i class="fas fa-check"></i> Weather-resistant splices</li>
                            <li><i class="fas fa-check"></i> Single & multi-mode fibers</li>
                        </ul>
                    </div>
                </div>

                <!-- Mechanical Splicing -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/mechanical-splicing.jpg" alt="Fusion Splicing"
                                class="img-fluid">
                        </div>
                        <h4>Mechanical Splicing</h4>
                        <p>Quick and reliable mechanical splicing solutions for temporary connections and field repairs.
                        </p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Quick installation</li>
                            <li><i class="fas fa-check"></i> Reusable connections</li>
                            <li><i class="fas fa-check"></i> Field-friendly solution</li>
                            <li><i class="fas fa-check"></i> Cost-effective option</li>
                        </ul>
                    </div>
                </div>

                <!-- Fiber Testing & Certification -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/fibre-testing.jpg" alt="Fiber Testing" class="img-fluid">
                        </div>
                        <h4>Fiber Testing & Certification</h4>
                        <p>Comprehensive fiber testing using OTDR and power meters to ensure optimal performance and
                            compliance.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> OTDR testing</li>
                            <li><i class="fas fa-check"></i> Power loss measurement</li>
                            <li><i class="fas fa-check"></i> Certification reports</li>
                            <li><i class="fas fa-check"></i> Performance verification</li>
                        </ul>
                    </div>
                </div>

                <!-- Fiber Repair & Restoration -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/fibre-repair.jpeg" alt="Fiber Testing" class="img-fluid">
                        </div>
                        <h4>Fiber Repair & Restoration</h4>
                        <p>Emergency fiber repair services and restoration of damaged fiber optic cables with minimal
                            downtime.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> 24/7 emergency service</li>
                            <li><i class="fas fa-check"></i> Rapid response time</li>
                            <li><i class="fas fa-check"></i> Damage assessment</li>
                            <li><i class="fas fa-check"></i> Complete restoration</li>
                        </ul>
                    </div>
                </div>

                <!-- Fiber Termination -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/fibre-termination.jpg" alt="Fiber Testing" class="img-fluid">
                        </div>
                        <h4>Fiber Termination</h4>
                        <p>Professional fiber termination services with various connector types for optimal connectivity
                            solutions.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> LC, SC, ST connectors</li>
                            <li><i class="fas fa-check"></i> MTP/MPO termination</li>
                            <li><i class="fas fa-check"></i> Field termination</li>
                            <li><i class="fas fa-check"></i> Factory-grade quality</li>
                        </ul>
                    </div>
                </div>

                <!-- Training & Consultation -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/technical-consultant.jpg" alt="Fiber Testing" class="img-fluid">
                        </div>
                        <h4>Training & Consultation</h4>
                        <p>Professional training programs and consultation services for fiber optic installation and
                            maintenance.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Hands-on training</li>
                            <li><i class="fas fa-check"></i> Technical consultation</li>
                            <li><i class="fas fa-check"></i> Best practices guidance</li>
                            <li><i class="fas fa-check"></i> Certification programs</li>
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
                <h2 class="section-title">Advanced Fiber Splicing Technology</h2>
                <p class="section-description">
                    Our fiber splicing services utilize cutting-edge technology and meet international standards for
                    optimal performance.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="tech-specs-card">
                        <h4><i class="fas fa-microscope me-2"></i>Fusion Splicing Specifications</h4>
                        <div class="specs-table">
                            <div class="spec-row">
                                <span class="spec-label">Splice Loss</span>
                                <span class="spec-value">≤ 0.02dB (SM), ≤ 0.01dB (MM)</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Splice Time</span>
                                <span class="spec-value">7-15 seconds</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Fiber Types</span>
                                <span class="spec-value">SM, MM, DSF, NZDSF</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Operating Temperature</span>
                                <span class="spec-value">-10°C to +50°C</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tech-specs-card">
                        <h4><i class="fas fa-chart-line me-2"></i>Testing & Measurement</h4>
                        <div class="specs-table">
                            <div class="spec-row">
                                <span class="spec-label">OTDR Range</span>
                                <span class="spec-value">Up to 200km</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Wavelengths</span>
                                <span class="spec-value">850, 1300, 1310, 1550nm</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Power Meter Range</span>
                                <span class="spec-value">-70 to +10dBm</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Accuracy</span>
                                <span class="spec-value">±0.02dB</span>
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
                <h2 class="section-title">Professional Fiber Splicing Workflow</h2>
                <p class="section-description">
                    Our systematic approach ensures precision, quality, and reliability in every fiber splicing project.
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
                            <h5>Fiber Assessment</h5>
                            <p>Comprehensive evaluation of fiber condition, type, and splicing requirements for optimal
                                results.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="process-step">
                            <div class="step-number">02</div>
                            <div class="step-icon">
                                <i class="fas fa-cut"></i>
                            </div>
                            <h5>Fiber Preparation</h5>
                            <p>Precise fiber cleaving and preparation using professional tools for perfect splice
                                alignment.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="process-step">
                            <div class="step-number">03</div>
                            <div class="step-icon">
                                <i class="fas fa-fire"></i>
                            </div>
                            <h5>Fusion Splicing</h5>
                            <p>Advanced fusion splicing with real-time monitoring and automatic optimization for minimal
                                loss.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="process-step">
                            <div class="step-number">04</div>
                            <div class="step-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <h5>Testing & Protection</h5>
                            <p>Comprehensive testing, splice protection, and documentation with performance
                                certification.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FIBER TYPES SECTION -->
    <section class="section bg-white">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge">Fiber Expertise</span>
                <h2 class="section-title">Supported Fiber Types & Applications</h2>
                <p class="section-description">
                    We work with all major fiber types and applications, ensuring optimal splicing solutions for every
                    requirement.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-dot-circle"></i>
                        </div>
                        <h5>Single-Mode Fiber</h5>
                        <p>Long-distance, high-bandwidth applications with minimal signal loss and maximum performance.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-circle"></i>
                        </div>
                        <h5>Multi-Mode Fiber</h5>
                        <p>Short to medium distance applications with cost-effective solutions for LAN environments.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-wave-square"></i>
                        </div>
                        <h5>Dispersion Shifted</h5>
                        <p>Specialized fibers optimized for specific wavelengths and advanced optical systems.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <h5>Ribbon Fiber</h5>
                        <p>High-density fiber arrays for mass splicing applications and data center environments.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h5>Armored Fiber</h5>
                        <p>Protected fiber cables for harsh environments and outdoor installations.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-water"></i>
                        </div>
                        <h5>Underwater Fiber</h5>
                        <p>Specialized splicing for submarine and underwater fiber optic applications.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h5>Bend-Insensitive</h5>
                        <p>Advanced fibers designed for tight bend radius applications and space-constrained
                            installations.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-thermometer-half"></i>
                        </div>
                        <h5>Specialty Fibers</h5>
                        <p>Custom solutions for unique applications including sensing, medical, and industrial uses.</p>
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
                <h2 class="section-title">Fiber Splicing Across Multiple Sectors</h2>
                <p class="section-description">
                    Our fiber splicing expertise serves diverse industries with specialized solutions for each sector's
                    unique requirements.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/offices.avif" alt="Telecommunications" class="img-fluid">
                        </div>
                        <h5>Telecommunications</h5>
                        <p>Backbone networks, long-haul connections, and carrier-grade fiber infrastructure.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/data-cabling.jpg" alt="Data Centers" class="img-fluid">
                        </div>
                        <h5>Data Centers</h5>
                        <p>High-density fiber connections for cloud computing and enterprise data storage.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/healthcare.webp" alt="Healthcare" class="img-fluid">
                        </div>
                        <h5>Healthcare</h5>
                        <p>Medical imaging networks, telemedicine, and critical healthcare communications.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/educational-instituions.jpg" alt="Education" class="img-fluid">
                        </div>
                        <h5>Education</h5>
                        <p>Campus networks, distance learning, and high-speed internet for educational institutions.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/government.jpg" alt="Government" class="img-fluid">
                        </div>
                        <h5>Government</h5>
                        <p>Secure communications, smart city infrastructure, and public safety networks.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/manufacturing.jpg" alt="Manufacturing" class="img-fluid">
                        </div>
                        <h5>Manufacturing</h5>
                        <p>Industrial automation, process control, and high-speed manufacturing networks.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/commercial-building.webp" alt="Commercial" class="img-fluid">
                        </div>
                        <h5>Commercial Buildings</h5>
                        <p>Office buildings, shopping centers, and business complex fiber infrastructure.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/warehouse.jpg" alt="Utilities" class="img-fluid">
                        </div>
                        <h5>Utilities & Energy</h5>
                        <p>Power grid monitoring, smart grid communications, and utility network infrastructure.</p>
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
                <h2 class="section-title">Your Trusted Fiber Splicing Partner</h2>
                <p class="section-description">
                    With 200+ fiber projects completed and cutting-edge splicing technology, we deliver exceptional quality and reliability.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h5>Certified Technicians</h5>
                        <p>Our fiber optic specialists are certified and trained in the latest splicing technologies and techniques.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h5>Advanced Equipment</h5>
                        <p>We use state-of-the-art fusion splicers and testing equipment for superior splice quality.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h5>Quick Turnaround</h5>
                        <p>Fast and efficient splicing services with minimal downtime for your network operations.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h5>Quality Guarantee</h5>
                        <p>Every splice is tested and certified with comprehensive warranty coverage.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h5>24/7 Emergency Service</h5>
                        <p>Round-the-clock emergency fiber repair and splicing services for critical situations.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-rupee-sign"></i>
                        </div>
                        <h5>Competitive Pricing</h5>
                        <p>Professional fiber splicing services at competitive rates with transparent pricing.</p>
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
                            <h2>Need Professional Fiber Splicing Services?</h2>
                            <p>Contact RD Electronics today for expert fiber optic splicing and fusion services. Get a free consultation and detailed quote for your project.</p>
                            <div class="cta-features">
                                <div class="cta-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Free Consultation & Assessment</span>
                                </div>
                                <div class="cta-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Certified Splicing Services</span>
                                </div>
                                <div class="cta-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>24/7 Emergency Support</span>
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

    <?php include_once '../common/footer.php'; ?>
</body>

</html>
