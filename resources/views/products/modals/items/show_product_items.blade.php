<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 24-Apr-20
 * Time: 16:45
 */
?>

<div class="modal fade" id="showProductItems" tabindex="-1" role="dialog" aria-labelledby="editSubscriberLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-capitalize">
                <h5 class="modal-title" id="editSubscriberLabel"> Add New Product Item </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive p-4">
                    <table id="productItems" class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th class="text-center" scope="col">{{ __('Index') }}</th>
                            <th class="text-center" scope="col">{{ __('Name') }}</th>
                            <th class="text-center" scope="col">{{ __('Features') }}</th>
                        </tr>
                        </thead>
                        <tbody id="tableBody">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
