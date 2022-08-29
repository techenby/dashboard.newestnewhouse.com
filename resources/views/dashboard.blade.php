<x-dashboard>
@push('assets')
<link rel="stylesheet" href="/css/app.css">
@endpush

    <livewire:date-time-tile position="a1" timezone="America/Chicago" title="Central Time" />
    <livewire:weather-forecast-tile position="b1:b2" />
    <livewire:calendar-tile position="c1" :calendar-id="[config('dashboard.tiles.calendar.ids.andy'),config('dashboard.tiles.calendar.ids.tighten'),config('dashboard.tiles.calendar.ids.institute')]" title="Andy"/>
    <livewire:github-tile position="c2" title="GitHub"/>
    <livewire:calendar-tile position="d1" :calendar-id="config('dashboard.tiles.calendar.ids.jess')" title="Jess"/>
    <livewire:calendar-tile position="e1" :calendar-id="config('dashboard.tiles.calendar.ids.family')" title="Family"/>
</x-dashboard>
