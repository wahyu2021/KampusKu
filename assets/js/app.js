document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("sidebar");
    const mainContent = document.getElementById("mainContent");
    const toggleButton = document.getElementById("toggleSidebar");

    toggleButton.addEventListener("click", function () {
        sidebar.classList.toggle("hidden");
        mainContent.classList.toggle("expanded");
    });
});