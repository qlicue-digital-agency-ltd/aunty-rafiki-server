<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 23-May-20
 * Time: 21:04
 */
?>
<div class="modal fade" id="editProductType" tabindex="-1" role="dialog" aria-labelledby="editProductTypeLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProductTypeLabel"> Edit Entity Type </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('product.type.update')}}">
                    @csrf
                    @method('put')
                    <input name="id" class="id" type="text" value="" hidden id="id" >
                    <div class="form-group">
                        <label class="form-control-label"
                               for="name">{{ __('name') }}</label>
                        <div class="input-group">
                            <input type="text" name="name" id="name"
                                   class="form-control name"
                                   placeholder="{{ __('Product Type name') }}"
                                   value="{{ old('name') }}" required
                                   autofocus>
                        </div>

                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

