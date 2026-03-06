
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <h1 class="m-4">ADD DATA FORM</h1>
<form action="{{ route('resource.store') }}" method="POST" >
    <div class="container">
        <div class="row">
        <div class="col-md-6 mb-2">
            <input type="text" name="name" placeholder="name" required>
        </div>
        <div class="col-md-6 mb-2">
            <input type="number" name="age" placeholder="age" required>
        </div>
        <div class="col-md-6 mb-2">
            <input type="date" name="dob" placeholder="dob" required>
        </div>
        <div class="col-md-6 mb-2">
            <input type="text" name="gov_id" placeholder="gov_id" required>
        </div>
        <div class="col-md-12">
            <button type="submit">Submit</button>
        </div>
        </div>
    </div>
</form>