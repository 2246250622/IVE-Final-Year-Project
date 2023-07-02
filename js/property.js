function appendAgentCommentEstate() {
    var target = $(".featured-estate-container");
    var data = JSON.parse(houses);
    $.each(data, function(keys, value) {
        target.append(`<div class="featured-estate">
	                          <div class="estate-img-container">
	                          	<p class="sales hidden">Hot Sales</p>
	                            <img src="` + value.src + `" alt="">
	                            <a href="manager-` + value.commentSite + `" class="estate-search-icon"><i class="fas fa-eye"></i></a>
	                          </div>` +
            `<div class="featured-estate-info">
	                            <h4 class="estate_name">` + value.name + `</h4>
	                            <p class="estate_desc">` + value.desc + `</p>
	                            <div class="featured-estate-footer">
	                              <p class="estate_district">` + value.district + `</p>
	                              <p class="estate_type">` + value.type + `</p>
	                              <p class="estate_price">$` + value.price + `</p>
	                            </div>` +
            `<p class="btn btn-update"><i class="far fa-edit">&nbsp; </i> &nbsp;Update Property</p>` +
            `</div>
	                        </div>`);
    });

}

function updateProperty() {
    $(document).on('click', '.btn-update', function() {
        currentBtn = $(this);
        var contentData = currentBtn.closest(".featured-estate-info");
        var name = contentData.find(".estate_name").html();
        var district = contentData.find(".estate_district").html();
        var description = contentData.find(".estate_desc").html();
        var price = contentData.find(".estate_price").html();
        $("#name").val(name);
        $("#district").val(district);
        $("#price").val(price);
        $("#desc").val(description);
        $(".propertyForm").modal();
        $("#updateProperty").click(function() {
            if(document.getElementById("propertyFormEditDialog").checkValidity()){
               if($("#promotion").val()=="promotion"){
                currentBtn.closest(".featured-estate").find(".sales").removeClass("hidden");
            }else{
                currentBtn.closest(".featured-estate").find(".sales").addClass("hidden");
            }
            contentData.find(".estate_name").html($("#name").val());
            contentData.find(".estate_district").html($("#district").val());
            contentData.find(".estate_desc").html($("#desc").val());
            contentData.find(".estate_type").html($("#type").val());
            contentData.find(".estate_price").html("$" + $("#price").val());
            $("#price").val('');
            $("#address").val('');
            $.modal.close();
            }

        });
        $("#deteleProperty").click(function(){
        	currentBtn.closest(".featured-estate").remove();
        	$.modal.close();
        });
    });
    return currentBtn;
}
