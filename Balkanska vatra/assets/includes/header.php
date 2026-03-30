<nav class="fixed top-0 left-0 right-0 z-30 bg-plum-950/85 backdrop-blur-xl border-b border-gold/20">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
      <div class="font-cinzel text-gold">
        <span class="block text-[10px] tracking-[0.3em] font-crimson italic text-gold/50 mb-0.5">Authentic Serbian Restaurant</span>
        <span class="text-base tracking-widest">Balkanska Vatra</span>
        <span class="block text-[10px] tracking-[0.25em] font-crimson italic text-gold/40 mt-0.5">Балканска Ватра</span>
      </div>
      <ul class="hidden md:flex items-center gap-8">
        <li><a href="#about"   class="font-crimson text-sm tracking-widest text-plum-300 hover:text-gold transition-colors duration-300">About <span class="text-gold/40 italic text-xs">· О нама</span></a></li>
        <li><a href="#menu"    class="font-crimson text-sm tracking-widest text-plum-300 hover:text-gold transition-colors duration-300">Menu <span class="text-gold/40 italic text-xs">· Мени</span></a></li>
        <li><a href="#gallery" class="font-crimson text-sm tracking-widest text-plum-300 hover:text-gold transition-colors duration-300">Gallery <span class="text-gold/40 italic text-xs">· Галерија</span></a></li>
        <li><a href="#contact" class="font-crimson text-sm tracking-widest text-plum-300 hover:text-gold transition-colors duration-300">Contact <span class="text-gold/40 italic text-xs">· Контакт</span></a></li>
      </ul>
      <div class="flex items-center gap-3">
        <!-- Cart button -->
        <button onclick="openCart()" class="relative p-2 text-gold/70 hover:text-gold transition-colors duration-200">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/></svg>
          <span id="cart-badge" class="hidden absolute -top-1 -right-1 w-5 h-5 bg-gold text-plum-950 font-cinzel text-[10px] rounded-full flex items-center justify-center">0</span>
        </button>
        <a href="#reservations" class="hidden md:inline-block px-5 py-2 border border-gold text-gold font-cinzel text-xs tracking-widest hover:bg-gold hover:text-plum-950 transition-all duration-300">
          Reserve <span class="font-crimson italic font-normal opacity-70 text-[11px] ml-1">/ Резервација</span>
        </a>
        <button onclick="showPage('page-login')" class="hidden md:inline-block px-3 py-2 border border-plum-600/40 text-plum-500 font-cinzel text-[10px] tracking-widest hover:border-plum-500 hover:text-plum-300 transition-all duration-300">Admin</button>
      </div>
    </div>
  </nav>