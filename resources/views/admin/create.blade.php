<div class="tab-pane active" id="home">
    @if(Session::has('success'))
        <div class="alert alert-success">
            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
            {{ Session::get('success') }}
        </div>
    @endif
<div class="panel-body">
    <form action="{{ route('admin.create') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="panel-heading">PERSONAL INFORMATION</div>
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" value="{{ old('full_name') }}" class="form-control"  name="full_name" >
            <span class="help-block">
                @if($errors->has('full_name'))
                    <strong>{{ $errors->first('full_name') }}</strong>
                @endif
            </span>
        </div>
        <div class="form-group">
            <label>Email Address</label>
            <input type="email" value="{{ old('email') }}" class="form-control"  name="email" >
            <span class="help-block">
                @if($errors->has('email'))
                    <strong>{{ $errors->first('email') }}</strong>
                @endif
            </span>
        </div>

        <div class="form-group">
            <label>Date of Birth</label>
            <input type="date" value="{{ old('dob') }}" class="form-control"  name="dob" >
            <span class="help-block">
                @if($errors->has('dob'))
                    <strong>{{ $errors->first('dob') }}</strong>
                @endif
            </span>
        </div>

        <div class="panel-heading">ACCOUNT INFORMATION</div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" value="{{ old('password') }}" class="form-control"  name="password" >
            <span class="help-block">
                @if($errors->has('password'))
                    <strong>{{ $errors->first('password') }}</strong>
                @endif
            </span>
        </div>
        <div class="form-group">
            <label>Password(again)</label>
            <input type="password" value="{{ old('password_confirmation') }}" class="form-control"  name="password_confirmation" >
            <span class="help-block">
                @if($errors->has('password_confirm'))
                    <strong>{{ $errors->first('password_confirm') }}</strong>
                @endif
            </span>
        </div>

        <div class="panel-heading">CONTACT INFORMATION</div>
        <div class="form-group">
            <label>Mobile</label>
            <input type="text" value="{{ old('mobile') }}" class="form-control"  name="mobile" >
            <span class="help-block">
                @if($errors->has('mobile'))
                    <strong>{{ $errors->first('mobile') }}</strong>
                @endif
            </span>
        </div>
        <div class="form-group">
            <label>Address</label>
            <textarea name="address" class="form-control" cols="2" rows="10" ></textarea>
            <span class="help-block">
                @if($errors->has('address'))
                    <strong>{{ $errors->first('address') }}</strong>
                @endif
            </span>
        </div>
        <div class="form-group">
            <script type= "text/javascript" src = "{!! asset('js/countries.js') !!}"></script>
            <label> Select Country (with states):</label>
            <select id="country" name ="country" class="form-control"></select><br>
            <label> Select State: </label>
            <select name ="state" id ="state" class="form-control"></select>
        </div>


        <div class="panel-heading">COMPANY INFORMATION</div>
        <div class="form-group">
            <label>Department</label>
            <select name="department" class="form-control">
                <option value="0">Choose a department * -</option>
                <option value="1">ACCOUNT</option>
                <option value="2">ADMIN</option>
                <option value="3">AGENCY</option>
                <option value="4">CUSTOMER SERVICE (CCU)</option>
                <option value="5">HUMAN RESOURCES (HR)</option>
                <option value="6">INFORMATION AND COMMUNICATION TECH (ICT)</option>
            </select>
            <span class="help-block">
                @if($errors->has('department'))
                    <strong>{{ $errors->first('department') }}</strong>
                @endif
            </span>
        </div>
        <div class="form-group">
            <label>Employment Type</label>
            <select name="employment_type" class="form-control">
                <option value="NIL">Choose employment type</option>
                <option value="FULL TIME">FULL TIME</option>
                <option value="CONTRACT">CONTRACT</option>
            </select>
        </div>
        <div class="form-group">
            <label>Designation</label>
            <select name="designation" class="form-control">
                <option value="0">Choose a designation * -</option>
                <option value="1">EXECUTIVE 1</option>
                <option value="2">EXECUTIVE 2</option>
                <option value="3">DEPUTY MANAGER</option>
                <option value="4">MANAGER</option>
                <option value="5">HEAD</option>
                <option value="6">CONTROLLER</option>
            </select>
            <span class="help-block">
                @if($errors->has('designation'))
                    <strong>{{ $errors->first('designation') }}</strong>
                @endif
            </span>
        </div>
        <div class="form-group">
            <label>DATE OF EMPLOYMENT</label>
            <input type="date" value="{{ old('employment_date') }}" class="form-control"  name="employment_date" >
            <span class="help-block">
                @if($errors->has('employment_date'))
                    <strong>{{ $errors->first('employment_date') }}</strong>
                @endif
            </span>
        </div>
        <div class="panel-heading">EDUCATION INFORMATION</div>
        <div class="form-group">
            <label>SCHOOL ATTENDED</label>
            <input type="text" value="{{ old('school') }}" class="form-control"  name="school" >
            <span class="help-block">
                @if($errors->has('school'))
                    <strong>{{ $errors->first('school') }}</strong>
                @endif
            </span>
        </div>
        <div class="form-group">
            <label>COURSE OF STUDY</label>
            <input type="text" value="{{ old('course') }}" class="form-control"  name="course" >
            <span class="help-block">
                @if($errors->has('course'))
                    <strong>{{ $errors->first('course') }}</strong>
                @endif
            </span>
        </div>
        <div class="form-group">
            <label>DEGREE OBTAINED</label>
            <input type="text" value="{{ old('degree') }}" class="form-control"  name="degree" >
            <span class="help-block">
                @if($errors->has('degree'))
                    <strong>{{ $errors->first('degree') }}</strong>
                    @endif
            </span>
        </div>

        <div class="form-group">
            <label>UPLOAD CV</label>
            <input type="file" value="{{ old('documents') }}" class="form-control"  name="documents" >
            <span class="help-block">
                @if($errors->has('documents'))
                    <strong>{{ $errors->first('documents') }}</strong>
                @endif
            </span>
        </div>








        <div class="list-group-item">

        </div>





        <button type="submit" class="btn btn-lg btn-primary btn-block">I Have Filled And Checked All Details. Create Employee For Me Now.</button>
    </form>
</div>

</div>
