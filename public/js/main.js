/* =========================================
   NipponTravel - Main JavaScript
   ========================================= */

document.addEventListener('DOMContentLoaded', () => {

    // 1. Navbar Scroll Effect
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // 2. Intersection Observer for Animations (Fade & Slide)
    const fadeElements = document.querySelectorAll('.fade-in-on-scroll, .slide-in-left, .slide-in-right');
    
    const appearOptions = {
        threshold: 0.15,
        rootMargin: "0px 0px -50px 0px"
    };

    const appearOnScroll = new IntersectionObserver(function(entries, observer) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                return;
            } else {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, appearOptions);

    fadeElements.forEach(el => {
        appearOnScroll.observe(el);
    });

    // 3. Smooth Scrolling for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if(target) {
                // Close mobile menu if open
                const navLinks = document.querySelector('.nav-links');
                if(navLinks.classList.contains('active')) {
                    navLinks.classList.remove('active');
                }
                
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // 4. Carousel Logic
    const track = document.getElementById('carouselTrack');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    
    if(track && prevBtn && nextBtn) {
        let scrollAmount = 0;
        
        nextBtn.addEventListener('click', () => {
            const cardWidth = track.querySelector('.card').offsetWidth + 30; // 30 is the gap
            const maxScroll = track.scrollWidth - track.clientWidth;
            scrollAmount += cardWidth;
            if(scrollAmount > maxScroll) scrollAmount = maxScroll;
            track.scrollTo({
                top: 0,
                left: scrollAmount,
                behavior: 'smooth'
            });
        });

        prevBtn.addEventListener('click', () => {
            const cardWidth = track.querySelector('.card').offsetWidth + 30;
            scrollAmount -= cardWidth;
            if(scrollAmount < 0) scrollAmount = 0;
            track.scrollTo({
                top: 0,
                left: scrollAmount,
                behavior: 'smooth'
            });
        });
        
        // Update scrollAmount when user scrolls manually (touch or trackpad)
        track.addEventListener('scroll', () => {
            scrollAmount = track.scrollLeft;
        });

        // Mouse Drag to Scroll Logic
        let isDown = false;
        let startX;
        let scrollLeft;

        track.addEventListener('mousedown', (e) => {
            isDown = true;
            track.classList.add('dragging');
            startX = e.pageX - track.offsetLeft;
            scrollLeft = track.scrollLeft;
        });

        track.addEventListener('mouseleave', () => {
            isDown = false;
            track.classList.remove('dragging');
        });

        track.addEventListener('mouseup', () => {
            isDown = false;
            track.classList.remove('dragging');
        });

        track.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - track.offsetLeft;
            const walk = (x - startX) * 2; // Scroll-fast
            track.scrollLeft = scrollLeft - walk;
        });
    }

});

// 5. Mobile Menu Toggle
function toggleMenu() {
    const navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('active');
}

// 6. Popup Modal Logic
function openModal(title, desc) {
    const modal = document.getElementById('popupModal');
    const modalTitle = document.getElementById('modalTitle');
    const modalDesc = document.getElementById('modalDesc');

    if(title) modalTitle.innerText = title;
    if(desc) modalDesc.innerText = desc;

    modal.classList.add('active');
}

function closeModal() {
    const modal = document.getElementById('popupModal');
    modal.classList.remove('active');
}

// Close modal when clicking outside content
window.addEventListener('click', (e) => {
    const modal = document.getElementById('popupModal');
    if (e.target === modal) {
        closeModal();
    }
});
