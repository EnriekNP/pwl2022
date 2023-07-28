@extends('adminlte::page')
@section('content')
    @csrf
    @if (session('message'))
        <div class="alert alert-{{ session('message')['status'] }}" x-data="{ show: true }" x-show="show" x-transition
            x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">
            {{ __(session('message')['message']) }}</div>
    @endif
    <a href="{{ route('schedule.create') }}"class="btn btn-success">Create</a>

    <div class="p-3 bg-light">
        <table id="myTable" class="table table-striped justify-content-center">
            <thead>
                <tr>
                    <th scope="col">Event Date & Time</th>
                    <th scope="col">Event Title</th>
                    <th scope="col">Event Detail</th>
                    <th scope="col">PIC</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($schedules as $schedule)
                    <tr>
                        <td>{{ $schedule->start_date_time }}</td>
                        <td>{{ $schedule->event_title }}</td>
                        <td>
                            <p> Duration: {{ $schedule->duration }}</p>
                            <p> Room: {{ $schedule->room }}</p>
                            <p> Additional Information: {{ $schedule->add_info }}</p>
                        </td>
                        <td>
                            {{ $schedule->pic_name }} {{ $schedule->pic_contact_number }}
                        </td>
                        <td>
                            <a href="{{ route('schedule.edit', ['schedule' => $schedule->student_id]) }}"
                                class="btn btn-warning">Edit</a>
                            <form method="POST" action="{{ route('schedule.destroy', $schedule->student_id) }}"
                                style="display:inline">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
