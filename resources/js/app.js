document.addEventListener('DOMContentLoaded', function() {
    const themeToggle = document.createElement('button');
    themeToggle.className = 'btn btn-sm btn-outline-secondary position-fixed bottom-0 end-0 m-3';
    themeToggle.innerHTML = '<i class="fas fa-moon"></i>';
    themeToggle.onclick = function() {
        const html = document.documentElement;
        if (html.getAttribute('data-bs-theme') === 'dark') {
            html.removeAttribute('data-bs-theme');
            this.innerHTML = '<i class="fas fa-moon"></i>';
        } else {
            html.setAttribute('data-bs-theme', 'dark');
            this.innerHTML = '<i class="fas fa-sun"></i>';
        }
    };
    document.body.appendChild(themeToggle);
});