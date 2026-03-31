<?php
// menu.php
include 'connection.php'; // jouw bestaande DB connectie
?>

<!-- MENU SECTION -->
<section id="menu" class="py-32 bg-plum-950 relative">
  <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-gold/30 to-transparent"></div>
  <div class="max-w-7xl mx-auto px-6">

    <!-- HEADER -->
    <div class="text-center mb-16">
      <p class="font-crimson italic text-gold/60 text-lg tracking-[0.2em] mb-3">
        Our Offerings &nbsp;·&nbsp; <span class="text-gold/40">Наша Понуда</span>
      </p>
      <h2 class="font-cinzel text-5xl text-gold mb-2">The Menu</h2>
      <p class="font-cinzel text-3xl text-plum-400 mb-8">Мени</p>
      <div class="flex items-center justify-center gap-4">
        <div class="h-px w-20 bg-gradient-to-r from-transparent to-gold/40"></div>
        <span class="text-gold">✦</span>
        <div class="h-px w-20 bg-gradient-to-l from-transparent to-gold/40"></div>
      </div>
    </div>

    <!-- CATEGORY FILTER -->
    <div class="flex flex-wrap justify-center gap-3 mb-12">
      <button class="cat-btn border border-gold bg-gold/10 text-gold px-5 py-2 font-cinzel text-[11px] tracking-widest transition-all duration-200 hover:bg-gold hover:text-plum-950" data-cat="all">
        All <span class="font-crimson italic text-[10px] opacity-60">/ Све</span>
      </button>
      <button class="cat-btn border border-gold/25 text-plum-300 px-5 py-2 font-cinzel text-[11px] tracking-widest transition-all duration-200 hover:border-gold hover:text-gold" data-cat="starters">
        Starters <span class="font-crimson italic text-[10px] opacity-60">/ Предјела</span>
      </button>
      <button class="cat-btn border border-gold/25 text-plum-300 px-5 py-2 font-cinzel text-[11px] tracking-widest transition-all duration-200 hover:border-gold hover:text-gold" data-cat="grilled">
        Grilled <span class="font-crimson italic text-[10px] opacity-60">/ Роштиљ</span>
      </button>
      <button class="cat-btn border border-gold/25 text-plum-300 px-5 py-2 font-cinzel text-[11px] tracking-widest transition-all duration-200 hover:border-gold hover:text-gold" data-cat="main_dishes">
        Main Dishes <span class="font-crimson italic text-[10px] opacity-60">/ Главна Јела</span>
      </button>
      <button class="cat-btn border border-gold/25 text-plum-300 px-5 py-2 font-cinzel text-[11px] tracking-widest transition-all duration-200 hover:border-gold hover:text-gold" data-cat="soups">
        Soups <span class="font-crimson italic text-[10px] opacity-60">/ Чорбе</span>
      </button>
      <button class="cat-btn border border-gold/25 text-plum-300 px-5 py-2 font-cinzel text-[11px] tracking-widest transition-all duration-200 hover:border-gold hover:text-gold" data-cat="desserts">
        Desserts <span class="font-crimson italic text-[10px] opacity-60">/ Десерти</span>
      </button>
    </div>

    <!-- MENU GRID -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6" id="menu-grid">

      <?php
      $stmt = $conn->query("SELECT * FROM gerechten ORDER BY gang, naam");
      while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $gang = htmlspecialchars($row['gang']); // starters, grilled, etc.
        $naam = htmlspecialchars($row['naam']);
        $prijs = number_format($row['prijs'], 2, '.', '');
        $beschrijving = htmlspecialchars($row['beschrijving']);
        $img = htmlspecialchars($row['img']);
        ?>
        <div class="menu-card opacity-0 transition-opacity duration-500 group relative bg-plum-900/60 border border-gold/15 hover:border-gold/45 hover:-translate-y-1 hover:shadow-[0_20px_50px_rgba(0,0,0,0.5)]" data-gang="<?= $gang ?>">
          <div class="h-px w-0 group-hover:w-full bg-gradient-to-r from-gold/60 to-transparent transition-all duration-500"></div>
          <div class="p-7">
            <span class="inline-block px-3 py-1 bg-plum-700/50 border border-plum-500/40 text-plum-300 font-cinzel text-[10px] tracking-widest mb-4"><?= ucfirst(str_replace('_',' ',$gang)) ?></span>
            <div class="flex items-start justify-between gap-4 mb-3">
              <div><h3 class="font-cinzel text-gold text-lg leading-tight mb-1"><?= $naam ?></h3></div>
              <p class="font-cinzel text-gold text-lg shrink-0">€<?= $prijs ?></p>
            </div>
            <div class="h-px bg-gradient-to-r from-gold/20 to-transparent mb-3"></div>
            <p class="font-crimson text-plum-300/80 text-sm leading-relaxed mb-4"><?= $beschrijving ?></p>
            <button onclick="addToCart('<?= strtolower(str_replace(' ', '_', $naam)) ?>','<?= $naam ?>',<?= $prijs ?>)" class="w-full py-2.5 border border-gold/30 text-gold font-cinzel text-xs tracking-widest hover:bg-gold hover:text-plum-950 transition-all duration-200 flex items-center justify-center gap-2">
              Add to Order
            </button>
          </div>
        </div>
      <?php } ?>

    </div>
  </div>
</section>

<!-- LINK NAAR EXTERN JS-BESTAND -->
<script src="js.js"></script>