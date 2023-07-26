@extends('layouts.app')

@push('style')
    @powerGridStyles
@endpush

@section('content')
    <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 mb-3 mb-md-0">
                    <h5 class="card-title">{{ $attendance->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $attendance->description }}</h6>
                    <div class="d-flex align-items-center gap-2 mb-3">
                        @include('partials.attendance-badges')
                    </div>
                    <a href="{{ route('presences.permissions', $attendance->id) }}" class="btn btn-sm btn-warning">Pegawai
                        Izin</a>
                    <a href="{{ route('presences.not-present', $attendance->id) }}" class="btn btn-sm btn-danger">Pegawai
                        Belum
                        Presensi</a>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-2">
                                <small class="fw-bold text-muted d-block">Range Jam Masuk</small>
                                <span>{{ $attendance->start_time }} - {{ $attendance->batas_start_time }}</span>
                            </div>
                            <div class="mb-2">
                                <small class="fw-bold text-muted d-block">Range Jam Pulang</small>
                                <span>{{ $attendance->end_time }} - {{ $attendance->batas_end_time }}</span>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="mb-2">
                                <small class="fw-bold text-muted d-block">Yang Mengakses Presensi</small>
                                <div>
                                    @foreach ($attendance->positions as $position)
                                        <span class="badge text-bg-success d-inline-block me-1">{{ $position->name }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <livewire:presence-table attendanceId="{{ $attendance->id }}" />
    </div>
@endsection

@push('script')
    <script src="{{ asset('jquery/jquery-3.6.0.min.js') }}"></script>
    @powerGridScripts
@endpush