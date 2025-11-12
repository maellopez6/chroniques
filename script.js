// Transition fluide vers la page suivante
document.addEventListener('DOMContentLoaded', () => {
  const btn = document.querySelector('.enter-button');
  if (btn) {
    btn.addEventListener('click', e => {
      e.preventDefault();
      document.body.classList.add('fade-out');
      setTimeout(() => {
        window.location.href = btn.href;
      }, 1500);
    });
  }
});
