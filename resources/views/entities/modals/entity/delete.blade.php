<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 23-May-20
 * Time: 21:25
 */
?>
<div class="modal fade" id="deleteEntity" tabindex="-1" role="dialog" aria-labelledby="deleteEntityLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteEntityLabel"> Delete Entity  {{$entity->name}} </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('entity.delete')}}">

                @csrf
                @method('delete')
                <input type="text" name="id" value="{{$entity->id}}" hidden>
                <div class="modal-body">
                    Are you sure you want to delete this Entity?
                    {{$entity->name}}

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
