jQuery(document).ready(function($){
	$(document).on("click",".template-cat-click",function(){
		$(".loader-img").css('display','block');
		var term_id = $(this).data("id");

		var data = {
            action: 'category_filter_func',
            termid: term_id,
        };

        $.ajax({
            url: Front.ajax_url,
            type: "POST",
            data: data,
            dataType: 'json',
            success: function(resp) {
                if (resp.flag === true) {
                	$(".loader-img").css('display','none');
                    $(".right-content").html("");
                    $(".right-content").html(resp.search_content);
                }else{
                	$(".loader-img").css('display','none');
                	$(".right-content").html("No Template Found!!");
                }
            }
        },'json');


	});

	$(document).on("click",".view-by-click",function(){
		$(".loader-img").css('display','block');
		var type = $(this).data('type');
		var data = {
            action: 'viewby_filter_func',
            view_type: type,
        };

        $.ajax({
            url: Front.ajax_url,
            type: "POST",
            data: data,
            dataType: 'json',
            success: function(resp) {
                if (resp.flag === true) {
                	$(".loader-img").css('display','none');
                    $(".right-content").html("");
                    $(".right-content").html(resp.search_content);
                }else{
                	$(".loader-img").css('display','none');
                	$(".right-content").html("No Template Found!!");
                }
            }
        },'json');

	});
});