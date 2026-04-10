<?php
$query = "SELECT id, name, email, date, time, guests, notes, status FROM reserveren ORDER BY date ASC";
$result = $conn->query($query);

while ($row = $result->fetch()) {
?>
    <div class="bg-plum-900/60 border border-gold/25 p-6 hover:border-gold/40 transition-colors">
        <div class="flex items-start justify-between gap-4 mb-4">
            <div>
                <p class="font-cinzel text-gold text-sm"><?= htmlspecialchars($row['name']) ?></p>
                <p class="font-crimson italic text-plum-500 text-xs"><?= htmlspecialchars($row['email']) ?></p>
            </div>
            <?php if ($row['status'] === 'accepted'){ ?>
                <span class="px-3 py-1 bg-green-900/40 border border-green-700/30 text-green-400 font-cinzel text-[9px] tracking-wider shrink-0">Accepted</span>
            <?php } else{ ?>
                <span class="px-3 py-1 bg-yellow-900/40 border border-yellow-700/30 text-yellow-400 font-cinzel text-[9px] tracking-wider shrink-0">Pending</span>
                <?php } ?>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-4">
            <div>
                <p class="font-cinzel text-plum-500 text-[10px] tracking-widest mb-1">DATE</p>
                <p class="font-cinzel text-gold text-sm"><?= htmlspecialchars($row['date']) ?></p>
            </div>
            <div>
                <p class="font-cinzel text-plum-500 text-[10px] tracking-widest mb-1">TIME</p>
                <p class="font-cinzel text-gold text-sm"><?= htmlspecialchars($row['time']) ?></p>
            </div>
            <div>
                <p class="font-cinzel text-plum-500 text-[10px] tracking-widest mb-1">GUESTS</p>
                <p class="font-crimson text-plum-300 text-sm"><?= htmlspecialchars($row['guests']) ?></p>
            </div>
            <div>
                <p class="font-cinzel text-plum-500 text-[10px] tracking-widest mb-1">NOTES</p>
                <p class="font-crimson italic text-plum-400 text-sm"><?= htmlspecialchars($row['notes']) ?></p>
            </div>
        </div>
        <?php if ($row['status'] === 'pending'){ ?>
            <div class="flex gap-3">
                <form method="POST" action="assets/includes/updatereservations.php">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <input type="hidden" name="action" value="accept">
                    <button type="submit" class="px-4 py-1.5 bg-green-900/40 border border-green-700/30 text-green-400 font-cinzel text-[10px] tracking-widest hover:bg-green-900/60 transition-all duration-200">Approve</button>
                </form>
                <form method="POST" action="assets/includes/updatereservations.php">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <input type="hidden" name="action" value="decline">
                    <button type="submit" class="px-4 py-1.5 border border-red-900/40 text-red-400/60 font-cinzel text-[10px] tracking-widest hover:border-red-700/40 hover:text-red-400 transition-all duration-200">Decline</button>
                </form>
            </div>
        <?php } ?>
    </div>
<?php
}
?>