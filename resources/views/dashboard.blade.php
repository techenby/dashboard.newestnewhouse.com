<x-dashboard>
    <livewire:date-time-tile position="a1" timezone="America/Chicago" title="Central Time" />
    <livewire:calendar-tile position="a2" :calendar-id="config('dashboard.tiles.calendar.ids.tighten')" title="Tighten"/>
    <livewire:calendar-tile position="a3" :calendar-id="config('dashboard.tiles.calendar.ids.institute')" title="Institute"/>
    <livewire:weather-forecast-tile position="b1:b2" />
    <livewire:calendar-tile position="c1" :calendar-id="config('dashboard.tiles.calendar.ids.andy')" title="Andy"/>
    <livewire:calendar-tile position="d1" :calendar-id="config('dashboard.tiles.calendar.ids.jess')" title="Jess"/>
    <livewire:calendar-tile position="e1" :calendar-id="config('dashboard.tiles.calendar.ids.family')" title="Family"/>
</x-dashboard>
