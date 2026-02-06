<?php
/**
 * Script to convert .NET syntax to PHP syntax across all PHP files
 */

// Define replacements
$replacements = [
    // .NET URL Actions to PHP url() helper
    '<?php echo $base_url; ?>index.php' => '<?php echo url(\'index.php\'); ?>',
    '<?php echo $base_url; ?>index.php' => '<?php echo url(\'index.php\'); ?>',
    '<?php echo $base_url; ?>about.php' => '<?php echo url(\'about.php\'); ?>',
    '@Url.Action(" About", "Home" )' => '<?php echo url(\'about.php\'); ?>',
    '<?php echo $base_url; ?>contact.php' => '<?php echo url(\'contact.php\'); ?>',
    '<?php echo $base_url; ?>contact.php' => '<?php echo url(\'contact.php\'); ?>',
    '<?php echo $base_url; ?>projects.php' => '<?php echo url(\'projects.php\'); ?>',
    '@Url.Action(" Projects", "Home" )' => '<?php echo url(\'projects.php\'); ?>',
    '@Url.Action("Services", "Home")' => '<?php echo url(\'services.php\'); ?>',
    '@Url.Action(" Services", "Home" )' => '<?php echo url(\'services.php\'); ?>',
    
    // Service pages
    '<?php echo $base_url; ?>services/data-cabling.php' => '<?php echo url(\'services/data-cabling.php\'); ?>',
    '<?php echo $base_url; ?>services/cctv.php' => '<?php echo url(\'services/cctv.php\'); ?>',
    '<?php echo $base_url; ?>services/fibre-splicing.php' => '<?php echo url(\'services/fibre-splicing.php\'); ?>',
    '<?php echo $base_url; ?>services/otdr-testing.php' => '<?php echo url(\'services/otdr-testing.php\'); ?>',
    '<?php echo $base_url; ?>services/audio-video.php' => '<?php echo url(\'services/audio-video.php\'); ?>',
    '<?php echo $base_url; ?>services/fire-alarm.php' => '<?php echo url(\'services/fire-alarm.php\'); ?>',
    '<?php echo $base_url; ?>services/electrical-wiring.php' => '<?php echo url(\'services/electrical-wiring.php\'); ?>',
    '<?php echo $base_url; ?>services/panel-installation.php' => '<?php echo url(\'services/panel-installation.php\'); ?>',
    '<?php echo $base_url; ?>services/ups-inverter.php' => '<?php echo url(\'services/ups-inverter.php\'); ?>',
    '<?php echo $base_url; ?>services/electrical-testing.php' => '<?php echo url(\'services/electrical-testing.php\'); ?>',
    '<?php echo $base_url; ?>services/manpower-supply.php' => '<?php echo url(\'services/manpower-supply.php\'); ?>',
    
    // Tilde paths to asset() helper - images
    'src="~/images/' => 'src="<?php echo asset(\'images/',
    'href="~/images/' => 'href="<?php echo asset(\'images/',
    
    // Close PHP tags for image paths
    '.jpg"' => '.jpg\'); ?>"',
    '.jpeg"' => '.jpeg\'); ?>"',
    '.png"' => '.png\'); ?>"',
    '.webp"' => '.webp\'); ?>"',
    '.avif"' => '.avif\'); ?>"',
    '.jfif"' => '.jfif\'); ?>"',
    '.gif"' => '.gif\'); ?>"',
    
    // Fix $Base_Url variable references
    '<?= $Base_Url ?>' => '<?php echo url(\'index.php\'); ?>',
];

// Get all PHP files
$files = [];
$directories = ['.', 'common', 'services'];

foreach ($directories as $dir) {
    $phpFiles = glob($dir . '/*.php');
    if ($phpFiles) {
        $files = array_merge($files, $phpFiles);
    }
}

echo "Found " . count($files) . " PHP files to process\n\n";

// Process each file
foreach ($files as $file) {
    echo "Processing: $file\n";
    
    $content = file_get_contents($file);
    $original = $content;
    
    // Apply replacements
    foreach ($replacements as $search => $replace) {
        $content = str_replace($search, $replace, $content);
    }
    
    // Check if file was modified
    if ($content !== $original) {
        file_put_contents($file, $content);
        echo "  ✓ Updated\n";
    } else {
        echo "  - No changes needed\n";
    }
}

echo "\n✓ All files processed successfully!\n";
?>
