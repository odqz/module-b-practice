window.openModal = function (modalId) {
  document.getElementById(modalId).style.display = 'flex';
}

window.closeModal = function (modalId) {
  document.getElementById(modalId).style.display = 'none';
}

// Close modal when clicking outside
window.addEventListener('click', function (event) {
  if (event.target.classList.contains('modal')) {
    event.target.style.display = 'none';
  }
});

// Close modal with Escape key
document.addEventListener('keydown', function (event) {
  if (event.key === 'Escape') {
    const modals = document.querySelectorAll('.modal');
    modals.forEach((modal) => {
      if (modal.style.display === 'flex') {
        modal.style.display = 'none';
      }
    });
  }
});