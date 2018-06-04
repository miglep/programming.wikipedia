@section('title')
    talk
@stop
 
@include('header')
 <br>

   <div class="row">

        <div class="col-md-8">
        <h2>Creating User talk</h2>
       <br>
      
        
        
<!--This is a comment. Comments are not displayed in the browser-->


 <form action= "{{route('talk.store')}}" method="POST">
                {{ method_field('POST') }}
                {{ csrf_field() }}
 
 <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

    <textarea style="height: 200px;" name="description">Your text here</textarea>
    <p>By saving changes, you agree to the <b>Terms of Use</b>, and you irrevocably agree to release your contribution under the CC BY-SA 3.0 License and the GFDL. You agree that a hyperlink or URL is sufficient attribution under the Creative Commons license.</p><br>
     <button type="submit" class="btn">Save page</button> 
    <button style="color:red;" type="submit" class="btn">Cancel</button> 
</form>
</div>
 <div  class="col-md-3">

  <a style="text-align: center; text-decoration: underline; color: darkgrey; font-size: 30px;font-weight: 600;" class="alltalks" href="{{ route('talk.create') }}">See All talks</a>
  
  @foreach ($talks as $talk)
      {{ $talk->description }}<br />
  @endforeach
  
  
  <!--<form style="width: 100%; height: 500px;">
    <input style="width: 100%;" name="title" type="text" placeholder="Title?" />
    <textarea style="width: 100%;" name="content" data-provide="markdown" rows="10"></textarea>
    <label class="checkbox">
      <input name="publish" type="checkbox"> Publish
    </label>
    <hr/>
    <button type="submit" class="btn">Submit</button>
  </form>-->
     
</div>
 </div>
 