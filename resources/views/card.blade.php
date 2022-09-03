<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Laravel Email Functionality</title>
</head>
<body class="bg-dark">
 
<div class="col-md-4 text-center shadow-lg rounded text-dark" style="margin:auto; position:relative; top: 50px;">
   
    <div class="card">
        <div class="card-header bg-dark text-light">
            Laravel Email Functionality
        </div>
        <div class="card-body">
            <form action="{{url('/send')}}" method="POST">
            @csrf
            

              <div class="mb-3">
                <label for="">Email To:</label>
                <input type="email" name="email" class="form-control" required>
              </div>
            
              <div class="mb-3">
                <label for="">Subject:</label>
                <input type="subject" name="subject" class="form-control" required>
              </div>
            
              <div class="mb-3">
                <label for="">Content:</label>
                <textarea type="content" name="content" class="form-control" style="height:200px;" required></textarea>
              </div>


              <button type="submit" class="btn btn-sm btn-success">Send</button>
            </form>



       </div>
     </div>
    </div>
    
</body>

</html>

