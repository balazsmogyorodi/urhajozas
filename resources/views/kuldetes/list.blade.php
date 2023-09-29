@foreach ($tasks as $task){
         <form action = "/api/Kuldetes/{{$kuldetes->id}}" method="post">
            {{csrf_field()}}
        {{method_field('GET')}}
         <div class="form-group" >
            <input type="submit"value="{{$kuldetes->nev}}">
         </div>
 </form>
 }@endforeach