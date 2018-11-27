$( document ).ready(function() {
    $("#btn").click(
		function(){
			var znach1=document.getElementById('tv1').value;
			var znach2=document.getElementById('tv2').value;
			var znach3=document.getElementById('datepicker').value;
			//alert(znach3);
			if ((isNaN(parseInt(znach1))==true) ||(znach1<1000) || (znach1>3000000))
			{
					alert("Неправильно введена сумма вклада");
			}
			else if ((isNaN(parseInt(znach2))==true) ||(znach2<1000) ||(znach2>3000000))
			{
					alert("Неправильно введена сумма пополнения вклада");
			}
			else if (znach3=="гггг.мм.дд")
			{
					alert("Неправильно введена дата");
			}
			else
			{
				sendAjaxForm('result_form', 'ajax_form', 'calc.php');	
			}
			return false; 
		}
	);
});
 
function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url, 
        type:     "POST", 
        dataType: "html", 
        data: $("#"+ajax_form).serialize(),  
        success: function(response) { 
        	$('#result_form').html('<b>Результат:</b> '+response+' руб.');
    	},
    	error: function(response) { 
            $('#result_form').html('Ошибка. Данные не отправлены.');
    	}
 	});
}