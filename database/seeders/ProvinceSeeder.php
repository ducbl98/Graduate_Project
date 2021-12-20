<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    public function run()
    {
        $provinces =[
        'Thành phố Hà Nội',
        'Tỉnh Lào Cai',
        'Tỉnh Điện Biên',
        'Tỉnh Lai Châu',
        'Tỉnh Sơn La',
        'Tỉnh Yên Bái',
        'Tỉnh Hoà Bình',
        'Tỉnh Thái Nguyên',
        'Tỉnh Hà Giang',
        'Tỉnh Lạng Sơn',
        'Tỉnh Quảng Ninh',
        'Tỉnh Bắc Giang',
        'Tỉnh Phú Thọ',
        'Tỉnh Vĩnh Phúc',
        'Tỉnh Bắc Ninh',
        'Tỉnh Hải Dương',
        'Thành phố Hải Phòng',
        'Tỉnh Hưng Yên',
        'Tỉnh Thái Bình',
        'Tỉnh Hà Nam',
        'Tỉnh Nam Định',
        'Tỉnh Ninh Bình',
        'Tỉnh Thanh Hóa',
        'Tỉnh Cao Bằng',
        'Tỉnh Nghệ An',
        'Tỉnh Hà Tĩnh',
        'Tỉnh Quảng Bình',
        'Tỉnh Quảng Trị',
        'Tỉnh Thừa Thiên Huế',
        'Thành phố Đà Nẵng',
        'Tỉnh Quảng Nam',
        'Tỉnh Quảng Ngãi',
        'Tỉnh Bình Định',
        'Tỉnh Phú Yên',
        'Tỉnh Khánh Hòa',
        'Tỉnh Ninh Thuận',
        'Tỉnh Bắc Kạn',
        'Tỉnh Bình Thuận',
        'Tỉnh Kon Tum',
        'Tỉnh Gia Lai',
        'Tỉnh Đắk Lắk',
        'Tỉnh Đắk Nông',
        'Tỉnh Lâm Đồng',
        'Tỉnh Bình Phước',
        'Tỉnh Tây Ninh',
        'Tỉnh Bình Dương',
        'Tỉnh Đồng Nai',
        'Tỉnh Bà Rịa - Vũng Tàu',
        'Thành phố Hồ Chí Minh',
        'Tỉnh Tuyên Quang',
        'Tỉnh Long An',
        'Tỉnh Tiền Giang',
        'Tỉnh Bến Tre',
        'Tỉnh Trà Vinh',
        'Tỉnh Vĩnh Long',
        'Tỉnh Đồng Tháp',
        'Tỉnh An Giang',
        'Tỉnh Kiên Giang',
        'Thành phố Cần Thơ',
        'Tỉnh Hậu Giang',
        'Tỉnh Sóc Trăng',
        'Tỉnh Bạc Liêu',
        'Tỉnh Cà Mau'
    ];
        foreach ($provinces as $province){
            DB::table('provinces')->insert(['name' => $province]);
        }
    }
}
