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
                                    <a href="{{ URL::route('users.create') }}" title="" class="btn btn-success btn-sm pull-right">
                                        Add New User
                                    </a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="usersall" class="table table-striped responsive-utilities jambo_table">
                                    <thead>
                                    <tr class="headings">
                                        <th>
                                            <input type="checkbox" class="tableflat" disabled readonly>
                                        </th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th class=" no-link last"><span class="nobr" width="20%">Action</span>
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($users as $user)
                                        @if ($user->id % 2 == 0)
                                            <tr class="even pointer">
                                                <td class="a-center ">
                                                    <input type="checkbox" class="tableflat" disabled readonly>
                                                </td>
                                                <td class=" ">{{sprintf("%'.05d\n", $user->id)}} </td>
                                                <td class=" ">
                                                    {{$user->name}}
                                                </td>
                                                <td class=" ">
                                                    {{$user->phone}}
                                                </td>
                                                <td class=" ">
                                                    {{$user->address}}
                                                </td>
                                                <td class=" last">
                                                    {!! Form::open(array('route' => array('users.destroy', $user->id), 'method' => 'delete', 'id'=>'delete')) !!}
                                                    {!! Form::close() !!}
                                                    <a href="/users/{{$user->id}}/edit" class="btn btn-sm btn-success">Edit</a>
                                                    <button class="btn btn-danger btn-sm delete">Delete</button>
                                                </td>

                                            </tr>
                                        @else
                                            <tr class="even pointer">
                                                <td class="a-center ">
                                                    <input type="checkbox" class="tableflat" disabled readonly>
                                                </td>
                                                <td class=" ">{{sprintf("%'.05d\n", $user->id)}} </td>
                                                <td class=" ">
                                                    {{$user->name}}
                                                </td>
                                                <td class=" ">
                                                    {{$user->phone}}
                                                </td>
                                                <td class=" ">
                                                    {{$user->address}}
                                                </td>
                                                <td class=" last">
                                                    {!! Form::open(array('route' => array('users.destroy', $user->id), 'method' => 'delete', 'id'=>'delete')) !!}
                                                    {!! Form::close() !!}
                                                    <a href="/users/{{$user->id}}/edit" class="btn btn-sm btn-success">Edit</a>
                                                    <button class="btn btn-danger btn-sm delete">Delete</button>
                                                </td>

                                            </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{-- {!! $users->render() !!} --}}
                        </div>
                    </div>
                </div>

                <br />
                <br />
                <br />

            </div>
            <script type="text/javascript" charset="utf-8" async defer>
                jQuery(document).ready(function($) {
                    var oTable = $('#usersall').dataTable({
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