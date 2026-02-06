<!DOCTYPE html>
<html lang="en">
<?php include_once "../common/head.php" ?>

<body>
    <?php include_once "../common/header.php" ?>
    <!-- =============================================== -->
    <section class="breadcrumb-section ups-inverter-breadcrumb">
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
                            <li class="breadcrumb-item active" aria-current="page">UPS & Inverter Solutions</li>
                        </ol>
                    </nav>
                    <h1 class="page-title">UPS & Inverter Solutions</h1>
                    <p class="page-subtitle">Professional UPS and inverter installation services for uninterrupted power
                        supply and reliable backup systems across India</p>
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
                        <span class="section-badge">Power Backup Excellence</span>
                        <h2 class="section-title">Professional UPS & Inverter Solutions</h2>
                        <p class="section-description">
                            RD Electronics provides comprehensive UPS and inverter solutions for homes, offices, and
                            industries.
                            Our expert team ensures reliable power backup systems with proper sizing, installation, and
                            maintenance for uninterrupted power supply during outages.
                        </p>

                        <div class="service-highlights">
                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>Uninterrupted Power</h5>
                                    <p>Seamless power backup during outages</p>
                                </div>
                            </div>

                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-battery-full"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>Long Battery Life</h5>
                                    <p>Extended backup time with quality batteries</p>
                                </div>
                            </div>

                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-tools"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>Expert Installation</h5>
                                    <p>Professional setup and configuration</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-image-container">
                        <div class="service-main-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/ups.jpg" alt="Professional UPS & Inverter Solutions"
                                class="img-fluid">
                            <div class="image-overlay">
                                <div class="overlay-content">
                                    <h4>200+</h4>
                                    <p>UPS Installs</p>
                                </div>
                            </div>
                        </div>

                        <div class="floating-stats">
                            <div class="stat-card">
                                <h3>99.9%</h3>
                                <p>Uptime</p>
                            </div>
                            <div class="stat-card">
                                <h3>3 Year</h3>
                                <p>Warranty</p>
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
                <span class="section-badge">Our UPS & Inverter Services</span>
                <h2 class="section-title">Comprehensive Power Backup Solutions</h2>
                <p class="section-description">
                    From home inverters to industrial UPS systems, we provide complete power backup
                    solutions with professional installation and reliable maintenance services.
                </p>
            </div>

            <div class="row g-4">
                <!-- Online UPS Systems -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/online-ups.webp" alt="Online UPS Systems" class="img-fluid">
                        </div>
                        <h4>Online UPS Systems</h4>
                        <p>High-performance online UPS systems for critical applications requiring zero transfer time
                            and pure sine wave output.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Zero transfer time</li>
                            <li><i class="fas fa-check"></i> Pure sine wave output</li>
                            <li><i class="fas fa-check"></i> Voltage regulation</li>
                            <li><i class="fas fa-check"></i> Battery monitoring</li>
                        </ul>
                    </div>
                </div>

                <!-- Offline UPS Systems -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/offline-ups.webp" alt="Online UPS Systems" class="img-fluid">
                        </div>
                        <h4>Offline UPS Systems</h4>
                        <p>Cost-effective offline UPS solutions for basic power backup needs with automatic switching
                            during power failures.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Automatic switching</li>
                            <li><i class="fas fa-check"></i> Surge protection</li>
                            <li><i class="fas fa-check"></i> LED indicators</li>
                            <li><i class="fas fa-check"></i> Compact design</li>
                        </ul>
                    </div>
                </div>

                <!-- Home Inverters -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/home-inverter.jpg" alt="Online UPS Systems" class="img-fluid">
                        </div>
                        <h4>Home Inverters</h4>
                        <p>Residential inverter systems for homes with proper load calculation and battery backup for
                            essential appliances.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Pure sine wave</li>
                            <li><i class="fas fa-check"></i> Smart charging</li>
                            <li><i class="fas fa-check"></i> Overload protection</li>
                            <li><i class="fas fa-check"></i> LCD display</li>
                        </ul>
                    </div>
                </div>

                <!-- Industrial UPS -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/industrial-ups.jpeg" alt="Online UPS Systems" class="img-fluid">
                        </div>
                        <h4>Industrial UPS</h4>
                        <p>Heavy-duty industrial UPS systems for manufacturing and critical infrastructure with high
                            capacity and reliability.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> High capacity systems</li>
                            <li><i class="fas fa-check"></i> Redundant design</li>
                            <li><i class="fas fa-check"></i> Remote monitoring</li>
                            <li><i class="fas fa-check"></i> Scalable solutions</li>
                        </ul>
                    </div>
                </div>

                <!-- Solar Inverters -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/solar-inverter.png" alt="Online UPS Systems" class="img-fluid">
                        </div>
                        <h4>Solar Inverters</h4>
                        <p>Solar-compatible inverters with MPPT charge controllers for hybrid solar power systems and
                            grid-tie applications.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> MPPT technology</li>
                            <li><i class="fas fa-check"></i> Grid-tie capability</li>
                            <li><i class="fas fa-check"></i> Solar priority mode</li>
                            <li><i class="fas fa-check"></i> Energy monitoring</li>
                        </ul>
                    </div>
                </div>

                <!-- UPS Maintenance -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-icon">
                            <i class="fas fa-wrench"></i>
                        </div>
                        <h4>UPS Maintenance</h4>
                        <p>Comprehensive maintenance services including battery replacement, performance testing, and
                            preventive care.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Battery replacement</li>
                            <li><i class="fas fa-check"></i> Performance testing</li>
                            <li><i class="fas fa-check"></i> Preventive maintenance</li>
                            <li><i class="fas fa-check"></i> Emergency repairs</li>
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
                <h2 class="section-title">UPS & Inverter Technical Specifications</h2>
                <p class="section-description">
                    Our UPS and inverter systems meet international standards with advanced features for reliable power
                    backup.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="tech-specs-card">
                        <h4><i class="fas fa-bolt me-2"></i>Power Specifications</h4>
                        <div class="specs-table">
                            <div class="spec-row">
                                <span class="spec-label">Capacity Range</span>
                                <span class="spec-value">500VA to 500KVA</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Input Voltage</span>
                                <span class="spec-value">160V - 280V AC</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Output Voltage</span>
                                <span class="spec-value">220V ± 5% AC</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Frequency</span>
                                <span class="spec-value">50Hz ± 0.1%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tech-specs-card">
                        <h4><i class="fas fa-shield-alt me-2"></i>Protection Features</h4>
                        <div class="specs-table">
                            <div class="spec-row">
                                <span class="spec-label">Overload Protection</span>
                                <span class="spec-value">110% - 150%</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Short Circuit Protection</span>
                                <span class="spec-value">Automatic shutdown</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Battery Protection</span>
                                <span class="spec-value">Deep discharge protection</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Surge Protection</span>
                                <span class="spec-value">Built-in surge arresters</span>
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
                <h2 class="section-title">Professional UPS & Inverter Installation Process</h2>
                <p class="section-description">
                    Our systematic approach ensures proper UPS and inverter installation with accurate load calculations
                    and optimal battery backup.
                </p>
            </div>

            <div class="process-timeline">
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="process-step">
                            <div class="step-number">01</div>
                            <div class="step-icon">
                                <i class="fas fa-calculator"></i>
                            </div>
                            <h5>Load Assessment</h5>
                            <p>Comprehensive load analysis to determine the right UPS/inverter capacity and battery
                                backup requirements.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="process-step">
                            <div class="step-number">02</div>
                            <div class="step-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <h5>System Design</h5>
                            <p>Custom system design with proper component selection and backup time calculation for your
                                specific needs.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="process-step">
                            <div class="step-number">03</div>
                            <div class="step-icon">
                                <i class="fas fa-tools"></i>
                            </div>
                            <h5>Professional Installation</h5>
                            <p>Expert installation with proper wiring, battery connection, and system configuration for
                                optimal performance.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="process-step">
                            <div class="step-number">04</div>
                            <div class="step-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <h5>Testing & Commissioning</h5>
                            <p>Complete system testing, load verification, and performance validation with user training
                                and documentation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- UPS TYPES SECTION -->
    <section class="section bg-white">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge">UPS & Inverter Types</span>
                <h2 class="section-title">Comprehensive Power Backup Solutions</h2>
                <p class="section-description">
                    We provide all types of UPS and inverter systems for various applications and power requirements.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-desktop"></i>
                        </div>
                        <h5>Desktop UPS</h5>
                        <p>Compact UPS systems for computers, workstations, and small office equipment with basic power
                            backup.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-server"></i>
                        </div>
                        <h5>Rack Mount UPS</h5>
                        <p>Space-efficient rack-mountable UPS systems for server rooms and data centers with high power
                            density.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <h5>Three Phase UPS</h5>
                        <p>Industrial three-phase UPS systems for large facilities and critical infrastructure
                            applications.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-battery-half"></i>
                        </div>
                        <h5>Modular UPS</h5>
                        <p>Scalable modular UPS systems with hot-swappable modules for easy maintenance and expansion.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h5>Residential Inverters</h5>
                        <p>Home inverter systems with pure sine wave output for running all household appliances safely.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-car-battery"></i>
                        </div>
                        <h5>Automotive Inverters</h5>
                        <p>Mobile power inverters for vehicles and mobile applications with 12V/24V DC input options.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-solar-panel"></i>
                        </div>
                        <h5>Hybrid Inverters</h5>
                        <p>Solar hybrid inverters combining grid power, solar energy, and battery backup in one
                            integrated system.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-microchip"></i>
                        </div>
                        <h5>Smart UPS</h5>
                        <p>Intelligent UPS systems with remote monitoring, mobile app control, and advanced power
                            management.</p>
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
                <h2 class="section-title">UPS & Inverter Solutions Across Multiple Sectors</h2>
                <p class="section-description">
                    Our power backup expertise serves diverse industries with customized UPS and inverter solutions for
                    each sector's requirements.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/residential.jfif" alt="Residential" class="img-fluid">
                        </div>
                        <h5>Residential</h5>
                        <p>Home inverter systems for uninterrupted power supply to essential appliances and lighting
                            during outages.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/offices.avif" alt="Offices" class="img-fluid">
                        </div>
                        <h5>Offices</h5>
                        <p>Commercial UPS systems for computers, servers, and office equipment with seamless power
                            backup.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/healthcare.webp" alt="Healthcare" class="img-fluid">
                        </div>
                        <h5>Healthcare</h5>
                        <p>Critical power backup for hospitals and medical facilities with life-support and diagnostic
                            equipment.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/manufacturing.jpg" alt="Manufacturing" class="img-fluid">
                        </div>
                        <h5>Manufacturing</h5>
                        <p>Industrial UPS systems for manufacturing processes and automation equipment requiring
                            continuous power.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/educational-instituions.jpg" alt="Education" class="img-fluid">
                        </div>
                        <h5>Education</h5>
                        <p>Educational institutions with UPS systems for computer labs, libraries, and administrative
                            systems.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/retail.jpg" alt="Retail" class="img-fluid">
                        </div>
                        <h5>Retail</h5>
                        <p>Retail stores and shopping centers with power backup for POS systems, lighting, and security
                            equipment.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/hospitality.jpg" alt="Hospitality" class="img-fluid">
                        </div>
                        <h5>Hospitality</h5>
                        <p>Hotels and restaurants with reliable power backup for guest comfort and operational
                            continuity.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-icon">
                            <i class="fas fa-database"></i>
                        </div>
                        <h5>Data Centers</h5>
                        <p>Mission-critical data centers with redundant UPS systems and extended battery backup for 24/7
                            operations.</p>
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
                <h2 class="section-title">Your Trusted Power Backup Partner</h2>
                <p class="section-description">
                    With 200+ UPS installations and proven expertise, we deliver reliable power backup solutions with
                    professional service.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h5>Certified Technicians</h5>
                        <p>Our UPS specialists are certified and trained in the latest power backup technologies and
                            installation practices.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-battery-full"></i>
                        </div>
                        <h5>Quality Components</h5>
                        <p>We use only premium-grade UPS systems, inverters, and batteries from trusted international
                            manufacturers.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <h5>Accurate Load Calculation</h5>
                        <p>Precise load analysis and system sizing to ensure optimal performance and cost-effective
                            solutions.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h5>Extended Backup Time</h5>
                        <p>Properly sized battery banks and efficient systems providing maximum backup time for your
                            critical loads.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h5>3-Year Warranty</h5>
                        <p>Comprehensive warranty coverage on all UPS and inverter installations with ongoing
                            maintenance support.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h5>24/7 Support</h5>
                        <p>Round-the-clock technical support and emergency service for critical power backup system
                            issues.</p>
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
                            <h2>Need Reliable UPS & Inverter Solutions?</h2>
                            <p>Contact RD Electronics today for professional UPS and inverter installation services that
                                ensure uninterrupted power supply. Get a free load assessment and customized power
                                backup solution for your needs.</p>
                            <div class="cta-features">
                                <div class="cta-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Free Load Assessment</span>
                                </div>
                                <div class="cta-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Professional Installation</span>
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
    <!-- ===================================================== -->

    <?php include_once "../common/footer.php" ?>
</body>

</html>
