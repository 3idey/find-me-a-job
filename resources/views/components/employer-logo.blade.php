@props(['employer' => null, 'width' => 90])
@if ($employer && $employer->logo)
    <img src="{{ asset('storage/' . $employer->logo) }}" alt="Employer Logo" class="rounded-xl" width="{{ $width }}">
@else
    <div class="text-gray-400 italic">No logo</div>
@endif
