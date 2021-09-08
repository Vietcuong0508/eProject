<?php

namespace Database\Seeders;

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
        //
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'name'=>'Rau Cải Ngọt',
                'price'=>23.100,
                'weight'=>'1 kg',
                'thumbnail'=>'https://orfarm.com.vn/images/products/2020/07/11/original/27_f102291_rau_muong_3962a35b44254dcda56c59ebc01f7594_large_1594437180.jpg',
            ],
            [
                'name'=>'Rau Mồng Tơi',
                'price'=>28.200,
                'weight'=>'1 kg',
                'thumbnail'=>'https://image.vtc.vn/files/ctv.congnghe4/2018/04/01/1-1421474.jpg'
            ],
            [
                'name'=>'Su Su',
                'price'=>16.400,
                'weight'=>'1 kg',
                'thumbnail'=>'https://minhcaumart.vn/media/com_eshop/products/2900053.jpg'
            ],
            [
                'name'=>'Bí Đỏ',
                'price'=>11.900,
                'weight'=>'1 kg',
                'thumbnail'=>'https://vinmec-prod.s3.amazonaws.com/images/20200710_144301_558174_bi-ngo-1.max-800x800.jpg'
            ],
            [
                'name'=>'Khoai Tây',
                'price'=>25.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://leep.imgix.net/2021/01/Ham-luong-dinh-duong-co-trong-khoai-tay.jpg?auto=compress&fm=pjpg&ixlib=php-1.2.1'
            ],
            [
                'name'=>'Măng',
                'price'=>28.200,
                'weight'=>'1 kg',
                'thumbnail'=>'https://khaitamgroup.com/wp-content/uploads/2019/12/m%C4%83ng-n%E1%BB%A9a-t%C6%B0%C6%A1i.jpg'
            ],
            [
                'name'=>'Bắp Cải Xanh',
                'price'=>25.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://mamnonhoami.edu.vn/wp-content/uploads/2015/03/bap-cai-xanh-tho-thieu-nhi-1024x1024.jpg'
            ],
            [
                'name'=>'Rau Muống',
                'price'=>33.900 ,
                'weight'=>'1 kg',
                'thumbnail'=>'https://minhcaumart.vn/media/com_eshop/products/RAUMUONG.jpg'
            ],
            [
                'name'=>'Khoai Lang',
                'price'=>28.500,
                'weight'=>'1 kg',
                'thumbnail'=>'https://i1-giadinh.vnecdn.net/2013/12/21/anh-9211-1387615838.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=aH8uqPtb6sC-q8TJWLB0dA'
            ],
            [
                'name'=>'Rau Mùi',
                'price'=>42.900,
                'weight'=>'1 kg',
                'thumbnail'=>'https://bizweb.dktcdn.net/100/355/169/articles/20159162228314.jpg?v=1557464417160'
            ],
            [
                'name'=>'Dưa Chuột',
                'price'=>38.300,
                'weight'=>'1 kg',
                'thumbnail'=>'https://media-cdn.laodong.vn/storage/newsportal/Uploaded/ctvsuckhoe/2016_08_23/0_OMUN.jpg?w=888&h=592&crop=auto&scale=both'
            ],
            [
                'name'=>'Bí Đao',
                'price'=>20.300,
                'weight'=>'1 kg',
                'thumbnail'=>'https://khuyennongtphcm.com/wp-content/uploads/2020/09/bi-xanh.jpg'
            ],
            [
                'name'=>'Rau Cải Thìa',
                'price'=>39.400,
                'weight'=>'1 kg',
                'thumbnail'=>'https://admin.nongsandungha.com/wp-content/uploads/2021/06/cai-chip-min.jpg'
            ],
            [
                'name'=>'Cam',
                'price'=>43.900,
                'weight'=>'1 kg',
                'thumbnail'=>'https://cdnfiles.bizgo.vn/401/images/2017/08/small.cam-sanh-canada1.jpg'
            ],
            [
                'name'=>'Chuối',
                'price'=>19.500,
                'weight'=>'1 kg',
                'thumbnail'=>'https://photo-cms-plo.zadn.vn/w800/Uploaded/2021/ymzmf/2018_01_17/chuoi-xanh_lqnu_thumb.jpg'
            ],
            [
                'name'=>'Khế',
                'price'=>62.500,
                'weight'=>'1 kg',
                'thumbnail'=>'https://vietblend.vn/wp-content/uploads/2018/12/qua-khe.jpg'
            ],
            [
                'name'=>'Đào',
                'price'=>35.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://suckhoedoisong.qltns.mediacdn.vn/Images/duylinh/2020/05/14/dao_2_resize.jpg'
            ],
            [
                'name'=>'Tỏi',
                'price'=>32.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://login.medlatec.vn//ImagePath/images/20200602/20200602_cong-dung-cua-toi-1.jpg'
            ],
            [
                'name'=>'Me',
                'price'=>53.900,
                'weight'=>'1 kg',
                'thumbnail'=>'https://baogialai.com.vn/dataimages/201912/original/images2835501_1qua_me_zxjy.jpg'
            ],
            [
                'name'=>'Bưởi',
                'price'=>60.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://lh6.googleusercontent.com/-mg0w7L62lOqLV3k3IO5lNSlQYrbRRZK9x6xPcbXNjQSnwugGnrHqLh9sqLJKrx01LOBWc8eWlENBsQ_zxVPBsvqOnZPFYzDnNiH2UJE-dztAzEasVhgphYPBjX_DBVvVWljCvo'
            ],
            [
                'name'=>'Đậu Đen',
                'price'=>40.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://lh3.googleusercontent.com/proxy/zI6Utb8IARyR03trA7gngSHp7uQJR1O9R6gyVMLUNVfiUYVV-IcFvZCD4sucLI1jp-xGqRZq-wukDZev29_Mwi1WIBrd2_wP4lEDcrdulbEq23ZQT_6KsiYuIz1MBnK1OLlEYX6a7nT4liBWOL2DM5xL2EBVeFZWYo-8VxQR3r_KkVc2rqEDXFSvcrdWboHVXu6zuqC00g'
            ],
            [
                'name'=>'Vải Thiều',
                'price'=>60.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://suckhoedoisong.qltns.mediacdn.vn/2014/dsadsdsa-dfd66.jpg'
            ],
            [
                'name'=>'Đậu Nành',
                'price'=>53.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://vnn-imgs-f.vgcloud.vn/2018/12/25/15/thuong-thuc-dau-nanh-theo-phong-cach-singapore-1.jpg'
            ],
            [
                'name'=>'Lê',
                'price'=>25.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://vnn-imgs-f.vgcloud.vn/2019/04/26/12/tuyet-chieu-chon-le-chuan.jpg'
            ],
            [
                'name'=>'Củ Cải',
                'price'=>22.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://image.thanhnien.vn/1024/uploaded/ngocthanh/2017_08_11/shutterstock_86116900_txvl.jpg'
            ],
            [
                'name'=>'Táo Mỹ',
                'price'=>89.000,
                'weight'=>'1 kg',
                'thumbnail'=>'http://ninhco.com/uploads/images/tao-red-delicious-my.jpg'
            ],
            [
                'name'=>'Táo Việt Nam',
                'price'=>35.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://okdeal.vn/wp-content/uploads/2020/02/5d09ade165a91.jpg'
            ],
            [
                'name'=>'Lựu',
                'price'=>80.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://login.medlatec.vn//ckfinder/userfiles/images/an-luu-co-vo-sinh-khong-1.jpg'
            ],
            [
                'name'=>'Gừng',
                'price'=>35.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://chuyeneva.vn/wp-content/uploads/2020/07/dau-bung-kinh-co-nen-uong-nuoc-gung-khong.jpg'
            ],
            [
                'name'=>'Dưa Hấu',
                'price'=>28.200,
                'weight'=>'1 kg',
                'thumbnail'=>'https://eminhatban.vn/img/uploads/images/Phuong/dau-hau.jpg'
            ],
            [
                'name'=>'Xoài',
                'price'=>60.000,
                'weight'=>'1 kg',
                'thumbnail'=>'http://pgrvietnam.org.vn/wp-content/uploads/2018/03/nhung-luu-y-khi-ap-dung-cach-lam-dep-tu-xoai-ma-it-nguoi-biet.jpg'
            ],
            [
                'name'=>'Thanh Long Trắng',
                'price'=>35.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://lh3.googleusercontent.com/proxy/whbioN8QPDKx74utjS13SnJ8sTb79exfX-jUX6_jz5wnErwzHN1mgw59gQP-W3YpP2nCP6rQCpCfc7nFrP0oW6w78OT7WwP_MiLnro-6gQiaND3YuZ2Iw9QiA-iCR89P2hb67Scw87VrTUm5'
            ],
            [
                'name'=>'Thanh Long Đỏ',
                'price'=>25.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://cf.shopee.vn/file/9e8ee39b4ae4d06d76de2d3286202805'
            ],
            [
                'name'=>'Đu Đủ',
                'price'=>25.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://hatgiongdalat.com/asset/upload/image/medium/du-du-ruot-do.jpg?v=20190410'
            ],
            [
                'name'=>'Bơ Sáp',
                'price'=>20.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://dalatfarm.net/wp-content/uploads/2020/12/qua-bo-3-1-100x100.jpg'
            ],
            [
                'name'=>'Chanh Leo',
                'price'=>30.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://media.cooky.vn/images/blog-2016/bat-mi-cong-dung-lam-dep-toan-dien-cua-chanh-day-1.jpg'
            ],
            [
                'name'=>'Roi Đỏ',
                'price'=>68.000,
                'weight'=>'1 kg',
                'thumbnail'=>'http://bizweb.dktcdn.net/thumb/grande/100/413/256/products/roi-do.jpg?v=1610180488573'
            ],
            [
                'name'=>'Ổi',
                'price'=>25.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://vtv1.mediacdn.vn/thumb_w/800/2018/10/9/qua-oi-xanh-chuan-crop-15390767439471555931383.jpeg'
            ],
            [
                'name'=>'Mít',
                'price'=>30.000,
                'weight'=>'1 kg',
                'thumbnail'=>'http://khamsuckhoedinhky.com.vn/wp-content/uploads/2018/07/loi-ich-va-tac-hai-cua-mit-doi-voi-suc-khoe-2.jpg'
            ],
            [
                'name'=>'Ngô',
                'price'=>7.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://minhcaumart.vn/media/com_eshop/products/NGONGOT.jpg'
            ],
            [
                'name'=>'Dứa',
                'price'=>29.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://suckhoedoisong.qltns.mediacdn.vn/Images/thanhloan/2016/06/26/tac-dung-chua-benh-it-biet-cua-qua-dua-1.jpg'
            ],
            [
                'name'=>'Hành Tây',
                'price'=>21.800,
                'weight'=>'1 kg',
                'thumbnail'=>'https://media-cdn.laodong.vn/storage/newsportal/2019/11/14/766121/Tac-Dung-Hanh-Onion.jpg'
            ],
            [
                'name'=>'Cà Tím',
                'price'=>30.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://thucphamdongxanh.com/wp-content/uploads/2019/09/ca-tim-ngon.jpg'
            ],
            [
                'name'=>'Kiwi',
                'price'=>200.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://hinh365.com/wp-content/uploads/2020/06/8847fdba3e2eeef45684084618041002.jpg'
            ],
            [
                'name'=>'Súp Lơ',
                'price'=>45.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://vuonbabylon.vn/wp-content/uploads/2021/01/bong-cai-xanh-vuon-babylon.jpg'
            ],
            [
                'name'=>'Nho',
                'price'=>42.500,
                'weight'=>'1 kg',
                'thumbnail'=>'https://thuviendohoa.vn/upload/images/items/hinh-anh-chum-nho-tim-tuoi-ngon-png-59-59.webp'
            ],
            [
                'name'=>'Đậu Hà Lan',
                'price'=>100.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://dalatfarm.net/wp-content/uploads/2021/06/hat-dau-ha-lan.jpg'
            ],
            [
                'name'=>'Na',
                'price'=>50.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://vinmec-prod.s3.amazonaws.com/images/20200505_140634_080820_dau-da-day-co-nen-a.max-1800x1800.jpg'
            ],
            [
                'name'=>'Cà Rốt',
                'price'=>25.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://bhfood.vn/wp-content/uploads/2020/04/caCC80-roCC82CC81t.jpg'
            ],
            [
                'name'=>'Cà Chua',
                'price'=>40.000,
                'weight'=>'1 kg',
                'thumbnail'=>'https://orfarm.com.vn/images/products/2020/07/11/original/27_f102291_rau_muong_3962a35b44254dcda56c59ebc01f7594_large_1594445009.jpg'
            ],
        ]);
    }
}
