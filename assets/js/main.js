document.addEventListener('DOMContentLoaded', () => {

    const nav = document.getElementById('mainNavbar');
    const offset = 20;

    /* =========================
       NAVBAR SCROLL
    ========================= */

    let navScrolled = false;

    const updateNavbar = () => {
        const shouldBeScrolled = window.scrollY > offset;

        if (shouldBeScrolled !== navScrolled) {
            nav.classList.toggle('scrolled', shouldBeScrolled);
            navScrolled = shouldBeScrolled;
        }
    };

    updateNavbar();

    window.addEventListener('scroll', updateNavbar, {
        passive: true
    });

    /* =========================
       REVEAL ON SCROLL
    ========================= */

    const revealElements = document.querySelectorAll('.reveal-on-scroll');

    // Accesibilidad
    const reduceMotion = window.matchMedia(
        '(prefers-reduced-motion: reduce)'
    ).matches;

    if (reduceMotion) {
        revealElements.forEach(el => el.classList.add('active'));
        return;
    }

    const observerOptions = {
        root: null,
        threshold: 0.12,
        rootMargin: '0px 0px -60px 0px'
    };

    const revealObserver = new IntersectionObserver(
        (entries, observer) => {

            entries.forEach(entry => {

                if (!entry.isIntersecting) return;

                entry.target.classList.add('active');

                // Revelar una sola vez
                observer.unobserve(entry.target);

            });

        },
        observerOptions
    );

    revealElements.forEach((element, index) => {

        // Delay automático escalonado
        element.style.transitionDelay =
            `${Math.min(index * 80, 400)}ms`;

        revealObserver.observe(element);

    });

    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    const spyObserver = new IntersectionObserver(
        (entries) => {

            entries.forEach(entry => {

                if (!entry.isIntersecting) return;

                const id = entry.target.id;

                navLinks.forEach(link => {
                    link.classList.remove('active');
                });

                const activeLink = document.querySelector(
                    `.nav-link[href="#${id}"]`
                );

                activeLink?.classList.add('active');

            });

        },
        {
            threshold: 0.4
        }
    );

    sections.forEach(section => {
        spyObserver.observe(section);
    });

});