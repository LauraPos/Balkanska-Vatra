<?php
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
                        plum: { 950: '#0d0014', 900: '#1a0028', 800: '#2d0045', 700: '#450068', 600: '#6b21a8', 500: '#9333ea', 400: '#c084fc', 300: '#d8b4fe' },
                        gold: { DEFAULT: '#c9a84c', light: '#e8c97a' },
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
<body class="bg-plum-950 text-gold font-crimson min-h-screen">

    <header class="bg-plum-900/60 border-b border-gold/15 px-8 py-6 sticky top-0 z-30 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div>
                <h1 class="font-cinzel text-gold text-2xl tracking-widest">Edit Menu</h1>
                <p class="font-crimson italic text-plum-500 text-sm mt-1">Balkanska Vatra</p>
            </div>
            <a href="admin.php" class="flex items-center gap-2 px-4 py-2 border border-gold/25 text-gold/70 hover:border-gold hover:text-gold font-cinzel text-[10px] tracking-widest transition-all duration-200">
                ← Back to Admin
            </a>
        </div>
    </header>

    <main class="max-w-4xl mx-auto px-8 py-12">
        <div class="space-y-4">
            <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <form method="POST" action="assets/includes/updatemenu.php" class="bg-plum-900/60 border border-gold/25 p-6 hover:border-gold/40 transition-colors">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <div class="grid md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block font-cinzel text-[10px] text-gold/70 tracking-widest mb-2">NAAM</label>
                        <input type="text" name="naam" value="<?= htmlspecialchars($row['naam']) ?>" class="w-full bg-plum-800/60 border border-gold/20 focus:border-gold/60 outline-none px-4 py-2 text-plum-200 font-crimson text-base placeholder:text-plum-400 transition-colors">
                    </div>
                    <div>
                        <label class="block font-cinzel text-[10px] text-gold/70 tracking-widest mb-2">GANG</label>
                        <input type="text" name="gang" value="<?= htmlspecialchars($row['gang']) ?>" class="w-full bg-plum-800/60 border border-gold/20 focus:border-gold/60 outline-none px-4 py-2 text-plum-200 font-crimson text-base placeholder:text-plum-400 transition-colors">
                    </div>
                    <div>
                        <label class="block font-cinzel text-[10px] text-gold/70 tracking-widest mb-2">BESCHRIJVING</label>
                        <input type="text" name="beschrijving" value="<?= htmlspecialchars($row['beschrijving']) ?>" class="w-full bg-plum-800/60 border border-gold/20 focus:border-gold/60 outline-none px-4 py-2 text-plum-200 font-crimson text-base placeholder:text-plum-400 transition-colors">
                    </div>
                    <div>
                        <label class="block font-cinzel text-[10px] text-gold/70 tracking-widest mb-2">PRIJS</label>
                        <input type="text" name="prijs" value="<?= htmlspecialchars($row['prijs']) ?>" class="w-full bg-plum-800/60 border border-gold/20 focus:border-gold/60 outline-none px-4 py-2 text-plum-200 font-crimson text-base placeholder:text-plum-400 transition-colors">
                    </div>
                </div>
                <button type="submit" class="px-6 py-1.5 bg-gold text-plum-950 font-cinzel text-[10px] tracking-widest hover:bg-gold-light transition-all duration-200">Save</button>
            </form>
            <?php endwhile; ?>
        </div>
    </main>

</body>
</html>