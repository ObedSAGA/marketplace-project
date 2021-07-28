<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $announcements = Announcement::where('is_accepted', true)
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();
        return view('welcome', compact('announcements'));
    }

    public function announcementsByCategory($name, $category_id)
    {
        $category = Category::find($category_id);
        $announcements = $category->announcements()
            ->where('is_accepted', true)
            ->orderBy('created_at', 'desc')
            ->paginate(8);
        return view('category/announcements', compact('category', 'announcements'));
    }

    public function locale($locale)
    {
        session()->put('locale', $locale);
        return redirect()->back();
    }


    public function search(Request $request)
    {
        $q = $request->input('q');
        $announcements = Announcement::search($q)
            ->where('is_accepted', true)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('search_results', compact('q', 'announcements'));
    }
}
