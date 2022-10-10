
$('#btnPHP').click( function (e) { // Se crea funcion para mandar a llamar la ruta con el formateo del JSON
e.preventDefault();
$.ajax({
        url:"http://192.168.1.3:8000/api/colors",
        type:'get',
        dataType:"json",
         success:function(data){ 
         $("#decodeJSON").html("");
         var tr =JSON.stringify(data);
         $("#decodeJSON").append(tr);
          },
           error:function(x,xs,xt){
                   console.log('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
                }
      }); 
 });


 $('#btnJS').click( function (e) { // Se crea funcion para mandar a llamar la ruta con el formateo del JSON
    e.preventDefault();
    $.ajax({
            url:"https://my-json-server.typicode.com/dp-danielortiz/dptest_jsonplaceholder/items",
            type:'get',
            dataType:"json",
             success:function(data){
                let response = JSON.parse(JSON.stringify(data));
                var length = Object.keys(response).length;
                $("#decodeJSON").html("");
                for(var i = 0;i<length ;i++)
                {
                    if(data[i]["color"] == "red")
                    {
                        var tr =JSON.stringify(data[i]);
                        $("#decodeJSON").append(tr);
                    }
           
                }
              },
               error:function(x,xs,xt){
                       console.log('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
                    }
          }); 
     });


