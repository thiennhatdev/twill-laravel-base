<?php

namespace App\Http\Controllers;

use App\Repositories\PaintRepository;
use Illuminate\Http\Request;

class PaintController extends Controller
{
    public function __construct(Request $request, PaintRepository $paintRepository)
    {
        $this->request = $request;
        $this->paintRepository = $paintRepository;
    }

    public function detail() 
    {
        $paints = $this->paintRepository->paintDetail($this->request->id);
        $related_paints = $this->paintRepository->relatedPaintsByPaintId($this->request->id);
        return view('pages.paint-detail', [
            'paints' => $paints,
            'paint' => $paints[0],
            'related_paints' => $related_paints
        ]);
    }
}
