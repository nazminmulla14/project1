{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Form</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      height: 100vh;
      background: linear-gradient(135deg, #667eea, #764ba2);
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      animation: backgroundShift 10s ease infinite;
    }

    @keyframes backgroundShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .login-box {
      background: rgba(255, 255, 255, 0.1);
      border-radius: 16px;
      backdrop-filter: blur(10px);
      box-shadow: 0 0 20px rgba(0,0,0,0.2);
      padding: 40px;
      width: 100%;
      max-width: 400px;
      animation: slideIn 1s ease forwards;
      transform: translateY(-50px);
      opacity: 0;
    }

    @keyframes slideIn {
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    .login-box h2 {
      text-align: center;
      color: #fff;
      margin-bottom: 30px;
      font-weight: 600;
    }

    .input-group {
      position: relative;
      margin-bottom: 25px;
    }

    .input-group input {
      width: 100%;
      padding: 12px 15px;
      border: none;
      border-radius: 8px;
      outline: none;
      background: rgba(255,255,255,0.2);
      color: #fff;
      font-size: 16px;
      transition: 0.3s ease;
    }

    .input-group input::placeholder {
      color: #ddd;
    }

    .input-group input:focus {
      background: rgba(255,255,255,0.3);
      box-shadow: 0 0 5px rgba(255,255,255,0.5);
    }

    .btn {
      width: 100%;
      padding: 12px;
      background: #fff;
      color: #333;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-weight: bold;
      transition: 0.3s ease;
    }

    .btn:hover {
      background: #eee;
    }

    .footer-text {
      text-align: center;
      margin-top: 20px;
      color: #ddd;
      font-size: 14px;
    }

    @media (max-width: 480px) {
      .login-box {
        margin: 0 20px;
      }
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Login</h2>
    <form>
      <div class="input-group">
        <input type="text" placeholder="Username" required>
      </div>
      <div class="input-group">
        <input type="password" placeholder="Password" required>
      </div>
      <button type="submit" class="btn">Login</button>
    </form>
    <div class="footer-text">
      Not registered? <a href="#" style="color: #fff; text-decoration: underline;">Create account</a>
    </div>
  </div>
</body>
</html> --}}



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Animated Login Form</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(-45deg, #667eea, #764ba2, #6b8dd6, #8e54e9);
      background-size: 400% 400%;
      animation: gradientBG 15s ease infinite;
      overflow: hidden;
    }

    @keyframes gradientBG {
      0% {
        background-position: 0% 50%;
      }
      50% {
        background-position: 100% 50%;
      }
      100% {
        background-position: 0% 50%;
      }
    }

    .login-box {
      background: rgba(255, 255, 255, 0.1);
      border-radius: 16px;
      backdrop-filter: blur(10px);
      box-shadow: 0 0 20px rgba(0,0,0,0.2);
      padding: 40px;
      width: 100%;
      max-width: 400px;
      animation: slideIn 1s ease forwards;
      transform: translateY(-50px);
      opacity: 0;
    }

    @keyframes slideIn {
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    .login-box h2 {
      text-align: center;
      color: #fff;
      margin-bottom: 30px;
      font-weight: 600;
    }

    .input-group {
      position: relative;
      margin-bottom: 25px;
    }

    .input-group input {
      width: 100%;
      padding: 12px 15px;
      border: none;
      border-radius: 8px;
      outline: none;
      background: rgba(255,255,255,0.2);
      color: #fff;
      font-size: 16px;
      transition: 0.3s ease;
    }

    .input-group input::placeholder {
      color: #ddd;
    }

    .input-group input:focus {
      background: rgba(255,255,255,0.3);
      box-shadow: 0 0 5px rgba(255,255,255,0.5);
    }

    .btn {
      width: 100%;
      padding: 12px;
      background: #fff;
      color: #333;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-weight: bold;
      transition: 0.3s ease;
    }

    .btn:hover {
      background: #eee;
    }

    .footer-text {
      text-align: center;
      margin-top: 20px;
      color: #ddd;
      font-size: 14px;
    }

    @media (max-width: 480px) {
      .login-box {
        margin: 0 20px;
      }
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Login</h2>
    <form>
      <div class="input-group">
        <input type="text" placeholder="Username" required>
      </div>
      <div class="input-group">
        <input type="password" placeholder="Password" required>
      </div>
      <button type="submit" class="btn">Login</button>
    </form>
    <div class="footer-text">
      Not registered? <a href="#" style="color: #fff; text-decoration: underline;">Create account</a>
    </div>
  </div>
</body>
</html>
