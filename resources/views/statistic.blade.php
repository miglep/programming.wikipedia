@section('title')
    statistic
@stop
 
@include('header')
 
<div class="container">
 
    <h2>List of most popular programming languages '2017</h2>
    <h6>Rated by different sources</h6>
    
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif 
 
    <a style="background-color: #08298A;"class="btn btn-primary" href="{{ route('statistic.create') }}">New item</a><br /><br />
 
    <div class="row">
        <div class="col-md-12">
            <table class="table">
            <thead>
                <tr>
                    <th>
                        Title
                    </th>
                    <th>
                        TIOBE index
                    </th>
                    <th>
                     GitHub index
                      </th>
                      <th>
                      IEEE Spectrum index
                    </th>
                    <th>
                    Stackify index
                    </th>
                   <th>
                    Rate Yourself
                    </th>
                </tr>
            </thead>
            @foreach ($statistics as $stat)
                <tr>
                    <td >
                        <a style="color: black;"href="{{ route('statistic.show', $stat->id) }}">{{ $stat->title }}</a>
                    </td>
                    <td style="text-align: center;">
                        {{ $stat->countTiobe }}
                    </td>
                     <td style="text-align: center;">
                        {{ $stat->countgitHub}}
                    </td>
                     <td style="text-align: center;">
                        {{ $stat->countieeeSpectrum }}
                    </td>
                     <td style="text-align: center;">
                        {{ $stat->countStackify }}
                    </td>
                    <td>
                     <form action="{{route('statistic.update', $stat->id) }}" method="POST">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
 
                    <select style=" width: 120px; height: 30px; background-color: darkred; color: white; cursor:pointer;  " name="ratelist">
                    <option value="Rate">Rate yourself!</option>
                     <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                        <option value="4">4</option>
                         <option value="5">5</option>
                         <option value="6">6</option>
                          <option value="7">7</option>
                           <option value="8">8</option>
                            <option value="9">9</option>
                             <option value="10">10</option>
                            </select>
                       <input style=" width: 120px; height: 30px; background-color: darkred; color: white; cursor:pointer; " type="submit" value="Submit">
                        </form>
                       <!-- <li style="list-style-type: none;"class="nav-item dropdown">
                <a style="background-color: darkred; color: white; "class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Rate yourself!
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="nav-link" href="#">1</a>
                    <a class="nav-link" href="#">2</a>
                    <a class="nav-link" href="#">3</a>
                    <a class="nav-link" href="#">4</a>
                    <a class="nav-link" href="#">5</a>
                </div>
            </li>--> 
                  
                            
                             
                             <!--This is a comment. Comments are not displayed in the browser--> 
                            <!--   <form action="{{ route('statistic.destroy', $stat->id) }}" class="float-right" method="POST">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button style="background-color: darkred;" class="btn btn-danger">Delete</button>
                        </form>
 
                        <!-- <div class="float-right">
                            <a class="btn btn-default" href="{{ route('statistic.edit', $stat->id) }}">Edit</a>
                        </div>--> 
                    </td>
                </tr>
            @endforeach
            </table>
        </div>
 
    </div>
 
 
</div>
 
