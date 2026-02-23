// ===== HEADER SCROLL EFFECT + SCROLL TO TOP (merged, passive) =====
const header = document.getElementById('header');
const scrollTopBtn = document.getElementById('scrollTop');

let ticking = false;
window.addEventListener('scroll', () => {
  if (!ticking) {
    requestAnimationFrame(() => {
      const y = window.scrollY;
      if (header) {
        header.classList.toggle('scrolled', y > 50);
      }
      if (scrollTopBtn) {
        scrollTopBtn.classList.toggle('visible', y > 400);
      }
      ticking = false;
    });
    ticking = true;
  }
}, { passive: true });

if (scrollTopBtn) {
  scrollTopBtn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
}

// ===== MOBILE MENU =====
const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('navLinks');

if (hamburger && navLinks) {
  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navLinks.classList.toggle('open');
  });

  // Close menu when clicking a link
  navLinks.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      hamburger.classList.remove('active');
      navLinks.classList.remove('open');
    });
  });

  // Close menu when clicking outside
  document.addEventListener('click', (e) => {
    if (!hamburger.contains(e.target) && !navLinks.contains(e.target)) {
      hamburger.classList.remove('active');
      navLinks.classList.remove('open');
    }
  });
}

// ===== STATS COUNTER ANIMATION =====
const statNumbers = document.querySelectorAll('.stat-number');

if (statNumbers.length > 0) {
  const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;
        const target = parseInt(el.getAttribute('data-target'));
        const duration = 2000;
        const startTime = performance.now();

        function updateCount(currentTime) {
          const elapsed = currentTime - startTime;
          const progress = Math.min(elapsed / duration, 1);
          const eased = 1 - Math.pow(1 - progress, 3);
          el.textContent = Math.round(target * eased);

          if (progress < 1) {
            requestAnimationFrame(updateCount);
          } else {
            el.textContent = target;
          }
        }

        requestAnimationFrame(updateCount);
        statsObserver.unobserve(el);
      }
    });
  }, { threshold: 0.5 });

  statNumbers.forEach(stat => statsObserver.observe(stat));
}

// ===== FADE IN ANIMATIONS =====
const fadeElements = document.querySelectorAll(
  '.about-section, .service-card, .testimonial-card, .contact-form-wrapper, .contact-info-wrapper, .accreditation-card'
);

fadeElements.forEach(el => el.classList.add('fade-in'));

const fadeObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const siblings = entry.target.parentElement?.children;
      if (siblings) {
        const index = Array.from(siblings).indexOf(entry.target);
        entry.target.style.transitionDelay = (index * 0.1) + 's';
      }
      entry.target.classList.add('visible');
      fadeObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.1 });

fadeElements.forEach(el => fadeObserver.observe(el));

// ===== CONTACT FORM (Formspree) =====
const contactForm = document.getElementById('contactForm');

if (contactForm) {
  contactForm.addEventListener('submit', async (e) => {
    e.preventDefault();
    const btn = contactForm.querySelector('button[type="submit"]');
    const originalText = btn.textContent;
    btn.textContent = 'Sending...';
    btn.disabled = true;

    try {
      const response = await fetch(contactForm.action, {
        method: 'POST',
        body: new FormData(contactForm),
        headers: { 'Accept': 'application/json' }
      });

      if (response.ok) {
        btn.textContent = 'Message Sent!';
        btn.style.background = '#22c55e';
        btn.style.borderColor = '#22c55e';
        contactForm.reset();
        setTimeout(() => {
          btn.textContent = originalText;
          btn.style.background = '';
          btn.style.borderColor = '';
          btn.disabled = false;
        }, 3000);
      } else {
        throw new Error('Form submission failed');
      }
    } catch (error) {
      btn.textContent = 'Error - Try Again';
      btn.style.background = '#ef4444';
      btn.style.borderColor = '#ef4444';
      setTimeout(() => {
        btn.textContent = originalText;
        btn.style.background = '';
        btn.style.borderColor = '';
        btn.disabled = false;
      }, 3000);
    }
  });
}
