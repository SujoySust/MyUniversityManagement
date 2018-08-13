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
                            <th>S.NO</th>
                            <th>Skill Title</th>
                            <th>Skill Percentage</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        ?>
                        @foreach( $studentskills as  $studentskill)
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$studentskill->skill_title}}</td>
                                <td>{{$studentskill->skill_percentage}}%</td>
                                <td>
                                    <a href="{{url('student/skill/edit/').'/'.$studentskill->id}}">EDIT</a>
                                    <a href="{{url('student/skill/delete/').'/'.$studentskill->id}}">Delete</a>
                                </td>

                            </tr>

                            <?php
                            $i++;
                            ?>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="clearfix"> </div>
            </div>
        </section>
@endsection