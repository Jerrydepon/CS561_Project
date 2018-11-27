$(function(){$("#recipename").keyup(function(e){if(e.keyCode==13){ajax();}});$("#button").click(function(){ajax();});
function ajax(){
  var val=$("#recipename").val(),buttonmsg='search';
  var ctg_val=$("#category").val(),buttonmsg='search';
  $.ajax(
    {type:"GET", url:"recipe.php", data:{recipename:val, category:ctg_val}, 
    beforeSend:function(){$("#button").attr("disabled",true),$("#msg").hide(),$("#button").html("Searching.....");},
    success:function(a){$("button").attr("disabled",false),$("#button").html(buttonmsg),$("#msg").slideDown(),$("#msg").html(a);},
    error:function(a){$("button").attr("disabled",false),$("#button").html(buttonmsg),alert("Failed");}});}});
function logout(){
	$.ajax({
           type: "POST",
           data:{action:'call_this'},
           success:function(html) {             
           }

      });

}