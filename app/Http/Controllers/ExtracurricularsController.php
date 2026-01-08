<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Extracurricular;
use Illuminate\Http\Request;

class ExtracurricularsController extends Controller
{
    public function index(Request $request)
    {
        $perPages = (int) $request->get('per_pages', 6);

        $query = Extracurricular::with('category');

        // Filter category
        if ($request->filled('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        if ($request->filled('search')) {
            $searchTerm = $request->input('search');
            $query->where('name', 'like', '%' . $searchTerm . '%');
        }

        // Total data (untuk cek tombol)
        $total = $query->count();

        // Ambil data sesuai per_pages
        $extracurriculars = $query
            ->latest()
            ->take($perPages)
            ->get();

        $categories = Category::select('name', 'slug', 'icon')->get();

        return view('pages.ekstrakurikuler', compact(
            'extracurriculars',
            'categories',
            'perPages',
            'total'
        ));
    }

    public function show($slug)
    {
        $extracurriculars = Extracurricular::inRandomOrder()->take(4)->get();

        $extracurricular = Extracurricular::with('coach', 'category')->where('slug', $slug)->firstOrFail();

        return view('pages.detail-ekstrakurikuler', compact('extracurricular', 'extracurriculars'));
    }
}
