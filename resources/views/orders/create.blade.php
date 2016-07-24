@extends('layouts.master')
    @section('content')
        <div class="page-content">

            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">

                        <div class="x_content">
                            {!! Form::open(['url'=>'/orders','class'=>'form-horizontal form-label-left']) !!}

                                @include('partials._order_form')

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-12 text-right">
                                        <button id="send" type="submit" class="btn btn-success">Submit</button>
                                        <a href="/orders" class="btn btn-primary">Cancel</a>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection