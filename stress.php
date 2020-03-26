<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Comment session</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form class="user" action="insertrequest.php" method="POST">
            <div class="form-group row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <CENTER><h1><?php echo $_SESSION['me'];?></h1></CENTER>
                 
                </div>
            </div> 
            <div class="form-group">
                  <textarea value="" class="form-control" required="true" rows="6" placeholder="Enter your Description" autocomplete="off" name="txtArea" required></textarea>
              </div>      
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary" name="btnsendcomment">Send</button>
      </div>
       </form>
    </div>
  </div>
</div>
