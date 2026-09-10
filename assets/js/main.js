document.addEventListener('DOMContentLoaded', () => {
  const progressBar = document.querySelector('.reading-progress-bar');
  if (progressBar) {
    window.addEventListener('scroll', () => {
      const s = document.documentElement.scrollTop;
      const h = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      if (h > 0) progressBar.style.width = `${(s / h) * 100}%`;
    });
  }
  const mobileToggle = document.querySelector('.mobile-toggle');
  const drawer = document.querySelector('.mobile-drawer');
  const backdrop = document.querySelector('.drawer-backdrop');
  const closeBtn = document.querySelector('.mobile-drawer-close');
  function toggle(o) {
    if (!drawer) return;
    drawer.classList.toggle('open', o);
    if (backdrop) backdrop.classList.toggle('open', o);
    document.body.style.overflow = o ? 'hidden' : '';
  }
  if (mobileToggle) mobileToggle.addEventListener('click', () => toggle(true));
  if (closeBtn) closeBtn.addEventListener('click', () => toggle(false));
  if (backdrop) backdrop.addEventListener('click', () => toggle(false));
  document.addEventListener('keydown', (e) => { if (e.key === 'Escape') toggle(false); });
  document.querySelectorAll('.mobile-drawer a').forEach(l => l.addEventListener('click', () => toggle(false)));
  document.querySelectorAll('.faq-item').forEach(item => {
    const q = item.querySelector('.faq-question');
    if (q) {
      q.addEventListener('click', () => {
        const active = item.classList.contains('active');
        document.querySelectorAll('.faq-item').forEach(o => o.classList.remove('active'));
        item.classList.toggle('active', !active);
      });
    }
  });
});