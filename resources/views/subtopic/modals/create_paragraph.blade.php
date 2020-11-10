<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 02-Sep-20
 * Time: 22:17
 */
?>

<div class="modal fade" id="createParagraph" tabindex="-1" role="dialog" aria-labelledby="createParagraph" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createParagraphTitle"> Create Paragraph </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="paragraph-form" class="paragraph-form" method="POST" action="{{route('menu.edit')}}">
                @csrf
                {{--@method('PUT')--}}
                <div class="modal-body">
                    <input type="text" class="form-method" name="_method" value="" hidden>
                    <input type="text" class="subtopic-id" name="subtopic_id" value="" hidden>
                    <input type="text" class="paragraph-id" name="id" value="" hidden>
                    <div class="form-group">
                        <label for="paragraph-title">Title</label>
                        <input id="paragraph-title" class=" form-control" type="text" name="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="paragraph-body">Body</label>
                        <textarea class="paragraph-body form-control" rows="5" id="paragraph-body" name="body">

                        </textarea>
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
