<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Signup Form</title>
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
      background: linear-gradient(-45deg, #ff6a00, #ee0979, #ff6a00, #ff9472);
      background-size: 400% 400%;
      animation: gradientShift 12s ease infinite;
      overflow: hidden;
    }

    @keyframes gradientShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .signup-box {
      background: rgba(255, 255, 255, 0.1);
      border-radius: 20px;
      backdrop-filter: blur(12px);
      padding: 40px;
      width: 100%;
      max-width: 450px;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25);
      animation: fadeIn 1s ease forwards;
      opacity: 0;
      transform: translateY(20px);
    }

    @keyframes fadeIn {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .signup-box h2 {
      text-align: center;
      color: #fff;
      margin-bottom: 30px;
      font-weight: 600;
      letter-spacing: 1px;
    }

    .form-group {
      position: relative;
      margin-bottom: 25px;
    }

    .form-group input {
      width: 100%;
      padding: 14px 12px 14px 12px;
      border: none;
      border-radius: 10px;
      background: rgba(255, 255, 255, 0.2);
      color: #fff;
      font-size: 16px;
      outline: none;
      transition: all 0.3s ease;
    }

    .form-group label {
      position: absolute;
      top: 50%;
      left: 12px;
      transform: translateY(-50%);
      color: #ddd;
      font-size: 14px;
      pointer-events: none;
      transition: 0.3s ease;
      background: transparent;
      padding: 0 5px;
    }

    .form-group input:focus + label,
    .form-group input:not(:placeholder-shown) + label {
      top: -8px;
      left: 10px;
      font-size: 12px;
      color: #fff;
      background: rgba(255, 255, 255, 0.1);
      padding: 0 5px;
      border-radius: 4px;
    }

    .btn {
      width: 100%;
      padding: 14px;
      border: none;
      border-radius: 10px;
      background: #fff;
      color: #333;
      font-weight: bold;
      cursor: pointer;
      font-size: 16px;
      transition: 0.3s ease;
    }

    .btn:hover {
      background: #f0f0f0;
    }

    .footer-text {
      text-align: center;
      margin-top: 20px;
      color: #ddd;
      font-size: 14px;
    }

    .footer-text a {
      color: #fff;
      text-decoration: underline;
    }

    @media (max-width: 480px) {
      .signup-box {
        margin: 0 20px;
        padding: 30px 25px;
      }
    }
  </style>
</head>
<body>
  <div class="signup-box">
    <h2>Create Account</h2>
    <form>
      <div class="form-group">
        <input type="text" id="name" placeholder=" " required>
        <label for="name">Full Name</label>
      </div>
      <div class="form-group">
        <input type="email" id="email" placeholder=" " required>
        <label for="email">Email</label>
      </div>
      <div class="form-group">
        <input type="text" id="username" placeholder=" " required>
        <label for="username">Username</label>
      </div>
      <div class="form-group">
        <input type="password" id="password" placeholder=" " required>
        <label for="password">Password</label>
      </div>
      <button type="submit" class="btn">Sign Up</button>
    </form>
    <div class="footer-text">
      Already have an account? <a href="#">Login here</a>
    </div>
  </div>
</body>
</html>
