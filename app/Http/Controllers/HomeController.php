<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Modules\Setting\Entities\Setting;
use App\Models\Contact;
use Illuminate\Support\Facades\Cache;
use App\Models\SlugOptimize;
use Modules\Blog\Entities\Blog;
use Modules\Blog\Entities\BlogCategory;

class HomeController extends Controller
{
    private $setting;
    private $blog;
    public function __construct()
    {
        // $this->middleware('auth');
        $this->setting= new Setting();
        $this->blog = new Blog();
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
    public function handleURL($alias = '')
    {
        // dd($alias);
        // $slug = explode('.', $alias);

        // if (@$slug[1] != null) {
        //     return view('errors.404');
        // }
        $getSlug = !empty($alias) ? SlugOptimize::slug(['slug' => $alias])->first() : new SlugOptimize();
        // $params = [@$getSlug->slug];
        $params = @$getSlug->slug;
        if (@$getSlug->type == SlugOptimize::TYPE_BLOG_CATE) {
            $response = $this->blogCategory($params);
        } elseif (@$getSlug->type == SlugOptimize::TYPE_BLOG) {
            $response = $this->blogDetail($params);
        }
        if (isset($response)) {
            return $response;
        }
        return $this->get404();
    }
    public function processContact()
    {
        $data = request()->except('_token');
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
        $newFeedback = Contact::create([
            'full_name' => $data['full_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'service'=>$data['service'],
            'status' => 'N',
        ]);
        return response()->json(['success' => 'Cảm ơn bạn đã gửi phản hồi đến chúng tôi.','message'=>'success']);
    }
    public function blogDetail($params)
    {
        $blogData=$this->blog->findBySlugOrId($params);
        return view('web.blog.blogDetail',compact('blogData'));

    }
    public function clearCache()
    {
        Cache::flush();
        return redirect()->back();
    }
}
