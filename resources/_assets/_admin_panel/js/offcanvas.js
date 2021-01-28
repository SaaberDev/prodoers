  
        /// some script
        // jquery ready start
        $(document).ready(function () {
            // jQuery code
            $("[data-trigger]").on("click", function (e) {
                e.preventDefault();
                e.stopPropagation();
                var offcanvas_id = $(this).attr('data-trigger');
                $(offcanvas_id).toggleClass("show");
                $('body').toggleClass("offcanvas-active");
                $(".screen-overlay").toggleClass("show");
            });
            // Close menu when pressing ESC
            $(document).on('keydown', function (event) {
                if (event.keyCode === 27) {
                    $(".mobile-offcanvas").removeClass("show");
                    $("body").removeClass("overlay-active");
                }
            });
            $(".btn-close, .screen-overlay").click(function (e) {
                $(".screen-overlay").removeClass("show");
                $(".mobile-offcanvas").removeClass("show");
                $("body").removeClass("offcanvas-active");
            });
        }); // jquery end

   $(function () {
  $('[data-toggle="tooltip"]').tooltip()
});


//  function bs_input_file() {
//	$(".input-file").before(
//		function() {
//			if ( ! $(this).prev().hasClass('d-none') ) {
//				var element = $("<input type='file' class='d-none' style='visibility:hidden; height:0'>");
//				element.attr("name",$(this).attr("name"));
//				element.change(function(){
//					element.next(element).find('input').val((element.val()).split('\\').pop());
//				});
//				$(this).find("button.btn-choose").click(function(){
//					element.click();
//				});
//				$(this).find("button.btn-reset").click(function(){
//					element.val(null);
//					$(this).parents(".input-file").find('input').val('');
//				});
//				$(this).find('input').css("cursor","pointer");
//				$(this).find('input').mousedown(function() {
//					$(this).parents('.input-file').prev().click();
//					return false;
//				});
//				return element;
//			}
//		}
//	);
//}
//$(function() {
//	bs_input_file();
//});



    $(document).on('change','.up', function(){
		   	var names = [];
		   	var length = $(this).get(0).files.length;
			    for (var i = 0; i < $(this).get(0).files.length; ++i) {
			        names.push($(this).get(0).files[i].name);
			    }
			    
				if(length>2){
				  var fileName = names.join(', ');
				  $(this).closest('.form-group').find('.form-control').attr("value",length+" files selected");
				}
				else{
					$(this).closest('.form-group').find('.form-control').attr("value",names);
				}
	   });
    
      function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }