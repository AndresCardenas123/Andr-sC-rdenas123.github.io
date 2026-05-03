(function () {
  var root = document.documentElement;

  function getSavedTheme() {
    try {
      return localStorage.getItem('theme');
    } catch (error) {
      return null;
    }
  }

  function applyTheme(theme) {
    var isDark = theme === 'dark';
    root.classList.toggle('dark-mode', isDark);
    if (document.body) {
      document.body.classList.toggle('dark-mode', isDark);
    }

    try {
      localStorage.setItem('theme', isDark ? 'dark' : 'light');
    } catch (error) {
      console.warn('No se pudo guardar el tema.', error);
    }
  }

  if (getSavedTheme() === 'dark') {
    root.classList.add('dark-mode');
  }

  window.applyMyPetsTheme = applyTheme;

  document.addEventListener('DOMContentLoaded', function () {
    if (document.body) {
      document.body.classList.toggle('dark-mode', root.classList.contains('dark-mode'));
    }

    var toggle = document.getElementById('theme-toggle');
    if (toggle) {
      toggle.checked = root.classList.contains('dark-mode');
      toggle.addEventListener('change', function () {
        applyTheme(toggle.checked ? 'dark' : 'light');
      });
    }
  });
}());
