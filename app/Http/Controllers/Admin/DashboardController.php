<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        return view('admin.dashboard', [
            'categories' => Category::LastCategories(5),
            'articles' => Article::LastArticles(5),
            'count_categories' => Category::count(),
            'count_articles' => Article::count(),
        ]);
    }
}
