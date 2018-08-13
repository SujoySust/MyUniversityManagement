@extends('classrepresentator.master')
@section('mainContent')
    <section id="main-content">
        <section class="wrapper">

           @if(Auth::guard('classrepresentator')->user()->status == 1)
            <div class="col-md-12 stats-info stats-last widget-shadow">

                <div class="stats-last-agile">
                    <h3>{{Session::get('message')}}</h3>
                    <table class="table stats-table ">
                        <thead>
                        <tr>
                            <th>S.NO</th>
                            <th>Post Title</th>
                            <th>Post Details</th>
                            <th>Created</th>
                            <th>Updated</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        ?>
                        @if(isset($postlists))
                        @foreach($postlists as $postlist)
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{!! $postlist->posttitle!!}</td>
                                <td>{!! $postlist->postdetails !!}</td>
                                <td>{{$postlist->created_at}}</td>
                                <td>{{$postlist->updated_at}}</td>

                            </tr>

                            <?php
                            $i++;
                            ?>
                        @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="clearfix"> </div>
            </div>

               @else
                <div class="col-md-12 stats-info stats-last widget-shadow">
                    <div class="stats-last-agile">
                    <h2 style="text-align: center;color: #8d3d1e">You are not approved by Admin.</h2>
                    <h4 style="text-align: center">Please wait for admin approval</h4>
                    </div>
                </div>
               @endif

        </section>
@endsection
