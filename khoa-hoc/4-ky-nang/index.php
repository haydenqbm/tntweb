<?php
require_once __DIR__ . '/../../config/config.php';

// Load meta data from JSON
$meta = json_decode(file_get_contents(__DIR__ . '/meta.json'), true);
$current_page = 'khoa-hoc';

include __DIR__ . '/../../includes/header.php';
include __DIR__ . '/../../includes/navbar.php';
?>

<!-- Hero -->
<section class="hero">
    <div class="container">
        <div class="hero-grid">
            <div>
                <div class="hero-badge">
                    <?php echo htmlspecialchars($meta['hero_badge']); ?>
                </div>
                <h1><?php echo htmlspecialchars($meta['hero_heading']); ?></h1>
                <p><?php echo htmlspecialchars($meta['hero_subheading']); ?></p>
                <div class="hero-actions">
                    <a href="#registration" class="btn btn-primary">
                        <i class="fas fa-edit"></i> Đăng Ký Ngay
                    </a>
                    <a href="#curriculum" class="btn btn-outline" style="border-color: white; color: white;">
                        <i class="fas fa-book"></i> Xem Chương Trình
                    </a>
                </div>
            </div>
            <div>
                <img src="https://via.placeholder.com/500x400/0D2396/FFFFFF?text=4+Skills" alt="Khóa học 4 kỹ năng" class="hero-image">
            </div>
        </div>
    </div>
</section>

<!-- Course Overview -->
<section class="section">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Tổng Quan Khóa Học</h2>
        </div>
        
        <div class="grid-4">
            <div class="card text-center">
                <div style="font-size: 2.5rem; color: var(--color-orange); margin-bottom: 12px;">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h4>6 Cấp Độ</h4>
                <p>A1, A2, B1, B2, C1, C2</p>
            </div>
            
            <div class="card text-center">
                <div style="font-size: 2.5rem; color: var(--color-orange); margin-bottom: 12px;">
                    <i class="fas fa-clock"></i>
                </div>
                <h4>3 Buổi/Tuần</h4>
                <p>90 phút/buổi</p>
            </div>
            
            <div class="card text-center">
                <div style="font-size: 2.5rem; color: var(--color-orange); margin-bottom: 12px;">
                    <i class="fas fa-users"></i>
                </div>
                <h4>8-12 Học Viên</h4>
                <p>Lớp học nhỏ</p>
            </div>
            
            <div class="card text-center">
                <div style="font-size: 2.5rem; color: var(--color-orange); margin-bottom: 12px;">
                    <i class="fas fa-calendar"></i>
                </div>
                <h4>3-6 Tháng</h4>
                <p>Mỗi cấp độ</p>
            </div>
        </div>
    </div>
</section>

<!-- 4 Skills Details -->
<section class="section bg-grey">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Phát Triển 4 Kỹ Năng</h2>
            <p class="text-muted">Đào tạo toàn diện, cân bằng cả 4 kỹ năng</p>
        </div>
        
        <div class="grid-2">
            <div class="card">
                <div style="display: flex; align-items: center; margin-bottom: 20px;">
                    <div style="font-size: 3rem; color: var(--color-orange); margin-right: 20px;">
                        <i class="fas fa-headphones"></i>
                    </div>
                    <div>
                        <h3 style="margin: 0;">Listening - Nghe</h3>
                        <p style="margin: 4px 0; color: var(--color-text-muted);">25% thời lượng khóa học</p>
                    </div>
                </div>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 8px 0; display: flex; align-items: flex-start;">
                        <i class="fas fa-check" style="color: var(--color-orange); margin-right: 10px; margin-top: 4px;"></i>
                        <span>Luyện nghe các chủ đề đa dạng: hội thoại, bài giảng, podcast</span>
                    </li>
                    <li style="padding: 8px 0; display: flex; align-items: flex-start;">
                        <i class="fas fa-check" style="color: var(--color-orange); margin-right: 10px; margin-top: 4px;"></i>
                        <span>Phát triển kỹ năng nghe chính xác, nắm bắt ý chính và chi tiết</span>
                    </li>
                    <li style="padding: 8px 0; display: flex; align-items: flex-start;">
                        <i class="fas fa-check" style="color: var(--color-orange); margin-right: 10px; margin-top: 4px;"></i>
                        <span>Làm quen với giọng Anh - Mỹ - Úc qua tài liệu chuẩn</span>
                    </li>
                </ul>
            </div>
            
            <div class="card">
                <div style="display: flex; align-items: center; margin-bottom: 20px;">
                    <div style="font-size: 3rem; color: var(--color-orange); margin-right: 20px;">
                        <i class="fas fa-comments"></i>
                    </div>
                    <div>
                        <h3 style="margin: 0;">Speaking - Nói</h3>
                        <p style="margin: 4px 0; color: var(--color-text-muted);">35% thời lượng khóa học</p>
                    </div>
                </div>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 8px 0; display: flex; align-items: flex-start;">
                        <i class="fas fa-check" style="color: var(--color-orange); margin-right: 10px; margin-top: 4px;"></i>
                        <span>Luyện phát âm chuẩn, intonation và stress patterns</span>
                    </li>
                    <li style="padding: 8px 0; display: flex; align-items: flex-start;">
                        <i class="fas fa-check" style="color: var(--color-orange); margin-right: 10px; margin-top: 4px;"></i>
                        <span>Thực hành giao tiếp qua tình huống thực tế đa dạng</span>
                    </li>
                    <li style="padding: 8px 0; display: flex; align-items: flex-start;">
                        <i class="fas fa-check" style="color: var(--color-orange); margin-right: 10px; margin-top: 4px;"></i>
                        <span>Xây dựng tự tin, phản xạ nhanh trong giao tiếp</span>
                    </li>
                </ul>
            </div>
            
            <div class="card">
                <div style="display: flex; align-items: center; margin-bottom: 20px;">
                    <div style="font-size: 3rem; color: var(--color-orange); margin-right: 20px;">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <div>
                        <h3 style="margin: 0;">Reading - Đọc</h3>
                        <p style="margin: 4px 0; color: var(--color-text-muted);">20% thời lượng khóa học</p>
                    </div>
                </div>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 8px 0; display: flex; align-items: flex-start;">
                        <i class="fas fa-check" style="color: var(--color-orange); margin-right: 10px; margin-top: 4px;"></i>
                        <span>Đọc hiểu các thể loại: báo chí, văn học, khoa học, học thuật</span>
                    </li>
                    <li style="padding: 8px 0; display: flex; align-items: flex-start;">
                        <i class="fas fa-check" style="color: var(--color-orange); margin-right: 10px; margin-top: 4px;"></i>
                        <span>Phát triển kỹ năng skimming, scanning, detailed reading</span>
                    </li>
                    <li style="padding: 8px 0; display: flex; align-items: flex-start;">
                        <i class="fas fa-check" style="color: var(--color-orange); margin-right: 10px; margin-top: 4px;"></i>
                        <span>Mở rộng vốn từ vựng, cấu trúc ngữ pháp trong ngữ cảnh</span>
                    </li>
                </ul>
            </div>
            
            <div class="card">
                <div style="display: flex; align-items: center; margin-bottom: 20px;">
                    <div style="font-size: 3rem; color: var(--color-orange); margin-right: 20px;">
                        <i class="fas fa-pen"></i>
                    </div>
                    <div>
                        <h3 style="margin: 0;">Writing - Viết</h3>
                        <p style="margin: 4px 0; color: var(--color-text-muted);">20% thời lượng khóa học</p>
                    </div>
                </div>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 8px 0; display: flex; align-items: flex-start;">
                        <i class="fas fa-check" style="color: var(--color-orange); margin-right: 10px; margin-top: 4px;"></i>
                        <span>Luyện viết đoạn văn, email, essay, báo cáo theo chuẩn</span>
                    </li>
                    <li style="padding: 8px 0; display: flex; align-items: flex-start;">
                        <i class="fas fa-check" style="color: var(--color-orange); margin-right: 10px; margin-top: 4px;"></i>
                        <span>Nắm vững cấu trúc, cohesion, coherence trong bài viết</span>
                    </li>
                    <li style="padding: 8px 0; display: flex; align-items: flex-start;">
                        <i class="fas fa-check" style="color: var(--color-orange); margin-right: 10px; margin-top: 4px;"></i>
                        <span>Chữa bài chi tiết, feedback cá nhân từ giáo viên</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Curriculum -->
<section class="section" id="curriculum">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Lộ Trình Học Tập</h2>
            <p class="text-muted">6 cấp độ từ cơ bản đến nâng cao theo chuẩn CEFR</p>
        </div>
        
        <div style="max-width: 900px; margin: 0 auto;">
            <div class="card" style="margin-bottom: 24px; border-left: 4px solid var(--color-orange);">
                <h3 style="color: var(--color-blue); margin-bottom: 16px;">
                    <i class="fas fa-star"></i> Cấp độ A1 - Sơ Cấp
                </h3>
                <p style="margin-bottom: 12px;"><strong>Thời lượng:</strong> 3 tháng (36 buổi)</p>
                <p style="margin-bottom: 12px;"><strong>Mục tiêu:</strong> Giao tiếp cơ bản trong các tình huống quen thuộc</p>
                <p style="margin-bottom: 12px;"><strong>Nội dung:</strong></p>
                <ul style="margin: 0;">
                    <li>Ngữ pháp: Thì hiện tại đơn, tiếp diễn, câu hỏi cơ bản, giới từ</li>
                    <li>Chủ đề: Giới thiệu bản thân, gia đình, sở thích, thời gian, địa điểm</li>
                    <li>Từ vựng: 800-1000 từ về các chủ đề hàng ngày</li>
                </ul>
            </div>
            
            <div class="card" style="margin-bottom: 24px; border-left: 4px solid var(--color-orange);">
                <h3 style="color: var(--color-blue); margin-bottom: 16px;">
                    <i class="fas fa-star"></i> Cấp độ A2 - Tiền Trung Cấp
                </h3>
                <p style="margin-bottom: 12px;"><strong>Thời lượng:</strong> 4 tháng (48 buổi)</p>
                <p style="margin-bottom: 12px;"><strong>Mục tiêu:</strong> Giao tiếp trong các tình huống hàng ngày thường gặp</p>
                <p style="margin-bottom: 12px;"><strong>Nội dung:</strong></p>
                <ul style="margin: 0;">
                    <li>Ngữ pháp: Thì quá khứ, tương lai, so sánh, mệnh đề quan hệ đơn giản</li>
                    <li>Chủ đề: Mua sắm, du lịch, thực phẩm, sức khỏe, công việc</li>
                    <li>Từ vựng: 1500-2000 từ, cụm từ thông dụng</li>
                </ul>
            </div>
            
            <div class="card" style="margin-bottom: 24px; border-left: 4px solid var(--color-orange);">
                <h3 style="color: var(--color-blue); margin-bottom: 16px;">
                    <i class="fas fa-star"></i> Cấp độ B1 - Trung Cấp
                </h3>
                <p style="margin-bottom: 12px;"><strong>Thời lượng:</strong> 5 tháng (60 buổi)</p>
                <p style="margin-bottom: 12px;"><strong>Mục tiêu:</strong> Hiểu và trao đổi về các chủ đề quen thuộc, du lịch tự tin</p>
                <p style="margin-bottom: 12px;"><strong>Nội dung:</strong></p>
                <ul style="margin: 0;">
                    <li>Ngữ pháp: Các thì hoàn thành, câu điều kiện, câu bị động, tường thuật</li>
                    <li>Chủ đề: Giáo dục, môi trường, công nghệ, văn hóa, thể thao</li>
                    <li>Từ vựng: 2500-3000 từ, idioms cơ bản</li>
                </ul>
            </div>
            
            <div class="card" style="margin-bottom: 24px; border-left: 4px solid var(--color-orange);">
                <h3 style="color: var(--color-blue); margin-bottom: 16px;">
                    <i class="fas fa-star"></i> Cấp độ B2 - Trung Cấp Cao
                </h3>
                <p style="margin-bottom: 12px;"><strong>Thời lượng:</strong> 6 tháng (72 buổi)</p>
                <p style="margin-bottom: 12px;"><strong>Mục tiêu:</strong> Giao tiếp tự nhiên, hiểu văn bản phức tạp</p>
                <p style="margin-bottom: 12px;"><strong>Nội dung:</strong></p>
                <ul style="margin: 0;">
                    <li>Ngữ pháp: Inversion, cleft sentences, modals nâng cao</li>
                    <li>Chủ đề: Kinh tế, chính trị, y tế, nghệ thuật, xã hội</li>
                    <li>Từ vựng: 3500-4000 từ, phrasal verbs, collocations</li>
                </ul>
            </div>
            
            <div class="card" style="border-left: 4px solid var(--color-orange);">
                <h3 style="color: var(--color-blue); margin-bottom: 16px;">
                    <i class="fas fa-star"></i> Cấp độ C1 - Cao Cấp
                </h3>
                <p style="margin-bottom: 12px;"><strong>Thời lượng:</strong> 6 tháng (72 buổi)</p>
                <p style="margin-bottom: 12px;"><strong>Mục tiêu:</strong> Sử dụng tiếng Anh linh hoạt, hiệu quả trong mọi tình huống</p>
                <p style="margin-bottom: 12px;"><strong>Nội dung:</strong></p>
                <ul style="margin: 0;">
                    <li>Ngữ pháp: Cấu trúc phức tạp, văn phong học thuật và chuyên nghiệp</li>
                    <li>Chủ đề: Các vấn đề xã hội sâu, văn học, triết học, nghiên cứu</li>
                    <li>Từ vựng: 5000+ từ, academic vocabulary, advanced idioms</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="section bg-grey">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Học Viên Nói Gì</h2>
        </div>
        
        <div class="grid-2">
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <p>"Sau 6 tháng học tại T&T, con đã tự tin giao tiếp tiếng Anh với bạn nước ngoài. Các thầy cô dạy rất tận tình, lớp học vui vẻ nhưng vẫn đạt chất lượng cao."</p>
                </div>
                <div class="testimonial-author">
                    <img src="https://via.placeholder.com/60/0D2396/FFFFFF?text=HV" alt="Học viên" ">
                    <div>
                        <div class="author-name">Nguyễn Minh Anh</div>
                        <div class="author-title">Học viên cấp độ B1</div>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <p>"Chương trình học cân bằng cả 4 kỹ năng, đặc biệt là Speaking được luyện rất nhiều. Sau khóa học, mình đã ứng tuyển được công việc yêu cầu tiếng Anh B2."</p>
                </div>
                <div class="testimonial-author">
                    <img src="https://via.placeholder.com/60/F76010/FFFFFF?text=HV" alt="Học viên" ">
                    <div>
                        <div class="author-name">Trần Văn Hùng</div>
                        <div class="author-title">Học viên cấp độ B2</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Registration CTA -->
<section class="section" id="registration">
    <div class="container">
        <?php include __DIR__ . '/../../includes/cta-form.php'; ?>
    </div>
</section>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
