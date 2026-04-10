include 'assets/includes/connection.php';

$query = "SELECT id, gang, naam, beschrijving, prijs FROM gerechten ORDER BY gang, naam";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Menu | Balkanska Vatra</title>
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
        <h1 class="font-cinzel text-gold text-2xl tracking-widest">Edit Menu</h1>
        <p class="font-crimson italic text-plum-500 text-sm mt-1">Manage your dishes</p>
      </div>
      <div class="flex items-center gap-4">
        <a href="admin.php" class="flex items-center gap-2 px-4 py-2 border border-gold/25 text-gold/70 hover:border-gold hover:text-gold font-cinzel text-[10px] tracking-widest transition-all duration-200">
          ← Back to Admin
        </a>
      </div>
    </div>
  </header>

  <main class="max-w-7xl mx-auto px-8 py-12">
    <div class="space-y-6">
      <?php while($row = $result->fetch()){ ?>
        <div class="bg-plum-900/40 border border-gold/20 p-6">
          <div class="flex items-start justify-between mb-4">
            <div>
              <h3 class="font-cinzel text-gold text-lg tracking-wider"><?= htmlspecialchars($row['naam']) ?></h3>
              <p class="text-plum-400 text-sm mt-1"><?= htmlspecialchars($row['gang']) ?> • €<?= number_format($row['prijs'], 2) ?></p>
            </div>
            <div class="flex gap-2">
              <a href="assets/includes/deletemenu.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this dish?');" class="px-4 py-2 border border-red-900/40 text-red-400/70 hover:border-red-700/50 hover:text-red-400 font-cinzel text-xs tracking-widest transition-all duration-200">
                Delete
              </a>
            </div>
          </div>
          
          <form action="assets/includes/updatemenu.php" method="POST" class="space-y-4">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            
            <div>
              <label class="block font-cinzel text-gold text-xs tracking-wider mb-2">Dish Name</label>
              <input type="text" name="naam" value="<?= htmlspecialchars($row['naam']) ?>" class="w-full bg-plum-950/70 border border-gold/20 text-plum-200 px-4 py-2 font-crimson outline-none focus:border-gold/50">
            </div>

            <div class="grid grid-cols-2 gap-4">
              <div>
                <label class="block font-cinzel text-gold text-xs tracking-wider mb-2">Category</label>
                <select name="gang" class="w-full bg-plum-950/70 border border-gold/20 text-plum-200 px-4 py-2 font-crimson outline-none focus:border-gold/50">
                  <option value="Starter" <?= $row['gang'] == 'Starter' ? 'selected' : '' ?>>Starter</option>
                  <option value="Main" <?= $row['gang'] == 'Main' ? 'selected' : '' ?>>Main</option>
                  <option value="Dessert" <?= $row['gang'] == 'Dessert' ? 'selected' : '' ?>>Dessert</option>
                  <option value="Beverage" <?= $row['gang'] == 'Beverage' ? 'selected' : '' ?>>Beverage</option>
                </select>
              </div>
              <div>
                <label class="block font-cinzel text-gold text-xs tracking-wider mb-2">Price (€)</label>
                <input type="number" name="prijs" step="0.01" value="<?= $row['prijs'] ?>" class="w-full bg-plum-950/70 border border-gold/20 text-plum-200 px-4 py-2 font-crimson outline-none focus:border-gold/50">
              </div>
            </div>

            <div>
              <label class="block font-cinzel text-gold text-xs tracking-wider mb-2">Description</label>
              <textarea name="beschrijving" rows="3" class="w-full bg-plum-950/70 border border-gold/20 text-plum-200 px-4 py-2 font-crimson outline-none focus:border-gold/50"><?= htmlspecialchars($row['beschrijving'] ?? '') ?></textarea>
            </div>

            <button type="submit" class="w-full py-2 bg-gold text-plum-950 font-cinzel text-xs tracking-widest hover:bg-gold-light transition-all duration-300">
              Save Changes
            </button>
          </form>
        </div>
      <?php } ?>
    </div>
  </main>

</body>

</html>