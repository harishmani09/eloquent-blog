<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class InvoiceDownloadsController extends Controller
{
    public function __invoke()
    {

        $html = view('blogs.index', ['blogs' => Blog::all()])->render();

        dd($html);
    }
}
