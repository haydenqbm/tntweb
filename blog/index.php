<?php
require_once __DIR__ . '/../config/config.php';

// Load meta data from JSON
$meta = json_decode(file_get_contents(__DIR__ . '/meta.json'), true);
$current_page = 'blog';

include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/navbar.php';
?>

<!-- Page Header -->
<section class="hero" style="padding: 60px 0; min-height: auto;">
    <div class="container">
        <h1><?php echo htmlspecialchars($meta['hero_heading']); ?></h1>
        <p style="font-size: 1.125rem; max-width: 700px;"><?php echo htmlspecialchars($meta['hero_subheading']); ?></p>
    </div>
</section>

<!-- Featured Post -->
<section class="section">
    <div class="container">
        <div class="card" style="padding: 0; overflow: hidden;">
            <div class="grid-2" style="gap: 0;">
                <div style="min-height: 400px; background: url('<?php echo IMAGES_PATH; ?>/blog-featured.jpg') center/cover no-repeat; background-color: var(--color-blue);"></div>
                <div style="padding: var(--spacing-lg);">
                    <div style="display: inline-block; background: var(--color-orange); color: white; padding: 6px 16px; border-radius: 20px; font-size: 0.875rem; font-weight: 600; margin-bottom: 16px;">
                        <i class="fas fa-star"></i> Nổi Bật
                    </div>
                    <h2 style="margin-bottom: 16px;">
                        <a href="<?php echo get_url('blog/10-meo-hoc-tieng-anh-hieu-qua'); ?>" style="color: var(--color-text); text-decoration: none;">
                            10 Mẹo Học Tiếng Anh Hiệu Quả Dành Cho Người Mới Bắt Đầu
                        </a>
                    </h2>
                    <p class="text-muted" style="margin-bottom: 16px;">
                        <i class="fas fa-calendar"></i> 15/01/2024 | 
                        <i class="fas fa-user"></i> Ms. Nguyễn Hương | 
                        <i class="fas fa-clock"></i> 8 phút đọc
                    </p>
                    <p style="margin-bottom: 24px;">
                        Học tiếng Anh không khó nếu bạn có phương pháp đúng. Bài viết này chia sẻ 10 mẹo học tiếng Anh hiệu quả giúp bạn tiến bộ nhanh chóng từ A đến Z, đặc biệt phù hợp với người mới bắt đầu...
                    </p>
                    <a href="<?php echo get_url('blog/10-meo-hoc-tieng-anh-hieu-qua'); ?>" class="btn-primary">
                        Đọc Tiếp <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Categories Filter -->
<section class="section bg-grey">
    <div class="container">
        <div style="text-align: center; margin-bottom: 32px;">
            <h3 style="margin-bottom: 20px;">Chủ Đề</h3>
            <div style="display: flex; flex-wrap: wrap; gap: 12px; justify-content: center;">
                <a href="?category=all" class="btn-primary" style="padding: 10px 24px; font-size: 0.875rem;">
                    Tất Cả
                </a>
                <a href="?category=ielts" class="btn-primary" style="padding: 10px 24px; font-size: 0.875rem; background: white; color: var(--color-blue);">
                    <i class="fas fa-graduation-cap"></i> IELTS
                </a>
                <a href="?category=tips" class="btn-primary" style="padding: 10px 24px; font-size: 0.875rem; background: white; color: var(--color-blue);">
                    <i class="fas fa-lightbulb"></i> Mẹo Học
                </a>
                <a href="?category=grammar" class="btn-primary" style="padding: 10px 24px; font-size: 0.875rem; background: white; color: var(--color-blue);">
                    <i class="fas fa-book"></i> Ngữ Pháp
                </a>
                <a href="?category=vocabulary" class="btn-primary" style="padding: 10px 24px; font-size: 0.875rem; background: white; color: var(--color-blue);">
                    <i class="fas fa-spell-check"></i> Từ Vựng
                </a>
                <a href="?category=success" class="btn-primary" style="padding: 10px 24px; font-size: 0.875rem; background: white; color: var(--color-blue);">
                    <i class="fas fa-trophy"></i> Thành Công
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Blog Posts Grid -->
<section class="section">
    <div class="container">
        <div class="grid-3">
            <!-- Post 1 -->
            <div class="card" style="padding: 0; overflow: hidden;">
                <img src="https://via.placeholder.com/400x200/0D2396/FFFFFF?text=Blog" alt="Blog post" style="width: 100%; height: 200px; object-fit: cover;" ">
                <div style="padding: var(--spacing-md);">
                    <div style="display: flex; gap: 8px; margin-bottom: 12px;">
                        <span style="background: rgba(13,35,150,0.1); color: var(--color-blue); padding: 4px 12px; border-radius: 12px; font-size: 0.75rem; font-weight: 600;">IELTS</span>
                    </div>
                    <h3 style="margin-bottom: 12px; font-size: 1.25rem;">
                        <a href="<?php echo get_url('blog/cach-dat-7-0-ielts-writing'); ?>" style="color: var(--color-text); text-decoration: none;">
                            Cách Đạt 7.0+ IELTS Writing: Chiến Lược Từ A-Z
                        </a>
                    </h3>
                    <p class="text-muted" style="font-size: 0.875rem; margin-bottom: 12px;">
                        <i class="fas fa-calendar"></i> 12/01/2024 | 
                        <i class="fas fa-clock"></i> 6 phút
                    </p>
                    <p style="margin-bottom: 16px; font-size: 0.875rem;">
                        IELTS Writing là kỹ năng khó nhất với nhiều thí sinh. Bài viết chia sẻ chiến lược học Writing hiệu quả giúp bạn đạt 7.0+...
                    </p>
                    <a href="<?php echo get_url('blog/cach-dat-7-0-ielts-writing'); ?>" style="color: var(--color-blue); font-weight: 600; text-decoration: none;">
                        Đọc Thêm <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Post 2 -->
            <div class="card" style="padding: 0; overflow: hidden;">
                <img src="https://via.placeholder.com/400x200/F76010/FFFFFF?text=Blog" alt="Blog post" style="width: 100%; height: 200px; object-fit: cover;" ">
                <div style="padding: var(--spacing-md);">
                    <div style="display: flex; gap: 8px; margin-bottom: 12px;">
                        <span style="background: rgba(247,96,16,0.1); color: var(--color-orange); padding: 4px 12px; border-radius: 12px; font-size: 0.75rem; font-weight: 600;">Mẹo Học</span>
                    </div>
                    <h3 style="margin-bottom: 12px; font-size: 1.25rem;">
                        <a href="<?php echo get_url('blog/5-ung-dung-hoc-tieng-anh-mien-phi'); ?>" style="color: var(--color-text); text-decoration: none;">
                            Top 5 Ứng Dụng Học Tiếng Anh Miễn Phí Hiệu Quả Nhất 2024
                        </a>
                    </h3>
                    <p class="text-muted" style="font-size: 0.875rem; margin-bottom: 12px;">
                        <i class="fas fa-calendar"></i> 10/01/2024 | 
                        <i class="fas fa-clock"></i> 5 phút
                    </p>
                    <p style="margin-bottom: 16px; font-size: 0.875rem;">
                        Tổng hợp 5 ứng dụng học tiếng Anh miễn phí tốt nhất trên điện thoại, giúp bạn học mọi lúc mọi nơi một cách hiệu quả...
                    </p>
                    <a href="<?php echo get_url('blog/5-ung-dung-hoc-tieng-anh-mien-phi'); ?>" style="color: var(--color-blue); font-weight: 600; text-decoration: none;">
                        Đọc Thêm <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Post 3 -->
            <div class="card" style="padding: 0; overflow: hidden;">
                <img src="https://via.placeholder.com/400x200/0D2396/FFFFFF?text=Blog" alt="Blog post" style="width: 100%; height: 200px; object-fit: cover;" ">
                <div style="padding: var(--spacing-md);">
                    <div style="display: flex; gap: 8px; margin-bottom: 12px;">
                        <span style="background: rgba(13,35,150,0.1); color: var(--color-blue); padding: 4px 12px; border-radius: 12px; font-size: 0.75rem; font-weight: 600;">Ngữ Pháp</span>
                    </div>
                    <h3 style="margin-bottom: 12px; font-size: 1.25rem;">
                        <a href="<?php echo get_url('blog/phan-biet-12-thi-tieng-anh'); ?>" style="color: var(--color-text); text-decoration: none;">
                            Phân Biệt 12 Thì Trong Tiếng Anh: Bí Quyết Dễ Nhớ
                        </a>
                    </h3>
                    <p class="text-muted" style="font-size: 0.875rem; margin-bottom: 12px;">
                        <i class="fas fa-calendar"></i> 08/01/2024 | 
                        <i class="fas fa-clock"></i> 10 phút
                    </p>
                    <p style="margin-bottom: 16px; font-size: 0.875rem;">
                        12 thì trong tiếng Anh gây khó khăn cho nhiều người. Bài viết giúp bạn phân biệt rõ ràng với công thức, ví dụ dễ hiểu...
                    </p>
                    <a href="<?php echo get_url('blog/phan-biet-12-thi-tieng-anh'); ?>" style="color: var(--color-blue); font-weight: 600; text-decoration: none;">
                        Đọc Thêm <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Post 4 -->
            <div class="card" style="padding: 0; overflow: hidden;">
                <img src="https://via.placeholder.com/400x200/F76010/FFFFFF?text=Blog" alt="Blog post" style="width: 100%; height: 200px; object-fit: cover;" ">
                <div style="padding: var(--spacing-md);">
                    <div style="display: flex; gap: 8px; margin-bottom: 12px;">
                        <span style="background: rgba(247,96,16,0.1); color: var(--color-orange); padding: 4px 12px; border-radius: 12px; font-size: 0.75rem; font-weight: 600;">Từ Vựng</span>
                    </div>
                    <h3 style="margin-bottom: 12px; font-size: 1.25rem;">
                        <a href="<?php echo get_url('blog/1000-tu-vung-thong-dung'); ?>" style="color: var(--color-text); text-decoration: none;">
                            1000 Từ Vựng Tiếng Anh Thông Dụng Nhất Cho Người Mới
                        </a>
                    </h3>
                    <p class="text-muted" style="font-size: 0.875rem; margin-bottom: 12px;">
                        <i class="fas fa-calendar"></i> 05/01/2024 | 
                        <i class="fas fa-clock"></i> 15 phút
                    </p>
                    <p style="margin-bottom: 16px; font-size: 0.875rem;">
                        Tổng hợp 1000 từ vựng tiếng Anh thông dụng nhất theo chủ đề, giúp bạn giao tiếp tự tin trong mọi tình huống hàng ngày...
                    </p>
                    <a href="<?php echo get_url('blog/1000-tu-vung-thong-dung'); ?>" style="color: var(--color-blue); font-weight: 600; text-decoration: none;">
                        Đọc Thêm <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Post 5 -->
            <div class="card" style="padding: 0; overflow: hidden;">
                <img src="https://via.placeholder.com/400x200/0D2396/FFFFFF?text=Blog" alt="Blog post" style="width: 100%; height: 200px; object-fit: cover;" ">
                <div style="padding: var(--spacing-md);">
                    <div style="display: flex; gap: 8px; margin-bottom: 12px;">
                        <span style="background: rgba(255,193,7,0.2); color: #F57C00; padding: 4px 12px; border-radius: 12px; font-size: 0.75rem; font-weight: 600;">Thành Công</span>
                    </div>
                    <h3 style="margin-bottom: 12px; font-size: 1.25rem;">
                        <a href="<?php echo get_url('blog/cau-chuyen-hoc-vien-dat-8-0-ielts'); ?>" style="color: var(--color-text); text-decoration: none;">
                            Câu Chuyện Từ 5.0 Lên 8.0 IELTS Trong 4 Tháng
                        </a>
                    </h3>
                    <p class="text-muted" style="font-size: 0.875rem; margin-bottom: 12px;">
                        <i class="fas fa-calendar"></i> 03/01/2024 | 
                        <i class="fas fa-clock"></i> 7 phút
                    </p>
                    <p style="margin-bottom: 16px; font-size: 0.875rem;">
                        Câu chuyện truyền cảm hứng của Lê Mai - học viên T&T đạt 8.0 IELTS sau 4 tháng học. Hành trình đầy nỗ lực và quyết tâm...
                    </p>
                    <a href="<?php echo get_url('blog/cau-chuyen-hoc-vien-dat-8-0-ielts'); ?>" style="color: var(--color-blue); font-weight: 600; text-decoration: none;">
                        Đọc Thêm <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Post 6 -->
            <div class="card" style="padding: 0; overflow: hidden;">
                <img src="https://via.placeholder.com/400x200/F76010/FFFFFF?text=Blog" alt="Blog post" style="width: 100%; height: 200px; object-fit: cover;" ">
                <div style="padding: var(--spacing-md);">
                    <div style="display: flex; gap: 8px; margin-bottom: 12px;">
                        <span style="background: rgba(13,35,150,0.1); color: var(--color-blue); padding: 4px 12px; border-radius: 12px; font-size: 0.75rem; font-weight: 600;">IELTS</span>
                    </div>
                    <h3 style="margin-bottom: 12px; font-size: 1.25rem;">
                        <a href="<?php echo get_url('blog/luyen-speaking-ielts-hieu-qua'); ?>" style="color: var(--color-text); text-decoration: none;">
                            Luyện IELTS Speaking Hiệu Quả: 7 Bước Đơn Giản
                        </a>
                    </h3>
                    <p class="text-muted" style="font-size: 0.875rem; margin-bottom: 12px;">
                        <i class="fas fa-calendar"></i> 01/01/2024 | 
                        <i class="fas fa-clock"></i> 9 phút
                    </p>
                    <p style="margin-bottom: 16px; font-size: 0.875rem;">
                        Speaking là kỹ năng gây lo lắng nhất cho thí sinh IELTS. Khám phá 7 bước luyện Speaking hiệu quả giúp bạn tự tin band 7.0+...
                    </p>
                    <a href="<?php echo get_url('blog/luyen-speaking-ielts-hieu-qua'); ?>" style="color: var(--color-blue); font-weight: 600; text-decoration: none;">
                        Đọc Thêm <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Pagination -->
        <div style="text-align: center; margin-top: 48px;">
            <div style="display: inline-flex; gap: 8px;">
                <button class="btn-primary" style="padding: 10px 16px; background: white; color: var(--color-blue);" disabled>
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="btn-primary" style="padding: 10px 16px;">1</button>
                <button class="btn-primary" style="padding: 10px 16px; background: white; color: var(--color-blue);">2</button>
                <button class="btn-primary" style="padding: 10px 16px; background: white; color: var(--color-blue);">3</button>
                <button class="btn-primary" style="padding: 10px 16px; background: white; color: var(--color-blue);">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Signup -->
<section class="section bg-grey">
    <div class="container">
        <div style="max-width: 600px; margin: 0 auto; text-align: center;">
            <div style="font-size: 3rem; color: var(--color-orange); margin-bottom: 20px;">
                <i class="fas fa-envelope-open-text"></i>
            </div>
            <h2 style="margin-bottom: 16px;">Nhận Bài Viết Mới Qua Email</h2>
            <p style="margin-bottom: 24px;">Đăng ký để nhận thông báo khi có bài viết mới về học tiếng Anh, IELTS và tips học tập hữu ích</p>
            <form style="display: flex; gap: 12px; max-width: 500px; margin: 0 auto;">
                <input type="email" placeholder="Nhập email của bạn" style="flex: 1; padding: 14px 20px; border: 1px solid var(--color-border); border-radius: var(--radius-md); font-size: 1rem;">
                <button type="submit" class="btn-primary" style="padding: 14px 28px;">
                    Đăng Ký
                </button>
            </form>
        </div>
    </div>
</section>

<!-- CTA Section -->
<?php include __DIR__ . '/../includes/cta-form.php'; ?>

<?php include __DIR__ . '/../includes/footer.php'; ?>
