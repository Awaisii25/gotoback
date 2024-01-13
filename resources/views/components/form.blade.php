<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Go to Back end 
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/insert-data" method="POST">
            @csrf

            
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Please enter your name">
            @error('name')
              <p class="text-danger fw-bolder">
                {{ $message }}</p>  
            @enderror
            <label for="">Enter your email</label>
            <input type="text " name="email" class="form-control" placeholder="please enter your email">
            @error('email')
            <p class="text-danger fw-bolder">
              {{ $message }}</p>  
          @enderror
          <label for="">Contact</label>
          <input type="number" class="form-control" name="contact" placeholder="Please enter your Number">
          @error('contact')
          <p class="text-danger fw-bolder">
            {{ $message }}</p>  
        @enderror
          <label for="">Message for Awais</label>
          <textarea name="textarea" class="form-control" id="" cols="30" rows="10"></textarea>
          @error('textarea')
          <p class="text-danger fw-bolder">
            {{ $message }}</p>  
        @enderror
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>