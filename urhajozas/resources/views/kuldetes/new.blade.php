<form action="/api/Kuldetes" method="post">
    {{csrf_field()}}
    <input type="text" name="nev" placeholder="Név">
    <input type="text" name="cel" placeholder="Cél">
    <select name="kod_nev" placeholder="KOD_NEV">
        @foreach ($users as $user)
            <option value="{{$kuldetes->id}}">{{$kuldetes->nev}}</option>
        @endforeach
    </select>
    <input type="date" name="kezdes" placeholder="Kezdés">
    <input type="date" name="befejezve" placeholder="Befejezve">
    <select name="status" placeholder="status">
        <option value="1">Open</option>
        <option value="0">Closed</option>
    </select>
    <input type="submit" value="Ok">
</form>