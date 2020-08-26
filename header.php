

        <!--   ///***********This Is header common to all pages with css***** -->
                    <!-- (this doesnt inclue bootsrap library) -->
<div class="head_main_div">
  <div class="inside_head_div">
    	<div class="Kaarwaan_logo"><img src="/img/logo.png"> </div>
    	   <!--this div will hide, screen below 768 with meadia query-->
    	
   </div> 	
</div>

<!--nav bar-->

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top kaarwaan_navbar">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=" #collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
 <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav" >
     <!-- Dropdown -->
    <li class="nav-item  Kaarwaan_dropdown">
      <a class="nav-link " style="" href="" id="navbardrop" data-toggle="dropdown">
          
      </a>
     
    </li>  
<li class="nav-item  Kaarwaan_dropdown" >
      <a class="nav-link " style="" href="" id="navbardrop" data-toggle="dropdown">
        <b>Home</b>
      </a>
     
    </li>    
    
   <li class="nav-item  Kaarwaan_dropdown">
      <a class="nav-link " style="" href="" id="navbardrop" data-toggle="dropdown">
        <b>About</b>
      </a>
     
    </li> 
<li class="nav-item  Kaarwaan_dropdown">
      <a class="nav-link " style="" href="" id="navbardrop" data-toggle="dropdown">
       <b> Login</b>
      </a>
     
    </li> 

    

  <li class="nav-item  Kaarwaan_dropdown">
      <a class="nav-link " style="" href="" id="navbardrop" data-toggle="dropdown">
       <b> Help</b>
      </a>
     
    </li> 

    

  </ul>
</div>  
</nav>



       


<style type="text/css">
  


html { 
      font-size: calc(.9em + 0.4vw) 
      
      }
html a 
  { 
    color: black;

  }
  html a:hover 
  { 
    color: darkgreen;
    
  }

  .head_main_div
  {    
      width: 100%; height: 100px;padding-top: 10px;
    /*   gradient code*/
   /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#f2f5f6+0,e3eaed+37,c8d7dc+100;Grey+3D+%234 */
/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#f9fcf7+0,f5f9f0+100;L+Green+3D */
background: #f9fcf7; /* Old browsers */
background: -moz-linear-gradient(left,  #f9fcf7 0%, #f5f9f0 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(left,  #f9fcf7 0%,#f5f9f0 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right,  #f9fcf7 0%,#f5f9f0 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f9fcf7', endColorstr='#f5f9f0',GradientType=1 ); /* IE6-9 */

  }


.inside_head_div
{ 
  width: 100%;
  height: 70px;
  
}

.Kaarwaan_logo
{ 
  float: left; 
  
}
.div_hide
{ 
  float: right; 
  margin-top: 15px; 
  width: 32%;
  margin-right: 10px;
  max-width: 32%;
  margin-top:65px;  

}
.div_hide h6
{
  font-size: 1.4vw;
}
.kaarwaan_navbar
{ 
  

  padding: 6px;

}

.navbar-nav li a:hover {
  background-color: #436C23;
}
.dropdown-menu a:hover
{
  

}
.dropdown:hover .dropdown-menu
{
  display: block;
}



 /*media query if screen size less than 576*/

  @media only screen and (max-width: 575px) { 
 

  }
  
  /*media query if screen size less than 768*/
  @media only screen and (max-width: 768px) {
  
  .div_hide {
    display: none;
  }
  .Kaarwaan_logo img
  { 
  width: 100%;
  height: 60px; 
  }  

  .head_main_div
  {
    width: 100%; height: 80px;padding-top: 6px;
  }
 
 
 
}

  /*media query if screen size greater than 768*/
  @media only screen  and (min-width : 768px) 
{
    
    

    
}


.kaarwaan_navbar
{
  padding-top: 0px;
  padding-bottom: 0px; 
  font-size: inherit;  


}


</style>