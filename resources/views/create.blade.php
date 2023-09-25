<x-layout.app-component>

    <x-heading.title>
        User Create
    </x-heading.title>
    <div class="container col-md-4 p-4 mt-5">
        <form method="post" action="{{ url('/').'/create' }}">
            @csrf
            <x-form.input name="name" type="text" placeholder="name" />
            <x-form.input name="email" type="email" placeholder="email" />
            <x-form.button type="submit"/>
        </form>
    </div>

</x-layout.app-component>
