@extends('layouts.master')

@section('title', $title)

@section('index_link', $links->index)

@section('link_url_1', $links->experience)
@section('link_name_1', "Experience")

@section('link_url_2', $links->skills)
@section('link_name_2', "Skills")

@section('link_url_3', $links->projects)
@section('link_name_3', "Projects")


@section('content')
    <div class="text-center">
        <div class="pt-5 pl-2 pr-2 pb-4">
            <h2>{{$bio->intro}}</h2>
        </div>
        <h4>{{$prof}}</h4>
        <h6>{{$bio->education}}</h6>

        @foreach($contacts as $contact)
            <a class="text-success" style="text-decoration: none;" href="{{$contact->url}}"><small>{{$contact->name}}</small></a> 
        @endforeach

    </div>
@endsection       