@extends('layouts.app')

@section('page-title', 'Permissions')

@section('content')



    <section class="card">

        <div class="card-body">


                <p class="d-flex justify-content-end">
                    <a class="btn btn-primary" href="#">
                        Novo
                    </a>
                </p>

            @include('admin.permissions.table')

            <div class="text-center">
                
            </div>

        </div>
    </section>

@endsection