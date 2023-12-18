<div class="col-xl-3 col-lg-4 col-md-4 mb-4">
    <div class="card flex-row p-4 align-items-center">
        <div class="card-body ps-xl-0 ps-lg-3">
            <div class="d-flex gap-2">
                <div>
                    <img src="{{ $company->company_url }}" class="card-img" alt="..." >
                </div>
                <div>
                    <a href="{{ route('front.company.details', $company->unique_id) }}"
                    class="text-secondary primary-link-hover">
                        <p class="card-title fs-6">{!! $company->user->first_name !!}</p>
                    </a>
                    @if(!empty($company->location) || !empty($company->location2))
                        <p class="card-text fs-12 text-gray">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> {{ (isset($company->location)) ? html_entity_decode(Str::limit($company->location,10,'...')) : __('messages.common.n/a') }}{{ (isset($company->location2)) ? ','.html_entity_decode(Str::limit($company->location2,10,'...')) : '' }}
                        </p>
                    @endif
                </div>
            </div>
            @php
                $open_jobs = $company->jobs->where('status', App\Models\Job::STATUS_OPEN)->count()
            @endphp
            @if($open_jobs <= 0)
                <div class="rounded-3 text-center mt-2 bg-gray">
                    <span class="text-secondary fs-12">{{ __('web.no_positions') }}</span>
                </div>
            @else
                <div class="rounded-3 text-center mt-2 bg-tertiary">
                    <a href="{{ route('front.company.details', $company->unique_id) }}">
                        <span class="text-primary fs-12">Open Position</span> <i class="fa fa-arrow-right text-primary fs-12" aria-hidden="true"></i> <span class="fs-12">{{$open_jobs}} {{Illuminate\Support\Str::plural('Job', 1)}}</span>
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
