<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'id'=>1,
                'name'=>'Rau Cải Ngọt',
                'price'=>23.100,
                'weight'=>'1 kg',
                'thumbnail'=>'https://orfarm.com.vn/images/products/2020/07/11/original/27_f102291_rau_muong_3962a35b44254dcda56c59ebc01f7594_large_1594437180.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=>2,
                'name'=>'Rau Mồng Tơi',
                'price'=>28.200,
                'weight'=>'1 kg',
                'thumbnail'=>'https://image.vtc.vn/files/ctv.congnghe4/2018/04/01/1-1421474.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ],
            [
                'id'=>3,
                'name'=>'Su Su',
                'price'=>16.400,
                'weight'=>'1 kg',
                'thumbnail'=>'https://minhcaumart.vn/media/com_eshop/products/2900053.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=>4,
                'name'=>'Bí Đỏ',
                'price'=>11.900,
                'weight'=>'1 kg',
                'thumbnail'=>'https://vinmec-prod.s3.amazonaws.com/images/20200710_144301_558174_bi-ngo-1.max-800x800.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ],
            [
                'id'=>5,
                'name'=>'Khoai Tây',
                'price'=>25.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://leep.imgix.net/2021/01/Ham-luong-dinh-duong-co-trong-khoai-tay.jpg?auto=compress&fm=pjpg&ixlib=php-1.2.1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=>6,
                'name'=>'Măng',
                'price'=>28.200,
                'weight'=>'1 kg',
                'thumbnail'=>'https://khaitamgroup.com/wp-content/uploads/2019/12/m%C4%83ng-n%E1%BB%A9a-t%C6%B0%C6%A1i.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=>7,
                'name'=>'Bắp Cải',
                'price'=>25.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://mamnonhoami.edu.vn/wp-content/uploads/2015/03/bap-cai-xanh-tho-thieu-nhi-1024x1024.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=>8,
                'name'=>'Rau Muống',
                'price'=>33.900 ,
                'weight'=>'1 kg',
                'thumbnail'=>'https://minhcaumart.vn/media/com_eshop/products/RAUMUONG.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=>9,
                'name'=>'Khoai Lang',
                'price'=>28.500,
                'weight'=>'1 kg',
                'thumbnail'=>'https://i1-giadinh.vnecdn.net/2013/12/21/anh-9211-1387615838.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=aH8uqPtb6sC-q8TJWLB0dA',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=>10,
                'name'=>'Rau Mùi',
                'price'=>42.900,
                'weight'=>'1 kg',
                'thumbnail'=>'https://bizweb.dktcdn.net/100/355/169/articles/20159162228314.jpg?v=1557464417160',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=>11,
                'name'=>'Dưa Chuột',
                'price'=>38.300,
                'weight'=>'1 kg',
                'thumbnail'=>'https://media-cdn.laodong.vn/storage/newsportal/Uploaded/ctvsuckhoe/2016_08_23/0_OMUN.jpg?w=888&h=592&crop=auto&scale=both',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=>12,
                'name'=>'Bí Đao',
                'price'=>20.300,
                'weight'=>'1 kg',
                'thumbnail'=>'https://khuyennongtphcm.com/wp-content/uploads/2020/09/bi-xanh.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=>13,
                'name'=>'Rau Cải Thìa',
                'price'=>39.400,
                'weight'=>'1 kg',
                'thumbnail'=>'https://admin.nongsandungha.com/wp-content/uploads/2021/06/cai-chip-min.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=>14,
                'name'=>'Cam',
                'price'=>43.900,
                'weight'=>'1 kg',
                'thumbnail'=>'https://cdnfiles.bizgo.vn/401/images/2017/08/small.cam-sanh-canada1.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=>15,
                'name'=>'Chuối',
                'price'=>19.500,
                'weight'=>'1 kg',
                'thumbnail'=>'https://photo-cms-plo.zadn.vn/w800/Uploaded/2021/ymzmf/2018_01_17/chuoi-xanh_lqnu_thumb.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=>16,
                'name'=>'Khế',
                'price'=>62.500,
                'weight'=>'1 kg',
                'thumbnail'=>'https://vietblend.vn/wp-content/uploads/2018/12/qua-khe.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=>17,
                'name'=>'Đào',
                'price'=>35.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://suckhoedoisong.qltns.mediacdn.vn/Images/duylinh/2020/05/14/dao_2_resize.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=>18,
                'name'=>'Tỏi',
                'price'=>32.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://login.medlatec.vn//ImagePath/images/20200602/20200602_cong-dung-cua-toi-1.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=>19,
                'name'=>'Me',
                'price'=>53.900,
                'weight'=>'1 kg',
                'thumbnail'=>'https://baogialai.com.vn/dataimages/201912/original/images2835501_1qua_me_zxjy.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id'=>20,
                'name'=>'Bưởi',
                'price'=>60.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://lh6.googleusercontent.com/-mg0w7L62lOqLV3k3IO5lNSlQYrbRRZK9x6xPcbXNjQSnwugGnrHqLh9sqLJKrx01LOBWc8eWlENBsQ_zxVPBsvqOnZPFYzDnNiH2UJE-dztAzEasVhgphYPBjX_DBVvVWljCvo',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
