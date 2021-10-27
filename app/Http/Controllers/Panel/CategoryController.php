<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $category;

    public function __construct(CategoryRepository $repository)
    {
        $this->category = $repository;
    }

    public function index()
    {
        $categories = $this->category->all();
        return view('panel.categories.index', compact('categories'));
    }
}
