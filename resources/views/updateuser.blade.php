<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>

<style>

    body{
        margin: 0;
        padding: 0;
    }
    .container{
        padding-top: 50px;

    }
    .card{
        height: 400px;
        width: auto;
        }

</style>
<body>


    <div class="container ">
    <div class="row">
        <div class="col-sm-12 col-md-9 mx-auto">
            <form  method="POST" action="/edit1">
                @csrf
                <div class="card bg-light">
                    <div class="card-header bg-secondary">
                        <h1> Edit User</h1>
                    </div>
                    <div class="card-body">
                        <input type="hidden" name="id"  value="{{ $data['id'] }}"> <br> <br>
                        <input type="text" name="name"  value="{{ $data['name'] }}"> <br> <br>
                        <input type="text" name="email"  value="{{ $data['email'] }}"> <br> <br>
                        <input type="text" name="department" value="{{ $data['department'] }}"> <br> <br>
                        <button type="submit">Edit Users</button>
                                        
                    </div>
                </div>
    
            </form>
        </div>
    </div>
    </div>
    
        
        
        
        
    
    
    
    
     
</body>
</html>