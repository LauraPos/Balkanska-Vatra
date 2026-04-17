<?php
include 'connection.php';
?>

<section id="menu" class="py-32 bg-plum-950 relative">
  <div class="max-w-7xl mx-auto px-6">

    <!-- HEADER -->
    <div class="text-center mb-16">
      <p class="font-crimson italic text-gold/60 text-lg tracking-[0.2em] mb-3">
        Our Offerings &nbsp;·&nbsp; <span class="text-gold/40">Наша Понуда</span>
      </p>
      <h2 class="font-cinzel text-5xl text-gold mb-2">The Menu</h2>
      <p class="font-cinzel text-3xl text-plum-400 mb-8">Мени</p>
    </div>

    <!-- CATEGORY FILTER -->
    <div class="flex flex-wrap justify-center gap-3 mb-12">
      <button class="cat-btn border border-gold bg-gold/10 text-gold px-5 py-2" data-cat="all">All</button>
      <button class="cat-btn border border-gold/25 text-plum-300 px-5 py-2" data-cat="starters">Starters</button>
      <button class="cat-btn border border-gold/25 text-plum-300 px-5 py-2" data-cat="grilled">Grilled</button>
      <button class="cat-btn border border-gold/25 text-plum-300 px-5 py-2" data-cat="main_dishes">Main Dishes</button>
      <button class="cat-btn border border-gold/25 text-plum-300 px-5 py-2" data-cat="soups">Soups</button>
      <button class="cat-btn border border-gold/25 text-plum-300 px-5 py-2" data-cat="desserts">Desserts</button>
    </div>

    <!-- MENU GRID -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6" id="menu-grid">
      <?php include 'newmenu.php'; ?>
    </div>
  </div>
</section>