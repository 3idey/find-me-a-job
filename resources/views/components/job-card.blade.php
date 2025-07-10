@props(['job'])

<div class="p-8 bg-white/5 rounded-xl flex-col text-center border border-transparent hover:border-blue-800 group transition-colors duration-1000">
    <div class="self-start text-sm text-left">{{$job->employer->name}}</div>

    <div class="py-8 font-bold">
       <h3 class="group-hover:text-blue-600 font-bold transition-colors duration-1000">
        <a href="{{$job->url}}" target="_blank">
        {{$job->title}}
    </a>
    </h3>
       <p class="text-sm mt-4">{{$job->salary}}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
   <div>
@foreach ($job->tags as $tag )
<x-tag :$tag/>

@endforeach

   </div>

  <x-employer-logo :employer="$job->employer" :width="42"/>
    </div>
  </div>
