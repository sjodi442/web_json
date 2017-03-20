<html>
 <head>
   <title>
   </title>
   <!-- with jquery -->
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script type = "text/javascript" language = "javascript">
      $(document).ready(function() {
          $("#driver").click(function(event){
              $.getJSON('http://localhost/belajar_json/jsondata.php', function(jd) {
                var i=0;
                for(i=0;i<jd.length;i++){
                  var txt = "<p> id: " + jd[i].id_siswa + "</p>";
                  $('#stage').append(txt, '<input type="text" value="'+jd[i].nama_siswa+'">');
                }
              });
          });
          $("#stage").mouseover(function(event) {
            $(this).html('');
          });
      });
    </script>
 </head>
 <body>
   <!-- with php -->
   <?php
   $url = 'http://localhost/belajar_json/jsondata.php';
   $content = file_get_contents($url);
   $json = json_decode($content, true);
   foreach($json as $i){
     echo $i['id_siswa'];
     echo " ";
       //echo " <input type='text' value='$i[id_siswa]' readonly> <br />";
   }
   ?>
    <!-- form jquery -->
    <div id = "stage" style="background-color: rgba(0,0,10,0.5)"></div>
      <input type = "button" id = "driver" value = "Load Data" />
 </body>
 </html>
