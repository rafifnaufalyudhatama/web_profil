/* ==========================================================================
   TourJepang - Main JavaScript
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {

    // 1. Navbar Scroll Effect
    const navbar = document.getElementById('navbar');
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 40) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }

    // 2. Intersection Observer for Scroll Animations
    const fadeElements = document.querySelectorAll('.fade-in-on-scroll');
    if ('IntersectionObserver' in window) {
        const appearOptions = {
            threshold: 0.1,
            rootMargin: "0px 0px -40px 0px"
        };

        const appearOnScroll = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, appearOptions);

        fadeElements.forEach(el => appearOnScroll.observe(el));
    } else {
        // Fallback for older browsers
        fadeElements.forEach(el => el.classList.add('visible'));
    }

    // 3. Smooth Scrolling for Anchor Links & Mobile Menu Close
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href === '#' || !href) return;
            
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                closeMenu();
                
                const navHeight = navbar ? navbar.offsetHeight : 70;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - navHeight - 15;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // 4. Carousel Controls Logic
    const track = document.getElementById('carouselTrack');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    
    if (track && prevBtn && nextBtn) {
        nextBtn.addEventListener('click', () => {
            const card = track.querySelector('.card');
            const cardWidth = card ? card.offsetWidth + 26 : 340;
            track.scrollBy({
                left: cardWidth,
                behavior: 'smooth'
            });
        });

        prevBtn.addEventListener('click', () => {
            const card = track.querySelector('.card');
            const cardWidth = card ? card.offsetWidth + 26 : 340;
            track.scrollBy({
                left: -cardWidth,
                behavior: 'smooth'
            });
        });
    }

    // 5. FAQ Accordion Toggle
    const faqButtons = document.querySelectorAll('.faq-question');
    faqButtons.forEach(button => {
        button.addEventListener('click', () => {
            const parent = button.parentElement;
            const isActive = parent.classList.contains('active');
            
            // Close other items
            document.querySelectorAll('.faq-item').forEach(item => {
                item.classList.remove('active');
            });
            
            // Toggle clicked item
            if (!isActive) {
                parent.classList.add('active');
            }
        });
    });

});

// 6. Mobile Menu Functions
function toggleMenu() {
    const navLinks = document.querySelector('.nav-links');
    const navOverlay = document.getElementById('navOverlay');
    const menuIcon = document.querySelector('.mobile-menu i');

    if (navLinks) {
        navLinks.classList.toggle('active');
        const isActive = navLinks.classList.contains('active');

        if (navOverlay) {
            navOverlay.classList.toggle('active', isActive);
        }

        if (menuIcon) {
            if (isActive) {
                menuIcon.classList.remove('ph-list');
                menuIcon.classList.add('ph-x');
            } else {
                menuIcon.classList.remove('ph-x');
                menuIcon.classList.add('ph-list');
            }
        }
    }
}

function closeMenu() {
    const navLinks = document.querySelector('.nav-links');
    const navOverlay = document.getElementById('navOverlay');
    const menuIcon = document.querySelector('.mobile-menu i');

    if (navLinks && navLinks.classList.contains('active')) {
        navLinks.classList.remove('active');
    }
    if (navOverlay && navOverlay.classList.contains('active')) {
        navOverlay.classList.remove('active');
    }
    if (menuIcon) {
        menuIcon.classList.remove('ph-x');
        menuIcon.classList.add('ph-list');
    }
}

// 7. Popup Modal Logic
function openModal(title, desc, waMessage) {
    const modal = document.getElementById('popupModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalDesc = document.getElementById('modalDesc');
    const modalWaBtn = document.getElementById('modalWaBtn');

    if (title && modalTitle) modalTitle.innerText = title;
    if (desc && modalDesc) modalDesc.innerText = desc;

    if (modalWaBtn) {
        const text = waMessage ? encodeURIComponent(waMessage) : encodeURIComponent(`Halo Tour Jepang, saya ingin konsultasi mengenai ${title || 'paket wisata'}`);
        modalWaBtn.href = `https://wa.me/081392254657?text=${text}`;
    }

    if (modal) {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden'; // Prevent background scrolling
    }
}

function closeModal() {
    const modal = document.getElementById('popupModal');
    if (modal) {
        modal.classList.remove('active');
        document.body.style.overflow = '';
    }
}

// Close modal when clicking on the overlay outside modal-content
window.addEventListener('click', (e) => {
    const modal = document.getElementById('popupModal');
    if (e.target === modal) {
        closeModal();
    }
});

// Close modal on Escape key press
window.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        closeModal();
        closeMenu();
    }
});

// 8. Contact Form Handler (Submits directly to WhatsApp)
function handleFormSubmit(e) {
    e.preventDefault();
    const name = document.getElementById('formName') ? document.getElementById('formName').value.trim() : '';
    const phone = document.getElementById('formPhone') ? document.getElementById('formPhone').value.trim() : '';
    const message = document.getElementById('formMessage') ? document.getElementById('formMessage').value.trim() : '';

    const title = document.getElementById('modalTitle') ? document.getElementById('modalTitle').innerText : 'Tour Jepang';

    let text = `Halo Tour Jepang!%0A%0ASaya ingin bertanya seputar *${encodeURIComponent(title)}*:%0A- Nama: ${encodeURIComponent(name)}%0A- No. HP/WA: ${encodeURIComponent(phone)}`;
    if (message) {
        text += `%0A- Pesan / Pertanyaan: ${encodeURIComponent(message)}`;
    }

    closeModal();
    window.open(`https://wa.me/081392254657?text=${text}`, '_blank');
}
