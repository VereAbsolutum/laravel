@extends('layouts.app')

@section('page-title', 'Create')

@section('content')

    <section class="card">

        <div class="card-body">

            @include('admin.permissions.fields')

        </div>
    </section>

@endsection