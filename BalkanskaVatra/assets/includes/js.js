 <script>
    // ── Page router ──────────────────────────────────────────────
    function showPage(id) {
      document.querySelectorAll('.page').forEach(p => p.classList.add('hidden'));
      document.getElementById(id).classList.remove('hidden');
      window.scrollTo(0, 0);
    }
    // ── Admin tab switcher ────────────────────────────────────────
    function showTab(id) {
      document.querySelectorAll('.tab-panel').forEach(p => p.classList.add('hidden'));
      document.querySelectorAll('.tab-btn').forEach(b => {
        b.classList.remove('border-gold', 'text-gold', 'bg-gold/10');
        b.classList.add('border-gold/20', 'text-plum-400');
      });
      document.getElementById(id).classList.remove('hidden');
      const btn = document.querySelector('[data-tab="' + id + '"]');
      if (btn) {
        btn.classList.add('border-gold', 'text-gold', 'bg-gold/10');
        btn.classList.remove('border-gold/20', 'text-plum-400');
      }
    }
    // ── Modal toggle ──────────────────────────────────────────────
    function toggleModal(id) {
      const m = document.getElementById(id);
      m.classList.toggle('hidden');
      m.classList.toggle('flex');
    }

    // menu

    function filterMenu(category) {
  const cards = document.querySelectorAll('.menu-card');

  cards.forEach(card => {
    const cardCat = card.getAttribute('data-gang');
    if(category === 'all' || cardCat === category){
      card.style.display = 'block';
      setTimeout(() => card.style.opacity = 1, 50); // fade-in
    } else {
      card.style.opacity = 0;
      setTimeout(() => card.style.display = 'none', 500); // fade-out
    }
  });

  // Active button styling
  document.querySelectorAll('.cat-btn').forEach(btn => {
    btn.classList.remove('bg-gold', 'text-plum-950');
    btn.classList.add('text-gold', 'bg-gold/10');
  });
  const activeBtn = document.querySelector(`.cat-btn[data-cat="${category}"]`);
  if(activeBtn){
    activeBtn.classList.add('bg-gold', 'text-plum-950');
    activeBtn.classList.remove('bg-gold/10');
  }
}

// Voeg click event listeners toe
document.querySelectorAll('.cat-btn').forEach(btn => {
  btn.addEventListener('click', () => filterMenu(btn.getAttribute('data-cat')));
});

// Show all on load
document.addEventListener('DOMContentLoaded', () => filterMenu('all'));
  </script>