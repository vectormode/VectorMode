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
                                    <a href="{{ URL::route('refunds.create') }}" title="" class="btn btn-success btn-sm pull-right">
                                        New Order
                                    </a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="refundsall" class="table table-striped responsive-utilities jambo_table">
                                    <thead>
                                    <tr class="headings">
                                        <th>
                                            <input type="checkbox" class="tableflat" disabled readonly>
                                        </th>
                                        <th>ID</th>
                                        <th>Order ID</th>
                                        <th>Customer Name</th>
                                        <th>Address</th>
                                        <th>Total</th>
                                        <th>Delivery</th>
                                        <th>Grandtotal</th>
                                        <th>Date</th>
                                        <th class=" no-link last"><span class="nobr" width="20%">Action</span>
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($refunds as $refund)
                                        @if ($refund->id % 2 == 0)
                                            <tr class="even pointer">
                                                <td class="a-center ">
                                                    <input type="checkbox" class="tableflat" disabled readonly>
                                                </td>
                                                <td class=" ">{{sprintf("%'.05d\n", $refund->id)}} </td>
                                                <td class=" ">{{sprintf("%'.05d\n", $refund->order_id)}} </td>
                                                <td class=" ">
                                                    {{ $refund->customer_name }}
                                                </td>
                                                <td class=" ">{{ $refund->customer_address }}</td>
                                                <td class=" ">{{ $refund->total }}</td>
                                                <td class=" ">{{ $refund->delivery }}</td>
                                                <td class=" ">{{ $refund->grandtotal }}</td>
                                                <td class=" ">{{ date('F d, Y', strtotime($refund->created_at)) }}</td>
                                                <td class=" last">
                                                    {!! Form::open(array('route' => array('refunds.destroy', $refund->id), 'method' => 'delete', 'id'=>'delete')) !!}
                                                    {!! Form::close() !!}
                                                    <a href="/refunds/{{$refund->id}}/edit" class="btn btn-sm btn-success">Edit</a>
                                                    <button class="btn btn-danger btn-sm delete">Delete</button>
                                                </td>
                                            </tr>
                                        @else
                                            <tr class="odd pointer">
                                                <td class="a-center ">
                                                    <input type="checkbox" class="tableflat" disabled readonly>
                                                </td>
                                                <td class=" ">{{sprintf("%'.05d\n", $refund->id)}} </td>
                                                <td class=" ">{{sprintf("%'.05d\n", $refund->order_id)}} </td>
                                                <td class=" ">
                                                    {{ $refund->customer_name }}
                                                </td>
                                                <td class=" ">{{ $refund->customer_address }}</td>
                                                <td class=" ">{{ $refund->total }}</td>
                                                <td class=" ">{{ $refund->delivery }}</td>
                                                <td class=" ">{{ $refund->grandtotal }}</td>
                                                <td class=" ">{{ date('F d, Y', strtotime($refund->created_at)) }}</td>
                                                <td class=" last">
                                                    {!! Form::open(array('route' => array('refunds.destroy', $refund->id), 'method' => 'delete', 'id'=>'delete')) !!}
                                                    {!! Form::close() !!}
                                                    <a href="/refunds/{{$refund->id}}/edit" class="btn btn-sm btn-success">Edit</a>
                                                    <button class="btn btn-danger btn-sm delete">Delete</button>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{-- {!! $refunds->render() !!} --}}
                        </div>
                    </div>
                </div>

                <br />
                <br />
                <br />

            </div>
            <script type="text/javascript" charset="utf-8" async defer>
                jQuery(document).ready(function($) {
                    var oTable = $('#refundsall').dataTable({
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