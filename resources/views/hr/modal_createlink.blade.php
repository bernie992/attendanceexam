
<style>
  .modal-content{
   background-color: rgba(0, 0, 0, 0.4);
   color: white;
   box-shadow: 0 5px 5px 5px #888;
   margin-top:30%;
   left: 10%;
   width: 100%;
   padding: 10px;
   text-align: center;
  }
</style>
<form action="{{url('/create link')}}" method="POST">
  @csrf
<div class="modal fade" id="linkModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add Title Exam</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
        <div class="form-group">
          <i class="fas fa-user prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-name">Search the Program for Exam. </label>
          <select name="titlequest">
            @foreach($search as $row)
                <option value="{{$row->name}}">{{$row->name}}</option>
            @endforeach
            </select>
        </div><br><br>
        <div class="form-group">
          <i class="fas fa-user prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-name">Add Examinee's </label>
          <select name="userap">
            @foreach($app as $urow)
                <option value="{{$urow->fullname}}">{{$urow->fullname}}</option>
            @endforeach
            </select>
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-link">Create link</button>
      </div>
    </div>
  </div>
</div>
</form>