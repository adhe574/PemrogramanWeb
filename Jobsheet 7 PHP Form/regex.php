<?php
$pattern = '/go{2,3}d/';
$text = 'god good goooood goood.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan : " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
