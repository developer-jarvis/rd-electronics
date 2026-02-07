<!DOCTYPE html>
<html lang="en">
<?php include_once 'common/head.php'; ?>

<body>
    <?php include_once 'common/header.php'; ?>

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
                        <li class="breadcrumb-item active" aria-current="page">Our Services</li>
                    </ol>
                </nav>
                <h1 class="page-title">Our Services</h1>
                <p class="page-subtitle">Professional IT Networking & Electrical Solutions for Your Business</p>
            </div>
            <div class="col-md-4 text-end">
                <div class="breadcrumb-actions">
                    <a href="tel:8744940446" class="btn btn-primary btn-sm me-2">
                        <i class="fas fa-phone"></i>
                        <span>Call Now</span>
                    </a>
                    <a href="https://wa.me/918744940446" target="_blank" class="btn btn-outline-primary btn-sm">
                        <i class="fab fa-whatsapp text-white"></i>
                        <span class="text-white">WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES OVERVIEW SECTION -->
<section class="section bg-white">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">What We Offer</span>
            <h2 class="section-title" style="color: var(--rd-primary-blue);">Comprehensive IT & Electrical Services</h2>
            <p class="section-description" style="color: var(--rd-medium-gray);">
                From data cabling to electrical installations, we provide end-to-end solutions for businesses across India
            </p>
        </div>

        <div class="row g-4">
            <!-- IT Networking Services -->
            <div class="col-lg-6">
                <div class="service-category-card">
                    <div class="category-header">
                        <i class="fas fa-network-wired"></i>
                        <h3 style="color: var(--rd-primary-blue);">IT Networking Services</h3>
                    </div>
                    <div class="category-services">
                        <a href="<?php echo $base_url; ?>services/data-cabling.php" class="service-link">
                            <i class="fas fa-ethernet"></i>
                            <div class="service-link-content">
                                <h5>Data Cabling Work</h5>
                                <p>Professional structured cabling solutions</p>
                            </div>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="<?php echo $base_url; ?>services/cctv.php" class="service-link">
                            <i class="fas fa-video"></i>
                            <div class="service-link-content">
                                <h5>CCTV Security & Surveillance</h5>
                                <p>Advanced security camera systems</p>
                            </div>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="<?php echo $base_url; ?>services/fibre-splicing.php" class="service-link">
                            <i class="fas fa-project-diagram"></i>
                            <div class="service-link-content">
                                <h5>Fibre Cable Splicing</h5>
                                <p>Expert fiber optic installation</p>
                            </div>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="<?php echo $base_url; ?>services/otdr-testing.php" class="service-link">
                            <i class="fas fa-search-plus"></i>
                            <div class="service-link-content">
                                <h5>OTDR Testing Services</h5>
                                <p>Comprehensive fiber testing</p>
                            </div>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="<?php echo $base_url; ?>services/audio-video.php" class="service-link">
                            <i class="fas fa-volume-up"></i>
                            <div class="service-link-content">
                                <h5>Audio & Video Solutions</h5>
                                <p>Professional AV system integration</p>
                            </div>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="<?php echo $base_url; ?>services/fire-alarm.php" class="service-link">
                            <i class="fas fa-fire-extinguisher"></i>
                            <div class="service-link-content">
                                <h5>Fire Alarm Systems</h5>
                                <p>Life safety and fire detection</p>
                            </div>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Electrical Services -->
            <div class="col-lg-6">
                <div class="service-category-card">
                    <div class="category-header">
                        <i class="fas fa-bolt"></i>
                        <h3 style="color: var(--rd-primary-blue);">Electrical Services</h3>
                    </div>
                    <div class="category-services">
                        <a href="<?php echo $base_url; ?>services/electrical-wiring.php" class="service-link">
                            <i class="fas fa-plug"></i>
                            <div class="service-link-content">
                                <h5>Electrical Wiring</h5>
                                <p>Complete wiring and installation</p>
                            </div>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="<?php echo $base_url; ?>services/panel-installation.php" class="service-link">
                            <i class="fas fa-tools"></i>
                            <div class="service-link-content">
                                <h5>Panel / DB Installation</h5>
                                <p>Distribution board setup</p>
                            </div>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="<?php echo $base_url; ?>services/ups-inverter.php" class="service-link">
                            <i class="fas fa-battery-full"></i>
                            <div class="service-link-content">
                                <h5>UPS & Inverter Solutions</h5>
                                <p>Backup power systems</p>
                            </div>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="<?php echo $base_url; ?>services/electrical-testing.php" class="service-link">
                            <i class="fas fa-check-circle"></i>
                            <div class="service-link-content">
                                <h5>Electrical Testing</h5>
                                <p>Safety testing and commissioning</p>
                            </div>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Manpower Services -->
            <div class="col-lg-12">
                <div class="service-category-card">
                    <div class="category-header">
                        <i class="fas fa-users"></i>
                        <h3 style="color: var(--rd-primary-blue);">Manpower Services</h3>
                    </div>
                    <div class="category-services">
                        <a href="<?php echo $base_url; ?>services/manpower-supply.php" class="service-link">
                            <i class="fas fa-user-hard-hat"></i>
                            <div class="service-link-content">
                                <h5>Technical Manpower Supply</h5>
                                <p>Skilled technicians and engineers for your projects</p>
                            </div>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US SECTION -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">Why Choose Us</span>
            <h2 class="section-title" style="color: var(--rd-primary-blue);">Your Trusted Service Partner</h2>
            <p class="section-description" style="color: var(--rd-medium-gray);">
                We deliver excellence through quality workmanship, professional service, and customer satisfaction
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h5 style="color: var(--rd-primary-blue);">5+ Years Experience</h5>
                    <p style="color: var(--rd-medium-gray);">Proven track record in IT and electrical services</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <h5 style="color: var(--rd-primary-blue);">Expert Team</h5>
                    <p style="color: var(--rd-medium-gray);">Certified and experienced technicians</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h5 style="color: var(--rd-primary-blue);">Quality Assurance</h5>
                    <p style="color: var(--rd-medium-gray);">Premium materials and workmanship guarantee</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h5 style="color: var(--rd-primary-blue);">24/7 Support</h5>
                    <p style="color: var(--rd-medium-gray);">Round-the-clock customer assistance</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- INDUSTRIES WE SERVE SECTION -->
<section class="section bg-white">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">Industries We Serve</span>
            <h2 class="section-title" style="color: var(--rd-primary-blue);">Serving Diverse Sectors</h2>
            <p class="section-description" style="color: var(--rd-medium-gray);">
                Our expertise spans across multiple industries with customized solutions
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="industry-card">
                    <div class="industry-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h5 style="color: var(--rd-primary-blue);">Commercial</h5>
                    <p style="color: var(--rd-medium-gray);">Offices, retail spaces, and commercial buildings</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="industry-card">
                    <div class="industry-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h5 style="color: var(--rd-primary-blue);">Industrial</h5>
                    <p style="color: var(--rd-medium-gray);">Manufacturing plants and industrial facilities</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="industry-card">
                    <div class="industry-icon">
                        <i class="fas fa-landmark"></i>
                    </div>
                    <h5 style="color: var(--rd-primary-blue);">Government</h5>
                    <p style="color: var(--rd-medium-gray);">Government offices and public institutions</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="industry-card">
                    <div class="industry-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h5 style="color: var(--rd-primary-blue);">Educational</h5>
                    <p style="color: var(--rd-medium-gray);">Schools, colleges, and universities</p>
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
                        <h2 style="color: var(--rd-primary-blue);">Ready to Start Your Project?</h2>
                        <p style="color: var(--rd-medium-gray);">Get in touch with our expert team today for a free consultation and customized solution for your electrical and IT infrastructure needs.</p>
                        <div class="cta-features">
                            <div class="cta-feature">
                                <i class="fas fa-check-circle"></i>
                                <span style="color: var(--rd-primary-blue);">Free Consultation</span>
                            </div>
                            <div class="cta-feature">
                                <i class="fas fa-check-circle"></i>
                                <span style="color: var(--rd-primary-blue);">Competitive Pricing</span>
                            </div>
                            <div class="cta-feature">
                                <i class="fas fa-check-circle"></i>
                                <span style="color: var(--rd-primary-blue);">Quality Guarantee</span>
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
                        <a href="<?php echo $base_url; ?>contact.php" class="btn btn-secondary btn-lg">
                            <i class="fas fa-envelope"></i>
                            <span>Get Quote</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once 'common/footer.php'; ?>
</body>
</html>