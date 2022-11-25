$(document).ready(function(){
  var base_url = "http://nerodefence.com/crm/";

  	$("a.active .according-menu i").removeClass();
  	$("a.active .according-menu i").addClass('fa fa-angle-down');
  	$("a.active").nextUntil("ul.nav-submenu menu-content").removeAttr("style");
  	$("a.active").nextUntil("ul.nav-submenu menu-content").css("display","block");


  	$("button[name='rezervasyon_ekle']").click(function(){
    var form = $("#rezervasyon_ekle").serialize();
    $.ajax({
           type : "POST",
           url: base_url+'admin/rezervasyon_ekle_kaydet',
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
                 delay:500 ,
                 z_index:500,
                 animate:{
                   enter:'animated bounce',
                   exit:'animated bounce'
               }
             });
           }
      });
      return false;
    });
  	$("table").on("change", "input[name='tedarikci_durum']", function() {
	  var kullanicino = $(this).val();
	  if(this.checked){
		  $.post( base_url + "admin/kullanici_durum_degistir", { durum: "1", kullanicino:kullanicino  } ).done(function( data ) {
			  $.notify({
					  title:"Başarılı",
					  message:"Durum Değiştirildi"
				  },
				  {
					  type:"success",
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
					  delay:500 ,
					  z_index:500,
					  animate:{
						  enter:'animated bounce',
						  exit:'animated bounce'
					  }
			  });
		  });
	  }
	  else{
		  $.post( base_url + "admin/kullanici_durum_degistir", { durum: "0", kullanicino:kullanicino } ).done(function( data ) {
			  $.notify({
					  title:"Başarılı",
					  message:"Durum Değiştirildi"
				  },
				  {
					  type:"success",
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
					  delay:500 ,
					  z_index:500,
					  animate:{
						  enter:'animated bounce',
						  exit:'animated bounce'
					  }
				  });
		  });
	  }
    });
  	$("table").on("change", "input[name='acente_durum']", function() {
		var kullanicino = $(this).val();
		if(this.checked){
			$.post( base_url + "admin/kullanici_durum_degistir", { durum: "1", kullanicino:kullanicino  } ).done(function( data ) {
				$.notify({
						title:"Başarılı",
						message:"Durum Değiştirildi"
					},
					{
						type:"success",
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
						delay:500 ,
						z_index:500,
						animate:{
							enter:'animated bounce',
							exit:'animated bounce'
						}
					});
			});
		}
		else{
			$.post( base_url + "admin/kullanici_durum_degistir", { durum: "0", kullanicino:kullanicino } ).done(function( data ) {
				$.notify({
						title:"Başarılı",
						message:"Durum Değiştirildi"
					},
					{
						type:"success",
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
						delay:500 ,
						z_index:500,
						animate:{
							enter:'animated bounce',
							exit:'animated bounce'
						}
					});
			});
		}
	});


  	$("button[name='acente_rezervasyon_ekle']").click(function(){
		var form = $("#acente_rezervasyon_ekle").serialize();
		$.ajax({
			type : "POST",
			url: base_url+'acente/rezervasyon_ekle_kaydet',
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
						delay:500 ,
						z_index:500,
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
	$("button[name='acente_talep_olustur']").click(function(){
		var form = $("#acente_talep_olustur").serialize();
		$.ajax({
			type : "POST",
			url: base_url+'acente/talep_olustur_kaydet',
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
						delay:500 ,
						z_index:500,
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


	$("button[name='tedarikci_rezervasyon_ekle']").click(function(){
		var form = $("#tedarikci_rezervasyon_ekle").serialize();
		$.ajax({
			type : "POST",
			url: base_url+'tedarikci/rezervasyon_ekle_kaydet',
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
						delay:500 ,
						z_index:500,
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
