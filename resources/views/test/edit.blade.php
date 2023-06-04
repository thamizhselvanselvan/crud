 <div class="edit-model p-4">
        <div class="d-flex justify-content-between">
            <h3>Edit user</h3>
            <a class="close-model">close</a>
        </div>
        <form action="{{route('update.user')}}" method="POST"> 
            @csrf
            <div class="mb-3">
                <input type="hidden" class="form-control" id="id" name="id" value="{{$testuser->id}}" placeholder="Enter Firstname" name="pswd">
            </div>
            <div class="mb-3">
                <label for="Firstname" class="form-label" >Firstname</label>
                <input type="text" class="form-control" id="Firstname" name="e_firstname" value="{{$testuser->firstname}}" placeholder="Enter Firstname" name="pswd">
            </div>
            <div class="mb-3">
                <label for="Lastname" class="form-label">Lastname</label>
                <input type="text" class="form-control" id="Lastname" name="e_lastname" value="{{$testuser->lastname}}" placeholder="Enter Lastname" name="pswd">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="e_email" value="{{$testuser->email}}" placeholder="Enter email" name="email">
            </div>       
            <button type="submit" class="btn btn-primary add-user">update</button>
        </form>
    </div>