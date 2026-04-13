<?php
$zoek = $_GET['zoek'] ?? '';

if ($zoek !== '') {
    $stmt = $conn->prepare("SELECT id, gang, naam, beschrijving, prijs FROM gerechten WHERE naam LIKE :zoek OR beschrijving LIKE :zoek OR gang LIKE :zoek ORDER BY gang, naam");
    $zoekparam = '%' . $zoek . '%';
    $stmt->bindParam(':zoek', $zoekparam);
    $stmt->execute();
    $result = $stmt->fetchAll();
} else {
    $result = $conn->query("SELECT id, gang, naam, beschrijving, prijs FROM gerechten ORDER BY gang, naam")->fetchAll();
}

foreach ($result as $row) {
?>
    <div class="bg-plum-900/60 border border-gold/25 p-6 hover:border-gold/40 transition-colors">
        <div class="flex items-start justify-between gap-4 mb-4">
            <div class="flex-1">
                <span class="inline-block px-2 py-1 bg-plum-700/50 border border-plum-600/40 text-plum-300 font-cinzel text-[9px] tracking-widest mb-2"><?= htmlspecialchars($row['gang']) ?></span>
                <p class="font-cinzel text-gold text-lg mb-1"><?= htmlspecialchars($row['naam']) ?></p>
                <?php if (!empty($row['beschrijving'])){?>
                    <p class="font-crimson italic text-plum-400 text-sm"><?= htmlspecialchars($row['beschrijving']) ?></p>
                <?php } ?>
            </div>
            <p class="font-cinzel text-gold text-lg shrink-0">€<?= number_format($row['prijs'], 2) ?></p>
        </div>
        <div class="flex gap-3">
            <form method="POST" action="assets/includes/deletemenu.php">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <button type="submit" class="px-4 py-1.5 border border-red-900/40 text-red-400/60 font-cinzel text-[10px] tracking-widest hover:border-red-700/40 hover:text-red-400 transition-all duration-200">Delete</button>
            </form>
        </div>
    </div>
<?php
}
?>