@extends('adminlte::page')
@section('title', 'Add Schdule Form')

@section('content_header')
    <h1>Add Schedule Form</h1>
@stop

@section('content')
    <form action="{{ route('schedule.store') }}" method="post">
        @csrf
        <label for="event_title">Event Title</label>
        <div class="input-group mb-3">
            <input type="text" name="event_title" class="form-control @error('event_title') is-invalid @enderror" placeholder="Event Title (e.g. National Seminary)"
                autofocus>

            @error('event_title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <label for="event_date_time">Event Date & Time</label>
        <div class="input-group mb-3">
            <input type="date" name="event_date_time" class="form-control @error('event_date_time') is-invalid @enderror" placeholder="Event Title (e.g. National Seminary)"
                autofocus>

            @error('event_date_time')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <label for="duration">Duration (Hour)</label>
        <div class="input-group mb-3">
            <input type="number" name="duration" class="form-control @error('duration') is-invalid @enderror" placeholder="1"
                autofocus>

            @error('duration')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <label for="room">Room</label>
        <div class="input-group mb-3">
            <input type="text" name="room" class="form-control @error('room') is-invalid @enderror" placeholder="Event Title (e.g. National Seminary)"
                autofocus>

            @error('room')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <label for="additional_info">Additional Information</label>
        <div class="input-group mb-3">
            <input type="text" name="additional_info" class="form-control @error('additional_info') is-invalid @enderror" placeholder="Event Title (e.g. National Seminary)"
                autofocus>

            @error('additional_info')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <label for="pic">Person In Charge</label>
        <div class="input-group mb-3">
            <input type="text" name="pic" class="form-control @error('pic') is-invalid @enderror" placeholder="Event Title (e.g. National Seminary)"
                autofocus>

            @error('pic')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <label for="number_telp">PIC Contact Number</label>
        <div class="input-group mb-3">
            <input type="text" name="number_telp" class="form-control @error('number_telp') is-invalid @enderror" placeholder="Event Title (e.g. National Seminary)"
                autofocus>

            @error('number_telp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        {{-- Create button --}}
        <button type="submit" class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
            <span class="fas fa-plus"></span>
            create
        </button>
    </form>
@stop
