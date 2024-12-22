<x-theme title="หิวเมื่อไหร่ ก็แวะมา... 7-ELEVEN">

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

                <div class="container my-5">
                    <h1 class="text-center mb-4">Product List</h1>
            
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                        @foreach ($foods as $food)
                            <div class="col">
                                <div class="card h-100">
                                    <img src="{{ $food->image }}" class="card-img-top" alt="{{ $food->name }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $food->name }}</h5>
                                        <p class="card-text">{{ $food->description }}</p>
                                        <p class="text-primary fw-bold">${{ number_format($food->price, 2) }}</p>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-primary w-100">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
            
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
