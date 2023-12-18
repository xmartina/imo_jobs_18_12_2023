<?php

namespace App\Http\Controllers\Web;

use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Setting;
use Illuminate\View\View;
use Laracasts\Flash\Flash;
use App\Models\CmsServices;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use App\Repositories\WebHomeRepository;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ContactFormRequest;
use App\Http\Controllers\AppBaseController;
use Illuminate\Contracts\Foundation\Application;

class HomeController extends AppBaseController
{
    /** @var WebHomeRepository */
    private $homeRepository;

    public function __construct(WebHomeRepository $homeRepository)
    {
        $this->homeRepository = $homeRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Factory|View|Response
     */
    public function index()
    {
        $data['testimonials'] = $this->homeRepository->getTestimonials();
        $data['dataCounts'] = $this->homeRepository->getDataCounts();
        $data['latestJobs'] = $this->homeRepository->getLatestJobs()->take(4);
        $data['tags'] = $this->homeRepository->getTags()->take(9);
        $data['categories'] = $this->homeRepository->getCategories();
        $data['jobCategories'] = $this->homeRepository->getAllJobCategories()->where('is_featured' ,1)->take(8);
        $data['featuredCompanies'] = $this->homeRepository->getFeaturedCompanies();
        $data['allCompanies'] = $this->homeRepository->getAllCompanies();
        $data['featuredJobs'] = $this->homeRepository->getFeaturedJobs();
        $data['popularJobs'] = $this->homeRepository->getPopularJobs();
        $data['notices'] = $this->homeRepository->getNotices();
        [$data['imageSliders'], $data['settings'], $data['slider'], $data['imageSliderActive'], $data['headerSliders']] = $this->homeRepository->getImageSlider();
        $data['latestJobsEnable'] = $this->homeRepository->getLatestJobsEnable();
        $data['plans'] = $this->homeRepository->getPlans();
        $data['plansArray'] = array_chunk($data['plans']->toArray(), 3);
        $data['branding'] = $this->homeRepository->getBranding();
        $data['recentBlog'] = $this->homeRepository->getRecentBlog();
        $data['cmsServices'] = CmsServices::pluck('value', 'key')->toArray();
        $data['color'] = Setting::COLOR;
        // return view('front_web.home.home')->with($data);
        return Inertia::render('Landing', $data);
    }

    /**
     * @param  ContactFormRequest  $request
     * @return Application|RedirectResponse|Redirector
     */
    public function sendContactEmail(ContactFormRequest $request)
    {
        $inquiry = $this->homeRepository->storeInquires($request->all());
        Flash::success('Thank you for contacting us.');

        return redirect(route('front.contact'));
    }

    /**
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function changeLanguage(Request $request)
    {
        $language = $request->input('languageName');

        Session::put('languageName',$language);

        /** @var User $user */
        $user = getLoggedInUser();
        $user->update(['language' => $language]);

        return $this->sendSuccess(__('messages.flash.language_changed'));
    }

    /**
     * @param  Request  $request
     * @return array|string
     *
     * @throws Throwable
     */
    public function getJobsSearch(Request $request)
    {
        $searchTerm = strtolower($request->get('searchTerm'));

        $results = $this->homeRepository->jobSearch($searchTerm);

        if($request->wantsJson()){
            return $this->sendSuccess(self::SUCCESS_MESSAGE, $results);
        }

        return view('front_web.home.job_search_results', compact('results'))->render();
    }

    /**
     * @return JsonResponse
     */
    public function getCitiesSearch()
    {
        $cities = getCities();

        return $this->sendSuccess(self::SUCCESS_MESSAGE, $cities);
    }

    /**
     * @return JsonResponse
     */
    public function getStatesSearch()
    {
        $states = getStates();

        return $this->sendSuccess(self::SUCCESS_MESSAGE, $states);
    }
}
