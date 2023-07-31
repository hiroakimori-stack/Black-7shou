<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Item;
use App\Models\News;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->news = new News();
    }

    public function insert()
    {
        return view('/admin/news-insert');
    }

    public function store(Request $request)
    {
        // 画像フォームでリクエストした画像を取得
        $img = $request->file('image');

        // 画像情報がセットされていれば、保存処理を実行
        if (isset($img)) {
            // storage > public > img配下に画像が保存される
            $path = $img->store('image','public');
            // store処理が実行できたらDBに保存処理を実行
            if ($path) {
                // DBに登録する処理
                $item = News::create([
                    'info' => $request->info,
                    'detail' => $request->detail,
                    'image' => $path,
                    'created_at' => $request->created_at,
                ]);
            }
        }

        return redirect('/admin/item-index');
    }

    // 削除
    public function destroy($id) {
        $deletenews = News::findOrFail($id);
        $deletenews->delete();

        return redirect('/admin/item-index');
    }

    // 編集
    public function edit(News $news)
    {
        $newss = News::all();

        return view('/admin/news-edit' ,compact('news'));
    }

    public function newsupdate(Request $request, News $news) {
        $request->validate([
            'info' => 'required',
            'detail' => 'required',
        ]);

        $news->update($request->all());
    
        $newss = News::all();
        $items = Item::all();
    
        return view('/admin/item-index' ,compact('newss','items'));
    }
}
