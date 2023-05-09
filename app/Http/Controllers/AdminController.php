<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        return view('dashboard');
    }
    public function homePage()
    {
        $faq=Faq::all();
        return view('admin.home.index', compact('faq'));
    }
    public function processFaqQuestion(Request $request)
    {
        if (($request->faqQuestion_id)!=null) {
            $faq=Faq::find($request->faqQuestion_id);
            $faq->update($request->except('faqQuestion_id'));
        } else {
            $faq=new Faq();
            $faq->create($request->all());
        }
        $faq=Faq::get();
        $html = view('admin.home.faqList', compact('faq'))->render();
        return response()->json(['message' => 'Dữ liệu đã thay đổi','html'=>$html]);
    }
}
