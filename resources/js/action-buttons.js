document.addEventListener('DOMContentLoaded', () => {
    let lastScrollTop = 0;
    let isScrolling;
    const fabContainer = document.querySelector('.fab-container');

    if (!fabContainer) {
        console.error('Element with class fab-container not found');
        return;
    }

    window.addEventListener('scroll', () => {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        // Clear any existing timeout
        clearTimeout(isScrolling);

        // Check if the user is scrolling up or down
        if (scrollTop > lastScrollTop) {
            // Scrolling Down
            fabContainer.style.transform = 'translateY(-50px)';
        } else {
            // Scrolling Up
            fabContainer.style.transform = 'translateY(50px)';
        }

        // Update lastScrollTop to current scroll position
        lastScrollTop = scrollTop;

        // Set a timeout to reset the transform after scrolling stops
        isScrolling = setTimeout(() => {
            fabContainer.style.transform = 'translateY(0)';
        }, 500); // Adjust the delay to your preference
    });
});
