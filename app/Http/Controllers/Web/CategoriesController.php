<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\WebHomeRepository;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    /** @var WebHomeRepository */
    private $homeRepository;

    public function __construct(WebHomeRepository $homeRepository)
    {
        $this->homeRepository = $homeRepository;
    }
    public function index()
    {
        $jobCategories =  $this->homeRepository->getAllJobCategories();

        return view('front_web.categories.index',compact('jobCategories'));
    }
}
