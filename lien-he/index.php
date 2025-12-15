<?php
require_once __DIR__ . '/../config/config.php';

// Load meta data from JSON
$meta = json_decode(file_get_contents(__DIR__ . '/meta.json'), true);
$current_page = 'lien-he';

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

<!-- Contact Section -->
<section class="section">
    <div class="container">
        <div class="grid-2">
            <!-- Contact Form -->
            <div>
                <div class="card">
                    <h2 style="margin-bottom: 24px;">Gửi Tin Nhắn</h2>
                    <form id="contactForm" method="POST" action="<?php echo get_url('process-contact.php'); ?>">
                        <div class="form-group">
                            <label for="fullname">Họ và tên <span style="color: var(--color-orange);">*</span></label>
                            <input type="text" id="fullname" name="fullname" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Số điện thoại <span style="color: var(--color-orange);">*</span></label>
                            <input type="tel" id="phone" name="phone" pattern="[0-9]{10,11}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email <span style="color: var(--color-orange);">*</span></label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="course_interest">Khóa học quan tâm</label>
                            <select id="course_interest" name="course_interest">
                                <option value="">-- Chọn khóa học --</option>
                                <option value="4-ky-nang">Tiếng Anh 4 Kỹ Năng</option>
                                <option value="ielts">Luyện Thi IELTS</option>
                                <option value="giao-tiep">Giao Tiếp Thực Tế</option>
                                <option value="thieu-nhi">Tiếng Anh Thiếu Nhi</option>
                                <option value="khac">Khác</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Nội dung <span style="color: var(--color-orange);">*</span></label>
                            <textarea id="message" name="message" rows="6" required placeholder="Vui lòng cho biết thêm về nhu cầu học tập của bạn..."></textarea>
                        </div>
                        
                        <button type="submit" class="btn-primary" style="width: 100%;">
                            <i class="fas fa-paper-plane"></i> Gửi Tin Nhắn
                        </button>
                        
                        <p style="font-size: 0.875rem; color: var(--color-text-muted); margin-top: 16px; text-align: center;">
                            Chúng tôi cam kết bảo mật thông tin của bạn
                        </p>
                    </form>
                </div>
            </div>
            
            <!-- Contact Info -->
            <div>
                <div class="card" style="margin-bottom: 24px;">
                    <h3 style="margin-bottom: 24px; color: var(--color-blue);">
                        <i class="fas fa-info-circle"></i> Thông Tin Liên Hệ
                    </h3>
                    
                    <div style="margin-bottom: 24px;">
                        <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                            <div style="font-size: 1.75rem; color: var(--color-orange); margin-right: 16px; margin-top: 4px;">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 style="margin: 0 0 8px 0;">Địa chỉ</h4>
                                <p style="margin: 0;"><?php echo ADDRESS; ?></p>
                            </div>
                        </div>
                        
                        <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                            <div style="font-size: 1.75rem; color: var(--color-orange); margin-right: 16px; margin-top: 4px;">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <h4 style="margin: 0 0 8px 0;">Hotline</h4>
                                <p style="margin: 0;">
                                    <a href="tel:<?php echo PHONE; ?>" style="color: var(--color-blue); font-weight: 600; font-size: 1.125rem; text-decoration: none;">
                                        <?php echo PHONE; ?>
                                    </a>
                                </p>
                                <p style="margin: 4px 0 0; font-size: 0.875rem; color: var(--color-text-muted);">Hotline tư vấn (8:00 - 21:00)</p>
                            </div>
                        </div>
                        
                        <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
                            <div style="font-size: 1.75rem; color: var(--color-orange); margin-right: 16px; margin-top: 4px;">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4 style="margin: 0 0 8px 0;">Email</h4>
                                <p style="margin: 0;">
                                    <a href="mailto:<?php echo EMAIL; ?>" style="color: var(--color-blue); text-decoration: none;">
                                        <?php echo EMAIL; ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                        
                        <div style="display: flex; align-items: flex-start;">
                            <div style="font-size: 1.75rem; color: var(--color-orange); margin-right: 16px; margin-top: 4px;">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h4 style="margin: 0 0 8px 0;">Giờ làm việc</h4>
                                <p style="margin: 0;">Thứ 2 - Chủ Nhật: 8:00 - 21:00</p>
                            </div>
                        </div>
                    </div>
                    
                    <div style="border-top: 1px solid var(--color-border); padding-top: 24px;">
                        <h4 style="margin-bottom: 16px;">Kết Nối Với Chúng Tôi</h4>
                        <div style="display: flex; gap: 12px;">
                            <a href="<?php echo FACEBOOK_URL; ?>" target="_blank" rel="noopener" style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; background: #1877F2; color: white; border-radius: 50%; font-size: 1.25rem; text-decoration: none; transition: transform 0.3s;">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="<?php echo YOUTUBE_URL; ?>" target="_blank" rel="noopener" style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; background: #FF0000; color: white; border-radius: 50%; font-size: 1.25rem; text-decoration: none; transition: transform 0.3s;">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="<?php echo INSTAGRAM_URL; ?>" target="_blank" rel="noopener" style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; background: linear-gradient(45deg, #F58529, #DD2A7B, #8134AF); color: white; border-radius: 50%; font-size: 1.25rem; text-decoration: none; transition: transform 0.3s;">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="<?php echo ZALO_URL; ?>" target="_blank" rel="noopener" style="display: inline-flex; align-items: center; justify-content: center; width: 44px; height: 44px; background: #0068FF; color: white; border-radius: 50%; font-size: 1.25rem; text-decoration: none; transition: transform 0.3s;">
                                <i class="fas fa-comment-dots"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Quick FAQ -->
                <div class="card">
                    <h3 style="margin-bottom: 16px; color: var(--color-blue);">
                        <i class="fas fa-question-circle"></i> Câu Hỏi Nhanh
                    </h3>
                    <div style="font-size: 0.875rem;">
                        <p style="margin-bottom: 12px;"><strong>Có được học thử không?</strong><br>Có, bạn được học thử 1 buổi miễn phí.</p>
                        <p style="margin-bottom: 12px;"><strong>Kiểm tra đầu vào có mất phí không?</strong><br>Hoàn toàn miễn phí.</p>
                        <p style="margin-bottom: 0;"><strong>Có hỗ trợ trả góp không?</strong><br>Có, hỗ trợ trả góp 0% lãi suất.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="section bg-grey">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Địa Điểm Trung Tâm</h2>
            <p class="text-muted">Ghé thăm chúng tôi để trải nghiệm môi trường học tập hiện đại</p>
        </div>
        
        <div style="border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg);">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.325519763435!2d106.66373631533416!3d10.786834992313406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ed23c8f79e9%3A0xf15a5e0a30895966!2sUniversity%20of%20Foreign%20Languages%20and%20Information%20Technology!5e0!3m2!1sen!2s!4v1234567890123!5m2!1sen!2s" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        
        <div style="text-align: center; margin-top: 24px;">
            <a href="https://maps.google.com/?q=<?php echo urlencode(ADDRESS); ?>" target="_blank" rel="noopener" class="btn-primary">
                <i class="fas fa-directions"></i> Xem Chỉ Đường
            </a>
        </div>
    </div>
</section>

<!-- Branches (if have multiple locations) -->
<section class="section">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Hệ Thống Trung Tâm</h2>
        </div>
        
        <div class="grid-3">
            <div class="card">
                <h4 style="color: var(--color-orange); margin-bottom: 12px;">
                    <i class="fas fa-map-pin"></i> Cơ Sở 1 - Trung Tâm
                </h4>
                <p style="margin-bottom: 8px;"><strong>Địa chỉ:</strong> <?php echo ADDRESS; ?></p>
                <p style="margin-bottom: 8px;"><strong>Hotline:</strong> <a href="tel:<?php echo PHONE; ?>" style="color: var(--color-blue); text-decoration: none;"><?php echo PHONE; ?></a></p>
                <p><strong>Giờ làm việc:</strong> 8:00 - 21:00</p>
            </div>
            
            <div class="card">
                <h4 style="color: var(--color-orange); margin-bottom: 12px;">
                    <i class="fas fa-map-pin"></i> Cơ Sở 2 - Quận 7
                </h4>
                <p style="margin-bottom: 8px;"><strong>Địa chỉ:</strong> 123 Nguyễn Văn Linh, Q.7, TP.HCM</p>
                <p style="margin-bottom: 8px;"><strong>Hotline:</strong> <a href="tel:0901234568" style="color: var(--color-blue); text-decoration: none;">090 123 4568</a></p>
                <p><strong>Giờ làm việc:</strong> 8:00 - 21:00</p>
            </div>
            
            <div class="card">
                <h4 style="color: var(--color-orange); margin-bottom: 12px;">
                    <i class="fas fa-map-pin"></i> Cơ Sở 3 - Thủ Đức
                </h4>
                <p style="margin-bottom: 8px;"><strong>Địa chỉ:</strong> 456 Võ Văn Ngân, Thủ Đức, TP.HCM</p>
                <p style="margin-bottom: 8px;"><strong>Hotline:</strong> <a href="tel:0901234569" style="color: var(--color-blue); text-decoration: none;">090 123 4569</a></p>
                <p><strong>Giờ làm việc:</strong> 8:00 - 21:00</p>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
