@if ($message = Session::get('success'))
<div class="rounded-md px-5 py-4 mb-2 bg-theme-9 text-white" style="text-align: center;">
	<button type="button" class="close" data-dismiss="alert">×</button>
    <strong><h5>{{ $message }}</h5></strong>
</div>
@endif
