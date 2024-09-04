// 18.08.2024  || 23.40
// $(document).ready(function () {
//     $("#notification_messege").fadeOut(5000); // 5 seconds x 1000 milisec = 5000 milisec
// });
$(document).ready(function () {
    if ($("#notification_content").text().trim() !== "") {
        $("#notification_messeges").fadeIn(1000).delay(4000).fadeOut(1000); // Fade in for 1 second, delay for 4 seconds, then fade out for 1 second
    }
});
// 18.08.2024  || 23.40
// {{-- 24.08.2024  ||  20.00 --}}
var loop_count = 1;
function addMore() {
    loop_count++;
    var html = `
    <div id="product_attr_${loop_count}">
    <hr>
    <div class="row" >`;
    html += `
    <input type="hidden" id="paid" name="paid[]">`;
    html += ` <div class="col-3">
            <label for="sku" class="control-label mb-1">Sku</label>
            <div class="input-group">
            <input id="sku" name="sku[]" type="text" class="form-control cc-cvc"
                    data-val="true" placeholder="SKU">
            </div>
            <span class="help-block"></span>
        </div>`;
    html += `<div class="col-3">
            <label for="mrp" class="control-label mb-1">Mrp</label>
            <div class="input-group">
                <input id="mrp" name="mrp[]" type="text" class="form-control cc-cvc"
                data-val="true" placeholder="Mrp">
            </div>
            <span class="help-block"></span>
        </div>`;
    html += `<div class="col-3">
            <label for="price" class="control-label mb-1">Price</label>
            <div class="input-group">
                <input id="price" name="price[]" type="text" class="form-control cc-cvc"
                    data-val="true" placeholder="price">
            </div>
            <span class="help-block"></span>
        </div>`;
    html += `<div class="col-3">
            <label for="qty" class="control-label mb-1">qty</label>
            <div class="input-group">
            <input id="qty" name="qty[]" type="text" class="form-control cc-cvc"
                data-val="true" placeholder="qty">
            </div>
            <span class="help-block"></span>
        </div>  `;
    var size_id_html = jQuery("#size_id").html();
    html += `<div class="col-6">
            <label for="size_id" class="control-label mb-1">Size</label>
            <select name="size_id[]" id="size_id" class="form-control cc-exp">
                ${size_id_html}
            </select>
            <span class="help-block"></span>
            </div>`;
    var color_id_html = jQuery("#color_id").html();
    html += `<div class="col-6">
            <label for="color_id" class="control-label mb-1">color</label>
            <select name="color_id[]" id="color_id" class="form-control cc-exp">
            ${color_id_html}
            </select>
            <span class="help-block"></span>
            </div>`;
    html += `<div class="col-6">
            <div class="form-group">
            <label for="attr_image" class="control-label mb-1">Multi Image</label>
            <input id="attr_image" name="attr_image[]" type="file" class="form-control cc-exp">
            </div>
            <span class="help-block"></span>
            </div>`;
    html += `<div class="col-md-2">
            <label for="" class="control-label"></label>
            <a class="btn btn-danger mt-4 text-white" fdprocessedid="ug9cmj" onclick="removeMore(${loop_count})"><i
            class="fa fa-minus"></i>&nbsp; &nbsp;Remove Attri...</a>
            </div>`;
    html += `</div></div>`;
    jQuery("#product_attr_box").append(html);
}
function removeMore(loop_count) {
    jQuery("#product_attr_" + loop_count).remove();
}

// {{-- 24.08.2024  ||  20.00 --}}
