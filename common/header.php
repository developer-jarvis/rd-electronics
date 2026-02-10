    <header>
        <!-- TOP INFO BAR -->
        <div class="top-info-bar py-2 d-none d-lg-block">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="d-flex align-items-center">
                            <div class="me-4">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Chaklalsahi, Morwa, Samastipur, Bihar – 848505</span>
                            </div>
                            <div class="me-4">
                                <i class="fas fa-envelope"></i>
                                <a href="mailto:rdelectronics8485@gmail.com">rdelectronics8485@gmail.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 text-end">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="me-3">
                                <i class="fas fa-phone"></i>
                                <a href="tel:8744940446">8744940446</a>
                            </div>
                            <div class="me-3">
                                <i class="fas fa-phone"></i>
                                <a href="tel:8368382826">8368382826</a>
                            </div>
                            <div>
                                <i class="fab fa-whatsapp"></i>
                                <a href="https://wa.me/918744940446" target="_blank">WhatsApp</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MAIN NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light sticky-top">
            <div class="container-fluid">
                <!-- LOGO / BRAND -->
                <a class="navbar-brand" href="<?php echo $base_url; ?>">
                    <img src="<?php echo $base_url; ?>assets/images/logo/logo.jpeg" alt="RD Electronics" class="logo-img">
                    <div class="brand-info">
                        <span class="brand-text">RD ELECTRONICS</span>
                        <small class="brand-tagline d-block">IT Networking & Electrical Solutions</small>
                    </div>
                </a>

                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="mainNavbar">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page == 'home') ? 'active' : ''; ?>" href="<?php echo $base_url; ?>">
                                <i class="fas fa-home me-1"></i>Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page == 'about') ? 'active' : ''; ?>" href="<?php echo $base_url; ?>about.php">
                                <i class="fas fa-info-circle me-1"></i>About Us
                            </a>
                        </li>

                        <!-- SERVICES DROPDOWN -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php echo ($current_page == 'services') ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-cogs me-1"></i>Services
                            </a>
                            <ul class="dropdown-menu shadow">
                                <li><h6 class="dropdown-header"><i class="fas fa-network-wired me-2"></i>IT Networking Services</h6></li>
                                <li><a class="dropdown-item" href="<?php echo $base_url; ?>services/data-cabling.php"><i class="fas fa-ethernet me-2"></i>Data Cabling Work</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base_url; ?>services/cctv.php"><i class="fas fa-video me-2"></i>CCTV Security & Surveillance</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base_url; ?>services/fibre-splicing.php"><i class="fas fa-project-diagram me-2"></i>Fibre Cable Splicing</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base_url; ?>services/otdr-testing.php"><i class="fas fa-search-plus me-2"></i>OTDR Testing Services</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base_url; ?>services/audio-video.php"><i class="fas fa-volume-up me-2"></i>Audio & Video Solutions</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base_url; ?>services/fire-alarm.php"><i class="fas fa-fire-extinguisher me-2"></i>Fire Alarm Systems</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><h6 class="dropdown-header"><i class="fas fa-bolt me-2"></i>Electrical Services</h6></li>
                                <li><a class="dropdown-item" href="<?php echo $base_url; ?>services/electrical-wiring.php"><i class="fas fa-plug me-2"></i>Electrical Wiring</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base_url; ?>services/panel-installation.php"><i class="fas fa-tools me-2"></i>Panel / DB Installation</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base_url; ?>services/ups-inverter.php"><i class="fas fa-battery-full me-2"></i>UPS & Inverter Solutions</a></li>
                                <li><a class="dropdown-item" href="<?php echo $base_url; ?>services/electrical-testing.php"><i class="fas fa-check-circle me-2"></i>Electrical Testing</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><h6 class="dropdown-header"><i class="fas fa-users me-2"></i>Manpower Services</h6></li>
                                <li><a class="dropdown-item" href="<?php echo $base_url; ?>services/manpower-supply.php"><i class="fas fa-user-hard-hat me-2"></i>Technical Manpower Supply</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page == 'projects') ? 'active' : ''; ?>" href="<?php echo $base_url; ?>projects.php">
                                <i class="fas fa-briefcase me-1"></i>Projects
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page == 'career') ? 'active' : ''; ?>" href="<?php echo $base_url; ?>career.php">
                                <i class="fas fa-user-tie me-1"></i>Career
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page == 'contact') ? 'active' : ''; ?>" href="<?php echo $base_url; ?>contact.php">
                                <i class="fas fa-envelope me-1"></i>Contact
                            </a>
                        </li>

                        <!-- CTA BUTTONS -->
                        <li class="nav-item ms-lg-3">
                            <a href="tel:8744940446" class="btn btn-primary btn-sm me-2 cta-btn">
                                <i class="fas fa-phone me-1"></i> Call Now
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://wa.me/918744940446" target="_blank" class="btn btn-secondary btn-sm cta-btn">
                                <i class="fab fa-whatsapp me-1"></i> WhatsApp
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

