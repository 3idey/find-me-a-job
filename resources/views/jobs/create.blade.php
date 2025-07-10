<x-layout>

  <x-page-heading>Post a Job</x-page-heading>


    <x-forms.form method="POST" action="/jobs">
        <x-forms.input name="title" label="Job Title" placeholder="CEO.." required></x-forms.input>
        <x-forms.input name="salary" label="Salary" placeholder="$60.000" required></x-forms.input>
        <x-forms.input name="location" label="Location" placeholder="Cairo" required></x-forms.input>

        <x-forms.select label="Schedule" name="schedule" required>
            <option value="full-time">Full Time</option>
            <option value="part-time">Part Time</option>
        </x-forms.select>

        <x-forms.input name="url" label="URL" placeholder="https://example.com" required></x-forms.input>
        <x-forms.checkbox label="Featured (Costs Extra)" name="featured" />
        <x-forms.divider/>
        <x-forms.input name="tags" label="Tags (Comma Separated)" placeholder="Laravel, PHP, JavaScript" required></x-forms.input>
        <x-forms.button>Post Job</x-forms.button>
    </x-forms.form>

</x-layout>
