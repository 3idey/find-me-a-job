@php
$classes = 'bg-white/5 rounded-xl flex gap-x-6 border border-transparent hover:border-blue-800 group transition-colors duration-1000';
@endphp
<div {{$attributes(['class'=>$classes])}} >
{{ $slot }}
</div>
