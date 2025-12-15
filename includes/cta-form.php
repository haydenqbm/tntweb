<section class="cta-section">
    <div class="container">
        <h2>Đăng ký tư vấn miễn phí ngay hôm nay!</h2>
        <p>Để lại thông tin, chuyên viên T&T sẽ liên hệ tư vấn khóa học phù hợp nhất cho con bạn</p>
        
        <form class="cta-form" id="ctaForm" method="post" action="<?php echo get_url('lien-he'); ?>">
            <input type="text" name="name" placeholder="Họ và tên" required>
            <input type="tel" name="phone" placeholder="Số điện thoại" required pattern="[0-9]{10,11}">
            <input type="email" name="email" placeholder="Email" required>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-paper-plane"></i> Đăng ký ngay
            </button>
        </form>
        
        <p style="margin-top: 16px; font-size: 0.875rem; opacity: 0.9;">
            <i class="fas fa-shield-alt"></i> Thông tin của bạn được bảo mật tuyệt đối
        </p>
    </div>
</section>
