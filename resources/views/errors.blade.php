@foreach ($errors->all() as $error)
<ul class="rounded-md px-5 py-4 mb-2 bg-theme-6 text-white">
    <li>{{ $error }}</li>
</ul>
@endforeach
