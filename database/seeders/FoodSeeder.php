<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('food')->insert([
            [
                'name' => 'เอแคลร์ นูเทลล่า',
                'description' => 'เอแคลร์ นูเทลล่า',
                'price' => 29.00,
                'image' => 'https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/206af6d9e6c742239999ed24b0cd3997.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ข้าวผัดปลาสลิด',
                'description' => 'Fried Rice with Gourami Fish.',
                'price' => 49.00,
                'image' => 'https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/3e945bafaf1642929e5fb9be7147138c.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'เบอร์เกอร์โฟร์ชีส ผักโขมและแฮม',
                'description' => 'จุใจกับชีสถึง 4 ชนิด และส่วนผสมคุณภาพที่ลงตัว',
                'price' => 35.00,
                'image' => 'https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/d5cad690980e4399a4b407ab4b2b53f7.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'แซนวิชครัวซองค์ เบคอนไข่',
                'description' => 'แป้งครัวซองค์หอมเนย สอดไส้เบคอน และไข่เต็มแผ่น',
                'price' => 35.00,
                'image' => 'https://7elevenweb.s3.ap-southeast-1.amazonaws.com/product/3270a953e81246c58ef53626b5d4a2db.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'USB-C Hub',
                'description' => 'Multi-port USB-C hub for all your connectivity needs.',
                'price' => 39.99,
                'image' => 'https://picsum.photos/214',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ข้าวไรซ์เบอร์รี่ อกไก่ย่างสมุนไพร+น้ำจิ้มซีฟู้ด',
                'description' => 'เป็นแหล่งของโปรตีน, ไขมันต่ำ',
                'price' => 45.00,
                'image' => 'https://7elevenweb.s3.ap-southeast-1.amazonaws.com/edcd23b7bcb24de8b8cc077004bb130a.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ข้าวหอมมะลิผสมข้าวไรซ์เบอร์รี่ยำอกไก่ย่าง',
                'description' => 'มีโปรตีนจากเนื้ออกไก่ล้วน',
                'price' => 49.00,
                'image' => 'https://7elevenweb.s3.ap-southeast-1.amazonaws.com/ee4a4cd5f9f44a42b971b426a610e868.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ไส้กรอกอกไก่',
                'description' => 'ผสมชิ้นเนื้อไก่',
                'price' => 35.00,
                'image' => 'https://7elevenweb.s3.ap-southeast-1.amazonaws.com/008264781ca042a1bec0c3eefff4d4d1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'แฮมอกไก่',
                'description' => 'ผสมชิ้นเนื้ออกไก่ (อกไก่บดขึ้นรูป)',
                'price' => 35.00,
                'image' => 'https://7elevenweb.s3.ap-southeast-1.amazonaws.com/ca75e5defae14d7eb0d8382a257b2bcd.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ไส้กรอกพริก ชีสโทสต์แซนวิช',
                'description' => 'ไส้กรอกพริก เผ็ดจัดจ้าน จากพริกสด อร่อยไม่เลี่ยน',
                'price' => 35.00,
                'image' => 'https://7elevenweb.s3.ap-southeast-1.amazonaws.com/30ce8a9ee04f430abe796d033c3465a6.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}