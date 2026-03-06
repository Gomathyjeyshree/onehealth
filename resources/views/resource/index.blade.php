
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<div class="container">
    <div class="row">
        <h1>Form data</h1>
    </div>
    <div class="row">
        <a href="{{ route('resource.create') }}">ADD NEW DATA</a>
    </div>
    <div class="row">
        <table class="table table-bordered">
            @foreach ($resource as $r )
            <tr>
                <td>{{ $r->name }}</td>
                <td>
                   
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