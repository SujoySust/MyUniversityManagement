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
                            <th style="width: 50%">Batch Name</th>
                            <th style="width: 30%">Status</th>
                            <th style="width: 20%">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        ?>
                        @foreach( $batches as  $batch)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$batch->name}}</td>
                                <td>{{$batch->status === 1 ? "Published" : "UnPublished"}}</td>
                                <td>
                                <a href="{{ url('admin/batches/edit/').'/'.$batch->id }}" class="btn btn-success">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="{{ url('admin/batches/delete/').'/'.$batch->id }}" class="btn btn-danger">
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