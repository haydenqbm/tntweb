<?php
require_once __DIR__ . '/../../config/config.php';

// Load meta data from JSON
$meta = json_decode(file_get_contents(__DIR__ . '/meta.json'), true);
$current_page = 'goc-ba-me';

include __DIR__ . '/../../includes/header.php';
include __DIR__ . '/../../includes/navbar.php';
?>

<!-- Page Header -->
<section class="hero" style="padding: 60px 0; min-height: auto;">
    <div class="container">
        <h1><?php echo htmlspecialchars($meta['hero_heading']); ?></h1>
        <p style="font-size: 1.125rem; max-width: 700px;"><?php echo htmlspecialchars($meta['hero_subheading']); ?></p>
    </div>
</section>

<!-- Achievement Stats -->
<section class="section">
    <div class="container">
        <div class="grid-4">
            <div class="card text-center" style="background: linear-gradient(135deg, #0D2396 0%, #1a3bb8 100%); color: white;">
                <div style="font-size: 3rem; margin-bottom: 12px;">🏆</div>
                <div style="font-size: 2.5rem; font-weight: 700; margin-bottom: 8px;">500+</div>
                <p style="margin: 0; opacity: 0.9;">Học viên đạt 7.0+ IELTS</p>
            </div>
            
            <div class="card text-center" style="background: linear-gradient(135deg, #F76010 0%, #fe8830 100%); color: white;">
                <div style="font-size: 3rem; margin-bottom: 12px;">🎓</div>
                <div style="font-size: 2.5rem; font-weight: 700; margin-bottom: 8px;">200+</div>
                <p style="margin: 0; opacity: 0.9;">Học viên nhận học bổng du học</p>
            </div>
            
            <div class="card text-center" style="background: linear-gradient(135deg, #A64B17 0%, #c55a1c 100%); color: white;">
                <div style="font-size: 3rem; margin-bottom: 12px;">⭐</div>
                <div style="font-size: 2.5rem; font-weight: 700; margin-bottom: 8px;">50+</div>
                <p style="margin: 0; opacity: 0.9;">Học viên đạt 8.0+ IELTS</p>
            </div>
            
            <div class="card text-center" style="background: linear-gradient(135deg, #FE9702 0%, #ffa520 100%); color: white;">
                <div style="font-size: 3rem; margin-bottom: 12px;">🌟</div>
                <div style="font-size: 2.5rem; font-weight: 700; margin-bottom: 8px;">95%</div>
                <p style="margin: 0; opacity: 0.9;">Tỷ lệ đạt target cam kết</p>
            </div>
        </div>
    </div>
</section>

<!-- IELTS High Scorers -->
<section class="section bg-grey">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Bảng Vàng IELTS 8.0+</h2>
            <p class="text-muted">Những thành tích IELTS ấn tượng nhất của học viên T&T</p>
        </div>
        
        <div class="grid-3">
            <!-- High Scorer 1 -->
            <div class="card text-center">
                <img src="https://via.placeholder.com/120/0D2396/FFFFFF?text=HV" alt="Học viên" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; margin: 0 auto 20px; border: 4px solid var(--color-orange);" ">
                <div style="display: inline-block; background: var(--color-orange); color: white; padding: 10px 24px; border-radius: 50px; font-size: 1.75rem; font-weight: 700; margin-bottom: 16px;">
                    8.5
                </div>
                <h3 style="margin-bottom: 8px;">Lê Thị Mai</h3>
                <p style="margin-bottom: 16px; color: var(--color-text-muted); font-size: 0.875rem;">L: 9.0 | R: 8.5 | W: 8.0 | S: 8.0</p>
                <p style="margin-bottom: 16px;">"Từ 6.0 lên 8.5 chỉ trong 3 tháng. Các thầy cô dạy rất tận tình, luôn động viên và chữa bài chi tiết."</p>
                <div style="padding-top: 16px; border-top: 1px solid var(--color-border);">
                    <p style="font-size: 0.875rem; margin: 0; font-weight: 600; color: var(--color-blue);">
                        🎓 Học bổng toàn phần ĐH Melbourne, Úc
                    </p>
                </div>
            </div>
            
            <!-- High Scorer 2 -->
            <div class="card text-center">
                <img src="https://via.placeholder.com/120/F76010/FFFFFF?text=HV" alt="Học viên" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; margin: 0 auto 20px; border: 4px solid var(--color-orange);" ">
                <div style="display: inline-block; background: var(--color-orange); color: white; padding: 10px 24px; border-radius: 50px; font-size: 1.75rem; font-weight: 700; margin-bottom: 16px;">
                    8.0
                </div>
                <h3 style="margin-bottom: 8px;">Nguyễn Văn Tùng</h3>
                <p style="margin-bottom: 16px; color: var(--color-text-muted); font-size: 0.875rem;">L: 8.5 | R: 9.0 | W: 7.5 | S: 7.0</p>
                <p style="margin-bottom: 16px;">"Lộ trình học rõ ràng, thi thử định kỳ giúp mình biết tiến độ. Speaking được luyện 1-1 rất hiệu quả."</p>
                <div style="padding-top: 16px; border-top: 1px solid var(--color-border);">
                    <p style="font-size: 0.875rem; margin: 0; font-weight: 600; color: var(--color-blue);">
                        🎓 Học bổng 70% ĐH Toronto, Canada
                    </p>
                </div>
            </div>
            
            <!-- High Scorer 3 -->
            <div class="card text-center">
                <img src="https://via.placeholder.com/120/0D2396/FFFFFF?text=HV" alt="Học viên" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; margin: 0 auto 20px; border: 4px solid var(--color-orange);" ">
                <div style="display: inline-block; background: var(--color-orange); color: white; padding: 10px 24px; border-radius: 50px; font-size: 1.75rem; font-weight: 700; margin-bottom: 16px;">
                    8.0
                </div>
                <h3 style="margin-bottom: 8px;">Trần Minh Châu</h3>
                <p style="margin-bottom: 16px; color: var(--color-text-muted); font-size: 0.875rem;">L: 8.0 | R: 8.5 | W: 7.5 | S: 7.5</p>
                <p style="margin-bottom: 16px;">"Phương pháp dạy Writing rất logic, giúp mình hiểu cách xây dựng bài và paraphrase hiệu quả."</p>
                <div style="padding-top: 16px; border-top: 1px solid var(--color-border);">
                    <p style="font-size: 0.875rem; margin: 0; font-weight: 600; color: var(--color-blue);">
                        🎓 Nhận offer ĐH New South Wales, Úc
                    </p>
                </div>
            </div>
            
            <!-- High Scorer 4 -->
            <div class="card text-center">
                <img src="https://via.placeholder.com/120/F76010/FFFFFF?text=HV" alt="Học viên" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; margin: 0 auto 20px; border: 4px solid var(--color-orange);" ">
                <div style="display: inline-block; background: var(--color-orange); color: white; padding: 10px 24px; border-radius: 50px; font-size: 1.75rem; font-weight: 700; margin-bottom: 16px;">
                    8.0
                </div>
                <h3 style="margin-bottom: 8px;">Phạm Quốc Anh</h3>
                <p style="margin-bottom: 16px; color: var(--color-text-muted); font-size: 0.875rem;">L: 9.0 | R: 8.0 | W: 7.0 | S: 7.5</p>
                <p style="margin-bottom: 16px;">"Các thầy cô luôn support nhiệt tình, giải đáp thắc mắc ngoài giờ học. Môi trường học vui vẻ."</p>
                <div style="padding-top: 16px; border-top: 1px solid var(--color-border);">
                    <p style="font-size: 0.875rem; margin: 0; font-weight: 600; color: var(--color-blue);">
                        🎓 Học bổng 50% ĐH Auckland, New Zealand
                    </p>
                </div>
            </div>
            
            <!-- High Scorer 5 -->
            <div class="card text-center">
                <img src="https://via.placeholder.com/120/0D2396/FFFFFF?text=HV" alt="Học viên" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; margin: 0 auto 20px; border: 4px solid var(--color-orange);" ">
                <div style="display: inline-block; background: var(--color-orange); color: white; padding: 10px 24px; border-radius: 50px; font-size: 1.75rem; font-weight: 700; margin-bottom: 16px;">
                    8.0
                </div>
                <h3 style="margin-bottom: 8px;">Hoàng Thị An</h3>
                <p style="margin-bottom: 16px; color: var(--color-text-muted); font-size: 0.875rem;">L: 8.5 | R: 8.5 | W: 7.5 | S: 7.0</p>
                <p style="margin-bottom: 16px;">"Mình học từ 5.5 lên 8.0 trong 4 tháng. Cam kết đầu ra rõ ràng nên gia đình rất yên tâm."</p>
                <div style="padding-top: 16px; border-top: 1px solid var(--color-border);">
                    <p style="font-size: 0.875rem; margin: 0; font-weight: 600; color: var(--color-blue);">
                        🎓 Du học Thạc sĩ ĐH Sydney, Úc
                    </p>
                </div>
            </div>
            
            <!-- High Scorer 6 -->
            <div class="card text-center">
                <img src="https://via.placeholder.com/120/F76010/FFFFFF?text=HV" alt="Học viên" style="width: 120px; height: 120px; border-radius: 50%; object-fit: cover; margin: 0 auto 20px; border: 4px solid var(--color-orange);" ">
                <div style="display: inline-block; background: var(--color-orange); color: white; padding: 10px 24px; border-radius: 50px; font-size: 1.75rem; font-weight: 700; margin-bottom: 16px;">
                    8.0
                </div>
                <h3 style="margin-bottom: 8px;">Đặng Minh Hà</h3>
                <p style="margin-bottom: 16px; color: var(--color-text-muted); font-size: 0.875rem;">L: 8.0 | R: 8.5 | W: 7.5 | S: 7.5</p>
                <p style="margin-bottom: 16px;">"Tài liệu học đầy đủ, các đề thi thử sát với đề thật. Giáo viên chữa Writing rất tỉ mỉ."</p>
                <div style="padding-top: 16px; border-top: 1px solid var(--color-border);">
                    <p style="font-size: 0.875rem; margin: 0; font-weight: 600; color: var(--color-blue);">
                        🎓 Học bổng toàn phần ĐH Queensland, Úc
                    </p>
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
            <p class="text-muted">Hành trình chinh phục tiếng Anh của học viên T&T</p>
        </div>
        
        <div style="max-width: 900px; margin: 0 auto;">
            <!-- Story 1 -->
            <div class="card" style="margin-bottom: 30px;">
                <div class="grid-2" style="gap: 30px; align-items: center;">
                    <img src="https://via.placeholder.com/400x300/0D2396/FFFFFF?text=Story" alt="Success story" style="width: 100%; border-radius: var(--radius-md);" ">
                    <div>
                        <div style="display: inline-block; background: var(--color-orange); color: white; padding: 8px 20px; border-radius: 20px; font-weight: 600; margin-bottom: 16px;">
                            5.0 → 8.0 IELTS
                        </div>
                        <h3 style="margin-bottom: 16px;">Từ Học Sinh Trung Bình Đến Du Học Sinh Úc</h3>
                        <p style="margin-bottom: 12px;"><strong>Lê Minh Châu</strong> - Học viên khóa IELTS Intensive</p>
                        <p style="margin-bottom: 16px;">
                            "Mình từng nghĩ IELTS 8.0 là điều không thể với mình. Nhưng với sự hướng dẫn tận tình của thầy cô T&T, mình đã vượt qua giới hạn bản thân. Giờ mình đang học tại Melbourne với học bổng toàn phần!"
                        </p>
                        <a href="<?php echo get_url('blog/cau-chuyen-hoc-vien-dat-8-0-ielts'); ?>" style="color: var(--color-blue); font-weight: 600; text-decoration: none;">
                            Đọc Câu Chuyện Đầy Đủ <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Story 2 -->
            <div class="card" style="margin-bottom: 30px;">
                <div class="grid-2" style="gap: 30px; align-items: center;">
                    <div style="order: 2;">
                        <img src="https://via.placeholder.com/400x300/F76010/FFFFFF?text=Story" alt="Success story" style="width: 100%; border-radius: var(--radius-md);" ">
                    </div>
                    <div style="order: 1;">
                        <div style="display: inline-block; background: var(--color-blue); color: white; padding: 8px 20px; border-radius: 20px; font-weight: 600; margin-bottom: 16px;">
                            A2 → B2 trong 10 tháng
                        </div>
                        <h3 style="margin-bottom: 16px;">Vượt Qua Nỗi Sợ Tiếng Anh</h3>
                        <p style="margin-bottom: 12px;"><strong>Nguyễn Minh Anh</strong> - Học viên khóa 4 Kỹ Năng</p>
                        <p style="margin-bottom: 16px;">
                            "Con từ chỗ sợ nói tiếng Anh đến giờ tự tin giao tiếp với bạn nước ngoài. Các thầy cô dạy rất kiên nhẫn, tạo môi trường học vui vẻ không áp lực. Giờ con yêu tiếng Anh!"
                        </p>
                        <a href="<?php echo get_url('blog/vuot-qua-noi-so-tieng-anh'); ?>" style="color: var(--color-blue); font-weight: 600; text-decoration: none;">
                            Đọc Câu Chuyện Đầy Đủ <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Story 3 -->
            <div class="card">
                <div class="grid-2" style="gap: 30px; align-items: center;">
                    <img src="https://via.placeholder.com/400x300/0D2396/FFFFFF?text=Story" alt="Success story" style="width: 100%; border-radius: var(--radius-md);" ">
                    <div>
                        <div style="display: inline-block; background: var(--color-orange); color: white; padding: 8px 20px; border-radius: 20px; font-weight: 600; margin-bottom: 16px;">
                            6.0 → 7.5 IELTS
                        </div>
                        <h3 style="margin-bottom: 16px;">Chinh Phục Ước Mơ Du Học Canada</h3>
                        <p style="margin-bottom: 12px;"><strong>Trần Văn Hùng</strong> - Học viên khóa IELTS Advanced</p>
                        <p style="margin-bottom: 16px;">
                            "Mình đi làm full-time nhưng vẫn đạt 7.5 IELTS nhờ lộ trình học linh hoạt buổi tối. Giáo viên luôn support nhiệt tình, chữa bài chi tiết. Giờ mình đang chuẩn bị lên đường đi Canada!"
                        </p>
                        <a href="<?php echo get_url('blog/di-lam-van-dat-7-5-ielts'); ?>" style="color: var(--color-blue); font-weight: 600; text-decoration: none;">
                            Đọc Câu Chuyện Đầy Đủ <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Achievements Gallery -->
<section class="section bg-grey">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Hình Ảnh Thành Tích</h2>
            <p class="text-muted">Khoảnh khắc vui mừng khi nhận kết quả IELTS</p>
        </div>
        
        <div class="grid-4">
            <div style="border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-md);">
                <img src="https://via.placeholder.com/300x250/0D2396/FFFFFF?text=8.0" alt="Achievement" style="width: 100%; height: 250px; object-fit: cover;" ">
            </div>
            <div style="border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-md);">
                <img src="https://via.placeholder.com/300x250/F76010/FFFFFF?text=7.5" alt="Achievement" style="width: 100%; height: 250px; object-fit: cover;" ">
            </div>
            <div style="border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-md);">
                <img src="https://via.placeholder.com/300x250/0D2396/FFFFFF?text=8.5" alt="Achievement" style="width: 100%; height: 250px; object-fit: cover;" ">
            </div>
            <div style="border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-md);">
                <img src="https://via.placeholder.com/300x250/F76010/FFFFFF?text=7.0" alt="Achievement" style="width: 100%; height: 250px; object-fit: cover;" ">
            </div>
            <div style="border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-md);">
                <img src="https://via.placeholder.com/300x250/0D2396/FFFFFF?text=8.0" alt="Achievement" style="width: 100%; height: 250px; object-fit: cover;" ">
            </div>
            <div style="border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-md);">
                <img src="https://via.placeholder.com/300x250/F76010/FFFFFF?text=6.5" alt="Achievement" style="width: 100%; height: 250px; object-fit: cover;" ">
            </div>
            <div style="border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-md);">
                <img src="https://via.placeholder.com/300x250/0D2396/FFFFFF?text=7.5" alt="Achievement" style="width: 100%; height: 250px; object-fit: cover;" ">
            </div>
            <div style="border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-md);">
                <img src="https://via.placeholder.com/300x250/F76010/FFFFFF?text=9.0" alt="Achievement" style="width: 100%; height: 250px; object-fit: cover;" ">
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div style="background: linear-gradient(135deg, #0D2396 0%, #1a3bb8 100%); padding: 60px; border-radius: var(--radius-lg); text-align: center; color: white;">
            <h2 style="color: white; margin-bottom: 20px;">Bạn Cũng Có Thể Là Người Tiếp Theo!</h2>
            <p style="font-size: 1.125rem; margin-bottom: 30px; opacity: 0.9;">
                Đăng ký ngay để nhận tư vấn lộ trình và bắt đầu hành trình chinh phục tiếng Anh của bạn
            </p>
            <a href="#registration" class="btn-primary" style="background: var(--color-orange); padding: 14px 32px; font-size: 1.125rem;">
                <i class="fas fa-rocket"></i> Đăng Ký Ngay
            </a>
        </div>
    </div>
</section>

<!-- Registration Section -->
<section class="section bg-grey" id="registration">
    <div class="container">
        <?php include __DIR__ . '/../../includes/cta-form.php'; ?>
    </div>
</section>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
