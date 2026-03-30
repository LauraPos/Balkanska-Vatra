<div id="page-login" class="page hidden">
  <div class="min-h-screen bg-plum-950 font-crimson flex items-center justify-center overflow-hidden relative py-12">
    <!-- bg orbs -->
    <div class="absolute top-0 left-1/4 w-[500px] h-[500px] rounded-full bg-plum-700/15 blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-0 right-1/4 w-[400px] h-[400px] rounded-full bg-plum-600/10 blur-[100px] pointer-events-none"></div>
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,rgba(45,0,69,0.3)_0%,transparent_70%)] pointer-events-none"></div>

    <!-- back link -->
    <button onclick="showPage('page-main')" class="absolute top-6 left-6 flex items-center gap-2 text-plum-400 hover:text-gold transition-colors duration-300 font-cinzel text-xs tracking-widest">
      <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
      Back to Site
    </button>

    <div class="relative z-10 w-full max-w-md px-6">
      <!-- logo -->
      <div class="text-center mb-10">
        <div class="flex items-center justify-center gap-3 mb-6">
          <div class="h-px w-14 bg-gradient-to-r from-transparent to-gold/50"></div>
          <span class="text-gold text-xl">✦</span>
          <div class="h-px w-14 bg-gradient-to-l from-transparent to-gold/50"></div>
        </div>
        <p class="font-cinzel text-gold text-2xl tracking-widest leading-tight">Balkanska Vatra</p>
        <p class="font-crimson italic text-plum-500 text-lg tracking-[0.2em] mt-1">Балканска Ватра</p>
        <div class="mt-5 inline-block px-4 py-1.5 border border-plum-600/50 bg-plum-800/30">
          <p class="font-cinzel text-plum-400 text-[10px] tracking-[0.3em]">ADMIN PORTAL</p>
        </div>
      </div>

      <!-- login box -->
      <div class="bg-plum-900/70 border border-gold/15 backdrop-blur-sm p-10">
        <div class="h-px w-full bg-gradient-to-r from-transparent via-gold/40 to-transparent mb-10"></div>
        <h1 class="font-cinzel text-gold text-xl text-center tracking-wider mb-1">Sign In</h1>
        <p class="font-crimson italic text-plum-500 text-center text-base mb-8">Administrator Access Only</p>

        <!-- PHP: action="auth.php" method="POST" -->
        <!-- Error placeholder: <?php if(isset($error)): ?><div class="..."><?php echo $error; ?></div><?php endif; ?> -->
        <form action="auth.php" method="POST" class="space-y-5">
          <div>
            <label class="block font-cinzel text-[11px] text-gold/60 tracking-widest mb-2">Username <span class="font-crimson italic text-gold/30 font-normal">/ Корисничко Ime</span></label>
            <div class="relative">
              <span class="absolute left-4 top-1/2 -translate-y-1/2 text-plum-600">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/></svg>
              </span>
              <input type="text" name="username" placeholder="admin" autocomplete="username" class="w-full bg-plum-950/70 border border-gold/20 focus:border-gold/50 outline-none pl-11 pr-5 py-3 text-plum-200 font-crimson text-base placeholder:text-plum-700 transition-colors duration-300">
            </div>
          </div>
          <div>
            <label class="block font-cinzel text-[11px] text-gold/60 tracking-widest mb-2">Password <span class="font-crimson italic text-gold/30 font-normal">/ Лозинка</span></label>
            <div class="relative">
              <span class="absolute left-4 top-1/2 -translate-y-1/2 text-plum-600">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/></svg>
              </span>
              <input type="password" name="password" placeholder="••••••••" autocomplete="current-password" class="w-full bg-plum-950/70 border border-gold/20 focus:border-gold/50 outline-none pl-11 pr-5 py-3 text-plum-200 font-crimson text-base placeholder:text-plum-700 transition-colors duration-300">
            </div>
          </div>
          <div class="flex items-center justify-between pt-1">
            <label class="flex items-center gap-2 cursor-pointer group">
              <input type="checkbox" name="remember" class="w-4 h-4 accent-gold cursor-pointer">
              <span class="font-crimson text-plum-400 text-sm group-hover:text-plum-300 transition-colors">Remember me</span>
            </label>
            <a href="forgot-password.php" class="font-crimson italic text-plum-500 text-sm hover:text-gold transition-colors duration-300">Forgot password?</a>
          </div>
          <div class="pt-3">
            <!-- Demo: clicking goes to dashboard. PHP will replace this with real auth -->
            <button type="button" onclick="showPage('page-admin')" class="w-full py-4 bg-gold text-plum-950 font-cinzel text-sm tracking-widest hover:bg-gold-light hover:shadow-[0_8px_30px_rgba(201,168,76,0.35)] hover:-translate-y-0.5 transition-all duration-300">
              Sign In &nbsp;·&nbsp; <span class="font-crimson italic font-normal opacity-75">Пријавите Се</span>
            </button>
          </div>
        </form>
        <div class="h-px w-full bg-gradient-to-r from-transparent via-gold/20 to-transparent mt-10"></div>
      </div>
      <p class="text-center font-crimson italic text-plum-700 text-sm mt-6">Restricted access. Unauthorized entry is prohibited.</p>
    </div>
  </div>
</div>