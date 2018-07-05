<?php

$filePath = __DIR__ . '/php.png';
$imageContent = file_get_contents($filePath);

header('Content-type: image/png');
header('Content-length: ' . strlen($imageContent));

echo $imageContent;