<!DOCTYPE html>
<html lang="en">
<?php include_once '../common/head.php'; ?>

<body>
    <?php include_once '../common/header.php'; ?>
    <!-- =================================================== -->
    <section class="breadcrumb-section fire-alarm-breadcrumb">
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
                            <li class="breadcrumb-item active" aria-current="page">Fire Alarm Systems</li>
                        </ol>
                    </nav>
                    <h1 class="page-title">Fire Alarm Systems</h1>
                    <p class="page-subtitle">Professional fire detection and alarm systems for comprehensive safety
                        protection across India</p>
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
                        <span class="section-badge">Fire Safety Excellence</span>
                        <h2 class="section-title">Professional Fire Alarm Systems</h2>
                        <p class="section-description">
                            RD Electronics provides comprehensive fire detection and alarm systems designed to protect
                            lives
                            and property. Our advanced fire safety solutions include early detection, rapid
                            notification,
                            and integrated emergency response systems for complete fire protection.
                        </p>

                        <div class="service-highlights">
                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-fire-extinguisher"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>Early Detection</h5>
                                    <p>Advanced smoke and heat detection technology</p>
                                </div>
                            </div>

                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-bell"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>Instant Alerts</h5>
                                    <p>Immediate notification and emergency response</p>
                                </div>
                            </div>

                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>Code Compliance</h5>
                                    <p>Full compliance with fire safety regulations</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-image-container">
                        <div class="service-main-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/fire-alarm.jpeg" alt="Professional Fire Alarm Systems"
                                class="img-fluid">
                            <div class="image-overlay">
                                <div class="overlay-content">
                                    <h4>50+</h4>
                                    <p>Fire Systems</p>
                                </div>
                            </div>
                        </div>

                        <div class="floating-stats">
                            <div class="stat-card">
                                <h3>24/7</h3>
                                <p>Monitoring</p>
                            </div>
                            <div class="stat-card">
                                <h3>100%</h3>
                                <p>Compliant</p>
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
                <span class="section-badge">Our Fire Safety Services</span>
                <h2 class="section-title">Comprehensive Fire Protection Solutions</h2>
                <p class="section-description">
                    From smoke detection to complete fire suppression systems, we provide integrated fire safety
                    solutions that protect lives and property with reliable, code-compliant systems.
                </p>
            </div>

            <div class="row g-4">
                <!-- Fire Detection Systems -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/fire-detector.avif" alt="Fire Detection Systems"
                                class="img-fluid">
                        </div>
                        <h4>Fire Detection Systems</h4>
                        <p>Advanced fire detection with smoke, heat, and flame detectors for early warning and rapid
                            response.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Smoke detectors</li>
                            <li><i class="fas fa-check"></i> Heat detectors</li>
                            <li><i class="fas fa-check"></i> Flame detectors</li>
                            <li><i class="fas fa-check"></i> Multi-sensor detectors</li>
                        </ul>
                    </div>
                </div>

                <!-- Fire Alarm Control Panels -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/fire-control.jpg" alt="Fire Detection Systems"
                                class="img-fluid">
                        </div>
                        <h4>Fire Alarm Control Panels</h4>
                        <p>Intelligent fire alarm control panels with advanced monitoring, reporting, and system
                            management capabilities.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Addressable systems</li>
                            <li><i class="fas fa-check"></i> Zone monitoring</li>
                            <li><i class="fas fa-check"></i> Event logging</li>
                            <li><i class="fas fa-check"></i> Remote monitoring</li>
                        </ul>
                    </div>
                </div>

                <!-- Emergency Notification -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/fire-alarm-voice.jpg" alt="Fire Detection Systems"
                                class="img-fluid">
                        </div>
                        <h4>Emergency Notification</h4>
                        <p>Mass notification systems with audio and visual alerts for effective emergency communication.
                        </p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Voice evacuation</li>
                            <li><i class="fas fa-check"></i> Strobe lights</li>
                            <li><i class="fas fa-check"></i> Public address</li>
                            <li><i class="fas fa-check"></i> Emergency messaging</li>
                        </ul>
                    </div>
                </div>

                <!-- Fire Suppression Integration -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-icon">
                            <i class="fas fa-spray-can"></i>
                        </div>
                        <h4>Fire Suppression Integration</h4>
                        <p>Integration with sprinkler systems, gas suppression, and other fire suppression technologies.
                        </p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Sprinkler activation</li>
                            <li><i class="fas fa-check"></i> Gas suppression control</li>
                            <li><i class="fas fa-check"></i> Elevator recall</li>
                            <li><i class="fas fa-check"></i> HVAC shutdown</li>
                        </ul>
                    </div>
                </div>

                <!-- Monitoring & Maintenance -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h4>Monitoring & Maintenance</h4>
                        <p>24/7 monitoring services and preventive maintenance to ensure optimal system performance and
                            reliability.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Central station monitoring</li>
                            <li><i class="fas fa-check"></i> Regular inspections</li>
                            <li><i class="fas fa-check"></i> System testing</li>
                            <li><i class="fas fa-check"></i> Emergency repairs</li>
                        </ul>
                    </div>
                </div>

                <!-- Code Compliance -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h4>Code Compliance & Certification</h4>
                        <p>Ensuring full compliance with local fire codes, NFPA standards, and regulatory requirements.
                        </p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> NFPA compliance</li>
                            <li><i class="fas fa-check"></i> Local code adherence</li>
                            <li><i class="fas fa-check"></i> Inspection certificates</li>
                            <li><i class="fas fa-check"></i> Documentation</li>
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
                <h2 class="section-title">Advanced Fire Safety Technology</h2>
                <p class="section-description">
                    Our fire alarm systems utilize cutting-edge technology and meet international fire safety standards.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="tech-specs-card">
                        <h4><i class="fas fa-fire me-2"></i>Detection Technology</h4>
                        <div class="specs-table">
                            <div class="spec-row">
                                <span class="spec-label">Smoke Detection</span>
                                <span class="spec-value">Photoelectric, Ionization</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Heat Detection</span>
                                <span class="spec-value">Fixed Temperature, Rate-of-Rise</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Response Time</span>
                                <span class="spec-value">
                                    < 30 seconds</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Coverage Area</span>
                                <span class="spec-value">Up to 900 sq ft per detector</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tech-specs-card">
                        <h4><i class="fas fa-microchip me-2"></i>Control Panel Features</h4>
                        <div class="specs-table">
                            <div class="spec-row">
                                <span class="spec-label">Addressable Points</span>
                                <span class="spec-value">Up to 3,200 devices</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Network Capacity</span>
                                <span class="spec-value">Up to 127 panels</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Event Memory</span>
                                <span class="spec-value">10,000+ events</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Communication</span>
                                <span class="spec-value">IP, Serial, Wireless</span>
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
                <h2 class="section-title">Professional Fire Alarm Installation Process</h2>
                <p class="section-description">
                    Our systematic approach ensures code-compliant installation, thorough testing, and reliable fire
                    protection.
                </p>
            </div>

            <div class="process-timeline">
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="process-step">
                            <div class="step-number">01</div>
                            <div class="step-icon">
                                <i class="fas fa-clipboard-check"></i>
                            </div>
                            <h5>Fire Risk Assessment</h5>
                            <p>Comprehensive evaluation of fire hazards, building layout, and occupancy requirements.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="process-step">
                            <div class="step-number">02</div>
                            <div class="step-icon">
                                <i class="fas fa-drafting-compass"></i>
                            </div>
                            <h5>System Design</h5>
                            <p>Custom fire alarm system design with code compliance and optimal detector placement.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="process-step">
                            <div class="step-number">03</div>
                            <div class="step-icon">
                                <i class="fas fa-hard-hat"></i>
                            </div>
                            <h5>Professional Installation</h5>
                            <p>Expert installation with proper wiring, device mounting, and system configuration.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="process-step">
                            <div class="step-number">04</div>
                            <div class="step-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <h5>Testing & Certification</h5>
                            <p>Complete system testing, commissioning, and official certification for code compliance.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FIRE SAFETY FEATURES SECTION -->
    <section class="section bg-white">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge">Safety Features</span>
                <h2 class="section-title">Advanced Fire Protection Technologies</h2>
                <p class="section-description">
                    Our fire alarm systems include intelligent features that enhance detection accuracy and emergency
                    response.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h5>Smart Detection</h5>
                        <p>Intelligent algorithms that reduce false alarms while maintaining high sensitivity to real
                            fires.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h5>Precise Location</h5>
                        <p>Addressable systems that pinpoint exact fire location for faster emergency response.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h5>Remote Monitoring</h5>
                        <p>24/7 central station monitoring with instant notification to emergency services.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-battery-full"></i>
                        </div>
                        <h5>Backup Power</h5>
                        <p>Reliable battery backup systems ensure continuous operation during power outages.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-volume-up"></i>
                        </div>
                        <h5>Voice Evacuation</h5>
                        <p>Clear voice messages and instructions for orderly evacuation during emergencies.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-network-wired"></i>
                        </div>
                        <h5>System Integration</h5>
                        <p>Seamless integration with building systems, elevators, HVAC, and security systems.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h5>Performance Analytics</h5>
                        <p>System performance monitoring and analytics for predictive maintenance and optimization.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-shield-virus"></i>
                        </div>
                        <h5>Cybersecurity</h5>
                        <p>Advanced security protocols to protect fire safety systems from cyber threats.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INDUSTRIES SERVED SECTION -->
    <section class="section section-alt">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge">Industries We Protect</span>
                <h2 class="section-title">Fire Safety Across Multiple Sectors</h2>
                <p class="section-description">
                    Our fire alarm systems protect diverse industries with specialized solutions for each sector's
                    unique fire safety requirements.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/commercial-building.webp" alt="Commercial Buildings"
                                class="img-fluid">
                        </div>
                        <h5>Commercial Buildings</h5>
                        <p>Office buildings, shopping centers, and business complexes with comprehensive fire
                            protection.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/manufacturing.jpg" alt="Industrial" class="img-fluid">
                        </div>
                        <h5>Industrial Facilities</h5>
                        <p>Manufacturing plants, warehouses, and industrial complexes with specialized fire detection.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/healthcare.webp" alt="Healthcare" class="img-fluid">
                        </div>
                        <h5>Healthcare</h5>
                        <p>Hospitals, clinics, and medical facilities with life-safety compliant fire protection
                            systems.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/educational-instituions.jpg" alt="Education" class="img-fluid">
                        </div>
                        <h5>Educational Institutions</h5>
                        <p>Schools, colleges, and universities with comprehensive fire safety and evacuation systems.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/hospitality.jpg" alt="Hospitality" class="img-fluid">
                        </div>
                        <h5>Hospitality</h5>
                        <p>Hotels, restaurants, and entertainment venues with guest safety fire protection systems.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/residential.jfif" alt="Residential" class="img-fluid">
                        </div>
                        <h5>Residential</h5>
                        <p>Apartment buildings, condominiums, and residential complexes with life safety systems.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/government.jpg" alt="Government" class="img-fluid">
                        </div>
                        <h5>Government</h5>
                        <p>Government buildings, public facilities, and critical infrastructure with advanced fire
                            protection.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-icon">
                            <i class="fas fa-warehouse"></i>
                        </div>
                        <h5>Data Centers</h5>
                        <p>Mission-critical data centers with specialized fire suppression and early warning systems.
                        </p>
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
                <h2 class="section-title">Your Trusted Fire Safety Partner</h2>
                <p class="section-description">
                    With 50+ fire safety installations and comprehensive expertise, we deliver reliable protection and
                    peace of mind.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h5>Certified Technicians</h5>
                        <p>Our fire safety specialists are certified and trained in the latest fire detection and alarm
                            technologies.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <h5>Code Compliance</h5>
                        <p>Full compliance with NFPA standards, local fire codes, and regulatory requirements.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h5>24/7 Monitoring</h5>
                        <p>Round-the-clock central station monitoring with immediate emergency response coordination.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h5>5-Year Warranty</h5>
                        <p>Comprehensive warranty coverage on all fire alarm equipment and installation work.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h5>Preventive Maintenance</h5>
                        <p>Regular inspection and maintenance services to ensure optimal system performance and
                            reliability.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h5>Emergency Response</h5>
                        <p>24/7 emergency service and rapid response for critical fire safety system issues.</p>
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
                            <h2>Protect Your Property with Professional Fire Alarm Systems</h2>
                            <p>Contact RD Electronics today for comprehensive fire detection and alarm systems that
                                provide reliable protection and code compliance. Get a free fire risk assessment and
                                detailed quote for your project.</p>
                            <div class="cta-features">
                                <div class="cta-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Free Fire Risk Assessment</span>
                                </div>
                                <div class="cta-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Code Compliant Design</span>
                                </div>
                                <div class="cta-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>5-Year Warranty Included</span>
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
    <!-- =================================================== -->
    <?php include_once "../common/footer.php"; ?>
</body>

</html>
