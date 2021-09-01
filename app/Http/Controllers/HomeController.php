<?php

namespace App\Http\Controllers;

use App\Repositories\TestimonyRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $testimony;

    public function __construct(TestimonyRepository $testimony)
    {
        $this->testimony = $testimony;
    }

    public function index()
    {
        $testimonials = $this->testimony->all();
        return view('site.index', compact('testimonials'));
    }
}
