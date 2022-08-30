<x-dashboard-tile :position="$position">
    <table class="table-auto w-full">
        <caption class="text-lg mb-4">{{ $month }} {{ $year }}</caption>
        <thead>
            <tr>
                <th abbr="Sunday" scope="col" title="Sunday" class="text-center text-dimmed">S</th>
                <th abbr="Monday" scope="col" title="Monday" class="text-center text-dimmed">M</th>
                <th abbr="Tuesday" scope="col" title="Tuesday" class="text-center text-dimmed">T</th>
                <th abbr="Wednesday" scope="col" title="Wednesday" class="text-center text-dimmed">W</th>
                <th abbr="Thursday" scope="col" title="Thursday" class="text-center text-dimmed">T</th>
                <th abbr="Friday" scope="col" title="Friday" class="text-center text-dimmed">F</th>
                <th abbr="Saturday" scope="col" title="Saturday" class="text-center text-dimmed">S</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @php
            if(0 != $dayOfWeek) {
                echo('<td colspan="'.$dayOfWeek.'" class="text-center"> </td>');
            }
            for($i=1; $i<=$daysInMonth; $i++) {
                if($i == $numDay) {
                    echo('<td id="today" class="text-center bg-accent rounded-md text-invers">');
                } else {
                    echo("<td class='text-center'>");
                }
                echo($i);
                echo("</td>");
                if(date('w', mktime(0,0,0,$numMonth, $i, $year)) == 6) {
                    echo("</tr><tr>");
                }
            }
            @endphp
            </tr>
        </tbody>
    </table>
</x-dashboard-tile>
