<?php
?>
<div class="modal fade" id="editMenu" tabindex="-1" role="dialog" aria-labelledby="editMenu" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editMenu"> Edit Menu </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('menu.edit')}}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <input type="hidden" class="menu_id" name="id" value="">
                <div class="form-group">
                        <label for="menu-name">Menu Name</label>
                        <input id="menu-name" class="form-control" type="text" name="name" placeholder="Name">
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-sm btn-success ml-auto">Save</button>
                    </div>
                </div>

                <div class="modal-footer">

                </div>
            </form>
        </div>
    </div>
</div>
