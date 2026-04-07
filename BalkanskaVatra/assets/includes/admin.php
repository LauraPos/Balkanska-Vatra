
<div id="page-admin" class="page hidden">
  <div class="min-h-screen bg-plum-950 flex">

    <!-- SIDEBAR -->
    <aside class="w-64 shrink-0 bg-plum-900 border-r border-gold/15 flex flex-col min-h-screen sticky top-0">
      <div class="px-6 py-6 border-b border-gold/15">
        <p class="font-cinzel text-gold text-sm tracking-widest leading-tight">Balkanska Vatra</p>
        <p class="font-crimson italic text-plum-500 text-xs mt-0.5 tracking-wider">Балканска Ватра</p>
        <span class="inline-block mt-3 px-2 py-0.5 bg-plum-700/50 border border-plum-600/40 font-cinzel text-[9px] tracking-widest text-plum-300">ADMIN PANEL</span>
      </div>
      <nav class="flex-1 px-3 py-5 space-y-1">
        <p class="font-cinzel text-[9px] text-plum-600 tracking-[0.25em] px-3 mb-3">MAIN</p>
        <button onclick="showTab('tab-dashboard')" data-tab="tab-dashboard" class="tab-btn w-full flex items-center gap-3 px-3 py-2.5 border border-gold bg-gold/10 text-gold font-crimson text-sm tracking-wide transition-all duration-200 text-left">
          <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zm0 9.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zm9.75-9.75A2.25 2.25 0 0115.75 3.75H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zm0 9.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
          </svg>
          Dashboard
        </button>
        <p class="font-cinzel text-[9px] text-plum-600 tracking-[0.25em] px-3 pt-4 mb-3">RESTAURANT</p>
        <button onclick="showTab('tab-menu')" data-tab="tab-menu" class="tab-btn w-full flex items-center gap-3 px-3 py-2.5 border border-gold/20 text-plum-400 font-crimson text-sm tracking-wide hover:border-gold/40 hover:text-plum-300 transition-all duration-200 text-left">
          <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
          </svg>
          Menu Items
        </button>
        <button onclick="showTab('tab-reservations')" data-tab="tab-reservations" class="tab-btn w-full flex items-center gap-3 px-3 py-2.5 border border-gold/20 text-plum-400 font-crimson text-sm tracking-wide hover:border-gold/40 hover:text-plum-300 transition-all duration-200 text-left">
          <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5" />
          </svg>
          Reservations
        </button>
        <button onclick="showTab('tab-messages')" data-tab="tab-messages" class="tab-btn w-full flex items-center gap-3 px-3 py-2.5 border border-gold/20 text-plum-400 font-crimson text-sm tracking-wide hover:border-gold/40 hover:text-plum-300 transition-all duration-200 text-left">
          <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
          </svg>
          Messages
          <span class="ml-auto bg-gold text-plum-950 font-cinzel text-[9px] px-1.5 py-0.5">3</span>
        </button>
        <button onclick="showTab('tab-gallery')" data-tab="tab-gallery" class="tab-btn w-full flex items-center gap-3 px-3 py-2.5 border border-gold/20 text-plum-400 font-crimson text-sm tracking-wide hover:border-gold/40 hover:text-plum-300 transition-all duration-200 text-left">
          <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
          </svg>
          Gallery
        </button>
        <p class="font-cinzel text-[9px] text-plum-600 tracking-[0.25em] px-3 pt-4 mb-3">SETTINGS</p>
        <button onclick="showTab('tab-settings')" data-tab="tab-settings" class="tab-btn w-full flex items-center gap-3 px-3 py-2.5 border border-gold/20 text-plum-400 font-crimson text-sm tracking-wide hover:border-gold/40 hover:text-plum-300 transition-all duration-200 text-left">
          <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>
          Settings
        </button>
      </nav>
      <div class="px-4 py-4 border-t border-gold/15">
        <div class="flex items-center gap-3 mb-3">
          <div class="w-8 h-8 rounded-full bg-plum-700 border border-gold/30 flex items-center justify-center font-cinzel text-gold text-xs shrink-0">A</div>
          <div class="min-w-0">
            <p class="font-cinzel text-gold text-xs truncate">Admin</p>
            <p class="font-crimson italic text-plum-600 text-xs truncate">admin@balkanska.nl</p>
          </div>
        </div>
        <button onclick="showPage('page-login')" class="w-full flex items-center gap-2 px-3 py-2 border border-red-900/40 text-red-400/70 hover:border-red-700/50 hover:text-red-400 font-cinzel text-[10px] tracking-widest transition-all duration-200">
          <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
          </svg>
          Logout
        </button>
      </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 min-h-screen flex flex-col">
      <!-- topbar -->
      <header class="bg-plum-900/60 border-b border-gold/15 px-8 py-4 flex items-center justify-between sticky top-0 z-30 backdrop-blur-sm">
        <div>
          <h1 class="font-cinzel text-gold text-base tracking-widest">Dashboard</h1>
          <p class="font-crimson italic text-plum-500 text-xs mt-0.5">Balkanska Vatra Admin Panel</p>
        </div>
        <div class="flex items-center gap-4">
          <button onclick="showPage('page-main')" class="flex items-center gap-2 px-4 py-1.5 border border-gold/25 text-gold/70 hover:border-gold hover:text-gold font-cinzel text-[10px] tracking-widest transition-all duration-200">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
            </svg>
            View Site
          </button>
        </div>
      </header>

      <div class="flex-1 p-8">

        <!-- DASHBOARD TAB -->
        <div id="tab-dashboard" class="tab-panel">
          <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
            <div class="bg-plum-900/60 border border-gold/15 p-6 hover:border-gold/30 transition-colors duration-300">
              <p class="font-cinzel text-[10px] text-plum-500 tracking-widest mb-3">TODAY'S RESERVATIONS</p>
              <p class="font-cinzel text-gold text-4xl mb-1">12</p>
              <p class="font-crimson italic text-green-400 text-sm">↑ 3 more than yesterday</p>
            </div>
            <div class="bg-plum-900/60 border border-gold/15 p-6 hover:border-gold/30 transition-colors duration-300">
              <p class="font-cinzel text-[10px] text-plum-500 tracking-widest mb-3">NEW MESSAGES</p>
              <p class="font-cinzel text-gold text-4xl mb-1">3</p>
              <p class="font-crimson italic text-plum-400 text-sm">2 unread contact forms</p>
            </div>
            <div class="bg-plum-900/60 border border-gold/15 p-6 hover:border-gold/30 transition-colors duration-300">
              <p class="font-cinzel text-[10px] text-plum-500 tracking-widest mb-3">MENU ITEMS</p>
              <p class="font-cinzel text-gold text-4xl mb-1">48</p>
              <p class="font-crimson italic text-plum-400 text-sm">6 categories active</p>
            </div>
            <div class="bg-plum-900/60 border border-gold/15 p-6 hover:border-gold/30 transition-colors duration-300">
              <p class="font-cinzel text-[10px] text-plum-500 tracking-widest mb-3">THIS WEEK</p>
              <p class="font-cinzel text-gold text-4xl mb-1">87</p>
              <p class="font-crimson italic text-plum-400 text-sm">Total reservations</p>
            </div>
          </div>
          <div class="grid lg:grid-cols-2 gap-6">
            <div class="bg-plum-900/60 border border-gold/15">
              <div class="px-6 py-4 border-b border-gold/15 flex items-center justify-between">
                <h2 class="font-cinzel text-gold text-sm tracking-widest">Today's Reservations</h2>
                <button onclick="showTab('tab-reservations')" class="font-crimson italic text-plum-500 text-sm hover:text-gold transition-colors">View all →</button>
              </div>
              <div class="divide-y divide-gold/10">
                <div class="px-6 py-4 flex items-center justify-between hover:bg-plum-800/20 transition-colors">
                  <div>
                    <p class="font-cinzel text-plum-200 text-sm">Marko Petrović</p>
                    <p class="font-crimson italic text-plum-500 text-sm">4 guests · Table 3</p>
                  </div>
                  <div class="text-right"><span class="font-cinzel text-gold text-sm">19:00</span><span class="block mt-1 px-2 py-0.5 bg-green-900/40 border border-green-700/30 text-green-400 font-cinzel text-[9px] tracking-wider">Confirmed</span></div>
                </div>
                <div class="px-6 py-4 flex items-center justify-between hover:bg-plum-800/20 transition-colors">
                  <div>
                    <p class="font-cinzel text-plum-200 text-sm">Ana Jovanović</p>
                    <p class="font-crimson italic text-plum-500 text-sm">2 guests · Table 7</p>
                  </div>
                  <div class="text-right"><span class="font-cinzel text-gold text-sm">20:00</span><span class="block mt-1 px-2 py-0.5 bg-yellow-900/40 border border-yellow-700/30 text-yellow-400 font-cinzel text-[9px] tracking-wider">Pending</span></div>
                </div>
                <div class="px-6 py-4 flex items-center justify-between hover:bg-plum-800/20 transition-colors">
                  <div>
                    <p class="font-cinzel text-plum-200 text-sm">Stefan Nikolić</p>
                    <p class="font-crimson italic text-plum-500 text-sm">6 guests · Table 1</p>
                  </div>
                  <div class="text-right"><span class="font-cinzel text-gold text-sm">20:30</span><span class="block mt-1 px-2 py-0.5 bg-green-900/40 border border-green-700/30 text-green-400 font-cinzel text-[9px] tracking-wider">Confirmed</span></div>
                </div>
              </div>
            </div>
            <div class="bg-plum-900/60 border border-gold/15">
              <div class="px-6 py-4 border-b border-gold/15 flex items-center justify-between">
                <h2 class="font-cinzel text-gold text-sm tracking-widest">Recent Messages</h2>
                <button onclick="showTab('tab-messages')" class="font-crimson italic text-plum-500 text-sm hover:text-gold transition-colors">View all →</button>
              </div>
              <div class="divide-y divide-gold/10">
                <div class="px-6 py-4 hover:bg-plum-800/20 transition-colors cursor-pointer">
                  <div class="flex items-start justify-between gap-3">
                    <div class="min-w-0">
                      <p class="font-cinzel text-plum-200 text-sm truncate">Ivana Stojanović</p>
                      <p class="font-crimson text-plum-400 text-sm truncate mt-0.5">Inquiry about private event for 30...</p>
                    </div><span class="shrink-0 w-2 h-2 rounded-full bg-gold mt-1.5"></span>
                  </div>
                  <p class="font-crimson italic text-plum-600 text-xs mt-1">2 hours ago</p>
                </div>
                <div class="px-6 py-4 hover:bg-plum-800/20 transition-colors cursor-pointer">
                  <div class="flex items-start justify-between gap-3">
                    <div class="min-w-0">
                      <p class="font-cinzel text-plum-200 text-sm truncate">Nikola Đorđević</p>
                      <p class="font-crimson text-plum-400 text-sm truncate mt-0.5">Question about catering service...</p>
                    </div><span class="shrink-0 w-2 h-2 rounded-full bg-gold mt-1.5"></span>
                  </div>
                  <p class="font-crimson italic text-plum-600 text-xs mt-1">5 hours ago</p>
                </div>
                <div class="px-6 py-4 hover:bg-plum-800/20 transition-colors cursor-pointer">
                  <div class="flex items-start justify-between gap-3">
                    <div class="min-w-0">
                      <p class="font-cinzel text-plum-400 text-sm truncate">Miloš Popović</p>
                      <p class="font-crimson text-plum-400/70 text-sm truncate mt-0.5">Great experience last Saturday!</p>
                    </div>
                  </div>
                  <p class="font-crimson italic text-plum-600 text-xs mt-1">1 day ago · Read</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- MENU TAB -->
        <div id="tab-menu" class="tab-panel hidden">
          <div class="flex items-center justify-between mb-6">
            <div>
              <h2 class="font-cinzel text-gold text-xl tracking-wider">Menu Items</h2>
              <p class="font-crimson italic text-plum-500 text-sm mt-1">Manage dishes, prices and categories</p>
            </div>
            <button onclick="toggleModal('modal-add-dish')" class="flex items-center gap-2 px-6 py-2.5 bg-gold text-plum-950 font-cinzel text-xs tracking-widest hover:bg-gold-light transition-all duration-200">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
              </svg>
              Add Dish
            </button>
          </div>
          <div class="flex flex-wrap gap-3 mb-6">
            <select class="bg-plum-900 border border-gold/20 text-plum-300 font-crimson text-sm px-4 py-2 outline-none focus:border-gold/50">
              <option>All Categories</option>
              <option>Starters / Предјела</option>
              <option>Grilled / Роштиљ</option>
              <option>Main Dishes / Главна Јела</option>
              <option>Soups / Чорбе</option>
              <option>Desserts / Десерти</option>
              <option>Drinks / Пића</option>
            </select>
            <input type="search" placeholder="Search dishes..." class="bg-plum-900 border border-gold/20 text-plum-300 font-crimson text-sm px-4 py-2 outline-none focus:border-gold/50 placeholder:text-plum-700 w-64">
          </div>
          <div class="bg-plum-900/60 border border-gold/15 overflow-hidden">
            <table class="w-full">
              <thead>
                <tr class="border-b border-gold/15">
                  <th class="text-left px-6 py-3 font-cinzel text-[10px] text-plum-500 tracking-widest">NAME (EN / SR)</th>
                  <th class="text-left px-6 py-3 font-cinzel text-[10px] text-plum-500 tracking-widest">CATEGORY</th>
                  <th class="text-left px-6 py-3 font-cinzel text-[10px] text-plum-500 tracking-widest">PRICE</th>
                  <th class="text-left px-6 py-3 font-cinzel text-[10px] text-plum-500 tracking-widest">STATUS</th>
                  <th class="text-right px-6 py-3 font-cinzel text-[10px] text-plum-500 tracking-widest">ACTIONS</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gold/10">
                <tr class="hover:bg-plum-800/20 transition-colors">
                  <td class="px-6 py-4">
                    <p class="font-cinzel text-plum-200 text-sm">Ćevapi</p>
                    <p class="font-crimson italic text-plum-500 text-xs">Ћевапи</p>
                  </td>
                  <td class="px-6 py-4"><span class="font-crimson text-plum-400 text-sm">Grilled</span></td>
                  <td class="px-6 py-4"><span class="font-cinzel text-gold text-sm">€16.50</span></td>
                  <td class="px-6 py-4"><span class="px-2 py-0.5 bg-green-900/40 border border-green-700/30 text-green-400 font-cinzel text-[9px] tracking-wider">Active</span></td>
                  <td class="px-6 py-4">
                    <div class="flex items-center justify-end gap-2"><button class="px-3 py-1 border border-gold/25 text-gold/70 hover:border-gold hover:text-gold font-cinzel text-[10px] tracking-wider transition-all duration-200">Edit</button><button class="px-3 py-1 border border-red-900/40 text-red-400/60 hover:border-red-700/50 hover:text-red-400 font-cinzel text-[10px] tracking-wider transition-all duration-200">Delete</button></div>
                  </td>
                </tr>
                <tr class="hover:bg-plum-800/20 transition-colors">
                  <td class="px-6 py-4">
                    <p class="font-cinzel text-plum-200 text-sm">Pljeskavica</p>
                    <p class="font-crimson italic text-plum-500 text-xs">Пљескавица</p>
                  </td>
                  <td class="px-6 py-4"><span class="font-crimson text-plum-400 text-sm">Grilled</span></td>
                  <td class="px-6 py-4"><span class="font-cinzel text-gold text-sm">€18.00</span></td>
                  <td class="px-6 py-4"><span class="px-2 py-0.5 bg-green-900/40 border border-green-700/30 text-green-400 font-cinzel text-[9px] tracking-wider">Active</span></td>
                  <td class="px-6 py-4">
                    <div class="flex items-center justify-end gap-2"><button class="px-3 py-1 border border-gold/25 text-gold/70 hover:border-gold hover:text-gold font-cinzel text-[10px] tracking-wider transition-all duration-200">Edit</button><button class="px-3 py-1 border border-red-900/40 text-red-400/60 hover:border-red-700/50 hover:text-red-400 font-cinzel text-[10px] tracking-wider transition-all duration-200">Delete</button></div>
                  </td>
                </tr>
                <tr class="hover:bg-plum-800/20 transition-colors">
                  <td class="px-6 py-4">
                    <p class="font-cinzel text-plum-200 text-sm">Gibanica</p>
                    <p class="font-crimson italic text-plum-500 text-xs">Гибаница</p>
                  </td>
                  <td class="px-6 py-4"><span class="font-crimson text-plum-400 text-sm">Starters</span></td>
                  <td class="px-6 py-4"><span class="font-cinzel text-gold text-sm">€9.00</span></td>
                  <td class="px-6 py-4"><span class="px-2 py-0.5 bg-yellow-900/40 border border-yellow-700/30 text-yellow-400 font-cinzel text-[9px] tracking-wider">Hidden</span></td>
                  <td class="px-6 py-4">
                    <div class="flex items-center justify-end gap-2"><button class="px-3 py-1 border border-gold/25 text-gold/70 hover:border-gold hover:text-gold font-cinzel text-[10px] tracking-wider transition-all duration-200">Edit</button><button class="px-3 py-1 border border-red-900/40 text-red-400/60 hover:border-red-700/50 hover:text-red-400 font-cinzel text-[10px] tracking-wider transition-all duration-200">Delete</button></div>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="px-6 py-4 border-t border-gold/10 flex items-center justify-between">
              <p class="font-crimson italic text-plum-600 text-sm">Showing 3 of 48 items</p>
              <div class="flex gap-1">
                <button class="w-8 h-8 border border-gold/20 text-plum-400 font-cinzel text-xs hover:border-gold hover:text-gold transition-all duration-200">‹</button>
                <button class="w-8 h-8 border border-gold bg-gold/10 text-gold font-cinzel text-xs">1</button>
                <button class="w-8 h-8 border border-gold/20 text-plum-400 font-cinzel text-xs hover:border-gold hover:text-gold transition-all duration-200">2</button>
                <button class="w-8 h-8 border border-gold/20 text-plum-400 font-cinzel text-xs hover:border-gold hover:text-gold transition-all duration-200">›</button>
              </div>
            </div>
          </div>
        </div>

        <!-- RESERVATIONS TAB -->
        <div id="tab-reservations" class="tab-panel hidden">
          <div class="flex items-center justify-between mb-6">
            <div>
              <h2 class="font-cinzel text-gold text-xl tracking-wider">Reservations</h2>
              <p class="font-crimson italic text-plum-500 text-sm mt-1">View and manage table bookings</p>
            </div>
            <div class="flex gap-3">
              <input type="date" class="bg-plum-900 border border-gold/20 text-plum-300 font-crimson text-sm px-4 py-2 outline-none focus:border-gold/50">
              <select class="bg-plum-900 border border-gold/20 text-plum-300 font-crimson text-sm px-4 py-2 outline-none focus:border-gold/50">
                <option>All Statuses</option>
                <option>Confirmed</option>
                <option>Pending</option>
                <option>Cancelled</option>
              </select>
            </div>
          </div>
          <div class="bg-plum-900/60 border border-gold/15 overflow-hidden">
            <table class="w-full">
              <thead>
                <tr class="border-b border-gold/15">
                  <th class="text-left px-6 py-3 font-cinzel text-[10px] text-plum-500 tracking-widest">GUEST</th>
                  <th class="text-left px-6 py-3 font-cinzel text-[10px] text-plum-500 tracking-widest">DATE & TIME</th>
                  <th class="text-left px-6 py-3 font-cinzel text-[10px] text-plum-500 tracking-widest">GUESTS</th>
                  <th class="text-left px-6 py-3 font-cinzel text-[10px] text-plum-500 tracking-widest">NOTES</th>
                  <th class="text-left px-6 py-3 font-cinzel text-[10px] text-plum-500 tracking-widest">STATUS</th>
                  <th class="text-right px-6 py-3 font-cinzel text-[10px] text-plum-500 tracking-widest">ACTIONS</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gold/10">
                <tr class="hover:bg-plum-800/20 transition-colors">
                  <td class="px-6 py-4">
                    <p class="font-cinzel text-plum-200 text-sm">Marko Petrović</p>
                    <p class="font-crimson italic text-plum-600 text-xs">marko@email.com</p>
                  </td>
                  <td class="px-6 py-4">
                    <p class="font-cinzel text-gold text-sm">27 Feb 2026</p>
                    <p class="font-crimson text-plum-400 text-xs">19:00</p>
                  </td>
                  <td class="px-6 py-4"><span class="font-crimson text-plum-300 text-sm">4 people</span></td>
                  <td class="px-6 py-4"><span class="font-crimson italic text-plum-500 text-xs">Birthday dinner</span></td>
                  <td class="px-6 py-4"><span class="px-2 py-0.5 bg-green-900/40 border border-green-700/30 text-green-400 font-cinzel text-[9px] tracking-wider">Confirmed</span></td>
                  <td class="px-6 py-4">
                    <div class="flex items-center justify-end gap-2"><button class="px-3 py-1 border border-gold/25 text-gold/70 hover:border-gold hover:text-gold font-cinzel text-[10px] tracking-wider transition-all">Edit</button><button class="px-3 py-1 border border-red-900/40 text-red-400/60 hover:border-red-700/50 hover:text-red-400 font-cinzel text-[10px] tracking-wider transition-all">Cancel</button></div>
                  </td>
                </tr>
                <tr class="hover:bg-plum-800/20 transition-colors">
                  <td class="px-6 py-4">
                    <p class="font-cinzel text-plum-200 text-sm">Ana Jovanović</p>
                    <p class="font-crimson italic text-plum-600 text-xs">ana@email.com</p>
                  </td>
                  <td class="px-6 py-4">
                    <p class="font-cinzel text-gold text-sm">27 Feb 2026</p>
                    <p class="font-crimson text-plum-400 text-xs">20:00</p>
                  </td>
                  <td class="px-6 py-4"><span class="font-crimson text-plum-300 text-sm">2 people</span></td>
                  <td class="px-6 py-4"><span class="font-crimson italic text-plum-500 text-xs">—</span></td>
                  <td class="px-6 py-4"><span class="px-2 py-0.5 bg-yellow-900/40 border border-yellow-700/30 text-yellow-400 font-cinzel text-[9px] tracking-wider">Pending</span></td>
                  <td class="px-6 py-4">
                    <div class="flex items-center justify-end gap-2"><button class="px-3 py-1 border border-green-800/50 text-green-400/70 hover:border-green-700/60 hover:text-green-400 font-cinzel text-[10px] tracking-wider transition-all">Confirm</button><button class="px-3 py-1 border border-red-900/40 text-red-400/60 hover:border-red-700/50 hover:text-red-400 font-cinzel text-[10px] tracking-wider transition-all">Cancel</button></div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- MESSAGES TAB -->
        <div id="tab-messages" class="tab-panel hidden">
          <div class="mb-6">
            <h2 class="font-cinzel text-gold text-xl tracking-wider">Contact Messages</h2>
            <p class="font-crimson italic text-plum-500 text-sm mt-1">Incoming messages from the contact form</p>
          </div>
          <div class="space-y-3">
            <div class="bg-plum-900/60 border border-gold/25 p-6 hover:border-gold/40 transition-colors cursor-pointer">
              <div class="flex items-start justify-between gap-4 mb-3">
                <div class="flex items-center gap-3"><span class="w-2 h-2 rounded-full bg-gold shrink-0 mt-1.5"></span>
                  <div>
                    <p class="font-cinzel text-gold text-sm">Ivana Stojanović</p>
                    <p class="font-crimson italic text-plum-500 text-xs">ivana@email.com &nbsp;·&nbsp; +31 6 12345678</p>
                  </div>
                </div>
                <div class="text-right shrink-0">
                  <p class="font-crimson italic text-plum-600 text-xs">2 hours ago</p><span class="px-2 py-0.5 bg-gold/10 border border-gold/30 text-gold font-cinzel text-[9px] tracking-wider">Private Event</span>
                </div>
              </div>
              <p class="font-crimson text-plum-300 text-base leading-relaxed pl-5">We would like to book the restaurant for a private event for approximately 30 people on the 15th of March. Could you please provide more information about your catering packages?</p>
              <div class="flex gap-3 mt-4 pl-5">
                <button class="px-4 py-1.5 bg-gold text-plum-950 font-cinzel text-[10px] tracking-widest hover:bg-gold-light transition-all duration-200">Reply</button>
                <button class="px-4 py-1.5 border border-gold/25 text-gold/60 font-cinzel text-[10px] tracking-widest hover:border-gold hover:text-gold transition-all duration-200">Mark Read</button>
                <button class="px-4 py-1.5 border border-red-900/40 text-red-400/60 font-cinzel text-[10px] tracking-widest hover:border-red-700/40 hover:text-red-400 transition-all duration-200">Delete</button>
              </div>
            </div>
            <div class="bg-plum-900/60 border border-gold/25 p-6 hover:border-gold/40 transition-colors cursor-pointer">
              <div class="flex items-start justify-between gap-4 mb-3">
                <div class="flex items-center gap-3"><span class="w-2 h-2 rounded-full bg-gold shrink-0 mt-1.5"></span>
                  <div>
                    <p class="font-cinzel text-gold text-sm">Nikola Đorđević</p>
                    <p class="font-crimson italic text-plum-500 text-xs">nikola@email.com</p>
                  </div>
                </div>
                <div class="text-right shrink-0">
                  <p class="font-crimson italic text-plum-600 text-xs">5 hours ago</p><span class="px-2 py-0.5 bg-plum-700/40 border border-plum-600/40 text-plum-300 font-cinzel text-[9px] tracking-wider">Catering</span>
                </div>
              </div>
              <p class="font-crimson text-plum-300 text-base leading-relaxed pl-5">Do you offer catering services for corporate events? Looking for something for about 50 people.</p>
              <div class="flex gap-3 mt-4 pl-5">
                <button class="px-4 py-1.5 bg-gold text-plum-950 font-cinzel text-[10px] tracking-widest hover:bg-gold-light transition-all duration-200">Reply</button>
                <button class="px-4 py-1.5 border border-gold/25 text-gold/60 font-cinzel text-[10px] tracking-widest hover:border-gold hover:text-gold transition-all duration-200">Mark Read</button>
                <button class="px-4 py-1.5 border border-red-900/40 text-red-400/60 font-cinzel text-[10px] tracking-widest hover:border-red-700/40 hover:text-red-400 transition-all duration-200">Delete</button>
              </div>
            </div>
          </div>
        </div>

        <!-- GALLERY TAB -->
        <div id="tab-gallery" class="tab-panel hidden">
          <div class="flex items-center justify-between mb-6">
            <div>
              <h2 class="font-cinzel text-gold text-xl tracking-wider">Gallery</h2>
              <p class="font-crimson italic text-plum-500 text-sm mt-1">Manage website photos</p>
            </div>
            <button class="flex items-center gap-2 px-6 py-2.5 bg-gold text-plum-950 font-cinzel text-xs tracking-widest hover:bg-gold-light transition-all duration-200">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
              </svg>
              Upload Photo
            </button>
          </div>
          <div class="grid grid-cols-3 lg:grid-cols-5 gap-3">
            <div class="aspect-square relative group border border-gold/15 hover:border-gold/40 transition-colors overflow-hidden bg-plum-900">
              <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?w=200&q=70" class="w-full h-full object-cover opacity-70 group-hover:opacity-90 transition-opacity">
              <div class="absolute inset-0 bg-plum-950/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-2">
                <button class="px-2 py-1 bg-plum-950/80 border border-gold/40 text-gold font-cinzel text-[9px] tracking-wider">Edit</button>
                <button class="px-2 py-1 bg-plum-950/80 border border-red-700/40 text-red-400 font-cinzel text-[9px] tracking-wider">Del</button>
              </div>
            </div>
            <div class="aspect-square relative group border border-gold/15 hover:border-gold/40 transition-colors overflow-hidden bg-plum-900">
              <img src="https://images.unsplash.com/photo-1544025162-d76694265947?w=200&q=70" class="w-full h-full object-cover opacity-70 group-hover:opacity-90 transition-opacity">
              <div class="absolute inset-0 bg-plum-950/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-2">
                <button class="px-2 py-1 bg-plum-950/80 border border-gold/40 text-gold font-cinzel text-[9px] tracking-wider">Edit</button>
                <button class="px-2 py-1 bg-plum-950/80 border border-red-700/40 text-red-400 font-cinzel text-[9px] tracking-wider">Del</button>
              </div>
            </div>
            <div class="aspect-square border-2 border-dashed border-gold/20 hover:border-gold/40 transition-colors flex flex-col items-center justify-center gap-2 cursor-pointer group">
              <svg class="w-8 h-8 text-plum-600 group-hover:text-gold/50 transition-colors" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
              </svg>
              <p class="font-cinzel text-plum-600 group-hover:text-gold/40 text-[10px] tracking-wider transition-colors">ADD</p>
            </div>
          </div>
        </div>

        <!-- SETTINGS TAB -->
        <div id="tab-settings" class="tab-panel hidden">
          <div class="mb-6">
            <h2 class="font-cinzel text-gold text-xl tracking-wider">Settings</h2>
            <p class="font-crimson italic text-plum-500 text-sm mt-1">Restaurant info, opening hours and admin accounts</p>
          </div>
          <div class="grid lg:grid-cols-2 gap-6">
            <div class="bg-plum-900/60 border border-gold/15 p-8">
              <h3 class="font-cinzel text-gold text-sm tracking-widest mb-6 pb-4 border-b border-gold/15">Restaurant Info</h3>
              <form action="settings.php" method="POST" class="space-y-4">
                <div><label class="block font-cinzel text-[11px] text-gold/60 tracking-widest mb-2">Restaurant Name</label><input type="text" name="name" value="Balkanska Vatra" class="w-full bg-plum-950/70 border border-gold/20 focus:border-gold/50 outline-none px-4 py-2.5 text-plum-200 font-crimson text-base transition-colors"></div>
                <div><label class="block font-cinzel text-[11px] text-gold/60 tracking-widest mb-2">Address</label><input type="text" name="address" value="Balkanstraat 12, 1234 AB Amsterdam" class="w-full bg-plum-950/70 border border-gold/20 focus:border-gold/50 outline-none px-4 py-2.5 text-plum-200 font-crimson text-base transition-colors"></div>
                <div><label class="block font-cinzel text-[11px] text-gold/60 tracking-widest mb-2">Phone</label><input type="tel" name="phone" value="+31 020 123 4567" class="w-full bg-plum-950/70 border border-gold/20 focus:border-gold/50 outline-none px-4 py-2.5 text-plum-200 font-crimson text-base transition-colors"></div>
                <div><label class="block font-cinzel text-[11px] text-gold/60 tracking-widest mb-2">Email</label><input type="email" name="email" value="info@balkanskavatra.nl" class="w-full bg-plum-950/70 border border-gold/20 focus:border-gold/50 outline-none px-4 py-2.5 text-plum-200 font-crimson text-base transition-colors"></div>
                <button type="submit" class="px-8 py-2.5 bg-gold text-plum-950 font-cinzel text-xs tracking-widest hover:bg-gold-light transition-all duration-200">Save Changes</button>
              </form>
            </div>
            <div class="bg-plum-900/60 border border-gold/15 p-8">
              <h3 class="font-cinzel text-gold text-sm tracking-widest mb-6 pb-4 border-b border-gold/15">Opening Hours</h3>
              <form action="settings.php" method="POST" class="space-y-3">
                <div class="flex items-center gap-3"><span class="font-crimson text-plum-300 text-sm w-24 shrink-0">Mon–Thu</span><input type="time" name="mon_open" value="12:00" class="bg-plum-950/70 border border-gold/20 focus:border-gold/50 outline-none px-3 py-1.5 text-plum-200 font-crimson text-sm transition-colors"><span class="text-plum-600">–</span><input type="time" name="mon_close" value="22:00" class="bg-plum-950/70 border border-gold/20 focus:border-gold/50 outline-none px-3 py-1.5 text-plum-200 font-crimson text-sm transition-colors"></div>
                <div class="flex items-center gap-3"><span class="font-crimson text-plum-300 text-sm w-24 shrink-0">Fri–Sat</span><input type="time" name="fri_open" value="12:00" class="bg-plum-950/70 border border-gold/20 focus:border-gold/50 outline-none px-3 py-1.5 text-plum-200 font-crimson text-sm transition-colors"><span class="text-plum-600">–</span><input type="time" name="fri_close" value="23:00" class="bg-plum-950/70 border border-gold/20 focus:border-gold/50 outline-none px-3 py-1.5 text-plum-200 font-crimson text-sm transition-colors"></div>
                <div class="flex items-center gap-3"><span class="font-crimson text-plum-300 text-sm w-24 shrink-0">Sunday</span><input type="time" name="sun_open" value="13:00" class="bg-plum-950/70 border border-gold/20 focus:border-gold/50 outline-none px-3 py-1.5 text-plum-200 font-crimson text-sm transition-colors"><span class="text-plum-600">–</span><input type="time" name="sun_close" value="21:00" class="bg-plum-950/70 border border-gold/20 focus:border-gold/50 outline-none px-3 py-1.5 text-plum-200 font-crimson text-sm transition-colors"></div>
                <div class="pt-2"><button type="submit" class="px-8 py-2.5 bg-gold text-plum-950 font-cinzel text-xs tracking-widest hover:bg-gold-light transition-all duration-200">Save Hours</button></div>
              </form>
            </div>
            <div class="bg-plum-900/60 border border-gold/15 p-8 lg:col-span-2">
              <h3 class="font-cinzel text-gold text-sm tracking-widest mb-6 pb-4 border-b border-gold/15">Change Admin Password</h3>
              <form action="settings.php" method="POST" class="grid md:grid-cols-3 gap-4">
                <div><label class="block font-cinzel text-[11px] text-gold/60 tracking-widest mb-2">Current Password</label><input type="password" name="current_password" placeholder="••••••••" class="w-full bg-plum-950/70 border border-gold/20 focus:border-gold/50 outline-none px-4 py-2.5 text-plum-200 font-crimson text-base placeholder:text-plum-700 transition-colors"></div>
                <div><label class="block font-cinzel text-[11px] text-gold/60 tracking-widest mb-2">New Password</label><input type="password" name="new_password" placeholder="••••••••" class="w-full bg-plum-950/70 border border-gold/20 focus:border-gold/50 outline-none px-4 py-2.5 text-plum-200 font-crimson text-base placeholder:text-plum-700 transition-colors"></div>
                <div><label class="block font-cinzel text-[11px] text-gold/60 tracking-widest mb-2">Confirm New Password</label><input type="password" name="confirm_password" placeholder="••••••••" class="w-full bg-plum-950/70 border border-gold/20 focus:border-gold/50 outline-none px-4 py-2.5 text-plum-200 font-crimson text-base placeholder:text-plum-700 transition-colors"></div>
                <div class="md:col-span-3"><button type="submit" class="px-8 py-2.5 border border-gold/30 text-gold font-cinzel text-xs tracking-widest hover:bg-gold hover:text-plum-950 transition-all duration-200">Update Password</button></div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </main>

  </div><!-- end flex -->

  <!-- MODAL: Add Dish -->
  <div id="modal-add-dish" class="hidden fixed inset-0 z-50 bg-plum-950/80 backdrop-blur-sm items-center justify-center p-6">
    <div class="bg-plum-900 border border-gold/25 w-full max-w-2xl max-h-[90vh] overflow-y-auto">
      <div class="px-8 py-5 border-b border-gold/15 flex items-center justify-between sticky top-0 bg-plum-900 z-10">
        <div>
          <h2 class="font-cinzel text-gold text-lg tracking-widest">Add New Dish</h2>
          <p class="font-crimson italic text-plum-500 text-sm">PHP will insert to database</p>
        </div>
        <button onclick="toggleModal('modal-add-dish')" class="text-plum-500 hover:text-gold transition-colors duration-200">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <form action="menu-add.php" method="POST" enctype="multipart/form-data" class="p-8 space-y-5">
        <div class="grid md:grid-cols-2 gap-5">
          <div><label class="block font-cinzel text-[11px] text-gold/60 tracking-widest mb-2">Name (English)</label><input type="text" name="name_en" placeholder="e.g. Ćevapi" class="w-full bg-plum-950/70 border border-gold/20 focus:border-gold/50 outline-none px-4 py-2.5 text-plum-200 font-crimson text-base placeholder:text-plum-700 transition-colors"></div>
          <div><label class="block font-cinzel text-[11px] text-gold/60 tracking-widest mb-2">Name (Serbian / Cyrillic)</label><input type="text" name="name_sr" placeholder="e.g. Ћевапи" class="w-full bg-plum-950/70 border border-gold/20 focus:border-gold/50 outline-none px-4 py-2.5 text-plum-200 font-crimson text-base placeholder:text-plum-700 transition-colors"></div>
        </div>
        <div><label class="block font-cinzel text-[11px] text-gold/60 tracking-widest mb-2">Description (English)</label><textarea name="desc_en" rows="3" placeholder="Describe the dish in English..." class="w-full bg-plum-950/70 border border-gold/20 focus:border-gold/50 outline-none px-4 py-2.5 text-plum-200 font-crimson text-base placeholder:text-plum-700 resize-none transition-colors"></textarea></div>
        <div><label class="block font-cinzel text-[11px] text-gold/60 tracking-widest mb-2">Description (Serbian)</label><textarea name="desc_sr" rows="3" placeholder="Опишите јело на српском..." class="w-full bg-plum-950/70 border border-gold/20 focus:border-gold/50 outline-none px-4 py-2.5 text-plum-200 font-crimson text-base placeholder:text-plum-700 resize-none transition-colors"></textarea></div>
        <div class="grid md:grid-cols-3 gap-5">
          <div><label class="block font-cinzel text-[11px] text-gold/60 tracking-widest mb-2">Price (€)</label><input type="number" name="price" step="0.01" placeholder="0.00" class="w-full bg-plum-950/70 border border-gold/20 focus:border-gold/50 outline-none px-4 py-2.5 text-plum-200 font-crimson text-base placeholder:text-plum-700 transition-colors"></div>
          <div><label class="block font-cinzel text-[11px] text-gold/60 tracking-widest mb-2">Category</label>
            <select name="category" class="w-full bg-plum-950/70 border border-gold/20 focus:border-gold/50 outline-none px-4 py-2.5 text-plum-200 font-crimson text-base transition-colors">
              <option value="">Select...</option>
              <option>Starters</option>
              <option>Grilled</option>
              <option>Main Dishes</option>
              <option>Soups</option>
              <option>Desserts</option>
              <option>Drinks</option>
            </select>
          </div>
          <div><label class="block font-cinzel text-[11px] text-gold/60 tracking-widest mb-2">Badge</label>
            <select name="badge" class="w-full bg-plum-950/70 border border-gold/20 focus:border-gold/50 outline-none px-4 py-2.5 text-plum-200 font-crimson text-base transition-colors">
              <option value="">None</option>
              <option>Signature</option>
              <option>Popular</option>
              <option>Chef's Choice</option>
              <option>Vegetarian</option>
              <option>New</option>
            </select>
          </div>
        </div>
        <div><label class="block font-cinzel text-[11px] text-gold/60 tracking-widest mb-2">Photo</label><input type="file" name="photo" accept="image/*" class="w-full bg-plum-950/70 border border-gold/20 px-4 py-2.5 text-plum-400 font-crimson text-sm file:mr-4 file:px-4 file:py-1 file:border file:border-gold/30 file:bg-plum-800 file:text-gold file:font-cinzel file:text-xs file:tracking-widest file:cursor-pointer transition-colors"></div>
        <div class="flex items-center gap-3 pt-2 justify-end">
          <button type="button" onclick="toggleModal('modal-add-dish')" class="px-8 py-2.5 border border-gold/20 text-plum-400 font-cinzel text-xs tracking-widest hover:border-gold/40 hover:text-plum-300 transition-all duration-200">Cancel</button>
          <button type="submit" class="px-8 py-2.5 bg-gold text-plum-950 font-cinzel text-xs tracking-widest hover:bg-gold-light transition-all duration-200">Add to Menu</button>
        </div>
      </form>
    </div>
  </div>

</div>