const dropdownButton = document.getElementById('dropdown-button');
const dropdownMenu = document.getElementById('dropdown-menu');
let isDropdownOpen = true;

function toggleDropdown() {
  isDropdownOpen = !isDropdownOpen;
  if (isDropdownOpen) {
    dropdownMenu.classList.remove('hidden');
  } else {
    dropdownMenu.classList.add('hidden');
  }
}
toggleDropdown();
dropdownButton.addEventListener('click', toggleDropdown);
window.addEventListener('click', (event) => {
  if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
    dropdownMenu.classList.add('hidden');
    isDropdownOpen = false;
  }
});