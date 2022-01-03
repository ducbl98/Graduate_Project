<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    public function run()
    {
        $provinces = [
            'Toàn Quốc',
            'Hà Nội',
            'Đà Nẵng',
            'Hồ Chí Minh',
            'Bắc Ninh',
            'Hải Phòng',
            'Điện Biên',
            'Lai Châu',
            'Sơn La',
            'Yên Bái',
            'Hoà Bình',
            'Thái Nguyên',
            'Hà Giang',
            'Lạng Sơn',
            'Quảng Ninh',
            'Bắc Giang',
            'Phú Thọ',
            'Vĩnh Phúc',
            'Hải Dương',
            'Hưng Yên',
            'Thái Bình',
            'Hà Nam',
            'Nam Định',
            'Ninh Bình',
            'Thanh Hóa',
            'Cao Bằng',
            'Nghệ An',
            'Hà Tĩnh',
            'Quảng Bình',
            'Quảng Trị',
            'Thừa Thiên Huế',
            'Quảng Nam',
            'Quảng Ngãi',
            'Bình Định',
            'Phú Yên',
            'Khánh Hòa',
            'Ninh Thuận',
            'Bắc Kạn',
            'Bình Thuận',
            'Kon Tum',
            'Gia Lai',
            'Đắk Lắk',
            'Đắk Nông',
            'Lâm Đồng',
            'Bình Phước',
            'Tây Ninh',
            'Bình Dương',
            'Đồng Nai',
            'Bà Rịa - Vũng Tàu',
            'Tuyên Quang',
            'Long An',
            'Tiền Giang',
            'Bến Tre',
            'Trà Vinh',
            'Vĩnh Long',
            'Đồng Tháp',
            'An Giang',
            'Kiên Giang',
            'Cần Thơ',
            'Hậu Giang',
            'Sóc Trăng',
            'Bạc Liêu',
            'Cà Mau',
            'Nước ngoài',
        ];
        foreach ($provinces as $province) {
            DB::table('provinces')->insert(['name' => $province]);
        }
    }
}
