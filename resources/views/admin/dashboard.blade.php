@extends('admin.layout')

@section('content')
    <h2 class="fw-bold text-white mb-4">Dashboard Overview</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="admin-card d-flex align-items-center gap-3">
                <i class="bi bi-folder text-primary fs-1"></i>
                <div>
                    <h5 class="mb-0 text-white fw-bold">Total Proyek</h5>
                    <h3 class="mb-0" style="color: var(--accent-primary);">{{ $projectCount }}</h3>
                </div>
            </div>
        </div>
    </div>
@endsection