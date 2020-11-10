<?php
/**
 * Created by PhpStorm.
 * User: henry
 * Date: 24-May-20
 * Time: 22:49
 */
?>


<div class="modal fade" id="editSubtopicModal" tabindex="-1" role="dialog" aria-labelledby="editSubtopicLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editSubtopicLabel"> Edit Subtopic </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form method="post" action="{{ route('subtopic.update') }}" enctype="multipart/form-data"
                          autocomplete="off">
                        @csrf
                        @method('put')
                        <div class="pl-lg-4">
                            <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                <input type="text" name="id" id="subtopic_id" readonly hidden >

                                <label class="form-control-label"
                                       for="name">{{ __('Title') }}</label>
                                <div class="input-group">
                                    <input type="text" name="title" id="modalSubtopicTitle"
                                           class="form-control {{ $errors->has('tile') ? ' is-invalid' : '' }}"
                                           placeholder="{{ __('Subtopic title') }}"
                                           value="{{ old('title') }}"
                                           autofocus>
                                </div>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('title') }}</strong>
                                                    </span>
                                @endif
                            </div>

                        </div>
                        <div class="form-row justify-content-center">
                            <img id="modal-subtopic-image-preview" style="max-width: 80%" src=""
                                 onerror="this.onerror=null; this.src='{{asset('icons/empty.png')}}'; this.alt='No Topic image' "
                                 class="img-fluid mb-2" alt="Topic Image"/>
                        </div>

                        <div class="form-group ">
                            <div class="input-group mt-1 mb-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="modalSubtopicImage">Image</span>
                                </div>
                                <div class="custom-file ">
                                    <input type="file" name="image" class="custom-file-input {{ $errors->has('image') ? ' is-invalid' : '' }}"
                                           id="subtopic-image"
                                           aria-describedby="subtopic-image-description"
                                           onchange="readImgURL(this);">
                                    <label class="custom-file-label @if ($errors->has('image')) text-danger @endif" for="topic-image">
                                        @if ($errors->has('image'))
                                            {{ $errors->first('image') }}
                                        @else
                                            Choose Image
                                        @endif
                                    </label>


                                </div>

                            </div>
                        </div>


                        <div class="form-row justify-content-center">
                            <div class="text-center">
                                <button type="submit"
                                        class="btn btn-success mt-4">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function readImgURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#modal-subtopic-image-preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
            else {
                $('#modal-subtopic-image-preview').attr('src', localStorage.getItem('subtopicImage'));
            }
        }
    </script>
</div>