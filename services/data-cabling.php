<!DOCTYPE html>
<html lang="en">
<?php include_once '../common/head.php'; ?>

<body>
    <?php include_once '../common/header.php'; ?>


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
                            <li class="breadcrumb-item">
                                <a href="<?php echo $base_url; ?>index.php#services">
                                    <i class="fas fa-cogs"></i>
                                    <span>Services</span>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Data Cabling Work</li>
                        </ol>
                    </nav>
                    <h1 class="page-title">Data Cabling Work</h1>
                    <p class="page-subtitle">Professional structured cabling solutions for modern businesses across India</p>
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
                        <span class="section-badge">IT Networking Excellence</span>
                        <h2 class="section-title">Professional Data Cabling Solutions</h2>
                        <p class="section-description">
                            At RD Electronics, we specialize in designing and installing comprehensive structured cabling systems
                            that form the backbone of your network infrastructure. Our certified technicians ensure optimal
                            performance, reliability, and future-proof solutions for businesses across India.
                        </p>

                        <div class="service-highlights">
                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-certificate"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>Certified Installation</h5>
                                    <p>Industry-standard installation with proper certification</p>
                                </div>
                            </div>

                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>Quick Deployment</h5>
                                    <p>Fast and efficient installation with minimal downtime</p>
                                </div>
                            </div>

                            <div class="highlight-item">
                                <div class="highlight-icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div class="highlight-content">
                                    <h5>Quality Assurance</h5>
                                    <p>Comprehensive testing and 5-year warranty</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="service-image-container">
                        <div class="service-main-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/data-cabling.jpg" alt="Professional Data Cabling Installation" class="img-fluid">
                            <div class="image-overlay">
                                <div class="overlay-content">
                                    <h4>5+ Years</h4>
                                    <p>Industry Experience</p>
                                </div>
                            </div>
                        </div>

                        <div class="floating-stats">
                            <div class="stat-card">
                                <h3>500+</h3>
                                <p>Installations</p>
                            </div>
                            <div class="stat-card">
                                <h3>99.9%</h3>
                                <p>Uptime</p>
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
                <span class="section-badge">Our Expertise</span>
                <h2 class="section-title">Comprehensive Data Cabling Services</h2>
                <p class="section-description">
                    We offer complete structured cabling solutions from design to installation and maintenance,
                    ensuring your network infrastructure meets current and future requirements.
                </p>
            </div>

            <div class="row g-4">
                <!-- Cat 6 & Cat 6A Cabling -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/cat6.jpg" alt="Cat 6 & Cat 6A Cabling" class="img-fluid">
                        </div>
                        <h4>Cat 6 & Cat 6A Cabling</h4>
                        <p>High-performance copper cabling supporting up to 10 Gigabit Ethernet speeds for demanding applications.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Up to 10 Gbps data transmission</li>
                            <li><i class="fas fa-check"></i> 250-500 MHz bandwidth</li>
                            <li><i class="fas fa-check"></i> Future-proof infrastructure</li>
                            <li><i class="fas fa-check"></i> Reduced crosstalk and interference</li>
                        </ul>
                    </div>
                </div>

                <!-- Fiber Optic Installation -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/fibre-cable-optmic.jfif" alt="Fiber Optic Installation" class="img-fluid">
                        </div>
                        <h4>Fiber Optic Installation</h4>
                        <p>Advanced fiber optic cabling for high-speed, long-distance data transmission with superior reliability.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Single & Multi-mode fiber</li>
                            <li><i class="fas fa-check"></i> Up to 100 Gbps speeds</li>
                            <li><i class="fas fa-check"></i> Long-distance transmission</li>
                            <li><i class="fas fa-check"></i> Immune to electromagnetic interference</li>
                        </ul>
                    </div>
                </div>

                <!-- Network Infrastructure Design -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/network-infrastructure.jpg" alt="Fiber Optic Installation" class="img-fluid">
                        </div>
                        <h4>Network Infrastructure Design</h4>
                        <p>Custom network design and planning to optimize performance and ensure scalability for your business growth.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Site survey and assessment</li>
                            <li><i class="fas fa-check"></i> Custom network topology</li>
                            <li><i class="fas fa-check"></i> Scalable architecture</li>
                            <li><i class="fas fa-check"></i> Performance optimization</li>
                        </ul>
                    </div>
                </div>

                <!-- Cable Management Systems -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/cable-management.jpeg" alt="Fiber Optic Installation" class="img-fluid">
                        </div>
                        <h4>Cable Management Systems</h4>
                        <p>Professional cable management solutions including racks, trays, and pathways for organized installations.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Server rack installation</li>
                            <li><i class="fas fa-check"></i> Cable trays and conduits</li>
                            <li><i class="fas fa-check"></i> Patch panel organization</li>
                            <li><i class="fas fa-check"></i> Clean and accessible layout</li>
                        </ul>
                    </div>
                </div>

                <!-- Testing & Certification -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/testing.png" alt="Testing & Certification" class="img-fluid">
                        </div>
                        <h4>Testing & Certification</h4>
                        <p>Comprehensive testing and certification of all installations to ensure compliance with industry standards.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Performance verification</li>
                            <li><i class="fas fa-check"></i> Industry standard compliance</li>
                            <li><i class="fas fa-check"></i> Detailed test reports</li>
                            <li><i class="fas fa-check"></i> Warranty documentation</li>
                        </ul>
                    </div>
                </div>

                <!-- Maintenance & Support -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-detail-card">
                        <div class="service-image-small">
                            <img src="<?php echo $base_url; ?>assets/images/services/support.jfif" alt="Testing & Certification" class="img-fluid">
                        </div>
                        <h4>Maintenance & Support</h4>
                        <p>Ongoing maintenance and 24/7 support services to ensure your network infrastructure operates at peak performance.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> 24/7 technical support</li>
                            <li><i class="fas fa-check"></i> Preventive maintenance</li>
                            <li><i class="fas fa-check"></i> Emergency repairs</li>
                            <li><i class="fas fa-check"></i> Performance monitoring</li>
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
                <h2 class="section-title">Industry Standards & Specifications</h2>
                <p class="section-description">
                    Our installations meet and exceed international standards, ensuring optimal performance and reliability.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="tech-specs-card">
                        <h4><i class="fas fa-ethernet me-2"></i>Copper Cabling Standards</h4>
                        <div class="specs-table">
                            <div class="spec-row">
                                <span class="spec-label">Category 6 (Cat6)</span>
                                <span class="spec-value">250 MHz, 1 Gbps</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Category 6A (Cat6A)</span>
                                <span class="spec-value">500 MHz, 10 Gbps</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Maximum Distance</span>
                                <span class="spec-value">100 meters</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Compliance</span>
                                <span class="spec-value">TIA/EIA-568, ISO/IEC 11801</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="tech-specs-card">
                        <h4><i class="fas fa-project-diagram me-2"></i>Fiber Optic Standards</h4>
                        <div class="specs-table">
                            <div class="spec-row">
                                <span class="spec-label">Single-mode Fiber</span>
                                <span class="spec-value">Up to 100 Gbps, 40+ km</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Multi-mode Fiber</span>
                                <span class="spec-value">Up to 100 Gbps, 2 km</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Connector Types</span>
                                <span class="spec-value">LC, SC, ST, MTP/MPO</span>
                            </div>
                            <div class="spec-row">
                                <span class="spec-label">Compliance</span>
                                <span class="spec-value">ITU-T, IEC, TIA/EIA</span>
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
                <h2 class="section-title">Professional Installation Workflow</h2>
                <p class="section-description">
                    Our systematic approach ensures quality installation and optimal performance of your data cabling infrastructure.
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
                            <h5>Site Survey</h5>
                            <p>Comprehensive assessment of your facility to understand requirements and plan optimal cable routes.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="process-step">
                            <div class="step-number">02</div>
                            <div class="step-icon">
                                <i class="fas fa-drafting-compass"></i>
                            </div>
                            <h5>Design & Planning</h5>
                            <p>Custom network design with detailed drawings, specifications, and material requirements.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="process-step">
                            <div class="step-number">03</div>
                            <div class="step-icon">
                                <i class="fas fa-hard-hat"></i>
                            </div>
                            <h5>Professional Installation</h5>
                            <p>Expert installation by certified technicians using industry-standard tools and techniques.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="process-step">
                            <div class="step-number">04</div>
                            <div class="step-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <h5>Testing & Certification</h5>
                            <p>Comprehensive testing and certification with detailed reports and warranty documentation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INDUSTRIES SERVED SECTION -->
    <section class="section bg-white">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge">Industries We Serve</span>
                <h2 class="section-title">Trusted Across Multiple Sectors</h2>
                <p class="section-description">
                    Our data cabling solutions serve diverse industries with customized approaches for each sector's unique requirements.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/offices.avif" alt="Corporate Offices" class="img-fluid">
                        </div>
                        <h5>Corporate Offices</h5>
                        <p>High-performance networks for modern office environments and business operations.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/educational-instituions.jpg" alt="Educational Institutions" class="img-fluid">
                        </div>
                        <h5>Educational Institutions</h5>
                        <p>Reliable network infrastructure for schools, colleges, and training centers.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/health.jpg" alt="Educational Institutions" class="img-fluid">
                        </div>
                        <h5>Healthcare Facilities</h5>
                        <p>Mission-critical networking for hospitals and medical facilities.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/manufacturing.jpg" alt="Educational Institutions" class="img-fluid">
                        </div>
                        <h5>Manufacturing</h5>
                        <p>Industrial-grade cabling solutions for manufacturing and production facilities.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/hospitality.jpg" alt="Educational Institutions" class="img-fluid">
                        </div>
                        <h5>Hospitality</h5>
                        <p>Guest and operational networks for hotels, restaurants, and entertainment venues.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/retail.jpg" alt="Educational Institutions" class="img-fluid">
                        </div>
                        <h5>Retail</h5>
                        <p>Point-of-sale and inventory management networks for retail operations.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/government.jpg" alt="Government" class="img-fluid">
                        </div>
                        <h5>Government</h5>
                        <p>Secure and reliable networks for government offices and public institutions.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="industry-card">
                        <div class="industry-image">
                            <img src="<?php echo $base_url; ?>assets/images/services/warehouse.jpg" alt="Government" class="img-fluid">
                        </div>
                        <h5>Warehousing</h5>
                        <p>Logistics and inventory management networks for distribution centers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US SECTION -->
    <section class="section section-alt">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge">Why Choose RD Electronics</span>
                <h2 class="section-title">Your Trusted Data Cabling Partner</h2>
                <p class="section-description">
                    With 5+ years of experience and 500+ successful installations, we deliver excellence in every project.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h5>Certified Professionals</h5>
                        <p>Our team consists of certified technicians with extensive experience in structured cabling systems.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h5>Quality Materials</h5>
                        <p>We use only premium-grade cables and components from trusted manufacturers for long-lasting performance.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h5>Timely Completion</h5>
                        <p>Projects completed on schedule with minimal disruption to your business operations.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h5>5-Year Warranty</h5>
                        <p>Comprehensive warranty coverage on all installations with ongoing support and maintenance.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h5>24/7 Support</h5>
                        <p>Round-the-clock technical support and emergency response for critical network issues.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-rupee-sign"></i>
                        </div>
                        <h5>Competitive Pricing</h5>
                        <p>Transparent pricing with no hidden costs and flexible payment options for all project sizes.</p>
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
                            <h2>Ready to Upgrade Your Network Infrastructure?</h2>
                            <p>Contact RD Electronics today for professional data cabling solutions that will future-proof your business network. Get a free consultation and detailed quote for your project.</p>
                            <div class="cta-features">
                                <div class="cta-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Free Site Survey & Consultation</span>
                                </div>
                                <div class="cta-feature">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Detailed Project Quote</span>
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

    <?php include_once '../common/footer.php'; ?>
</body>

</html>
