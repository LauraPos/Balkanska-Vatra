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
  </script>