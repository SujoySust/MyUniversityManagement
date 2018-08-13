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
                        <th style="width: 20%">Type</th>
                        <th style="width: 20%">Institution</th>
                        <th style="width: 20%">Department</th>
                        <th style="width: 10%">Year</th>
                        <th style="width: 20%">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i = 1;
                    ?>
                    @foreach( $educations as  $education)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$education->type}}</td>
                        <td>{{$education->institution}}</td>
                        <td>{{$education->department}}</td>
                        <td>{{$education->year}}</td>
                        <td>
                            <a href="{{ url('student/education/edit/').'/'.$education->id  }}" class="btn btn-success">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
                            <a href="{{ url('student/education/delete/').'/'.$education->id }}" class="btn btn-danger">
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