<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Panel\TestimonyRequest;
use App\Repositories\TestimonyRepository;
use Illuminate\Http\Request;

class TestimonyController extends Controller
{
    protected $testimony;

    public function __construct(TestimonyRepository $repository)
    {
        $this->testimony = $repository;
    }

    public function index()
    {
        $testimonials = $this->testimony->all();
        return view('panel.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('panel.testimonials.create');
    }

    public function store(TestimonyRequest $request)
    {
        $this->testimony->store($request->all());
        return redirect()->route('panel.testimony.index');
    }

    public function show($id)
    {
        $testimony = $this->testimony->find($id);
        return view('panel.testimonials.show', compact('testimony'));
    }

    public function edit($id)
    {
        $testimony = $this->testimony->find($id);
        return view('panel.testimonials.edit', compact('testimony'));
    }

    public function update(TestimonyRequest $request, $id)
    {
        $this->testimony->update($id, $request->all());
        return redirect()->route('panel.testimony.index');
    }

    public function destroy($id)
    {
        $this->testimony->delete($id);
        return redirect()->route('panel.testimony.index');
    }
}
