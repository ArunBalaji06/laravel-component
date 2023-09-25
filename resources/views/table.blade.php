<x-layout.app-component>

    @php
        $headings = ['#', 'name', 'email'];
    @endphp
    <x-heading.title>
        User List
    </x-heading.title>
    <div class="container col-md-4 p-4 mt-5">
        <x-table.index  :datas="$users" :headings="$headings"/>
    </div>

</x-layout.app-component>
