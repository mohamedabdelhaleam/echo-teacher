<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\YearRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class YearController extends Controller
{
    private $yearRepository;
    public function __construct(YearRepositoryInterface $yearRepository)
    {
        $this->yearRepository = $yearRepository;
    }

    public function index()
    {
        $years = $this->yearRepository->getYears(Auth::user()->id);
        return view('dashboard.pages.years.index', compact('years'));
    }

    public function create()
    {
        return view('dashboard.pages.years.create');
    }

    public function store(Request $request)
    {
        $this->yearRepository->createYear($request->all());
        return redirect()->route('dashboard.pages.years.index');
    }

    public function edit($id)
    {
        $year = $this->yearRepository->findYear($id);
        return view('dashboard.pages.years.edit', compact('year'));
    }

    public function update(Request $request, $id)
    {
        $this->yearRepository->updateYear($id, $request->all());
        return redirect()->route('dashboard.pages.years.index');
    }

    public function destroy($id)
    {
        $this->yearRepository->deleteYear($id);
        return redirect()->route('dashboard.pages.years.index');
    }
}
