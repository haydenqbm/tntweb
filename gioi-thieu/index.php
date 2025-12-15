<?php
require_once __DIR__ . '/../config/config.php';

// Load meta data from JSON
$meta = json_decode(file_get_contents(__DIR__ . '/meta.json'), true);
$current_page = 'gioi-thieu';

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

<!-- About Section -->
<section class="section">
    <div class="container">
        <div class="grid-2">
            <div>
                <h2>Câu Chuyện Của Chúng Tôi</h2>
                <p>T&T Education SkillUp được thành lập vào năm 2015 với mục tiêu mang đến phương pháp giảng dạy tiếng Anh tiên tiến, giúp học viên Việt Nam tự tin giao tiếp và chinh phục các kỳ thi quốc tế.</p>
                <p>Từ một lớp học nhỏ với 10 học viên, đến nay T&T đã phát triển thành hệ thống trung tâm với hơn 5,000 học viên trên toàn quốc. Chúng tôi tự hào là đối tác tin cậy của hàng nghìn gia đình Việt trong hành trình chinh phục tiếng Anh.</p>
                <p>Với đội ngũ hơn 50 giáo viên giàu kinh nghiệm, chương trình đào tạo chuẩn quốc tế và cơ sở vật chất hiện đại, T&T cam kết mang đến trải nghiệm học tập tốt nhất cho mọi học viên.</p>
            </div>
            <div>
                <img src="https://via.placeholder.com/600x400/0D2396/FFFFFF?text=T%26T+Education" alt="T&T Education Center" style="width: 100%; border-radius: var(--radius-lg); box-shadow: var(--shadow-lg);" ">
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="section bg-grey">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Sứ Mệnh & Tầm Nhìn</h2>
        </div>
        
        <div class="grid-2">
            <div class="card" style="text-align: center; padding: var(--spacing-lg);">
                <div style="font-size: 3.5rem; color: var(--color-orange); margin-bottom: var(--spacing-md);">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h3>Sứ Mệnh</h3>
                <p>Cung cấp chương trình đào tạo tiếng Anh chất lượng cao, giúp học viên phát triển toàn diện 4 kỹ năng, tự tin giao tiếp và đạt mục tiêu cá nhân trong học tập, công việc và cuộc sống.</p>
            </div>
            
            <div class="card" style="text-align: center; padding: var(--spacing-lg);">
                <div style="font-size: 3.5rem; color: var(--color-blue); margin-bottom: var(--spacing-md);">
                    <i class="fas fa-eye"></i>
                </div>
                <h3>Tầm Nhìn</h3>
                <p>Trở thành trung tâm Anh ngữ hàng đầu Việt Nam, được công nhận về chất lượng giảng dạy, phương pháp tiên tiến và cam kết phát triển toàn diện cho từng học viên.</p>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="section">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Giá Trị Cốt Lõi</h2>
            <p class="text-muted">Những nguyên tắc định hướng mọi hoạt động của chúng tôi</p>
        </div>
        
        <div class="grid-3">
            <div class="card text-center">
                <div style="font-size: 3rem; color: var(--color-orange); margin-bottom: 16px;">
                    <i class="fas fa-heart"></i>
                </div>
                <h3>Tận Tâm</h3>
                <p>Đặt học viên làm trung tâm, luôn lắng nghe và hỗ trợ tối đa cho sự phát triển của các em</p>
            </div>
            
            <div class="card text-center">
                <div style="font-size: 3rem; color: var(--color-orange); margin-bottom: 16px;">
                    <i class="fas fa-award"></i>
                </div>
                <h3>Chất Lượng</h3>
                <p>Cam kết chất lượng giảng dạy cao nhất, giáo viên được đào tạo bài bản, chương trình chuẩn quốc tế</p>
            </div>
            
            <div class="card text-center">
                <div style="font-size: 3rem; color: var(--color-orange); margin-bottom: 16px;">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3>Đổi Mới</h3>
                <p>Không ngừng cập nhật phương pháp, công nghệ giáo dục tiên tiến để mang đến trải nghiệm học tập tốt nhất</p>
            </div>
            
            <div class="card text-center">
                <div style="font-size: 3rem; color: var(--color-orange); margin-bottom: 16px;">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3>Trách Nhiệm</h3>
                <p>Cam kết đầu ra rõ ràng, minh bạch trong mọi hoạt động, xây dựng niềm tin với phụ huynh</p>
            </div>
            
            <div class="card text-center">
                <div style="font-size: 3rem; color: var(--color-orange); margin-bottom: 16px;">
                    <i class="fas fa-users-cog"></i>
                </div>
                <h3>Hợp Tác</h3>
                <p>Phối hợp chặt chẽ giữa giáo viên, học viên và phụ huynh để đạt hiệu quả học tập tốt nhất</p>
            </div>
            
            <div class="card text-center">
                <div style="font-size: 3rem; color: var(--color-orange); margin-bottom: 16px;">
                    <i class="fas fa-smile-beam"></i>
                </div>
                <h3>Vui Học</h3>
                <p>Tạo môi trường học tập tích cực, thú vị, khuyến khích sự sáng tạo và niềm đam mê học tập</p>
            </div>
        </div>
    </div>
</section>

<!-- Teachers Section -->
<section class="section bg-grey">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Đội Ngũ Giáo Viên</h2>
            <p class="text-muted">Những người đồng hành, truyền cảm hứng và dẫn lối cho học viên</p>
        </div>
        
        <div class="grid-3">
            <div class="teacher-card">
                <img src="https://via.placeholder.com/120/0D2396/FFFFFF?text=GV" alt="Giáo viên" class="teacher-avatar" ">
                <h4 class="teacher-name">Ms. Nguyễn Hương</h4>
                <p class="teacher-title">Giáo viên IELTS - 8.5 IELTS</p>
                <p class="card-text">10 năm kinh nghiệm giảng dạy IELTS, từng học và làm việc tại Anh. Chuyên gia luyện Writing và Speaking.</p>
                <div style="margin-top: 16px; padding-top: 16px; border-top: 1px solid var(--color-border);">
                    <p style="font-size: 0.875rem; margin: 4px 0;"><strong>Chuyên môn:</strong> IELTS Writing, Speaking</p>
                    <p style="font-size: 0.875rem; margin: 4px 0;"><strong>Trình độ:</strong> 8.5 IELTS, MA TESOL</p>
                </div>
            </div>
            
            <div class="teacher-card">
                <img src="https://via.placeholder.com/120/F76010/FFFFFF?text=GV" alt="Giáo viên" class="teacher-avatar" ">
                <h4 class="teacher-name">Mr. Trần Minh</h4>
                <p class="teacher-title">Giáo viên 4 Kỹ Năng - TESOL</p>
                <p class="card-text">8 năm kinh nghiệm với học viên thiếu nhi và thanh thiếu niên. Chứng chỉ TESOL, phương pháp giảng dạy sinh động.</p>
                <div style="margin-top: 16px; padding-top: 16px; border-top: 1px solid var(--color-border);">
                    <p style="font-size: 0.875rem; margin: 4px 0;"><strong>Chuyên môn:</strong> Thiếu nhi, Giao tiếp</p>
                    <p style="font-size: 0.875rem; margin: 4px 0;"><strong>Trình độ:</strong> TESOL, 7.5 IELTS</p>
                </div>
            </div>
            
            <div class="teacher-card">
                <img src="https://via.placeholder.com/120/0D2396/FFFFFF?text=GV" alt="Giáo viên" class="teacher-avatar" ">
                <h4 class="teacher-name">Ms. Lê Thảo</h4>
                <p class="teacher-title">Giáo viên IELTS - 8.0 IELTS</p>
                <p class="card-text">Chuyên môn Reading và Listening. Phương pháp giảng dạy logic, dễ hiểu, giúp học viên nắm vững kỹ thuật làm bài.</p>
                <div style="margin-top: 16px; padding-top: 16px; border-top: 1px solid var(--color-border);">
                    <p style="font-size: 0.875rem; margin: 4px 0;"><strong>Chuyên môn:</strong> IELTS Reading, Listening</p>
                    <p style="font-size: 0.875rem; margin: 4px 0;"><strong>Trình độ:</strong> 8.0 IELTS, BA English</p>
                </div>
            </div>
            
            <div class="teacher-card">
                <img src="https://via.placeholder.com/120/F76010/FFFFFF?text=GV" alt="Giáo viên" class="teacher-avatar" ">
                <h4 class="teacher-name">Mr. Phạm Tuấn</h4>
                <p class="teacher-title">Giáo viên Giao Tiếp - BA Linguistics</p>
                <p class="card-text">Chuyên về giao tiếp thực tế và phát âm. Lớp học năng động, tạo môi trường thực hành tối đa cho học viên.</p>
                <div style="margin-top: 16px; padding-top: 16px; border-top: 1px solid var(--color-border);">
                    <p style="font-size: 0.875rem; margin: 4px 0;"><strong>Chuyên môn:</strong> Giao tiếp, Phát âm</p>
                    <p style="font-size: 0.875rem; margin: 4px 0;"><strong>Trình độ:</strong> BA Linguistics, CELTA</p>
                </div>
            </div>
            
            <div class="teacher-card">
                <img src="https://via.placeholder.com/120/0D2396/FFFFFF?text=GV" alt="Giáo viên" class="teacher-avatar" ">
                <h4 class="teacher-name">Ms. Hoàng Anh</h4>
                <p class="teacher-title">Giáo viên Thiếu Nhi - CELTA</p>
                <p class="card-text">5 năm kinh nghiệm với học viên 6-12 tuổi. Phương pháp giảng dạy qua trò chơi, kích thích hứng thú học tập.</p>
                <div style="margin-top: 16px; padding-top: 16px; border-top: 1px solid var(--color-border);">
                    <p style="font-size: 0.875rem; margin: 4px 0;"><strong>Chuyên môn:</strong> Thiếu nhi 6-12 tuổi</p>
                    <p style="font-size: 0.875rem; margin: 4px 0;"><strong>Trình độ:</strong> CELTA, TKT Young Learners</p>
                </div>
            </div>
            
            <div class="teacher-card">
                <img src="https://via.placeholder.com/120/F76010/FFFFFF?text=GV" alt="Giáo viên" class="teacher-avatar" ">
                <h4 class="teacher-name">Mr. Đặng Khoa</h4>
                <p class="teacher-title">Giáo viên IELTS - 8.0 IELTS</p>
                <p class="card-text">Chuyên về kỹ năng Writing Task 2 và Speaking Part 3. Phương pháp dạy tư duy logic, phân tích sâu.</p>
                <div style="margin-top: 16px; padding-top: 16px; border-top: 1px solid var(--color-border);">
                    <p style="font-size: 0.875rem; margin: 4px 0;"><strong>Chuyên môn:</strong> IELTS Writing, Speaking</p>
                    <p style="font-size: 0.875rem; margin: 4px 0;"><strong>Trình độ:</strong> 8.0 IELTS, MA Education</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Facilities -->
<section class="section">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Cơ Sở Vật Chất</h2>
            <p class="text-muted">Môi trường học tập hiện đại, đầy đủ tiện nghi</p>
        </div>
        
        <div class="grid-4">
            <div class="card text-center">
                <div style="font-size: 2.5rem; color: var(--color-orange); margin-bottom: 12px;">
                    <i class="fas fa-door-open"></i>
                </div>
                <h4>Phòng Học Rộng Rãi</h4>
                <p>Diện tích 40-60m², đủ ánh sáng, thông thoáng</p>
            </div>
            
            <div class="card text-center">
                <div style="font-size: 2.5rem; color: var(--color-orange); margin-bottom: 12px;">
                    <i class="fas fa-tv"></i>
                </div>
                <h4>Thiết Bị Hiện Đại</h4>
                <p>Máy chiếu, âm thanh chất lượng cao, bảng tương tác</p>
            </div>
            
            <div class="card text-center">
                <div style="font-size: 2.5rem; color: var(--color-orange); margin-bottom: 12px;">
                    <i class="fas fa-wifi"></i>
                </div>
                <h4>Internet Tốc Độ Cao</h4>
                <p>WiFi miễn phí, ổn định cho mọi hoạt động học tập</p>
            </div>
            
            <div class="card text-center">
                <div style="font-size: 2.5rem; color: var(--color-orange); margin-bottom: 12px;">
                    <i class="fas fa-book"></i>
                </div>
                <h4>Thư Viện Phong Phú</h4>
                <p>Tài liệu tham khảo đa dạng, khu tự học yên tĩnh</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<?php include __DIR__ . '/../includes/cta-form.php'; ?>

<?php include __DIR__ . '/../includes/footer.php'; ?>
