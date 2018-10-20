<div class="modal inmodal" id="send_mail" tabindex="-1" role="dialog" aria-hidden="true"
     xmlns="http://www.w3.org/1999/html">
    <div class="modal-dialog modal-lg">
        <div class="modal-content animated rotateIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Compass</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" action="php/send_message.php">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="to_nickname"> To </label>
                        <div class="col-sm-10">
                            <input required class="form-control" type="text" id="to_nickname" name="to_nickname" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="subject"> Subject </label>
                        <div class="col-sm-10">
                            <input required class="form-control" type="text" id="subject" name="subject" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="content"> Content </label>
                        <div class="col-sm-10">
                            <textarea required class="form-control" type="text" id="content" name="content" /></textarea>
                        </div>
                    </div>
                    <div class="clearfix form-actions">
                        <div class="col-md-offset-3 col-md-9">
                            <button class="btn btn-info"  type="Submit"  name="submit">
                                <i class="ace-icon fa fa-check bigger-110"></i>
                                Submit
                            </button>

                            &nbsp; &nbsp; &nbsp;
                            <button class="btn" type="reset">
                                <i class="ace-icon fa fa-undo bigger-110"></i>
                                Reset
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal inmodal" id="forget_password" tabindex="-1" role="dialog" aria-hidden="true"
     xmlns="http://www.w3.org/1999/html">
    <div class="modal-dialog modal-lg">
        <div class="modal-content animated rotateIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Compass</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" action="php/forget_password.php">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="email"> Email </label>
                        <div class="col-sm-10">
                            <input required class="form-control" type="text" id="email" name="email" />
                        </div>
                    </div>
                    <div class="clearfix form-actions">
                        <div class="col-md-offset-3 col-md-9">
                            <button class="btn btn-info"  type="Submit"  name="submit">
                                <i class="ace-icon fa fa-check bigger-110"></i>
                                Submit
                            </button>

                            &nbsp; &nbsp; &nbsp;
                            <button class="btn" type="reset">
                                <i class="ace-icon fa fa-undo bigger-110"></i>
                                Reset
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>