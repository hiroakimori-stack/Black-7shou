<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\StoreItemRequest;
use App\Models\Item;

class ItemController extends Controller{
    
    public function __construct()
    {
        $this->item = new Item();
    }

    public function index()
    {
        $items = Item::all();
        return view('/admin/item-index' ,compact('items'));
    }

    public function insert()
    {
        return view('/admin/item-insert');
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
                $item = Item::create([
                    'name' => $request->name,
                    'detail' => $request->detail,
                    'image' => $path,
                    'price' => $request->price,
                    'quantity' => $request->quantity,
                ]);
            }
        }

        return redirect('/admin/item-index');
    }

    // 削除
    public function destroy($id) {
        $deleteitem = Item::findOrFail($id);
        $deleteitem->delete();

        return redirect('/admin/item-index');
    }

    // 編集
    public function edit(Item $item)
    {
        $items = Item::all();

        return view('/admin/item-edit' ,compact('item'));
    }

    public function update(Request $request, Item $item) {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);

        $item->update($request->all());
    
        $items = Item::all();
    
        return view('/admin/item-index' ,compact('items'));
    }

    public function updateConfirm(Request $request, Item $item)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        // アップロードされたファイル名を取得
        $file_name = $request->file('image')->getClientOriginalName();
        
        // 取得したファイル名で保存
        $request->file('image')->store('image', 'public');
    
        return view('/admin/item-edit', compact('item'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Item::findOrFail($id);

        return view('item-buy', compact('item'));
    }
}