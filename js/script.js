

jQuery(document).ready( function($)
{

    var LIGHTING = 1, NOISE = 2, MICROCLIMATE = 3;

 
    $(".dropdown-toggle").hover(
    	function(){ $(".fa-pencil").addClass('fa-spin'); },
    	function(){ $(".fa-pencil").removeClass('fa-spin'); }
    );
    
    // $('[data-toggle="popover"]').popover();
    

    function nameFunct() 
    { 
        var singleValues = $("#param").val(); 
        switch(singleValues) 
        { 
            case ("1"):
                $('#first').slideDown(400); 
                $('#second').slideUp(400);
                $('#third').slideUp(400);  
                break; 
            case ("2"): 
                $('#first').slideUp(400);
                $('#second').slideDown(400); 
                $('#third').slideUp(400); 
                break; 
            case ("3"): 
                $('#first').slideUp(400);
                $('#second').slideUp(400); 
                $('#third').slideDown(400); 
                break; 
            case ("0"): 
                $('#first').slideUp(400);
                $('#second').slideUp(400); 
                $('#third').slideUp(400); 
                break; 
        } 
    } 
    $("select").change(nameFunct); 
    nameFunct();


    $('#param').change(function() {
        var selectedValue = $(this).val();
        $.post('preferences.php', {'value': selectedValue})
            .done(function(data) { console.log("Success") })
            .fail(function() { console.log("failure") });
    });

});


	//$('li').remove();z
	//$('body').append('<a href="http://new.vk.com/aghym1">Моя страница ВК</a>');
	
	//$('h3').remove();
	
	//var div_clon;
	
	//div_clon=$('.part1').clone();
	
	//$('body').append(div_clon);


		