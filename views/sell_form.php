<!DOCTYPE html>
<html>
<head>
    <title>Post Ad</title>

<style type="text/css">
    html {
  height: 100%;
}

body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(#141e30, #243b55);
}

.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 800px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}


.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
  
}
div{
  color: #fff;
}
option{
  background-color: #141e30;
  color: #fff;
}
.login-box .user-box input[type=radio] {
  width: 5%;
  
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  margin-right: 50px;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}

.login-box .user-box select {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;

  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}

.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}

.login-box form button {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #03e9f4;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  background: rgba(0,0,0,.5);
  border: 0px;
  margin-top: 40px;
  letter-spacing: 4px
}

.login-box button:hover {
  background: #03e9f4;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
}

.login-box button span {
  position: absolute;
  display: block;
}

.login-box button span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03e9f4);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box button span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #03e9f4);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box button span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #03e9f4);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #03e9f4);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}

</style>

</head>
<body>

<div class="login-box">
  <h2>Post Ad</h2>
  <form action="sell.php" method="POST" enctype="multipart/form-data">
    
    <div class="user-box">
        <label>Category</label>
      </div>
      <br>
      <div class="user-box">
        <select name="category" required="required" placeholder="Category">
                    <option value="electrician">Electrician</option>
                    <option value="plumber">Plumber</option>
                    
                    <option value="carpenter">Carpenter</option>
                    <option value="cleaner">Cleaner</option>
                    <option value="painter">Painter</option>
                    <option value="mason">Mason</option>
                    <option value="welder">Welder</option>
                    <option value="others">Others</option>
                 </select>
</div>
        <div class="user-box">
        <input required="required" type="text" name="title"/><label>Title</label>
</div>
        <div class="user-box">
        <input required="required" type="text" name="description"/><label>Description</label>
</div>
       
       <div class="user-box">
        <input required="required" type="text" name="contact"/><label>Contact</label>
</div>
        
        <div class="user-box">
          <label>Set Basic Price</label>
          </div>
         <br>
          <div class="user-box"> 
        Yes<input type="radio" value="sell" name="donate" id="male" checked>
       
        
        No<input type="radio" value="donate" name="donate" id="female">
      </div>

       <div class="user-box">
        <input required="required" type="text" name="price"/><label>Basic Pay</label>
</div>
 <div class="user-box">
    <label>Upload Image</label>
</div><br>
<div class="user-box">
        <input  type="file" name="image" accept="image/*"/>
</div>
    
    
    <button type="submit">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </button>
  </form>
  <br>

</div>

</body>
</html>


