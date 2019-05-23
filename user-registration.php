        <div style="display: none; width: 500px;" id="addusers">
          <h3>ADD USERS</h3>
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" id="name" name="name" required aria-describedby="emailHelp" placeholder="Name">
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="email" name="email" required aria-describedby="emailHelp" placeholder="Enter email">
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Password</label>
              <input type="password" class="form-control" id="password" name="password" required aria-describedby="emailHelp" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Verify Password</label>
              <input type="password" class="form-control" id="password_confirmation" required name="password_confirmation" placeholder="Password">
            </div>
              <div class="form-group">
              <label for="exampleInputPassword1">User Role</label>
                <select class="form-control"  name="role" id="role">  
                    <option value="1">AGENT</option>
                    <option value="2">ADMIN</option>
                </select> 
            </div>
            <button type="submit"  id ="register" class="btn btn-primary">REGISTER</button>
        </div>