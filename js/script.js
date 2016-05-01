

jQuery(document).ready( function()
{
 
    jQuery(".dropdown-toggle").hover(
    	function(){jQuery(".fa-pencil").addClass('fa-spin')},
    	function (){jQuery(".fa-pencil").removeClass('fa-spin')}
    	);

	

    $(".modal").on("show.bs.modal", function(){
    var $bodyWidth = $("body").width();
    $("body").css({'overflow-y': "hidden"}).css({'padding-right': ($("body").width()-$bodyWidth)});
});

  		
    
    jQuery(function(){
        jQuery('[data-toggle="popover"]').popover();
    });


    
});






	//jQuery('li').remove();z
	//jQuery('body').append('<a href="http://new.vk.com/aghym1">Моя страница ВК</a>');
	
	//jQuery('h3').remove();
	
	//var div_clon;
	
	//div_clon=jQuery('.part1').clone();
	
	//jQuery('body').append(div_clon);
		
		
		
	
	
	//jQuery('input').on('change', function(){
	//	var value1,value2;
	
	//	value1=jQuery('#val1').val();
		//value2=jQuery('#val2').val();
	//	jQuery('.part0').html(value1);
		//alert(Math.sqrt(Math.pow(parseFloat(value1),2)+Math.pow(parseFloat(value2),2)));
	//});
	
//});

//<div class="container">
 //<div class="row"> 
  //<br>
  //<h1>Name of the page</h1>
  //<p><br>
//    <a href="#" class="btn btn-default">Button</a>
    //<a href="#" class="btn btn-primary">Button</a>
    ///<a href="#" class="btn btn-success">Button</a>
    //<a href="#" class="btn btn-warning">Button</a>
    //<a href="#" class="btn btn-info">Button</a>
    //<a href="#" class="btn btn-danger">Button</a>
  //</p>
  //</div>
//</div>-->