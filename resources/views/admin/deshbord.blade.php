
    <x-layout>
        <div class="container shadow ">
        <div class="row col-lg-10 p-3 m-auto" >
            <div class="display-1 text-info fw-bolder text-center mb-3">
              Ragester Now
            </div>
            <div class="col-lg-6">
                <img width="100%" src="https://images.unsplash.com/photo-1619597455322-4fbbd820250a?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fGRlc2t0b3AlMjBjb21wdXRlcnxlbnwwfHwwfHx8MA%3D%3D" alt="">
            </div>
            <div class="col-lg-6 ">
                <form action="/ragester" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">Name</label>
                    <input type="text" name="name" placeholder="Enter your Name" class="form-control">

                    <label for="">Age</label>
                    <input type="number" name="age" placeholder="Enter your Age" class="form-control">
    
                    <label for="">Phone</label>
                    <input type="number" name="phone" placeholder="Enter your Number" class="form-control">
    
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="Enter your Email" class="form-control">

                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="Password" class="form-control">
                    <label for="">Image</label>
                    <input type="file" class="form-control" name="image">
    
                    <button class="mt-2 btn btn-success w-100">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
    </x-layout>