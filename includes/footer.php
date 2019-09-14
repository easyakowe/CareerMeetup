<div class="w3-display-container"style="background-color: #3E3E3E;">
  <div class="w3-row w3-padding-64" style="font-weight:bold;">
     <div class="w3-col w3-center">
         <div class="w3-row w3-text-grey" style="font-weight:bold;">
             <p class="w3-center w3-text-grey">&copy; 2017. Peer To Peer Donation.
                 All rights reserved.</p>
         </div>
     </div>
  </div>
</div>


<script>
    function generateUserRefID() {

        var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        var string_length = 8;
        var randomstring = '';
        for (var i=0; i<string_length; i++) {
            var rnum = Math.floor(Math.random() * chars.length);
            randomstring += chars.substring(rnum,rnum+1);
        }
        document.getElementById("user_ref_id").value = randomstring;
    }

    generateUserRefID();
</script>

<script>
    setInterval(function {
       var xmlhttp = new XMLHttpRequest();
        xmlhttp.open('GET','user_dashboard.php',false);
        xmlhttp.send(null);
        document.getElementById("response").innerHTML = xmlhttp.responseText;
    }, 1000);
</script>
</body>
</html>
