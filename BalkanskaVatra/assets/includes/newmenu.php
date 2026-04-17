<?php
include 'connection.php';
include 'read.php';

foreach ($result as $row) { ?>
    <div class="menu-card bg-plum-900/60 border border-gold/15 p-6" data-gang="<?= htmlspecialchars($row['gang']) ?>">
        <span class="text-plum-400 text-xs mb-2 block"><?= ucfirst(str_replace('_', ' ', htmlspecialchars($row['gang']))) ?></span>
        <div class="flex justify-between mb-2">
            <h3 class="text-gold"><?= htmlspecialchars($row['naam']) ?></h3>
            <span class="text-gold">€<?= number_format($row['prijs'], 2, '.', '') ?></span>
        </div>
        <p class="text-plum-300 text-sm mb-4"><?= htmlspecialchars($row['beschrijving']) ?></p>
        <button data-naam="<?= htmlspecialchars($row['naam']) ?>" data-prijs="<?= floatval($row['prijs']) ?>" class="cart-add-btn w-full py-2 border border-gold text-gold hover:bg-gold hover:text-plum-950 transition">
            Add to Order
        </button>
    </div>
<?php } ?>