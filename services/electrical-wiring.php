<!DOCTYPE html>
<html lang="en">
<?php include_once '../common/head.php'; ?>

<body>
    <?php include_once '../common/header.php'; ?>
    <!-- ======================================================== -->

    <section class="breadcrumb-section electrical-wiring-breadcrumb">
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
                            <li class="breadcrumb-item active" aria-current="page">Electrical Wiring Services</li>
                        </ol>
                    </nav>
                    <h1 class="page-title">Electrical Wiring Services</h1>
                    <p class="page-subtitle">Professional electrical wiring and installation services for residential,
                        commercial, and industrial projects across India</p>
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
                        <span class="section-badge">Electrical Excellence</span>
                        <h2 class="section-title">Professional Electrical Wiring Services</h2>
                        <p class="section-description">
                            RD Electronics provides comprehensive electrical wiring services for all types of
                            properties.
                            Our certified electricians ensure safe, code-compliant installations with quality materials
                            and professional workmanship for reliable electrical systems.
                        </p>

                        <div class="service-highlights">
                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>Safety First</h5>
                                    <p>Code-compliant installations with safety standards</p>
                                </div>
                            </div>

                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>Quality Materials</h5>
                                    <p>Premium electrical components and wiring</p>
                                </div>
                            </div>

                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-tools"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>Expert Installation</h5>
                                    <p>Certified electricians with professional expertise</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-image-container">
                        <div class="service-main-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/electrical-wiring.jpeg"
                                alt="Professional Electrical Wiring Services" class="img-fluid">
                            <div class="image-overlay">
                                <div class="overlay-content">
                                    <h4>200+</h4>
                                    <p>Wiring Projects</p>
                                </div>
                            </div>
                        </div>

                        <div class="floating-stats">
                            <div class="stat-card">
                                <h3>100%</h3>
                                <p>Safe</p>
                            </div>
                            <div class="stat-card">
                                <h3>5 Year</h3>
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
                <span class="section-badge">Our Electrical Services</span>
                <h2 class="section-title">Comprehensive Electrical Wiring Solutions</h2>
                <p class="section-description">
                    From basic residential wiring to complex industrial installations, we provide complete
                    electrical services with professional quality and safety standards.
                </p>
            </div>

            <div class="row g-4">
                <!-- Residential Wiring -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/residential.jfif" alt="Residential Wiring" class="img-fluid">
                        </div>
                        <h4>Residential Wiring</h4>
                        <p>Complete home electrical wiring including outlets, switches, lighting, and circuit
                            installations for safe living.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> New home wiring</li>
                            <li><i class="fas fa-check"></i> Rewiring services</li>
                            <li><i class="fas fa-check"></i> Outlet installation</li>
                            <li><i class="fas fa-check"></i> Lighting circuits</li>
                        </ul>
                    </div>
                </div>

                <!-- Commercial Wiring -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/commercial-building.webp" alt="Commercial Wiring"
                                class="img-fluid">
                        </div>
                        <h4>Commercial Wiring</h4>
                        <p>Professional commercial electrical installations for offices, retail spaces, and business
                            facilities.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Office electrical systems</li>
                            <li><i class="fas fa-check"></i> Retail lighting</li>
                            <li><i class="fas fa-check"></i> Power distribution</li>
                            <li><i class="fas fa-check"></i> Emergency lighting</li>
                        </ul>
                    </div>
                </div>

                <!-- Industrial Wiring -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/manufacturing.jpg" alt="Industrial Wiring" class="img-fluid">
                        </div>
                        <h4>Industrial Wiring</h4>
                        <p>Heavy-duty industrial electrical installations for manufacturing plants and industrial
                            facilities.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Motor control wiring</li>
                            <li><i class="fas fa-check"></i> High-voltage systems</li>
                            <li><i class="fas fa-check"></i> Control panel wiring</li>
                            <li><i class="fas fa-check"></i> Machine connections</li>
                        </ul>
                    </div>
                </div>

                <!-- Power Distribution -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-icon">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <h4>Power Distribution Systems</h4>
                        <p>Complete power distribution solutions including main panels, sub-panels, and circuit
                            protection.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Main electrical panels</li>
                            <li><i class="fas fa-check"></i> Sub-panel installation</li>
                            <li><i class="fas fa-check"></i> Circuit breakers</li>
                            <li><i class="fas fa-check"></i> Load balancing</li>
                        </ul>
                    </div>
                </div>

                <!-- Lighting Systems -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4>Lighting Systems</h4>
                        <p>Professional lighting installations including LED systems, smart lighting, and
                            energy-efficient solutions.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> LED lighting installation</li>
                            <li><i class="fas fa-check"></i> Smart lighting controls</li>
                            <li><i class="fas fa-check"></i> Outdoor lighting</li>
                            <li><i class="fas fa-check"></i> Emergency lighting</li>
                        </ul>
                    </div>
                </div>

                <!-- Electrical Upgrades -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-icon">
                            <i class="fas fa-arrow-up"></i>
                        </div>
                        <h4>Electrical Upgrades</h4>
                        <p>Electrical system upgrades and modernization to meet current codes and increased power
                            demands.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Panel upgrades</li>
                            <li><i class="fas fa-check"></i> Service upgrades</li>
                            <li><i class="fas fa-check"></i> Code compliance</li>
                            <li><i class="fas fa-check"></i> Capacity expansion</li>
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
                <h2 class="section-title">Electrical Standards & Specifications</h2>
                <p class="section-description">
                    Our electrical installations meet and exceed national electrical codes and safety standards.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="tech-specs-card">
                        <h4><i class="fas fa-bolt me-2"></i>Electrical Standards</h4>
                        <div class="specs-table">
                            <div class="spec-row">
                                <span class="spec-label">Voltage Ratings</span>
                                <span class="spec-value">110V, 220V, 440V</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Wire Gauge</span>
                                <span class="spec-value">14 AWG to 4/0 AWG</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Circuit Protection</span>
                                <span class="spec-value">15A to 200A breakers</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Code Compliance</span>
                                <span class="spec-value">NEC, Local Codes</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tech-specs-card">
                        <h4><i class="fas fa-shield-alt me-2"></i>Safety Features</h4>
                        <div class="specs-table">
                            <div class="spec-row">
                                <span class="spec-label">GFCI Protection</span>
                                <span class="spec-value">Wet locations, bathrooms</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">AFCI Protection</span>
                                <span class="spec-value">Bedrooms, living areas</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Grounding</span>
                                <span class="spec-value">Equipment & system grounding</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Surge Protection</span>
                                <span class="spec-value">Whole house protection</span>
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
                <h2 class="section-title">Professional Electrical Installation Process</h2>
                <p class="section-description">
                    Our systematic approach ensures safe, code-compliant electrical installations with quality
                    workmanship.
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
                            <h5>Electrical Assessment</h5>
                            <p>Comprehensive evaluation of electrical needs, load calculations, and code requirements.
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
                            <p>Custom electrical design with circuit layout, panel sizing, and material specifications.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="process-step">
                            <div class="step-number">03</div>
                            <div class="step-icon">
                                <i class="fas fa-hard-hat"></i>
                            </div>
                            <h5>Professional Installation</h5>
                            <p>Expert installation by certified electricians with proper wiring and safety procedures.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="process-step">
                            <div class="step-number">04</div>
                            <div class="step-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <h5>Testing & Inspection</h5>
                            <p>Complete system testing, code inspection, and certification for safe operation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ELECTRICAL SERVICES SECTION -->
    <section class="section bg-white">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge">Electrical Expertise</span>
                <h2 class="section-title">Comprehensive Electrical Solutions</h2>
                <p class="section-description">
                    Our electrical services cover all aspects of electrical work from basic installations to complex
                    systems.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-plug"></i>
                        </div>
                        <h5>Outlet Installation</h5>
                        <p>Professional installation of electrical outlets, GFCI outlets, and USB charging stations.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-toggle-on"></i>
                        </div>
                        <h5>Switch Installation</h5>
                        <p>Installation of light switches, dimmer switches, and smart home automation switches.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h5>Whole House Wiring</h5>
                        <p>Complete home electrical wiring for new construction and major renovations.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-charging-station"></i>
                        </div>
                        <h5>EV Charging Stations</h5>
                        <p>Electric vehicle charging station installation with proper electrical capacity.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-fan"></i>
                        </div>
                        <h5>Ceiling Fan Installation</h5>
                        <p>Professional ceiling fan installation with proper support and electrical connections.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-thermometer-half"></i>
                        </div>
                        <h5>HVAC Electrical</h5>
                        <p>Electrical connections for heating, ventilation, and air conditioning systems.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <h5>Emergency Repairs</h5>
                        <p>24/7 emergency electrical repair services for urgent electrical issues and outages.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h5>Electrical Troubleshooting</h5>
                        <p>Professional diagnosis and repair of electrical problems and system malfunctions.</p>
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
                <h2 class="section-title">Electrical Services Across Multiple Sectors</h2>
                <p class="section-description">
                    Our electrical expertise serves diverse industries with specialized wiring solutions for each
                    sector's requirements.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/residential.jfif" alt="Residential" class="img-fluid">
                        </div>
                        <h5>Residential</h5>
                        <p>Home electrical wiring, upgrades, and installations for safe and comfortable living.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/commercial-building.webp" alt="Commercial" class="img-fluid">
                        </div>
                        <h5>Commercial</h5>
                        <p>Office buildings, retail spaces, and commercial facilities with professional electrical
                            systems.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/manufacturing.jpg" alt="Industrial" class="img-fluid">
                        </div>
                        <h5>Industrial</h5>
                        <p>Manufacturing plants, factories, and industrial facilities with heavy-duty electrical
                            systems.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/healthcare.webp" alt="Healthcare" class="img-fluid">
                        </div>
                        <h5>Healthcare</h5>
                        <p>Hospitals, clinics, and medical facilities with critical power and life-safety electrical
                            systems.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/educational-instituions.jpg" alt="Education" class="img-fluid">
                        </div>
                        <h5>Education</h5>
                        <p>Schools, colleges, and educational institutions with safe and reliable electrical
                            infrastructure.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/hospitality.jpg" alt="Hospitality" class="img-fluid">
                        </div>
                        <h5>Hospitality</h5>
                        <p>Hotels, restaurants, and hospitality venues with guest comfort electrical systems.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/retail.jpg" alt="Retail" class="img-fluid">
                        </div>
                        <h5>Retail</h5>
                        <p>Shopping centers, stores, and retail facilities with attractive and functional lighting.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-icon">
                            <i class="fas fa-warehouse"></i>
                        </div>
                        <h5>Warehousing</h5>
                        <p>Distribution centers and warehouses with efficient lighting and power distribution systems.
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
                <h2 class="section-title">Your Trusted Electrical Partner</h2>
                <p class="section-description">
                    With 200+ electrical projects completed and certified expertise, we deliver safe and reliable
                    electrical solutions.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h5>Licensed Electricians</h5>
                        <p>Our electrical technicians are licensed, certified, and trained in the latest electrical
                            codes and practices.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h5>Safety First</h5>
                        <p>Strict adherence to electrical safety codes and standards for secure installations and
                            operations.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h5>Quality Materials</h5>
                        <p>We use only premium-grade electrical components and wiring from trusted manufacturers.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h5>Timely Completion</h5>
                        <p>Projects completed on schedule with minimal disruption to your daily activities or business
                            operations.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h5>5-Year Warranty</h5>
                        <p>Comprehensive warranty coverage on all electrical work and installations with ongoing
                            support.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h5>24/7 Emergency Service</h5>
                        <p>Round-the-clock emergency electrical services for urgent repairs and power restoration.</p>
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
                            <h2>Need Professional Electrical Wiring Services?</h2>
                            <p>Contact RD Electronics today for safe, reliable electrical installations and upgrades.
                                Get a free electrical assessment and detailed quote for your residential, commercial, or
                                industrial project.</p>
                            <div class="cta-features">
                                <div class="cta-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Free Electrical Assessment</span>
                                </div>
                                <div class="cta-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Code Compliant Installation</span>
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
    <!-- ========================================================= -->

    <?php include_once '../common/footer.php'; ?>
</body>

</html>
