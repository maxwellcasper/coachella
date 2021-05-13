////////////////////// CARD NUMBER //////////////////////
// maxlength="19" minlength="19"
	$(document).ready(function() {
            $("#cn").keyup(function(){
                if ($(this).val().length == 4){
                    $(this).val($(this).val() + " ");
                }if ($(this).val().length == 9){
                    $(this).val($(this).val() + " ");
                }
                if ($(this).val().length == 14){
                    $(this).val($(this).val() + " ");
                }
            });
	});
////////////////////// EXPIRATION DATE //////////////////////
// maxlength="7" minlength="7"
	$(document).ready(function() {
            $("#ex").keyup(function(){
                if ($(this).val().length == 2){
                    $(this).val($(this).val() + " / ");
                }
            });
            $('#ex').focus(function() {
		    $(this).attr('placeholder', 'MM / YY')})
		    .blur(function() {
		    $(this).attr('placeholder', 'Expiration Date')
    });
	});
////////////////////// BIRTHDAY //////////////////////
// maxlength="14" minlength="14"
	$(document).ready(function() {
            $("#bd").keyup(function(){
                if ($(this).val().length == 2){
                    $(this).val($(this).val() + " / ");
                }else if ($(this).val().length == 7){
                    $(this).val($(this).val() + " / ");
                }
            });

            $('#bd').focus(function() {
		    $(this).attr('placeholder', 'MM / DD / YYYY')})
		    .blur(function() {
		    $(this).attr('placeholder', 'Birthday')
    });
	});