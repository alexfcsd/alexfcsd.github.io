

jQuery(document).ready ( function()
{
  		//jQuery('.draggable').draggable();

  		(function($) {
 
    $.fn.parallax = function(options) {
 
        var windowHeight = $(window).height();
 
        // Establish default settings
        var settings = $.extend({
            speed        : 0.15
        }, options);
 
        // Iterate over each object in collection
        return this.each( function() {
 
        	// Save a reference to the element
        	var $this = $(this);
 
        	// Set up Scroll Handler
        	$(document).scroll(function(){
 
    		        var scrollTop = $(window).scrollTop();
            	        var offset = $this.offset().top;
            	        var height = $this.outerHeight();
 
    		// Check if above or below viewport
			if (offset + height <= scrollTop || offset >= scrollTop + windowHeight) {
				return;
			}
 
			var yBgPosition = Math.round((offset - scrollTop) * settings.speed);
 
                 // Apply the Y Background Position to Set the Parallax Effect
    			$this.css('background-position', 'center ' + yBgPosition + 'px');
                
        	});
        });
    }
}(jQuery));

$('.bg-1,.bg-3').parallax({
	speed :	0.15
});

$('.bg-2').parallax({
	speed :	0.25
});



    
    jQuery(function(){
        jQuery('[data-toggle="popover"]').popover();
    });
});





$('#size').css({'backgroundImage':'url(img/rew.jpg)',
    'border':'1px solid red'
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