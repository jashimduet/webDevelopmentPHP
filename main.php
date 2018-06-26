<?php
	session_start();
	$sShowWelcome = "";
	$sShowLogin = "";
  $sShowProduct="";


	if( isset( $_SESSION['sUserName'] ) )
	{
    if(isset($_SESSION['admin']))
    {
      if($_SESSION['admin']=='0'){
        $sShowProduct="show";
      }else{
        $sShowWelcome  = "show";
      }
    }
	}
	else
	{
		
		$sShowLogin = "show";
	}

  
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Web Shop</title>
	<link rel="stylesheet" href="style-main.css">
</head>
<body>

 <div id="iPageLogin" class="cPage  <?php echo $sShowLogin; ?> ">
			
	<div class="logInPage" >
<div>
		<button id="btnLogIn" class="btnShow" data-showThisPage="showLogIn" >Login</button>
		<button id="btnSignUp" class="btnShow" data-showThisPage="showSignUp" ">Sign Up</button>
</div>
	<div id="showLogIn" class="page"  >
		<form id="frmLogIn">
			<h2>LogIn</h2>
			<input type="text" name="txtUserName" placeholder="User Name"><br>
			<input type="password" name="txtUserPassword" placeholder="Password">	
			<button  type="button" class="btnEnter" id="btnSignin">Login</button>	
		</form>
    <h2> <span id="lblLoginError"></span></h2>		
	</div>	


	<div id="showSignUp" class="page" >
		<form id="frmSignUp">
			<h2>Sign Up</h2>
			<input type="text" name="txtFirstName" placeholder="Firstname"/></br>
			<input type="text" name="txtLastName" placeholder="Lastname" /><br>
			<input type="text" name="txtUserEmail" placeholder="Email" /><br>
			<input type="password" name="password" placeholder="password" /></br>
			<input type="text" name="txtMobileNo" placeholder="Mobile No."/>
			<input type="file" name="fileUserImage"></br>
	    <button type="button" class="btnEnter" id="btnSendSignUp" >SignUp</button>	
      </form>
	</div>		
	
	    
</div>	

			
</div>


		<!-- *************Welcome Admin****************** -->
		

		<div id="iPageWelcome" class="cPage <?php echo $sShowWelcome; ?>">
			<div id="show">
        <h2 style=" float: right; margin-right: 3%; margin-top: 2%;"id="welcomeUser">WELCOME <a id="iLblWelcomeAdminName"><?php echo $_SESSION['sUserName']; ?></a><span class="userid" style="display:none;">
          <?php echo $_SESSION['sUserId']; ?></span></h2>
			<button id="btnLogout" type="button" >LOGOUT</button>			
	<div class="mainBtn">		
<button type="button" class="showProduct" id=" viewProduct" >View Product</button>
<button type="button" class="showUser" id=" viewUser"> User Function</button>
<button type="button" class="addNewProduct" id=" addProduct">Add Product</button>

<!-- ...................View Product Div............... -->

<div id="ViewOurProduct">
  <h1 > View Product here</h1>

	<div class="show-products viewpage" id="seeProduct">       
      
      <div class="productsPage"  >        
      <div class="product" id="insertProductsHere" >
        <!-- Products -->
      </div> 
                  
    </div>
    </div>      
</div>
<div class="product-details" id="insertProductDetailsHere" >
        <!-- Product details -->
        </div> 

	<!-- ...................View User Div............... -->

<div  id="ViewOurUser" style="display: none;">
<div style="display: inline;">
<button type="button" id="addNewUser"> Add user</button>
<button type="button" id="viewAllUser"> View User</button>
</div>
 <div class="show-all-users">      

      <div class="users" id="insertUsersHere">
                
        <!-- Users -->
      </div>
    </div> 
     <!-- Show detailed view about single user -->
    <div class="show-single-user" style="margin-left: 20%;">
          
      <div class="user-details" id="insertUserDetailsHere" >
        <!-- User details -->
        </div>
</div>
<div id="addfrmUser">
		<form id="frmAddUser">
			<h2>Add User</h2>
			<input type="text" name="txtFirstName" placeholder="Firstname"/><br>
			<input type="text" name="txtLastName" placeholder="Lastname" /><br>
			<input type="text" name="txtUserEmail" placeholder="Email" /><br>
			<input type="password" name="password" placeholder="password" /><br>
			<input type="text" name="txtMobileNo" placeholder="Mobile No."/><br>
			<input type="file" name="fileUserImage">
	    </form>
	    <button type="button"  id="btnaddfrmUser" style="">Add User</button>	
	</div>		
</div>


<!-- ...................Add product Div............... -->
  <div  id="AddOurProduct">
    <h1 style="color: red"> Add Product here</h1>
      <form id="frmProductInfo" >
         <input type="text" name="txtProductName" id='txtProductName' placeholder="Product Name" /><br>
        <input type="text"  name="txtPrice" id="txtPrice"placeholder="Price" /><br>
        <input type="text"  name="txtOfferPrice" id="txtOfferPrice"placeholder="Offer Price" /><br>
        <input type="text"  name="txtOfferStart" id="txtOfferStart"placeholder="Offer Start" /><br>
        <input type="text"  name="txtOfferEnd" id="txtOfferEnd" placeholder="Offer End" /><br>
        <input type="text"  name="txtQuantity" id="txtQuantity" placeholder="Quantity" /><br>
        <input type="file" name="fileProductImage" id="fileProductImage">             
      </form>
      <input type="submit"  id="btnSaveProduct" value="Save Product"/>  
  </div>
  <div id="message"></div>	
	
</div>
</div>
</div>


<!-- ............View Product for User............... -->

<div id="iViewProductForUser" class="cPage  <?php echo $sShowProduct; ?> "> 
  <div id="usershow"></div>
      <button id="userbtnLogout" type="button" >LOGOUT</button>
      <h2 id="userwelcomeUser" >WELCOME <a id="useriLblWelcomeUserName" class="userProfile" data-profileId="<?php echo $_SESSION['sUserId']; ?>"><?php echo $_SESSION['sUserName']; ?></a>
        </h2>


<div class="mainBtn"> 
<div id="btn-couple">  
<button type="button" class="userShowProduct" id=" userviewProduct" >View Product</button>
<button type="button"  class="userSubscribe" >Subscribe</button>
</div>

<div id="userViewOurProduct">
  <h1>  Product here</h1>

          <!-- <h1>All Products</h1> -->  
      <div class="product" id="userinsertProductsHere" >
        <!-- Products -->
               
    
    </div>  
</div>
<div id="insertUserProfileDetailsHere"></div>

<!--*******************For User Subscribe***************-->

  <div id="main">
        <div id="map"></div>
         <div id="admin">
            <form id="frmSubscribe">
                  <input type="text" name="subName" placeholder="Enter your Name"></br>
                  <input  type="text" name="subEmail" placeholder="Enter Your Email Address"></br>  
                  <input  type="text" name="subPassword" placeholder="Enter Password"></br>        
                  <button  id="btnSaveSubscriber" type="button">Subscribe</button>
             </form>
          </div>  
      </div>

    </div>
  </div>
 
  





<!-- **************Div Hide/Show********************* -->
<script >		
    var aBtnShow = document.getElementsByClassName("btnShow");
    // this is an array
    for(var i = 0; i < aBtnShow.length; i++)
    {
         //console.log("x");
        aBtnShow[i].addEventListener("click",function(){
             //console.log("x");
            // Hide the pages
            var aPages = document.getElementsByClassName( "page" );
            for(var j = 0; j < aPages.length; j++)
            {
                // console.log("x");
                aPages[j].style.display = "none";
            }

            var sDataAttibute = this.getAttribute("data-showThisPage");
            
            console.log(sDataAttibute);
            document.getElementById(sDataAttibute).style.display = "flex";
        });
    }

</script>



<!-- *******************Logout Part******************* -->
		<script>

		btnLogout.addEventListener( "click" , function(){
		  var ajax = new XMLHttpRequest();
		  ajax.onreadystatechange = function() 
		  {
		  	iPageWelcome.style.display = "none";
		  	iPageLogin.style.display = "grid";
	    }			
		  ajax.open( "GET", "api-logout.php" , true );
		  ajax.send();	
		});

    userbtnLogout.addEventListener( "click" , function(){
      var ajax = new XMLHttpRequest();
      ajax.onreadystatechange = function() 
      {
        iPageWelcome.style.display = "none";
        iViewProductForUser.style.display="none";
        iPageLogin.style.display = "grid";
      }     
      ajax.open( "GET", "api-logout.php" , true );
      ajax.send();  
    });

		/*******************Log In Part************************/
		
		btnSignin.addEventListener( "click" , function(e){
			console.log("btnsignin--x");
			
		  var ajax = new XMLHttpRequest();
		  ajax.onreadystatechange = function() 
		  {       
        if (this.readyState == 4 && this.status == 200)  {          
          var jDataFromServer = JSON.parse( this.responseText );
          if( jDataFromServer.login == "admin" )   
          {
            console.log("admin");
            iLblWelcomeAdminName.innerHTML=jDataFromServer.firstName ;

            console.log("WELCOME:" , jDataFromServer.firstName);
            iPageWelcome.style.display = "grid";
            iPageLogin.style.display = "none";
            iViewProductForUser.style.display="none";
          }
          else if ( jDataFromServer.login == "user" )
          {
            console.log("user");
            useriLblWelcomeUserName.innerHTML=jDataFromServer.firstName ;

            console.log("WELCOME:" , jDataFromServer.firstName);
            iViewProductForUser.style.display="grid";
            iPageWelcome.style.display = "none";
            iPageLogin.style.display = "none";
            
          }        
          else
          {
            console.log("LOGIN FAIL - TRY AGAIN");
            lblLoginError.innerHTML=jDataFromServer.login;
            iPageWelcome.style.display = "none";
            iViewProductForUser.style.display="none";
            iPageLogin.style.display = "grid";
            lblLoginError.style.display="grid";            
          }
        }
      }     
		  ajax.open( "POST", "api-login.php" , true );
		  var jFrmLogin = new FormData( frmLogIn );
		  ajax.send( jFrmLogin );		
			
		});
 </script>

 <!-- ******************Sign Up*********************** -->

<script type="text/javascript">
	btnSendSignUp.addEventListener("click", saveUser);
    function saveUser() {
      var request = new XMLHttpRequest();
      request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          
          //console.log("Response: ",sDataFromServer);
          var sDataFromServer=this.responseText;      
          //console.log(sDataFromServer);
          alert("data saved successfully");
          
        }
      };
      request.open("POST", "api-save-user.php", true);
      var oFrmUser = new FormData(frmSignUp);
      request.send(oFrmUser);
    }

</script>

<!-- ...........show page in admin operation.......... -->
   
    <script >
    	
document.addEventListener( "click" , function( e ){
        if( e.target.className == "showUser" ){
            console.log(" showUser CLICKED");
            ViewOurUser.style.display = "grid";
            AddOurProduct.style.display = "none";
             ViewOurProduct.style.display = "none";
             insertProductDetailsHere.style.display="none";
        }
      });

document.addEventListener( "click" , function( e ){
        if( e.target.className == "showProduct" ){
            console.log(" showproduct CLICKED ");
            ViewOurProduct.style.display = "grid";
            ViewOurUser.style.display = "none";
            AddOurProduct.style.display = "none";
            insertProductDetailsHere.style.display="none";
            //insertProductsHere.style.display="grid;"
        }
      });
document.addEventListener( "click" , function( e ){
        if( e.target.className == "addNewProduct" ){
            console.log(" addNewProduct CLICKED");
            AddOurProduct.style.display = "grid";
            ViewOurProduct.style.display = "none";
            ViewOurUser.style.display = "none";
            insertProductDetailsHere.style.display="none";
        }
      });
    </script>

    <!-- .................show users.............. -->

    <script >    		
  
viewAllUser.addEventListener("click", getAllUsers);
    var users = [];
    function getAllUsers() {
    	insertUsersHere.style.display="grid";
	 insertUserDetailsHere.style.display="grid";
 	addfrmUser.style.display="none";
      var request = new XMLHttpRequest();
      request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          users = JSON.parse(this.responseText);
          showUsers();
        }
      }
      request.open("GET", "api-get-users.php");
      request.send();
    }

    function showUsers() {
      var htmlUsers = "";
      for (var i = 0; i < users.length; i++) {
        var htmlUser = '<div class="user">\
                          <p class="name">'+users[i].firstName+'</p>\
                          <button class="btnUserDetail" id="btnGetUser" data-id="'+users[i].id+'">Details</button>\
                          <button class="btnDeleteUser" data-id="'+users[i].id+'">Delete</button>\
                          <button class="btnEditUser" id="btnEdit" data-id="'+users[i].id+'">Edit</button>\
                        </div>'
        htmlUsers += htmlUser;
      }
      insertUsersHere.innerHTML = htmlUsers;

      var aBtnDeletUser = document.querySelectorAll(".btnDeleteUser");
			for (var j = 0; j < aBtnDeletUser.length; j++) {
					 aBtnDeletUser[j].addEventListener("click", function(){
					 	console.log("clicked to delete user");
					  			this.parentNode.remove();
					  		  
					  			});
				}
      updateButtons();

      
    }

    // Show details about specific user
    var btnsGetUser;
    var user;
    function getSingleUser(e) {
      var userId = e.target.getAttribute('data-id');
      // console.log("Show single user", e.target.getAttribute('data-id'));
      var request = new XMLHttpRequest();
      request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          user = JSON.parse(this.responseText);
          showSingleUser();

        }
      } 
      request.open("GET", "api-get-user.php?id="+userId);
      request.send();
    }
    function showSingleUser() {
      var userHtml = '<h3 style="color:red;">User details</h3>\
                   <img src="'+user.image+'">\
                      <h2>'+user.firstName+'</h2>\
                      <p>'+user.email+'</p>'
      insertUserDetailsHere.innerHTML = userHtml;               
    }   


    function updateButtons() {
      btnsGetUser = document.querySelectorAll("#btnGetUser");
      for (var i = 0; i < btnsGetUser.length; i++) {
        btnsGetUser[i].addEventListener("click", getSingleUser);
      }
    }

    /***************** Update User *********************/

document.addEventListener("click",function(e) {
      if(e.target.className=="btnEditUser"){
      var userId = e.target.getAttribute('data-id');
       console.log("Show single user", e.target.getAttribute('data-id'));
      var request = new XMLHttpRequest();
      request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          user = JSON.parse(this.responseText);
          editUser();
          
        }
      } 
      request.open("GET", "api-get-user.php?id="+userId);
      request.send();
    }
  });

    function editUser() {
      var userHtml = '<form name="frmUserUpdate" id="frmUserUpdate">';
      userHtml = userHtml + '<h3 style="color:red;"> Update User details</h3>\
                   <img src="'+user.image+'"></br></br>';
userHtml = userHtml + 'Name:</br><input type="text" name="txtFirst" value="' + user.firstName + '" /></br></br>';

userHtml = userHtml + 'Email:</br><input type="text" name="txtEmail" value="' + user.email + '" /></br>';
userHtml = userHtml + '<input type="hidden" name="id" value="' + user.id + '" />';
userHtml=userHtml+'<button type="button" class="btnUpdate">Update</button>';
                   
                   userHtml = userHtml + '</form>';
      insertUserDetailsHere.innerHTML = userHtml;               
    }


    
        
      document.addEventListener("click",function(e) {
      if(e.target.className=="btnUpdate"){
        console.log("userUpdate");
      var request = new XMLHttpRequest();
      request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          
          //console.log("Response: ",sDataFromServer);
          var sDataFromServer=this.responseText;      
          console.log("Id:"+sDataFromServer);
          //alert("data updated successfully");
          
          
        }
      };
      request.open("POST", "api-user-update.php", true);
      var oFrmUser = new FormData(frmUserUpdate);
      request.send(oFrmUser);
    }
  });
    

    </script>

    <script >
    	addNewUser.addEventListener("click", function(){
        //console.log("adduser");
         insertUsersHere.style.display="none";
         insertUserDetailsHere.style.display="none";
         addfrmUser.style.display="grid";


    	});    
    </script>

    

    <script >

    	<!-- *************Add New User****************** -->

	btnaddfrmUser.addEventListener("click", saveUser);
    function saveUser() {
      var request = new XMLHttpRequest();
      request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          
          //console.log("Response: ",sDataFromServer);
          var sDataFromServer=this.responseText;      
          //console.log(sDataFromServer);
          alert("data saved successfully");
          
        }
      };
      request.open("POST", "api-save-user.php", true);
      var oFrmUser = new FormData(frmAddUser);
      request.send(oFrmUser);
    }

</script>

<script >
	
 	/***************Delete User********************/
 
		document.addEventListener( "click" , function( e ){
				if( e.target.className == "btnDeleteUser" ){
					  var sUserId = e.target.getAttribute("data-id");
					 // console.log(sUserId);
					DeleteUser( sUserId );
				}
			});
			function DeleteUser( sUserId ){
				// console.log(sUserId);
			  var ajax = new XMLHttpRequest();
			  ajax.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200) {
			     	var sDataFromServer = this.responseText;
			     	  console.log(sDataFromServer);

	     		}
		    }				 
		ajax.open( "GET", "api-delete-user.php?id="+sUserId, true );
		ajax.send();				
	  }

</script>

<!-- ********************Profile Setting************** -->
<script>

document.addEventListener("click",function(e) {
      if(e.target.className=="userProfile"){
      var profileId = e.target.getAttribute('data-profileId');
       console.log("Show single user Id:", e.target.getAttribute('data-profileId'));
       console.log("profileId:"+profileId);
      var request = new XMLHttpRequest();
      request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          user = JSON.parse(this.responseText);
          editUserProfile();
          
        }
      } 
      request.open("GET", "api-get-user.php?id="+profileId);
      request.send();
    }
  });

    function editUserProfile() {
      var userProfileHtml = '<form name="frmUserProfileUpdate" id="frmUserUpdate">';
      userProfileHtml = userProfileHtml + '<h3 style="color:red;"> Update User Profile</h3>\
                   <img src="'+user.image+'"></br>';
userProfileHtml = userProfileHtml + 'Name:</br><input type="text" name="txtFirst" value="' + user.firstName + '" /></br></br>';

userProfileHtml = userProfileHtml + 'Email:</br><input type="text" name="txtEmail" value="' + user.email + '" /></br>';
userProfileHtml = userProfileHtml + '<input type="hidden" name="id" value="' + user.id + '" />';
userProfileHtml=userProfileHtml+'<button type="button" class="btnProfileUpdate">Update</button>';
                   
                   userProfileHtml = userProfileHtml + '</form>';
      insertUserProfileDetailsHere.innerHTML = userProfileHtml;               
    }


    
        
      document.addEventListener("click",function(e) {
      if(e.target.className=="btnProfileUpdate"){
        console.log("userProfileUpdate");
      var request = new XMLHttpRequest();
      request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          
          //console.log("Response: ",sDataFromServer);
          var sDataFromServer=this.responseText;      
          console.log("Id:"+sDataFromServer);
          alert("Profile updated successfully");
          
          
        }
      };
      request.open("POST", "api-user-update.php", true);
      var oFrmUserProfile = new FormData(frmUserProfileUpdate);
      request.send(oFrmUserProfile);
    }
  });
    

    </script>



<script >
	

   /*****************Add Product*********************/
    
    
    btnSaveProduct.addEventListener("click", addProduct);
    function addProduct() {
      var request = new XMLHttpRequest();
      request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          
          //console.log("Response: ",sDataFromServer);
          var sDataFromServer=this.responseText;      
          //console.log(sDataFromServer);
          alert("Product saved successfully");
          document.getElementById('txtProductName').value='';
          document.getElementById('txtPrice').value='';
          document.getElementById('txtOfferPrice').value='';
          document.getElementById('txtOfferStart').value='';
          document.getElementById('txtOfferEnd').value='';
          document.getElementById('txtQuantity').value='';
          document.getElementById('fileProductImage').value='';        
          document.getElementById('message').innerHTML='success';
          
        }
      };
      request.open("POST", "api-save-product.php", true);
      var oFrmProduct = new FormData(frmProductInfo);
      request.send(oFrmProduct);
    }
</script>

<script >


/***********************View Product******************/
				viewProducts();
		    var htmlProducts="";
      
      	function viewProducts(){
      	console.log("viewProduct");
      	var request = new XMLHttpRequest();
      request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
         var products = JSON.parse(this.responseText);
          console.log(products);
          for(var i=0;i<products.length;i++){
              	//console.log("x");
                    var productHtml = '<div class="myProduct">\
                      <img src="'+products[i].image+'">\
                      <h2>'+products[i].productName+'</h2>\
                      <p>Price:'+products[i].price+'</p>';
                      if(products[i].offer!='')
                     {
                      productHtml +='<p style="color:yellow;font-weight:bold;">Offer Price:'+products[i].offer+'</p>\
                      <p>Offer Start:'+products[i].offerStart+'</p>\
                      <p>Offer End:'+products[i].offerEnd+'</p>';
                    }
                      productHtml +='<p>Quantity:'+products[i].quantity+'</p>\
                      <button class="btnEditProduct" data-editId="'+products[i].id+'">Edit</button></br>\
                      <button class="btnDeleteProduct" data-delete="'+products[i].id+'">Delete</button></br>\
                      <button class="btnBuyProduct" data-quantityId="'+products[i].id+'">Buy</button></div>'

                      htmlProducts+=productHtml;
             
  }
  insertProductsHere.innerHTML = htmlProducts;


  var aBtnDeleteProduct = document.querySelectorAll(".btnDeleteProduct");
        for (var j = 0; j < aBtnDeleteProduct.length; j++) {
             aBtnDeleteProduct[j].addEventListener("click", function(){
              console.log("clicked to delete product");
                    this.parentNode.remove();
                    
                    });
          }

        }
      }
      request.open("GET", "api-get-products.php",true);
      request.send();
    
      }    

</script>


<script>
    /***************** Update Product ******************/

document.addEventListener("click",function(e) {
      if(e.target.className=="btnEditProduct"){
        insertProductDetailsHere.style.display="grid";
        ViewOurProduct.style.display="none";
      var productId = e.target.getAttribute('data-editId');
       console.log("Show single product", e.target.getAttribute('data-editId'));
      var request = new XMLHttpRequest();
      request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          product = JSON.parse(this.responseText);
          editProduct();
          
        }
      } 
      request.open("GET", "api-get-product.php?id="+productId);
      request.send();
    }
  });

    function editProduct() {
      var productHtml = '<form name="frmProductUpdate" id="frmProductUpdate">';
      productHtml = productHtml + '<h3 style="color:red;">Update Product details</h3>\
                   <img style="width:150 px;height:150 px; " src="'+product.image+'"></br>';
productHtml = productHtml + 'Name:<input type="text" name="txtUpdateName" value="' + product.productName + '" /></br>';
productHtml = productHtml + 'price:<input type="text" name="txtUpdatePrice" value="' + product.price + '" /></br>';
productHtml = productHtml + '<input type="hidden" name="id" value="' + product.id + '" />';
productHtml = productHtml + 'Offer Price:<input type="text" name="txtUpdateOffer" value="' + product.offer + '" /></br>';
productHtml = productHtml + 'Offer Start:<input type="text" name="txtUpdateStart" value="' + product.offerStart + '" /></br>';
productHtml = productHtml + 'Offer End:<input type="text" name="txtUpdateEnd" value="' + product.offerEnd + '" /></br>';
productHtml = productHtml + 'Quantity:<input type="text" name="txtUpdateQuantity" value="' + product.quantity + '" /></br>';
productHtml=productHtml+'<button type="button" class="btnUpdateProduct">Update</button>';
                   
                   productHtml = productHtml + '</form>';
      insertProductDetailsHere.innerHTML = productHtml;               
    }    
        
      document.addEventListener("click",function(e) {
      if(e.target.className=="btnUpdateProduct"){
        console.log("product Update");
      var request = new XMLHttpRequest();
      request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          
          //console.log("Response: ",sDataFromServer);
          var sDataFromServer=this.responseText;      
          console.log("Id:"+sDataFromServer);
          //alert("data updated successfully");
          
          
        }
      };
      request.open("POST", "api-product-update.php", true);
      var oFrmUpdateProduct = new FormData(frmProductUpdate);
      request.send(oFrmUpdateProduct);
    }
  });
    
</script>
	
	<script >
  
  /*****************Delete Product*********************/
        
       document.addEventListener( "click" , function( e ){
          if( e.target.className == "btnDeleteProduct" ){
              console.log("BUTTON CLICKED");
            var sProductId = e.target.getAttribute("data-delete");
              console.log(sProductId);
            DeleteProduct( sProductId );
          }
        });
        function DeleteProduct( sProductId ){
         console.log("sProductId",sProductId);
        var ajax = new XMLHttpRequest();
        ajax.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            var sDataFromServer = this.responseText;
              console.log(sDataFromServer);
            
          }
        }        
    ajax.open( "GET", "api-delete-product.php?id="+sProductId, true );
    ajax.send();        
    }

</script>

<script>

/*********************userView Product******************/

      document.addEventListener( "click" , function( e ){
        if( e.target.className == "userShowProduct" ){
            console.log(" CLICKED userShowProduct");
            userViewOurProduct.style.display = "grid";
            main.style.display = "none";
            insertUserProfileDetailsHere.style.display="none";
            
        }
      });
      document.addEventListener( "click" , function( e ){
        if( e.target.className == "userSubscribe" ){
            console.log(" CLICKED userSubscribe");
            userViewOurProduct.style.display = "none";
            main.style.display = "grid";
            insertUserProfileDetailsHere.style.display="none";
            google.maps.event.trigger(map,'resize');
            
        }
      });
      document.addEventListener( "click" , function( e ){
        if( e.target.className == "userProfile" ){
            console.log(" CLICKED userProfile");
            userViewOurProduct.style.display = "none";
            main.style.display = "none";
            insertUserProfileDetailsHere.style.display="grid";
            
        }
      });
      

        userviewProducts();
        var userHtmlProducts="";
      //btnViewProducts.addEventListener('click',function(){
        function userviewProducts(){
          //ViewOurProduct.style.display="none";
        console.log("userviewProducts");
        var request = new XMLHttpRequest();
      request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
         var products = JSON.parse(this.responseText);
          console.log(products);

          for(var i=0;i<products.length;i++){
            //console.log("x");
            console.log("productId:"+products[i].id);
     var productHtml = '<div class="myProduct">\
     <img src="'+products[i].image+'">\
                      <h2>'+products[i].productName+'</h2>\
                      <p>Price:'+products[i].price+'</p>';
                      if(products[i].offer!='')
                      {
                      productHtml+='<p style="color:yellow;font-weight:bold;">Offer Price:'+products[i].offer+'</p>\
                      <p>Offer Start:'+products[i].offerStart+'</p>\
                      <p>Offer End:'+products[i].offerEnd+'</p>';
                    }
                      productHtml+='<p>Quantity:'+products[i].quantity+'</p>\
                      <button class="btnBuyProduct" data-quantityId="'+products[i].id+'">Buy</button></div>'

                      userHtmlProducts+=productHtml;      
      
  }
  userinsertProductsHere.innerHTML = userHtmlProducts;
  
        }
      }
      request.open("GET", "api-get-products.php",true);
      request.send();
    
      }
    

</script>

<script>

/********************************************************
              Buy product and decrease quantity
*********************************************************/

      document.addEventListener('click',function(e){
         if(e.target.className=="btnBuyProduct")
         {
           var oSound=new Audio('sms-alert.mp3');
           oSound.play();
           notifyMe();

            function notifyMe() {
        
        if (!("Notification" in window)) {
        alert("This browser does not support system notifications");
        }
        
        else if (Notification.permission === "granted") {
        
        var notification = new Notification("Hi thank you for buying !!!");
        }
        }
          console.log("Buy clicked");
          var sProductQuantityId=e.target.getAttribute('data-quantityId');
          console.log("sProductQuantityId:"+sProductQuantityId);
          var ajax=new XMLHttpRequest();
          ajax.onreadystatechange=function(){
            if(this.readyState==4 && this.status==200)
            {
              var sDataFromServer=this.responseText;
              //userviewProducts();
            }
          }

          ajax.open("get","api-product-quantity.php?id="+sProductQuantityId,true);
          ajax.send();
         }       

              });


      </script>

      <script>
  <!--**************For User Subscribe*****************-->

      var jMarkerPos = {}; // {lng: 12.555742263793945, lat: 55.71004435807561}

      btnSaveSubscriber.addEventListener("click",function(){

        console.log("button clicked");
        var jFormProperty = new FormData( frmSubscribe );
        // var jMarkerPos = {}; // {lng: 12.555742263793945, lat: 55.71004435807561}
        jFormProperty.append( "lng" , jMarkerPos.lng );  
        jFormProperty.append( "lat" , jMarkerPos.lat );  
     

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
           console.log( this.responseText );
          }
        };
        xhttp.open("POST", "api-get-subscribename.php", true);
        xhttp.send( jFormProperty );        
      });



      // JSONP
      function initMap() {

         var jLygten = {
            lat: 55.703935,
            lng: 12.537669
         };
         // on click, use this variable to set the lat lng

         var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 14,
            center: jLygten
         });

         var marker = new google.maps.Marker({
            map: map
         });
         
         map.addListener('click', function (e) {
            jMarkerPos.lng = e.latLng.lng();
            jMarkerPos.lat = e.latLng.lat();
            console.log(jMarkerPos); // INCREDIBLE
            marker.setPosition(jMarkerPos);
         });
      }
    </script>


    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMWzWNBTkSvZdDcCUZ878QGPN2VVqGsFg&callback=initMap">
    </script>


</body>
</html>