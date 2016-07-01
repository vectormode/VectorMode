<span class="section">Customer Details</span>

<div class="item form-group">
    {!! Form::label('name', 'Customer Name', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'));!!}
    <div class="col-md-6 col-sm-6 col-xs-12">
       {!! Form::text('name', null,['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required', 'placeholder'=>'Customer name...']);!!}
    </div>
</div>
<div class="item form-group">
    {!! Form::label('address', 'Customer Address', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'));!!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::textarea('address', null,['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required', 'placeholder'=>'Enter customer address...']);!!}
    </div>
</div>
<div class="item form-group">
    {!! Form::label('phone', 'Customer Phone', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'));!!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('phone', null,['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required', 'placeholder'=>'Customer phone...']);!!}
    </div>
</div>
<div class="item form-group">
    {!! Form::label('description', 'Customer Description', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'));!!}
    <div class="col-md-6 col-sm-6 col-xs-12">
       {!! Form::textarea('description', null,['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required', 'placeholder'=>'Enter customer description...']);!!}
    </div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-3">
        <button id="send" type="submit" class="btn btn-success">Submit</button>
        <a href="/customers" class="btn btn-primary">Cancel</a>
    </div>
</div>
