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
                            <th style="width: 20%">S.NO</th>
                            <th style="width: 50%">Skill Title</th>
                            <th style="width: 30%">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        ?>
                        @foreach( $studentCategories as  $studentCategory)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$studentCategory->category_title}}</td>
                                <td>
                                    <a href="{{ url('student/category/edit/').'/'.$studentCategory->id  }}" class="btn btn-success">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ url('student/category/delete/').'/'.$studentCategory->id }}" class="btn btn-danger">
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