<x-layout>
    <x-page-heading>Log In</x-page-heading>


    <x-forms.form method="POST" action="/login" >

    <x-forms.input name="email" label="Email" type="email" required></x-forms.input>
    <x-forms.input name="password" label="Password" type="password" required></x-forms.input>

     <x-forms.button>Log In</x-forms.button>
    </x-forms.form>
</x-layout>
