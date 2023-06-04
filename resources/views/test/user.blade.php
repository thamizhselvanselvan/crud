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
                <a href="{{route('add')}}">
                    <button type="button" class="btn btn-primary add-btn">ADD</button>
                </a>
            </div>
            @if($message = Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{$message}}
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>firstname</th>
                        <th>lastname</th>
                        <th>email</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($testuser as $value)
                        <tr>
                            <td>{{$value->firstname}}</td>
                            <td>{{$value->lastname}}</td>
                            <td>{{$value->email}}</td>
                            <td>
                                <a class="edit" href="{{url('edit/'.$value->id)}}">edit</a>
                                <a href="{{url('delete/'.$value->id)}}">delete</a>
                            </td>
                        </tr>
                    @endforeach  
                </tbody>
            </table>
        </div>
    </div> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    //     // $(document).on('click','.add-btn',function(){
    //     //     $('.add-model').show(1000);
    //     // });
    //     //  $(document).on('click','.close-model,.add-user',function(){
    //     //     $('.add-model,.edit-model').hide(1000);
    //     // });

    //     // $(document).on('click','.edit',function(){
    //     //     $('.edit-model').show(1000);
    //     // });
    // </script>
</body>

</html>