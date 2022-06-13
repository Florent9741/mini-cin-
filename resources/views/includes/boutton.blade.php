@include('includes.modifier')

<form action="{{ route('delete', $film['id']) }}" method="post">
    @csrf
    @method('delete')
    <button type="submit"><i class="fa-solid fa-trash-can mx-2"></i></button>

</form>
