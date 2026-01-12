<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Extracurricular;
use App\Models\User;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function index(Request $request)
    {
        $query = Achievement::with('extracurricular', 'coach', 'students');

        // Filter search (cari di title achievement atau nama siswa)
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('title', 'like', "%{$request->search}%")
                    ->orWhere('description', 'like', "%{$request->search}%")
                    ->orWhereHas('students', function ($sq) use ($request) {
                        $sq->where('fullname', 'like', "%{$request->search}%");
                    });
            });
        }

        // Filter level (dari siswa yang terlibat)
        if ($request->filled('level') && $request->level !== 'all') {
            $query->where('level', $request->level);
        }

        // Filter year (tahun prestasi diraih)
        if ($request->filled('year') && $request->year !== 'all') {
            $query->whereYear('year', $request->year);
        }

        // Filter ekstra
        if ($request->filled('ekstra') && $request->ekstra !== 'all') {
            $query->whereHas('extracurricular', function ($q) use ($request) {
                $q->where('slug', $request->ekstra)->orWhere('id', $request->ekstra);
            });
        }

        $achievements = $query->latest()->paginate(6)->withQueryString();

        $levels = Achievement::select('level')->distinct()->orderBy('level')->pluck('level')->toArray();

        $years = Achievement::select('year')
                    ->distinct()
                    ->whereNotNull('year')
                    ->orderByDesc('year')
                    ->pluck('year');

        $extracurriculars = Extracurricular::orderBy('name')->get();

        return view('pages.prestasi', compact('achievements', 'levels', 'years', 'extracurriculars'));
    }

    public function show($slug)
    {
        $achievement = Achievement::with('extracurricular', 'coach', 'students')->where('slug', $slug)->firstOrFail();

        return view('pages.detail-prestasi', compact('achievement'));
    }
}
