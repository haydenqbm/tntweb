<?php
require_once __DIR__ . '/../config/config.php';

// Load meta data from JSON
$meta = json_decode(file_get_contents(__DIR__ . '/meta.json'), true);
$current_page = 'goc-ba-me';

include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/navbar.php';
?>

<!-- Page Header -->
<section class="hero hero-compact">
    <div class="container">
        <h1><?php echo htmlspecialchars($meta['hero_heading']); ?></h1>
        <p><?php echo htmlspecialchars($meta['hero_subheading']); ?></p>
    </div>
</section>

<!-- Main Sections -->
<section class="section">
    <div class="container">
        <div class="text-center mb-lg">
            <h2><?php echo htmlspecialchars($meta['additional_content']['sections_heading']); ?></h2>
        </div>
        
        <div class="grid-2">
            <!-- Achievements Section -->
            <div class="card" style="padding: 0; overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div style="background: linear-gradient(135deg, #0D2396 0%, #1a3bb8 100%); padding: 60px 40px; text-align: center; color: white;">
                    <div style="font-size: 4rem; margin-bottom: 20px;">🏆</div>
                    <h2 style="color: white; margin-bottom: 16px;">Thành Tích Học Viên</h2>
                    <p style="color: rgba(255,255,255,0.9); margin-bottom: 30px;">
                        Tự hào với những kết quả IELTS ấn tượng, học bổng du học và hành trình chinh phục tiếng Anh thành công của các em
                    </p>
                </div>
                <div style="padding: var(--spacing-lg);">
                    <div style="margin-bottom: 24px;">
                        <h4 style="margin-bottom: 12px; color: var(--color-blue);">Điểm Nổi Bật:</h4>
                        <ul style="list-style: none; padding: 0;">
                            <li style="padding: 8px 0; display: flex; align-items: center;">
                                <i class="fas fa-trophy" style="color: var(--color-orange); margin-right: 12px;"></i>
                                <span>500+ học viên đạt 7.0+ IELTS</span>
                            </li>
                            <li style="padding: 8px 0; display: flex; align-items: center;">
                                <i class="fas fa-graduation-cap" style="color: var(--color-orange); margin-right: 12px;"></i>
                                <span>200+ học viên nhận học bổng du học</span>
                            </li>
                            <li style="padding: 8px 0; display: flex; align-items: center;">
                                <i class="fas fa-star" style="color: var(--color-orange); margin-right: 12px;"></i>
                                <span>50+ học viên đạt 8.0+ IELTS</span>
                            </li>
                            <li style="padding: 8px 0; display: flex; align-items: center;">
                                <i class="fas fa-chart-line" style="color: var(--color-orange); margin-right: 12px;"></i>
                                <span>95% tỷ lệ đạt target cam kết</span>
                            </li>
                        </ul>
                    </div>
                    <a href="<?php echo get_url('goc-ba-me/thanh-tich-hoc-vien'); ?>" class="btn-primary" style="width: 100%; text-align: center; display: block;">
                        Xem Bảng Vàng Thành Tích <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Testimonials Section -->
            <div class="card" style="padding: 0; overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div style="background: linear-gradient(135deg, #F76010 0%, #fe8830 100%); padding: 60px 40px; text-align: center; color: white;">
                    <div style="font-size: 4rem; margin-bottom: 20px;">💬</div>
                    <h2 style="color: white; margin-bottom: 16px;">Phản Hồi Của Phụ Huynh</h2>
                    <p style="color: rgba(255,255,255,0.95); margin-bottom: 30px;">
                        Đọc những chia sẻ chân thật từ phụ huynh về chất lượng giảng dạy, sự tiến bộ của con em và môi trường học tập
                    </p>
                </div>
                <div style="padding: var(--spacing-lg);">
                    <div style="margin-bottom: 24px;">
                        <h4 style="margin-bottom: 12px; color: var(--color-orange);">Điểm Nổi Bật:</h4>
                        <ul style="list-style: none; padding: 0;">
                            <li style="padding: 8px 0; display: flex; align-items: center;">
                                <i class="fas fa-star" style="color: var(--color-orange); margin-right: 12px;"></i>
                                <span>4.9/5 điểm đánh giá trung bình</span>
                            </li>
                            <li style="padding: 8px 0; display: flex; align-items: center;">
                                <i class="fas fa-heart" style="color: var(--color-orange); margin-right: 12px;"></i>
                                <span>98% phụ huynh hài lòng</span>
                            </li>
                            <li style="padding: 8px 0; display: flex; align-items: center;">
                                <i class="fas fa-comments" style="color: var(--color-orange); margin-right: 12px;"></i>
                                <span>2,500+ đánh giá tích cực</span>
                            </li>
                            <li style="padding: 8px 0; display: flex; align-items: center;">
                                <i class="fas fa-users" style="color: var(--color-orange); margin-right: 12px;"></i>
                                <span>85% học viên từ giới thiệu</span>
                            </li>
                        </ul>
                    </div>
                    <a href="<?php echo get_url('goc-ba-me/phan-hoi'); ?>" class="btn-primary" style="width: 100%; text-align: center; display: block; background: var(--color-orange);">
                        Đọc Phản Hồi Từ Phụ Huynh <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Trust Us Section -->
<section class="section bg-grey">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Tại Sao Phụ Huynh Tin Tưởng T&T?</h2>
            <p class="text-muted">Những giá trị cốt lõi tạo nên sự khác biệt</p>
        </div>
        
        <div class="grid-3">
            <div class="card text-center">
                <div style="font-size: 3rem; color: var(--color-orange); margin-bottom: 16px;">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h3>Giáo Viên Chất Lượng</h3>
                <p>Đội ngũ giáo viên giàu kinh nghiệm, tận tâm, được đào tạo bài bản và thường xuyên cập nhật phương pháp giảng dạy mới</p>
            </div>
            
            <div class="card text-center">
                <div style="font-size: 3rem; color: var(--color-orange); margin-bottom: 16px;">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Theo Dõi Tiến Độ</h3>
                <p>Báo cáo chi tiết hàng tháng, test định kỳ và trao đổi thường xuyên với phụ huynh về sự tiến bộ của học viên</p>
            </div>
            
            <div class="card text-center">
                <div style="font-size: 3rem; color: var(--color-orange); margin-bottom: 16px;">
                    <i class="fas fa-certificate"></i>
                </div>
                <h3>Cam Kết Đầu Ra</h3>
                <p>Cam kết rõ ràng về kết quả học tập, học lại miễn phí nếu không đạt mục tiêu đã cam kết</p>
            </div>
            
            <div class="card text-center">
                <div style="font-size: 3rem; color: var(--color-blue); margin-bottom: 16px;">
                    <i class="fas fa-school"></i>
                </div>
                <h3>Cơ Sở Hiện Đại</h3>
                <p>Phòng học tiện nghi, trang thiết bị hiện đại, tạo môi trường học tập thoải mái và hiệu quả cho học viên</p>
            </div>
            
            <div class="card text-center">
                <div style="font-size: 3rem; color: var(--color-blue); margin-bottom: 16px;">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Lớp Học Nhỏ</h3>
                <p>Tối đa 12 học viên/lớp để giáo viên có thể chăm sóc và theo dõi sát sao sự phát triển của từng em</p>
            </div>
            
            <div class="card text-center">
                <div style="font-size: 3rem; color: var(--color-blue); margin-bottom: 16px;">
                    <i class="fas fa-headset"></i>
                </div>
                <h3>Hỗ Trợ Tận Tình</h3>
                <p>Đội ngũ tư vấn và chăm sóc học viên luôn sẵn sàng hỗ trợ, giải đáp thắc mắc của phụ huynh 24/7</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div class="card" style="background: linear-gradient(135deg, #0D2396 0%, #1a3bb8 100%); color: white; text-align: center; padding: 60px 40px;">
            <h2 style="color: white; margin-bottom: 20px;">Đăng Ký Học Thử Miễn Phí</h2>
            <p style="color: rgba(255,255,255,0.9); font-size: 1.125rem; max-width: 600px; margin: 0 auto 30px;">
                Để con trải nghiệm phương pháp học hiện đại và môi trường học tập chuyên nghiệp tại T&T Education
            </p>
            <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo get_url('lien-he'); ?>" class="btn-primary" style="background: var(--color-orange);">
                    <i class="fas fa-calendar-check"></i> Đăng Ký Ngay
                </a>
                <a href="tel:<?php echo CONTACT_PHONE; ?>" class="btn-primary" style="background: white; color: var(--color-blue);">
                    <i class="fas fa-phone"></i> <?php echo CONTACT_PHONE; ?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
