<x-theme title="7-Eleven ลงทะเบียน">

    <head>
        <!-- นำเข้า Bootstrap CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    </head>

    <body>
        <div class="container-fluid p-0">
            <div class="row gx-0 min-vh-100">
                <!-- Banner Section -->
                <div class="col-12 col-md-7 d-flex flex-column justify-content-center text-center text-white custom-banner"
                    style="background-image: url('https://www.7eleven.co.th/static/imgs/register/bg.jpg'); background-size: cover; background-position: center;">
                    <div class="position-relative p-3" style="text-align: center; margin-top: -70%; margin-left: 50%">
                        <img src="https://www.7eleven.co.th/static/imgs/register/banner-circle.png" alt=""
                            class="img-fluid mb-3 d-none d-md-inline" style="margin-top: 70%">
                        <div class="col-8 position-relative"
                            style="text-align: center; margin-top: -70%; margin-left: 15%">
                            <h2 style="font-size: 48px; font-weight: bold; color: green; border-radius: 10px;">
                                มาเป็นสมาชิกเว็บไซต์ <br />7-ELEVEN กัน</h2>
                            <p style="color: black;">รับโปรโมชั่นดีๆ คูปองส่วนลดก่อนใคร เล่นเกม ร่วมกิจกรรม
                                สะสมเหรียญอัพเลเวล ไว้แข่งกับเพื่อนๆ ทั่วประเทศ พร้อมลุ้นของรางวัล
                                และสิทธิพิเศษมากมายจาก 7-Eleven</p>
                        </div>
                    </div>
                    <!-- รูป Banner ตรงกลาง -->
                    <img src="https://www.7eleven.co.th/static/imgs/register/banner-image.png" alt=""
                        class="img-fluid position-absolute bottom-0 d-none d-md-block"
                        style="width: 50%; margin-left:10%">
                </div>


                <!-- Form Section -->
                <div class="col-12 col-md-5 d-flex justify-content-center align-items-center custom-form bg-white mt-5">
                    <div class="card shadow-sm p-4" style="width: 100%; max-width: 400px;">
                        <div class="card-body">
                            <h1 class="h4 text-center fw-bold mb-3">ลงทะเบียนเซเว่นเว็บ</h1>
                            <h2 class="h6 text-center fw-bold text-muted mb-4">รับโปรดีๆ มากมาย</h2>

                            <div class="d-grid gap-2 mb-3">
                                <a href="#"
                                    class="btn btn-primary d-flex align-items-center justify-content-center">
                                    <img src="https://www.7eleven.co.th/static/imgs/icons/icon-facebook-2.svg"
                                        alt="" class="me-2" style="width: 20px;">เข้าสู่ระบบด้วย Facebook
                                </a>
                                <a href="#"
                                    class="btn btn-danger d-flex align-items-center justify-content-center">
                                    <img src="https://www.7eleven.co.th/static/imgs/icons/icon-g-normal.svg"
                                        alt="" class="me-2" style="width: 20px;">เข้าสู่ระบบด้วย Google
                                </a>
                            </div>

                            <div class="text-center mb-3"><span>or</span></div>

                            <!-- Email Input -->
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text bg-white">
                                        <img src="https://www.7eleven.co.th/static/imgs/icons/icon-email.svg"
                                            alt="" style="width: 20px;">
                                    </span>
                                    <input type="email" class="form-control" placeholder="อีเมล" name="email" />
                                </div>
                            </div>

                            <!-- Password Input -->
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text bg-white">
                                        <img src="https://www.7eleven.co.th/static/imgs/icons/icon-password.svg"
                                            alt="" style="width: 20px;">
                                    </span>
                                    <input type="password" class="form-control"
                                        placeholder="รหัสผ่าน (ความยาว 6-15 ตัวอักษร)" minLength="6" maxLength="15"
                                        name="password" />
                                    <span class="input-group-text"><img
                                            src="https://www.7eleven.co.th/static/imgs/icons/icon-eye.svg"
                                            alt="" /></span>
                                </div>
                            </div>

                            <!-- Confirm Password Input -->
                            <div class="mb-3">
                                <div class="input-group">
                                    <span class="input-group-text bg-white">
                                        <img src="https://www.7eleven.co.th/static/imgs/icons/icon-password.svg"
                                            alt="" style="width: 20px;">
                                    </span>
                                    <input type="password" class="form-control" placeholder="กรอกรหัสผ่านอีกครั้ง"
                                        minLength="6" maxLength="15" name="password" />
                                    <span class="input-group-text"><img
                                            src="https://www.7eleven.co.th/static/imgs/icons/icon-eye.svg"
                                            alt="" /></span>
                                </div>

                                <!-- Buttons -->
                                <div class="d-grid gap-2 mb-3">
                                    <button class="btn btn-success fw-bold">ยืนยัน</button>
                                    <a href="#" class="btn btn-outline-secondary fw-bold">เป็นสมาชิกอยู่แล้ว
                                        ?</a>
                                </div>

                                <!-- Forgot Password -->
                                <div class="text-end">
                                    <a href="#" class="text-decoration-none"
                                        style="font-size: 22px">ลืมรหัสผ่าน?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- นำเข้า Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

            <script>
                function adjustBannerVisibility() {
                    var screenWidth = window.innerWidth;
                    var banner = document.querySelector('.custom-banner');

                    if (screenWidth < 768) {
                        banner.classList.add('d-none'); // ซ่อนเมื่อหน้าจอเล็กกว่า 768px
                    } else {
                        banner.classList.remove('d-none'); // แสดงเมื่อหน้าจอใหญ่กว่า 768px
                    }
                }

                // เรียกฟังก์ชัน adjustBannerVisibility เมื่อตรวจจับขนาดหน้าจอ
                window.addEventListener('resize', adjustBannerVisibility);

                // เรียกใช้งานทันทีเมื่อโหลดหน้าเพจ
                adjustBannerVisibility();
            </script>
    </body>

</x-theme>
