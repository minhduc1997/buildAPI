<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Cache;


/*
|----------------------------------------------------------- ---------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/webgames', function (Request $request) {
    $user =
        [
            "content" => [
                [
                    "id" => 1,
                    "orderGame" => 1,
                    "nameGameEn" => "en",
                    "nameGameLo" => "lo",
                    "nameGameZh" => "zh",
                    "nameGameVi" => "vi",
                    "urlGame" => "url",
                    "pathImage" => "path",
                    "status" => 1,
                    "approved" => 1,
                    "createdTime" => "2020-10-28",
                    "createdBy" => "1"
                ],
                [
                    "id" => 1001,
                    "orderGame" => 1,
                    "nameGameEn" => "en",
                    "nameGameLo" => "lo",
                    "nameGameZh" => "zh",
                    "nameGameVi" => "vi",
                    "urlGame" => "url",
                    "pathImage" => "path",
                    "status" => 1,
                    "approved" => 0,
                    "createdTime" => "2020-10-28",
                    "createdBy" => null
                ],
                [
                    "id" => 1002,
                    "orderGame" => 1,
                    "nameGameEn" => "en",
                    "nameGameLo" => "lo",
                    "nameGameZh" => "zh",
                    "nameGameVi" => "vi",
                    "urlGame" => "url",
                    "pathImage" => "path",
                    "status" => 1,
                    "approved" => 0,
                    "createdTime" => "2020-10-28",
                    "createdBy" => null
                ],
                [
                    "id" => 1003,
                    "orderGame" => 1,
                    "nameGameEn" => "en",
                    "nameGameLo" => "lo",
                    "nameGameZh" => "zh",
                    "nameGameVi" => "vi",
                    "urlGame" => "url",
                    "pathImage" => "path",
                    "status" => 1,
                    "approved" => 0,
                    "createdTime" => "2020-10-28",
                    "createdBy" => null
                ],
                [
                    "id" => 1004,
                    "orderGame" => 1,
                    "nameGameEn" => "en",
                    "nameGameLo" => "lo",
                    "nameGameZh" => "zh",
                    "nameGameVi" => "vi",
                    "urlGame" => "url",
                    "pathImage" => "path",
                    "status" => 1,
                    "approved" => 0,
                    "createdTime" => "2020-10-28",
                    "createdBy" => null
                ],
                [
                    "id" => 1005,
                    "orderGame" => 1,
                    "nameGameEn" => "en",
                    "nameGameLo" => "lo",
                    "nameGameZh" => "zh",
                    "nameGameVi" => "vi",
                    "urlGame" => "url",
                    "pathImage" => "https=>//i.picsum.photos/id/237/536/354.jpg?hmac=i0yVXW1ORpyCZpQ-CknuyV-jbtU7_x9EBQVhvT5aRr0",
                    "status" => 1,
                    "approved" => 0,
                    "createdTime" => "2020-10-28",
                    "createdBy" => null
                ],
                [
                    "id" => 1006,
                    "orderGame" => 1,
                    "nameGameEn" => "en",
                    "nameGameLo" => "lo",
                    "nameGameZh" => "zh",
                    "nameGameVi" => "vi",
                    "urlGame" => "url",
                    "pathImage" => "https=>//i.picsum.photos/id/237/536/354.jpg?hmac=i0yVXW1ORpyCZpQ-CknuyV-jbtU7_x9EBQVhvT5aRr0",
                    "status" => 1,
                    "approved" => 0,
                    "createdTime" => "2020-10-28",
                    "createdBy" => null
                ],
                [
                    "id" => 1007,
                    "orderGame" => 1,
                    "nameGameEn" => "en",
                    "nameGameLo" => "lo",
                    "nameGameZh" => "zh",
                    "nameGameVi" => "vi",
                    "urlGame" => "url",
                    "pathImage" => "https=>//i.picsum.photos/id/237/536/354.jpg?hmac=i0yVXW1ORpyCZpQ-CknuyV-jbtU7_x9EBQVhvT5aRr0",
                    "status" => 1,
                    "approved" => 0,
                    "createdTime" => "2020-10-28",
                    "createdBy" => null
                ],
                [
                    "id" => 1008,
                    "orderGame" => 1,
                    "nameGameEn" => "en",
                    "nameGameLo" => "lo",
                    "nameGameZh" => "zh",
                    "nameGameVi" => "vi",
                    "urlGame" => "url",
                    "pathImage" => "https=>//i.picsum.photos/id/237/536/354.jpg?hmac=i0yVXW1ORpyCZpQ-CknuyV-jbtU7_x9EBQVhvT5aRr0",
                    "status" => 1,
                    "approved" => 0,
                    "createdTime" => "2020-10-28",
                    "createdBy" => null
                ],
                [
                    "id" => 1009,
                    "orderGame" => 1,
                    "nameGameEn" => "en",
                    "nameGameLo" => "lo",
                    "nameGameZh" => "zh",
                    "nameGameVi" => "vi",
                    "urlGame" => "url",
                    "pathImage" => "https=>//i.picsum.photos/id/237/536/354.jpg?hmac=i0yVXW1ORpyCZpQ-CknuyV-jbtU7_x9EBQVhvT5aRr0",
                    "status" => 1,
                    "approved" => 0,
                    "createdTime" => "2020-10-28",
                    "createdBy" => null
                ],
                [
                    "id" => 1010,
                    "orderGame" => 1,
                    "nameGameEn" => "en",
                    "nameGameLo" => "lo",
                    "nameGameZh" => "zh",
                    "nameGameVi" => "vi",
                    "urlGame" => "url",
                    "pathImage" => "https=>//i.picsum.photos/id/237/536/354.jpg?hmac=i0yVXW1ORpyCZpQ-CknuyV-jbtU7_x9EBQVhvT5aRr0",
                    "status" => 1,
                    "approved" => 0,
                    "createdTime" => "2020-10-28",
                    "createdBy" => null
                ]


            ],

            "last" => true,
            "totalPages" => 1,
            "totalElements" => 11,
            "numberOfElements" => 11,
            "first" => true,
            "sort" => [

                "direction" => "ASC",
                "property" => "nameGameEn",
                "ignoreCase" => true,
                "nullHandling" => "NATIVE",
                "descending" => false,
                "ascending" => true

            ],
            "size" => 20,
            "number" => 0
        ];

    return response()->json($user, Response::HTTP_OK);
});
Route::get('/test-print', function (Request $request) {
    $data = [
        'name', 'age', 'address'
    ];
    return view('welcome', $data);
});
Route::get('/look-up-the-bill', function (Request $request) {
    $user =
        [
            "wsResponse" => [
                // [
                //     "bankDate"=> "19/06/2020 11:14:06",
                //     "custName"=> "Ms Lattanaphone",
                //     "isdn"=> "2099901718",
                //     "serialNo"=> "VIC-19C",
                //     "blockNo"=> "001132",
                //     "invoiceNumber"=> "0056552",
                //     "invoiceNo"=> "VIC-19C-001132-0056552",
                //     "paymentAmountOrg"=> "111000",
                //     "paymentAmountFormat"=> " 111,000.00",
                //     "collectionStaffCode"=> "SOMMAY",
                //     "collectionGroupName"=> "VIC 03 (Phonexay xaysettha district)",
                //     "paymentId"=> 831206980,
                //     "custId"=> 15377,
                //     "amountTax"=> 111000.0,
                //     "paymentAmount"=> 111000.0,
                //     "tax"=> "10",
                //     "address"=> "Luangrabang, Xieng ngern, 001",
                //     "provinceName"=> "Borikhamsay",
                //     "districName"=> "Phongsaly"
                // ],

                // [
                //     "bankDate"=> "19/06/2020 11:14:06",
                //     "custName"=> "Ms Lattanaphone",
                //     "isdn"=> "2099901718",
                //     "serialNo"=> "VIC-19C",
                //     "blockNo"=> "001132",
                //     "invoiceNumber"=> "0056552",
                //     "invoiceNo"=> "VIC-19C-001132-0056552",
                //     "paymentAmountOrg"=> "111000",
                //     "paymentAmountFormat"=> " 111,000.00",
                //     "collectionStaffCode"=> "SOMMAY",
                //     "collectionGroupName"=> "VIC 03 (Phonexay xaysettha district)",
                //     "paymentId"=> 831206980,
                //     "custId"=> 15377,
                //     "amountTax"=> 111000.0,
                //     "paymentAmount"=> 111000.0,
                //     "tax"=> "10",
                //     "address"=> "Luangrabang, Xieng ngern, 001",
                //     "provinceName"=> "Borikhamsay",
                //     "districName"=> "Phongsaly"
                // ],



            ],
        ];

    return response()->json($user, Response::HTTP_OK);
});
Route::get('/view-recipt-info', function (Request $request) {
    $user =
        [
            "wsResponse" => [
                [
                    "id" => 1,
                    "tax" => "10",
                    "address" => "Luangrabang, Xieng ngern, 001",
                    "provinceName" => "Borikhamsay",
                    "districName" => "Phongsaly",
                    "img" => "../images/ucare-image/ucare-login/1000X1000_EN.png",
                ],

                [
                    "id" => 2,
                    "tax" => "10",
                    "address" => "Luangrabang, Xieng ngern, 001",
                    "provinceName" => "Borikhamsay",
                    "districName" => "Phongsaly",
                    "img" => "../images/ucare-image/ucare-login/1000X1000_EN.png",
                ],

                [
                    "id" => 2,
                    "tax" => "10",
                    "address" => "Luangrabang, Xieng ngern, 001",
                    "provinceName" => "Borikhamsay",
                    "districName" => "Phongsaly",
                    "img" => "../images/ucare-image/ucare-login/1000X1000_EN.png",
                ],
            ],
        ];

    return response()->json($user, Response::HTTP_OK);
});
Route::post('/UserLogin', function (Request $request) {
    // dd($request->all());
    $user = [
        'sessionId' => 'sessionId',
        'username' => 'username',
    ];
    return response()->json($user, Response::HTTP_OK);
});

Route::post('/UserLogout', function (Request $request) {
    // dd($request->all());

    return response()->json(Response::HTTP_OK);
});

Route::get('/redis', function (Request $request) {
    // $r = Redis::set('name', 'Taylor');
    // $c1 =  Cache::store('redis');
    // $c = Cache::store('redis')->put('bar1', 'baz', 600); // 10 Minutes

    // $getCache = $c1->get('name');
    
     $r = Redis::set('name1', 'Taylor1');
    dd($r);
    dd($r,$c,$getCache);
});


Route::get('/php', function (Request $request) {

        
        
    $string =  'Package Prepaid SIM 020-ແພັກເກັດເບີເຕີມເງິນ 020-Gói cước di động trả trước-
    Introduction:-ກ່ຽວກັບຜະລິດຕະພັນ:-giới thiệu:-
    Price 10.000 KIP- ເບີມືຖື ລາຄາພຽງ 10.000 ກີບ-Giá 10.000 KIP-
    Activate first time, press call 121 and press 1- ເປີດນໍາໃຊ້ຄັ້ງທໍາອິດ ກົດ 121 ແລ້ວໂທອອກ ກົດ 1-Để kích hoạt, quý khách vui lòng gọi 121 và bấm phím 1.-
    Promotion for the 1st time activated number: 5.000 KIP added to the basic account- ເປີດນຳໃຊ້ໃໝ່ ມີເງິນບັນຊີພື້ນຖານ 5.000 ກີບ-Khuyến mại cho thuê bao kích hoạt mới: Có 5,000 Kip trong tài khoản gốc.
    10.000 KIP added bonus for the account after successful register. Get free internet data of 1.000 MB use in 03 days.-ລົງທະບຽນຂໍ້ມູນສຳເລັດຮັບເພີ່ມເງິນໂປຼໂມຊັນ 10.000 ກີບ ແລະ ດາຕ້າອິນເຕີເນັດ 1.000MB ນຳໃຊ້ໄດ້ 03 ວັນ-Sau khi đăng ký thành công được cộng 10,000 Kip vào tài khoản khuyến mại và 1,000MB, sử dụng trong 3 ngày-
    Register SIM information-ວິທີລົງທະບຽນຂໍ້ມູນເບີ-cách đăng ký thông tin:-
    SelfRegister SIM number by Lao KYC-ລົງທະບຽນດ້ວຍຕົວເອງຜ່ານ Lao KYC-Quý khách có thể tự đăng ký qua app Lao KYC-
    Call rate:-ອັດຕາຄ່າໂທ:-Chính sách gọi:-
    Domestic call: 800 KIP/minute (calculated in seconds)- ໂທພາຍໃນປະເທດ: 800 ກີບ/ນາທີ (ຄິດໄລ່ເປັນວິນາທີ )-gọi nội mạng: 800 KIP/phút (tính cước theo giây)-
    Send SMS local network 100 KIP/SMS- ສົ່ງຂໍ້ຄວາມ ພາຍໃນເຄືອຂ່າຍ 100 ກີບ/ສະບັບ-Giá gửi SMS nội mạng: 100 Kip/SMS.-
    Send SMS other network 200 KIP/SMS- ສົ່ງຂໍ້ຄວາມນອກເຄືອຂ່າຍ 200 ກີບ/ສະບັບ - ສົ່ງຂໍ້ຄວາມນອກເຄືອຂ່າຍ 200 ກີບ/ສະບັບ -Giá gửi SMS ngoại mạng: 200 KIP/SMS-
    International SMS 500 KIP/SMS- ສົ່ງຂໍ້ຄວາມໄປຕ່າງປະເທດ: 500 ກີບ/ສະບັບ -Giá gửi SMS Quốc tế:500 KIP/SMS-
    International call rates depend on each country’s rate- ໂທຕ່າງປະເທດ ອີງຕາມອັດຕາຄ່າໂທຂອງປະເທດນັ້ນ-Gọi quốc tế tùy theo đich gọi( gọi đi Việt Nam, Trung quốc, Thailand, Camphuchia giá 1,800 Kip/phút).-
    Top up and check balance:-ວິທີຕື່ມເງິນ ແລະ ກວດເບິ່ງຍອດເງິນ:-Nạp thẻ và kiểm tra tài khoản:-
    Top up: press*121*card code# press call.- ວິທີຕື່ມມູນຄ່າໂທ: ກົດ*121*ລະຫັດບັດຕື່ມເງິນ# ໂທອອກ. -Nạp thẻ: Bấm*121*mã thẻ cào# bấm gọi đi.-
    Check balance and data press *122# press call.- ກວດເບິ່ງຍອດເງິນ ແລະ ດາຕ້າ ກົດ *122# ໂທອອກ.-Kiểm tra tài khoản và data bấm  *122# gọi đi.-
    Time usage of prepaid SIM:-ອາຍຸການນຳໃຊ້ຂອງຊິມມືຖືແບບຕື່ມເງິນ:-thời gian sử dụng của thuê bao di động trả trước:-
    If customer do not use call, internet or recharge within 120 days, the number will auto inactive (retrieved back to the company- ຖ້າຫາລູກຄ້າບໍ່ມີການເຄື່ອນໄຫວນຳໃຊ້ ໂທເຂົ້າໂທອອກ ຫລີ້ນດາຕ້າ ແລະ ຕື່ມເງິນ ພາຍໃນ 120 ວັນ, ເບີດັ່ງກ່າວແມ່ນຈະຖືກຕັດການນຳໃຊ້ອອກຈາກລະບົບ (ເກັບຄືນເຂົ້າສາງບໍລິສັດ).Nếu quý khách không sử dụng gọi đi, gửi SMS đi, nạp thẻ, sử dụng data trong vòng 150 ngày thì thuê bao của quý khách sẽ bị thu hồi theo chính sách chung của công ty.-
      
    ';
    
    $array = preg_split("/\r\n|\n|\r/", $string);
   
    
    foreach ($array as $value) {
        $result = preg_split("/-/", $value);
        array_pop($result);
            foreach ($result as $key => $value1 ) {

                
                if($key == 0 ){
                    // $engArr[] = '"'.str_replace(' ', '', $result[0]).'":"'.str_replace(' ', '', $value1).'"';
                    $engArr[] = trim($result[0]).'@'.trim($value1);
                }
                if($key == 1){
                    $laoArr[] =  trim($result[0]).'@'.trim($value1);
                }
                if($key == 2){
                    $vnArr[] =  trim($result[0]).'@'.trim($value1);
                }
            }
        
    }
    $arr[]= [$engArr,$laoArr,$vnArr];
return json_decode(json_encode($arr), FALSE);

    
});

Route::get('users', function () {
    $body = [
        "sessionId" => "8309aa15-2c85-4602-b092-f99d266d3306",
        "apiKey" => "dfsfsf",
        "token" => "dasd",
        "wsCode" => "wsSearchIsdn",
        "wsRequest" => [
            "phoneNumber" => "209",
            "simType" => "020",
        ],
    ];

    // return Zttp::post('http://183.182.100.132:8123/ApiGateway/CoreService/UserRouting', $body)->json();
    // return json_encode($body);
    // dd(json_encode($body));
    // $response = Http::post('http://183.182.100.132:8123/ApiGateway/CoreService/UserRouting',[
    //     "sessionId" => "8309aa15-2c85-4602-b092-f99d266d3306",
    //     "apiKey" => "dfsfsf",
    //     "token" => "dasd",
    //     "wsCode" => "wsSearchIsdn",
    //     "wsRequest" => [
    //         "phoneNumber" => "209",
    //         "simType" => "020",
    //     ],
    // ]
    // );
    // $response1 = Http::post('http://183.182.100.132:8123/ApiGateway/CoreService/UserRouting',[
        
    //         "sessionId"=> "e01ed94e-430e-43bc-9219-75ed077a36b1",
    //         "token"=> "vAQBNd6thiUlz5QOL6WbBw==",
    //         "wsCode"=> "ptg_getProvinces",
    //         "wsRequest"=> [
    //             "language"=> "LC"
    //         ]
    // ]
    // );
    // $response = $response->json();
    // dd($response->json(),$response1->json());
    return view('welcome',['response'=>'$response']);
});
