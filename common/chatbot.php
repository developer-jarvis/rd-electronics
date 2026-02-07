<!-- FLOATING CHATBOT WIDGET -->
<div class="chatbot-widget">
    <!-- Chat Toggle Button -->
    <button class="chatbot-toggle" id="chatbotToggle" aria-label="Open Chat">
        <i class="fas fa-comments"></i>
        <span class="chat-badge">1</span>
    </button>

    <!-- Chat Window -->
    <div class="chatbot-window" id="chatbotWindow">
        <!-- Chat Header -->
        <div class="chatbot-header">
            <div class="chatbot-header-content">
                <img src="<?php echo $base_url; ?>assets/images/logo/logo.jpeg" alt="RD Electronics" class="chatbot-logo">
                <div class="chatbot-header-text">
                    <h5>RD Electronics</h5>
                    <p><span class="status-dot"></span> Online - Ready to Help</p>
                </div>
            </div>
            <button class="chatbot-close" id="chatbotClose" aria-label="Close Chat">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <!-- Chat Body -->
        <div class="chatbot-body" id="chatbotBody">
            <!-- Welcome Message -->
            <div class="chat-message bot-message">
                <div class="message-avatar">
                    <i class="fas fa-robot"></i>
                </div>
                <div class="message-content">
                    <p>👋 Hello! Welcome to <strong>RD Electronics</strong></p>
                    <p>We provide professional IT Networking & Electrical Services across India.</p>
                    <p>How can we help you today?</p>
                </div>
            </div>

            <!-- Quick Action Buttons -->
            <div class="chat-quick-actions">
                <button class="quick-action-btn" data-action="services">
                    <i class="fas fa-cogs"></i>
                    <span>Our Services</span>
                </button>
                <button class="quick-action-btn" data-action="quote">
                    <i class="fas fa-file-invoice"></i>
                    <span>Get Quote</span>
                </button>
                <button class="quick-action-btn" data-action="projects">
                    <i class="fas fa-briefcase"></i>
                    <span>View Projects</span>
                </button>
                <button class="quick-action-btn" data-action="contact">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Contact Info</span>
                </button>
            </div>
        </div>

        <!-- Chat Footer -->
        <div class="chatbot-footer">
            <div class="contact-options">
                <a href="tel:8744940446" class="contact-option call-option">
                    <i class="fas fa-phone"></i>
                    <span>Call Now</span>
                </a>
                <a href="https://wa.me/918744940446" target="_blank" class="contact-option whatsapp-option">
                    <i class="fab fa-whatsapp"></i>
                    <span>WhatsApp</span>
                </a>
            </div>
            <p class="chatbot-footer-text">We typically reply within minutes</p>
        </div>
    </div>
</div>

<!-- Chatbot Styles -->
<style>
/* ===================================
   CHATBOT WIDGET STYLES
   ================================== */

.chatbot-widget {
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 9999;
    font-family: 'Poppins', sans-serif;
}

/* Chat Toggle Button */
.chatbot-toggle {
    width: 65px;
    height: 65px;
    border-radius: 50%;
    background: linear-gradient(135deg, #1e5aa8 0%, #0f3460 100%);
    border: none;
    color: white;
    font-size: 1.8rem;
    cursor: pointer;
    box-shadow: 0 8px 30px rgba(30, 90, 168, 0.4);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    animation: chatbotPulse 2s infinite;
}

@keyframes chatbotPulse {
    0%, 100% {
        box-shadow: 0 8px 30px rgba(30, 90, 168, 0.4);
    }
    50% {
        box-shadow: 0 8px 40px rgba(30, 90, 168, 0.6), 0 0 0 10px rgba(30, 90, 168, 0.1);
    }
}

.chatbot-toggle:hover {
    transform: scale(1.1) rotate(5deg);
    background: linear-gradient(135deg, #ff6b35 0%, #ff8c42 100%);
    box-shadow: 0 12px 40px rgba(255, 107, 53, 0.5);
}

.chatbot-toggle.active {
    transform: scale(0.9);
    background: linear-gradient(135deg, #ff6b35 0%, #ff8c42 100%);
}

.chat-badge {
    position: absolute;
    top: -5px;
    right: -5px;
    background: #dc3545;
    color: white;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.75rem;
    font-weight: 700;
    border: 3px solid white;
    animation: badgeBounce 1s infinite;
}

@keyframes badgeBounce {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.2); }
}

/* Chat Window */
.chatbot-window {
    position: absolute;
    bottom: 80px;
    right: 0;
    width: 380px;
    max-height: 600px;
    background: white;
    border-radius: 20px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    display: none;
    flex-direction: column;
    overflow: hidden;
    animation: chatbotSlideUp 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

@keyframes chatbotSlideUp {
    from {
        opacity: 0;
        transform: translateY(20px) scale(0.95);
    }
    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

.chatbot-window.active {
    display: flex;
}

/* Chat Header */
.chatbot-header {
    background: linear-gradient(135deg, #1e5aa8 0%, #0f3460 100%);
    color: white;
    padding: 1.25rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 3px solid #ff6b35;
}

.chatbot-header-content {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.chatbot-logo {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 3px solid white;
    object-fit: cover;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

.chatbot-header-text h5 {
    margin: 0;
    font-size: 1.1rem;
    font-weight: 700;
    color: white;
}

.chatbot-header-text p {
    margin: 0;
    font-size: 0.85rem;
    opacity: 0.9;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.status-dot {
    width: 10px;
    height: 10px;
    background: #28a745;
    border-radius: 50%;
    display: inline-block;
    animation: statusPulse 2s infinite;
}

@keyframes statusPulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.5; }
}

.chatbot-close {
    background: rgba(255, 255, 255, 0.2);
    border: none;
    color: white;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
}

.chatbot-close:hover {
    background: rgba(255, 255, 255, 0.3);
    transform: rotate(90deg);
}

/* Chat Body */
.chatbot-body {
    flex: 1;
    padding: 1.5rem;
    overflow-y: auto;
    background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
    max-height: 400px;
}

.chatbot-body::-webkit-scrollbar {
    width: 6px;
}

.chatbot-body::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 10px;
}

.chatbot-body::-webkit-scrollbar-thumb {
    background: #1e5aa8;
    border-radius: 10px;
}

.chatbot-body::-webkit-scrollbar-thumb:hover {
    background: #0f3460;
}

/* Chat Messages */
.chat-message {
    display: flex;
    gap: 0.75rem;
    margin-bottom: 1.5rem;
    animation: messageSlideIn 0.3s ease;
}

@keyframes messageSlideIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.message-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: linear-gradient(135deg, #1e5aa8 0%, #0f3460 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.2rem;
    flex-shrink: 0;
    box-shadow: 0 4px 15px rgba(30, 90, 168, 0.3);
}

.message-content {
    background: white;
    padding: 1rem 1.25rem;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    max-width: 75%;
    position: relative;
}

.message-content::before {
    content: '';
    position: absolute;
    left: -8px;
    top: 15px;
    width: 0;
    height: 0;
    border-top: 8px solid transparent;
    border-bottom: 8px solid transparent;
    border-right: 8px solid white;
}

.message-content p {
    margin: 0 0 0.5rem 0;
    color: #2c3e50;
    line-height: 1.6;
    font-size: 0.95rem;
}

.message-content p:last-child {
    margin-bottom: 0;
}

.message-content strong {
    color: #1e5aa8;
}

/* Quick Action Buttons */
.chat-quick-actions {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 0.75rem;
    margin-top: 1.5rem;
}

.quick-action-btn {
    background: white;
    border: 2px solid #e9ecef;
    padding: 1rem;
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.5rem;
    text-align: center;
}

.quick-action-btn:hover {
    background: linear-gradient(135deg, rgba(30, 90, 168, 0.05) 0%, rgba(255, 107, 53, 0.05) 100%);
    border-color: #1e5aa8;
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(30, 90, 168, 0.2);
}

.quick-action-btn i {
    font-size: 1.5rem;
    color: #1e5aa8;
    transition: all 0.3s ease;
}

.quick-action-btn:hover i {
    color: #ff6b35;
    transform: scale(1.2);
}

.quick-action-btn span {
    font-size: 0.85rem;
    font-weight: 600;
    color: #2c3e50;
}

/* Chat Footer */
.chatbot-footer {
    padding: 1.25rem;
    background: white;
    border-top: 2px solid #e9ecef;
}

.contact-options {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 0.75rem;
    margin-bottom: 1rem;
}

.contact-option {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    padding: 0.875rem;
    border-radius: 12px;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.9rem;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

.contact-option::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    transition: left 0.5s;
}

.contact-option:hover::before {
    left: 100%;
}

.call-option {
    background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
    color: white;
    box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
}

.call-option:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0, 123, 255, 0.4);
    color: white;
}

.whatsapp-option {
    background: linear-gradient(135deg, #25d366 0%, #128c7e 100%);
    color: white;
    box-shadow: 0 4px 15px rgba(37, 211, 102, 0.3);
}

.whatsapp-option:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(37, 211, 102, 0.4);
    color: white;
}

.contact-option i {
    font-size: 1.2rem;
}

.chatbot-footer-text {
    text-align: center;
    font-size: 0.8rem;
    color: #6c757d;
    margin: 0;
}

/* Responsive Design */
@media (max-width: 767.98px) {
    .chatbot-widget {
        bottom: 20px;
        right: 20px;
    }

    .chatbot-toggle {
        width: 55px;
        height: 55px;
        font-size: 1.5rem;
    }

    .chatbot-window {
        width: calc(100vw - 40px);
        max-width: 350px;
        bottom: 70px;
    }

    .chatbot-logo {
        width: 40px;
        height: 40px;
    }

    .chatbot-header-text h5 {
        font-size: 1rem;
    }

    .chatbot-header-text p {
        font-size: 0.75rem;
    }

    .message-content {
        max-width: 80%;
    }

    .quick-action-btn {
        padding: 0.75rem;
    }

    .quick-action-btn i {
        font-size: 1.25rem;
    }

    .quick-action-btn span {
        font-size: 0.75rem;
    }
}

@media (max-width: 575.98px) {
    .chatbot-widget {
        bottom: 15px;
        right: 15px;
    }

    .chatbot-toggle {
        width: 50px;
        height: 50px;
        font-size: 1.3rem;
    }

    .chat-badge {
        width: 20px;
        height: 20px;
        font-size: 0.7rem;
    }

    .chatbot-window {
        width: calc(100vw - 30px);
        bottom: 65px;
    }

    .chatbot-header {
        padding: 1rem;
    }

    .chatbot-body {
        padding: 1rem;
    }

    .chatbot-footer {
        padding: 1rem;
    }

    .contact-option {
        padding: 0.75rem;
        font-size: 0.85rem;
    }
}
</style>

<!-- Chatbot Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const chatbotToggle = document.getElementById('chatbotToggle');
    const chatbotWindow = document.getElementById('chatbotWindow');
    const chatbotClose = document.getElementById('chatbotClose');
    const chatbotBody = document.getElementById('chatbotBody');
    const quickActionBtns = document.querySelectorAll('.quick-action-btn');

    // Toggle chatbot window
    chatbotToggle.addEventListener('click', function() {
        chatbotWindow.classList.toggle('active');
        chatbotToggle.classList.toggle('active');
        
        // Remove badge when opened
        if (chatbotWindow.classList.contains('active')) {
            const badge = document.querySelector('.chat-badge');
            if (badge) {
                badge.style.display = 'none';
            }
        }
    });

    // Close chatbot
    chatbotClose.addEventListener('click', function() {
        chatbotWindow.classList.remove('active');
        chatbotToggle.classList.remove('active');
    });

    // Quick action buttons
    quickActionBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const action = this.getAttribute('data-action');
            handleQuickAction(action);
        });
    });

    function handleQuickAction(action) {
        let message = '';
        let link = '';

        switch(action) {
            case 'services':
                message = '📋 <strong>Our Services:</strong><br><br>' +
                         '• Data Cabling & Networking<br>' +
                         '• CCTV Security Systems<br>' +
                         '• Fibre Splicing & OTDR Testing<br>' +
                         '• Audio Video Solutions<br>' +
                         '• Fire Alarm Systems<br>' +
                         '• Electrical Wiring & Installation<br>' +
                         '• Panel & DB Installation<br>' +
                         '• UPS & Inverter Solutions<br>' +
                         '• Electrical Testing<br>' +
                         '• Technical Manpower Supply';
                link = '<?php echo $base_url; ?>services.php';
                break;
            case 'quote':
                message = '💼 <strong>Get a Free Quote!</strong><br><br>' +
                         'Contact us for a customized quote:<br><br>' +
                         '📞 Call: +91 8744940446<br>' +
                         '💬 WhatsApp: +91 8744940446<br>' +
                         '📧 Email: rdelectronics8485@gmail.com';
                link = '<?php echo $base_url; ?>contact.php';
                break;
            case 'projects':
                message = '🏗️ <strong>Our Projects:</strong><br><br>' +
                         'We have successfully completed 500+ projects including:<br><br>' +
                         '• Indian Parliament<br>' +
                         '• IIM Bodh Gaya<br>' +
                         '• Guwahati Airport<br>' +
                         '• HSBC Bank<br>' +
                         '• Maruti Suzuki Rohtak<br>' +
                         '• And many more...';
                link = '<?php echo $base_url; ?>projects.php';
                break;
            case 'contact':
                message = '📍 <strong>Contact Information:</strong><br><br>' +
                         '<strong>Address:</strong><br>' +
                         'Chaklalsahi, Morwa, Samastipur<br>' +
                         'Bihar – 848505, India<br><br>' +
                         '<strong>Phone:</strong><br>' +
                         '+91 8744940446<br>' +
                         '+91 8368382826<br><br>' +
                         '<strong>Email:</strong><br>' +
                         'rdelectronics8485@gmail.com';
                link = '<?php echo $base_url; ?>contact.php';
                break;
        }

        // Add bot response
        addBotMessage(message, link);
    }

    function addBotMessage(message, link = '') {
        const messageDiv = document.createElement('div');
        messageDiv.className = 'chat-message bot-message';
        
        let linkButton = '';
        if (link) {
            linkButton = `<br><br><a href="${link}" style="display: inline-block; background: linear-gradient(135deg, #1e5aa8 0%, #0f3460 100%); color: white; padding: 0.5rem 1rem; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 0.85rem; margin-top: 0.5rem;">Learn More →</a>`;
        }
        
        messageDiv.innerHTML = `
            <div class="message-avatar">
                <i class="fas fa-robot"></i>
            </div>
            <div class="message-content">
                <p>${message}${linkButton}</p>
            </div>
        `;
        
        chatbotBody.appendChild(messageDiv);
        chatbotBody.scrollTop = chatbotBody.scrollHeight;
    }

    // Auto-show chatbot after 3 seconds (optional)
    setTimeout(function() {
        if (!chatbotWindow.classList.contains('active')) {
            const badge = document.querySelector('.chat-badge');
            if (badge) {
                badge.style.display = 'flex';
            }
        }
    }, 3000);
});
</script>
