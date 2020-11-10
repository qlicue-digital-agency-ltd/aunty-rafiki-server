<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 23-May-20
 * Time: 21:04
 */
?>
<div class="modal fade" id="editProduct" tabindex="-1" role="dialog" aria-labelledby="editProductLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProductLabel"> Edit Entity Type </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('product.update')}}">
                    @csrf
                    @method('put')
                    <input name="id" class="product-id" type="text" value="" hidden id="id" >
                    <div class="form-group">
                        <label class="form-control-label"
                               for="name">{{ __('name') }}</label>
                        <div class="input-group">
                            <input type="text" name="name" id="name"
                                   class="form-control product-name"
                                   placeholder="{{ __('Product Type product-name') }}"
                                   value="{{ old('name') }}" required
                                   autofocus>
                        </div>

                        <div class="form-group">
                            <label for="product-type" class="form-control-label">
                                Product Type
                            </label>
                            <div class="input-group">
                                <select  class="form-control product-type" name="product_type_id">
                                    @foreach($productTypes as $productType)
                                        <option value="{{$productType->id}}">{{$productType->name}}</option>
                                    @endforeach
                                </select>
                            </div>
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

