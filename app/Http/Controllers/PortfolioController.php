<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\PromoPage;
use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PortfolioController extends Controller
{
    public function index(Request $request): Renderable
    {
        $category = $request->input('category', 'Все категории');
        $projects = Project::filterByCategory($category)
            ->where('visible', true)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('portfolio.index', compact('projects', 'category'));
    }
}
