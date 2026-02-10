<!DOCTYPE html>
<html lang="en">
<?php include_once "../common/head.php" ?>
<body>
    <?php include_once "../common/header.php" ?>
    <!-- ======================================= -->

    <section class="breadcrumb-section panel-installation-breadcrumb">
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
                        <li class="breadcrumb-item active" aria-current="page">Panel & DB Installation</li>
                    </ol>
                </nav>
                <h1 class="page-title">Panel & DB Installation</h1>
                <p class="page-subtitle">Professional electrical panel and distribution board installation services for safe power distribution across India</p>
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
                    <span class="section-badge">Power Distribution Excellence</span>
                    <h2 class="section-title">Professional Panel & DB Installation</h2>
                    <p class="section-description">
                        RD Electronics provides expert electrical panel and distribution board installation services. 
                        Our certified electricians ensure safe, code-compliant power distribution systems with 
                        proper load balancing and circuit protection for reliable electrical supply.
                    </p>
                    
                    <div class="service-highlights">
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="highlight-content">
                                <h5>Safety Compliant</h5>
                                <p>Code-compliant installations with safety standards</p>
                            </div>
                        </div>
                        
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            <div class="highlight-content">
                                <h5>Load Balancing</h5>
                                <p>Proper load distribution and circuit protection</p>
                            </div>
                        </div>
                        
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="fas fa-tools"></i>
                            </div>
                            <div class="highlight-content">
                                <h5>Expert Installation</h5>
                                <p>Professional installation by certified electricians</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="service-image-container">
                    <div class="service-main-image">
                        <img src="<?php echo $base_url; ?>assets/images/services/panel.jpeg" alt="Professional Panel & DB Installation" class="img-fluid">
                        <div class="image-overlay">
                            <div class="overlay-content">
                                <h4>150+</h4>
                                <p>Panel Installs</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="floating-stats">
                        <div class="stat-card">
                            <h3>100%</h3>
                            <p>Compliant</p>
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
            <span class="section-badge">Our Panel Services</span>
            <h2 class="section-title">Comprehensive Panel & DB Solutions</h2>
            <p class="section-description">
                From residential main panels to industrial distribution boards, we provide complete 
                electrical panel solutions with professional installation and safety compliance.
            </p>
        </div>
        
        <div class="row g-4">
            <!-- Main Electrical Panels -->
            <div class="col-lg-4 col-md-6">
                <div class="service-detail-card">
                    <div class="service-image-small">
                        <img src="<?php echo $base_url; ?>assets/images/services/main-panel.jpg" alt="Main Electrical Panels" class="img-fluid">
                    </div>
                    <h4>Main Electrical Panels</h4>
                    <p>Complete main electrical panel installation with proper sizing, circuit breakers, and safety features.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> 100A to 400A panels</li>
                        <li><i class="fas fa-check"></i> Circuit breaker installation</li>
                        <li><i class="fas fa-check"></i> GFCI/AFCI protection</li>
                        <li><i class="fas fa-check"></i> Surge protection</li>
                    </ul>
                </div>
            </div>
            
            <!-- Sub-Panel Installation -->
            <div class="col-lg-4 col-md-6">
                <div class="service-detail-card">
                    <div class="service-image-small">
                        <img src="<?php echo $base_url; ?>assets/images/services/sub-panel.jpg" alt="Main Electrical Panels" class="img-fluid">
                    </div>
                    <h4>Sub-Panel Installation</h4>
                    <p>Professional sub-panel installation for additional circuits and power distribution to specific areas.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Load center sub-panels</li>
                        <li><i class="fas fa-check"></i> Proper feeder sizing</li>
                        <li><i class="fas fa-check"></i> Code-compliant installation</li>
                        <li><i class="fas fa-check"></i> Safety disconnects</li>
                    </ul>
                </div>
            </div>
            
            <!-- Distribution Boards -->
            <div class="col-lg-4 col-md-6">
                <div class="service-detail-card">
                    <div class="service-image-small">
                        <img src="<?php echo $base_url; ?>assets/images/services/db.jfif" alt="Main Electrical Panels" class="img-fluid">
                    </div>
                    <h4>Distribution Boards (DB)</h4>
                    <p>Commercial and industrial distribution board installation with proper load distribution and protection.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Three-phase distribution</li>
                        <li><i class="fas fa-check"></i> Motor control centers</li>
                        <li><i class="fas fa-check"></i> Industrial switchgear</li>
                        <li><i class="fas fa-check"></i> Power monitoring</li>
                    </ul>
                </div>
            </div>
            
            <!-- Panel Upgrades -->
            <div class="col-lg-4 col-md-6">
                <div class="service-detail-card">
                    <div class="service-icon">
                        <i class="fas fa-arrow-up"></i>
                    </div>
                    <h4>Panel Upgrades</h4>
                    <p>Electrical panel upgrades to increase capacity, improve safety, and meet current electrical codes.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Capacity upgrades</li>
                        <li><i class="fas fa-check"></i> Code compliance updates</li>
                        <li><i class="fas fa-check"></i> Safety improvements</li>
                        <li><i class="fas fa-check"></i> Modern breaker technology</li>
                    </ul>
                </div>
            </div>
            
            <!-- Control Panels -->
            <div class="col-lg-4 col-md-6">
                <div class="service-detail-card">
                    <div class="service-icon">
                        <i class="fas fa-sliders-h"></i>
                    </div>
                    <h4>Control Panels</h4>
                    <p>Custom control panel fabrication and installation for industrial automation and process control.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> PLC control panels</li>
                        <li><i class="fas fa-check"></i> Motor control panels</li>
                        <li><i class="fas fa-check"></i> Process control systems</li>
                        <li><i class="fas fa-check"></i> HMI integration</li>
                    </ul>
                </div>
            </div>
            
            <!-- Panel Maintenance -->
            <div class="col-lg-4 col-md-6">
                <div class="service-detail-card">
                    <div class="service-icon">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <h4>Panel Maintenance</h4>
                    <p>Regular maintenance and inspection services to ensure optimal panel performance and safety.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Preventive maintenance</li>
                        <li><i class="fas fa-check"></i> Thermal imaging inspection</li>
                        <li><i class="fas fa-check"></i> Connection tightening</li>
                        <li><i class="fas fa-check"></i> Performance testing</li>
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
            <h2 class="section-title">Panel & DB Technical Specifications</h2>
            <p class="section-description">
                Our panel installations meet and exceed electrical codes and industry standards for safe power distribution.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="tech-specs-card">
                    <h4><i class="fas fa-bolt me-2"></i>Panel Specifications</h4>
                    <div class="specs-table">
                        <div class="spec-row">
                            <span class="spec-label">Amperage Range</span>
                            <span class="spec-value">100A to 400A</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-label">Voltage Ratings</span>
                            <span class="spec-value">120/240V, 208/120V, 480/277V</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-label">Circuit Capacity</span>
                            <span class="spec-value">12 to 42 circuits</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-label">Enclosure Rating</span>
                            <span class="spec-value">NEMA 1, 3R, 4X</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="tech-specs-card">
                    <h4><i class="fas fa-shield-alt me-2"></i>Safety Features</h4>
                    <div class="specs-table">
                        <div class="spec-row">
                            <span class="spec-label">Arc Fault Protection</span>
                            <span class="spec-value">AFCI breakers</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-label">Ground Fault Protection</span>
                            <span class="spec-value">GFCI breakers</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-label">Surge Protection</span>
                            <span class="spec-value">Type 2 SPD devices</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-label">Code Compliance</span>
                            <span class="spec-value">NEC, UL Listed</span>
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
            <h2 class="section-title">Professional Panel Installation Process</h2>
            <p class="section-description">
                Our systematic approach ensures safe, code-compliant panel installations with proper load calculations and safety features.
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
                        <h5>Load Calculation</h5>
                        <p>Comprehensive electrical load analysis to determine proper panel sizing and capacity requirements.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="process-step">
                        <div class="step-number">02</div>
                        <div class="step-icon">
                            <i class="fas fa-drafting-compass"></i>
                        </div>
                        <h5>Panel Design</h5>
                        <p>Custom panel layout design with circuit organization and safety feature specifications.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="process-step">
                        <div class="step-number">03</div>
                        <div class="step-icon">
                            <i class="fas fa-hard-hat"></i>
                        </div>
                        <h5>Professional Installation</h5>
                        <p>Expert panel installation with proper mounting, wiring, and circuit breaker configuration.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="process-step">
                        <div class="step-number">04</div>
                        <div class="step-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h5>Testing & Certification</h5>
                        <p>Complete system testing, load verification, and official inspection for code compliance.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PANEL TYPES SECTION -->
<section class="section bg-white">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">Panel Types</span>
            <h2 class="section-title">Comprehensive Panel Solutions</h2>
            <p class="section-description">
                We install and service all types of electrical panels and distribution boards for various applications.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h5>Residential Panels</h5>
                    <p>Main service panels and load centers for homes with proper circuit organization and safety features.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h5>Commercial Panels</h5>
                    <p>Three-phase panels and distribution boards for office buildings and commercial facilities.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h5>Industrial Panels</h5>
                    <p>Heavy-duty switchgear and motor control centers for industrial and manufacturing applications.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <h5>Smart Panels</h5>
                    <p>Intelligent panels with monitoring capabilities, energy management, and remote control features.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-sun"></i>
                    </div>
                    <h5>Solar Panels</h5>
                    <p>Solar-ready panels with DC disconnects, inverter connections, and net metering capabilities.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h5>Generator Panels</h5>
                    <p>Transfer switches and generator connection panels for backup power systems and emergency supply.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-water"></i>
                    </div>
                    <h5>Outdoor Panels</h5>
                    <p>Weather-resistant outdoor panels with NEMA 3R/4X enclosures for exterior installations.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h5>Custom Panels</h5>
                    <p>Custom-designed panels and control systems for specialized applications and unique requirements.</p>
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
            <h2 class="section-title">Panel Installation Across Multiple Sectors</h2>
            <p class="section-description">
                Our panel installation expertise serves diverse industries with specialized solutions for each sector's power distribution needs.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="industry-card">
                    <div class="industry-image">
                        <img src="<?php echo $base_url; ?>assets/images/services/residential.jfif" alt="Residential" class="img-fluid">
                    </div>
                    <h5>Residential</h5>
                    <p>Home electrical panels, service upgrades, and sub-panel installations for safe power distribution.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="industry-card">
                    <div class="industry-image">
                        <img src="<?php echo $base_url; ?>assets/images/services/commercial-building.webp" alt="Commercial" class="img-fluid">
                    </div>
                    <h5>Commercial</h5>
                    <p>Office buildings, retail spaces, and commercial facilities with professional power distribution systems.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="industry-card">
                    <div class="industry-image">
                        <img src="<?php echo $base_url; ?>assets/images/services/manufacturing.jpg" alt="Industrial" class="img-fluid">
                    </div>
                    <h5>Industrial</h5>
                    <p>Manufacturing plants and industrial facilities with heavy-duty switchgear and motor control centers.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="industry-card">
                    <div class="industry-image">
                        <img src="<?php echo $base_url; ?>assets/images/services/healthcare.webp" alt="Healthcare" class="img-fluid">
                    </div>
                    <h5>Healthcare</h5>
                    <p>Hospitals and medical facilities with critical power panels and emergency backup systems.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="industry-card">
                    <div class="industry-image">
                        <img src="<?php echo $base_url; ?>assets/images/services/educational-instituions.jpg" alt="Education" class="img-fluid">
                    </div>
                    <h5>Education</h5>
                    <p>Schools, colleges, and educational institutions with safe and reliable electrical distribution systems.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="industry-card">
                    <div class="industry-image">
                        <img src="<?php echo $base_url; ?>assets/images/services/hospitality.jpg" alt="Hospitality" class="img-fluid">
                    </div>
                    <h5>Hospitality</h5>
                    <p>Hotels, restaurants, and hospitality venues with efficient power distribution and load management.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="industry-card">
                    <div class="industry-image">
                        <img src="<?php echo $base_url; ?>assets/images/services/retail.jpg" alt="Retail" class="img-fluid">
                    </div>
                    <h5>Retail</h5>
                    <p>Shopping centers and retail stores with flexible power distribution for lighting and equipment.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="industry-card">
                    <div class="industry-icon">
                        <i class="fas fa-warehouse"></i>
                    </div>
                    <h5>Data Centers</h5>
                    <p>Mission-critical data centers with redundant power distribution and uninterruptible power systems.</p>
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
            <h2 class="section-title">Your Trusted Panel Installation Partner</h2>
            <p class="section-description">
                With 150+ panel installations completed and certified expertise, we deliver safe and reliable power distribution solutions.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h5>Licensed Electricians</h5>
                    <p>Our panel installation specialists are licensed, certified, and trained in the latest electrical codes and practices.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h5>Code Compliance</h5>
                    <p>Full compliance with NEC, local electrical codes, and safety standards for secure installations.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h5>Quality Components</h5>
                    <p>We use only premium-grade panels, breakers, and components from trusted manufacturers.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <h5>Proper Load Calculations</h5>
                    <p>Accurate load calculations and panel sizing to ensure safe and efficient power distribution.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h5>5-Year Warranty</h5>
                    <p>Comprehensive warranty coverage on all panel installations and electrical work with ongoing support.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h5>24/7 Emergency Service</h5>
                    <p>Round-the-clock emergency panel services for urgent electrical issues and power restoration.</p>
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
                        <h2>Need Professional Panel & DB Installation Services?</h2>
                        <p>Contact RD Electronics today for expert electrical panel and distribution board installations that ensure safe, reliable power distribution. Get a free load calculation and detailed quote for your project.</p>
                        <div class="cta-features">
                            <div class="cta-feature">
                                <i class="fas fa-check-circle"></i>
                                <span>Free Load Calculation</span>
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

<!-- ================================================== -->
 <?php include_once "../common/footer.php"; ?>

</body>
</html>
