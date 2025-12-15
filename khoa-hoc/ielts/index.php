<?php
require_once __DIR__ . '/../../config/config.php';

// Load meta data from JSON
$meta = json_decode(file_get_contents(__DIR__ . '/meta.json'), true);
$current_page = 'khoa-hoc';

include __DIR__ . '/../../includes/header.php';
include __DIR__ . '/../../includes/navbar.php';
?>

<!-- Hero -->
<section class="hero hero-orange">
    <div class="container">
        <div class="hero-grid">
            <div>
                <div class="hero-badge">
                    <?php echo htmlspecialchars($meta['hero_badge']); ?>
                </div>
                <h1><?php echo htmlspecialchars($meta['hero_heading']); ?></h1>
                <p><?php echo htmlspecialchars($meta['hero_subheading']); ?></p>
                <div class="hero-actions">
                    <a href="#registration" class="btn btn-primary" style="background: white; color: var(--color-orange);">
                        <i class="fas fa-edit"></i> Đăng Ký Học Thử
                    </a>
                    <a href="#output-commitment" class="btn btn-outline" style="border-color: white; color: white;">
                        <i class="fas fa-certificate"></i> Cam Kết Đầu Ra
                    </a>
                </div>
            </div>
            <div>
                <img src="https://via.placeholder.com/500x400/F76010/FFFFFF?text=IELTS" alt="Khóa học IELTS" class="hero-image">
            </div>
        </div>
    </div>
</section>

<!-- Quick Stats -->
<section class="section">
    <div class="container">
        <div class="grid-4">
            <div class="card text-center">
                <div style="font-size: 2.5rem; font-weight: 700; color: var(--color-orange); margin-bottom: 8px;">95%</div>
                <p style="font-weight: 600;">Tỷ Lệ Đạt Target</p>
            </div>
            
            <div class="card text-center">
                <div style="font-size: 2.5rem; font-weight: 700; color: var(--color-orange); margin-bottom: 8px;">8.0+</div>
                <p style="font-weight: 600;">Giáo Viên IELTS</p>
            </div>
            
            <div class="card text-center">
                <div style="font-size: 2.5rem; font-weight: 700; color: var(--color-orange); margin-bottom: 8px;">1000+</div>
                <p style="font-weight: 600;">Học Viên Đạt 7.0+</p>
            </div>
            
            <div class="card text-center">
                <div style="font-size: 2.5rem; font-weight: 700; color: var(--color-orange); margin-bottom: 8px;">2-4</div>
                <p style="font-weight: 600;">Tháng Đạt Mục Tiêu</p>
            </div>
        </div>
    </div>
</section>

<!-- Course Tracks -->
<section class="section bg-grey">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Các Lộ Trình Luyện Thi</h2>
            <p class="text-muted">Chọn lộ trình phù hợp với mục tiêu của bạn</p>
        </div>
        
        <div class="grid-3">
            <div class="card">
                <div style="text-align: center; padding: 20px 0; background: linear-gradient(135deg, #f1f8ff 0%, #e6f2ff 100%); border-radius: var(--radius-md) var(--radius-md) 0 0; margin: calc(var(--spacing-md) * -1) calc(var(--spacing-md) * -1) var(--spacing-md);">
                    <div style="font-size: 3rem; color: var(--color-blue); margin-bottom: 12px;">5.5</div>
                    <h3 style="margin: 0;">IELTS Foundation</h3>
                </div>
                <p style="margin-bottom: 16px;"><strong>Đầu vào:</strong> 4.0 IELTS hoặc tương đương</p>
                <p style="margin-bottom: 16px;"><strong>Đầu ra:</strong> 5.5 IELTS</p>
                <p style="margin-bottom: 16px;"><strong>Thời gian:</strong> 3 tháng (60 buổi)</p>
                <p style="margin-bottom: 20px;"><strong>Lịch học:</strong> 5 buổi/tuần (90 phút/buổi)</p>
                <ul style="list-style: none; padding: 0; margin-bottom: 20px;">
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--color-orange);"></i> Củng cố nền tảng ngữ pháp, từ vựng</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--color-orange);"></i> Làm quen format đề thi IELTS</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--color-orange);"></i> Luyện kỹ năng làm bài cơ bản</li>
                </ul>
                <a href="#registration" class="btn-primary" style="width: 100%;">Đăng Ký Ngay</a>
            </div>
            
            <div class="card" style="border: 2px solid var(--color-orange);">
                <div style="background: var(--color-orange); color: white; text-align: center; padding: 8px; margin: calc(var(--spacing-md) * -1) calc(var(--spacing-md) * -1) var(--spacing-md); border-radius: var(--radius-md) var(--radius-md) 0 0; font-weight: 600;">
                    ⭐ PHỔ BIẾN NHẤT
                </div>
                <div style="text-align: center; padding: 20px 0; background: linear-gradient(135deg, #fff5f0 0%, #ffe8dc 100%); margin: 0 calc(var(--spacing-md) * -1) var(--spacing-md);">
                    <div style="font-size: 3rem; color: var(--color-orange); margin-bottom: 12px;">6.5-7.0</div>
                    <h3 style="margin: 0;">IELTS Intensive</h3>
                </div>
                <p style="margin-bottom: 16px;"><strong>Đầu vào:</strong> 5.0-5.5 IELTS</p>
                <p style="margin-bottom: 16px;"><strong>Đầu ra:</strong> 6.5-7.0 IELTS</p>
                <p style="margin-bottom: 16px;"><strong>Thời gian:</strong> 3 tháng (60 buổi)</p>
                <p style="margin-bottom: 20px;"><strong>Lịch học:</strong> 5 buổi/tuần (90 phút/buổi)</p>
                <ul style="list-style: none; padding: 0; margin-bottom: 20px;">
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--color-orange);"></i> Kỹ thuật làm bài chuyên sâu 4 kỹ năng</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--color-orange);"></i> Luyện Writing Task 2 & Speaking Part 2-3</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--color-orange);"></i> Thi thử và chữa đề hàng tuần</li>
                </ul>
                <a href="#registration" class="btn-primary" style="width: 100%; background: var(--color-orange);">Đăng Ký Ngay</a>
            </div>
            
            <div class="card">
                <div style="text-align: center; padding: 20px 0; background: linear-gradient(135deg, #f8f0ff 0%, #f0e6ff 100%); border-radius: var(--radius-md) var(--radius-md) 0 0; margin: calc(var(--spacing-md) * -1) calc(var(--spacing-md) * -1) var(--spacing-md);">
                    <div style="font-size: 3rem; color: #8B5CF6; margin-bottom: 12px;">7.5-8.0+</div>
                    <h3 style="margin: 0;">IELTS Advanced</h3>
                </div>
                <p style="margin-bottom: 16px;"><strong>Đầu vào:</strong> 6.5-7.0 IELTS</p>
                <p style="margin-bottom: 16px;"><strong>Đầu ra:</strong> 7.5-8.0+ IELTS</p>
                <p style="margin-bottom: 16px;"><strong>Thời gian:</strong> 2-3 tháng (50 buổi)</p>
                <p style="margin-bottom: 20px;"><strong>Lịch học:</strong> 5 buổi/tuần (90 phút/buổi)</p>
                <ul style="list-style: none; padding: 0; margin-bottom: 20px;">
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--color-orange);"></i> Nâng cao paraphrase, vocabulary C1-C2</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--color-orange);"></i> Luyện Writing & Speaking band 8.0+</li>
                    <li style="padding: 6px 0;"><i class="fas fa-check" style="color: var(--color-orange);"></i> Đề thi thật, mock test chuẩn IDP/BC</li>
                </ul>
                <a href="#registration" class="btn-primary" style="width: 100%;">Đăng Ký Ngay</a>
            </div>
        </div>
    </div>
</section>

<!-- 4 Skills Breakdown -->
<section class="section">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Phương Pháp Luyện 4 Kỹ Năng</h2>
            <p class="text-muted">Chiến lược cụ thể cho từng kỹ năng IELTS</p>
        </div>
        
        <div class="grid-2">
            <div class="card">
                <h3 style="color: var(--color-blue); margin-bottom: 16px;">
                    <i class="fas fa-headphones" style="color: var(--color-orange);"></i> IELTS Listening
                </h3>
                <p style="margin-bottom: 16px;">Chinh phục Listening 7.0-9.0 với kỹ thuật chuyên sâu</p>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 8px 0; border-bottom: 1px solid var(--color-border);">
                        <strong>Prediction Skills:</strong> Dự đoán đáp án trước khi nghe
                    </li>
                    <li style="padding: 8px 0; border-bottom: 1px solid var(--color-border);">
                        <strong>Note-taking:</strong> Ghi chép hiệu quả, không bỏ lỡ thông tin
                    </li>
                    <li style="padding: 8px 0; border-bottom: 1px solid var(--color-border);">
                        <strong>Paraphrasing:</strong> Nhận diện câu trả lời paraphrase
                    </li>
                    <li style="padding: 8px 0;">
                        <strong>Practice:</strong> 100+ bài thi thật, đa dạng accent
                    </li>
                </ul>
            </div>
            
            <div class="card">
                <h3 style="color: var(--color-blue); margin-bottom: 16px;">
                    <i class="fas fa-book-open" style="color: var(--color-orange);"></i> IELTS Reading
                </h3>
                <p style="margin-bottom: 16px;">Kỹ thuật làm bài Reading 8.0-9.0 hiệu quả</p>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 8px 0; border-bottom: 1px solid var(--color-border);">
                        <strong>Skimming & Scanning:</strong> Đọc nhanh, tìm thông tin chính xác
                    </li>
                    <li style="padding: 8px 0; border-bottom: 1px solid var(--color-border);">
                        <strong>Time Management:</strong> Phân bổ thời gian 20 phút/passage
                    </li>
                    <li style="padding: 8px 0; border-bottom: 1px solid var(--color-border);">
                        <strong>Question Types:</strong> Chiến lược cho 14 dạng câu hỏi
                    </li>
                    <li style="padding: 8px 0;">
                        <strong>Vocabulary:</strong> 2000+ academic words topic-based
                    </li>
                </ul>
            </div>
            
            <div class="card">
                <h3 style="color: var(--color-blue); margin-bottom: 16px;">
                    <i class="fas fa-pen" style="color: var(--color-orange);"></i> IELTS Writing
                </h3>
                <p style="margin-bottom: 16px;">Viết Task 1 & 2 band 7.0-8.0+ với cấu trúc chuẩn</p>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 8px 0; border-bottom: 1px solid var(--color-border);">
                        <strong>Task Achievement:</strong> Trả lời đúng, đủ yêu cầu đề bài
                    </li>
                    <li style="padding: 8px 0; border-bottom: 1px solid var(--color-border);">
                        <strong>Coherence & Cohesion:</strong> Linking words, paragraph structure
                    </li>
                    <li style="padding: 8px 0; border-bottom: 1px solid var(--color-border);">
                        <strong>Lexical Resource:</strong> Vocabulary band 7.0-8.0, paraphrase
                    </li>
                    <li style="padding: 8px 0;">
                        <strong>Correction:</strong> Chữa bài chi tiết, feedback cá nhân
                    </li>
                </ul>
            </div>
            
            <div class="card">
                <h3 style="color: var(--color-blue); margin-bottom: 16px;">
                    <i class="fas fa-comments" style="color: var(--color-orange);"></i> IELTS Speaking
                </h3>
                <p style="margin-bottom: 16px;">Tự tin Speaking 7.0-8.0+ với phương pháp 1-1</p>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 8px 0; border-bottom: 1px solid var(--color-border);">
                        <strong>Part 1:</strong> Trả lời tự nhiên, mở rộng ý tưởng
                    </li>
                    <li style="padding: 8px 0; border-bottom: 1px solid var(--color-border);">
                        <strong>Part 2:</strong> Cấu trúc bài nói 2 phút, idea development
                    </li>
                    <li style="padding: 8px 0; border-bottom: 1px solid var(--color-border);">
                        <strong>Part 3:</strong> Abstract topics, critical thinking
                    </li>
                    <li style="padding: 8px 0;">
                        <strong>Mock Test:</strong> Luyện thi thử 1-1 với giám khảo
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Output Commitment -->
<section class="section bg-grey" id="output-commitment">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Cam Kết Đầu Ra</h2>
            <p class="text-muted">Chúng tôi cam kết kết quả hoặc học lại miễn phí</p>
        </div>
        
        <div style="max-width: 800px; margin: 0 auto;">
            <div class="card" style="background: linear-gradient(135deg, #0D2396 0%, #1a3bb8 100%); color: white; text-align: center; padding: 40px;">
                <div style="font-size: 3.5rem; margin-bottom: 20px;">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 style="color: white; margin-bottom: 24px; font-size: 1.75rem;">Cam Kết Đầu Ra Rõ Ràng</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 24px; margin-bottom: 30px;">
                    <div>
                        <div style="font-size: 2.5rem; font-weight: 700; margin-bottom: 8px;">95%</div>
                        <p style="margin: 0;">Học viên đạt target</p>
                    </div>
                    <div>
                        <div style="font-size: 2.5rem; font-weight: 700; margin-bottom: 8px;">100%</div>
                        <p style="margin: 0;">Học lại nếu không đạt</p>
                    </div>
                    <div>
                        <div style="font-size: 2.5rem; font-weight: 700; margin-bottom: 8px;">0đ</div>
                        <p style="margin: 0;">Không phí phát sinh</p>
                    </div>
                </div>
                <p style="font-size: 1.125rem; margin-bottom: 0;">
                    <strong>Điều kiện:</strong> Tham gia đầy đủ 90% buổi học, hoàn thành 100% bài tập, tham gia thi thử định kỳ
                </p>
            </div>
            
            <div style="margin-top: 30px;">
                <div class="card">
                    <h4 style="margin-bottom: 16px;"><i class="fas fa-info-circle" style="color: var(--color-orange);"></i> Quy Trình Cam Kết</h4>
                    <ol style="padding-left: 20px;">
                        <li style="margin-bottom: 12px;">Kiểm tra đầu vào để xác định trình độ chính xác</li>
                        <li style="margin-bottom: 12px;">Ký cam kết đầu ra cụ thể (band điểm target)</li>
                        <li style="margin-bottom: 12px;">Học viên hoàn thành đầy đủ chương trình học</li>
                        <li style="margin-bottom: 12px;">Thi IELTS thật trong vòng 1 tháng sau khi kết thúc khóa</li>
                        <li>Nếu không đạt: Học lại miễn phí đến khi đạt mục tiêu</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories -->
<section class="section">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Câu Chuyện Thành Công</h2>
            <p class="text-muted">Học viên T&T chinh phục IELTS</p>
        </div>
        
        <div class="grid-3">
            <div class="testimonial-card">
                <div style="text-align: center; margin-bottom: 20px;">
                    <div style="display: inline-block; background: var(--color-orange); color: white; padding: 12px 24px; border-radius: 50px; font-size: 1.5rem; font-weight: 700; margin-bottom: 16px;">
                        8.0
                    </div>
                    <p style="font-weight: 600; margin: 0;">L: 8.5 | R: 8.0 | W: 7.5 | S: 7.5</p>
                </div>
                <div class="testimonial-content">
                    <p>"Từ 6.0 lên 8.0 chỉ trong 3 tháng. Các thầy cô dạy rất kỹ, đặc biệt là Writing được chữa tận tình. Mình đã đỗ học bổng Úc nhờ điểm IELTS này."</p>
                </div>
                <div class="testimonial-author">
                    <img src="https://via.placeholder.com/60/0D2396/FFFFFF?text=HV" alt="Học viên" ">
                    <div>
                        <div class="author-name">Lê Thị Mai</div>
                        <div class="author-title">Du học Úc 2023</div>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <div style="text-align: center; margin-bottom: 20px;">
                    <div style="display: inline-block; background: var(--color-orange); color: white; padding: 12px 24px; border-radius: 50px; font-size: 1.5rem; font-weight: 700; margin-bottom: 16px;">
                        7.5
                    </div>
                    <p style="font-weight: 600; margin: 0;">L: 8.0 | R: 8.5 | W: 7.0 | S: 7.0</p>
                </div>
                <div class="testimonial-content">
                    <p>"Lộ trình học rất rõ ràng, mỗi tuần đều có thi thử để biết tiến độ. Speaking được luyện 1-1 giúp mình tự tin hơn rất nhiều."</p>
                </div>
                <div class="testimonial-author">
                    <img src="https://via.placeholder.com/60/F76010/FFFFFF?text=HV" alt="Học viên" ">
                    <div>
                        <div class="author-name">Nguyễn Văn Tùng</div>
                        <div class="author-title">Du học Canada 2024</div>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <div style="text-align: center; margin-bottom: 20px;">
                    <div style="display: inline-block; background: var(--color-orange); color: white; padding: 12px 24px; border-radius: 50px; font-size: 1.5rem; font-weight: 700; margin-bottom: 16px;">
                        6.5
                    </div>
                    <p style="font-weight: 600; margin: 0;">L: 7.0 | R: 7.5 | W: 6.0 | S: 6.0</p>
                </div>
                <div class="testimonial-content">
                    <p>"Mình đi làm nên chỉ học tối, nhưng vẫn đạt 6.5 Overall. Cảm ơn các thầy cô đã giúp mình có cơ hội thăng tiến trong công việc."</p>
                </div>
                <div class="testimonial-author">
                    <img src="https://via.placeholder.com/60/0D2396/FFFFFF?text=HV" alt="Học viên" ">
                    <div>
                        <div class="author-name">Phạm Minh Hà</div>
                        <div class="author-title">Nhân viên văn phòng</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Registration CTA -->
<section class="section bg-grey" id="registration">
    <div class="container">
        <?php include __DIR__ . '/../../includes/cta-form.php'; ?>
    </div>
</section>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
