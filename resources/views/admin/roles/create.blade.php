@extends('layouts.app')

@section('page-title', 'Create Roles')

@section('content')

    <section class="card">

        <div class="card-body">

            <form method="POST" action="{{ route('admin.roles.store') }}" >
                @csrf

                <div class="container-fluid px-0">
                    <div class="row">

                        @include('admin.roles.fields')

                    </div>

                    <div class="row">
                        <div class="col">
                            <button id="role-submit-btn" type="submit" class="btn btn-primary">Save</button>
                            <a class="btn btn-danger" href="{{ route('admin.roles.index') }}" >Cancel</a>
                        </div>
                    </div>
                </div>
            </form>

            <div class="text-center">
                
            </div>

        </div>
    </section>

@endsection