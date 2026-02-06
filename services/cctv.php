<!DOCTYPE html>
<html lang="en">
<?php include_once '../common/head.php'; ?>
<body>
   <?php include_once '../common/header.php'; ?>
<!-- BREADCRUMB SECTION -->
<section class="breadcrumb-section cctv-breadcrumb">
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
                        <li class="breadcrumb-item active" aria-current="page">CCTV Security & Surveillance</li>
                    </ol>
                </nav>
                <h1 class="page-title">CCTV Security & Surveillance</h1>
                <p class="page-subtitle">Advanced security systems for complete protection and peace of mind across India</p>
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
                    <span class="section-badge">Security Excellence</span>
                    <h2 class="section-title">Professional CCTV Security Solutions</h2>
                    <p class="section-description">
                        RD Electronics provides comprehensive CCTV security and surveillance systems designed to protect 
                        your property, assets, and people. Our advanced security solutions offer 24/7 monitoring, 
                        high-definition recording, and remote access capabilities for complete peace of mind.
                    </p>
                    
                    <div class="service-highlights">
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="highlight-content">
                                <h5>24/7 Protection</h5>
                                <p>Round-the-clock surveillance and monitoring</p>
                            </div>
                        </div>
                        
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                            <div class="highlight-content">
                                <h5>HD Video Quality</h5>
                                <p>Crystal clear 4K and Full HD recording</p>
                            </div>
                        </div>
                        
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="highlight-content">
                                <h5>Remote Access</h5>
                                <p>Monitor from anywhere via mobile app</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="service-image-container">
                    <div class="service-main-image">
                        <img src="<?php echo $base_url; ?>assets/images/services/cctv.jpg" alt="Professional CCTV Security Installation" class="img-fluid">
                        <div class="image-overlay">
                            <div class="overlay-content">
                                <h4>300+</h4>
                                <p>Security Systems</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="floating-stats">
                        <div class="stat-card">
                            <h3>24/7</h3>
                            <p>Monitoring</p>
                        </div>
                        <div class="stat-card">
                            <h3>4K</h3>
                            <p>HD Quality</p>
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
            <span class="section-badge">Our Security Solutions</span>
            <h2 class="section-title">Comprehensive CCTV & Surveillance Services</h2>
            <p class="section-description">
                From basic home security to enterprise-level surveillance systems, we provide complete 
                CCTV solutions tailored to your specific security requirements.
            </p>
        </div>
        
        <div class="row g-4">
            <!-- IP Camera Systems -->
            <div class="col-lg-4 col-md-6">
                <div class="service-detail-card">
                    <div class="service-image-small">
                        <img src="<?php echo $base_url; ?>assets/images/services/ip-camera.jpg" alt="IP Camera Systems" class="img-fluid">
                    </div>
                    <h4>IP Camera Systems</h4>
                    <p>Advanced IP cameras with high-definition recording, night vision, and smart analytics for superior surveillance.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> 4K Ultra HD resolution</li>
                        <li><i class="fas fa-check"></i> Night vision capability</li>
                        <li><i class="fas fa-check"></i> Motion detection alerts</li>
                        <li><i class="fas fa-check"></i> Weather-resistant design</li>
                    </ul>
                </div>
            </div>
            
            <!-- DVR/NVR Systems -->
            <div class="col-lg-4 col-md-6">
                <div class="service-detail-card">
                    <div class="service-image-small">
                        <img src="<?php echo $base_url; ?>assets/images/services/dvr.webp" alt="IP Camera Systems" class="img-fluid">
                    </div>
                    <h4>DVR/NVR Recording Systems</h4>
                    <p>Professional recording systems with large storage capacity, backup options, and remote access capabilities.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Multi-channel recording</li>
                        <li><i class="fas fa-check"></i> Cloud backup options</li>
                        <li><i class="fas fa-check"></i> Remote playback access</li>
                        <li><i class="fas fa-check"></i> Automatic overwrite protection</li>
                    </ul>
                </div>
            </div>
            
            <!-- Wireless Security Systems -->
            <div class="col-lg-4 col-md-6">
                <div class="service-detail-card">
                    <div class="service-image-small">
                        <img src="<?php echo $base_url; ?>assets/images/services/wireless.jpg" alt="IP Camera Systems" class="img-fluid">
                    </div>
                    <h4>Wireless Security Systems</h4>
                    <p>Cable-free security solutions perfect for locations where wiring is challenging or not feasible.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Easy installation</li>
                        <li><i class="fas fa-check"></i> Battery backup options</li>
                        <li><i class="fas fa-check"></i> Solar power compatibility</li>
                        <li><i class="fas fa-check"></i> Expandable system design</li>
                    </ul>
                </div>
            </div>
            
            <!-- Access Control Integration -->
            <div class="col-lg-4 col-md-6">
                <div class="service-detail-card">
                    <div class="service-image-small">
                        <img src="<?php echo $base_url; ?>assets/images/services/biometric.jpeg" alt="IP Camera Systems" class="img-fluid">
                    </div>
                    <h4>Access Control Integration</h4>
                    <p>Integrated security systems combining CCTV with access control for comprehensive facility management.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Biometric access control</li>
                        <li><i class="fas fa-check"></i> Card reader integration</li>
                        <li><i class="fas fa-check"></i> Time attendance tracking</li>
                        <li><i class="fas fa-check"></i> Visitor management system</li>
                    </ul>
                </div>
            </div>
            
            <!-- Mobile Monitoring -->
            <div class="col-lg-4 col-md-6">
                <div class="service-detail-card">
                    <div class="service-image-small">
                        <img src="<?php echo $base_url; ?>assets/images/services/mobile-monitoring.jfif" alt="IP Camera Systems" class="img-fluid">
                    </div>
                    <h4>Mobile Monitoring Apps</h4>
                    <p>Dedicated mobile applications for real-time monitoring, alerts, and system control from anywhere.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Live video streaming</li>
                        <li><i class="fas fa-check"></i> Push notifications</li>
                        <li><i class="fas fa-check"></i> Two-way audio communication</li>
                        <li><i class="fas fa-check"></i> Multi-device support</li>
                    </ul>
                </div>
            </div>
            
            <!-- Maintenance & Support -->
            <div class="col-lg-4 col-md-6">
                <div class="service-detail-card">
                    <div class="service-image-small">
                        <img src="<?php echo $base_url; ?>assets/images/services/maintenence.jfif" alt="IP Camera Systems" class="img-fluid">
                    </div>
                    <h4>Maintenance & Support</h4>
                    <p>Comprehensive maintenance services and technical support to ensure your security system operates flawlessly.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Regular system health checks</li>
                        <li><i class="fas fa-check"></i> Software updates</li>
                        <li><i class="fas fa-check"></i> Emergency repair services</li>
                        <li><i class="fas fa-check"></i> Annual maintenance contracts</li>
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
            <h2 class="section-title">Advanced Security Technology</h2>
            <p class="section-description">
                Our CCTV systems utilize the latest technology and meet international security standards for optimal performance.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="tech-specs-card">
                    <h4><i class="fas fa-video me-2"></i>Camera Specifications</h4>
                    <div class="specs-table">
                        <div class="spec-row">
                            <span class="spec-label">Resolution</span>
                            <span class="spec-value">4K Ultra HD (3840x2160)</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-label">Night Vision</span>
                            <span class="spec-value">Up to 100 meters</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-label">Viewing Angle</span>
                            <span class="spec-value">90° - 180° wide angle</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-label">Weather Rating</span>
                            <span class="spec-value">IP66/IP67 waterproof</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="tech-specs-card">
                    <h4><i class="fas fa-server me-2"></i>Recording Systems</h4>
                    <div class="specs-table">
                        <div class="spec-row">
                            <span class="spec-label">Storage Capacity</span>
                            <span class="spec-value">Up to 64TB per system</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-label">Recording Channels</span>
                            <span class="spec-value">4, 8, 16, 32, 64 channels</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-label">Backup Options</span>
                            <span class="spec-value">Cloud, USB, Network</span>
                        </div>
                        <div class="spec-row">
                            <span class="spec-label">Remote Access</span>
                            <span class="spec-value">Web, Mobile, Desktop</span>
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
            <h2 class="section-title">Professional Security Installation Process</h2>
            <p class="section-description">
                Our systematic approach ensures optimal camera placement, reliable recording, and seamless integration.
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
                        <h5>Security Assessment</h5>
                        <p>Comprehensive site survey to identify security vulnerabilities and optimal camera locations.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="process-step">
                        <div class="step-number">02</div>
                        <div class="step-icon">
                            <i class="fas fa-drafting-compass"></i>
                        </div>
                        <h5>System Design</h5>
                        <p>Custom security system design with camera placement plan and equipment specifications.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="process-step">
                        <div class="step-number">03</div>
                        <div class="step-icon">
                            <i class="fas fa-hard-hat"></i>
                        </div>
                        <h5>Professional Installation</h5>
                        <p>Expert installation with proper cable management, weatherproofing, and system configuration.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="process-step">
                        <div class="step-number">04</div>
                        <div class="step-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h5>Testing & Training</h5>
                        <p>Complete system testing, user training, and documentation handover with warranty.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECURITY FEATURES SECTION -->
<section class="section bg-white">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">Advanced Features</span>
            <h2 class="section-title">Smart Security Technologies</h2>
            <p class="section-description">
                Our CCTV systems include intelligent features that enhance security effectiveness and reduce false alarms.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h5>AI Motion Detection</h5>
                    <p>Intelligent motion detection that distinguishes between people, vehicles, and animals.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <h5>Facial Recognition</h5>
                    <p>Advanced facial recognition technology for access control and visitor identification.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-bell"></i>
                    </div>
                    <h5>Smart Alerts</h5>
                    <p>Instant notifications via email, SMS, and mobile app for security events.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h5>Cloud Storage</h5>
                    <p>Secure cloud backup ensures your recordings are safe even if local storage fails.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-moon"></i>
                    </div>
                    <h5>Night Vision</h5>
                    <p>Crystal clear recording in complete darkness with infrared technology.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-volume-up"></i>
                    </div>
                    <h5>Two-Way Audio</h5>
                    <p>Built-in microphones and speakers for real-time communication through cameras.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-virus"></i>
                    </div>
                    <h5>Cybersecurity</h5>
                    <p>Advanced encryption and security protocols to protect against cyber threats.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </div>
                    <h5>PTZ Control</h5>
                    <p>Pan, tilt, and zoom capabilities for comprehensive area coverage and tracking.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- INDUSTRIES SERVED SECTION -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">Industries We Secure</span>
            <h2 class="section-title">Trusted Security Solutions Across Sectors</h2>
            <p class="section-description">
                Our CCTV systems protect diverse industries with customized security approaches for each sector's unique requirements.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="industry-card">
                    <div class="industry-image">
                        <img src="<?php echo $base_url; ?>assets/images/services/commercial-building.webp" alt="Commercial Buildings" class="img-fluid">
                    </div>
                    <h5>Commercial Buildings</h5>
                    <p>Comprehensive security for offices, shopping centers, and business complexes.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="industry-card">
                    <div class="industry-image">
                        <img src="<?php echo $base_url; ?>assets/images/others/educational.jpg" alt="Educational Institutions" class="img-fluid">
                    </div>
                    <h5>Educational Institutions</h5>
                    <p>Safe learning environments for schools, colleges, and training centers.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="industry-card">
                    <div class="industry-image">
                        <img src="<?php echo $base_url; ?>assets/images/services/residential.jfif" alt="Educational Institutions" class="img-fluid">
                    </div>
                    <h5>Residential</h5>
                    <p>Home security systems for apartments, villas, and residential communities.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="industry-card">
                    <div class="industry-image">
                        <img src="<?php echo $base_url; ?>assets/images/services/industrial.jfif" alt="Educational Institutions" class="img-fluid">
                    </div>
                    <h5>Industrial</h5>
                    <p>Heavy-duty security systems for manufacturing plants and industrial facilities.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="industry-card">
                    <div class="industry-image">
                        <img src="<?php echo $base_url; ?>assets/images/services/healthcare.webp" alt="Educational Institutions" class="img-fluid">
                    </div>
                    <h5>Healthcare</h5>
                    <p>HIPAA-compliant security solutions for hospitals and medical facilities.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="industry-card">
                    <div class="industry-image">
                        <img src="<?php echo $base_url; ?>assets/images/services/industrial.jfif" alt="Educational Institutions" class="img-fluid">
                    </div>
                    <h5>Retail</h5>
                    <p>Loss prevention and customer safety systems for retail stores and malls.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="industry-card">
                    <div class="industry-image">
                        <img src="<?php echo $base_url; ?>assets/images/others/government.jpg" alt="Government" class="img-fluid">
                    </div>
                    <h5>Government</h5>
                    <p>High-security surveillance for government buildings and public facilities.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="industry-card">
                    <div class="industry-image">
                        <img src="<?php echo $base_url; ?>assets/images/services/warehouse.jpg" alt="Government" class="img-fluid">
                    </div>
                    <h5>Warehousing</h5>
                    <p>Asset protection and inventory monitoring for distribution centers.</p>
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
            <h2 class="section-title">Your Trusted Security Partner</h2>
            <p class="section-description">
                With 300+ successful security installations and 5+ years of experience, we deliver reliable protection you can trust.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h5>Certified Technicians</h5>
                    <p>Our security specialists are certified and trained in the latest surveillance technologies.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h5>Premium Equipment</h5>
                    <p>We use only top-tier security equipment from trusted manufacturers for reliable performance.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h5>Quick Installation</h5>
                    <p>Fast and professional installation with minimal disruption to your daily operations.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h5>3-Year Warranty</h5>
                    <p>Comprehensive warranty coverage on all equipment and installation work.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h5>24/7 Support</h5>
                    <p>Round-the-clock technical support and emergency response for critical security issues.</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-rupee-sign"></i>
                    </div>
                    <h5>Affordable Pricing</h5>
                    <p>Competitive pricing with flexible payment plans and no hidden costs.</p>
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
                        <h2>Secure Your Property with Professional CCTV Systems</h2>
                        <p>Contact RD Electronics today for advanced CCTV security solutions that provide complete protection and peace of mind. Get a free security assessment and detailed quote for your project.</p>
                        <div class="cta-features">
                            <div class="cta-feature">
                                <i class="fas fa-check-circle"></i>
                                <span>Free Security Assessment</span>
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

<!-- ================================================= -->
 <?php include_once '../common/footer.php'; ?>
</body>
</html>
