
  const toggleButton = document.getElementById('darkModeToggle');
  toggleButton.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
    localStorage.setItem('dark-mode', document.body.classList.contains('dark-mode'));
  });

  // Memastikan dark mode tetap aktif setelah halaman dimuat ulang
  window.addEventListener('load', () => {
    if (localStorage.getItem('dark-mode') === 'true') {
      document.body.classList.add('dark-mode');
    }
  });

