<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Modules\Setting\Entities\Setting;
use App\Models\Contact;

class HomeController extends Controller
{
    private $setting;
    public function __construct()
    {
        // $this->middleware('auth');
        $this->setting= new Setting();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }

    public function processContact()
    {
        $data = request()->except('_token');
        // dd($data);
        $validator = Validator::make(request()->all(), [
            'phone' => 'numeric|digits_between:10,11|regex:/^0\d+$/',
        ], [
            'phone.*' => '(*) Số điện thoại chưa đúng, vui lòng nhập lại',
        ]);
        if ($validator->fails()) {
            return response()->json(['text'=>'fail','errors'=>$validator->errors()]);
        }

        $settings = $this->setting->get_settings();

        $generals = [];
        if (count(@$settings) > 0) {
            foreach ($settings as $setting) {
                $generals[$setting->type] = unserialize($setting->data);
            }
        }
        // $social = [
        //             'face' => $generals['SOCIAL']['facebook'],
        //             'ytb' => $generals['SOCIAL']['youtube'],
        //             'insta' => $generals['SOCIAL']['instagram'],
        //             'linkedin' => $generals['SOCIAL']['linkedin'],
        //         ];
        $newFeedback = Contact::create([
            'full_name' => $data['full_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'service'=>$data['service'],
            'status' => 'N',
        ]);

        // $shopName = $this->setting->getSetting('SHOP')['shop_name'];
        // Mail::send(['html' => 'mail.feedback'], ['feedback' => $newFeedback], function ($message) use ($shopName, $newFeedback, $social) {
        //     $message->from("donhang@ctrl.com.vn", $shopName);
        //     $message->to($newFeedback->email);
        //     $message->subject('Gửi feedback thành công');
        // });
        return response()->json(['success' => 'Cảm ơn bạn đã gửi phản hồi đến chúng tôi.','message'=>'success']);
    }
}
