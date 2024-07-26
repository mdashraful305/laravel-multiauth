@extends('layouts.back')
@section('title', 'Add New Permmissions')
@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/assets/modules/select2/dist/css/select2.min.css') }}">
@endpush
@section('content')
<section class="section">
    <div class="section-header">
      <h1>Manage Permmissions</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Permmissions</div>
      </div>
    </div>
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Permmissions</h4>
                        <div class="card-header-form">
                            <a href="{{ route('permissions.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('permissions.store') }}" method="post">
                            @csrf

                            <div class="mb-3 row">
                                <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="name" id="name">
                                        @foreach ($routes as $route)
                                            @if ($route->getName() != '' && $route->getAction()['middleware']['0'] == 'web' && !in_array(routeName($route->getName()),$permissions))
                                                <option value="">{{ routeName($route->getName()) }}</option>
                                            @endif
                                        @endforeach
                                      </select>
                                </div>

                            </div>

                            <div class="mb-3 row">
                                <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add permission">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')


@endpush
