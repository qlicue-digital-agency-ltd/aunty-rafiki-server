<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 23-May-20
 * Time: 21:25
 */
?>
<div class="modal fade" id="deleteProduct" tabindex="-1" role="dialog" aria-labelledby="deleteProductLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteProductLabel"> Edit Entity Type </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('product.delete')}}">

                @csrf
                @method('delete')
                <input name="id" class="product-item-id" type="text" value="" hidden id="id">
                <div class="modal-body">


                </div>

                <div class="modal-footer">
                    <div class="row">
                        <button type="submit" class="btn btn-danger mt-4 mr-auto">{{ __('Delete') }}</button>
                    </div>
                </div>


        </form>
    </div>
</div>
</div>
