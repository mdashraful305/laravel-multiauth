@extends('layouts.back')
@section('title', 'Role Information')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Manage Roles</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Roles</div>
      </div>
    </div>
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Show Roles</h4>
                        <div class="card-header-form">
                            <a href="{{ route('roles.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                            <div class="col-md-6" style="line-height: 35px;">
                                {{ $role->name }}
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="roles" class="col-md-4 col-form-label text-md-end text-start"><strong>Permissions:</strong></label>
                            <div class="col-md-6" style="line-height: 35px;">
                                @if ($role->name=='Super Admin')
                                    <span class="badge bg-primary">All</span>
                                @else
                                    @forelse ($rolePermissions as $permission)
                                        <span class="badge bg-primary">{{ $permission->name }}</span>
                                    @empty
                                    @endforelse
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

