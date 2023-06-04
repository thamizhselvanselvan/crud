<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crudapp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<style>
    .add-model,.edit-model{
        position:absolute;
        top:0;
        right:0;
        background:white;
        border-left:1px solid rgb(0,0,0,0.1);
        height:100vh;
        width:30%;
        display:none;
    }
    a{
        cursor: pointer;
    }
   
</style>
</head>

<body>
    <div class="container">
        <div class="mt-3"> 
            <div class="d-flex justify-content-between py-3">
                <h4>users</h4>
                <a>
                    <button type="button" class="btn btn-primary add-btn">ADD</button>
                </a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>class</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>thamizh</td>
                        <td>7th</td>
                        <td>
                            <a class="edit">edit</a>
                            <a>delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> 


     <div class="add-model p-4">
        <div class="d-flex justify-content-between">
            <h6>Add user</h6>
            <a class="close-model">close</a>
        </div>
        <form action="{{route('student-store')}}" method="POST"> 
             @csrf
            <div class="mb-3">
                <label for="name" class="form-label" >name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
            </div>
            <div class="mb-3">
                <label for="class" class="form-label">class</label>
                <input type="text" class="form-control" id="class" name="class" placeholder="Enter class">
            </div>    
            <button type="submit" class="btn btn-primary add-user">Submit</button>
        </form>
    </div>

     <div class="edit-model p-4">
        <div class="d-flex justify-content-between">
            <h3>Edit user</h3>
            <a class="close-model">close</a>
        </div>
        <form> 
            <div class="mb-3">
                <label for="name" class="form-label" >name</label>
                <input type="text" class="form-control" id="name" name="e_name" placeholder="Enter name">
            </div>
            <div class="mb-3">
                <label for="class" class="form-label">class</label>
                <input type="text" class="form-control" id="class" name="e_class" placeholder="Enter class">
            </div>       
            <button type="submit" class="btn btn-primary add-user">update</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).on('click','.add-btn',function(){
            $('.add-model').show(1000);
        });
         $(document).on('click','.close-model,.add-user',function(){
            $('.add-model,.edit-model').hide(1000);
        });

        $(document).on('click','.edit',function(){
            $('.edit-model').show(1000);
        });
    </script>
</body>

</html>