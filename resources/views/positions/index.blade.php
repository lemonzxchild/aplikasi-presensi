@extends('layouts.app')

@push('style')
    @powerGridStyles
@endpush

@section('buttons')
    <div class="btn-toolbar mb-2 mb-md-0">
        <div>
            <a href="{{ route('positions.create') }}" class="btn btn-success">
                Tambah Data Jabatan
            </a>
        </div>
    </div>
@endsection

@section('content')
    @include('partials.alerts')
    <livewire:position-table />
@endsection

@push('script')
    <script src="{{ asset('jquery/jquery-3.6.0.min.js') }}"></script>
    @powerGridScripts
@endpush
