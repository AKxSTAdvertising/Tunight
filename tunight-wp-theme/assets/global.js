(() => {
  const header = document.querySelector('.header');
  const onScroll = () => { if(header) header.classList.toggle('is-scrolled', window.scrollY > 30); };
  onScroll(); window.addEventListener('scroll', onScroll, {passive:true});
  const targets = document.querySelectorAll('.intro-grid,.section-heading,.experience-card,.food-grid,.banquet .container,.occasion,.gallery-item,.testimonial,.final,.menu-category,.menu-feature,.story-intro,.story-image-section,.philosophy,.story-experience,.story-quote,.story-banquet,.values,.feature,.events,.process');
  targets.forEach(el => el.classList.add('reveal'));
  if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    const observer = new IntersectionObserver(entries => entries.forEach(entry => {
      if(entry.isIntersecting){entry.target.classList.add('is-visible');observer.unobserve(entry.target);}
    }), {threshold:0.12, rootMargin:'0px 0px -40px 0px'});
    targets.forEach(el => observer.observe(el));
  } else targets.forEach(el => el.classList.add('is-visible'));
})();