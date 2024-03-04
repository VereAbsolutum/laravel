@extends('layouts.app')

@section('page-title', 'Roles')

@section('content')

    <section class="card">

        <div class="card-body">

                <p class="d-flex justify-content-end">
                    <a class="btn btn-primary" href="{{ route('admin.roles.create') }}">
                        Novo
                    </a>
                </p>

            @include('admin.roles.table')

            <div class="text-center">
                
            </div>

        </div>
    </section>

@endsection