<?php
// Set default page values if not defined (for backward compatibility)
$page_title = isset($meta['title']) ? $meta['title'] : (isset($page_title) ? $page_title : SITE_NAME);
$page_description = isset($meta['description']) ? $meta['description'] : (isset($page_description) ? $page_description : DEFAULT_DESCRIPTION);
$page_keywords = isset($meta['keywords']) ? (is_array($meta['keywords']) ? implode(', ', $meta['keywords']) : $meta['keywords']) : (isset($page_keywords) ? $page_keywords : DEFAULT_KEYWORDS);
$og_image = isset($meta['og_image']) ? $meta['og_image'] : '/assets/images/og-default.jpg';
$canonical = isset($meta['canonical']) ? $meta['canonical'] : '';
$current_page = isset($current_page) ? $current_page : '';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>">
    <meta name="author" content="<?php echo SITE_NAME; ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($og_image); ?>">
    <meta property="og:site_name" content="<?php echo SITE_NAME; ?>">
    <?php if ($canonical): ?>
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical); ?>">
    <?php endif; ?>
    
    <!-- Title -->
    <title><?php echo htmlspecialchars($page_title); ?></title>
    
    <!-- Google Fonts - Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"></noscript>
    
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>/css/style.css">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"></noscript>
</head>
<body>
