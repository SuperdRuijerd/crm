$(document).ready(function(){

  	$("button[name='login']").click(function(){
    	var form = $("#login_form").serialize();

      	$.ajax({
           type : "POST",
           url: 'http://nerodefence.com/crm/auth/login',
           cache : false,
           data: form,
           dataType: "json",
           success : function(response){
             $.notify({
                 title:response['title'],
                 message:response['mesaj']
              },
              {
                 type:response['type'],
                 allow_dismiss:false,
                 newest_on_top:false ,
                 mouse_over:false,
                 showProgressbar:false,
                 spacing:10,
                 timer:2000,
                 placement:{
                   from:'top',
                   align:'right'
                 },
                 offset:{
                   x:30,
                   y:30
                 },
                 delay:1000 ,
                 z_index:10000,
                 animate:{
                   enter:'animated bounce',
                   exit:'animated bounce'
               }
             });
             if(response['type'] == "success"){ setTimeout(function(){ window.location = response['url']; }, 1000); }
           }
       });
       return false;

     });

	$("button[name='create_account']").click(function(){
		var form = $("#create_account").serialize();

		$.ajax({
			type : "POST",
			url: 'http://nerodefence.com/crm/auth/hesap_olustur_kaydet',
			cache : false,
			data: form,
			dataType: "json",
			success : function(response){
				$.notify({
						title:response['title'],
						message:response['mesaj']
					},
					{
						type:response['type'],
						allow_dismiss:false,
						newest_on_top:false ,
						mouse_over:false,
						showProgressbar:false,
						spacing:10,
						timer:2000,
						placement:{
							from:'top',
							align:'right'
						},
						offset:{
							x:30,
							y:30
						},
						delay:1000 ,
						z_index:10000,
						animate:{
							enter:'animated bounce',
							exit:'animated bounce'
						}
					});
				if(response['type'] == "success"){ setTimeout(function(){ window.location = response['url']; }, 1000); }
			}
		});
		return false;

	});

});
