// Show/hide the "To the Top" button based on scroll position
window.onscroll = function() {
    showToTopButton();
};

function showToTopButton() {
    var btn = document.getElementById("toTopBtn");
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        btn.style.display = "block";
    } else {
        btn.style.display = "none";
    }
}

// Smooth scroll to the top
function scrollToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}


