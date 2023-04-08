<?php  require_once "./header.php" ?>
<h1 class="myhead3">Contact Us</h1>
<div class="row">
    <div class="col-sm-4">         
    <form class="mt-4">
    <input class="form-control" placeholder="Your Name" type="text" name="uname" id="uname"/><br>
    <input class="form-control" placeholder="EMail" type="text" name="email" id="email"/><br>
    <textarea class="form-control" placeholder="msg"  name="msg" id="msg" rows="6" ></textarea><br>
    <button class="btn btn-primary" type="submit" onclick="clickAlert()" value="Click-2-Alert">Submit</button>
    <button class="btn btn-danger" type="reset">Reset</button>
    </form>

<script>
  function clickAlert() {
    alert("Submitted");
}
</script>
      
    </div>
    <div class="col-sm-8">  
        <div class="embed-responsive embed-responsive-16by9">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.9441873896712!2d77.72334691484949!3d12.975421618305106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae11f5a938c31d%3A0x5cb3a142c34d3ce0!2sAMD+India+Private+Limited!5e0!3m2!1sen!2sin!4v1558360786914!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>      
    </div>
</div>
<?php  require_once "./footer.php" ?>