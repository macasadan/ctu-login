<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>login form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="scroll-down"> SCROLL DOWN
  <div class="svg-container">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
      <path d="M16 3C8.832031 3 3 8.832031 3 16s5.832031 13 13 13 13-5.832031 13-13S23.167969 3 16 3zm0 2c6.085938 0 11 4.914063 11 11 0 6.085938-4.914062 11-11 11-6.085937 0-11-4.914062-11-11C5 9.914063 9.914063 5 16 5zm-1 4v10.28125l-4-4-1.40625 1.4375L16 23.125l6.40625-6.40625L21 15.28125l-4 4V9z"/> 
    </svg>
  </div>
</div>

<div class="container"></div>
<div class="modal">
  <div class="modal-container">
    <div class="modal-left">
      <h1 class="modal-title">CTU Gym Login System</h1>
      <p class="modal-desc">Get fit with ease using CTU Gym Login System.</p>
      <div class="input-block">
        <label for="email" class="input-label">Email</label>
        <input type="email" name="email" id="email" placeholder="Email">
      </div>
      <div class="input-block">
        <label for="password" class="input-label">Password</label>
        <input type="password" name="password" id="password" placeholder="Password">
      </div>
      <div class="modal-buttons">
        <a href="" class="">Forgot your password?</a>
        <button class="input-button">Login</button>
      </div>
      <p class="sign-up">Don't have an account? <a href="#">Sign up now</a></p>
    </div>
    <div class="modal-right">
      <img src="https://media.gq-magazine.co.uk/photos/5d139fc7d7a701ec7abbb0be/1:1/w_1366%2cc_limit/third-space-02-gq-24sep18_b.jpg" alt="">
    </div>
    <button class="icon-button close-button">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
    <path d="M 25 3 C 12.86158 3 3 12.86158 3 25 C 3 37.13842 12.86158 47 25 47 C 37.13842 47 47 37.13842 47 25 C 47 12.86158 37.13842 3 25 3 z M 25 5 C 36.05754 
             5 45 13.94246 45 25 C 45 36.05754 36.05754 45 25 45 C 13.94246 45 5 36.05754 5 25 C 5 13.94246 13.94246 5 25 5 z M 16.990234 15.990234 A 
              1.0001 1.0001 0 0 0 16.292969 17.707031 L 23.585938 25 L 16.292969 32.292969 A 1.0001 1.0001 0 1 0 17.707031 33.707031 L 25 26.414062 L
              32.292969 33.707031 A 1.0001 1.0001 0 1 0 33.707031 32.292969 L 26.414062 25 L 33.707031 17.707031 A 1.0001 1.0001 0 0 0 32.980469 15.990234 A 
              1.0001 1.0001 0 0 0 32.292969 16.292969 L 25 23.585938 L 17.707031 16.292969 A 1.0001 1.0001 0 0 0 16.990234 15.990234 z"></path>
</svg>
      </button>
  </div>
  <button class="modal-button">Click here to login</button>
</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
