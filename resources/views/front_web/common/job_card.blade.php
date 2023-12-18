<div class="col-xl-12 col-lg-12 col-md-12 mb-4">
    <div class="job-card-category card flex-row p-3 align-items-center border-start border-5 border-primary">
        <div class="d-flex justify-content-center align-items-center">
            <img src="{{$job->company->company_url}}" class="card-img" alt="...">
        </div>
        <div class="col-11 d-flex pe-3">
            <div class="card-body ps-xl-0 ps-2">
                @if(Str::length($job->job_title) < 35)
                    <a href="{{ route('front.job.details',$job->job_id) }}"
                    class="text-secondary primary-link-hover my-0" title="{{ html_entity_decode($job->job_title) }}">
                        <h5 class="card-title fs-18">{{ html_entity_decode($job->job_title) }}</h5>
                    </a>
                @else
                    <a href="{{ route('front.job.details',$job->job_id) }}"
                        class="text-secondary primary-link-hover my-0" title="{{ html_entity_decode($job->job_title) }}">
                        <h5 class="card-title fs-18">
                            {{ Str::limit(html_entity_decode($job->job_title),30,'...') }}
                        </h5>
                    </a>
                @endif
                @if(isset($job->company->user->first_name))
                    <p class="card-text fs-14 text-gray my-0">
                        {{$job->company->user->first_name}}
                    </p>
                @endif
                <p class="card-text d-block d-md-flex gap-2 fs-14 text-gray my-0">
                    <span>
                        <i class="fa fa-hourglass align-middle" aria-hidden="true"></i>
                    </span>
                    <span>{{ ((!$job->is_freelance)) ? 'Fulltime' : 'Freelance'}}</span>
                    <span>
                        <i class="fa fa-map-marker align-middle" aria-hidden="true"></i>
                    </span>
                    <span>{{ (!empty($job->full_location)) ? $job->full_location : 'Location Info. not available.'}}</span>
                    <span class="d-block d-md-inline">{{ $job->currency->currency_icon }}{{ number_format($job->salary_from, 2)}} - {{ $job->currency->currency_icon }}{{number_format($job->salary_to, 2)}}</span>
                </p>
            </div>
            @if($job->activeFeatured)
                <div class="col-2 col-md-1 icon">
                    <div class="ms-auto">
                        <i class="text-primary fa-solid fa-bookmark"></i>
                    </div>
                </div>
            @else
            <div class="col-2 col-md-1 icon">
                <div class="ms-auto">
                    <i class="fa-regular fa-bookmark"></i>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

