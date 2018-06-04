@section('title')
    {{ $title }}
@stop

@include('header')

<div class="container lang">

           
              <!--This is a comment. Comments are not displayed in the browser-->
           <div class="rowFoto" style="position: absolute; margin-left:600px;  background-size: 130px 130px; background-repeat: no-repeat; background-image: url('/img/{{$slug}}.png')">
         
        </div>
         
          <br />
           <h1 style="position:relative;">{{ $title }}</h1>
         
        <div class="row">

        <div class="col-md-9">
 
           <br />
           <br />
            <br /> 
            <p>{!! $description !!} </p>


        </div>
        <div class="col-md-3">

            <ul class="list-group">
                <li style="background-color: #08298A;" class="list-group-item active"><b>{{ $title }}</b></li>
                <li class="list-group-item"><strong>Paradigm : </strong> {{ $paradigm }}</li>
                 <li class="list-group-item"><strong>Designed by : </strong> {{ $designedBy}}</li>
                 <li class="list-group-item"><strong>First appeared : </strong> {{ $firstAppeared}}</li>
                 <li class="list-group-item"><strong>Typing discipline : </strong> {{ $typingDiscipline}}</li>
            </ul>

        </div>
    </div>


</div>
