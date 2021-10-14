<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use phpDocumentor\Reflection\Types\Integer;
use PhpParser\Node\Expr\Cast\Double;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('products')->truncate();
        \Illuminate\Support\Facades\DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Đồ chơi ấn bong bóng màu sắc cầu vồng vui nhộn giúp giảm căng thẳng',
                'price' => 100000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'name' => 'Lật Đật Chú Heo Đồ Chơi Tinh Nghịch Chớp Mắt Có Chuông Nhẹ Nhàng Cho Bé Yêu',
                'price' => 20000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'name' => 'Mô hình xe ô tô Mazda Cx5 tỉ lệ 1:36 hãng Welly màu đỏ',
                'price' => 50000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'name' => '[RẺ VÔ ĐỊCH] Pop it Giá Rẻ, Đồ Chơi Bóp Tay Xả Stress, Bóp Bong Bóng Nhiều Màu Sắc Giảm Căng Thẳng.',
                'price' => 150000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 5,
                'name' => 'Móc Chìa Khóa/ Tượng Hình Gấu Bông Đính Đá Diy',
                'price' => 45000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 6,
                'name' => 'Đồ Chơi Trứng Kỳ Lân Rainbocorns Chính Hãng ZuRu',
                'price' => 25000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 7,
                'name' => 'Đồ chơi nhấn bong bóng màu cầu vồng hình kỳ lân sáng tạo giúp giảm căng thẳng cho lớp học trẻ em',
                'price' => 20000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 8,
                'name' => 'Poster Truy Nã One Piece kích thước 42*29 cm – Tranh Nhân vật hoạt hình One Piece dùng trang trí nội thất',
                'price' => 25000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 9,
                'name' => 'Gấu bông trà sữa chân trâu mini',
                'price' => 20000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 10,
                'name' => 'Dưa hấu bông mini',
                'price' => 10000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
