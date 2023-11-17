$.ajaxSetup({
	headers:{
		'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
	}
});

$(document).ready(function(){
    $('.spec').hide();
	$('.brand').hide();
	$('.recomDoc').hide();
	$('.partNum').hide();
	$('.pForm').hide();
	$('.typeUnit').hide();
	$('.codeUnit').hide();
	$('.catalog').hide();

    //Filter form field saat pilih Material Type
    $('#mtype').change(function(){
    	var mtypeID = $('#mtype').val();
    	$.ajax({
        	url:"/getDataMtype/"+mtypeID,
        	method:"GET",
        	data : mtypeID,
        	success: function(data){
        		$.each(data.mtype, function (key, item){
                    if(item.spec == 1){
                        $('.spec').show();
                    }else{
                        $('.spec').hide();
                    }
        			if(item.brand == 1){
        				$('.brand').show();
        			}else{
        				$('.brand').hide();
        			}
        			if(item.recom_doc == 1){
        				$('.recomDoc').show();
        			}else{
        				$('.recomDoc').hide();
        			}
        			if(item.part_num == 1){
        				$('.partNum').show();
        			}else{
        				$('.partNum').hide();
        			}
        			if(item.pform == 1){
        				$('.pForm').show();
        			}else{
        				$('.pForm').hide();
        			}
        			if(item.type_unit == 1){
        				$('.typeUnit').show();
        			}else{
        				$('.typeUnit').hide();
        			}
        			if(item.code_unit == 1){
        				$('.codeUnit').show();
        			}else{
        				$('.codeUnit').hide();
        			}
        			if(item.catalog == 1){
        				$('.catalog').show();
        			}else{
        				$('.catalog').hide();
        			}
        			
        		});
        	}
        });
    });

    //Filter field saat pilih detail RMM berdasarkan Material Type
    var detailMtype = $('#detailMtype').val();
    $.ajax({
        url:"/getDetailRmm/"+detailMtype,
        method:"GET",
        data : detailMtype,
        success: function(data){
            $.each(data.detailMtype, function (key, item){
                if(item.spec == 1){
                    $('.spec').show();
                }else{
                    $('.spec').hide();
                }
                if(item.brand == 1){
                    $('.brand').show();
                }else{
                    $('.brand').hide();
                }
                if(item.recom_doc == 1){
                    $('.recomDoc').show();
                }else{
                    $('.recomDoc').hide();
                }
                if(item.part_num == 1){
                    $('.partNum').show();
                }else{
                    $('.partNum').hide();
                }
                if(item.pform == 1){
                    $('.pForm').show();
                }else{
                    $('.pForm').hide();
                }
                if(item.type_unit == 1){
                    $('.typeUnit').show();
                }else{
                    $('.typeUnit').hide();
                }
                if(item.code_unit == 1){
                    $('.codeUnit').show();
                }else{
                    $('.codeUnit').hide();
                }
                if(item.catalog == 1){
                    $('.catalog').show();
                }else{
                    $('.catalog').hide();
                }
            });
        }
    }); 

    $('#send').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            url:$(this).attr('action'),
            method:$(this).attr('method'),
            data:$(this).serialize(),
            processData:false,
            dataType:'json',
            success:function(data){
                $('#send')[0].reset();
                $('#chat').load(" #chat");
            }
        });
    });
});