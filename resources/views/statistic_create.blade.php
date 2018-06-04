@section('title')
    Edit
@stop
 
@include('header')
 
<div class="container">
 
    <div class="row">
        <h5>Add New to the List of most popular programming languages '2017</h5>
    </div>
 
    <div class="row">
 
        <div class="col-md-12">
            <form method="post" action="{{ route('statistic.store') }}" method="POST">
                {{ method_field('POST') }}
                {{ csrf_field() }}
 
                <div class="form-group col-md-12">
                    <label for="title">Language title:</label>
                    <input type="text" class="form-control" name="title" value="">
                </div>
 <!--This is a comment. Comments are not displayed in the browser-->

             <!--   <div class="form-group col-md-12">
                    <label for="count">Your rate:</label>
                    <input type="text" class="form-control" name="count" value="">
                </div>-->
                <div class=text-right>
                    <button style="background-color: #08298A;"class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
 
    </div>
 
 
</div>
 
