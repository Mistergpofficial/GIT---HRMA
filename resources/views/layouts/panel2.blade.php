<article class="message">
    <div class="message-header">
        <div class="row">
            <div class="col-md-12 col-md-offset-4">
                <div class="panel panel-default">

                    <div class="panel-heading">Deductions</div>

                    <div class="panel-body">

                        <div class="form-group{{ $errors->has('tax') ? ' has-error' : '' }}">
                            <label for="tax" class="col-md-4 control-label">Tax *</label>

                            <div class="col-md-6">
                                <input type="text" name="tax" class="form-control">
                                @if ($errors->has('tax'))
                                    <span class="help-block">
                        <strong>{{ $errors->first('tax') }}</strong>
                    </span>
                                @endif
                                <br/>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gsm') ? ' has-error' : '' }}">
                            <label for="gsm" class="col-md-4 control-label">GSM (CUG) USAGE *</label>

                            <div class="col-md-6">
                                <input type="text" name="gsm" class="form-control">
                                @if ($errors->has('gsm'))
                                    <span class="help-block">
                        <strong>{{ $errors->first('gsm') }}</strong>
                    </span>
                                @endif
                                <br/>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nhf') ? ' has-error' : '' }}">
                            <label for="nhf" class="col-md-4 control-label">NHF *</label>

                            <div class="col-md-6">
                                <input type="text" name="nhf" class="form-control">
                                @if ($errors->has('nhf'))
                                    <span class="help-block">
                        <strong>{{ $errors->first('nhf') }}</strong>
                    </span>
                                @endif
                                <br/>
                            </div>
                        </div>










                    </div>
                </div>
            </div>
        </div>
    </div>
</article>





