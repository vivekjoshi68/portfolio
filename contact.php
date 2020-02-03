 <!--<form method="post" action="ty.php">
     <div class="col-md-12">
      <div class="row">
       <div class="col-md-4">
        <span>Name</span>
          <div class="selected-box">
		  <input id="name" type="text" placeholder="Enter your name *" pattern="[a-zA-Z ]+" maxlength="30" class="form-control placeholder" name="name" required />
            
          </div>
        </div>
        <div class="col-md-4">
        <span>Email Id</span>
          <div class="selected-box">
           <input id="name" type="text" placeholder="Enter your email *" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control placeholder" name="email " required />
         </div>
        </div>
        <div class="col-md-4">
        <span>Phone Number</span>
         <div class="selected-box">
           <input id="name" type="text" placeholder="Enter your phone number *" pattern="[789][0-9]{9}" maxlength="10" class="form-control placeholder" name="number" required />
          </div>
        </div>
        <div class="col-md-4">
        <span>Select Car</span>
        <div class="selected-box">
          <select name="car"  class=""  required />
            <option value="" selected>Select Car Model</option>
            <option value="Innova Crysta">Innova Crysta</option>
            <option value="Fortuner">Fortuner</option>
            <option value="Yaris">Yaris</option>
            <option value="Etios Liva">Etios Liva</option>
            <option value="Innova Touring Sport">Innova Touring Sport</option>
			<option value="Platinum Etios">Platinum Etios</option>
            <option value="Etios Cross">Etios Cross</option>
            <option value="Corolla Altis">Corolla Altis</option>
            <option value="Camry Hybrid<">Camry Hybrid</option>
            <option value="Prius">Prius</option>
			<option value="Land Cruiser Prado">Land Cruiser Prado</option>
            <option value="Land Cruiser">Land Cruiser</option>
           </select>
          </div>
        </div>
        <div class="col-md-4">
       <span>Message</span>
         <div class="selected-box" >
            <input id="name" type="text" placeholder="Enter your message here *" class="form-control placeholder" name="message">
         </div>
        </div>
		<div class="col-md-4">
     <div class="price-slide">
        <div class="price">
        <span></span>
          <br>
          <button id="submit" name="submit" type="submit" value="Send" class="button red"> Submit </button> 
        </div>
       </div>
    </div>
      </div>
     </form>-->
	 <form method="post" action="ty.php">
  <label>Name </label>
  <input name="name" placeholder="Type Here"><br />
  </br>
  <label>Email </label>
  <input name="email" placeholder="Type Here">
  <br /></br>
  <label style="display:block;">I need some information regarding:</label>
  <textarea name="message" placeholder="Type Here"></textarea>
  <br />
  <label>*What is 2+2? (Anti-spam)</label>
  <input name="human" placeholder="Type Here">
  <br />
  <input id="submit" name="submit" type="submit" value="Submit" style="height:30px;">
</form>