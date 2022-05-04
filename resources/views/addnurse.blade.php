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
        h1{
            color: white;
        }

</style>
<body>


    <div class="container ">
    <div class="row">
        <div class="col-sm-12 col-md-9 mx-auto">
            <form  method="POST" action="addnurse">
                @csrf
                <div class="card bg-light">
                    <div class="card-header bg-secondary">
                        <h1> Add Nurse</h1>
                    </div>
                    <div class="card-body">
                        <input type="hidden" name="id" placeholder="Enter id"> <br> <br>
                        <input type="text" name="name" placeholder="Enter name"> <br> <br>
                        <input type="text" name="email" placeholder="Enter email"> <br> <br>
                        <button type="submit">Add Nurse</button>
                                        
                    </div>
                </div>
    
            </form>
        </div>
    </div>
    </div>
    
        
        
        
        
    
    
    
    
     
</body>
</html>