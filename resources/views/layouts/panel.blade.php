<article class="message">
    <div class="message-header">
        <div class="row">
            <div class="col-md-12 col-md-offset-4">
                <div class="panel panel-default">

                <div class="panel-heading">Allowances</div>

    <div class="panel-body">

        <div class="form-group{{ $errors->has('transport') ? ' has-error' : '' }}">
            <label for="transport" class="col-md-4 control-label">Transport Allowance *</label>

            <div class="col-md-6">
              <input type="text" name="transport" class="form-control">
                @if ($errors->has('transport'))
                    <span class="help-block">
                        <strong>{{ $errors->first('transport') }}</strong>
                    </span>
                @endif
                <br/>
            </div>
        </div>

        <div class="form-group{{ $errors->has('housing') ? ' has-error' : '' }}">
            <label for="housing" class="col-md-4 control-label">Housing Allowance *</label>

            <div class="col-md-6">
                <input type="text" name="housing" class="form-control">
                @if ($errors->has('housing'))
                    <span class="help-block">
                        <strong>{{ $errors->first('housing') }}</strong>
                    </span>
                @endif
                <br/>
            </div>
        </div>

        <div class="form-group{{ $errors->has('dressing') ? ' has-error' : '' }}">
            <label for="dressing" class="col-md-4 control-label">Dressing Allowance *</label>

            <div class="col-md-6">
                <input type="text" name="dressing" class="form-control">
                @if ($errors->has('dressing'))
                    <span class="help-block">
                        <strong>{{ $errors->first('dressing') }}</strong>
                    </span>
                @endif
                <br/>
            </div>
        </div>

        <div class="form-group{{ $errors->has('domestic') ? ' has-error' : '' }}">
            <label for="domestic" class="col-md-4 control-label">Domestic Allowance *</label>

            <div class="col-md-6">
                <input type="text" name="domestic" class="form-control">
                @if ($errors->has('domestic'))
                    <span class="help-block">
                        <strong>{{ $errors->first('domestic') }}</strong>
                    </span>
                @endif
                <br/>
            </div>
        </div>

        <div class="form-group{{ $errors->has('education') ? ' has-error' : '' }}">
            <label for="h_rent" class="col-md-4 control-label">Education Allowance *</label>

            <div class="col-md-6">
                <input type="text" name="education" class="form-control">
                @if ($errors->has('education'))
                    <span class="help-block">
                        <strong>{{ $errors->first('education') }}</strong>
                    </span>
                @endif
                <br/>
            </div>
        </div>

        <div class="form-group{{ $errors->has('furniture') ? ' has-error' : '' }}">
            <label for="furniture" class="col-md-4 control-label">Furniture Allowance *</label>

            <div class="col-md-6">
                <input type="text" name="furniture" class="form-control">
                @if ($errors->has('furniture'))
                    <span class="help-block">
                        <strong>{{ $errors->first('furniture') }}</strong>
                    </span>
                @endif
                <br/>
            </div>
        </div>

        <div class="form-group{{ $errors->has('utilities') ? ' has-error' : '' }}">
            <label for="utilities" class="col-md-4 control-label">Utilities Allowance *</label>

            <div class="col-md-6">
                <input type="text" name="utilities" class="form-control">
                @if ($errors->has('utilities'))
                    <span class="help-block">
                        <strong>{{ $errors->first('utilities') }}</strong>
                    </span>
                @endif
                <br/>
            </div>
        </div>

        <div class="form-group{{ $errors->has('lunch') ? ' has-error' : '' }}">
            <label for="lunch" class="col-md-4 control-label">Lunch Allowance *</label>

            <div class="col-md-6">
                <input type="text" name="lunch" class="form-control">
                @if ($errors->has('lunch'))
                    <span class="help-block">
                        <strong>{{ $errors->first('lunch') }}</strong>
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





