
<x-layout>
    <style>
      .containerrr{
        height: 70vh;
        width: 100vw;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }
      .banner{
        background-image: url('https://img.freepik.com/free-photo/red-light-round-podium-black-background-mock-up_43614-950.jpg?w=740&t=st=1704383230~exp=1704383830~hmac=fcf9149601f94a1cd10f20108108ad665654f4b14997b2d764af8e7d18fcc873');
        background-size: cover;
       background-position: center;
        height: 100vh;
        width: 100%;
      }
      .underline{
        text-decoration: underline;
      }
      .img{
        animation: move 0.8s linear infinite alternate-reverse;
      }
      @keyframes move{
        form{
             transform: translate(0px);
        }to{
              transform: translateY(-15px);
        }
      }
      .containfluid{
        background: linear-gradient(to right, rgb(38 38 38 / 80%), rgb(253 254 255 / 0%)), url(https://img.freepik.com/free-photo/abstract-digital-grid-black-background_53876-97647.jpg?w=740&t=st=1704964325~exp=1704964925~hmac=207f564c6d406caf2df010abc37a1283b86dfdf4339f2a2eb0a01848582a9429);
        color:white;
        
      }
      .card2{
        background:transparent;
        color:white;
        transition:all 0.9s;
      }
      .card2:hover{
        background-color: rgb(190, 172, 65);
        color:black;
      }
    </style>
    <x-navbar></x-navbar>
    <div class="container-fluid banner mb-3">
    <div class="container containerrr ">
         <h1 class="ds-1 fw-bolder text-white">Grow Web Development Company!!
         </h1>
         <h4 class="text-secondary">
         Web Design and Development: Our team of talented designers and developers crafts visually stunning and highly functional websites. Whether you need a simple and elegant portfolio site or a complex e-commerce platform, we have the expertise to deliver.
         </h4>
         <!-- Button trigger modal -->
<button type="button" class="btn btn-primary w-50 mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Book Now
</button>

<!-- Modal -->
<div class="modal fade p-3" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="./book-now" method="POST">
          @csrf
            <label for="">Enter Name</label>
            <input type="text " name="name" placeholder="Enter your name" class="form-control">
            <label for="">Enter Phone Number</label>
            <input type="number" name="phone" placeholder="Enter your Number" class="form-control">
            <label for="">Age</label>
            <input type="number" name="age" placeholder="Enter your age" class="form-control">
            <label for="">Enter Email</label>
            <input type="text" name="email" placeholder="Enter your email" class="form-control">
            <label for="">Message </label>
            <textarea name="textarea" class="form-control" id="" cols="20" rows="6" placeholder="Message"></textarea>
            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
          
    </div>  
</div> 
</div>

    <div class="container-fluid bg-light px-3">
      <div class="container p-3">
        <div class="row align-items-center" >
          <div class="col-lg-6 px-2 mb-3">
            <p class="text-primary underline">
              Grow Sites !!
            </p>
            <h2 class="fw-bolder">
               Make Your Own Bussiness <br>tust $ the  Grow stits company
            </h2>
            <p class="text-secondary">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga ad omnis natus incidunt ex nihil blanditiis beatae necessitatibus? Quo sequi quaerat soluta necessitatibus minus illo.
            </p>
             <div class="text- btn btn-outline-warning px-3">
                 <a href="./about">About Us</a>
             </div>
          </div>
          <div class="col-lg-6">
            <div class="img">
            <img width="100%" class="rounded-2" src="https://img.freepik.com/free-vector/landing-page-abstract-design-template-website-app-colorful-abstract-minimal-wave_1217-5247.jpg" alt="">
          </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container">
      <h1 class="text-center display-2 p-5"> What We Do</h1>
    </div>
    <x-whatwedo></x-whatwedo>
    <x-mission></x-mission>
    <x-ourdeals></x-ourdeals>
    <div class="container-fluid containfluid">
     <div class="container">
      <div class="row col-lg-10 mx-auto align-items-center p-3">
        <div class="col-lg-6">
          <div class="card2 my-2 rounded-2 border border-parimary">
            <div class="d-flex px-2 align-items-center p-1">
              <div class="left">
              <i class="bi bi-phone fs-2 fw-bolder px-4"></i>
              </div>
              <div class="right">
                <p class="fw-bold m-0">Phone</p>
                <p>0313-9517049</p>
              </div>
             </div>
             </div>
             <div class="card2 my-2 rounded-2 border border-parimary">
              <div class="d-flex px-2 align-items-center">
              <div class="left">
              <i class="bi bi-envelope-exclamation-fill fs-2 fw-bolder px-4"></i>
              </div>
              <div class="right">
                <p class="fw-bold m-0">Email</p>
                <p>awaismarwan75@gmail.com</p>
              </div>
               </div>
    </div>
    <div class="card2 my-2 rounded-2 border border-parimary">
              <div class="d-flex px-2 align-items-center">
              <div class="left">
              <i class="bi bi-hourglass-top fs-2 fw-bolder px-4"></i>
              </div>
              <div class="right">
                <p class="fw-bold m-0">Time</p>
                <p>Monday to Saturday 9:00 to 22:00 <br> Sunday: off</hp>
              </div>
             </div>
    </div>
    <div class="card2 my-2 rounded-2 border border-parimary">
             <div class="d-flex px-2 align-items-center">
              <div class="left">
              <i class="bi bi-geo-alt-fill fs-2 fw-bolder px-4"></i>
              </div>
              <div class="right">
                <p class="fw-bold m-0">Loaction</p>
                <p>Islamabad, Rawalpindi 6th Road</p>
              </div>
             </div>
    </div>
            </div>
        
        <div class="col-lg-6">
              <form action="/last-input" class="last" method="POST">
                @csrf
                <input style="background: transparent; border-left:0px;border-right:0px;" type="text" name="name" class=" border-top-0 form-control my-4" placeholder="Name">
                <input type="email" style="background: transparent; border-left:0px;border-right:0px" name="email" class="border-top-0 form-control my-4" placeholder="Email address">
                <input style="background: transparent; border-left:0px;border-right:0px" type="text" name="address" class=" border-top-0 form-control my-4" placeholder="Address">
                <input style="background: transparent; border-left:0px;border-right:0px" type="text" name="business" class=" border-top-0 form-control my-2" placeholder="Residental/Business">
                <input style="background: transparent; border-left:0px;border-right:0px" type="text" name="msg" class="border-top-0 form-control my-4" placeholder="Message">
                <button class="btn btn-outline-warning rounded-0 w-50 mx-auto d-block " type="submit">Submit</button>
              </form>
              </div>
        </div>
      </div>
     </div>
    </div>

<x-footer></x-footer>
</x-layout>