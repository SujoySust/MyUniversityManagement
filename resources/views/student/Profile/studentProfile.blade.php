@extends('student.master')
@section('mainContent')
    <div class="clearfix"> </div>
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 60%;
            margin: 7% auto;
            text-align: center;
            font-family: arial;

        }
        .card img{
            max-width: 300px;
            margin: 2%;
        }

        .card h1{
            color: #ffffff;
            margin: 1%;
        }
        .card p{
            margin: 1%;
        }

        .title {
            color: #ffffff;
            font-size: 18px;
            margin: 1%;
        }

        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .card a {
            text-decoration: none;
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        button:hover, a:hover {
            opacity: 0.7;
        }
    </style>

    <div class="card">
        @foreach($studentProfiles as $studentProfile)
            <img src="{{asset($studentProfile->picture)}}" alt="{{$studentProfile->name}}" style="width:100%">
            <h1>{{$studentProfile->name}}</h1>
            <p class="title">{{$studentProfile->batch}}</p>
            <p class="title">{{$studentProfile->email}}</p>
            <p class="title">{{$studentProfile->contract}}</p>
            <p class="title">{{$studentProfile->address}}</p>
            <p style="color:#ffff00">Shajalal University of Science and Technology</p>

            {{--<div style="margin: 24px 0;">--}}
            {{--<a href="#"><i class="fa fa-dribbble"></i></a>--}}
            {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
            {{--<a href="#"><i class="fa fa-linkedin"></i></a>--}}
            {{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
            {{--</div>--}}
            <a href="{{url('student/profile/edit')}}">Update</a>
        @endforeach
    </div>

@endsection