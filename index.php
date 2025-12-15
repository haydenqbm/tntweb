<?php
require_once __DIR__ . '/config/config.php';

// Load meta data from JSON
$meta = json_decode(file_get_contents(__DIR__ . '/meta.json'), true);
$current_page = 'home';

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
?>

<!-- Hero Carousel Section -->
<section class="hero-carousel" id="heroCarousel">
    <div class="carousel-slide active">
        <div class="container">
            <a href="<?php echo get_url('lien-he'); ?>" class="btn btn-outline">
                <i class="fas fa-paper-plane"></i> Đăng ký tư vấn
            </a>
        </div>
    </div>
    
    <div class="carousel-slide">
        <div class="container">
            <a href="<?php echo get_url('lien-he'); ?>" class="btn btn-outline">
                <i class="fas fa-paper-plane"></i> Đăng ký tư vấn
            </a>
        </div>
    </div>
    
    <div class="carousel-slide">
        <div class="container">
            <a href="<?php echo get_url('lien-he'); ?>" class="btn btn-outline">
                <i class="fas fa-paper-plane"></i> Đăng ký tư vấn
            </a>
        </div>
    </div>
    
    <div class="carousel-controls">
        <button class="carousel-dot active" data-slide="0" aria-label="Slide 1"></button>
        <button class="carousel-dot" data-slide="1" aria-label="Slide 2"></button>
        <button class="carousel-dot" data-slide="2" aria-label="Slide 3"></button>
    </div>
</section>

<!-- Course Highlights Section -->
<section class="section">
    <div class="container">
        <div class="text-center mb-lg">
            <h2><?php echo htmlspecialchars($meta['additional_content']['courses_section_heading']); ?></h2>
            <p class="text-muted"><?php echo htmlspecialchars($meta['additional_content']['courses_section_subheading']); ?></p>
        </div>
        
        <div class="grid-2">
            <div class="course-card">
                <div class="course-card-image course-card-icon-orange">
                    <i class="fas fa-comments"></i>
                </div>
                <div class="course-card-body">
                    <h3 class="course-card-title">Khóa Học 4 Kỹ Năng</h3>
                    <div class="course-card-meta">
                        <span class="meta-badge"><i class="fas fa-clock"></i> 6-12 tháng</span>
                        <span class="meta-badge"><i class="fas fa-users"></i> 8-12 học viên/lớp</span>
                        <span class="meta-badge"><i class="fas fa-star"></i> Mọi cấp độ</span>
                    </div>
                    <p class="card-text">Phát triển toàn diện 4 kỹ năng Nghe - Nói - Đọc - Viết. Lộ trình học tập cá nhân hóa, giáo trình Cambridge chuẩn quốc tế, giáo viên tận tâm theo sát từng học viên.</p>
                    <ul class="course-features">
                        <li>✓ Nền tảng ngữ pháp vững chắc</li>
                        <li>✓ Giao tiếp tự tin trong thực tế</li>
                        <li>✓ Từ vựng phong phú theo chủ đề</li>
                        <li>✓ Luyện phát âm chuẩn bản ngữ</li>
                    </ul>
                    <a href="<?php echo get_url('khoa-hoc/4-ky-nang'); ?>" class="btn btn-primary btn-block">
                        <i class="fas fa-arrow-right"></i> Tìm hiểu thêm
                    </a>
                </div>
            </div>
            
            <div class="course-card">
                <div class="course-card-image course-card-icon-blue">
                    <i class="fas fa-trophy"></i>
                </div>
                <div class="course-card-body">
                    <h3 class="course-card-title">Khóa Luyện Thi IELTS</h3>
                    <div class="course-card-meta">
                        <span class="meta-badge"><i class="fas fa-clock"></i> 3-6 tháng</span>
                        <span class="meta-badge"><i class="fas fa-users"></i> 6-10 học viên/lớp</span>
                        <span class="meta-badge"><i class="fas fa-chart-line"></i> Band 5.0 - 8.0</span>
                    </div>
                    <p class="card-text">Luyện thi IELTS hiệu quả với đội ngũ giáo viên 8.0+ IELTS. Phương pháp giảng dạy tập trung vào kỹ thuật làm bài, chiến lược thi cử và luyện đề thực chiến.</p>
                    <ul class="course-features">
                        <li>✓ Giáo viên 8.0+ IELTS giàu kinh nghiệm</li>
                        <li>✓ Lộ trình cá nhân hóa theo mục tiêu</li>
                        <li>✓ Luyện đề thực chiến hàng tuần</li>
                        <li>✓ Cam kết đầu ra hoặc học lại miễn phí</li>
                    </ul>
                    <a href="<?php echo get_url('khoa-hoc/ielts'); ?>" class="btn btn-secondary btn-block">
                        <i class="fas fa-arrow-right"></i> Tìm hiểu thêm
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="section bg-grey">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Tại Sao Chọn T&T Education?</h2>
            <p class="text-muted">Những giá trị cốt lõi giúp T&T trở thành lựa chọn hàng đầu của phụ huynh</p>
        </div>
        
        <div class="grid-3">
            <div class="card text-center">
                <div class="icon-large">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h3>Giáo Viên Chất Lượng</h3>
                <p>Đội ngũ giáo viên giàu kinh nghiệm, được đào tạo bài bản, tận tâm với nghề và yêu thương học trò</p>
            </div>
            
            <div class="card text-center">
                <div class="icon-large">
                    <i class="fas fa-book-reader"></i>
                </div>
                <h3>Phương Pháp Hiện Đại</h3>
                <p>Ứng dụng công nghệ giáo dục, học tập tương tác cao, phát triển tư duy sáng tạo và độc lập</p>
            </div>
            
            <div class="card text-center">
                <div class="icon-large">
                    <i class="fas fa-certificate"></i>
                </div>
                <h3>Cam Kết Đầu Ra</h3>
                <p>Cam kết rõ ràng về kết quả học tập, chính sách học lại miễn phí nếu không đạt mục tiêu</p>
            </div>
            
            <div class="card text-center">
                <div class="icon-large">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Lớp Học Nhỏ</h3>
                <p>Sĩ số tối đa 12 học viên, đảm bảo giáo viên chăm sóc kỹ lưỡng từng em</p>
            </div>
            
            <div class="card text-center">
                <div class="icon-large">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Theo Dõi Tiến Độ</h3>
                <p>Báo cáo học tập chi tiết, phụ huynh nắm rõ sự tiến bộ của con qua từng giai đoạn</p>
            </div>
            
            <div class="card text-center">
                <div class="icon-large">
                    <i class="fas fa-map-marked-alt"></i>
                </div>
                <h3>Cơ Sở Thuận Tiện</h3>
                <p>Hệ thống cơ sở rộng khắp, phòng học hiện đại, trang thiết bị đầy đủ</p>
            </div>
        </div>
    </div>
</section>

<!-- Teacher Section -->
<section class="section">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Đội Ngũ Giáo Viên</h2>
            <p class="text-muted">Những người đồng hành, truyền cảm hứng và dẫn lối cho học viên</p>
        </div>
        
        <div class="teacher-slider">
            <div class="teacher-card">
                <img src="https://via.placeholder.com/120/0D2396/FFFFFF?text=GV" alt="Giáo viên" class="teacher-avatar">
                <h4 class="teacher-name">Ms. Nguyễn Hương</h4>
                <p class="teacher-title">Giáo viên IELTS - 8.5 IELTS</p>
                <p class="card-text">10 năm kinh nghiệm giảng dạy IELTS, từng học và làm việc tại Anh. Chuyên gia luyện Writing và Speaking.</p>
            </div>
            
            <div class="teacher-card">
                <img src="https://via.placeholder.com/120/F76010/FFFFFF?text=GV" alt="Giáo viên" class="teacher-avatar">
                <h4 class="teacher-name">Mr. Trần Minh</h4>
                <p class="teacher-title">Giáo viên 4 Kỹ Năng - TESOL</p>
                <p class="card-text">8 năm kinh nghiệm với học viên thiếu nhi và thanh thiếu niên. Chứng chỉ TESOL, phương pháp giảng dạy sinh động.</p>
            </div>
            
            <div class="teacher-card">
                <img src="https://via.placeholder.com/120/0D2396/FFFFFF?text=GV" alt="Giáo viên" class="teacher-avatar">
                <h4 class="teacher-name">Ms. Lê Thảo</h4>
                <p class="teacher-title">Giáo viên IELTS - 8.0 IELTS</p>
                <p class="card-text">Chuyên môn Reading và Listening. Phương pháp giảng dạy logic, dễ hiểu, giúp học viên nắm vững kỹ thuật làm bài.</p>
            </div>
            
            <div class="teacher-card">
                <img src="https://via.placeholder.com/120/F76010/FFFFFF?text=GV" alt="Giáo viên" class="teacher-avatar">
                <h4 class="teacher-name">Mr. Phạm Tuấn</h4>
                <p class="teacher-title">Giáo viên Giao Tiếp - BA Linguistics</p>
                <p class="card-text">Chuyên về giao tiếp thực tế và phát âm. Lớp học năng động, tạo môi trường thực hành tối đa cho học viên.</p>
            </div>
            
            <div class="teacher-card">
                <img src="https://via.placeholder.com/120/0D2396/FFFFFF?text=GV" alt="Giáo viên" class="teacher-avatar">
                <h4 class="teacher-name">Ms. Hoàng Anh</h4>
                <p class="teacher-title">Giáo viên Thiếu Nhi - CELTA</p>
                <p class="card-text">5 năm kinh nghiệm với học viên 6-12 tuổi. Phương pháp giảng dạy qua trò chơi, kích thích hứng thú học tập.</p>
            </div>
        </div>
        
        <div class="text-center mt-lg">
            <a href="<?php echo get_url('gioi-thieu'); ?>" class="btn btn-outline">
                <i class="fas fa-users"></i> Xem tất cả giáo viên
            </a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section bg-grey">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Phụ Huynh & Học Viên Nói Gì?</h2>
            <p class="text-muted">Những phản hồi chân thực từ cộng đồng T&T Education</p>
        </div>
        
        <div class="testimonial-slider">
            <div class="testimonial-card">
                <p class="testimonial-quote">"Con mình học tại T&T được 6 tháng, tiến bộ rất rõ rệt. Từ chỗ ngại giao tiếp giờ con tự tin nói chuyện với người nước ngoài. Cô giáo nhiệt tình, tận tâm lắm!"</p>
                <div class="testimonial-author">
                    <img src="https://via.placeholder.com/50/F76010/FFFFFF?text=PH" alt="Phụ huynh" class="testimonial-avatar">
                    <div class="testimonial-info">
                        <h4>Chị Nguyễn Lan</h4>
                        <p>Phụ huynh học viên Minh An - Lớp 7</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <p class="testimonial-quote">"Khóa IELTS của T&T rất chất lượng. Thầy cô dạy kỹ thuật làm bài rất hay, em từ 5.5 lên 7.0 chỉ sau 4 tháng. Rất recommend cho các bạn!"</p>
                <div class="testimonial-author">
                    <img src="https://via.placeholder.com/50/0D2396/FFFFFF?text=HV" alt="Học viên" class="testimonial-avatar">
                    <div class="testimonial-info">
                        <h4>Hoàng Minh</h4>
                        <p>Học viên IELTS - Đạt 7.0 Overall</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <p class="testimonial-quote">"Môi trường học tập tại T&T rất tốt, cơ sở vật chất hiện đại. Đặc biệt là thái độ của giáo viên, luôn nhiệt tình giải đáp thắc mắc của học viên."</p>
                <div class="testimonial-author">
                    <img src="https://via.placeholder.com/50/F76010/FFFFFF?text=PH" alt="Phụ huynh" class="testimonial-avatar">
                    <div class="testimonial-info">
                        <h4>Anh Trần Hùng</h4>
                        <p>Phụ huynh học viên Bảo Ngọc - Lớp 9</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <p class="testimonial-quote">"Lớp học nhỏ nên cô có thể chú ý đến từng em. Con mình được cô động viên và giúp đỡ rất nhiều. Giờ con rất thích học tiếng Anh và tự học thêm ở nhà."</p>
                <div class="testimonial-author">
                    <img src="https://via.placeholder.com/50/F76010/FFFFFF?text=PH" alt="Phụ huynh" class="testimonial-avatar">
                    <div class="testimonial-info">
                        <h4>Chị Lê Mai</h4>
                        <p>Phụ huynh học viên Khánh Linh - Lớp 5</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-lg">
            <a href="<?php echo get_url('goc-ba-me/phan-hoi'); ?>" class="btn btn-outline">
                <i class="fas fa-comments"></i> Xem thêm phản hồi
            </a>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="section">
    <div class="container">
        <div class="grid-4 text-center">
            <div>
                <div class="stat-number">
                    10+
                </div>
                <h4>Năm Kinh Nghiệm</h4>
                <p class="text-muted">Đào tạo và phát triển</p>
            </div>
            
            <div>
                <div class="stat-number">
                    5000+
                </div>
                <h4>Học Viên</h4>
                <p class="text-muted">Đã tin tưởng lựa chọn</p>
            </div>
            
            <div>
                <div class="stat-number">
                    50+
                </div>
                <h4>Giáo Viên</h4>
                <p class="text-muted">Tận tâm và chuyên nghiệp</p>
            </div>
            
            <div>
                <div class="stat-number">
                    95%
                </div>
                <h4>Hài Lòng</h4>
                <p class="text-muted">Phụ huynh đánh giá cao</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<?php include __DIR__ . '/includes/cta-form.php'; ?>

<!-- Blog Preview Section -->
<section class="section">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Bài Viết Mới Nhất</h2>
            <p class="text-muted">Tips học tiếng Anh, kinh nghiệm thi cử và kiến thức bổ ích</p>
        </div>
        
        <div class="grid-3">
            <div class="card">
                <img src="https://via.placeholder.com/400x250/F76010/FFFFFF?text=Blog+Post" alt="Blog post">
                <div class="card-body">
                    <span class="meta-badge mb-sm">
                        <i class="fas fa-calendar"></i> 15/11/2025
                    </span>
                    <h3 class="blog-title">
                        <a href="<?php echo get_url('blog/10-meo-hoc-tieng-anh-hieu-qua'); ?>">
                            10 Mẹo Học Tiếng Anh Hiệu Quả Cho Học Sinh
                        </a>
                    </h3>
                    <p class="text-muted">Khám phá những phương pháp học tiếng Anh được chứng minh hiệu quả, giúp bạn tiến bộ nhanh chóng...</p>
                    <a href="<?php echo get_url('blog/10-meo-hoc-tieng-anh-hieu-qua'); ?>" class="link-orange">
                        Đọc thêm <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <div class="card">
                <img src="https://via.placeholder.com/400x250/0D2396/FFFFFF?text=Blog+Post" alt="Blog post">
                <div class="card-body">
                    <span class="meta-badge mb-sm">
                        <i class="fas fa-calendar"></i> 10/11/2025
                    </span>
                    <h3 class="blog-title">
                        <a href="<?php echo get_url('blog/chien-luoc-luyen-thi-ielts'); ?>">
                            Chiến Lược Luyện Thi IELTS Đạt 7.0+
                        </a>
                    </h3>
                    <p class="text-muted">Hướng dẫn chi tiết cách luyện thi IELTS hiệu quả, từ cơ bản đến nâng cao, giúp bạn đạt mục tiêu...</p>
                    <a href="<?php echo get_url('blog/chien-luoc-luyen-thi-ielts'); ?>" class="link-orange">
                        Đọc thêm <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <div class="card">
                <img src="https://via.placeholder.com/400x250/F76010/FFFFFF?text=Blog+Post" alt="Blog post">
                <div class="card-body">
                    <span class="meta-badge mb-sm">
                        <i class="fas fa-calendar"></i> 05/11/2025
                    </span>
                    <h3 class="blog-title">
                        <a href="<?php echo get_url('blog/phuong-phap-hoc-tu-vung'); ?>">
                            Phương Pháp Học Từ Vựng Không Bao Giờ Quên
                        </a>
                    </h3>
                    <p class="text-muted">Những kỹ thuật ghi nhớ từ vựng hiệu quả, giúp bạn mở rộng vốn từ và sử dụng linh hoạt...</p>
                    <a href="<?php echo get_url('blog/phuong-phap-hoc-tu-vung'); ?>" class="link-orange">
                        Đọc thêm <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-lg">
            <a href="<?php echo get_url('blog'); ?>" class="btn btn-outline">
                <i class="fas fa-newspaper"></i> Xem tất cả bài viết
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
