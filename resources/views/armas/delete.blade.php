<form action="{{url('/armas/'.$arma->id)}}" method="post"
    class="d-inline-block">
  {{method_field('DELETE')}}
  @csrf
  <input type="submit" class="btn btn-link" style="color: red"
         value="ELIMINAR">
</form>