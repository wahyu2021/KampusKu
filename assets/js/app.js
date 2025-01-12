function toggleMenu() {
    const menu = document.getElementById('dropdown-menu');
    const isVisible = menu.classList.contains('hidden');
    // Toggle the hidden class based on its current state
    if (isVisible) {
      menu.classList.remove('hidden');
      menu.classList.add('block');
    } else {
      menu.classList.remove('block');
      menu.classList.add('hidden');
    }
}
