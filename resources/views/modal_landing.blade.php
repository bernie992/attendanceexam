 
<form action="{{url('/add application')}}" method="POST">
  @csrf
<div class="modal fade" id="landingModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style ="background-image: linear-gradient(to top, #007adf 0%, #00ecbc 100%);">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Application Form</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
     
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-name">Full Name</label>
          <input type="text" name="fullname" class="form-control validate">
          
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-name">Age</label>
          <input type="text" name="age" class="form-control validate">
         
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-name">Address</label>
          <input type="text" name="address" class="form-control validate">
          
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-name">Contact Number</label>
          <input type="text" name="contact" class="form-control validate">
          
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-email">Email</label>
          <input type="email" name="email" class="form-control validate">
         
        </div>

        
      </div>
      <div class="modal-footer d-flex justify-content-center ">
        <button class="btn btn-success" >Save</button>
      </div>
    </div>
  </div>
</div>
</form>

         
         

         
         

         
         
         
         
         

                           
        

         