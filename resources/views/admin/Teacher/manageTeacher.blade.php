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
                        @foreach( $teacherlists as  $teacherlist)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$teacherlist->name}}</td>
                                <td>{{$teacherlist->email}}</td>
                                <td>{{$teacherlist->contract}}</td>
                                <td>
                                    @if($teacherlist->status == 1)
                                        <strong style="color: green">Approved</strong>
                                    @else
                                        <strong style="color: darkred"> Not Approved</strong>
                                    @endif
                                </td>
                                <td>
                                    @if($teacherlist->status ==1)
                                    <a href="{{ url('admin/teacher/block/').'/'.$teacherlist->id }}" class="btn btn-success">
                                        <span>Block</span>
                                    </a>
                                    @else
                                        <a href="{{ url('admin/teacher/approve/').'/'.$teacherlist->id }}" class="btn btn-success">
                                            <span>Approve</span>
                                        </a>
                                    @endif
                                    <a href="{{ url('admin/teacher/delete/').'/'.$teacherlist->id }}" class="btn btn-danger">
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