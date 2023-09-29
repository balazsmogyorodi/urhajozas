<form action="/api/Kuldetes/{{$kuldetes->kod_nev}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input type="text" name="nev" placeholder="Name">
    <input type="text" name="cel" placeholder="Cél">
    <select name="kod_nev" placeholder="Kód neve">
    @foreach ($kuldetesek as $kuldetes){
          <option value="{{$user->id}}"
          {{$user->id == $kuldetes->user_id ? 'selected': ''}}
          >{{$user->name}}</option>
        }@endforeach
    </select>
    <input type="date" name="kezdes" placeholder="Kezdés időpontja">
    <input type="date" name="befejezve" placeholder="Befejezés időpontja">
    <select name="satus" placeholder="Status">
        <option value=1
        <?php echo $kuldetes->status == 1 ? 'selected' : '' ?>>
        Open</option>
        <option value=0
        <?php echo $kuldetes->status == 0 ? 'selected' : '' ?>>
        Closed</option>
    </select>
    <input type="submit" value="ok">



</form>