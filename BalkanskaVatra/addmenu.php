<?php
include 'assets/includes/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Dish | Balkanska Vatra</title>
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

  <header class="bg-plum-900/60 border-b border-gold/15 px-8 py-6 sticky top-0 z-30 backdrop-blur-sm">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
      <div>
        <h1 class="font-cinzel text-gold text-2xl tracking-widest">Add New Dish</h1>
        <p class="font-crimson italic text-plum-500 text-sm mt-1">Balkanska Vatra</p>
      </div>
      <div class="flex items-center gap-4">
        <a href="admin.php" class="flex items-center gap-2 px-4 py-2 border border-gold/25 text-gold/70 hover:border-gold hover:text-gold font-cinzel text-[10px] tracking-widest transition-all duration-200">
          ← Back to Admin
        </a>
      </div>
    </div>
  </header>

  <main class="max-w-7xl mx-auto px-8 py-12">
    <div class="bg-plum-900/40 border border-gold/20 p-8 max-w-2xl">
      <form action="assets/includes/savemenu.php" method="POST" class="space-y-6">
        
        <div>
          <label class="block font-cinzel text-gold text-sm tracking-wider mb-2">Dish Name *</label>
          <input type="text" name="naam" class="w-full bg-plum-950/70 border border-gold/20 text-plum-200 px-4 py-3 font-crimson outline-none focus:border-gold/50" placeholder="e.g., Cevapcici" required>
        </div>

        <div>
          <label class="block font-cinzel text-gold text-sm tracking-wider mb-2">Category *</label>
          <select name="gang" class="w-full bg-plum-950/70 border border-gold/20 text-plum-200 px-4 py-3 font-crimson outline-none focus:border-gold/50" required>
            <option value="">Select a category</option>
            <option value="Starter">Starter</option>
            <option value="Main">Main</option>
            <option value="Dessert">Dessert</option>
            <option value="Beverage">Beverage</option>
          </select>
        </div>

        <div>
          <label class="block font-cinzel text-gold text-sm tracking-wider mb-2">Description</label>
          <textarea name="beschrijving" rows="4" class="w-full bg-plum-950/70 border border-gold/20 text-plum-200 px-4 py-3 font-crimson outline-none focus:border-gold/50" placeholder="Describe the dish..."></textarea>
        </div>

        <div>
          <label class="block font-cinzel text-gold text-sm tracking-wider mb-2">Price (€) *</label>
          <input type="number" name="prijs" step="0.01" class="w-full bg-plum-950/70 border border-gold/20 text-plum-200 px-4 py-3 font-crimson outline-none focus:border-gold/50" placeholder="0.00" required>
        </div>

        <button type="submit" class="w-full py-3 bg-gold text-plum-950 font-cinzel text-sm tracking-widest hover:bg-gold-light transition-all duration-300">
          Add Dish
        </button>
      </form>
    </div>
  </main>

</body>

</html>