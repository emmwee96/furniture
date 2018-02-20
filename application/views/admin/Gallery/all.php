<section class="content-header">
    <h1>
        Gallery
    </h1>
</section>
<br>
<section class="content">
    <div class="mediumBox">
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <h4 class="whiteTitle " style='display: inline-block;width:100%;'>Gallery
                    <div class="btn btn-info pull-right" data-toggle="modal" data-target="#addImageModal">Add</div>
                </h4>
            </div>
            <div class='panel-body'>

                <div id="refreshBox">
                    <table id="data-table" class="table table-bordered table-hover data-table">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($images as $image) {
                                ?>
                                <tr>
                                    <td><img class="xs-thumbnail" src="<?= base_url($image['image']);  ?>"></td>
                                   
                                    <td> <a class="btn btn-warning" href='<?= base_url('gallery/delete/'.$image['id']) ?>'><i class="fa fa-remove"></i> Delete</a></td>
                                </tr>
                                <?php
                                $i++;
                            }
                            ?> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>

<div class="modal fade" id="addImageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="imageForm" method="POST" enctype="multipart/form-data">
                    <label>Select your image</label>
                    <input type="file" name="image" class="form-control">
                    <input type="hidden" name="dummy" value="1">
                    <br>
                    <input type="submit" class="btn btn-info">
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
    $(document).ready(function(){
        $("#imageForm").on("submit",function(e){
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                type:'POST',
                url: "<?= site_url('Gallery/add'); ?>",
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success:function(data){
                    if(data.status === "SUCCESS"){
                        window.location = window.location;
                    }else{
                        alert(data.message);
                    }
                },
                error: function(data){
                    console.log("error");
                    console.log(data);
                }
            });
        });
    });
</script>