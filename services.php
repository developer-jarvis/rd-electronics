<?php
$page_title = "Our Services - Comprehensive Electrical & IT Solutions | RD Electronics";
$page_description = "Complete electrical and IT networking services including data cabling, CCTV, fiber splicing, electrical wiring, UPS systems, and technical manpower supply by RD Electronics.";
$page_keywords = "Electrical Services, IT Networking Services, Data Cabling, CCTV Installation, Fiber Splicing, Electrical Wiring, UPS Systems, Manpower Supply";
$current_page = "services";
include 'includes/header.php';
?>

<!-- BREADCRUMB SECTION -->
<section class="breadcrumb-section services-breadcrumb">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?php echo url('index.php'); ?>">
                                <i class="fas fa-home"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Our Services</li>
                    </ol>
                </nav>
                <h1 class="page-title">Our Services</h1>
                <p class="page-subtitle">Comprehensive electrical and IT networking solutions for businesses, institutions, and industries across India</p>
            </div>
            <div class="col-md-4 text-end">
                <div class="breadcrumb-actions">
                    <a href="tel:8744940446" class="btn btn-primary btn-sm me-2">
                        <i class="fas fa-phone"></i>
                        <span>Call Now</span>
                    </a>
                    <a href="<?php echo url('contact.php'); ?>" class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-envelope text-white"></i>
                        <span class="text-white">Get Quote</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES OVERVIEW -->
<section class="section bg-white">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">What We Do</span>
            <h2 class="section-title">Complete Electrical & IT Solutions</h2>
            <p class="section-description">
                RD Electronics provides end-to-end electrical and IT networking services with expertise, 
                quality, and reliability. Our comprehensive solutions cover everything from basic installations 
                to complex infrastructure projects.
            </p>
        </div>
        
        <div class="row g-4">
            <!-- IT Networking Services -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-ethernet"></i>
                    </div>
                    <h4 class="service-title">Data Cabling Work</h4>
                    <p class="service-description">
                        Professional structured cabling solutions including Cat6, Cat6A, and fiber optic installations 
                        for offices, campuses, and data centers with complete testing and certification.
                    </p>
                    <div class="service-features">
                        <ul>
                            <li><i class="fas fa-check"></i> Cat6/Cat6A Installation</li>
                            <li><i class="fas fa-check"></i> Fiber Optic Cabling</li>
                            <li><i class="fas fa-check"></i> Network Testing</li>
                            <li><i class="fas fa-check"></i> Cable Management</li>
                        </ul>
                    </div>
                    <a href="services/data-cabling.php" class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-arrow-right"></i> Learn More
                    </a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h4 class="service-title">CCTV & Surveillance</h4>
                    <p class="service-description">
                        Advanced security camera systems with IP cameras, HD recording, remote monitoring, 
                        and mobile access for complete security coverage of your premises.
                    </p>
                    <div class="service-features">
                        <ul>
                            <li><i class="fas fa-check"></i> IP Camera Systems</li>
                            <li><i class="fas fa-check"></i> DVR/NVR Setup</li>
                            <li><i class="fas fa-check"></i> Remote Monitoring</li>
                            <li><i class="fas fa-check"></i> Mobile Access</li>
                        </ul>
                    </div>
                    <a href="services/cctv.php" class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-arrow-right"></i> Learn More
                    </a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h4 class="service-title">Fibre Cable Splicing</h4>
                    <p class="service-description">
                        Expert fiber optic cable splicing, termination, and testing services for high-speed 
                        data transmission with fusion and mechanical splicing techniques.
                    </p>
                    <div class="service-features">
                        <ul>
                            <li><i class="fas fa-check"></i> Fusion Splicing</li>
                            <li><i class="fas fa-check"></i> Mechanical Splicing</li>
                            <li><i class="fas fa-check"></i> Fiber Termination</li>
                            <li><i class="fas fa-check"></i> OTDR Testing</li>
                        </ul>
                    </div>
                    <a href="services/fibre-splicing.php" class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-arrow-right"></i> Learn More
                    </a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-search-plus"></i>
                    </div>
                    <h4 class="service-title">OTDR Testing Services</h4>
                    <p class="service-description">
                        Comprehensive fiber optic testing using OTDR equipment for fault detection, 
                        characterization, and performance verification of fiber networks.
                    </p>
                    <div class="service-features">
                        <ul>
                            <li><i class="fas fa-check"></i> Fault Detection</li>
                            <li><i class="fas fa-check"></i> Loss Measurement</li>
                            <li><i class="fas fa-check"></i> Network Verification</li>
                            <li><i class="fas fa-check"></i> Documentation</li>
                        </ul>
                    </div>
                    <a href="services/otdr-testing.php" class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-arrow-right"></i> Learn More
                    </a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-volume-up"></i>
                    </div>
                    <h4 class="service-title">Audio & Video Solutions</h4>
                    <p class="service-description">
                        Professional audio-visual systems including sound systems, digital signage, 
                        conference rooms, and entertainment solutions for various applications.
                    </p>
                    <div class="service-features">
                        <ul>
                            <li><i class="fas fa-check"></i> Sound Systems</li>
                            <li><i class="fas fa-check"></i> Digital Signage</li>
                            <li><i class="fas fa-check"></i> Conference AV</li>
                            <li><i class="fas fa-check"></i> Home Theatre</li>
                        </ul>
                    </div>
                    <a href="services/audio-video.php" class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-arrow-right"></i> Learn More
                    </a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-fire-extinguisher"></i>
                    </div>
                    <h4 class="service-title">Fire Alarm Systems</h4>
                    <p class="service-description">
                        Complete fire detection and alarm systems with smoke detectors, control panels, 
                        and emergency notification systems for building safety compliance.
                    </p>
                    <div class="service-features">
                        <ul>
                            <li><i class="fas fa-check"></i> Smoke Detection</li>
                            <li><i class="fas fa-check"></i> Control Panels</li>
                            <li><i class="fas fa-check"></i> Emergency Alerts</li>
                            <li><i class="fas fa-check"></i> System Integration</li>
                        </ul>
                    </div>
                    <a href="services/fire-alarm.php" class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-arrow-right"></i> Learn More
                    </a>
                </div>
            </div>
            
            <!-- Electrical Services -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-plug"></i>
                    </div>
                    <h4 class="service-title">Electrical Wiring</h4>
                    <p class="service-description">
                        Complete electrical installation services for residential, commercial, and industrial 
                        applications with safety compliance and quality assurance.
                    </p>
                    <div class="service-features">
                        <ul>
                            <li><i class="fas fa-check"></i> Residential Wiring</li>
                            <li><i class="fas fa-check"></i> Commercial Setup</li>
                            <li><i class="fas fa-check"></i> Industrial Systems</li>
                            <li><i class="fas fa-check"></i> Safety Compliance</li>
                        </ul>
                    </div>
                    <a href="services/electrical-wiring.php" class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-arrow-right"></i> Learn More
                    </a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h4 class="service-title">Panel / DB Installation</h4>
                    <p class="service-description">
                        Professional electrical panel and distribution board installation with proper 
                        load distribution, protection systems, and code compliance.
                    </p>
                    <div class="service-features">
                        <ul>
                            <li><i class="fas fa-check"></i> Main Panels</li>
                            <li><i class="fas fa-check"></i> Sub Panels</li>
                            <li><i class="fas fa-check"></i> Load Distribution</li>
                            <li><i class="fas fa-check"></i> Protection Systems</li>
                        </ul>
                    </div>
                    <a href="services/panel-installation.php" class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-arrow-right"></i> Learn More
                    </a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-battery-full"></i>
                    </div>
                    <h4 class="service-title">UPS & Inverter Solutions</h4>
                    <p class="service-description">
                        Uninterruptible power supply systems and inverter solutions for continuous power 
                        backup, protection, and energy management for critical applications.
                    </p>
                    <div class="service-features">
                        <ul>
                            <li><i class="fas fa-check"></i> Online UPS</li>
                            <li><i class="fas fa-check"></i> Offline UPS</li>
                            <li><i class="fas fa-check"></i> Solar Inverters</li>
                            <li><i class="fas fa-check"></i> Battery Systems</li>
                        </ul>
                    </div>
                    <a href="services/ups-inverter.php" class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-arrow-right"></i> Learn More
                    </a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h4 class="service-title">Electrical Testing</h4>
                    <p class="service-description">
                        Comprehensive electrical testing services including insulation testing, 
                        earth resistance testing, and electrical safety audits for compliance.
                    </p>
                    <div class="service-features">
                        <ul>
                            <li><i class="fas fa-check"></i> Insulation Testing</li>
                            <li><i class="fas fa-check"></i> Earth Resistance</li>
                            <li><i class="fas fa-check"></i> Safety Audits</li>
                            <li><i class="fas fa-check"></i> Compliance Reports</li>
                        </ul>
                    </div>
                    <a href="services/electrical-testing.php" class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-arrow-right"></i> Learn More
                    </a>
                </div>
            </div>
            
            <!-- Manpower Services -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-user-hard-hat"></i>
                    </div>
                    <h4 class="service-title">Technical Manpower Supply</h4>
                    <p class="service-description">
                        Skilled technical manpower including engineers, technicians, project supervisors, 
                        and support staff for your electrical and IT infrastructure projects.
                    </p>
                    <div class="service-features">
                        <ul>
                            <li><i class="fas fa-check"></i> Project Engineers</li>
                            <li><i class="fas fa-check"></i> Skilled Technicians</li>
                            <li><i class="fas fa-check"></i> Site Supervisors</li>
                            <li><i class="fas fa-check"></i> Support Staff</li>
                        </ul>
                    </div>
                    <a href="services/manpower-supply.php" class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-arrow-right"></i> Learn More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- STATISTICS SECTION -->
<section class="stats-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <span class="stat-number">500+</span>
                    <span class="stat-label">Projects Completed</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <span class="stat-number">50+</span>
                    <span class="stat-label">Happy Clients</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <span class="stat-number">22+</span>
                    <span class="stat-label">Cities Covered</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <span class="stat-number">99%</span>
                    <span class="stat-label">Success Rate</span>
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
                        <h2>Need Professional Solutions?</h2>
                        <p>Contact our expert team today to discuss your electrical and IT infrastructure requirements. We provide customized solutions tailored to your specific needs and budget.</p>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
