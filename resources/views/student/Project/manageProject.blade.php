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
                            <th style="width: 50%">Project Title</th>
                            <th style="width: 20%">Project Percentage</th>
                            <th style="width: 20%">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($studentProjects))
                        <?php
                        $i = 1;
                        ?>
                        @foreach( $studentProjects as  $studentProject)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$studentProject->project_name}}</td>
                                <td>{{$studentProject->project_percentage}}</td>
                                <td>
                                    <a href="{{ url('student/project/edit/').'/'.$studentProject->id  }}" class="btn btn-success">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ url('student/project/delete/').'/'.$studentProject->id }}" class="btn btn-danger">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>

                            </tr>

                        @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="clearfix"> </div>
            </div>
        </section>
@endsection