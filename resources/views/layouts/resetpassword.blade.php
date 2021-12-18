<center><form action="{{route('resetpassword')}}" method="post">@csrf
        <input name="mail" placeholder="Mail" type="text">
        <input value="Sıfırla" type="submit">
    </form></center>
