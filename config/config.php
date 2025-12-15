<?php
/**
 * T&T Education SkillUp - Configuration File
 * Centralized settings for paths, meta, and future database integration
 */

// Base path configuration
define('BASE_PATH', '/tnteduweb');
define('ASSETS_PATH', BASE_PATH . '/assets');
define('IMAGES_PATH', ASSETS_PATH . '/images');

// Site configuration
define('SITE_NAME', 'T&T Education SkillUp');
define('SITE_TAGLINE', 'Nâng Tầm Kỹ Năng Tiếng Anh');
define('CONTACT_EMAIL', 'hello@tntedu.vn');
define('CONTACT_PHONE', '1900 555 689');
define('CONTACT_ADDRESS', '123 Nguyễn Huệ, Quận 1, TP. Hồ Chí Minh');

// Shorthand aliases
define('PHONE', CONTACT_PHONE);
define('ADDRESS', CONTACT_ADDRESS);
define('EMAIL', CONTACT_EMAIL);

// Social media links
define('FACEBOOK_URL', 'https://facebook.com/tntedu');
define('YOUTUBE_URL', 'https://youtube.com/@tntedu');
define('ZALO_URL', 'https://zalo.me/tntedu');

// SEO defaults
define('DEFAULT_DESCRIPTION', 'Trung tâm Anh ngữ T&T Education SkillUp - Phương pháp giảng dạy tiên tiến, giáo viên tận tâm, cam kết đầu ra rõ ràng.');
define('DEFAULT_KEYWORDS', 'học tiếng anh, trung tâm anh ngữ, IELTS, 4 kỹ năng, học tiếng anh giao tiếp');

// Future database configuration (currently unused)
/*
define('DB_HOST', 'localhost');
define('DB_NAME', 'tntedu');
define('DB_USER', 'root');
define('DB_PASS', '');
*/

// Helper function to build absolute URLs
function get_url($path = '') {
    return BASE_PATH . ($path ? '/' . ltrim($path, '/') : '');
}

// Helper function to check if current page is active
function is_active($page) {
    $current = $_SERVER['REQUEST_URI'];
    return strpos($current, $page) !== false ? 'active' : '';
}
