@extends('admin.master')
@section('mainContent')
    <section id="main-content">
        <section class="wrapper">

            <div class="col-md-12 stats-info stats-last widget-shadow">

                <div class="stats-last-agile">
                    <h3 style="text-align: center;color: #54A857;margin:2%">{{Session::get('message')}}</h3>
                    <table class="table stats-table ">
                        <thead>
                        <tr>
                            <th>S.NO</th>
                            <th style="">Name</th>
                            <th style="">Batch Name</th>
                            <th style="">Email</th>
                            <th style="">Contract</th>
                            <th style="">Status</th>
                            <th style="">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        ?>
                        @foreach( $crlists as  $crlist)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$crlist->name}}</td>
                                <td>{{$crlist->batch}}</td>
                                <td>{{$crlist->email}}</td>
                                <td>{{$crlist->contract}}</td>
                                <td>
                                    @if($crlist->status == 1)
                                        <strong style="color: green">Approved</strong>
                                    @else
                                        <strong style="color: darkred"> Not Approved</strong>
                                    @endif
                                </td>
                                <td>
                                    @if($crlist->status ==1)
                                    <a href="{{ url('admin/cr/block/').'/'.$crlist->id }}" class="btn btn-success">
                                        <span>Block</span>
                                    </a>
                                    @else
                                        <a href="{{ url('admin/cr/approve/').'/'.$crlist->id }}" class="btn btn-success">
                                            <span>Approve</span>
                                        </a>
                                    @endif
                                    <a href="{{ url('admin/cr/delete/').'/'.$crlist->id }}" class="btn btn-danger">
                                        <span>Delete</span>
                                    </a>
                                </td>

                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="clearfix"> </div>
            </div>
        </section>
@endsection