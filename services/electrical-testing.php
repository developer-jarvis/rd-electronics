<!DOCTYPE html>
<html lang="en">
<?php include_once '../common/head.php'; ?>

<body>
    <?php include_once "../common/header.php"; ?>

    <!-- ============================================ -->
    <section class="breadcrumb-section electrical-testing-breadcrumb">
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
                            <li class="breadcrumb-item active" aria-current="page">Electrical Testing & Commissioning
                            </li>
                        </ol>
                    </nav>
                    <h1 class="page-title">Electrical Testing & Commissioning</h1>
                    <p class="page-subtitle">Professional electrical testing and commissioning services ensuring safety,
                        compliance, and optimal performance of electrical systems across India</p>
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
                        <span class="section-badge">Testing & Commissioning Excellence</span>
                        <h2 class="section-title">Professional Electrical Testing & Commissioning</h2>
                        <p class="section-description">
                            RD Electronics provides comprehensive electrical testing and commissioning services to
                            ensure
                            your electrical systems meet safety standards and perform optimally. Our certified
                            technicians
                            use advanced testing equipment to verify installation quality and compliance.
                        </p>

                        <div class="service-highlights">
                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>Safety Compliance</h5>
                                    <p>Ensuring all systems meet safety standards</p>
                                </div>
                            </div>

                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-clipboard-check"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>Comprehensive Testing</h5>
                                    <p>Complete electrical system verification</p>
                                </div>
                            </div>

                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-certificate"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>Certified Reports</h5>
                                    <p>Official test certificates and documentation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-image-container">
                        <div class="service-main-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/electrical-testing.jpg"
                                alt="Professional Electrical Testing & Commissioning" class="img-fluid">
                            <div class="image-overlay">
                                <div class="overlay-content">
                                    <h4>300+</h4>
                                    <p>Tests Completed</p>
                                </div>
                            </div>
                        </div>

                        <div class="floating-stats">
                            <div class="stat-card">
                                <h3>100%</h3>
                                <p>Certified</p>
                            </div>
                            <div class="stat-card">
                                <h3>24/7</h3>
                                <p>Support</p>
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
                <span class="section-badge">Our Testing Services</span>
                <h2 class="section-title">Comprehensive Electrical Testing Solutions</h2>
                <p class="section-description">
                    From basic continuity tests to complex power system commissioning, we provide complete
                    electrical testing services with certified equipment and detailed reporting.
                </p>
            </div>

            <div class="row g-4">
                <!-- Insulation Resistance Testing -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/electrical-testing.jpg" alt="Insulation Resistance Testing"
                                class="img-fluid">
                        </div>
                        <h4>Insulation Resistance Testing</h4>
                        <p>Comprehensive insulation testing to verify electrical safety and prevent short circuits in
                            wiring systems.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Megger testing</li>
                            <li><i class="fas fa-check"></i> Cable insulation verification</li>
                            <li><i class="fas fa-check"></i> Motor winding tests</li>
                            <li><i class="fas fa-check"></i> Transformer insulation</li>
                        </ul>
                    </div>
                </div>

                <!-- Continuity Testing -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/insulation-testing.webp" alt="Insulation Resistance Testing"
                                class="img-fluid">
                        </div>
                        <h4>Continuity Testing</h4>
                        <p>Verification of electrical continuity in circuits, connections, and protective conductors for
                            safe operation.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Circuit continuity</li>
                            <li><i class="fas fa-check"></i> Earth continuity</li>
                            <li><i class="fas fa-check"></i> Protective conductor tests</li>
                            <li><i class="fas fa-check"></i> Ring circuit testing</li>
                        </ul>
                    </div>
                </div>

                <!-- Earth Resistance Testing -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/earth-resistance.png" alt="Insulation Resistance Testing"
                                class="img-fluid">
                        </div>
                        <h4>Earth Resistance Testing</h4>
                        <p>Professional earthing system testing to ensure proper grounding and electrical safety
                            compliance.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Soil resistivity testing</li>
                            <li><i class="fas fa-check"></i> Earth electrode resistance</li>
                            <li><i class="fas fa-check"></i> Lightning protection testing</li>
                            <li><i class="fas fa-check"></i> Step and touch potential</li>
                        </ul>
                    </div>
                </div>

                <!-- Power Quality Analysis -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4>Power Quality Analysis</h4>
                        <p>Comprehensive power quality assessment including harmonics, voltage fluctuations, and power
                            factor analysis.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Harmonic analysis</li>
                            <li><i class="fas fa-check"></i> Voltage quality monitoring</li>
                            <li><i class="fas fa-check"></i> Power factor measurement</li>
                            <li><i class="fas fa-check"></i> Load analysis</li>
                        </ul>
                    </div>
                </div>

                <!-- Thermal Imaging -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-icon">
                            <i class="fas fa-thermometer-half"></i>
                        </div>
                        <h4>Thermal Imaging</h4>
                        <p>Infrared thermal imaging inspection to detect hot spots, loose connections, and potential
                            failures.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Hot spot detection</li>
                            <li><i class="fas fa-check"></i> Connection analysis</li>
                            <li><i class="fas fa-check"></i> Equipment monitoring</li>
                            <li><i class="fas fa-check"></i> Preventive maintenance</li>
                        </ul>
                    </div>
                </div>

                <!-- System Commissioning -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h4>System Commissioning</h4>
                        <p>Complete electrical system commissioning including functional testing and performance
                            verification.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Functional testing</li>
                            <li><i class="fas fa-check"></i> Performance verification</li>
                            <li><i class="fas fa-check"></i> System integration</li>
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
                <span class="section-badge">Testing Standards</span>
                <h2 class="section-title">Electrical Testing Technical Standards</h2>
                <p class="section-description">
                    Our testing procedures comply with international standards and use calibrated equipment for accurate
                    results.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="tech-specs-card">
                        <h4><i class="fas fa-clipboard-list me-2"></i>Testing Standards</h4>
                        <div class="specs-table">
                            <div class="spec-row">
                                <span class="spec-label">International Standards</span>
                                <span class="spec-value">IEC, IEEE, IS Standards</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Insulation Testing</span>
                                <span class="spec-value">Up to 10kV DC</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Earth Resistance</span>
                                <span class="spec-value">0.01Ω to 2000Ω</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Accuracy</span>
                                <span class="spec-value">±2% of reading</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tech-specs-card">
                        <h4><i class="fas fa-tools me-2"></i>Testing Equipment</h4>
                        <div class="specs-table">
                            <div class="spec-row">
                                <span class="spec-label">Calibration</span>
                                <span class="spec-value">NABL certified</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Power Quality Analyzer</span>
                                <span class="spec-value">Class A instruments</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Thermal Camera</span>
                                <span class="spec-value">±2°C accuracy</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Documentation</span>
                                <span class="spec-value">Digital reports</span>
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
                <h2 class="section-title">Professional Testing & Commissioning Process</h2>
                <p class="section-description">
                    Our systematic approach ensures comprehensive testing with detailed documentation and compliance
                    verification.
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
                            <h5>System Assessment</h5>
                            <p>Comprehensive evaluation of electrical systems and identification of testing requirements
                                and scope.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="process-step">
                            <div class="step-number">02</div>
                            <div class="step-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <h5>Test Planning</h5>
                            <p>Development of detailed test procedures and schedules based on applicable standards and
                                requirements.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="process-step">
                            <div class="step-number">03</div>
                            <div class="step-icon">
                                <i class="fas fa-vial"></i>
                            </div>
                            <h5>Testing Execution</h5>
                            <p>Systematic execution of all tests using calibrated equipment with real-time data
                                recording and analysis.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="process-step">
                            <div class="step-number">04</div>
                            <div class="step-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <h5>Documentation & Certification</h5>
                            <p>Comprehensive test reports with recommendations and official certification for compliance
                                verification.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTING TYPES SECTION -->
    <section class="section bg-white">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge">Testing Categories</span>
                <h2 class="section-title">Comprehensive Electrical Testing Services</h2>
                <p class="section-description">
                    We provide all types of electrical testing services for various systems and applications.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h5>High Voltage Testing</h5>
                        <p>Specialized testing for high voltage equipment including transformers, switchgear, and
                            cables.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-plug"></i>
                        </div>
                        <h5>Low Voltage Testing</h5>
                        <p>Comprehensive testing of low voltage installations, panels, and distribution systems.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-motor"></i>
                        </div>
                        <h5>Motor Testing</h5>
                        <p>Complete motor testing including insulation, winding resistance, and performance analysis.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-battery-full"></i>
                        </div>
                        <h5>Battery Testing</h5>
                        <p>UPS and standby battery testing including capacity, impedance, and discharge testing.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h5>Protection Testing</h5>
                        <p>Relay testing and protection system verification for proper operation and coordination.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-cable-car"></i>
                        </div>
                        <h5>Cable Testing</h5>
                        <p>Power cable testing including insulation, continuity, and fault location services.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-fire"></i>
                        </div>
                        <h5>Fire Alarm Testing</h5>
                        <p>Complete fire alarm system testing and commissioning for safety compliance.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-sun"></i>
                        </div>
                        <h5>Solar System Testing</h5>
                        <p>Solar PV system testing including performance analysis and safety verification.</p>
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
                <h2 class="section-title">Testing Services Across Multiple Sectors</h2>
                <p class="section-description">
                    Our electrical testing expertise serves diverse industries with specialized testing requirements and
                    compliance standards.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/manufacturing.jpg" alt="Manufacturing" class="img-fluid">
                        </div>
                        <h5>Manufacturing</h5>
                        <p>Industrial electrical testing for manufacturing facilities, production equipment, and power
                            systems.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/healthcare.webp" alt="Healthcare" class="img-fluid">
                        </div>
                        <h5>Healthcare</h5>
                        <p>Critical electrical testing for hospitals and medical facilities ensuring patient safety and
                            equipment reliability.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/commercial-building.webp" alt="Commercial" class="img-fluid">
                        </div>
                        <h5>Commercial</h5>
                        <p>Office buildings and commercial facilities with comprehensive electrical system testing and
                            certification.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/educational-instituions.jpg" alt="Education" class="img-fluid">
                        </div>
                        <h5>Education</h5>
                        <p>Educational institutions with electrical safety testing and compliance verification for
                            student safety.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/government.jpg" alt="Government" class="img-fluid">
                        </div>
                        <h5>Government</h5>
                        <p>Government facilities and public buildings with mandatory electrical testing and safety
                            compliance.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/hospitality.jpg" alt="Hospitality" class="img-fluid">
                        </div>
                        <h5>Hospitality</h5>
                        <p>Hotels and hospitality venues with electrical testing for guest safety and operational
                            reliability.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/retail.jpg" alt="Retail" class="img-fluid">
                        </div>
                        <h5>Retail</h5>
                        <p>Shopping centers and retail stores with electrical testing for customer safety and business
                            continuity.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-icon">
                            <i class="fas fa-database"></i>
                        </div>
                        <h5>Data Centers</h5>
                        <p>Critical data center electrical testing ensuring 24/7 uptime and power system reliability.
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
                <h2 class="section-title">Your Trusted Testing & Commissioning Partner</h2>
                <p class="section-description">
                    With 300+ testing projects completed and certified expertise, we deliver accurate and reliable
                    electrical testing services.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h5>Certified Technicians</h5>
                        <p>Our testing specialists are certified and trained in the latest testing standards and
                            procedures.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h5>Calibrated Equipment</h5>
                        <p>All testing equipment is NABL calibrated ensuring accurate and reliable test results.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-clipboard-check"></i>
                        </div>
                        <h5>Comprehensive Reports</h5>
                        <p>Detailed test reports with analysis, recommendations, and compliance certification.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h5>Safety Compliance</h5>
                        <p>Full compliance with international and national electrical safety standards and regulations.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h5>Quick Turnaround</h5>
                        <p>Fast and efficient testing services with minimal disruption to your operations.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h5>Expert Support</h5>
                        <p>Ongoing technical support and consultation for electrical system optimization and
                            maintenance.</p>
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
                            <h2>Need Professional Electrical Testing & Commissioning?</h2>
                            <p>Contact RD Electronics today for comprehensive electrical testing services that ensure
                                safety, compliance, and optimal performance. Get certified test reports and expert
                                recommendations for your electrical systems.</p>
                            <div class="cta-features">
                                <div class="cta-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Free System Assessment</span>
                                </div>
                                <div class="cta-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Certified Test Reports</span>
                                </div>
                                <div class="cta-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Expert Recommendations</span>
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

    <!-- ============================================ -->

    <?php include_once '../common/footer.php'; ?>
</body>

</html>
