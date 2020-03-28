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
    <div class="p-5">
      <h2>{{$page}}</h2>
      <hr>


      @if($page == 'Skills')

        @foreach($skills as $skill)
          <div class="p-3">
            <h4>{{$skill->type}}</h4>
            <p>{{$skill->technologies}}</p>
          </div> 
        @endforeach

      @elseif($page == 'Experience')

        @foreach($experiences as $ex)
          <div class="p-3">
            <h4>{{$ex->position}}, {{$ex->company}}</h4>
            <h5>{{$ex->duration}}</h5>
            <small>{{$ex->job_type}}</small>
          </div> 
        @endforeach

      @elseif($page == 'Projects')

        @foreach($projects as $project)
            <div class="p-3">
              <h4>{{$project->name}} ({{$project->technologies}})</h4>
              <p>{{$project->summary}}</p>
              @if(!empty($project->link))
              <a class="text-success" style="text-decoration: none;" href="{{$project->link}}"><small>Github</small></a>
              @endif
            </div>
        @endforeach

      @endif  

    </div>
@endsection       