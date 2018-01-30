<br />
<div id="user_add_content">
    <div class="mediumBox">
        <div class="row content">
            <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
                <div class="box box-default">
                    <div class="box-header">
                        Edit Category
                    </div>
                    <div class="box-body">

                        <div class="alert alert-danger hidden user_form_alert" id="form_alert">

                        </div>
                        <form id="category_form" method="POST" action="<?php echo site_url("Category/edit/".$category['category_id']); ?>">
                            <div class="tab-content">
                                <div class="tab-pane active" id="details">

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                            <label>Name</label>
                                            <input type="text" class="form-control" required name="name" placeholder="Name" id="form_name" value="<?= $category['name'] ?>">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                            <label>Images</label>
                                            <input type="file" class="form-control" name="images" id="form_images">
                                        </div>
                                    </div>
                                    <br/>
                                </div>
                                <input type="submit" class="btn btn-flat btn-info pull-right" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="loader-wrapper" class="loader-wrapper hidden">
    <div class="loader"></div>
    <strong class="loader-font">Please wait...</strong>
</div>
<script>
    function form_submit(form) {
        $("#loader-wrapper").removeClass("hidden");
        var data = new FormData(form);
        var url = $(form).attr("action");
        $.ajax({
            url: url,
            data: data,
            processData: false,
            contentType: false,
            type: "POST",
            success: function (data) {
                if (data.status) {
                    $("#loader-wrapper").addClass("hidden");
                    $("body").loadingModal({
                        text: "Successfully updated"
                    });
                    setTimeout(function () {
                        window.location = "<?= site_url('category'); ?>";
                    }, 1500);
                } else {
                    $("#loader-wrapper").addClass("hidden");
                    $(".user_form_alert").html(data.message);
                    $(".user_form_alert").removeClass("hidden");
                }
            },

            dataType: "JSON"
        });
    }

    $(document).ready(function () {
        var category_form = document.getElementById("category_form");

        category_form.addEventListener("submit", function (e) {
            e.preventDefault();
            form_submit(category_form);
        });

    });

</script>