<div>
    <x-slot:title>
        {{ data_get_str($server, 'name')->limit(10) }} > Server Destinations | Oh2Bees
    </x-slot>
    <x-server.navbar :server="$server" :parameters="$parameters" />
    <livewire:destination.show :server="$server" />
</div>
