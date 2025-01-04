<x-theme title="อาหารและเครื่องดื่ม 7-Eleven">

    {{-- slide banner --}}
    <div class="hero-banner-tbu0cq-0 dPZmDC">
        <div class="slider-fullwidth-sc-1etrns3-0 dBZNlS undefined">
            <div class="slick-slider slick-initialized" dir="ltr"><button class="slick-arrow slick-prev"><img
                        src="/static/imgs/components/slick-slider/arrow-left-circle.svg" alt=""></button>
                <div class="slick-list">
                    <div class="slick-track"
                        style="width: 10080px; opacity: 1; transform: translate3d(-4320px, 0px, 0px);">
                        <div data-index="-1" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true"
                            style="width: 1440px;">
                            <div><a href="/promotion/only/3473-allselect">
                                    <div class="item"><img
                                            src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/banner/6ce3da4304354cd8ba96fc66f271b580.jpg">
                                    </div>
                                </a></div>
                        </div>
                        <div data-index="0" class="slick-slide" tabindex="-1" aria-hidden="true"
                            style="outline: none; width: 1440px;">
                            <div><a>
                                    <div class="item"><img
                                            src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/banner/148ac65bb4884f099973087e634df55f.jpg">
                                    </div>
                                </a></div>
                        </div>
                        <div data-index="1" class="slick-slide" tabindex="-1" aria-hidden="true"
                            style="outline: none; width: 1440px;">
                            <div><a href="/promotion/only/3832-allsupreme">
                                    <div class="item"><img
                                            src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/banner/18a0299e2f314a9a918745473f7de53a.jpg">
                                    </div>
                                </a></div>
                        </div>
                        <div data-index="2" class="slick-slide slick-active slick-current is-active" tabindex="-1"
                            aria-hidden="false" style="outline: none; width: 1440px;">
                            <div><a href="/promotion/only/3473-allselect">
                                    <div class="item"><img
                                            src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/banner/6ce3da4304354cd8ba96fc66f271b580.jpg">
                                    </div>
                                </a></div>
                        </div>
                        <div data-index="3" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true"
                            style="width: 1440px;">
                            <div><a>
                                    <div class="item"><img
                                            src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/banner/148ac65bb4884f099973087e634df55f.jpg">
                                    </div>
                                </a></div>
                        </div>
                        <div data-index="4" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true"
                            style="width: 1440px;">
                            <div><a href="/promotion/only/3832-allsupreme">
                                    <div class="item"><img
                                            src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/banner/18a0299e2f314a9a918745473f7de53a.jpg">
                                    </div>
                                </a></div>
                        </div>
                        <div data-index="5" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true"
                            style="width: 1440px;">
                            <div><a href="/promotion/only/3473-allselect">
                                    <div class="item"><img
                                            src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/banner/6ce3da4304354cd8ba96fc66f271b580.jpg">
                                    </div>
                                </a></div>
                        </div>
                    </div>
                </div><button class="slick-arrow slick-next"><img
                        src="/static/imgs/components/slick-slider/arrow-right-circle.svg" alt=""></button>
                <ul class="slick-dots" style="display: block;">
                    <li class=""><button>1</button></li>
                    <li class=""><button>2</button></li>
                    <li class="slick-active"><button>3</button></li>
                </ul>
            </div>
        </div>
        <div class="line"></div>
    </div>

    <div class="product-container">
        @foreach ($foods as $food)
            <div class="product-card">
                <a href="#">
                    <div class="product-img">
                        <img src="{{ $food->image }}" alt="ชื่อสินค้า">
                    </div>
                </a>
                <div class="item-detail"><a href="#">
                        <h3 class="item-title">{{ $food->name }}</h3>
                    </a>
                    <p>{{ $food->description }}</p>
                    <p class="text-primary fw-bold">฿{{ number_format($food->price, 2) }}</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success w-100">สั่งซื้อ</button>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Product List อาหารและเบเกอรี่-->
    <div class="section-body container">
        <div class="header-sc-14g3y87-0 jsnzna">
            <h2 class="section-header__title" style="margin-top: 15px">อาหารและเบเกอรี่</h2>
        </div>

        <div class="product-container">
            <div class="product-card">
                <a href="/new-product/bakery/1528-sausage-tteokbokki-cheese">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/90e6ba2964084fe8ab6684ecc86d7aa0.jpg"
                            alt="ไส้กรอก ต๊อกบอกกีชีส สูตรเผ็ดพ่นไฟ">
                    </div>
                </a>
                <div class="item-detail"><a href="/new-product/bakery/1528-sausage-tteokbokki-cheese">
                        <h3 class="item-title">ไส้กรอก ต๊อกบอกกีชีส สูตรเผ็ดพ่นไฟ</h3>
                    </a>
                    <p>ส่งตรงจากเกาหลี เผ็ดx3</p>
                </div>
                </a>
            </div>
            <div class="product-card">
                <a href="/new-product/bakery/1527-chicken-khua-kling-riceberry-rice">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/80faaff0f813481d8849dd2d8e276ddf.jpg"
                            alt="ข้าวไรซ์เบอร์รี่ผสมข้าวหอมมะลิ คั่วกลิ้งไก่+ไข่ดาวน้ำ">
                    </div>
                </a>
                <div class="item-detail"><a href="/new-product/bakery/1527-chicken-khua-kling-riceberry-rice">
                        <h3 class="item-title">ข้าวคั่วกลิ้งไก่+ไข่ดาวน้ำ
                        </h3>
                    </a>
                    <p>ข้าวไรซ์เบอร์รี่ผสมข้าวหอมมะลิคั่วกลิ้งไก่+ไข่ดาวน้ำ
                    </p>
                </div>
                </a>
            </div>
            <div class="product-card">
                <a href="/new-product/bakery/1527-chicken-khua-kling-riceberry-rice">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/206af6d9e6c742239999ed24b0cd3997.jpg"
                            alt="เอแคลร์ นูเทลล่า">
                    </div>
                </a>
                <div class="item-detail"><a href="/new-product/bakery/1309-nutella-eclair">
                        <h3 class="item-title">เอแคลร์ นูเทลล่า</h3>
                    </a>
                    <p>Nutella Eclair</p>
                </div>
                </a>
            </div>
            <div class="product-card">
                <a href="/new-product/bakery/1527-chicken-khua-kling-riceberry-rice">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/3e945bafaf1642929e5fb9be7147138c.jpg"
                            alt="ข้าวผัดปลาสลิด">
                    </div>
                </a>
                <div class="item-detail"><a href="/new-product/bakery/1301-fried-rice-gourami-fish">
                        <h3 class="item-title">ข้าวผัดปลาสลิด</h3>
                    </a>
                    <p>Fried Rice with Gourami Fish</p>
                </div>
                </a>
            </div>
            <div class="product-card">
                <a href="/new-product/bakery/1527-chicken-khua-kling-riceberry-rice">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/d5cad690980e4399a4b407ab4b2b53f7.jpg"
                            alt="เบอร์เกอร์โฟร์ชีส ผักโขมและแฮม ">
                    </div>
                </a>
                <div class="item-detail"><a href="/new-product/bakery/475-เบอร์เกอร์โฟร์ชีส-ผักโขมและแฮม-">
                        <h3 class="item-title">เบอร์เกอร์โฟร์ชีส ผักโขมและแฮม </h3>
                    </a>
                    <p>จุใจกับชีสถึง 4 ชนิด และส่วนผสมคุณภาพที่ลงตัว</p>
                </div>
                </a>
            </div>
            <div class="product-card">
                <a href="/new-product/bakery/1527-chicken-khua-kling-riceberry-rice">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/3270a953e81246c58ef53626b5d4a2db.jpg"
                            alt="แซนวิชครัวซองค์ เบคอนไข่">
                    </div>
                </a>
                <div class="item-detail"><a href="/new-product/bakery/474-แซนวิชครัวซองค์-เบคอนไข่">
                        <h3 class="item-title">แซนวิชครัวซองค์ เบคอนไข่</h3>
                    </a>
                    <p>แป้งครัวซองค์หอมเนย สอดไส้เบคอน และไข่เต็มแผ่น</p>
                </div>
                </a>
            </div>
            <div class="product-card">
                <a href="/new-product/bakery/1527-chicken-khua-kling-riceberry-rice">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/edcd23b7bcb24de8b8cc077004bb130a.jpg"
                            alt="ข้าวไรซ์เบอร์รี่ อกไก่ย่างสมุนไพร+น้ำจิ้มซีฟู้ด ">
                    </div>
                </a>
                <div class="item-detail"><a
                        href="/new-product/bakery/323-ข้าวไรซ์เบอร์รี่-อกไก่ย่างสมุนไพร+น้ำจิ้มซีฟู้ด-">
                        <h3 class="item-title">ข้าวไรซ์เบอร์รี่
                            อกไก่ย่างสมุนไพร+น้ำจิ้มซีฟู้ด
                        </h3>
                    </a>
                    <p>เป็นแหล่งของโปรตีน, ไขมันต่ำ</p>
                </div>
                </a>
            </div>
            <div class="product-card">
                <a href="/new-product/bakery/1527-chicken-khua-kling-riceberry-rice">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/ee4a4cd5f9f44a42b971b426a610e868.jpg"
                            alt="ข้าวหอมมะลิผสมข้าวไรซ์เบอร์รี่ยำอกไก่ย่าง">
                    </div>
                </a>
                <div class="item-detail"><a href="/new-product/bakery/324-ข้าวหอมมะลิผสมข้าวไรซ์เบอร์รี่ยำอกไก่ย่าง">
                        <h3 class="item-title">
                            ข้าวหอมมะลิผสมข้าวไรซ์เบอร์รี่ยำอกไก่ย่าง
                        </h3>
                    </a>
                    <p>มีโปรตีนจากเนื้ออกไก่ล้วน</p>
                </div>
                </a>
            </div>
            <div class="product-card">
                <a href="/new-product/bakery/1527-chicken-khua-kling-riceberry-rice">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/008264781ca042a1bec0c3eefff4d4d1.jpg"
                            alt="ไส้กรอกอกไก่">
                    </div>
                </a>
                <div class="item-detail"><a href="/new-product/bakery/325-ไส้กรอกอกไก่">
                        <h3 class="item-title">ไส้กรอกอกไก่</h3>
                    </a>
                    <p>ผสมชิ้นเนื้อไก่</p>
                </div>
                </a>
            </div>
            <div class="product-card">
                <a href="/new-product/bakery/1527-chicken-khua-kling-riceberry-rice">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/ca75e5defae14d7eb0d8382a257b2bcd.jpg"
                            alt="แฮมอกไก่ (อกไก่บดขึ้นรูป)">
                    </div>
                </a>
                <div class="item-detail"><a href="/new-product/bakery/326-แฮมอกไก่-(อกไก่บดขึ้นรูป)">
                        <h3 class="item-title">แฮมอกไก่
                            (อกไก่บดขึ้นรูป)
                        </h3>
                    </a>
                    <p>ผสมชิ้นเนื้ออกไก่</p>
                </div>
                </a>
            </div>
            <div class="product-card">
                <a href="/new-product/bakery/1527-chicken-khua-kling-riceberry-rice">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/30ce8a9ee04f430abe796d033c3465a6.jpg"
                            alt="ไส้กรอกพริก ชีสโทสต์แซนวิช">
                    </div>
                </a>
                <div class="item-detail"><a href="/new-product/bakery/16-ไส้กรอกพริก-ชีสโทสต์แซนวิช">
                        <h3 class="item-title">ไส้กรอกพริก
                            ชีสโทสต์แซนวิช
                        </h3>
                    </a>
                    <p>ไส้กรอกพริก เผ็ดจัดจ้าน จากพริกสด อร่อย
                        ไม่เลี่ยน
                    </p>
                </div>
                </a>
            </div>
            <div class="product-card">
                <a href="/new-product/bakery/1527-chicken-khua-kling-riceberry-rice">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/44de5d15f0f148a49249ae138a253355.jpg"
                            alt="เปาเศรษฐี ">
                    </div>
                </a>
                <div class="item-detail"><a href="/new-product/bakery/15-เปาเศรษฐี">
                        <h3 class="item-title">เปาเศรษฐี
                        </h3>
                    </a>
                    <p>อิ่มอร่อย เต็มคำ กับซาลาเปาทรงเครื่อง
                    </p>
                </div>
                </a>
            </div>
            <div class="product-card">
                <a href="/new-product/bakery/1527-chicken-khua-kling-riceberry-rice">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/985589ea85174a2291e9d70fb39b7017.jpg"
                            alt="ข้าวญี่ปุ่นผัดกระเทียม">
                    </div>
                </a>
                <div class="item-detail"><a href="/new-product/bakery/14-ข้าวญี่ปุ่นผัดกระเทียม">
                        <h3 class="item-title">
                            ข้าวญี่ปุ่นผัดกระเทียม
                        </h3>
                    </a>
                    <p>หอมกลิ่นเนยและ กระเทียม </p>
                </div>
                </a>
            </div>
            <div class="product-card">
                <a href="/new-product/bakery/1527-chicken-khua-kling-riceberry-rice">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/92da3fa0fd4e44a48479ae7c6198c191.jpg"
                            alt="ข้าวปลาผัดพริกสด">
                    </div>
                </a>
                <div class="item-detail"><a href="/new-product/bakery/13-ข้าวปลาผัดพริกสด">
                        <h3 class="item-title">
                            ข้าวปลาผัดพริกสด
                        </h3>
                    </a>
                    <p>ปรับโฉมใหม่ หอมพริก ใบมะกรูด
                        อร่อยจัดจ้าน
                    </p>
                </div>
                </a>
            </div>
            <div class="product-card">
                <a href="/new-product/bakery/1527-chicken-khua-kling-riceberry-rice">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/67a8b60d08e146b4bdeac1e5b8c5c9eb.jpg"
                            alt="ข้าวกระเพราหมู">
                    </div>
                </a>
                <div class="item-detail"><a href="/new-product/bakery/239-ข้าวกระเพราหมู">
                        <h3 class="item-title">
                            ข้าวกระเพราหมู
                        </h3>
                    </a>
                    <p>Best Seller
                        กระเพราหมูเพิ่มขึ้น
                        10%
                    </p>
                </div>
                </a>
            </div>
            <div class="product-card">
                <a href="/new-product/bakery/1527-chicken-khua-kling-riceberry-rice">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/01e4a8182ca24b50be45cbfc15e6d27a.jpg"
                            alt="กล้วยไข่มะพร้าวอ่อน">
                    </div>
                </a>
                <div class="item-detail"><a href="/new-product/bakery/248-กล้วยไข่มะพร้าวอ่อน">
                        <h3 class="item-title">
                            กล้วยไข่มะพร้าวอ่อน
                        </h3>
                    </a>
                    <p>ของหวานสไตล์ไทย
                        กะทิผสมนมสดและมีเนื้อมะพร้าว
                        กินคู่กับกล้วยไข่นิ่มๆ
                        หอมงา
                    </p>
                </div>
                </a>
            </div>
            <div class="product-card">
                <a href="/new-product/bakery/247-ต้มข่าไก่">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/2bb4b3b2a7af4ab899612164c5d6ad30.jpg"
                            alt="ต้มข่าไก่">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/bakery/247-ต้มข่าไก่">
                        <h3 class="item-title">
                            ต้มข่าไก่
                        </h3>
                    </a>
                    <p>กับข้าวพร้อมทาน
                        อร่อยเลิศ
                        รสชาติภาคกลาง
                    </p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/bakery/246-น้ำพริกอ่อง">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/8f1e77403d614f9fbc3f536b18a72fdb.jpg"
                            alt="น้ำพริกอ่อง">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/bakery/246-น้ำพริกอ่อง">
                        <h3 class="item-title">
                            น้ำพริกอ่อง
                        </h3>
                    </a>
                    <p>กับข้าวพร้อมทาน
                        อาหารเหนือ
                    </p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/bakery/245-แกงเหลืองปลายอดมะพร้าว">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/a7f65f236e3e4fd28f879d5b15c8ce35.jpg"
                            alt="แกงเหลืองปลายอดมะพร้าว">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/bakery/245-แกงเหลืองปลายอดมะพร้าว">
                        <h3 class="item-title">
                            แกงเหลืองปลายอดมะพร้าว
                        </h3>
                    </a>
                    <p>กับข้าวพร้อมทาน
                        อาหารใต้…หรอยจังฮู้
                    </p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/bakery/244-หมูคั่วกลิ้ง">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/4f291add8fad4156b84e4db873e8252d.jpg"
                            alt="หมูคั่วกลิ้ง">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/bakery/244-หมูคั่วกลิ้ง">
                        <h3 class="item-title">
                            หมูคั่วกลิ้ง
                        </h3>
                    </a>
                    <p>กับข้าวพร้อมทาน
                        อาหารใต้…หรอยจังฮู้
                    </p>
                </div>
            </div>

            <div class="product-card">
                <a href="/new-product/bakery/242-ต้มแซ่บหมู">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/fad25b027db141d4a3de75d4d28bb21d.jpg"
                            alt="ต้มแซ่บหมู">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/bakery/242-ต้มแซ่บหมู">
                        <h3 class="item-title">
                            ต้มแซ่บหมู
                        </h3>
                    </a>
                    <p>กับข้าวพร้อมทาน
                        แซ่บอีหลี
                        อีสาน…รสเด็ด
                    </p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/bakery/241-ปีกไก่ไข่พะโล้">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/a768b5d2739b43c1b5355751c80e95db.jpg"
                            alt="ปีกไก่ไข่พะโล้">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/bakery/241-ปีกไก่ไข่พะโล้">
                        <h3 class="item-title">
                            ปีกไก่ไข่พะโล้
                        </h3>
                    </a>
                    <p>กับข้าวพร้อมทาน
                        อร่อยเลิศ
                        รสชาติภาคกลาง
                    </p>
                </div>
            </div>

            <div class="product-card">
                <a href="/new-product/bakery/243-แกงเขียวหวานลูกชิ้นปลา">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/68bafa60762c4c529a8246ddb29996de.jpg"
                            alt="แกงเขียวหวานลูกชิ้นปลา">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/bakery/243-แกงเขียวหวานลูกชิ้นปลา">
                        <h3 class="item-title">
                            แกงเขียวหวานลูกชิ้นปลา
                        </h3>
                    </a>
                    <p>กับข้าวพร้อมทาน
                        อร่อยเลิศ
                        รสชาติภาคกลาง
                    </p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/bakery/240-ปลาผัดขึ้นฉ่าย">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/9a82758f318c4db4b1bfc86259e60715.jpg"
                            alt="ปลาผัดขึ้นฉ่าย">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/bakery/240-ปลาผัดขึ้นฉ่าย">
                        <h3 class="item-title">
                            ปลาผัดขึ้นฉ่าย
                        </h3>
                    </a>
                    <p>กับข้าวพร้อมทาน
                        อร่อยเลิศ
                        รสชาติภาคกลาง
                    </p>
                </div>
            </div>
        </div>
        <hr>
    </div>

    <!-- Product List เครื่องดื่ม-->
    <div class="section-body container" style="margin-bottom: 30px">
        <div class="header-sc-14g3y87-0 jsnzna">
            <h2 class="section-header__title" style="margin-top: 15px">เครื่องดื่ม</h2>
        </div>

        <div class="product-container">
            <div class="product-card">
                <a href="/new-product/drink/3857-iced-matcha-latte">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/c46f0b8e0a6a496bb25a9dd39e69e57a.jpg"
                            alt="มัทฉะลาเต้เย็น">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/3857-iced-matcha-latte">
                        <h3 class="item-title">มัทฉะลาเต้เย็น</h3>
                    </a>
                    <p>Iced Matcha Latte</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/3856-iced-matcha-with-honey-lime">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/815c0507e27f475c9b5c22d72503cdbf.jpg"
                            alt="มัทฉะน้ำผึ้งมะนาว">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/3856-iced-matcha-with-honey-lime">
                        <h3 class="item-title">มัทฉะน้ำผึ้งมะนาว</h3>
                    </a>
                    <p>Iced Matcha with Honey Lime</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/3545-signature-toffy-coconut">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/d59b2790c2914e98af2cccaf0093041f.jpg"
                            alt="ซิกเนเจอร์ ท็อฟฟี่ โคโคนัท">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/3545-signature-toffy-coconut">
                        <h3 class="item-title">ซิกเนเจอร์ ท็อฟฟี่ โคโคนัท</h3>
                    </a>
                    <p>Signature Toffy Coconut</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/3546-signature-herbal-refresh">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/67d9869ed4e846118937c0a8bbc831cd.jpg"
                            alt="ซิกเนเจอร์ เฮอร์บัล รีเฟรช">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/3546-signature-herbal-refresh">
                        <h3 class="item-title">ซิกเนเจอร์ เฮอร์บัล รีเฟรช</h3>
                    </a>
                    <p>Signature Herbal Refresh</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/3549-cappucino">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/bc41f766a7ad48ff8cd2e26d3735ac0d.jpg"
                            alt="คาปูชิโน่ร้อน">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/3549-cappucino">
                        <h3 class="item-title">คาปูชิโน่ร้อน</h3>
                    </a>
                    <p>Hot Cappuccino</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/3544-hot-latte">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/159732546f4048f697cd5a5e6967592f.jpg"
                            alt="ลาเต้ร้อน">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/3544-hot-latte">
                        <h3 class="item-title">ลาเต้ร้อน</h3>
                    </a>
                    <p>Hot Latte</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/3543-latte-22oz">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/193b57948cd84da58f327502c421b1cc.jpg"
                            alt="ลาเต้เย็น">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/3543-latte-22oz">
                        <h3 class="item-title">ลาเต้เย็น</h3>
                    </a>
                    <p>Iced Latte</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/3542-latte-16oz">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/0d083bf9494c4bdd84ace35d5c4291d0.jpg"
                            alt="ลาเต้เย็น">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/3542-latte-16oz">
                        <h3 class="item-title">ลาเต้เย็น</h3>
                    </a>
                    <p>Iced Latte</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/3541-hot-espresso">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/6055acc7298d4908b72e80f666a7f792.jpg"
                            alt="เอสเพรสโซ่ร้อน">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/3541-hot-espresso">
                        <h3 class="item-title">เอสเพรสโซ่ร้อน</h3>
                    </a>
                    <p>Hot Espresso</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/3540-espresso-22oz">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/aaf0046229d14a68a5fc2905a38865d3.jpg"
                            alt="เอสเพรสโซ่เย็น">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/3540-espresso-22oz">
                        <h3 class="item-title">เอสเพรสโซ่เย็น</h3>
                    </a>
                    <p>Iced Espresso</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/3539-espresso-16oz">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/b89dbd23558f408cb26b2acca2bebc61.jpg"
                            alt="เอสเพรสโซ่เย็น">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/3539-espresso-16oz">
                        <h3 class="item-title">เอสเพรสโซ่เย็น</h3>
                    </a>
                    <p>Iced Espresso</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/3538-cappucino-22oz">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/e31b92c781e045afb78e6cc074495b48.jpg"
                            alt="คาปูชิโน่เย็น">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/3538-cappucino-22oz">
                        <h3 class="item-title">คาปูชิโน่เย็น</h3>
                    </a>
                    <p>Iced Cappuccino</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/3537-cappucino-16oz">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/e6a940aa74244b6a86174ce50e7d61eb.jpg"
                            alt="คาปูชิโน่เย็น">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/3537-cappucino-16oz">
                        <h3 class="item-title">คาปูชิโน่เย็น</h3>
                    </a>
                    <p>Iced Cappuccino</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/3536-americano-hot">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/cfdf5ff90e5c4c5886f0470146aec6a2.jpg"
                            alt="อเมริกาโน่ร้อน">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/3536-americano-hot">
                        <h3 class="item-title">อเมริกาโน่ร้อน</h3>
                    </a>
                    <p>Hot Americano</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/3534-americano-22oz">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/0fda0fa4708c40ac88232f4d1a755cf6.jpg"
                            alt="อเมริกาโน่เย็น">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/3534-americano-22oz">
                        <h3 class="item-title">อเมริกาโน่เย็น</h3>
                    </a>
                    <p>Iced Americano</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/3533-americano-16oz">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/157e81dc9b2b4add9f7929a181dfe4fb.jpg"
                            alt="อเมริกาโน่เย็น">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/3533-americano-16oz">
                        <h3 class="item-title">อเมริกาโน่เย็น</h3>
                    </a>
                    <p>Iced Americano</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/1015-coffee-signature">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/863bd0d6b7ad449d80f15c3fd3dbb8c5.jpg"
                            alt="กาแฟร้อน ซิกเนเจอร์">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/1015-coffee-signature">
                        <h3 class="item-title">กาแฟร้อน ซิกเนเจอร์</h3>
                    </a>
                    <p>Coffee Signature</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/1014-macchiato">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/ba49868e9d684e9bae3b21ad2f0f1fde.jpg"
                            alt="มัคคิอาโต">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/1014-macchiato">
                        <h3 class="item-title">มัคคิอาโต</h3>
                    </a>
                    <p>Macchiato</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/1013-honey-americano">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/5bd9a9bd36f6482088210dd2d1b2f801.jpg"
                            alt="อเมริกาโน่ น้ำผึ้ง">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/1013-honey-americano">
                        <h3 class="item-title">อเมริกาโน่ น้ำผึ้ง</h3>
                    </a>
                    <p>Honey Americano</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/1012-americano">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/228b0d0eddf640c2ab83aad6b14887d3.jpg"
                            alt="อเมริกาโน่">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/1012-americano">
                        <h3 class="item-title">อเมริกาโน่</h3>
                    </a>
                    <p>Americano</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/1011-cappuccino">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/852c6d5715894f008f2f799beb03c140.jpg"
                            alt="คาปูชิโน่">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/1011-cappuccino">
                        <h3 class="item-title">คาปูชิโน่</h3>
                    </a>
                    <p>Cappuccino</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/1010-latte">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/2ae809a1dd884115a848b0c063531b1e.jpg"
                            alt="ลาเต้">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/1010-latte">
                        <h3 class="item-title">ลาเต้</h3>
                    </a>
                    <p>Latte</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/1009-mocha">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/d9639bb09cd8467daa147fede639fe5c.jpg"
                            alt="มอคค่า">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/1009-mocha">
                        <h3 class="item-title">มอคค่า</h3>
                    </a>
                    <p>Mocha</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/1008-espresso">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/61091c98d28d4817b7eb866c2039f3a9.jpg"
                            alt="เอสเพรสโซ่">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/1008-espresso">
                        <h3 class="item-title">เอสเพรสโซ่</h3>
                    </a>
                    <p>Espresso</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/1006-chocolate">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/c740801521fc4c6885a31cbced444f06.jpg"
                            alt="ช็อกโกแลต">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/1006-chocolate">
                        <h3 class="item-title">ช็อกโกแลต</h3>
                    </a>
                    <p>Chocolate</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/1005-fresh-milk">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/11da6103886f4e919645dcea6f61277a.jpg"
                            alt="นมสด">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/1005-fresh-milk">
                        <h3 class="item-title">นมสด</h3>
                    </a>
                    <p>Fresh Milk</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/1004-sweety-pink">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/9d4d15052d754f66a443a9cdcca67ceb.jpg"
                            alt="นมชมพู">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/1004-sweety-pink">
                        <h3 class="item-title">นมชมพู</h3>
                    </a>
                    <p>Sweety Pink</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/1003-espresso-signature">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/ed41a8f890bb44639a2813e9d892f13d.jpg"
                            alt="เอสเพรสโซ่ซิกเนเจอร์">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/1003-espresso-signature">
                        <h3 class="item-title">เอสเพรสโซ่ซิกเนเจอร์</h3>
                    </a>
                    <p>Espresso Signature</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/1002-matcha-green-tea">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/775517fb742a459789cb99fbc5edf1e8.jpg"
                            alt="ชาเขียวนมมัทฉะ">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/1002-matcha-green-tea">
                        <h3 class="item-title">ชาเขียวนมมัทฉะ</h3>
                    </a>
                    <p>Matcha Green Tea</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/1001-chocalate-signature">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/4743845348a44f8fa60308770e4709aa.jpg"
                            alt="ช็อกโกแลต ซิกเนเจอร์">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/1001-chocalate-signature">
                        <h3 class="item-title">ช็อกโกแลต ซิกเนเจอร์</h3>
                    </a>
                    <p>Chocalate Signature</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/1000-thai-milk-tea">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/20c4b8a5e62448599a7023b62be33305.jpg"
                            alt="ชานม">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/1000-thai-milk-tea">
                        <h3 class="item-title">ชานม</h3>
                    </a>
                    <p>Thai Milk Tea</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/999-lemon-tea">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/394acefee24a49038a1f3fe7452eeaa1.jpg"
                            alt="ชามะนาว">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/999-lemon-tea">
                        <h3 class="item-title">ชามะนาว</h3>
                    </a>
                    <p>Lemon Tea</p>
                </div>
            </div>
            <div class="product-card">
                <a href="/new-product/drink/997-red-sour-soda">
                    <div class="product-img">
                        <img src="https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/de9768871f2c48ba933ae5737a1f5737.jpg"
                            alt="แดงมะนาวโซดา">
                    </div>
                </a>
                <div class="item-detail">
                    <a href="/new-product/drink/997-red-sour-soda">
                        <h3 class="item-title">แดงมะนาวโซดา</h3>
                    </a>
                    <p>Red Sour Soda</p>
                </div>
            </div>
        </div>
        <hr>
    </div>

    <!-- Custom Styles -->
    <style>
        .product-container {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            /* เลื่อนในแนวนอน */
            overflow-y: hidden;
            /* ห้ามเลื่อนในแนวตั้ง */
            scroll-behavior: smooth;
            gap: 10px;
            -ms-overflow-style: none;
            /* สำหรับ Internet Explorer 10+ */
            scrollbar-width: thin;
            /* สำหรับ Firefox ใช้แถบเลื่อนแบบบาง */
            -webkit-overflow-scrolling: touch;
            /* ให้เลื่อนด้วย scroll mouse */
            width: 100%;
            /* กำหนดขนาดให้พอดีกับพื้นที่ */
        }

        .product-container::-webkit-scrollbar {
            height: 8px;
            /* ความสูงของแถบเลื่อนแนวนอน */
        }

        .product-container::-webkit-scrollbar-thumb {
            background-color: orange;
            /* สีของแถบเลื่อน */
            border-radius: 10px;
            /* มุมโค้งของแถบเลื่อน */
            border: 2px solid #fff;
            /* ขอบของแถบเลื่อน */
        }

        .product-container::-webkit-scrollbar-thumb:hover {
            background-color: #555;
            /* สีเมื่อวางเมาส์เหนือแถบเลื่อน */
        }

        .product-container::-webkit-scrollbar-track {
            background-color: #f1f1f1;
            /* สีพื้นหลังของแถบเลื่อน */
            border-radius: 10px;
            /* มุมโค้งของแทร็ก */
        }

        .product-container {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            /* เลื่อนในแนวนอน */
            overflow-y: hidden;
            /* ห้ามเลื่อนในแนวตั้ง */
            scroll-behavior: smooth;
            gap: 10px;
            -ms-overflow-style: none;
            /* สำหรับ Internet Explorer 10+ */
            scrollbar-width: thin;
            /* สำหรับ Firefox ใช้แถบเลื่อนแบบบาง */
            -webkit-overflow-scrolling: touch;
            /* ให้เลื่อนด้วย scroll mouse */
            width: 100%;
            /* กำหนดขนาดให้พอดีกับพื้นที่ */
        }

        .product-container::-webkit-scrollbar {
            height: 8px;
            /* ความสูงของแถบเลื่อนแนวนอน */
        }

        .product-container::-webkit-scrollbar-thumb {
            background-color: orange;
            /* สีของแถบเลื่อน */
            border-radius: 10px;
            /* มุมโค้งของแถบเลื่อน */
            border: 2px solid #fff;
            /* ขอบของแถบเลื่อน */
        }

        .product-container::-webkit-scrollbar-thumb:hover {
            background-color: #555;
            /* สีเมื่อวางเมาส์เหนือแถบเลื่อน */
        }

        .product-container::-webkit-scrollbar-track {
            background-color: #f1f1f1;
            /* สีพื้นหลังของแถบเลื่อน */
            border-radius: 10px;
            /* มุมโค้งของแทร็ก */
        }


        .product-card {
            padding: 10px;
            flex: 0 0 auto;
            /* กำหนดให้การ์ดไม่ขยายเกินที่กำหนด */
            width: 100%;
            /* ค่าเริ่มต้นเต็มหน้าจอ */
            max-width: 250px;
            /* จำกัดความกว้างสูงสุด */
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease-in-out, background-color 0.3s ease-in-out;
        }

        .product-card:hover {
            transform: scale(1.05);
            background-color: green;
            /* พื้นหลังสีเขียว */
        }

        .product-card:hover .item-title {
            color: orange;
            /* ตัวหนังสือ h3 เป็นสีส้ม */
        }

        .product-card:hover .item-detail p {
            color: white;
            /* ตัวหนังสือ p เป็นสีขาว */
        }

        .product-img img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .item-title {
            font-size: 1.4rem;
            margin: 5px;
            color: green;
            /* สีเริ่มต้นของ title */
        }

        .item-detail p {
            font-size: 1.1rem;
            margin: 0 5px 5px;
            color: rgb(30, 30, 30);
            /* สีเริ่มต้นของ p */
        }

        /* Responsive Design */
        @media (max-width: 768px) {

            /* สำหรับแท็บเล็ต */
            .product-container {
                gap: 8px;
                /* ลดช่องว่างระหว่างการ์ด */
            }

            .product-card {
                width: 80%;
                /* ให้การ์ดมีขนาด 80% ของหน้าจอ */
            }

            .item-title {
                font-size: 1.2rem;
                /* ลดขนาดตัวหนังสือ */
            }

            .item-detail p {
                font-size: 1rem;
                /* ลดขนาดตัวหนังสือ */
            }
        }

        @media (max-width: 576px) {

            /* สำหรับมือถือ */
            .product-container {
                gap: 5px;
                /* ลดช่องว่างอีก */
            }

            .product-card {
                width: 80%;
                /* ให้การ์ดเต็มหน้าจอ */
            }

            .item-title {
                font-size: 1rem;
                /* ลดขนาดตัวหนังสืออีก */
            }

            .item-detail p {
                font-size: 0.9rem;
                /* ลดขนาดตัวหนังสืออีก */
            }
        }
    </style>
    {{-- slide Product --}}
    <script>
        // เลือก .product-container ทั้งหมด
        let sliders = document.querySelectorAll(".product-container");

        sliders.forEach((slider) => {
            let isMouseDown = false;
            let startX, scrollLeft;

            // สำหรับการลากด้วย mouse
            slider.addEventListener("mousedown", (e) => {
                isMouseDown = true;
                startX = e.pageX - slider.offsetLeft;
                scrollLeft = slider.scrollLeft;
            });

            slider.addEventListener("mouseleave", () => {
                isMouseDown = false;
            });

            slider.addEventListener("mouseup", () => {
                isMouseDown = false;
            });

            slider.addEventListener("mousemove", (e) => {
                if (!isMouseDown) return;
                e.preventDefault();
                const x = e.pageX - slider.offsetLeft;
                const walk = (x - startX) * 2; // ปรับความเร็วในการเลื่อน
                slider.scrollLeft = scrollLeft - walk;
            });

            // เพิ่มการรองรับ scroll mouse
            slider.addEventListener('wheel', (e) => {
                if (e.deltaY !== 0) {
                    slider.scrollLeft += e.deltaY; // ใช้ scroll ของ mouse เพื่อเลื่อน
                    e.preventDefault(); // ป้องกันการ scroll แนวตั้ง
                }
            });

            // การเลื่อนอัตโนมัติ (ไม่จำเป็นสามารถลบได้หากไม่ต้องการ)
            setInterval(() => {
                slider.scrollLeft += 1;
            }, 30); // ปรับความเร็วการเลื่อน
        });
    </script>
    {{-- slide Animation --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const slickTrack = document.querySelector(".slick-track");
            const slides = document.querySelectorAll(".slick-slide:not(.slick-cloned)");
            const slickDots = document.querySelectorAll(".slick-dots li");
            const slickPrev = document.querySelector(".slick-prev");
            const slickNext = document.querySelector(".slick-next");

            let currentIndex = 0;
            let slideWidth = getSlideWidth(); // กำหนดความกว้างเริ่มต้นของสไลด์
            const totalSlides = slides.length;

            // ฟังก์ชันสำหรับคำนวณความกว้างของสไลด์
            function getSlideWidth() {
                return document.querySelector(".slick-list").clientWidth; // ใช้ความกว้างของ container
            }

            // ฟังก์ชันอัปเดตตำแหน่งของ track และ active dot
            function slideAnimation() {
                const newPosition = -currentIndex * slideWidth;
                slickTrack.style.transition = "transform 0.5s ease-in-out";
                slickTrack.style.transform = `translate3d(${newPosition}px, 0, 0)`;
                updateActiveDot();
            }

            // ฟังก์ชันอัปเดต dot
            function updateActiveDot() {
                slickDots.forEach((dot, index) => {
                    if (index === currentIndex) {
                        dot.classList.add("slick-active");
                    } else {
                        dot.classList.remove("slick-active");
                    }
                });
            }

            // ฟังก์ชันเลื่อนไปยังสไลด์ถัดไป
            function goToNextSlide() {
                currentIndex = (currentIndex + 1) % totalSlides;
                slideAnimation();
            }

            // ฟังก์ชันเลื่อนไปยังสไลด์ก่อนหน้า
            function goToPrevSlide() {
                currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                slideAnimation();
            }

            // ฟังก์ชันอัปเดตขนาดของสไลด์เมื่อหน้าจอเปลี่ยน
            function updateSlideSize() {
                slideWidth = getSlideWidth();
                slides.forEach(slide => {
                    slide.style.width = `${slideWidth}px`; // ปรับความกว้างของแต่ละสไลด์
                });
                slickTrack.style.width = `${totalSlides * slideWidth}px`; // ปรับความกว้างรวมของ track
                slideAnimation(); // อัปเดตตำแหน่งของ track
            }

            // เมื่อคลิกที่ dot
            slickDots.forEach((dot, index) => {
                dot.addEventListener("click", function() {
                    currentIndex = index;
                    slideAnimation();
                });
            });

            // เมื่อคลิกที่ลูกศรขวา
            slickNext.addEventListener("click", goToNextSlide);

            // เมื่อคลิกที่ลูกศรซ้าย
            slickPrev.addEventListener("click", goToPrevSlide);

            // ตั้งเวลาเลื่อนอัตโนมัติ
            setInterval(goToNextSlide, 5000);

            // อัปเดตขนาดของสไลด์เมื่อเปลี่ยนขนาดหน้าจอ
            window.addEventListener("resize", updateSlideSize);

            // เรียกฟังก์ชันอัปเดตขนาดสไลด์ตอนโหลดหน้า
            updateSlideSize();
        });
    </script>
    {{-- slide Responsive --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const slickTrack = document.querySelector(".slick-track");
            const slickList = document.querySelector(".slick-list");
            const slides = document.querySelectorAll(".slick-slide");
            const realSlides = document.querySelectorAll(".slick-slide:not(.slick-cloned)");
            const slickDots = document.querySelectorAll(".slick-dots li");
            const slickPrev = document.querySelector(".slick-prev");
            const slickNext = document.querySelector(".slick-next");

            let currentIndex = 0;
            let slideWidth = getSlideWidth();
            const totalSlides = realSlides.length;

            // ฟังก์ชันสำหรับคำนวณความกว้างของสไลด์
            function getSlideWidth() {
                return slickList.clientWidth; // ใช้ความกว้างของ container
            }

            // ฟังก์ชันอัปเดตตำแหน่งของ track และ active dot
            function slideAnimation() {
                const newPosition = -currentIndex * slideWidth;
                slickTrack.style.transition = "transform 0.5s ease-in-out";
                slickTrack.style.transform = `translate3d(${newPosition}px, 0, 0)`;
                updateActiveDot();
            }

            // ฟังก์ชันอัปเดต dot
            function updateActiveDot() {
                slickDots.forEach((dot, index) => {
                    if (index === currentIndex) {
                        dot.classList.add("slick-active");
                    } else {
                        dot.classList.remove("slick-active");
                    }
                });
            }

            // ฟังก์ชันเลื่อนไปยังสไลด์ถัดไป
            function goToNextSlide() {
                currentIndex = (currentIndex + 1) % totalSlides;
                slideAnimation();
            }

            // ฟังก์ชันเลื่อนไปยังสไลด์ก่อนหน้า
            function goToPrevSlide() {
                currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                slideAnimation();
            }

            // ฟังก์ชันอัปเดตขนาดของสไลด์และจัดการ clone
            function updateSlideSize() {
                slideWidth = getSlideWidth();

                // ปรับขนาดของสไลด์ทั้งหมด (รวมถึง clone)
                slides.forEach((slide) => {
                    slide.style.width = `${slideWidth}px`;
                });

                // ปรับขนาดและตำแหน่งของ track
                slickTrack.style.width = `${slides.length * slideWidth}px`;

                // อัปเดตตำแหน่งสไลด์
                slideAnimation();
            }

            // ฟังก์ชันซ่อน clone slides ที่ไม่เกี่ยวข้อง
            function hideUnnecessaryClones() {
                slides.forEach((slide) => {
                    if (slide.classList.contains("slick-cloned")) {
                        slide.style.display = "none"; // ซ่อน clone ที่ไม่ต้องการ
                    }
                });
            }

            // เมื่อคลิกที่ dot
            slickDots.forEach((dot, index) => {
                dot.addEventListener("click", function() {
                    currentIndex = index;
                    slideAnimation();
                });
            });

            // เมื่อคลิกที่ลูกศรขวา
            slickNext.addEventListener("click", goToNextSlide);

            // เมื่อคลิกที่ลูกศรซ้าย
            slickPrev.addEventListener("click", goToPrevSlide);

            // ตั้งเวลาเลื่อนอัตโนมัติ
            setInterval(goToNextSlide, 5000);

            // อัปเดตขนาดของสไลด์และซ่อน clone เมื่อเปลี่ยนขนาดหน้าจอ
            window.addEventListener("resize", updateSlideSize);

            // เรียกฟังก์ชันตอนโหลดหน้า
            updateSlideSize();
            hideUnnecessaryClones();
        });
    </script>

</x-theme>
