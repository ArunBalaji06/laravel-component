<x-layout.app-component>

    {{-- Passing attributes, merging class and conditional class --}}
    <div class="container row p-2 mt-5">
        <div class="col">
            <x-card.index  class="bg-warning" type=0/>
        </div>
        <div class="col">
            <x-card.index  class="bg-success" type=0/>
        </div>
        <div class="col">
            <x-card.index  class="bg-primary" type=1/>
        </div>



    </div>

    {{-- Dynamic components --}}
    {{-- @php
        // $componentName = 'inculdes.navbar-component';
        // $componentName = 'intro.title-card-component';

    @endphp
    <x-dynamic-component :component="$componentName" class="mt-4" /> --}}

</x-layout.app-component>
