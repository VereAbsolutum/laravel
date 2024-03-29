@section('adminlte_css_pre')
    @include('layouts.datatables_css')
@endsection

{!! $dataTable->table(['width' => '100%', 'class' => 'table table-striped table-bordered']) !!}

@push('adminlte_js')
    @include('layouts.datatables_js')
    {!! $dataTable->scripts() !!}
    @include('layouts.modal_confirmation')
@endpush
