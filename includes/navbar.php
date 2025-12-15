<nav class="navbar">
    <div class="container">
        <a href="<?php echo get_url(); ?>" class="navbar-brand">
            <img src="<?php echo IMAGES_PATH; ?>/logo.png" alt="<?php echo SITE_NAME; ?> Logo">
        </a>
        
        <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        
        <ul class="nav-menu" id="navMenu">
            <li><a href="<?php echo get_url(); ?>" class="<?php echo is_active('index.php') || $_SERVER['REQUEST_URI'] == get_url() || $_SERVER['REQUEST_URI'] == get_url('/') ? 'active' : ''; ?>">Trang chủ</a></li>
            <li><a href="<?php echo get_url('gioi-thieu'); ?>" class="<?php echo is_active('gioi-thieu') ? 'active' : ''; ?>">Giới thiệu</a></li>
            <li><a href="<?php echo get_url('khoa-hoc'); ?>" class="<?php echo is_active('khoa-hoc') ? 'active' : ''; ?>">Khóa học</a></li>
            <li><a href="<?php echo get_url('goc-ba-me'); ?>" class="<?php echo is_active('goc-ba-me') ? 'active' : ''; ?>">Góc ba mẹ</a></li>
            <li><a href="<?php echo get_url('blog'); ?>" class="<?php echo is_active('blog') ? 'active' : ''; ?>">Blog</a></li>
            <li><a href="<?php echo get_url('lien-he'); ?>" class="<?php echo is_active('lien-he') ? 'active' : ''; ?>">Liên hệ</a></li>
        </ul>
    </div>
</nav>
