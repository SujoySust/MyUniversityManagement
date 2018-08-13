@extends('classrepresentator.master')
@section('mainContent')
    <section id="main-content">
        <section class="wrapper">

            <div class="col-md-12 stats-info stats-last widget-shadow">

                <div class="stats-last-agile">
                    <h3>{{Session::get('message')}}</h3>
                    <table class="table stats-table ">
                        <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>Post Title</th>
                            <th>Post Details</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                                $i = 1;
                        ?>
                        @foreach($postlists as $postlist)
                        <tr>
                            <th scope="row">{{$i}}</th>
                            <td>{!! $postlist->posttitle !!}</td>
                            <td>{!! $postlist->postdetails !!}</td>
                            <td>
                                <a href="{{url('classrepresentator/post/edit/').'/'.$postlist->id}}">EDIT</a>
                                <a href="{{url('classrepresentator/post/delete/').'/'.$postlist->id}}">Delete</a>
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