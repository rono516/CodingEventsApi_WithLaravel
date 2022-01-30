@include('layouts.inc.topnav')

<div class="header_fixed">
<table>
    <thead>
        <th>Contest Name</th>
        <th>Contest Link</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Duration</th>
        <th>Site</th>
        <th>In 24hrs?</th>
        <th>Coding Status</th>

    </thead>
    <tbody>
        @foreach ($events as $event)

          <tr>
              <td>{{ $event->name }}</td>
              <td> <a href="{{ $event->url }}">{{ $event->url }}</a></td>
              <td>{{ $event->start_time }}</td>
              <td>{{ $event->end_time }}</td>
              <td>{{ $event->duration }}</td>
              <td>{{ $event->site }}</td>
              <td>{{ $event->in_24_hours }}</td>
              <td>{{ $event->status }}</td>
          </tr>
            
        @endforeach

    </tbody>
</table>

</div>