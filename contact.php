<!DOCTYPE html>
<html lang="en">
<?php include_once 'common/head.php'; ?>

<body>
    <?php include_once 'common/header.php'; ?>

<!-- BREADCRUMB SECTION -->
<section class="breadcrumb-section contact-breadcrumb">
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
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
                <h1 class="page-title">Contact Us</h1>
                <p class="page-subtitle">Get in touch with our expert team for professional electrical and IT infrastructure solutions across India</p>
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

<!-- CONTACT OVERVIEW SECTION -->
<section class="section bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="service-content">
                    <span class="section-badge">Get In Touch</span>
                    <h2 class="section-title" style="color: var(--rd-primary-blue);">Ready to Start Your Project?</h2>
                    <p class="section-description" style="color: var(--rd-medium-gray);">
                        Contact RD Electronics today for professional electrical and IT infrastructure solutions. 
                        Our expert team is ready to discuss your requirements and provide customized solutions 
                        for your business needs.
                    </p>
                    
                    <div class="service-highlights">
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="highlight-content">
                                <h5 style="color: var(--rd-primary-blue);">Quick Response</h5>
                                <p style="color: var(--rd-medium-gray);">24-hour response guarantee</p>
                            </div>
                        </div>
                        
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="highlight-content">
                                <h5 style="color: var(--rd-primary-blue);">Expert Consultation</h5>
                                <p style="color: var(--rd-medium-gray);">Free technical consultation</p>
                            </div>
                        </div>
                        
                        <div class="highlight-item">
                            <div class="highlight-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="highlight-content">
                                <h5 style="color: var(--rd-primary-blue);">Pan-India Service</h5>
                                <p style="color: var(--rd-medium-gray);">Nationwide project coverage</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-7">
                <div class="contact-form-container">
                    <div class="contact-form-card">
                        <h3 style="color: var(--rd-primary-blue);">Send Us a Message</h3>
                        <p class="form-subtitle" style="color: var(--rd-medium-gray);">Fill out the form below and we'll get back to you within 24 hours</p>
                        
                        <form id="contactForm" class="contact-form">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fullName" class="form-label">Full Name *</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Name" id="fullName" name="fullName" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" class="form-label">Phone Number *</label>
                                        <input type="tel" class="form-control" id="phone" placeholder="Enter Your Number" name="phone" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company" class="form-label">Company Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Company Name" id="company" name="company">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="service" class="form-label">Service Required *</label>
                                <select class="form-control" id="service" name="service" required>
                                    <option value="">Select Service</option>
                                    <option value="Data Cabling & Networking">Data Cabling & Networking</option>
                                    <option value="CCTV Security & Surveillance">CCTV Security & Surveillance</option>
                                    <option value="Fibre Splicing & OTDR Testing">Fibre Splicing & OTDR Testing</option>
                                    <option value="Audio Video Solutions">Audio Video Solutions</option>
                                    <option value="Fire Alarm Systems">Fire Alarm Systems</option>
                                    <option value="Electrical Wiring & Installation">Electrical Wiring & Installation</option>
                                    <option value="Panel & DB Installation">Panel & DB Installation</option>
                                    <option value="UPS & Inverter Solutions">UPS & Inverter Solutions</option>
                                    <option value="Electrical Testing & Commissioning">Electrical Testing & Commissioning</option>
                                    <option value="Technical Manpower Supply">Technical Manpower Supply</option>
                                    <option value="Project Consultation">Project Consultation</option>
                                    <option value="Other Services">Other Services</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="location" class="form-label">Project Location</label>
                                <input type="text" class="form-control" id="location" name="location" placeholder="City, State">
                            </div>
                            
                            <div class="form-group">
                                <label for="budget" class="form-label">Estimated Budget</label>
                                <select class="form-control" id="budget" name="budget">
                                    <option value="">Select Budget Range</option>
                                    <option value="Under ₹1 Lakh">Under ₹1 Lakh</option>
                                    <option value="₹1-5 Lakhs">₹1-5 Lakhs</option>
                                    <option value="₹5-10 Lakhs">₹5-10 Lakhs</option>
                                    <option value="₹10-25 Lakhs">₹10-25 Lakhs</option>
                                    <option value="₹25-50 Lakhs">₹25-50 Lakhs</option>
                                    <option value="Above ₹50 Lakhs">Above ₹50 Lakhs</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="message" class="form-label">Project Details *</label>
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Please describe your project requirements, timeline, and any specific needs..." required></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-lg w-100">
                                <i class="fab fa-whatsapp me-2"></i>Send via WhatsApp
                            </button>
                            
                            <div class="form-note">
                                <small class="text-muted">
                                    <i class="fas fa-shield-alt me-1"></i>
                                    Your information is secure and will only be used to contact you about your inquiry.
                                </small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT INFORMATION SECTION -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">Contact Information</span>
            <h2 class="section-title">Get In Touch With Us</h2>
            <p class="section-description">
                Multiple convenient ways to connect with our expert team for your project requirements.
            </p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <!-- Primary Contact Card -->
            <div class="col-lg-8">
                <div class="primary-contact-card">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-4 text-center">
                            <div class="contact-avatar">
                                <img src="<?php echo $base_url; ?>assets/images/logo/logo.jpeg" alt="RD Electronics" class="contact-logo">
                                <h4>RD Electronics</h4>
                                <p class="contact-subtitle">Professional IT & Electrical Services</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="contact-methods">
                                <div class="contact-method">
                                    <div class="method-icon phone-icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="method-info">
                                        <h5>Call Us Directly</h5>
                                        <a href="tel:8744940446" class="method-link">+91 8744940446</a>
                                        <p class="method-desc">Mon-Sat: 9:00 AM - 6:00 PM</p>
                                    </div>
                                    <div class="method-action">
                                        <a href="tel:8744940446" class="btn btn-primary btn-sm">
                                            <i class="fas fa-phone"></i>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="contact-method">
                                    <div class="method-icon whatsapp-icon">
                                        <i class="fab fa-whatsapp"></i>
                                    </div>
                                    <div class="method-info">
                                        <h5>WhatsApp Chat</h5>
                                        <a href="https://wa.me/918744940446" target="_blank" class="method-link">+91 8744940446</a>
                                        <p class="method-desc">24/7 Available for urgent queries</p>
                                    </div>
                                    <div class="method-action">
                                        <a href="https://wa.me/918744940446" target="_blank" class="btn btn-success btn-sm">
                                            <i class="fab fa-whatsapp"></i>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="contact-method">
                                    <div class="method-icon location-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="method-info">
                                        <h5>Visit Our Office</h5>
                                        <span class="method-link">Chaklalshai, Samastipur</span>
                                        <p class="method-desc">Bihar - 848505, India</p>
                                    </div>
                                    <div class="method-action">
                                        <a href="https://maps.google.com/?q=Chaklalshai,Samastipur,Bihar" target="_blank" class="btn btn-outline-primary btn-sm">
                                            <i class="fas fa-directions"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Quick Actions -->
            <div class="col-lg-4">
                <div class="quick-actions-card">
                    <h4 style="color: var(--rd-primary-blue);">Quick Actions</h4>
                    <p style="color: var(--rd-medium-gray);">Choose your preferred way to connect</p>
                    
                    <div class="action-buttons">
                        <a href="tel:8744940446" class="action-btn call-btn">
                            <div class="action-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="action-text">
                                <span class="action-title">Call Now</span>
                                <span class="action-subtitle">Instant Support</span>
                            </div>
                        </a>
                        
                        <a href="https://wa.me/918744940446" target="_blank" class="action-btn whatsapp-btn">
                            <div class="action-icon">
                                <i class="fab fa-whatsapp"></i>
                            </div>
                            <div class="action-text">
                                <span class="action-title">WhatsApp</span>
                                <span class="action-subtitle">Quick Chat</span>
                            </div>
                        </a>
                        
                        <a href="#contactForm" class="action-btn form-btn">
                            <div class="action-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="action-text">
                                <span class="action-title">Send Message</span>
                                <span class="action-subtitle">Detailed Inquiry</span>
                            </div>
                        </a>
                    </div>
                    
                    <div class="emergency-contact">
                        <div class="emergency-badge">
                            <i class="fas fa-exclamation-triangle"></i>
                            <span>Emergency Support</span>
                        </div>
                        <p style="color: var(--rd-medium-gray);">24/7 emergency support available for critical infrastructure issues</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BUSINESS INFORMATION SECTION -->
<section class="section bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="business-info-content">
                    <span class="section-badge">About Our Business</span>
                    <h2 class="section-title" style="color: var(--rd-primary-blue);">RD Electronics</h2>
                    <div class="business-details">
                        <div class="detail-row">
                            <span class="detail-label" style="color: var(--rd-medium-gray);">Proprietor:</span>
                            <span class="detail-value" style="color: var(--rd-primary-blue);">Mr. Rajan Kumar Ray</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label" style="color: var(--rd-medium-gray);">Business Type:</span>
                            <span class="detail-value" style="color: var(--rd-primary-blue);">IT Networking & Electrical Services Contractor</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label" style="color: var(--rd-medium-gray);">Established:</span>
                            <span class="detail-value" style="color: var(--rd-primary-blue);">Professional Service Provider</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label" style="color: var(--rd-medium-gray);">Service Areas:</span>
                            <span class="detail-value" style="color: var(--rd-primary-blue);">Pan-India Coverage</span>
                        </div>
                    </div>
                    
                    <div class="business-highlights">
                        <div class="highlight-stat">
                            <h3 style="color: var(--rd-primary-blue);">500+</h3>
                            <p style="color: var(--rd-medium-gray);">Projects Completed</p>
                        </div>
                        <div class="highlight-stat">
                            <h3 style="color: var(--rd-primary-blue);">50+</h3>
                            <p style="color: var(--rd-medium-gray);">Satisfied Clients</p>
                        </div>
                        <div class="highlight-stat">
                            <h3 style="color: var(--rd-primary-blue);">22+</h3>
                            <p style="color: var(--rd-medium-gray);">Cities Served</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="business-hours-card">
                    <h3 style="color: var(--rd-primary-blue);">Business Hours & Availability</h3>
                    
                    <div class="hours-section">
                        <h5 style="color: var(--rd-dark-gray);"><i class="fas fa-clock me-2"></i>Regular Hours</h5>
                        <div class="hours-grid">
                            <div class="hours-item">
                                <span class="day" style="color: var(--rd-medium-gray);">Monday - Friday</span>
                                <span class="time" style="color: var(--rd-primary-blue);">9:00 AM - 6:00 PM</span>
                            </div>
                            <div class="hours-item">
                                <span class="day" style="color: var(--rd-medium-gray);">Saturday</span>
                                <span class="time" style="color: var(--rd-primary-blue);">9:00 AM - 4:00 PM</span>
                            </div>
                            <div class="hours-item">
                                <span class="day" style="color: var(--rd-medium-gray);">Sunday</span>
                                <span class="time" style="color: var(--rd-primary-blue);">Emergency Only</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="emergency-section">
                        <h5 style="color: var(--rd-accent-red);"><i class="fas fa-exclamation-triangle me-2"></i>Emergency Services</h5>
                        <p style="color: var(--rd-medium-gray);">24/7 emergency support available for critical infrastructure issues</p>
                        <a href="tel:8744940446" class="btn btn-danger">
                            <i class="fas fa-phone me-2"></i>Emergency Contact
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICE AREAS SECTION -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header text-center">
            <span class="section-badge">Service Coverage</span>
            <h2 class="section-title">Our Service Areas</h2>
            <p class="section-description">
                We provide professional electrical and IT services across multiple cities and regions in India.
            </p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="service-area-card">
                    <div class="area-icon">
                        <i class="fas fa-map-pin"></i>
                    </div>
                    <h5>Bihar</h5>
                    <ul class="area-list">
                        <li>Samastipur</li>
                        <li>Patna</li>
                        <li>Muzaffarpur</li>
                        <li>Darbhanga</li>
                        <li>Begusarai</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="service-area-card">
                    <div class="area-icon">
                        <i class="fas fa-map-pin"></i>
                    </div>
                    <h5>Delhi NCR</h5>
                    <ul class="area-list">
                        <li>New Delhi</li>
                        <li>Gurgaon</li>
                        <li>Noida</li>
                        <li>Faridabad</li>
                        <li>Ghaziabad</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="service-area-card">
                    <div class="area-icon">
                        <i class="fas fa-map-pin"></i>
                    </div>
                    <h5>Maharashtra</h5>
                    <ul class="area-list">
                        <li>Mumbai</li>
                        <li>Pune</li>
                        <li>Nashik</li>
                        <li>Aurangabad</li>
                        <li>Nagpur</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="service-area-card">
                    <div class="area-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h5>Pan-India</h5>
                    <ul class="area-list">
                        <li>All Major Cities</li>
                        <li>Industrial Areas</li>
                        <li>Government Projects</li>
                        <li>Remote Locations</li>
                        <li>On-Demand Service</li>
                    </ul>
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
                        <h2 style="color: var(--rd-primary-blue);">Ready to Discuss Your Project?</h2>
                        <p style="color: var(--rd-medium-gray);">Get in touch with our expert team today for a free consultation and customized solution for your electrical and IT infrastructure needs. We're here to help you succeed.</p>
                        <div class="cta-features">
                            <div class="cta-feature">
                                <i class="fas fa-check-circle"></i>
                                <span style="color: var(--rd-primary-blue);">Free Consultation</span>
                            </div>
                            <div class="cta-feature">
                                <i class="fas fa-check-circle"></i>
                                <span style="color: var(--rd-primary-blue);">24-Hour Response</span>
                            </div>
                            <div class="cta-feature">
                                <i class="fas fa-check-circle"></i>
                                <span style="color: var(--rd-primary-blue);">Custom Solutions</span>
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
                    <a href="https://wa.me/918744940446" target="_blank" class="btn btn-success btn-lg">
                        <i class="fab fa-whatsapp"></i>
                        <span>WhatsApp</span>
                    </a>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

<?php include_once 'common/footer.php'; ?>

<!-- WhatsApp Form Submission Script -->
<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Get form data
    const fullName = document.getElementById('fullName').value;
    const phone = document.getElementById('phone').value;
    const email = document.getElementById('email').value;
    const company = document.getElementById('company').value;
    const service = document.getElementById('service').value;
    const location = document.getElementById('location').value;
    const budget = document.getElementById('budget').value;
    const message = document.getElementById('message').value;
    
    // Validate required fields
    if (!fullName || !phone || !service || !message) {
        alert('Please fill in all required fields (marked with *)');
        return;
    }
    
    // Create WhatsApp message
    let whatsappMessage = `*New Project Inquiry - RD Electronics*\n\n`;
    whatsappMessage += `*Name:* ${fullName}\n`;
    whatsappMessage += `*Phone:* ${phone}\n`;
    
    if (email) whatsappMessage += `*Email:* ${email}\n`;
    if (company) whatsappMessage += `*Company:* ${company}\n`;
    
    whatsappMessage += `*Service Required:* ${service}\n`;
    
    if (location) whatsappMessage += `*Project Location:* ${location}\n`;
    if (budget) whatsappMessage += `*Budget Range:* ${budget}\n`;
    
    whatsappMessage += `\n*Project Details:*\n${message}\n\n`;
    whatsappMessage += `_Sent via RD Electronics Website Contact Form_`;
    
    // Encode message for URL
    const encodedMessage = encodeURIComponent(whatsappMessage);
    
    // Create WhatsApp URL
    const whatsappURL = `https://wa.me/918744940446?text=${encodedMessage}`;
    
    // Open WhatsApp
    window.open(whatsappURL, '_blank');
    
    // Show success message
    alert('Redirecting to WhatsApp... Your message has been prepared and will be sent via WhatsApp.');
    
    // Optional: Reset form
    // this.reset();
});
</script>
</body>

</html>
