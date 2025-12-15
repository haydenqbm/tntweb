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

<!-- Statistics -->
<section class="section">
    <div class="container">
        <div class="grid-4">
            <div class="card text-center">
                <div style="font-size: 2.5rem; font-weight: 700; color: var(--color-orange); margin-bottom: 8px;">4.9/5</div>
                <p style="font-weight: 600;">Điểm Đánh Giá</p>
            </div>
            
            <div class="card text-center">
                <div style="font-size: 2.5rem; font-weight: 700; color: var(--color-orange); margin-bottom: 8px;">98%</div>
                <p style="font-weight: 600;">Phụ Huynh Hài Lòng</p>
            </div>
            
            <div class="card text-center">
                <div style="font-size: 2.5rem; font-weight: 700; color: var(--color-orange); margin-bottom: 8px;">2,500+</div>
                <p style="font-weight: 600;">Đánh Giá Tích Cực</p>
            </div>
            
            <div class="card text-center">
                <div style="font-size: 2.5rem; font-weight: 700; color: var(--color-orange); margin-bottom: 8px;">85%</div>
                <p style="font-weight: 600;">Học Viên Từ Giới Thiệu</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Grid -->
<section class="section bg-grey">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Phản Hồi Từ Phụ Huynh</h2>
        </div>
        
        <div class="grid-2">
            <!-- Testimonial 1 -->
            <div class="testimonial-card">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                    <div style="color: var(--color-orange); font-size: 1.25rem;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span style="font-size: 0.875rem; color: var(--color-text-muted);">
                        <i class="fas fa-clock"></i> 2 tuần trước
                    </span>
                </div>
                <div class="testimonial-content">
                    <p>"Con học tại T&T được 6 tháng, tiến bộ vượt bậc. Từ chỗ sợ nói tiếng Anh, giờ con tự tin giao tiếp với bạn nước ngoài. Các thầy cô dạy rất tận tình, luôn động viên và khen ngợi để con có động lực học tập. Tôi rất hài lòng với chất lượng giảng dạy ở đây."</p>
                </div>
                <div class="testimonial-author">
                    <img src="https://via.placeholder.com/60/0D2396/FFFFFF?text=PH" alt="Phụ huynh" ">
                    <div>
                        <div class="author-name">Chị Nguyễn Thị Lan</div>
                        <div class="author-title">Phụ huynh học viên Minh Anh (12 tuổi)</div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="testimonial-card">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                    <div style="color: var(--color-orange); font-size: 1.25rem;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span style="font-size: 0.875rem; color: var(--color-text-muted);">
                        <i class="fas fa-clock"></i> 1 tháng trước
                    </span>
                </div>
                <div class="testimonial-content">
                    <p>"Ban đầu tôi lo lắng vì con học nhiều nhưng tiếng Anh vẫn yếu. Nhưng sau 4 tháng học IELTS tại T&T, con đã đạt 7.0 Overall, đủ điểm du học Canada. Lộ trình học rõ ràng, giáo viên cam kết đầu ra nên tôi rất yên tâm. Cảm ơn T&T đã giúp con thực hiện ước mơ du học."</p>
                </div>
                <div class="testimonial-author">
                    <img src="https://via.placeholder.com/60/F76010/FFFFFF?text=PH" alt="Phụ huynh" ">
                    <div>
                        <div class="author-name">Anh Trần Minh Tuấn</div>
                        <div class="author-title">Phụ huynh học viên Trần Hà (17 tuổi)</div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="testimonial-card">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                    <div style="color: var(--color-orange); font-size: 1.25rem;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span style="font-size: 0.875rem; color: var(--color-text-muted);">
                        <i class="fas fa-clock"></i> 1 tháng trước
                    </span>
                </div>
                <div class="testimonial-content">
                    <p>"Điều tôi ấn tượng nhất là sự tận tâm của giáo viên. Cô luôn feedback chi tiết sau mỗi buổi học, báo cáo tiến độ hàng tháng rất rõ ràng. Con học từ A2 lên B1 chỉ trong 5 tháng. Phương pháp giảng dạy hiện đại, con rất thích học và không thấy áp lực."</p>
                </div>
                <div class="testimonial-author">
                    <img src="https://via.placeholder.com/60/0D2396/FFFFFF?text=PH" alt="Phụ huynh" ">
                    <div>
                        <div class="author-name">Chị Lê Thị Hương</div>
                        <div class="author-title">Phụ huynh học viên Lê Khang (14 tuổi)</div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 4 -->
            <div class="testimonial-card">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                    <div style="color: var(--color-orange); font-size: 1.25rem;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span style="font-size: 0.875rem; color: var(--color-text-muted);">
                        <i class="fas fa-clock"></i> 2 tháng trước
                    </span>
                </div>
                <div class="testimonial-content">
                    <p>"Cơ sở vật chất hiện đại, phòng học đầy đủ tiện nghi. Lớp học chỉ 10 em nên giáo viên chăm sóc kỹ từng em. Con học rất vui, mỗi buổi đều háo hức đến lớp. Giá cả hợp lý so với chất lượng giảng dạy. Tôi đã giới thiệu cho nhiều bạn bè cùng cho con học ở đây."</p>
                </div>
                <div class="testimonial-author">
                    <img src="https://via.placeholder.com/60/F76010/FFFFFF?text=PH" alt="Phụ huynh" ">
                    <div>
                        <div class="author-name">Anh Phạm Đức Long</div>
                        <div class="author-title">Phụ huynh học viên Phạm Anh (9 tuổi)</div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 5 -->
            <div class="testimonial-card">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                    <div style="color: var(--color-orange); font-size: 1.25rem;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span style="font-size: 0.875rem; color: var(--color-text-muted);">
                        <i class="fas fa-clock"></i> 2 tháng trước
                    </span>
                </div>
                <div class="testimonial-content">
                    <p>"Tôi đã đổi 3 trung tâm nhưng con vẫn không tiến bộ. Đến T&T, các thầy cô kiểm tra kỹ và tư vấn lộ trình phù hợp. Giờ con học được 8 tháng, từ vựng tăng rất nhiều, điểm kiểm tra ở trường cải thiện rõ rệt. Cảm ơn T&T đã không bỏ rơi con."</p>
                </div>
                <div class="testimonial-author">
                    <img src="https://via.placeholder.com/60/0D2396/FFFFFF?text=PH" alt="Phụ huynh" ">
                    <div>
                        <div class="author-name">Chị Hoàng Thị Mai</div>
                        <div class="author-title">Phụ huynh học viên Hoàng Nam (11 tuổi)</div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 6 -->
            <div class="testimonial-card">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                    <div style="color: var(--color-orange); font-size: 1.25rem;">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span style="font-size: 0.875rem; color: var(--color-text-muted);">
                        <i class="fas fa-clock"></i> 3 tháng trước
                    </span>
                </div>
                <div class="testimonial-content">
                    <p>"Chính sách học phí minh bạch, có nhiều ưu đãi khi đăng ký dài hạn. Quan trọng là cam kết đầu ra rõ ràng, nếu không đạt được học lại miễn phí nên tôi rất yên tâm. Con đã đạt 6.5 IELTS như cam kết. Đội ngũ tư vấn nhiệt tình, luôn hỗ trợ khi cần."</p>
                </div>
                <div class="testimonial-author">
                    <img src="https://via.placeholder.com/60/F76010/FFFFFF?text=PH" alt="Phụ huynh" ">
                    <div>
                        <div class="author-name">Anh Đặng Văn Hùng</div>
                        <div class="author-title">Phụ huynh học viên Đặng My (16 tuổi)</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video Testimonials -->
<section class="section">
    <div class="container">
        <div class="text-center mb-lg">
            <h2>Phản Hồi Qua Video</h2>
            <p class="text-muted">Nghe trực tiếp chia sẻ từ phụ huynh</p>
        </div>
        
        <div class="grid-3">
            <div class="card" style="padding: 0; overflow: hidden;">
                <div style="position: relative; padding-top: 56.25%; background: var(--color-blue);">
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 3rem; color: white;">
                        <i class="fas fa-play-circle"></i>
                    </div>
                </div>
                <div style="padding: var(--spacing-md);">
                    <h4>Phụ huynh học viên Minh Châu</h4>
                    <p style="font-size: 0.875rem; color: var(--color-text-muted);">Con đạt 8.0 IELTS sau 3 tháng học</p>
                </div>
            </div>
            
            <div class="card" style="padding: 0; overflow: hidden;">
                <div style="position: relative; padding-top: 56.25%; background: var(--color-orange);">
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 3rem; color: white;">
                        <i class="fas fa-play-circle"></i>
                    </div>
                </div>
                <div style="padding: var(--spacing-md);">
                    <h4>Phụ huynh học viên Bảo An</h4>
                    <p style="font-size: 0.875rem; color: var(--color-text-muted);">Con thích học và tự giác hơn nhiều</p>
                </div>
            </div>
            
            <div class="card" style="padding: 0; overflow: hidden;">
                <div style="position: relative; padding-top: 56.25%; background: var(--color-blue);">
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 3rem; color: white;">
                        <i class="fas fa-play-circle"></i>
                    </div>
                </div>
                <div style="padding: var(--spacing-md);">
                    <h4>Phụ huynh học viên Quốc Anh</h4>
                    <p style="font-size: 0.875rem; color: var(--color-text-muted);">Giáo viên tận tâm, cam kết đầu ra rõ ràng</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Write Review CTA -->
<section class="section bg-grey">
    <div class="container">
        <div style="max-width: 700px; margin: 0 auto; text-align: center;">
            <div style="font-size: 3rem; color: var(--color-orange); margin-bottom: 20px;">
                <i class="fas fa-comment-alt-dots"></i>
            </div>
            <h2 style="margin-bottom: 16px;">Chia Sẻ Trải Nghiệm Của Bạn</h2>
            <p style="margin-bottom: 30px;">Nếu bạn là phụ huynh của học viên T&T, hãy chia sẻ trải nghiệm để giúp các phụ huynh khác có thêm thông tin</p>
            <a href="#registration" class="btn-primary" style="padding: 14px 32px; font-size: 1.125rem;">
                <i class="fas fa-edit"></i> Viết Đánh Giá
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" id="registration">
    <div class="container">
        <?php include __DIR__ . '/../../includes/cta-form.php'; ?>
    </div>
</section>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
