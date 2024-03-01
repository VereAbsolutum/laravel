<div class='btn-group'>
    <a href="{{ route('admin.usuarios.show', $id) }}" class='btn btn-outline-secondary btn-sm'>
        <i class="fa-solid fa-eye"></i>
    </a>
    <a href="{{ route('admin.usuarios.edit', $id) }}" class='btn btn-outline-primary btn-sm'>
         <i class="fa fa-pencil"></i>
    </a>
    <a href="#" data-action="{{ route( 'admin.usuarios.destroy', $id ) }}" class="deleteButton btn btn-sm  btn-outline-danger" type="button" data-toggle="modal" data-target="#delete_confirm">
        <i class="fa-solid fa-trash-can"></i>
    </a>
</div>


