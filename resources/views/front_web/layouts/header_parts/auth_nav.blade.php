@if (!Auth::check())
<div class="header-right">
    <div class="block-signin d-flex align-items-center gap-2">
        <a class="text-link-bd-btom hover-up" href="#controlJobManagerRegister" data-bs-toggle="modal">Register</a>
        <a class="btn btn-default btn-shadow ml-30 hover-up" href="#controlJobManagerLogin"
           data-bs-toggle="modal">{{ __('web.login') }}</a>
    </div>
</div>
