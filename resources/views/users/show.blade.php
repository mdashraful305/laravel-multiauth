@extends('layouts.back')
@section('title', 'User Information')
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Manage User</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Users</div>
      </div>
    </div>
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header">
                            <h4> User Information</h4>
                            <div class="card-header-form">
                                 <a href="{{ route('users.index') }}" class="btn btn-primary my-2"><i class="bi bi-plus-circle"></i>Back</a>

                            </div>
                          </div>
                    </div>
                    <div class="card-body">

                            <div class="mb-3 row">
                                <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                                <div class="col-md-6" style="line-height: 35px;">
                                    {{ $user->name }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="email" class="col-md-4 col-form-label text-md-end text-start"><strong>Email Address:</strong></label>
                                <div class="col-md-6" style="line-height: 35px;">
                                    {{ $user->email }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="roles" class="col-md-4 col-form-label text-md-end text-start"><strong>Roles:</strong></label>
                                <div class="col-md-6" style="line-height: 35px;">
                                    @forelse ($user->getRoleNames() as $role)
                                        <span class="badge bg-primary">{{ $role }}</span>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
