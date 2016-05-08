

jQuery(document).ready( function()
{
 
    jQuery(".dropdown-toggle").hover(
    	function(){jQuery(".fa-pencil").addClass('fa-spin')},
    	function (){jQuery(".fa-pencil").removeClass('fa-spin')}
    	);

    
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
		
		
		