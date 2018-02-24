<span class="section">Product Details</span>

<div class="item form-group">
    {!! Form::label('name', 'Product Name', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'));!!}
    <div class="col-md-6 col-sm-6 col-xs-12">
       {!! Form::text('name', null,['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required', 'placeholder'=>'Product name...']);!!}
    </div>
</div>

<div class="item form-group">
    {!! Form::label('description', 'Product Description', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'));!!}
    <div class="col-md-6 col-sm-6 col-xs-12">
       {!! Form::textarea('description', null,['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required', 'placeholder'=>'Enter product description...']);!!}
    </div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-3">
        <button id="send" type="submit" class="btn btn-success">Submit</button>
        <a href="/products" class="btn btn-primary">Cancel</a>
    </div>
</div>
