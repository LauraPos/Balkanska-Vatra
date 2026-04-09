<?php
// login.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Balkanska Vatra | Admin Panel</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            plum: {
              950: '#0d0014',
              900: '#1a0028',
              800: '#2d0045',
              700: '#450068',
              600: '#6b21a8',
              500: '#9333ea',
              400: '#c084fc',
              300: '#d8b4fe',
            },
            gold: {
              DEFAULT: '#c9a84c',
              light: '#e8c97a',
            },
          },
          fontFamily: {
            cinzel: ['"Cinzel Decorative"', 'serif'],
            crimson: ['"Crimson Pro"', 'serif'],
          },
        },
      },
    }
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Crimson+Pro:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">
</head>

<body>
  <div>
    <div class="min-h-screen bg-plum-950 font-crimson flex items-center justify-center relative py-12">
      <button onclick="showPage('page-main')" class="absolute top-6 left-6 flex items-center gap-2 text-plum-400 hover:text-gold transition-colors duration-300 font-cinzel text-xs tracking-widest">
        ← Back to Site
      </button>
      <div class="relative z-10 w-full max-w-md px-6">
        <div class="text-center mb-10">
          <p class="font-cinzel text-gold text-2xl tracking-widest leading-tight">Balkanska Vatra</p>
          <p class="font-crimson italic text-plum-500 text-lg tracking-[0.2em] mt-1">Балканска Ватра</p>
        </div>
        <div class="bg-plum-900/70 border border-gold/15 backdrop-blur-sm p-10">
          <h1 class="font-cinzel text-gold text-xl text-center tracking-wider mb-1">Sign In</h1>
          <p class="font-crimson italic text-plum-500 text-center text-base mb-8">Administrator Access Only</p>

          <!-- Login Form -->
          <form action="/assets/includes/checklogin.php" method="POST" class="space-y-5">
            <div>
              <label class="block font-cinzel text-[11px] text-gold/60 tracking-widest mb-2">Username</label>
              <input type="text" name="username" placeholder="admin" autocomplete="username" class="w-full bg-plum-950/70 border border-gold/20 outline-none px-5 py-3 text-plum-200" required>
            </div>
            <div>
              <label class="block font-cinzel text-[11px] text-gold/60 tracking-widest mb-2">Password</label>
              <input type="password" name="password" placeholder="••••••••" autocomplete="current-password" class="w-full bg-plum-950/70 border border-gold/20 outline-none px-5 py-3 text-plum-200" required>
            </div>
            <button type="submit" class="w-full py-4 bg-gold text-plum-950 font-cinzel text-sm tracking-widest hover:bg-gold-light transition-all duration-300">
              Sign In
            </button>
          </form>

          <!-- Foutmelding bij verkeerde login -->
          <?php if (isset($_GET['error'])): ?>
            <p class="text-red-500 text-center mt-4 text-sm">Wrong username or password.</p>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
</body>

</html>