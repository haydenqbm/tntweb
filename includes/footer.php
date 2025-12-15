<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3><?php echo SITE_NAME; ?></h3>
                <p><?php echo SITE_TAGLINE; ?></p>
                <p>Trung tâm Anh ngữ hàng đầu với phương pháp giảng dạy tiên tiến, giáo viên tận tâm và cam kết đầu ra rõ ràng.</p>
                <div class="footer-social">
                    <a href="<?php echo FACEBOOK_URL; ?>" target="_blank" rel="noopener" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="<?php echo YOUTUBE_URL; ?>" target="_blank" rel="noopener" aria-label="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="<?php echo ZALO_URL; ?>" target="_blank" rel="noopener" aria-label="Zalo">
                        <i class="fas fa-comment-dots"></i>
                    </a>
                </div>
            </div>
            
            <div class="footer-section">
                <h3>Liên kết nhanh</h3>
                <ul class="footer-links">
                    <li><a href="<?php echo get_url('gioi-thieu'); ?>">Giới thiệu</a></li>
                    <li><a href="<?php echo get_url('khoa-hoc'); ?>">Khóa học</a></li>
                    <li><a href="<?php echo get_url('khoa-hoc/4-ky-nang'); ?>">Khóa 4 kỹ năng</a></li>
                    <li><a href="<?php echo get_url('khoa-hoc/ielts'); ?>">Khóa IELTS</a></li>
                    <li><a href="<?php echo get_url('goc-ba-me'); ?>">Góc ba mẹ</a></li>
                    <li><a href="<?php echo get_url('blog'); ?>">Blog</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Thông tin liên hệ</h3>
                <p><i class="fas fa-map-marker-alt"></i> <?php echo CONTACT_ADDRESS; ?></p>
                <p><i class="fas fa-phone"></i> <a href="tel:<?php echo str_replace(' ', '', CONTACT_PHONE); ?>"><?php echo CONTACT_PHONE; ?></a></p>
                <p><i class="fas fa-envelope"></i> <a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a></p>
                <p><i class="fas fa-clock"></i> Thứ 2 - Chủ nhật: 8:00 - 21:00</p>
            </div>
            
            <div class="footer-section">
                <h3>Đăng ký nhận tin</h3>
                <p>Nhận thông tin về khóa học mới, tips học tiếng Anh và ưu đãi đặc biệt.</p>
                <form class="cta-form" style="margin-top: 16px;">
                    <input type="email" placeholder="Email của bạn" required>
                    <button type="submit">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. Tất cả quyền được bảo lưu.</p>
            <p style="margin-top: 8px; font-size: 0.8125rem;">
                <a href="#">Chính sách bảo mật</a> | 
                <a href="#">Điều khoản sử dụng</a>
            </p>
        </div>
    </div>
</footer>

<!-- Main JavaScript -->
<script src="<?php echo ASSETS_PATH; ?>/js/main.js"></script>
</body>
</html>
