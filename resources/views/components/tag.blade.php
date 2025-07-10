@props(['tag','size'=>'base'])
@php
$classee = "bg-white/10 hover:bg-white/25 px-2 rounded-xl font-bold  text-xs transition-colors duration-300";
if($size ==='base'){
 $classee .= " px-5 py-1 text-xs";
}
if($size === 'small'){
 $classee .= " px-2 py-1 text-xs";
}
@endphp
<a href="/tags/{{strtolower($tag->name)}}" class="{{$classee }}">{{$tag->name}}</a>
