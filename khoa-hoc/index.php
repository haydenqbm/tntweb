<?php
require_once __DIR__ . '/../config/config.php';

// Load meta data from JSON
$meta = json_decode(file_get_contents(__DIR__ . '/meta.json'), true);
$current_page = 'khoa-hoc';

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

<!-- Main Courses -->
<section class="section">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Chương Trình Đào Tạo</h2>
            <p class="text-muted">Lộ trình học tập khoa học, phù hợp với mọi trình độ</p>
        </div>
        
        <div class="grid-2">
            <!-- Course 1: 4 Skills -->
            <div class="course-card">
                <div class="course-image">
                    <img src="https://via.placeholder.com/400x250/0D2396/FFFFFF?text=4+Ky+Nang" alt="Khóa học 4 kỹ năng" ">
                    <div class="course-badge">Phổ Biến</div>
                </div>
                <div class="course-content">
                    <h3 class="course-title">Tiếng Anh 4 Kỹ Năng</h3>
                    <p class="course-description">
                        Phát triển đồng đều Nghe - Nói - Đọc - Viết, từ cơ bản đến nâng cao. Phù hợp cho học viên muốn xây dựng nền tảng vững chắc hoặc nâng cao khả năng giao tiếp.
                    </p>
                    
                    <div style="margin: 20px 0;">
                        <h4 style="margin-bottom: 12px; font-size: 1rem;">Điểm Nổi Bật:</h4>
                        <ul style="list-style: none; padding: 0;">
                            <li style="padding: 6px 0; display: flex; align-items: flex-start;">
                                <i class="fas fa-check" style="color: var(--color-orange); margin-right: 10px; margin-top: 4px;"></i>
                                <span>Phát triển cân bằng 4 kỹ năng Nghe - Nói - Đọc - Viết</span>
                            </li>
                            <li style="padding: 6px 0; display: flex; align-items: flex-start;">
                                <i class="fas fa-check" style="color: var(--color-orange); margin-right: 10px; margin-top: 4px;"></i>
                                <span>Lộ trình học từ A1 đến C1 theo chuẩn CEFR</span>
                            </li>
                            <li style="padding: 6px 0; display: flex; align-items: flex-start;">
                                <i class="fas fa-check" style="color: var(--color-orange); margin-right: 10px; margin-top: 4px;"></i>
                                <span>Lớp học nhỏ 8-12 học viên, tương tác tối đa</span>
                            </li>
                            <li style="padding: 6px 0; display: flex; align-items: flex-start;">
                                <i class="fas fa-check" style="color: var(--color-orange); margin-right: 10px; margin-top: 4px;"></i>
                                <span>Giáo trình Cambridge/Oxford kết hợp tài liệu bổ trợ</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="course-meta">
                        <span class="meta-item"><i class="fas fa-clock"></i> 3 buổi/tuần</span>
                        <span class="meta-item"><i class="fas fa-calendar"></i> 3-6 tháng/cấp độ</span>
                        <span class="meta-item"><i class="fas fa-users"></i> 8-12 học viên</span>
                    </div>
                    
                    <a href="<?php echo get_url('khoa-hoc/4-ky-nang'); ?>" class="btn-primary" style="width: 100%; margin-top: 20px;">
                        Xem Chi Tiết <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Course 2: IELTS -->
            <div class="course-card">
                <div class="course-image">
                    <img src="https://via.placeholder.com/400x250/F76010/FFFFFF?text=IELTS" alt="Khóa học IELTS" ">
                    <div class="course-badge" style="background: var(--color-blue);">Cam Kết Đầu Ra</div>
                </div>
                <div class="course-content">
                    <h3 class="course-title">Luyện Thi IELTS</h3>
                    <p class="course-description">
                        Chương trình chuyên sâu, tập trung 4 kỹ năng thi IELTS. Cam kết đầu ra 5.5 - 8.0+ với phương pháp học tập khoa học, giáo viên 8.0+ IELTS.
                    </p>
                    
                    <div style="margin: 20px 0;">
                        <h4 style="margin-bottom: 12px; font-size: 1rem;">Điểm Nổi Bật:</h4>
                        <ul style="list-style: none; padding: 0;">
                            <li style="padding: 6px 0; display: flex; align-items: flex-start;">
                                <i class="fas fa-check" style="color: var(--color-orange); margin-right: 10px; margin-top: 4px;"></i>
                                <span>Cam kết đầu ra 5.5 - 8.0+ hoặc học lại miễn phí</span>
                            </li>
                            <li style="padding: 6px 0; display: flex; align-items: flex-start;">
                                <i class="fas fa-check" style="color: var(--color-orange); margin-right: 10px; margin-top: 4px;"></i>
                                <span>Giáo viên 8.0+ IELTS, kinh nghiệm luyện thi chuyên sâu</span>
                            </li>
                            <li style="padding: 6px 0; display: flex; align-items: flex-start;">
                                <i class="fas fa-check" style="color: var(--color-orange); margin-right: 10px; margin-top: 4px;"></i>
                                <span>Chữa bài Writing chi tiết, luyện Speaking 1-1</span>
                            </li>
                            <li style="padding: 6px 0; display: flex; align-items: flex-start;">
                                <i class="fas fa-check" style="color: var(--color-orange); margin-right: 10px; margin-top: 4px;"></i>
                                <span>Thi thử định kỳ, đánh giá tiến độ chi tiết</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="course-meta">
                        <span class="meta-item"><i class="fas fa-clock"></i> 4-5 buổi/tuần</span>
                        <span class="meta-item"><i class="fas fa-calendar"></i> 2-4 tháng</span>
                        <span class="meta-item"><i class="fas fa-users"></i> 6-10 học viên</span>
                    </div>
                    
                    <a href="<?php echo get_url('khoa-hoc/ielts'); ?>" class="btn-primary" style="width: 100%; margin-top: 20px;">
                        Xem Chi Tiết <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Learning Method -->
<section class="section bg-grey">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Phương Pháp Giảng Dạy</h2>
            <p class="text-muted">Kết hợp hiệu quả giữa lý thuyết và thực hành</p>
        </div>
        
        <div class="grid-4">
            <div class="card text-center">
                <div style="font-size: 3rem; color: var(--color-orange); margin-bottom: 16px;">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h4>Lớp Học Nhỏ</h4>
                <p>6-12 học viên/lớp, đảm bảo thời gian tương tác và theo sát từng em</p>
            </div>
            
            <div class="card text-center">
                <div style="font-size: 3rem; color: var(--color-orange); margin-bottom: 16px;">
                    <i class="fas fa-comments"></i>
                </div>
                <h4>Giao Tiếp Thực Tế</h4>
                <p>70% thời gian luyện nói, tình huống thực tế, tự tin giao tiếp</p>
            </div>
            
            <div class="card text-center">
                <div style="font-size: 3rem; color: var(--color-orange); margin-bottom: 16px;">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h4>Công Nghệ Hiện Đại</h4>
                <p>Học trực tuyến, app học từ vựng, tài liệu số phong phú</p>
            </div>
            
            <div class="card text-center">
                <div style="font-size: 3rem; color: var(--color-orange); margin-bottom: 16px;">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h4>Đánh Giá Liên Tục</h4>
                <p>Kiểm tra định kỳ, báo cáo tiến độ chi tiết cho phụ huynh</p>
            </div>
        </div>
    </div>
</section>

<!-- Class Schedule -->
<section class="section">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Lịch Học Linh Hoạt</h2>
            <p class="text-muted">Đa dạng khung giờ phù hợp với mọi lứa tuổi</p>
        </div>
        
        <div class="grid-3">
            <div class="card">
                <h4 style="color: var(--color-orange); margin-bottom: 16px;">
                    <i class="fas fa-sun"></i> Buổi Sáng
                </h4>
                <p style="margin-bottom: 12px;"><strong>Thời gian:</strong> 8:00 - 11:00</p>
                <p style="margin-bottom: 12px;"><strong>Phù hợp:</strong> Học sinh nghỉ hè, người đi làm ca chiều</p>
                <p style="font-size: 0.875rem; color: var(--color-text-muted);">Thứ 2, 4, 6 hoặc 3, 5, 7</p>
            </div>
            
            <div class="card">
                <h4 style="color: var(--color-orange); margin-bottom: 16px;">
                    <i class="fas fa-cloud-sun"></i> Buổi Chiều
                </h4>
                <p style="margin-bottom: 12px;"><strong>Thời gian:</strong> 14:00 - 17:00</p>
                <p style="margin-bottom: 12px;"><strong>Phù hợp:</strong> Học viên học buổi sáng, người đi làm ca sáng</p>
                <p style="font-size: 0.875rem; color: var(--color-text-muted);">Thứ 2, 4, 6 hoặc 3, 5, 7</p>
            </div>
            
            <div class="card">
                <h4 style="color: var(--color-orange); margin-bottom: 16px;">
                    <i class="fas fa-moon"></i> Buổi Tối
                </h4>
                <p style="margin-bottom: 12px;"><strong>Thời gian:</strong> 18:00 - 21:00</p>
                <p style="margin-bottom: 12px;"><strong>Phù hợp:</strong> Học sinh, sinh viên, người đi làm</p>
                <p style="font-size: 0.875rem; color: var(--color-text-muted);">Thứ 2, 4, 6 hoặc 3, 5, 7 hoặc Cuối tuần</p>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <p style="font-size: 1.125rem; margin-bottom: 20px;">
                <strong>Lưu ý:</strong> Lịch học có thể điều chỉnh linh hoạt theo nhu cầu của học viên và lớp học
            </p>
        </div>
    </div>
</section>

<!-- Pricing Overview -->
<section class="section bg-grey">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Học Phí Hợp Lý</h2>
            <p class="text-muted">Chính sách học phí minh bạch, nhiều ưu đãi hấp dẫn</p>
        </div>
        
        <div class="grid-3">
            <div class="card text-center">
                <div style="font-size: 2.5rem; color: var(--color-orange); margin-bottom: 16px;">
                    <i class="fas fa-tag"></i>
                </div>
                <h4>Giảm 15%</h4>
                <p>Khi đăng ký trọn gói từ 6 tháng trở lên</p>
            </div>
            
            <div class="card text-center">
                <div style="font-size: 2.5rem; color: var(--color-orange); margin-bottom: 16px;">
                    <i class="fas fa-gift"></i>
                </div>
                <h4>Tặng Tài Liệu</h4>
                <p>Giáo trình, sách bài tập và tài liệu học tập đầy đủ</p>
            </div>
            
            <div class="card text-center">
                <div style="font-size: 2.5rem; color: var(--color-orange); margin-bottom: 16px;">
                    <i class="fas fa-users"></i>
                </div>
                <h4>Ưu Đãi Nhóm</h4>
                <p>Giảm thêm 10% khi đăng ký từ 3 người trở lên</p>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <p style="font-size: 1rem; color: var(--color-text-muted);">
                * Học phí chi tiết vui lòng liên hệ trực tiếp hoặc đăng ký tư vấn
            </p>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Câu Hỏi Thường Gặp</h2>
        </div>
        
        <div style="max-width: 800px; margin: 0 auto;">
            <div class="card" style="margin-bottom: 20px;">
                <h4 style="color: var(--color-blue); margin-bottom: 12px;">
                    <i class="fas fa-question-circle"></i> Làm thế nào để xác định trình độ phù hợp?
                </h4>
                <p>Chúng tôi có bài kiểm tra đầu vào miễn phí giúp đánh giá chính xác trình độ hiện tại và tư vấn lộ trình phù hợp nhất cho bạn.</p>
            </div>
            
            <div class="card" style="margin-bottom: 20px;">
                <h4 style="color: var(--color-blue); margin-bottom: 12px;">
                    <i class="fas fa-question-circle"></i> Có được học bù nếu vắng mặt không?
                </h4>
                <p>Có, học viên có thể học bù với lớp cùng cấp độ khác. Ngoài ra, giáo viên sẽ cung cấp tài liệu bài học để học viên tự học phần bỏ lỡ.</p>
            </div>
            
            <div class="card" style="margin-bottom: 20px;">
                <h4 style="color: var(--color-blue); margin-bottom: 12px;">
                    <i class="fas fa-question-circle"></i> Chính sách hoàn học phí như thế nào?
                </h4>
                <p>Hoàn lại 100% nếu dừng học trong 7 ngày đầu. Sau đó tính theo tỷ lệ số buổi chưa học (trừ phí quản lý 10%).</p>
            </div>
            
            <div class="card">
                <h4 style="color: var(--color-blue); margin-bottom: 12px;">
                    <i class="fas fa-question-circle"></i> Sau khóa học có được cấp chứng chỉ không?
                </h4>
                <p>Có, học viên hoàn thành khóa học đạt yêu cầu sẽ nhận chứng nhận hoàn thành từ T&T Education. Riêng khóa IELTS, học viên sẽ thi chứng chỉ IELTS quốc tế.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<?php include __DIR__ . '/../includes/cta-form.php'; ?>

<?php include __DIR__ . '/../includes/footer.php'; ?>
