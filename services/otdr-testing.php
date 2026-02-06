<!DOCTYPE html>
<html lang="en">
<?php include_once '../common/head.php'; ?>

<body>
    <?php include_once '../common/header.php'; ?>

    <!-- =============================================== -->
    <section class="breadcrumb-section otdr-testing-breadcrumb">
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
                            <li class="breadcrumb-item active" aria-current="page">OTDR Testing Services</li>
                        </ol>
                    </nav>
                    <h1 class="page-title">OTDR Testing Services</h1>
                    <p class="page-subtitle">Professional fiber optic testing and certification using advanced OTDR
                        technology across India</p>
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
                        <span class="section-badge">Testing Excellence</span>
                        <h2 class="section-title">Professional OTDR Testing Services</h2>
                        <p class="section-description">
                            RD Electronics provides comprehensive OTDR (Optical Time Domain Reflectometer) testing
                            services
                            using state-of-the-art equipment. Our certified technicians ensure accurate fiber
                            characterization,
                            fault location, and performance verification for optimal network reliability.
                        </p>

                        <div class="service-highlights">
                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-search-location"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>Precise Fault Location</h5>
                                    <p>Accurate identification of fiber faults and breaks</p>
                                </div>
                            </div>

                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>Performance Analysis</h5>
                                    <p>Comprehensive fiber performance characterization</p>
                                </div>
                            </div>

                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>Detailed Reports</h5>
                                    <p>Professional test reports with certification</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-image-container">
                        <div class="service-main-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/otdr.jpg" alt="Professional OTDR Testing Equipment"
                                class="img-fluid">
                            <div class="image-overlay">
                                <div class="overlay-content">
                                    <h4>150+</h4>
                                    <p>OTDR Tests</p>
                                </div>
                            </div>
                        </div>

                        <div class="floating-stats">
                            <div class="stat-card">
                                <h3>200km</h3>
                                <p>Test Range</p>
                            </div>
                            <div class="stat-card">
                                <h3>±0.02dB</h3>
                                <p>Accuracy</p>
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
                <span class="section-badge">Our OTDR Services</span>
                <h2 class="section-title">Comprehensive Fiber Optic Testing Solutions</h2>
                <p class="section-description">
                    From basic fiber characterization to advanced fault analysis, we provide complete OTDR testing
                    services with professional equipment and certified expertise.
                </p>
            </div>

            <div class="row g-4">
                <!-- Fiber Characterization -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/fibre-characterization.webp" alt="Fiber Characterization"
                                class="img-fluid">
                        </div>
                        <h4>Fiber Characterization</h4>
                        <p>Complete fiber link analysis including length measurement, loss characterization, and splice
                            evaluation.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Total link loss measurement</li>
                            <li><i class="fas fa-check"></i> Fiber length verification</li>
                            <li><i class="fas fa-check"></i> Splice loss analysis</li>
                            <li><i class="fas fa-check"></i> Return loss measurement</li>
                        </ul>
                    </div>
                </div>

                <!-- Fault Location -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/otdr-fault.jfif" alt="Fiber Characterization" class="img-fluid">
                        </div>
                        <h4>Fault Location & Analysis</h4>
                        <p>Precise identification and location of fiber faults, breaks, and performance issues with
                            detailed analysis.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Break location identification</li>
                            <li><i class="fas fa-check"></i> Bend loss detection</li>
                            <li><i class="fas fa-check"></i> Connector fault analysis</li>
                            <li><i class="fas fa-check"></i> Macro/micro bend identification</li>
                        </ul>
                    </div>
                </div>

                <!-- Installation Verification -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/otdr-verification.jfif" alt="Fiber Characterization"
                                class="img-fluid">
                        </div>
                        <h4>Installation Verification</h4>
                        <p>Post-installation testing to verify fiber performance meets specifications and industry
                            standards.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Acceptance testing</li>
                            <li><i class="fas fa-check"></i> Performance verification</li>
                            <li><i class="fas fa-check"></i> Standard compliance check</li>
                            <li><i class="fas fa-check"></i> Quality assurance testing</li>
                        </ul>
                    </div>
                </div>

                <!-- Maintenance Testing -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <h4>Preventive Maintenance</h4>
                        <p>Regular OTDR testing for proactive network maintenance and performance monitoring.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Scheduled testing</li>
                            <li><i class="fas fa-check"></i> Performance trending</li>
                            <li><i class="fas fa-check"></i> Degradation monitoring</li>
                            <li><i class="fas fa-check"></i> Preventive analysis</li>
                        </ul>
                    </div>
                </div>

                <!-- Troubleshooting -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h4>Network Troubleshooting</h4>
                        <p>Advanced troubleshooting services for fiber network issues and performance problems.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Signal loss investigation</li>
                            <li><i class="fas fa-check"></i> Intermittent fault detection</li>
                            <li><i class="fas fa-check"></i> Performance degradation analysis</li>
                            <li><i class="fas fa-check"></i> Root cause identification</li>
                        </ul>
                    </div>
                </div>

                <!-- Documentation & Reports -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-icon">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <h4>Documentation & Reports</h4>
                        <p>Comprehensive test documentation and professional reports for compliance and record keeping.
                        </p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Detailed OTDR traces</li>
                            <li><i class="fas fa-check"></i> Professional test reports</li>
                            <li><i class="fas fa-check"></i> Certification documents</li>
                            <li><i class="fas fa-check"></i> Digital record keeping</li>
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
                <h2 class="section-title">Advanced OTDR Testing Capabilities</h2>
                <p class="section-description">
                    Our OTDR testing equipment provides industry-leading accuracy and range for comprehensive fiber
                    analysis.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="tech-specs-card">
                        <h4><i class="fas fa-microscope me-2"></i>OTDR Specifications</h4>
                        <div class="specs-table">
                            <div class="spec-row">
                                <span class="spec-label">Testing Range</span>
                                <span class="spec-value">Up to 200km</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Dead Zone</span>
                                <span class="spec-value">0.8m (Event), 3m (Attenuation)</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Distance Accuracy</span>
                                <span class="spec-value">±(1m + 0.01% × distance)</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Loss Accuracy</span>
                                <span class="spec-value">±0.02dB</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tech-specs-card">
                        <h4><i class="fas fa-wave-square me-2"></i>Wavelength Support</h4>
                        <div class="specs-table">
                            <div class="spec-row">
                                <span class="spec-label">Single-Mode</span>
                                <span class="spec-value">1310nm, 1550nm, 1625nm</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Multi-Mode</span>
                                <span class="spec-value">850nm, 1300nm</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Pulse Width</span>
                                <span class="spec-value">3ns to 20μs</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Dynamic Range</span>
                                <span class="spec-value">Up to 45dB</span>
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
                <h2 class="section-title">Professional OTDR Testing Workflow</h2>
                <p class="section-description">
                    Our systematic approach ensures accurate testing, comprehensive analysis, and reliable results for
                    every fiber network.
                </p>
            </div>

            <div class="process-timeline">
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="process-step">
                            <div class="step-number">01</div>
                            <div class="step-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <h5>Pre-Test Planning</h5>
                            <p>Comprehensive planning including fiber documentation review and test parameter setup.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="process-step">
                            <div class="step-number">02</div>
                            <div class="step-icon">
                                <i class="fas fa-plug"></i>
                            </div>
                            <h5>Equipment Setup</h5>
                            <p>Professional OTDR setup with proper connector cleaning and calibration verification.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="process-step">
                            <div class="step-number">03</div>
                            <div class="step-icon">
                                <i class="fas fa-chart-area"></i>
                            </div>
                            <h5>Testing & Analysis</h5>
                            <p>Comprehensive OTDR testing with trace analysis and performance evaluation.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="process-step">
                            <div class="step-number">04</div>
                            <div class="step-icon">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <h5>Report Generation</h5>
                            <p>Professional test report generation with detailed analysis and recommendations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTING CAPABILITIES SECTION -->
    <section class="section bg-white">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge">Testing Capabilities</span>
                <h2 class="section-title">Comprehensive OTDR Testing Features</h2>
                <p class="section-description">
                    Our advanced OTDR testing capabilities provide complete fiber network analysis and characterization.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-ruler"></i>
                        </div>
                        <h5>Length Measurement</h5>
                        <p>Accurate fiber length measurement with high precision for inventory and documentation.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-signal"></i>
                        </div>
                        <h5>Loss Analysis</h5>
                        <p>Comprehensive loss analysis including splice losses, connector losses, and total link loss.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h5>Event Detection</h5>
                        <p>Automatic detection and analysis of fiber events including splices, connectors, and faults.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <h5>Fault Identification</h5>
                        <p>Precise fault location and characterization for efficient troubleshooting and repair.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h5>Visual Fault Location</h5>
                        <p>Integrated visual fault locator for easy identification of fiber breaks and bends.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-database"></i>
                        </div>
                        <h5>Data Storage</h5>
                        <p>Comprehensive data storage and management for historical analysis and comparison.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <h5>Performance Trending</h5>
                        <p>Long-term performance monitoring and trending analysis for proactive maintenance.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h5>Standards Compliance</h5>
                        <p>Testing according to international standards including ITU-T, IEC, and TIA/EIA
                            specifications.</p>
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
                <h2 class="section-title">OTDR Testing Across Multiple Sectors</h2>
                <p class="section-description">
                    Our OTDR testing services support diverse industries with specialized testing approaches for each
                    sector's requirements.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/network-infrastructure.jpg" alt="Telecommunications"
                                class="img-fluid">
                        </div>
                        <h5>Telecommunications</h5>
                        <p>Long-haul network testing, backbone verification, and carrier-grade fiber certification.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/data-cabling.jpg" alt="Data Centers" class="img-fluid">
                        </div>
                        <h5>Data Centers</h5>
                        <p>High-density fiber testing, interconnect verification, and performance validation.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/commercial-building.webp" alt="Enterprise" class="img-fluid">
                        </div>
                        <h5>Enterprise Networks</h5>
                        <p>Corporate fiber testing, building backbone verification, and LAN certification.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/government.jpg" alt="Government" class="img-fluid">
                        </div>
                        <h5>Government</h5>
                        <p>Secure network testing, critical infrastructure verification, and compliance testing.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/healthcare.webp" alt="Healthcare" class="img-fluid">
                        </div>
                        <h5>Healthcare</h5>
                        <p>Medical network testing, imaging system verification, and critical care connectivity.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/educational-instituions.jpg" alt="Education" class="img-fluid">
                        </div>
                        <h5>Education</h5>
                        <p>Campus network testing, research facility verification, and educational infrastructure.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/manufacturing.jpg" alt="Manufacturing" class="img-fluid">
                        </div>
                        <h5>Manufacturing</h5>
                        <p>Industrial network testing, automation system verification, and process control networks.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-icon">
                            <i class="fas fa-satellite"></i>
                        </div>
                        <h5>Utilities</h5>
                        <p>Power grid communications, smart grid testing, and utility infrastructure verification.</p>
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
                <h2 class="section-title">Your Trusted OTDR Testing Partner</h2>
                <p class="section-description">
                    With 150+ OTDR tests completed and advanced testing expertise, we deliver accurate results and
                    professional service.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h5>Certified Technicians</h5>
                        <p>Our OTDR testing specialists are certified and trained in advanced fiber optic testing
                            methodologies.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-microscope"></i>
                        </div>
                        <h5>Advanced Equipment</h5>
                        <p>State-of-the-art OTDR equipment with 200km range and ±0.02dB accuracy for precise
                            measurements.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h5>Comprehensive Analysis</h5>
                        <p>Detailed fiber analysis including loss characterization, fault location, and performance
                            evaluation.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <h5>Professional Reports</h5>
                        <p>Comprehensive test reports with detailed analysis, recommendations, and certification
                            documentation.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h5>Quick Turnaround</h5>
                        <p>Fast testing services with same-day results and emergency testing support when needed.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h5>Quality Assurance</h5>
                        <p>Rigorous quality control processes and calibrated equipment for reliable and accurate
                            results.</p>
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
                            <h2>Need Professional OTDR Testing Services?</h2>
                            <p>Contact RD Electronics today for comprehensive OTDR testing and fiber optic analysis. Get
                                accurate results, detailed reports, and professional certification for your fiber
                                network.</p>
                            <div class="cta-features">
                                <div class="cta-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Free Consultation & Quote</span>
                                </div>
                                <div class="cta-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Same-Day Testing Available</span>
                                </div>
                                <div class="cta-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Professional Certification</span>
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

            <?php include_once "../common/footer.php"; ?>
</body>

</html>
