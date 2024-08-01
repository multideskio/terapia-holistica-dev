/*
Template Name: Velzon - Admin & Dashboard Template
Author: Themesbrand
Version: 3.0.0
Website: https://Themesbrand.com/
Contact: Themesbrand@gmail.com
File: Common Plugins Js File
*/

// Função para carregar um script dinamicamente
function loadScript(src) {
  return new Promise((resolve, reject) => {
      const script = document.createElement('script');
      script.src = src;
      script.type = 'text/javascript';
      script.onload = resolve;
      script.onerror = reject;
      document.head.appendChild(script);
  });
}

// Verifica se os elementos existem no DOM e carrega os scripts necessários
(async function() {
  const toastList = document.querySelectorAll("[toast-list]");
  const dataChoices = document.querySelectorAll('[data-choices]');
  const dataProvider = document.querySelectorAll("[data-provider]");

  if (toastList.length || dataChoices.length || dataProvider.length) {
      try {
          await loadScript('https://cdn.jsdelivr.net/npm/toastify-js');
          await loadScript('/assets/libs/choices.js/public/assets/scripts/choices.min.js');
          await loadScript('/assets/libs/flatpickr/flatpickr.min.js');
      } catch (error) {
          console.error('Failed to load scripts', error);
      }
  }
})();
