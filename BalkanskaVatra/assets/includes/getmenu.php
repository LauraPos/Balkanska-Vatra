<?php

$query = "SELECT * FROM menu ORDER BY gang, naam";
$result = $conn->query($query);

while ($row = $result->fetch_assoc()) {
    ?>
    <div class="menu-card opacity-0 transition-opacity duration-500 group relative bg-plum-900/60 border border-gold/15 hover:border-gold/45 hover:-translate-y-1 hover:shadow-[0_20px_50px_rgba(0,0,0,0.5)]" data-gang="<?= htmlspecialchars($row['gang']) ?>">
        <div class="h-px w-0 group-hover:w-full bg-gradient-to-r from-gold/60 to-transparent transition-all duration-500"></div>
        <div class="p-7">
            <span class="inline-block px-3 py-1 bg-plum-700/50 border border-plum-500/40 text-plum-300 font-cinzel text-[10px] tracking-widest mb-4"><?= htmlspecialchars($row['gang']) ?></span>
            <div class="flex items-start justify-between gap-4 mb-3">
                <div>
                    <h3 class="font-cinzel text-gold text-lg leading-tight mb-1"><?= htmlspecialchars($row['naam']) ?></h3>
                    <?php if (!empty($row['beschrijving'])): ?>
                        <p class="font-crimson italic text-plum-400"><?= htmlspecialchars($row['beschrijving']) ?></p>
                    <?php endif; ?>
                </div>
                <p class="font-cinzel text-gold text-lg shrink-0">€<?= number_format($row['prijs'], 2) ?></p>
            </div>
            <div class="h-px bg-gradient-to-r from-gold/20 to-transparent mb-3"></div>
            <button onclick="addToCart('<?= htmlspecialchars($row['naam']) ?>','<?= htmlspecialchars($row['naam']) ?>',<?= $row['prijs'] ?>)" class="w-full py-2.5 border border-gold/30 text-gold font-cinzel text-xs tracking-widest hover:bg-gold hover:text-plum-950 transition-all duration-200 flex items-center justify-center gap-2">
                Add to Order
            </button>
        </div>
    </div>
    <?php
}