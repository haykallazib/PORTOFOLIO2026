document.addEventListener('DOMContentLoaded', function() {
    const progressBar = document.getElementById('scrollProgressBar');
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    const sections = document.querySelectorAll('section');
    let isScrolling = false;

    // ---------- UPDATE PROGRESS BAR ----------
    function updateProgressBar() {
        const scrollTop = window.scrollY;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const progress = (scrollTop / docHeight) * 100;
        progressBar.style.width = progress + '%';
    }

    // ---------- DETECT ACTIVE SECTION ----------
    function updateActiveNav() {
        let currentId = '';
        sections.forEach(section => {
            const rect = section.getBoundingClientRect();
            if (rect.top <= 150) {
                currentId = section.getAttribute('id');
            }
        });
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === '#' + currentId) {
                link.classList.add('active');
            }
        });
    }

    // ---------- SCROLL EVENT ----------
    window.addEventListener('scroll', function() {
        updateProgressBar();
        updateActiveNav();
    });

    // ---------- NAV LINK CLICK (SMOOTH SCROLL) ----------
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const target = document.getElementById(targetId);
            if (target) {
                const offsetTop = target.offsetTop - 70;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }

            // Update active class
            navLinks.forEach(l => l.classList.remove('active'));
            this.classList.add('active');

            // Tutup navbar mobile
            const navbarCollapse = document.getElementById('navbarNav');
            const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
            if (bsCollapse) {
                bsCollapse.hide();
            }
        });
    });

    // ---------- INITIAL LOAD: START AT HOME ----------
    // Pastikan halaman di posisi paling atas (Home)
    window.scrollTo({ top: 0, behavior: 'auto' });

    // Jika ada hash di URL, override ke home
    if (window.location.hash) {
        setTimeout(() => {
            window.scrollTo({ top: 0, behavior: 'auto' });
            window.location.hash = '';
        }, 100);
    }

    // ---------- UPDATE PROGRESS ON LOAD ----------
    setTimeout(() => {
        updateProgressBar();
        updateActiveNav();
    }, 200);

    // ---------- RE-CALCULATE ON RESIZE ----------
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            updateProgressBar();
        }, 200);
    });
});