<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $now = now();

        DB::table('categories')->insert([
            ['name' => 'Điện thoại', 'description' => 'Smartphone các loại',  'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Laptop',     'description' => 'Máy tính xách tay',    'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tablet',     'description' => 'Máy tính bảng',        'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Phụ kiện',   'description' => 'Ốp lưng, tai nghe...', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Đồng hồ',   'description' => 'Đồng hồ thông minh',   'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}