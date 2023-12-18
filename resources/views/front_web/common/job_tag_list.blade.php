<a href="{{ route('front.search.jobs',['location' => strtolower($tag->name)]) }}" class="d-flex justify-content-center px-4 py-2 text-center border border-dark h-25 btn-secondary">
    <div>
        <span class="text-xs fw-lighter">{{$tag->name}}</span>
    </div>
</a>
