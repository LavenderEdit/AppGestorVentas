document.addEventListener('DOMContentLoaded', function() {
  const carousel = document.getElementById('mainCarousel');
  if (!carousel) return;

  // 1. Estado para controlar el primer ciclo
  let isFirstCycle = true;

  // 2. Configuración optimizada de animación
  const animationConfig = {
      title: { duration: 2500, easing: 'ease-out' },
      text: { duration: 2000, delay: 1500, easing: 'ease-out' }
  };

  // 3. Función mejorada para resetear animaciones
  function resetAnimations(slide) {
      const title = slide.querySelector('.typewriter-title');
      const text = slide.querySelector('.typewriter-text');
      
      [title, text].forEach(el => {
          if (!el) return;
          
          // Detener animaciones activas
          el.style.animation = 'none';
          el.style.width = '0';
          el.style.opacity = '0';
          
          // Forzar reflow de manera segura
          void el.offsetHeight;
          
          // Restaurar contenido original
          el.textContent = el.dataset.originalText || '';
      });
  }

  // 4. Animación controlada con flags
  function animateActiveSlide() {
      const activeSlide = document.querySelector('.carousel-item.active');
      if (!activeSlide) return;

      resetAnimations(activeSlide);

      const title = activeSlide.querySelector('.typewriter-title');
      const text = activeSlide.querySelector('.typewriter-text');

      // Solo animar si está visible (evita parpadeo en slides no activos)
      if (activeSlide.classList.contains('active')) {
          if (title) {
              title.style.animation = `typewriter-title ${animationConfig.title.duration}ms ${animationConfig.title.easing} forwards`;
          }

          if (text) {
              setTimeout(() => {
                  text.style.animation = `typewriter-text ${animationConfig.text.duration}ms ${animationConfig.text.easing} forwards`;
              }, isFirstCycle ? animationConfig.text.delay : 100);
          }
      }

      // Marcar el fin del primer ciclo
      if (activeSlide.dataset.index === '0' && !isFirstCycle) {
          isFirstCycle = false;
      }
  }

  // 5. Inicialización mejorada
  function initCarousel() {
      document.querySelectorAll('.carousel-item').forEach((item, index) => {
          item.dataset.index = index;
          const title = item.querySelector('.typewriter-title');
          const text = item.querySelector('.typewriter-text');
          
          if (title) title.dataset.originalText = title.textContent;
          if (text) text.dataset.originalText = text.textContent;
          
          resetAnimations(item);
      });

      // Configurar carrusel
      new bootstrap.Carousel(carousel, {
          interval: 5000,
          pause: 'hover',
          wrap: true
      });

      // Disparar animación inicial
      setTimeout(animateActiveSlide, 300);
  }

  // 6. Manejar eventos de transición
  carousel.addEventListener('slid.bs.carousel', function() {
      // Pequeño delay para asegurar que el slide está activo
      setTimeout(animateActiveSlide, 50);
  });

  initCarousel();
});
