<!-- MODAL -->
<div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="deleteLabel">
                    Apagar Item.
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body" id="deleteDescription">
                <p>
                    Tem certeza de que deseja exclui-lo? Esta operação é <br>irreversível.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">@lang('button.cancel')</button>
                <form action="" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button id="delete_confirm_button" class="btn btn-danger Remove_square" type="submit">
                        @lang('button.delete')
                    </button>
                </form>
            </div>
        </div> <!-- /.modal-content -->
    </div>
</div>
<!-- /.modal-dialog -->

@push('third_party_scripts')
    <script>
        $(document).on('click', '.deleteButton', function(event) {
            event.preventDefault();
            let action = $(this).data('action');
            console.log($(this).data('action'))
            $('#delete_confirm form').attr('action', action)
        });
    </script>
@endpush