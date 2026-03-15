(function () {
    var body = document.body;
    var toggle = document.querySelector('.menu-toggle');
    var navigation = document.querySelector('.main-navigation');

    function closeMenu() {
        body.classList.remove('menu-open');
        if (toggle) {
            toggle.setAttribute('aria-expanded', 'false');
        }
    }

    if (toggle && navigation) {
        toggle.addEventListener('click', function () {
            var isOpen = body.classList.toggle('menu-open');
            toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });

        document.addEventListener('click', function (event) {
            if (!body.classList.contains('menu-open')) {
                return;
            }

            if (!navigation.contains(event.target) && !toggle.contains(event.target)) {
                closeMenu();
            }
        });

        navigation.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                closeMenu();
            });
        });

        window.addEventListener('resize', function () {
            if (window.innerWidth > 860) {
                closeMenu();
            }
        });
    }

    var revealItems = document.querySelectorAll('[data-reveal]');

    if ('IntersectionObserver' in window) {
        var revealObserver = new IntersectionObserver(
            function (entries, observer) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            },
            {
                threshold: 0.2,
                rootMargin: '0px 0px -40px 0px',
            }
        );

        revealItems.forEach(function (item) {
            revealObserver.observe(item);
        });
    } else {
        revealItems.forEach(function (item) {
            item.classList.add('is-visible');
        });
    }
})();
