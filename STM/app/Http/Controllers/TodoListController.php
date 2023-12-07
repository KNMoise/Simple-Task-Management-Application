<?php

namespace App\Http\Controllers;

use App\Models\ListItem;
use Illuminate\Http\Request;
use League\CommonMark\Extension\CommonMark\Node\Block\ListData;

class TodoListController extends Controller
{
    public function index()
    {
        return view('welcome', ['ListItem' => ListItem::all()]);
    }
    public function saveItem(Request $request)
    {
        $item = new ListItem;
        $item->name = request('name');
        $item->is_complete = 0;
        $item->save();

        return view('welcome');
    }
    public function markItem($id)
    {
        $item = ListItem::find($id);
        $item->is_complete = 1;
        $item->save();
        return redirect('/');
    }
}
