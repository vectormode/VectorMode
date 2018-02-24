<span class="section">User Details</span>

<div class="item form-group">
    {!! Form::label('name', 'Name', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'));!!}
    <div class="col-md-6 col-sm-6 col-xs-12">
       {!! Form::text('name', null,['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required', 'placeholder'=>'User\'s name...']);!!}
    </div>
</div>

<div class="item form-group">
    {!! Form::label('username', 'Username', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'));!!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('username', null,['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required', 'placeholder'=>'Username...']);!!}
    </div>
</div>

<div class="item form-group">
    {!! Form::label('phone', 'Phone', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'));!!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('phone', null,['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required', 'placeholder'=>'User phone...']);!!}
    </div>
</div>

<div class="item form-group">
    {!! Form::label('address', 'User Address', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'));!!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::textarea('address', null,['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required', 'placeholder'=>'Enter user address...']);!!}
    </div>
</div>

<div class="item form-group">
    {!! Form::label('role', 'Select User Role', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'));!!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::select('role', [ 'Admin' =>'Admin', 'Manager' =>'Manager' ], null, [ 'class'=>'form-control col-md-7 col-xs-12', 'placeholder' => 'Select User Role...' ])!!}
    </div>
</div>

<div class="item form-group">
    {!! Form::label('password', 'Password', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'));!!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::password('password',['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required', 'placeholder'=>'Enter password...']);!!}
    </div>
</div>

<div class="item form-group">
    {!! Form::label('password_confirmation', 'Password Confirmation', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'));!!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::password('password_confirmation',['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required', 'placeholder'=>'Confirm password...']);!!}
    </div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-3">
        <button id="send" type="submit" class="btn btn-success">Submit</button>
        <a href="/users" class="btn btn-primary">Cancel</a>
    </div>
</div>
