<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 23-Dec-19
 * Time: 16:09
 */
?>
<div class="modal fade" id="deleteMenu" tabindex="-1" role="dialog" aria-labelledby="deleteMenu" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteMenu"> Delete Menu </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('menu.delete')}}">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <input type="hidden" class="menu_id" name="id" value="">
                    <div class="form-group">
                        <label for="menu-name">Menu Name</label>
                        <input id="menuToDelete" class="form-control" type="text" name="name" placeholder="Name" readonly>
                    </div>
                    <div class="row text-right">

                    </div>
                </div>

                <div class="modal-footer">
                    <button  class="btn btn-sm btn-info ml-auto" data-dismiss="modal" >Cancel</button>
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>