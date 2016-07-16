@extends('layouts.master')
    @section('content')
        <div class="page-content">

            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">

                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-8 col-xs-12 item form-group">

                                </div>
                                <div class="col-sm-4 col-xs-12 add-new-buttons">
                                    <a href="{{ URL::route('orders.create') }}" title="" class="btn btn-success btn-sm pull-right">
                                        New Order
                                    </a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="stocksall" class="table table-striped responsive-utilities jambo_table">
                                    <thead>
                                    <tr class="headings">
                                        <th>
                                            <input type="checkbox" class="tableflat" disabled readonly>
                                        </th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Supplier</th>
                                        <th>Store</th>
                                        <th>Purchase Price</th>
                                        <th>Retail Price</th>
                                        <th>Quantity</th>
                                        <th>Date</th>
                                        <th class=" no-link last"><span class="nobr" width="20%">Action</span>
                                        </th>
                                    </tr>
                                    </thead>

                                    {{--<tbody>--}}
                                    {{--@foreach($stocks as $stock)--}}
                                        {{--@if ($stock->id % 2 == 0)--}}
                                            {{--<tr class="even pointer">--}}
                                                {{--<td class="a-center ">--}}
                                                    {{--<input type="checkbox" class="tableflat" disabled readonly>--}}
                                                {{--</td>--}}
                                                {{--<td class=" ">{{sprintf("%'.05d\n", $stock->id)}} </td>--}}
                                                {{--<td class=" ">--}}
                                                    {{--{{ $stock->product_details->name }}--}}
                                                {{--</td>--}}
                                                {{--<td class=" ">{{ $stock->supplier_details->name }}</td>--}}
                                                {{--<td class=" ">{{ $stock->store_details->name }}</td>--}}
                                                {{--<td class=" ">{{ $stock->purchase_price }}</td>--}}
                                                {{--<td class=" ">{{ $stock->retail_price }}</td>--}}
                                                {{--<td class=" ">{{ $stock->qty }}</td>--}}
                                                {{--<td class=" ">{{ date('F d, Y', strtotime($stock->created_at)) }}</td>--}}
                                                {{--<td class=" last">--}}
                                                    {{--{!! Form::open(array('route' => array('stocks.destroy', $stock->id), 'method' => 'delete', 'id'=>'delete')) !!}--}}
                                                    {{--{!! Form::close() !!}--}}
                                                    {{--<a href="/stocks/{{$stock->id}}/edit" class="btn btn-sm btn-success">Edit</a>--}}
                                                    {{--<button class="btn btn-danger btn-sm delete">Delete</button>--}}
                                                {{--</td>--}}

                                            {{--</tr>--}}
                                        {{--@else--}}
                                            {{--<tr class="even pointer">--}}
                                                {{--<td class="a-center ">--}}
                                                    {{--<input type="checkbox" class="tableflat" disabled readonly>--}}
                                                {{--</td>--}}
                                                {{--<td class=" ">{{sprintf("%'.05d\n", $stock->id)}} </td>--}}
                                                {{--<td class=" ">--}}
                                                    {{--{{ $stock->product_details->name }}--}}
                                                {{--</td>--}}
                                                {{--<td class=" ">{{ $stock->supplier_details->name }}</td>--}}
                                                {{--<td class=" ">{{ $stock->store_details->name }}</td>--}}
                                                {{--<td class=" ">{{ $stock->purchase_price }}</td>--}}
                                                {{--<td class=" ">{{ $stock->retail_price }}</td>--}}
                                                {{--<td class=" ">{{ $stock->qty }}</td>--}}
                                                {{--<td class=" ">{{ date('F d, Y', strtotime($stock->created_at)) }}</td>--}}
                                                {{--<td class=" last">--}}
                                                    {{--{!! Form::open(array('route' => array('stocks.destroy', $stock->id), 'method' => 'delete', 'id'=>'delete')) !!}--}}
                                                    {{--{!! Form::close() !!}--}}
                                                    {{--<a href="/stocks/{{$stock->id}}/edit" class="btn btn-sm btn-success">Edit</a>--}}
                                                    {{--<button class="btn btn-danger btn-sm delete">Delete</button>--}}
                                                {{--</td>--}}

                                            {{--</tr>--}}
                                        {{--@endif--}}
                                    {{--@endforeach--}}
                                    {{--</tbody>--}}
                                </table>
                            </div>
                            {{-- {!! $stocks->render() !!} --}}
                        </div>
                    </div>
                </div>

                <br />
                <br />
                <br />

            </div>
            <script type="text/javascript" charset="utf-8" async defer>
                jQuery(document).ready(function($) {
                    var oTable = $('#stocksall').dataTable({
                        "oLanguage": {
                            "sSearch": "Search all columns:"
                        },
                        "aoColumnDefs": [
                            {
                                'bSortable': false,
                                'aTargets': [0]
                            }
                        ],
                        "bPaginate": false,
                        'iDisplayLength': 12,
                        "sPaginationType": "full_numbers"
                    });
                });
            </script>
        </div>
    @endsection