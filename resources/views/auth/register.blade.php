<x-layout>
    <x-page-heading>Register</x-page-heading>


    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
    <x-forms.input name="name" label="Name" required></x-forms.input>
    <x-forms.input name="email" label="Email" type="email" required></x-forms.input>
    <x-forms.input name="password" label="Password" type="password" required></x-forms.input>
    <x-forms.input name="password_confirmation" label="Password Confirmation" type="password" required></x-forms.input>


    <x-forms.divider/>
    <x-forms.input name="employer" label="Employer Name" required></x-forms.input>
    <x-forms.input name="logo" label="Logo" type="file" required></x-forms.input>




     <x-forms.button>Create Account</x-forms.button>
    </x-forms.form>
</x-layout>
