<!-- line modal -->
<div class="modal fade" id="upload_image_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                            class="sr-only">Close</span></button>
                <h3 class="modal-title" id="lineModalLabel">Update Profile </h3>
            </div>
            <div class="modal-body">
                <!-- content goes here -->
                <form action="{{ route('user.upload-picture') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input name="id" class="hidden" value="{{Auth::user()->id}}">
                    <div class="form-group">
                        <label for="exampleInputFile">Image Update</label>
                        <input type="file" class="form-control" name="pro_image">
                        <p class="help-block">Select the image you want to upload here.</p>
                    </div>

                    <button type="submit" class="btn btn-default">Update</button>
                </form>

            </div>
            <div class="modal-footer">
                <div class="btn-group btn-group-justified col-md-4 pull-right" role="group" aria-label="group button">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" data-dismiss="modal" role="button">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>