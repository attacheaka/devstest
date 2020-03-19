$(document).ready(function(){
    $('#search-topic').keyup(function(e){
      $('#result-search').html('');

      var search_topic = $(this).val();
      
     
      if(search_topic !=""){ 
        console.log(search_topic);

        $.ajax({
          type: 'GET',
          url: "",
          data: 'q=' + encodeURIComponent(search_topic),
          success: function(data){
            if(data !=""){
              $('#result-search').append(data);
               search_topic = "";
            }else{
              document.getElementById('result-search').innerHTML = "<div style='font-size: 20px; text-align: center; margin-top: 10px'>Aucun topic trouvé </div>";
               search_topic = "";
            }

          }
        });
         
      }
      e.preventDefault()
    });


 });

   $("#fadeal").delay(4000).fadeOut(2000);

