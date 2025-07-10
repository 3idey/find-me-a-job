<x-layout>
    <div class="space-y-10">
       <section>
         <h1 class="font-bold text-4xl text-center">Let's Find Your Next Job</h1>

         {{-- <form action="">
           <input type="text" placeholder="Search for jobs" class="  w-full bg-white/5 border  border-white/10 hover:border-blue-800 focus:border-blue-800 focus:ring-0 rounded-xl py-4 px-6 mt-6">
         </form> --}}

         <x-forms.form action="search" class="mt-6">

            <x-forms.input :label="false" name="q" placeholder="Web Dev..."></x-forms.input>

         </x-forms.form>
       </section>
       <section>
           <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($jobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>

           </section>
           <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1 mb-8">
                @foreach ( $tags as $tag)
                   <x-tag :$tag />
                @endforeach
            </div>

           </section>

           <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="mt-6 space-y-6">
              @foreach ($jobs as $job)
                <x-job-card-wide :$job />
              @endforeach
            </div>

           </section>
    </div>
   </x-layout>
