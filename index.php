<!doctype html>
<html><head>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel='stylesheet' href='../css/styles.css'>

</style>

<script>
$(document).ready(function(){
        $('.p-link').click(function(){
        //read its id
        var category = $(this).attr('id');
$.ajax({
type: 'get',
url: 'myshop/getProducts.php',
data: 'category=' + category,
success: function(response){
        if (response != '-1'){
                        $('#category-info').html(response);
        //What to do with the resposnse
        } else
                alert("Could not get the data!");

        }

        });

        });

        });

</script>


</head>
<body>
<div class='container' id='outer-box' ><!-- outer box -->
  <div class='row'><!-- top box -->
        <div class='col-xs-12 header'>
                <h2>Ebsco Tutorial</h2>
                <div class='nav-menu'>
                        <ul >
                                <li role="presentation" class="menu-item"><a class='a-menu' href="index.php">Home</a></li>
                                <li role="presentation" class='menu-item'><a class='a-menu'  href="signin.php">Sign in</a></li>
                                <li role="presentation" class='menu-item'><a class='a-menu'  href="quizer.php">Quiz</a></li>
                        </ul>
                </div>
        </div>
   </div>
   <div class='row'><!-- middle box -->
        <div class='col-xs-10 content'><!-- right section: content -->
	
	<form name="login" action="https://libproxy.uww.edu:9443/login?url=http://search.ebscohost.com/login.asp?profile=web" method="post" target="_blank">
        <table>
	<h3>Hello Welcome to the Ebsco Host Online Tutorial</h3>

<p>The Online Interactive Tutorial program will be used to assist students in learning how to better utilize the EBSCOhost database. Currently, students have issues efficiently searching the EBSCOhost database, and the EBSCOhost Online Interactive Tutorial program was created to help improve students efficiency while searching the database. The system has students search the database and answer questions about the data they are searching. Along-side the questions the students must also enter which result they found the answer on as well as how many results were found. The EBSCOhost Online Interactive Tutorial improves efficiency by suggesting changes to the students searches to lower search results and find answers in results listed higher on the page.</p>

<h5>Login For Tutorial:</h5> 

        <tbody><tr>
        <td>Net-ID:</td>
        <td><input name="user" size="20" type="text" /></td>
        </tr>
        <tr>
        <td>Password:</td>
        <td><input name="pass" size="20" type="password" /></td>
        </tr>
       </tbody>
         </table>
                        <input name="url" value="http://search.ebscohost.com/login.asp?profile=web" type="hidden">
                                <input value="Login" type="submit" />
        </form>



        </div><!-- end section -->
  </div>
	<div id='category-info'></div>
  <div class='row'><!-- Footer -->
        <div class='col-xs-12 footer'>@ Ebsco.com</div>
  </div>
</div>
</body>
</html>
