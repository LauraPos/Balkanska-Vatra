<div id="page-main" class="page">

  <?php include('./assets/includes/header.php'); ?>

  <!-- HERO -->
  <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-plum-950"></div>
    <div class="relative z-10 text-center px-6 max-w-5xl mx-auto pt-24">
      <h1 class="font-cinzel text-7xl md:text-9xl text-gold tracking-widest leading-none mb-2">Balkanska</h1>
      <h2 class="font-cinzel text-5xl md:text-7xl text-plum-300 tracking-[0.3em] leading-none mb-3">Vatra</h2>
      <p class="font-crimson text-plum-300 text-xl leading-loose max-w-2xl mx-auto mb-12">
        Where the fire of the Balkans meets your table — traditions passed down through generations.
      </p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="#menu" class="px-12 py-4 bg-gold text-plum-950 font-cinzel text-sm tracking-widest hover:bg-gold-light hover:shadow-lg transition-all duration-300">View Menu</a>
        <a href="#reservations" class="px-12 py-4 border border-gold/50 text-gold font-cinzel text-sm tracking-widest hover:border-gold hover:bg-gold/10 transition-all duration-300">Reserve a Table</a>
      </div>
    </div>
  </section>

  <!-- sections -->
  <?php include('./assets/includes/about.php'); ?>
  <?php include('./assets/includes/gallery.php'); ?>
  <?php include('./assets/includes/menu.php'); ?>
  <?php include('./assets/includes/reservation.php'); ?>
  <?php include('./assets/includes/contact.php'); ?>
  <?php include('./assets/includes/cart.php'); ?>
  <?php include('./assets/includes/footer.php'); ?> 

</div>