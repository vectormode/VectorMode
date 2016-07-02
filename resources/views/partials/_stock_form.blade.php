<span class="section">Stock Details</span>

<div class="item form-group">
    {!! Form::label('product_id', 'Select Product', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'));!!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::select('product_id', $product_names, null, ['class'=>'form-control col-md-7 col-xs-12', 'placeholder' => 'Select Product...'])!!}
    </div>
</div>
<div class="item form-group">
    {!! Form::label('supplier_id', 'Select Supplier', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'));!!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::select('supplier_id', $supplier_names, null, ['class'=>'form-control col-md-7 col-xs-12', 'placeholder' => 'Select Supplier...'])!!}
    </div>
</div>
<div class="item form-group">
    {!! Form::label('store_id', 'Select Store', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'));!!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::select('store_id', $store_names, null, ['class'=>'form-control col-md-7 col-xs-12', 'placeholder' => 'Select Store...'])!!}
    </div>
</div>
<div class="item form-group">
    {!! Form::label('qty', 'Stock Quantity', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'));!!}
    <div class="col-md-6 col-sm-6 col-xs-12">
       {!! Form::number('qty', null,['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required', 'placeholder'=>'Enter quantity...']);!!}
    </div>
</div>
<div class="item form-group">
    {!! Form::label('purchase_price', 'Purchase Price(TK.)', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'));!!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::number('purchase_price', null,['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required', 'placeholder'=>'Enter purchase price here...']);!!}
    </div>
</div>
<div class="item form-group">
    {!! Form::label('retail_price', 'Retail Price(TK.)', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12'));!!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::number('retail_price', null,['class'=>'form-control col-md-7 col-xs-12', 'required'=>'required', 'placeholder'=>'Enter retail price here...']);!!}
    </div>
</div>
<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-3">
        <button id="send" type="submit" class="btn btn-success">Submit</button>
        <a href="/suppliers" class="btn btn-primary">Cancel</a>
    </div>
</div>
