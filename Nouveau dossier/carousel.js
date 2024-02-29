document.querySelectorAll('.image-container').forEach(item => {
  item.addEventListener('click', () => {
    // Toggle full screen class
    item.classList.toggle('full-screen');
  });
});
