<div class="container">
    <div class="row">
        <h1>Form data</h1>
    </div>
    <div class="row">
        <a href="{{ route('resource.create') }}">ADD NEW DATA</a>
    </div>
    <div class="row">
        <table>
            @foreach ($resource as $r )
            <tr>
                <td>{{ $r->name }}</td>
                <td>
                    <a href="{{ route('edit') }}">Edit</a>
                    <form action="" method="">
                        @csrf @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            
            @endforeach
        </table>
    </div>
</div>