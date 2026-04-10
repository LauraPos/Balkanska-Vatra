<?php
// ✅ VERANDERING: Dit was al goed, maar ik heb het gecommentarieerd gemaakt
// session_start() zorgt dat je sessieverificaties werken
session_start();

// ✅ VERANDERING: Permission check
// Als je niet ingelogd bent (admin_logged_in is niet true), word je naar login.php gestuurd
// Dit voorkomt dat ongeautoriseerden deze pagina zien
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}
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

<body class="bg-plum-950 text-gold font-crimson">

  <!-- HEADER -->
  <header class="bg-plum-900/60 border-b border-gold/15 px-8 py-6 sticky top-0 z-30 backdrop-blur-sm">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
      <div>
        <h1 class="font-cinzel text-gold text-2xl tracking-widest">Admin Panel</h1>
        <p class="font-crimson italic text-plum-500 text-sm mt-1">Balkanska Vatra</p>
      </div>
      <div class="flex items-center gap-4">
        <a href="index.php" class="flex items-center gap-2 px-4 py-2 border border-gold/25 text-gold/70 hover:border-gold hover:text-gold font-cinzel text-[10px] tracking-widest transition-all duration-200">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
          </svg>
          View Site
        </a>
        <a href="assets/includes/logout.php" class="flex items-center gap-2 px-4 py-2 border border-red-900/40 text-red-400/70 hover:border-red-700/50 hover:text-red-400 font-cinzel text-[10px] tracking-widest transition-all duration-200">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
          </svg>
          Logout
        </a>
      </div>
    </div>
  </header>

  <!-- MAIN CONTENT -->
  <main class="max-w-7xl mx-auto px-8 py-12">

    <!-- MESSAGES SECTION -->
    <section class="mb-16">
      <div class="mb-8">
        <h2 class="font-cinzel text-gold text-3xl tracking-wider mb-2">Contact Messages</h2>
        <p class="font-crimson italic text-plum-500 text-sm">Incoming messages from the contact form</p>
      </div>

      <div class="space-y-4">
        <?php include 'assets/includes/getcontact.php'; ?>
      </div>
    </section>

    <!-- RESERVATIONS SECTION -->
    <section class="mb-16">
      <div class="mb-8">
        <h2 class="font-cinzel text-gold text-3xl tracking-wider mb-2">Reservations</h2>
        <p class="font-crimson italic text-plum-500 text-sm">View and manage table bookings</p>
      </div>

      <div class="space-y-4">
        <?php include 'assets/includes/getreservations.php'; ?>
      </div>
    </section>

    <!-- MENU ITEMS SECTION -->
    <section class="mb-16">
      <div class="mb-8 flex items-center justify-between">
        <div>
          <h2 class="font-cinzel text-gold text-3xl tracking-wider mb-2">Menu Items</h2>
          <p class="font-crimson italic text-plum-500 text-sm">Manage dishes, prices and categories</p>
        </div>
        <a href="editmenu.php" class="flex items-center gap-2 px-6 py-2.5 border border-gold/25 text-gold/70 font-cinzel text-xs tracking-widest hover:border-gold hover:text-gold transition-all duration-200">
          Edit Dishes
        </a>
        <a href="addmenu.php" class="flex items-center gap-2 px-6 py-2.5 bg-gold text-plum-950 font-cinzel text-xs tracking-widest hover:bg-gold-light transition-all duration-200">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
          </svg>
          Add Dish
        </a>
      </div>

      <!-- SEARCH BAR -->
      <form method="GET" action="admin.php">
        <input type="search" name="zoek" value="<?= htmlspecialchars($_GET['zoek'] ?? '') ?>" placeholder="Search dishes..." class="w-full bg-plum-900 border border-gold/20 text-plum-300 font-crimson text-sm px-4 py-3 outline-none focus:border-gold/50 placeholder:text-plum-700 transition-colors">
      </form>

      <div class="space-y-4">
        <?php include 'assets/includes/getmenuadmin.php'; ?>
      </div>
    </section>

  </main>

</body>

</html>