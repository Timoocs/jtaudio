document.addEventListener('DOMContentLoaded', () => {
    const targets = document.querySelectorAll('.slideclass');
  
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('activeSlide');
        }
      });
    });
  
    targets.forEach(target => {
      observer.observe(target);
    });
  });
  
