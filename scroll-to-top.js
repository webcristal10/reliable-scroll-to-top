document.addEventListener('DOMContentLoaded', function () {
    const scrollBtn = document.getElementById('reliable-scroll-to-top');

    window.addEventListener('scroll', function () {
        if (window.pageYOffset > 300) {
            scrollBtn.style.display = 'block';
        } else {
            scrollBtn.style.display = 'none';
        }
    });

    scrollBtn.addEventListener('click', function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});
