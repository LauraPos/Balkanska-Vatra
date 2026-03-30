<!-- MENU -->
  <section id="menu" class="py-32 bg-plum-950 relative">
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-gold/30 to-transparent"></div>
    <div class="max-w-7xl mx-auto px-6">

      <!-- header -->
      <div class="text-center mb-16">
        <p class="font-crimson italic text-gold/60 text-lg tracking-[0.2em] mb-3">Our Offerings &nbsp;·&nbsp; <span class="text-gold/40">Наша Понуда</span></p>
        <h2 class="font-cinzel text-5xl text-gold mb-2">The Menu</h2>
        <p class="font-cinzel text-3xl text-plum-400 mb-8">Мени</p>
        <div class="flex items-center justify-center gap-4">
          <div class="h-px w-20 bg-gradient-to-r from-transparent to-gold/40"></div>
          <span class="text-gold">✦</span>
          <div class="h-px w-20 bg-gradient-to-l from-transparent to-gold/40"></div>
        </div>
      </div>

      <!-- category filter -->
      <div class="flex flex-wrap justify-center gap-3 mb-12">
        <button class="cat-btn border border-gold bg-gold/10 text-gold px-5 py-2 font-cinzel text-[11px] tracking-widest transition-all duration-200 hover:bg-gold hover:text-plum-950" data-cat="all" onclick="filterMenu('all')">
          All <span class="font-crimson italic text-[10px] opacity-60">/ Све</span>
        </button>
        <button class="cat-btn border border-gold/25 text-plum-300 px-5 py-2 font-cinzel text-[11px] tracking-widest transition-all duration-200 hover:border-gold hover:text-gold" data-cat="Starters" onclick="filterMenu('Starters')">
          Starters <span class="font-crimson italic text-[10px] opacity-60">/ Предјела</span>
        </button>
        <button class="cat-btn border border-gold/25 text-plum-300 px-5 py-2 font-cinzel text-[11px] tracking-widest transition-all duration-200 hover:border-gold hover:text-gold" data-cat="Grilled" onclick="filterMenu('Grilled')">
          Grilled <span class="font-crimson italic text-[10px] opacity-60">/ Роштиљ</span>
        </button>
        <button class="cat-btn border border-gold/25 text-plum-300 px-5 py-2 font-cinzel text-[11px] tracking-widest transition-all duration-200 hover:border-gold hover:text-gold" data-cat="Main Dishes" onclick="filterMenu('Main Dishes')">
          Main Dishes <span class="font-crimson italic text-[10px] opacity-60">/ Главна Јела</span>
        </button>
        <button class="cat-btn border border-gold/25 text-plum-300 px-5 py-2 font-cinzel text-[11px] tracking-widest transition-all duration-200 hover:border-gold hover:text-gold" data-cat="Soups" onclick="filterMenu('Soups')">
          Soups <span class="font-crimson italic text-[10px] opacity-60">/ Чорбе</span>
        </button>
        <button class="cat-btn border border-gold/25 text-plum-300 px-5 py-2 font-cinzel text-[11px] tracking-widest transition-all duration-200 hover:border-gold hover:text-gold" data-cat="Desserts" onclick="filterMenu('Desserts')">
          Desserts <span class="font-crimson italic text-[10px] opacity-60">/ Десерти</span>
        </button>
        <button class="cat-btn border border-gold/25 text-plum-300 px-5 py-2 font-cinzel text-[11px] tracking-widest transition-all duration-200 hover:border-gold hover:text-gold" data-cat="Drinks" onclick="filterMenu('Drinks')">
          Drinks <span class="font-crimson italic text-[10px] opacity-60">/ Пића</span>
        </button>
      </div>

      <!-- menu grid — PHP vult dit met DB data, dit zijn placeholders -->
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6" id="menu-grid">

        <!-- STARTERS -->
        <div class="menu-card group relative bg-plum-900/60 border border-gold/15 hover:border-gold/45 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_20px_50px_rgba(0,0,0,0.5)]" data-gang="Starters">
          <div class="h-px w-0 group-hover:w-full bg-gradient-to-r from-gold/60 to-transparent transition-all duration-500"></div>
          <div class="p-7">
            <span class="inline-block px-3 py-1 bg-plum-700/50 border border-plum-500/40 text-plum-300 font-cinzel text-[10px] tracking-widest mb-4">Starters</span>
            <div class="flex items-start justify-between gap-4 mb-3">
              <div><h3 class="font-cinzel text-gold text-lg leading-tight mb-1">Gibanica</h3><p class="font-crimson italic text-plum-400">Гибаница</p></div>
              <p class="font-cinzel text-gold text-lg shrink-0">€9.00</p>
            </div>
            <div class="h-px bg-gradient-to-r from-gold/20 to-transparent mb-3"></div>
            <p class="font-crimson text-plum-300/80 text-sm leading-relaxed mb-4">Flaky phyllo pastry with fresh cottage cheese and eggs, baked golden.</p>
            <button onclick="addToCart('gibanica','Gibanica',9.00)" class="w-full py-2.5 border border-gold/30 text-gold font-cinzel text-xs tracking-widest hover:bg-gold hover:text-plum-950 transition-all duration-200 flex items-center justify-center gap-2">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/></svg>
              Add to Order
            </button>
          </div>
        </div>

        <div class="menu-card group relative bg-plum-900/60 border border-gold/15 hover:border-gold/45 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_20px_50px_rgba(0,0,0,0.5)]" data-gang="Starters">
          <div class="h-px w-0 group-hover:w-full bg-gradient-to-r from-gold/60 to-transparent transition-all duration-500"></div>
          <div class="p-7">
            <span class="inline-block px-3 py-1 bg-plum-700/50 border border-plum-500/40 text-plum-300 font-cinzel text-[10px] tracking-widest mb-4">Starters</span>
            <div class="flex items-start justify-between gap-4 mb-3">
              <div><h3 class="font-cinzel text-gold text-lg leading-tight mb-1">Kajmak & Lepinja</h3><p class="font-crimson italic text-plum-400">Кајмак & Лепиња</p></div>
              <p class="font-cinzel text-gold text-lg shrink-0">€7.50</p>
            </div>
            <div class="h-px bg-gradient-to-r from-gold/20 to-transparent mb-3"></div>
            <p class="font-crimson text-plum-300/80 text-sm leading-relaxed mb-4">Warm flatbread with creamy kajmak cream cheese, freshly baked.</p>
            <button onclick="addToCart('kajmak','Kajmak & Lepinja',7.50)" class="w-full py-2.5 border border-gold/30 text-gold font-cinzel text-xs tracking-widest hover:bg-gold hover:text-plum-950 transition-all duration-200 flex items-center justify-center gap-2">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/></svg>
              Add to Order
            </button>
          </div>
        </div>

        <div class="menu-card group relative bg-plum-900/60 border border-gold/15 hover:border-gold/45 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_20px_50px_rgba(0,0,0,0.5)]" data-gang="Starters">
          <div class="h-px w-0 group-hover:w-full bg-gradient-to-r from-gold/60 to-transparent transition-all duration-500"></div>
          <div class="p-7">
            <span class="inline-block px-3 py-1 bg-plum-700/50 border border-plum-500/40 text-plum-300 font-cinzel text-[10px] tracking-widest mb-4">Starters</span>
            <div class="flex items-start justify-between gap-4 mb-3">
              <div><h3 class="font-cinzel text-gold text-lg leading-tight mb-1">Srpska Salata</h3><p class="font-crimson italic text-plum-400">Српска Салата</p></div>
              <p class="font-cinzel text-gold text-lg shrink-0">€8.00</p>
            </div>
            <div class="h-px bg-gradient-to-r from-gold/20 to-transparent mb-3"></div>
            <p class="font-crimson text-plum-300/80 text-sm leading-relaxed mb-4">Fresh tomatoes, cucumbers, onions and roasted peppers with sunflower oil.</p>
            <button onclick="addToCart('salata','Srpska Salata',8.00)" class="w-full py-2.5 border border-gold/30 text-gold font-cinzel text-xs tracking-widest hover:bg-gold hover:text-plum-950 transition-all duration-200 flex items-center justify-center gap-2">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/></svg>
              Add to Order
            </button>
          </div>
        </div>

        <!-- GRILLED -->
        <div class="menu-card group relative bg-plum-900/60 border border-gold/15 hover:border-gold/45 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_20px_50px_rgba(0,0,0,0.5)]" data-gang="Grilled">
          <div class="h-px w-0 group-hover:w-full bg-gradient-to-r from-gold/60 to-transparent transition-all duration-500"></div>
          <div class="p-7">
            <span class="inline-block px-3 py-1 bg-gold/15 border border-gold/30 text-gold font-cinzel text-[10px] tracking-widest mb-4">Signature · Grilled</span>
            <div class="flex items-start justify-between gap-4 mb-3">
              <div><h3 class="font-cinzel text-gold text-lg leading-tight mb-1">Ćevapi</h3><p class="font-crimson italic text-plum-400">Ћевапи</p></div>
              <p class="font-cinzel text-gold text-lg shrink-0">€16.50</p>
            </div>
            <div class="h-px bg-gradient-to-r from-gold/20 to-transparent mb-3"></div>
            <p class="font-crimson text-plum-300/80 text-sm leading-relaxed mb-4">Hand-rolled minced meat sausages grilled over open flame with lepinja and kajmak.</p>
            <button onclick="addToCart('cevapi','Ćevapi',16.50)" class="w-full py-2.5 border border-gold/30 text-gold font-cinzel text-xs tracking-widest hover:bg-gold hover:text-plum-950 transition-all duration-200 flex items-center justify-center gap-2">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/></svg>
              Add to Order
            </button>
          </div>
        </div>

        <div class="menu-card group relative bg-plum-900/60 border border-gold/15 hover:border-gold/45 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_20px_50px_rgba(0,0,0,0.5)]" data-gang="Grilled">
          <div class="h-px w-0 group-hover:w-full bg-gradient-to-r from-gold/60 to-transparent transition-all duration-500"></div>
          <div class="p-7">
            <span class="inline-block px-3 py-1 bg-plum-700/50 border border-plum-500/40 text-plum-300 font-cinzel text-[10px] tracking-widest mb-4">Grilled</span>
            <div class="flex items-start justify-between gap-4 mb-3">
              <div><h3 class="font-cinzel text-gold text-lg leading-tight mb-1">Pljeskavica</h3><p class="font-crimson italic text-plum-400">Пљескавица</p></div>
              <p class="font-cinzel text-gold text-lg shrink-0">€18.00</p>
            </div>
            <div class="h-px bg-gradient-to-r from-gold/20 to-transparent mb-3"></div>
            <p class="font-crimson text-plum-300/80 text-sm leading-relaxed mb-4">Thick mixed-meat patty seasoned with onion and spices. The crown of Balkan grilling.</p>
            <button onclick="addToCart('pljeskavica','Pljeskavica',18.00)" class="w-full py-2.5 border border-gold/30 text-gold font-cinzel text-xs tracking-widest hover:bg-gold hover:text-plum-950 transition-all duration-200 flex items-center justify-center gap-2">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/></svg>
              Add to Order
            </button>
          </div>
        </div>

        <div class="menu-card group relative bg-plum-900/60 border border-gold/15 hover:border-gold/45 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_20px_50px_rgba(0,0,0,0.5)]" data-gang="Grilled">
          <div class="h-px w-0 group-hover:w-full bg-gradient-to-r from-gold/60 to-transparent transition-all duration-500"></div>
          <div class="p-7">
            <span class="inline-block px-3 py-1 bg-gold/10 border border-gold/40 text-gold font-cinzel text-[10px] tracking-widest mb-4">Chef's Choice · Grilled</span>
            <div class="flex items-start justify-between gap-4 mb-3">
              <div><h3 class="font-cinzel text-gold text-lg leading-tight mb-1">Lamb on the Spit</h3><p class="font-crimson italic text-plum-400">Јагњетина са Ражња</p></div>
              <p class="font-cinzel text-gold text-lg shrink-0">€36.00</p>
            </div>
            <div class="h-px bg-gradient-to-r from-gold/20 to-transparent mb-3"></div>
            <p class="font-crimson text-plum-300/80 text-sm leading-relaxed mb-4">Whole lamb slow-roasted on an open spit for 6 hours. Utterly unforgettable.</p>
            <button onclick="addToCart('lamb','Lamb on the Spit',36.00)" class="w-full py-2.5 border border-gold/30 text-gold font-cinzel text-xs tracking-widest hover:bg-gold hover:text-plum-950 transition-all duration-200 flex items-center justify-center gap-2">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/></svg>
              Add to Order
            </button>
          </div>
        </div>

        <!-- MAIN DISHES -->
        <div class="menu-card group relative bg-plum-900/60 border border-gold/15 hover:border-gold/45 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_20px_50px_rgba(0,0,0,0.5)]" data-gang="Main Dishes">
          <div class="h-px w-0 group-hover:w-full bg-gradient-to-r from-gold/60 to-transparent transition-all duration-500"></div>
          <div class="p-7">
            <span class="inline-block px-3 py-1 bg-plum-700/50 border border-plum-500/40 text-plum-300 font-cinzel text-[10px] tracking-widest mb-4">Main Dishes</span>
            <div class="flex items-start justify-between gap-4 mb-3">
              <div><h3 class="font-cinzel text-gold text-lg leading-tight mb-1">Sarma</h3><p class="font-crimson italic text-plum-400">Сарма</p></div>
              <p class="font-cinzel text-gold text-lg shrink-0">€15.50</p>
            </div>
            <div class="h-px bg-gradient-to-r from-gold/20 to-transparent mb-3"></div>
            <p class="font-crimson text-plum-300/80 text-sm leading-relaxed mb-4">Sour cabbage rolls with seasoned minced meat and rice, simmered in tomato broth.</p>
            <button onclick="addToCart('sarma','Sarma',15.50)" class="w-full py-2.5 border border-gold/30 text-gold font-cinzel text-xs tracking-widest hover:bg-gold hover:text-plum-950 transition-all duration-200 flex items-center justify-center gap-2">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/></svg>
              Add to Order
            </button>
          </div>
        </div>

        <div class="menu-card group relative bg-plum-900/60 border border-gold/15 hover:border-gold/45 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_20px_50px_rgba(0,0,0,0.5)]" data-gang="Main Dishes">
          <div class="h-px w-0 group-hover:w-full bg-gradient-to-r from-gold/60 to-transparent transition-all duration-500"></div>
          <div class="p-7">
            <span class="inline-block px-3 py-1 bg-plum-700/50 border border-plum-500/40 text-plum-300 font-cinzel text-[10px] tracking-widest mb-4">Main Dishes</span>
            <div class="flex items-start justify-between gap-4 mb-3">
              <div><h3 class="font-cinzel text-gold text-lg leading-tight mb-1">Musaka</h3><p class="font-crimson italic text-plum-400">Мусака</p></div>
              <p class="font-cinzel text-gold text-lg shrink-0">€14.00</p>
            </div>
            <div class="h-px bg-gradient-to-r from-gold/20 to-transparent mb-3"></div>
            <p class="font-crimson text-plum-300/80 text-sm leading-relaxed mb-4">Layers of minced beef and potatoes baked under a rich creamy béchamel topping.</p>
            <button onclick="addToCart('musaka','Musaka',14.00)" class="w-full py-2.5 border border-gold/30 text-gold font-cinzel text-xs tracking-widest hover:bg-gold hover:text-plum-950 transition-all duration-200 flex items-center justify-center gap-2">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/></svg>
              Add to Order
            </button>
          </div>
        </div>

        <div class="menu-card group relative bg-plum-900/60 border border-gold/15 hover:border-gold/45 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_20px_50px_rgba(0,0,0,0.5)]" data-gang="Main Dishes">
          <div class="h-px w-0 group-hover:w-full bg-gradient-to-r from-gold/60 to-transparent transition-all duration-500"></div>
          <div class="p-7">
            <span class="inline-block px-3 py-1 bg-plum-700/50 border border-plum-500/40 text-plum-300 font-cinzel text-[10px] tracking-widest mb-4">Main Dishes</span>
            <div class="flex items-start justify-between gap-4 mb-3">
              <div><h3 class="font-cinzel text-gold text-lg leading-tight mb-1">Punjene Paprike</h3><p class="font-crimson italic text-plum-400">Пуњене Паприке</p></div>
              <p class="font-cinzel text-gold text-lg shrink-0">€13.50</p>
            </div>
            <div class="h-px bg-gradient-to-r from-gold/20 to-transparent mb-3"></div>
            <p class="font-crimson text-plum-300/80 text-sm leading-relaxed mb-4">Sweet peppers stuffed with pork and rice, baked in homemade tomato sauce.</p>
            <button onclick="addToCart('paprike','Punjene Paprike',13.50)" class="w-full py-2.5 border border-gold/30 text-gold font-cinzel text-xs tracking-widest hover:bg-gold hover:text-plum-950 transition-all duration-200 flex items-center justify-center gap-2">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/></svg>
              Add to Order
            </button>
          </div>
        </div>

        <!-- SOUPS -->
        <div class="menu-card group relative bg-plum-900/60 border border-gold/15 hover:border-gold/45 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_20px_50px_rgba(0,0,0,0.5)]" data-gang="Soups">
          <div class="h-px w-0 group-hover:w-full bg-gradient-to-r from-gold/60 to-transparent transition-all duration-500"></div>
          <div class="p-7">
            <span class="inline-block px-3 py-1 bg-plum-700/50 border border-plum-500/40 text-plum-300 font-cinzel text-[10px] tracking-widest mb-4">Soups</span>
            <div class="flex items-start justify-between gap-4 mb-3">
              <div><h3 class="font-cinzel text-gold text-lg leading-tight mb-1">Teleća Čorba</h3><p class="font-crimson italic text-plum-400">Телећа Чорба</p></div>
              <p class="font-cinzel text-gold text-lg shrink-0">€8.50</p>
            </div>
            <div class="h-px bg-gradient-to-r from-gold/20 to-transparent mb-3"></div>
            <p class="font-crimson text-plum-300/80 text-sm leading-relaxed mb-4">Rich veal soup with root vegetables, slow-cooked for hours. The soul of Serbian cooking.</p>
            <button onclick="addToCart('tcorba','Teleća Čorba',8.50)" class="w-full py-2.5 border border-gold/30 text-gold font-cinzel text-xs tracking-widest hover:bg-gold hover:text-plum-950 transition-all duration-200 flex items-center justify-center gap-2">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/></svg>
              Add to Order
            </button>
          </div>
        </div>

        <div class="menu-card group relative bg-plum-900/60 border border-gold/15 hover:border-gold/45 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_20px_50px_rgba(0,0,0,0.5)]" data-gang="Soups">
          <div class="h-px w-0 group-hover:w-full bg-gradient-to-r from-gold/60 to-transparent transition-all duration-500"></div>
          <div class="p-7">
            <span class="inline-block px-3 py-1 bg-plum-700/50 border border-plum-500/40 text-plum-300 font-cinzel text-[10px] tracking-widest mb-4">Soups</span>
            <div class="flex items-start justify-between gap-4 mb-3">
              <div><h3 class="font-cinzel text-gold text-lg leading-tight mb-1">Pasulj</h3><p class="font-crimson italic text-plum-400">Пасуљ</p></div>
              <p class="font-cinzel text-gold text-lg shrink-0">€12.50</p>
            </div>
            <div class="h-px bg-gradient-to-r from-gold/20 to-transparent mb-3"></div>
            <p class="font-crimson text-plum-300/80 text-sm leading-relaxed mb-4">Serbian bean stew with smoked pork ribs, paprika and a touch of chilli.</p>
            <button onclick="addToCart('pasulj','Pasulj',12.50)" class="w-full py-2.5 border border-gold/30 text-gold font-cinzel text-xs tracking-widest hover:bg-gold hover:text-plum-950 transition-all duration-200 flex items-center justify-center gap-2">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/></svg>
              Add to Order
            </button>
          </div>
        </div>

        <!-- DESSERTS -->
        <div class="menu-card group relative bg-plum-900/60 border border-gold/15 hover:border-gold/45 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_20px_50px_rgba(0,0,0,0.5)]" data-gang="Desserts">
          <div class="h-px w-0 group-hover:w-full bg-gradient-to-r from-gold/60 to-transparent transition-all duration-500"></div>
          <div class="p-7">
            <span class="inline-block px-3 py-1 bg-plum-700/50 border border-plum-500/40 text-plum-300 font-cinzel text-[10px] tracking-widest mb-4">Desserts</span>
            <div class="flex items-start justify-between gap-4 mb-3">
              <div><h3 class="font-cinzel text-gold text-lg leading-tight mb-1">Baklava</h3><p class="font-crimson italic text-plum-400">Баклава</p></div>
              <p class="font-cinzel text-gold text-lg shrink-0">€7.00</p>
            </div>
            <div class="h-px bg-gradient-to-r from-gold/20 to-transparent mb-3"></div>
            <p class="font-crimson text-plum-300/80 text-sm leading-relaxed mb-4">Crispy phyllo with chopped walnuts, soaked in honey and rose water syrup.</p>
            <button onclick="addToCart('baklava','Baklava',7.00)" class="w-full py-2.5 border border-gold/30 text-gold font-cinzel text-xs tracking-widest hover:bg-gold hover:text-plum-950 transition-all duration-200 flex items-center justify-center gap-2">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/></svg>
              Add to Order
            </button>
          </div>
        </div>

        <div class="menu-card group relative bg-plum-900/60 border border-gold/15 hover:border-gold/45 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_20px_50px_rgba(0,0,0,0.5)]" data-gang="Desserts">
          <div class="h-px w-0 group-hover:w-full bg-gradient-to-r from-gold/60 to-transparent transition-all duration-500"></div>
          <div class="p-7">
            <span class="inline-block px-3 py-1 bg-plum-700/50 border border-plum-500/40 text-plum-300 font-cinzel text-[10px] tracking-widest mb-4">Desserts</span>
            <div class="flex items-start justify-between gap-4 mb-3">
              <div><h3 class="font-cinzel text-gold text-lg leading-tight mb-1">Palačinke</h3><p class="font-crimson italic text-plum-400">Палачинке</p></div>
              <p class="font-cinzel text-gold text-lg shrink-0">€6.50</p>
            </div>
            <div class="h-px bg-gradient-to-r from-gold/20 to-transparent mb-3"></div>
            <p class="font-crimson text-plum-300/80 text-sm leading-relaxed mb-4">Thin golden crêpes with apricot jam and crushed walnuts, dusted with icing sugar.</p>
            <button onclick="addToCart('palaclinke','Palačinke',6.50)" class="w-full py-2.5 border border-gold/30 text-gold font-cinzel text-xs tracking-widest hover:bg-gold hover:text-plum-950 transition-all duration-200 flex items-center justify-center gap-2">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/></svg>
              Add to Order
            </button>
          </div>
        </div>

        <!-- DRINKS -->
        <div class="menu-card group relative bg-plum-900/60 border border-gold/15 hover:border-gold/45 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_20px_50px_rgba(0,0,0,0.5)]" data-gang="Drinks">
          <div class="h-px w-0 group-hover:w-full bg-gradient-to-r from-gold/60 to-transparent transition-all duration-500"></div>
          <div class="p-7">
            <span class="inline-block px-3 py-1 bg-plum-700/50 border border-plum-500/40 text-plum-300 font-cinzel text-[10px] tracking-widest mb-4">Drinks</span>
            <div class="flex items-start justify-between gap-4 mb-3">
              <div><h3 class="font-cinzel text-gold text-lg leading-tight mb-1">Šljivovica</h3><p class="font-crimson italic text-plum-400">Шљивовица</p></div>
              <p class="font-cinzel text-gold text-lg shrink-0">€6.00</p>
            </div>
            <div class="h-px bg-gradient-to-r from-gold/20 to-transparent mb-3"></div>
            <p class="font-crimson text-plum-300/80 text-sm leading-relaxed mb-4">Traditional Serbian plum brandy, aged in oak barrels. Served chilled as an aperitif.</p>
            <button onclick="addToCart('sljivovica','Šljivovica',6.00)" class="w-full py-2.5 border border-gold/30 text-gold font-cinzel text-xs tracking-widest hover:bg-gold hover:text-plum-950 transition-all duration-200 flex items-center justify-center gap-2">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/></svg>
              Add to Order
            </button>
          </div>
        </div>

        <div class="menu-card group relative bg-plum-900/60 border border-gold/15 hover:border-gold/45 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_20px_50px_rgba(0,0,0,0.5)]" data-gang="Drinks">
          <div class="h-px w-0 group-hover:w-full bg-gradient-to-r from-gold/60 to-transparent transition-all duration-500"></div>
          <div class="p-7">
            <span class="inline-block px-3 py-1 bg-plum-700/50 border border-plum-500/40 text-plum-300 font-cinzel text-[10px] tracking-widest mb-4">Drinks</span>
            <div class="flex items-start justify-between gap-4 mb-3">
              <div><h3 class="font-cinzel text-gold text-lg leading-tight mb-1">Domaće Vino</h3><p class="font-crimson italic text-plum-400">Домаће Вино</p></div>
              <p class="font-cinzel text-gold text-lg shrink-0">€8.00</p>
            </div>
            <div class="h-px bg-gradient-to-r from-gold/20 to-transparent mb-3"></div>
            <p class="font-crimson text-plum-300/80 text-sm leading-relaxed mb-4">House red or white wine from small Serbian family vineyards in the Šumadija region.</p>
            <button onclick="addToCart('vino','Domaće Vino',8.00)" class="w-full py-2.5 border border-gold/30 text-gold font-cinzel text-xs tracking-widest hover:bg-gold hover:text-plum-950 transition-all duration-200 flex items-center justify-center gap-2">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/></svg>
              Add to Order
            </button>
          </div>
        </div>

      </div><!-- /grid -->
    </div>
  </section>