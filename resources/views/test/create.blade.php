 <div class="add-model p-4">
        <div class="d-flex justify-content-between">
            <h6>Add user</h6>
            <a class="close-model">close</a>
        </div>
        <form action="{{route('store')}}" method="POST"> 
             @csrf
            <div class="mb-3">
                <label for="Firstname" class="form-label" >Firstname</label>
                <input type="text" class="form-control" id="Firstname" name="firstname" placeholder="Enter Firstname" name="pswd">
            </div>
            <div class="mb-3">
                <label for="Lastname" class="form-label">Lastname</label>
                <input type="text" class="form-control" id="Lastname" name="lastname" placeholder="Enter Lastname" name="pswd">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" name="email">
            </div>       
            <button type="submit" class="btn btn-primary add-user">Submit</button>
        </form>
    </div>