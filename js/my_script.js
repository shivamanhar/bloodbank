$(document).ready(function(){
$("#blood_group").change(
                 function(){
                    var mn = $("#blood_group").val();
    alert(mn);}
                )
                }
);

$(document).ready(function(){
$("#state").change(
                 function(){
                    var state = $("#state").val();
                    var link = $("#url").val()+"welcome/district";
                    
                     $.post(link, {state: state}, function(data){
                        $("#district").html(data);
                    });
                   
                    }
                )
                }
);



$(document).ready(function(){
 // var a = 3.4;
  // alert(a);
  $("#test").change(function(){
   //alert("ok");
   var m = $("#test").val();
   var url = $("#url").val()+"welcome/post_test";
   var  name1= $("#test").val();
   $.post(url, {name:name1}, function(data){
      
     $("#d_name").html(data);
     
      })
   //alert(m+url);
   
   });
   
   });