<x-theme title="หิวเมื่อไหร่ ก็แวะมา... 7-ELEVEN">

    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


        <style>
            .card:hover {
                transform: scale(1.05);
            }

            .item-thumb img {
                width: 100%;
                height: auto;
                border-radius: 5px;
            }

            .slick-arrow {
                background: none;
                border: none;
            }

            .slick-arrow img {
                width: 30px;
                height: 30px;
            }

            .carousel-control-prev,
            .carousel-control-next {
                top: 50%;
                transform: translateY(-50%);
                width: 50px;
                height: 50px;
                background-color: rgba(0, 0, 0, 0.5);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .carousel-control-prev {
                left: 5%;
            }

            .carousel-control-next {
                right: 5%;
            }

            .carousel-control-prev-icon,
            .carousel-control-next-icon {
                background-size: 20px 20px;
            }

            .card-title {
                font-weight: bold;
            }

            .promotion-images {
                display: flex;
                gap: 10px;
                overflow-x: hidden;
                /* Hide the scrollbar */
            }

            .promotion-description {
                margin-top: 10px;
            }

            .promotion-item {
                flex-shrink: 0;
                display: inline-block;
                width: 100%;
                animation: scrollAnimation 20s linear infinite;
            }

            /* Stop scrolling on hover */
            .promotion-item:hover {
                animation-play-state: paused;
            }

            /* Define animation for scrolling items */
            @keyframes scrollAnimation {
                0% {
                    transform: translateX(0);
                }

                100% {
                    transform: translateX(-100%);
                }
            }

            /* Apply border-radius to images */
            .promotion-images img {
                border-radius: 8px;
            }

            .carousel-indicators {
                position: absolute;
                bottom: 5px;
                /* ระยะจากด้านล่าง */
                left: 40%;
                transform: translateX(-50%);
                display: flex;
                justify-content: center;
                gap: 10px;
            }

            .carousel-indicators button:hover {
                transform: scale(1.2);
            }

            .carousel-indicators button {
                border-radius: 50%;
                border: none;
            }

            .carousel-indicators .active {
                background-color: green;
                /* สีพื้นหลังสำหรับจุดที่ active */
            }
        </style>

    </head>

    <body>
        <div class="row gx-0 min-vh-100">
            <div class="row gx-0 min-vh-100">

                {{-- Banner --}}
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <!-- Indicators -->
                    <div class="carousel-indicators">
                        <button style="width: 12px; height: 12px;" type="button" data-bs-target="#carouselExample"
                            data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button style="width: 12px; height: 12px;" type="button" data-bs-target="#carouselExample"
                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button style="width: 12px; height: 12px;" type="button" data-bs-target="#carouselExample"
                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button style="width: 12px; height: 12px;" type="button" data-bs-target="#carouselExample"
                            data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button style="width: 12px; height: 12px;" type="button" data-bs-target="#carouselExample"
                            data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <!-- เพิ่ม indicator ตามจำนวนสไลด์ -->
                    </div>

                    <!-- Slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="https://www.7eleven.co.th/promotion/tmw/2227-tmw">
                                <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/banner/da06632bb2864a4596aee53c5b055052.jpg"
                                    class="d-block w-100" alt="Slide 1">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="https://www.7eleven.co.th/campaign-privilege/campaign/3925-luckydraw">
                                <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/banner/77e66e3f41304228a483ae91d65dfaf8.jpg"
                                    class="d-block w-100" alt="Slide 2">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="https://7eleventh.page.link/R7U5">
                                <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/banner/54913738fed44c57b80ba61522376581.jpg"
                                    class="d-block w-100" alt="Slide 3">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="https://7eleventh.page.link/R7U5">
                                <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/banner/ba52c174ad4348ffacf60c272206070a.jpg"
                                    class="d-block w-100" alt="Slide 3">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="https://7eleventh.page.link/R7U5">
                                <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/banner/c8d673a9a0824e559b9969fc705ce28b.jpg"
                                    class="d-block w-100" alt="Slide 3">
                            </a>
                        </div>
                    </div>
                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                {{-- Reccommend --}}
                <div class="container mt-2">
                    <!-- Header Section -->
                    <div class="d-flex justify-content-between align-items-center m-2">
                        <h2 class="text-success fw-bold">พิเศษสำหรับคุณ</h2>
                        <a class="text-dark text-decoration-none" href="/promotion">ดูเพิ่มเติม</a>
                    </div>

                    <!-- Section Body -->
                    <div class="section-body m-2">
                        <div class="row">
                            <!-- Left Column -->
                            <div class="col-md-5">
                                <div class="card">
                                    <a href="/promotion/trade/605-promotion" class="stretched-link">
                                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/feature/c46af1e054474c439ba955e5b44c7b96.jpg"
                                            class="card-img-top" alt="โปรโมชั่น">
                                    </a>
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="col-md-7">
                                <!-- Top Image -->
                                <div class="mb-6">
                                    <div class="card">
                                        <a href="/promotion/trade/605-promotion" class="stretched-link">
                                            <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/banner/f4f908cb1d1b4f87b360f34a1343219a.jpg"
                                                class="card-img-top" alt="โปรโมชั่นเพิ่มเติม">
                                        </a>
                                    </div>
                                </div>

                                <!-- Bottom Row -->
                                <div class="row pt-3">
                                    <!-- Card 1 -->
                                    <div class="col-md-6">
                                        <div class="card h-100">
                                            <div class="row g-0 align-items-center">
                                                <!-- Image Section -->
                                                <div class="col-md-5">
                                                    <a href="/promotion/trade/605-promotion" class="stretched-link">
                                                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/2f7ea73a41aa4c2eaef24265c1983d24.jpg"
                                                            class="img-fluid rounded-start" alt="คู่บ้าน ราคาพิเศษ"
                                                            style="object-fit: cover; height: 100%;"></a>
                                                </div>
                                                <!-- Card Body Section -->
                                                <div class="col-md-7 p-2">
                                                    <h5 class="card-title">คู่บ้าน ราคาพิเศษ</h5>
                                                    <p class="card-text">24 พ.ย. 67 - 3 ม.ค. 68</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 2 -->
                                    <div class="col-md-6">
                                        <div class="card h-100">
                                            <div class="row g-0 align-items-center">
                                                <!-- Image Section -->
                                                <div class="col-md-5">
                                                    <a href="/promotion/trade/605-promotion" class="stretched-link">
                                                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/c4406301e8db489ca51e89b81602de8f.jpg"
                                                            class="img-fluid rounded-start" alt="คู่ครัว ราคาพิเศษ"
                                                            style="object-fit: cover; height: 100%;"></a>
                                                </div>
                                                <!-- Card Body Section -->
                                                <div class="col-md-7 p-2">
                                                    <h5 class="card-title">คู่ครัว ราคาพิเศษ</h5>
                                                    <p class="card-text">24 พ.ย. 67 - 3 ม.ค. 68</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
                {{-- Product --}}
                <div class="container mt-4">
                    <div class="d-flex justify-content-between align-items-center m-2">
                        <h2 class="text-success fw-bold">มีอะไรใหม่อยากให้ลอง</h2>
                        <a class="text-dark text-decoration-none" href="/promotion">ดูเพิ่มเติม</a>
                    </div>

                    <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-flex justify-content-center flex-wrap">
                                    <!-- Item 1 -->
                                    <div class="card mx-2" style="max-width: 13rem;">
                                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/c46f0b8e0a6a496bb25a9dd39e69e57a.jpg"
                                            class="card-img-top" alt="Product 1">
                                        <div class="card-body">
                                            <h5 class="card-title">มัทฉะลาเต้เย็น</h5>
                                            <p class="card-text">Iced Matcha Latte</p>
                                        </div>
                                    </div>
                                    <!-- Item 2 -->
                                    <div class="card mx-2" style="max-width: 13rem;">
                                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/815c0507e27f475c9b5c22d72503cdbf.jpg"
                                            class="card-img-top" alt="Product 2">
                                        <div class="card-body">
                                            <h5 class="card-title">มัทฉะน้ำผึ้งมะนาว</h5>
                                            <p class="card-text">Iced Matcha with Honey Lime</p>
                                        </div>
                                    </div>
                                    <!-- Item 3 -->
                                    <div class="card mx-2" style="max-width: 13rem;">
                                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/d59b2790c2914e98af2cccaf0093041f.jpg"
                                            class="card-img-top" alt="Product 3">
                                        <div class="card-body">
                                            <h5 class="card-title">ซิกเนเจอร์ ท็อฟฟี่ โคโคนัท</h5>
                                            <p class="card-text">Signature Toffy Coconut</p>
                                        </div>
                                    </div>
                                    <!-- Item 4 -->
                                    <div class="card mx-2" style="max-width: 13rem;">
                                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/67d9869ed4e846118937c0a8bbc831cd.jpg"
                                            class="card-img-top" alt="Product 4">
                                        <div class="card-body">
                                            <h5 class="card-title">ซิกเนเจอร์ เฮอร์บัล รีเฟรช</h5>
                                            <p class="card-text">Signature Herbal Refresh</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex justify-content-center flex-wrap">
                                    <!-- Item 5 -->
                                    <div class="card mx-2" style="max-width: 13rem;">
                                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/193b57948cd84da58f327502c421b1cc.jpg"
                                            class="card-img-top" alt="Product 5">
                                        <div class="card-body">
                                            <h5 class="card-title">ลาเต้เย็น</h5>
                                            <p class="card-text">Iced Latte</p>
                                        </div>
                                    </div>
                                    <!-- Item 6 -->
                                    <div class="card mx-2" style="max-width: 13rem;">
                                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/aaf0046229d14a68a5fc2905a38865d3.jpg"
                                            class="card-img-top" alt="Product 6">
                                        <div class="card-body">
                                            <h5 class="card-title">เอสเพรสโซ่เย็น</h5>
                                            <p class="card-text">Iced Espresso</p>
                                        </div>
                                    </div>
                                    <!-- Item 7 -->
                                    <div class="card mx-2" style="max-width: 13rem;">
                                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/e6a940aa74244b6a86174ce50e7d61eb.jpg"
                                            class="card-img-top" alt="Product 7">
                                        <div class="card-body">
                                            <h5 class="card-title">คาปูชิโน่เย็น</h5>
                                            <p class="card-text">Iced Cappuccino</p>
                                        </div>
                                    </div>
                                    <!-- Item 8 -->
                                    <div class="card mx-2" style="max-width: 13rem;">
                                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/cfdf5ff90e5c4c5886f0470146aec6a2.jpg"
                                            class="card-img-top" alt="Product 8">
                                        <div class="card-body">
                                            <h5 class="card-title">คาราเมลมอคค่า</h5>
                                            <p class="card-text">Caramel Mocha</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#productCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                {{-- Promotion --}}
                <section class="promotion mt-4">
                    <div class="container">
                        <div class="row">
                            <!-- Promotion section 1 -->
                            <div class="col-md-6">
                                <div class="promotion-header">
                                    <div class="d-flex justify-content-between align-items-center m-2">
                                        <h2 class="text-success fw-bold">โปรดีๆ มีให้ทุกวัน</h2>
                                        <a class="text-dark text-decoration-none" href="/promotion">ดูเพิ่มเติม</a>
                                    </div>
                                </div>
                                <div class="promotion-content">
                                    <!-- Image Scroll Section -->
                                    <div class="promotion-images">
                                        <div class="promotion-item">
                                            <a href="/promotion/trade/3786-pro">
                                                <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/promotion/0850107e95864701be3f4e3863942e96.jpg"
                                                    class="d-block w-100" alt="Promotion 1">
                                            </a>
                                        </div>
                                        <div class="promotion-item">
                                            <a href="/promotion/trade/3785-pro">
                                                <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/promotion/9ec27b19ceb04eadb456d38e58c7f402.jpg"
                                                    class="d-block w-100" alt="Promotion 2">
                                            </a>
                                        </div>
                                        <!-- เพิ่มภาพอื่นๆ ตามต้องการ -->
                                    </div>
                                    <!-- Description Text Section -->
                                    <div class="promotion-description">
                                        <div class="row m-2 text-secondary">
                                            <h5 class="fw-bold">บุฟเฟ่ต์คุ้มเลือกได้</h5>
                                            <p>24 พ.ย. 67 - 3 ม.ค. 68</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Promotion section 2 -->
                            <div class="col-md-6">
                                <div class="promotion-header">
                                    <div class="d-flex justify-content-between align-items-center m-2">
                                        <h2 class="text-success fw-bold">ลดอย่างแรง</h2>
                                        <a class="text-dark text-decoration-none" href="/promotion">ดูเพิ่มเติม</a>
                                    </div>
                                </div>
                                <div class="promotion-content">
                                    <!-- Image Scroll Section -->
                                    <div class="promotion-images">
                                        <div class="promotion-item">
                                            <a href="/promotion/sale/269-ลดอย่างแรง-3">
                                                <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/promotion/450b699205924b59a9b315b0de49d73a.jpg"
                                                    class="d-block w-100" alt="Sale 1">
                                            </a>
                                        </div>
                                        <div class="promotion-item">
                                            <a href="/promotion/sale/32-ลดอย่างแรง-2">
                                                <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/promotion/8d88a4939f564fd384aac58e206c2b70.jpg"
                                                    class="d-block w-100" alt="Sale 2">
                                            </a>
                                        </div>
                                        <!-- เพิ่มภาพอื่นๆ ตามต้องการ -->
                                    </div>
                                    <!-- Description Text Section -->
                                    <div class="promotion-description">
                                        <div class="row m-2 text-secondary">
                                            <h5 class="fw-bold">ลดอย่างแรง 7 วันเท่านั้น</h5>
                                            <p>ราคาพิเศษ สินค้ามีจำนวนจำกัด</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- youtube --}}
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center m-2">
                        <h2 class="text-success fw-bold">วีดีโอและโพสต์ล่าสุด</h2>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <!-- Video Section -->
                            <div class="col-lg-9 col-md-12 mb-4">
                                <div class="yt-iframe mb-4">
                                    <iframe src="https://www.youtube.com/embed/kEA9v5vCdYI?si=0w4_U8PsIQQ-_Uyk"
                                        frameborder="0" loading="lazy"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen class="w-100" style="height: 300px;"></iframe>
                                </div>
                                <div class="row mb-4">
                                    <!-- Subscribe Section -->
                                    <div class="col-2 mb-4">
                                        <div class="subscribe text-center">
                                            <div class="subscribe-logo">
                                                <img src="https://www.7eleven.co.th/static/imgs/home/video/logo.svg?timestamp=1.6.22"
                                                    alt="7-11" width="180" height="180" />
                                            </div>
                                            <h3 class="subscribe-title">7-Eleven Thailand</h3>
                                            <div id="___ytsubscribe_0">
                                                <iframe
                                                    src="https://www.youtube.com/subscribe_embed?usegapi=1&amp;channel=7ElevenThailand&amp;layout=default&amp;count=default"
                                                    frameborder="0" width="121" height="24"
                                                    class="w-100"></iframe>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Thumbnail Section -->
                                    <div class="col-10">
                                        <div class="row">
                                            <!-- Thumbnail 1 -->
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="item-thumb">
                                                    <div class="yt-iframe">
                                                        <iframe
                                                            src="https://www.youtube.com/embed/VTY137tEcXQ?si=1LgQ-iWaGfE9Q1aJ"
                                                            frameborder="0" loading="lazy"
                                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                            allowfullscreen class="w-100"
                                                            style="height: 200px;"></iframe>
                                                    </div>
                                                    <h5 class="item-thumb__title fw-bold mt-2">
                                                        แสตมป์เสน่ห์ไทยใคร ๆ ก็หลงรัก
                                                    </h5>
                                                    <div class="item-thumb__detail">
                                                        <p>แสตมป์เซเว่นมาแล้ววววว...</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Thumbnail 2 -->
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="item-thumb">
                                                    <div class="yt-iframe">
                                                        <iframe
                                                            src="https://www.youtube.com/embed/cchtBkFwFvs?si=ZX9-2-_ceSzqTdry"
                                                            frameborder="0" loading="lazy"
                                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                            allowfullscreen class="w-100"
                                                            style="height: 200px;"></iframe>
                                                    </div>
                                                    <h5 class="item-thumb__title fw-bold mt-2">
                                                        แลกเลิฟ...ลุ้นล้าน ให้คุณแลกของพรีเมียม
                                                    </h5>
                                                    <div class="item-thumb__detail">
                                                        <p>เลิฟเยอะ ก็ให้เยอะ...</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Thumbnail 3 -->
                                            <div class="col-md-4 col-sm-6 mb-3">
                                                <div class="item-thumb">
                                                    <div class="yt-iframe">
                                                        <iframe
                                                            src="https://www.youtube.com/embed/50OWgVGB-uQ?si=25RjqM5IRTN5gALJ"
                                                            frameborder="0" loading="lazy"
                                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                            allowfullscreen class="w-100"
                                                            style="height: 200px;"></iframe>
                                                    </div>
                                                    <h5 class="item-thumb__title fw-bold mt-2">
                                                        หิวหรือช้อปบอกJoeyPROXIE
                                                    </h5>
                                                    <div class="item-thumb__detail">
                                                        <p>หนุ่ม ๆ Joey Phuwasit...</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Facebook Section -->
                            <div class="col-lg-3 col-md-12">
                                <div class="fb-iframe mb-4">
                                    <iframe
                                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F7ElevenThailand%2F&amp;tabs=timeline&amp;width=280&amp;height=650&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=false&amp;appId=627785070637265"
                                        width="100%" height="650" scrolling="no" frameborder="0"
                                        allowtransparency="true" allow="encrypted-media" class="w-100"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Bottom --}}
                <div class="container my-5 d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-wrap justify-content-start align-items-center">
                        <!-- Item 1 -->
                        <div class="me-5 mb-3">
                            <a class="item d-block text-center" href="https://www.cpall.co.th/" target="_blank">
                                <img src="https://www.7eleven.co.th/static/imgs/home/network/cp-all.png"
                                    alt="CP All" class="img-fluid">
                            </a>
                        </div>
                        <!-- Item 2 -->
                        <div class="me-5 mb-3">
                            <a class="item d-block text-center" href="http://www.counterservice.co.th/"
                                target="_blank">
                                <img src="https://www.7eleven.co.th/static/imgs/home/network/counter-service.png"
                                    alt="Counter Service" class="img-fluid">
                            </a>
                        </div>
                        <!-- Item 3 -->
                        <div class="me-5 mb-3">
                            <a class="item d-block text-center" href="/service/lifestyle/178-speed-d"
                                target="_blank">
                                <img src="https://www.7eleven.co.th/static/imgs/home/network/speed-d.jpg"
                                    alt="Speed D" class="img-fluid">
                            </a>
                        </div>
                        <!-- Item 4 -->
                        <div class="me-5 mb-3">
                            <a class="item d-block text-center" href="https://www.shopat24.com/" target="_blank">
                                <img src="https://www.7eleven.co.th/static/imgs/home/network/shop-24.png"
                                    alt="Shop At 24" class="img-fluid">
                            </a>
                        </div>
                        <!-- Item 5 -->
                        <div class="me-5 mb-3">
                            <a class="item d-block text-center" href="https://www.exta.co.th/" target="_blank">
                                <img src="https://www.7eleven.co.th/static/imgs/home/network/xta.jpg" alt="XTA"
                                    class="img-fluid">
                            </a>
                        </div>
                        <!-- Item 6 -->
                        <div class="me-5 mb-3">
                            <a class="item d-block text-center" href="https://www.pim.ac.th/" target="_blank">
                                <img src="https://www.7eleven.co.th/static/imgs/home/network/pim.jpg" alt="PIM"
                                    class="img-fluid">
                            </a>
                        </div>
                        <!-- Item 7 -->
                        <div class="mb-3">
                            <a class="item d-block text-center" href="http://www.bellinee.co.th/" target="_blank">
                                <img src="https://www.7eleven.co.th/static/imgs/home/network/bellinee.jpg"
                                    alt="Bellinee" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>



                <style>
                    .uniform-img {
                        height: 100px;
                        /* ตั้งค่าความสูงที่ต้องการ */
                        object-fit: contain;
                        /* ปรับขนาดรูปภาพให้คงอัตราส่วนและไม่บิดเบี้ยว */
                    }
                </style>

            </div>
        </div>

        <script>
            // Auto-scroll for the carousels
            const carousel1 = new bootstrap.Carousel(document.getElementById('promotion-carousel-1'), {
                interval: 3000, // Set the speed of auto scroll (3000ms = 3 seconds)
                ride: 'carousel'
            });

            const carousel2 = new bootstrap.Carousel(document.getElementById('promotion-carousel-2'), {
                interval: 3000,
                ride: 'carousel'
            });

            // Pause carousel on hover
            document.getElementById('promotion-carousel-1').addEventListener('mouseover', () => {
                carousel1.pause();
            });
            document.getElementById('promotion-carousel-1').addEventListener('mouseout', () => {
                carousel1.cycle();
            });

            document.getElementById('promotion-carousel-2').addEventListener('mouseover', () => {
                carousel2.pause();
            });
            document.getElementById('promotion-carousel-2').addEventListener('mouseout', () => {
                carousel2.cycle();
            });
        </script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    </body>

    </html>

</x-theme>
