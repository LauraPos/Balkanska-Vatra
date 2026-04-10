<?php
require 'connection.php';

$query = "SELECT name, email, subject, message FROM contact";
$result = $conn->query($query);

while ($row = $result->fetch()) {
?>
    <div class="bg-plum-900/60 border border-gold/25 p-6 hover:border-gold/40 transition-colors">
        <div class="flex items-center gap-3 mb-4">
            <div class="w-3 h-3 rounded-full bg-gold shrink-0"></div>
            <div>
                <p class="font-cinzel text-gold text-sm"><?= htmlspecialchars($row['name']) ?></p>
                <p class="font-crimson italic text-plum-500 text-xs"><?= htmlspecialchars($row['email']) ?></p>
            </div>
        </div>
        <div class="pl-6">
            <p class="font-cinzel text-plum-200 text-sm mb-2"><?= htmlspecialchars($row['subject']) ?></p>
            <p class="font-crimson text-plum-300 text-base leading-relaxed"><?= htmlspecialchars($row['message']) ?></p>
        </div>
    </div>
<?php
}
?>