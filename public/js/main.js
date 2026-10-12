/* ==========================================================================
   NipponTravel - Main JavaScript
   Features: Hero Auto-Slide Carousel, Smooth Scroll, Destinations Carousel, FAQ & Modal
   ========================================================================== */

// 1. Hero Background Auto-Slide Carousel
let currentHeroSlide = 0;
let heroSlideInterval = null;

function initHeroSlider() {
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.hero-dot');
    if (!slides.length) return;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });
        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === index);
        });
        currentHeroSlide = index;
    }

    window.goToHeroSlide = function(index) {
        showSlide(index);
        resetHeroInterval();
    };

    function nextSlide() {
        const next = (currentHeroSlide + 1) % slides.length;
        showSlide(next);
    }

    function resetHeroInterval() {
        if (heroSlideInterval) clearInterval(heroSlideInterval);
        heroSlideInterval = setInterval(nextSlide, 4500);
    }

    resetHeroInterval();
}

document.addEventListener('DOMContentLoaded', () => {

    // Clean up any previously stored dark theme preference
    localStorage.removeItem('nippon_theme');
    document.documentElement.removeAttribute('data-theme');

    // Initialize Hero Background Slider
    initHeroSlider();

    // 2. Navbar Scroll Effect
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

    // 3. Intersection Observer for Scroll Animations
    const fadeElements = document.querySelectorAll('.fade-in-on-scroll, .slide-in-left, .slide-in-right');
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
        fadeElements.forEach(el => el.classList.add('visible'));
    }

    // 4. Smooth Scrolling for Anchor Links
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
                const offsetPosition = elementPosition + window.pageYOffset - navHeight - 10;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // 5. Destinations Carousel Controls Logic
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

    // 6. FAQ Accordion
    const faqButtons = document.querySelectorAll('.faq-question');
    faqButtons.forEach(button => {
        button.addEventListener('click', () => {
            const parent = button.parentElement;
            const isActive = parent.classList.contains('active');
            
            // Close other accordion items
            document.querySelectorAll('.faq-item').forEach(item => {
                item.classList.remove('active');
            });
            
            // Toggle current item
            if (!isActive) {
                parent.classList.add('active');
            }
        });
    });

});

// 7. Mobile Menu Functions
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
                menuIcon.className = 'ph ph-x';
            } else {
                menuIcon.className = 'ph ph-list';
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
        menuIcon.className = 'ph ph-list';
    }
}

// 8. Popup Modal Functions
function openModal(title, desc, waMessage) {
    const modal = document.getElementById('popupModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalDesc = document.getElementById('modalDesc');
    const modalWaBtn = document.getElementById('modalWaBtn');

    if (title && modalTitle) modalTitle.innerText = title;
    if (desc && modalDesc) modalDesc.innerText = desc;

    if (modalWaBtn) {
        const text = waMessage ? encodeURIComponent(waMessage) : encodeURIComponent(`Halo NipponTravel, saya ingin konsultasi mengenai ${title || 'paket wisata'}`);
        modalWaBtn.href = `https://wa.me/081392254657?text=${text}`;
    }

    if (modal) {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
}

function closeModal() {
    const modal = document.getElementById('popupModal');
    if (modal) {
        modal.classList.remove('active');
        document.body.style.overflow = '';
    }
}

// Close modal on background click
window.addEventListener('click', (e) => {
    const modal = document.getElementById('popupModal');
    if (e.target === modal) {
        closeModal();
    }
});

// Close modal on Escape key
window.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        closeModal();
        closeMenu();
    }
});

// 9. Contact Form Handler (Direct to WhatsApp)
function handleFormSubmit(e) {
    e.preventDefault();
    const name = document.getElementById('formName') ? document.getElementById('formName').value.trim() : '';
    const phone = document.getElementById('formPhone') ? document.getElementById('formPhone').value.trim() : '';
    const message = document.getElementById('formMessage') ? document.getElementById('formMessage').value.trim() : '';
    const title = document.getElementById('modalTitle') ? document.getElementById('modalTitle').innerText : 'NipponTravel';

    let text = `Halo NipponTravel!%0A%0ASaya ingin bertanya seputar *${encodeURIComponent(title)}*:%0A- Nama: ${encodeURIComponent(name)}%0A- No. WhatsApp: ${encodeURIComponent(phone)}`;
    if (message) {
        text += `%0A- Pesan / Pertanyaan: ${encodeURIComponent(message)}`;
    }

    closeModal();
    window.open(`https://wa.me/081392254657?text=${text}`, '_blank');
}
