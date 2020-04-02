@extends('layouts.default')

@push('styles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
@endpush

@section('content')
{{ $data }}
@endsection

@push('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
@endpush