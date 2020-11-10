<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 23-May-20
 * Time: 21:25
 */
?>
<div class="modal fade" id="deleteTopicModal" tabindex="-1" role="dialog" aria-labelledby="deleteTopicLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteTopicLabel"> Delete Topic </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('topic.delete')}}">

                @csrf
                @method('delete')
                <input name="id" class="topic-id" type="text" value="" hidden id="id">
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
