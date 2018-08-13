@extends('student.master')
@section('mainContent')
    <section id="main-content">
        <section class="wrapper">

            <div class="col-md-12 stats-info stats-last widget-shadow">

                <div class="stats-last-agile">
                    <h3 style="text-align: center;color: #54A857;margin:2%">{{Session::get('message')}}</h3>
                    <table class="table stats-table ">
                        <thead>
                        <tr>
                            <th style="width: 10%">S.NO</th>
                            <th style="width: 20%">Name</th>
                            <th style="width: 20%">Email</th>
                            <th style="width: 30%">Message</th>
                            <th style="width: 20%">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        ?>
                        @foreach( $allMessages as  $message)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$message->name}}</td>
                                <td>{{$message->email}}</td>
                                <td>{{substr($message->message,0,200)}}</td>
                                <td>
                                    <a href="{{ url('student/message/view/').'/'.$message->id  }}" class="btn btn-info">
                                        <span class="glyphicon glyphicon-eye-open"></span>
                                    </a>
                                    <a href="{{ url('student/message/delete/').'/'.$message->id }}" class="btn btn-danger">
                                        <span class="glyphicon glyphicon-trash"></span>
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