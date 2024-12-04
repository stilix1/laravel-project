// public/js/portfolio.js

document.querySelectorAll('.category-filter button').forEach(button => {
    button.addEventListener('click', () => {
        const category = button.getAttribute('data-category');
        window.location.href = `?category=${category}`;
    });
});
