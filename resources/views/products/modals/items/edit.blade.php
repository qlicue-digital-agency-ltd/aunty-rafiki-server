<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 23-May-20
 * Time: 21:04
 */
?>
<div class="modal fade" id="editProductItem" tabindex="-1" role="dialog" aria-labelledby="editProductItemLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProductItemLabel"> Edit Entity Type </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('product.item.update')}}">
                    @csrf
                    @method('put')
                    <input name="id" class="product-item-id" type="text" value="" hidden id="id" >
                    <div class="form-group">
                        <label class="form-control-label"
                               for="name">{{ __('Name') }}</label>
                        <div class="input-group">
                            <input type="text" name="name" id="name"
                                   class="form-control product-item-name"
                                   placeholder="{{ __('Product Item name') }}"
                                   value="{{ old('name') }}" required
                                   autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label"
                               for="name">{{ __('Features') }}</label>
                        <div class="input-group">
                            <input type="text" name="features" id="features"
                                   class="form-control product-item-features"
                                   placeholder="{{ __('Product Item Features') }}"
                                   value="{{ old('features') }}" required
                                   autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label"
                               for="name">{{ __('Size') }}</label>
                        <div class="input-group">
                            <input type="text" name="size" id="size"
                                   class="form-control product-item-size"
                                   placeholder="{{ __('Product Item Size') }}"
                                   value="{{ old('size') }}" required
                                   autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label"
                               for="name">{{ __('Price') }}</label>
                        <div class="input-group">
                            <input type="text" name="price" id="price"
                                   class="form-control product-item-price"
                                   placeholder="{{ __('Product Item Price') }}"
                                   value="{{ old('price') }}" required
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

