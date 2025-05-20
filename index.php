<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <div class="sidebar">
        <ul>
        
          
            <li><a href="#"><i class="fas fa-users"></i> Employee</a></li>
            <li><a href="#"><i class="fas fa-money-bill-wave"></i> Salary</a></li>
            <li><a href="#"><i class="fas fa-building"></i> Department</a></li>
              <li><a href="login.php"><i class="fas fa-building"></i> login</a></li>
            <li><a href="signup.php"><i class="fas fa-building"></i> signup</a></li>
           
            
        </ul>
    </div>

</body>
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: #f4f4f4;
    }
    .sidebar {
        width: 220px;
        height: 100vh;
        background:#333;
        position: fixed;
        top: 0;
        left: 0;
        padding-top: 40px;
        box-shadow: 2px 0 8px rgba(0,0,0,0.08);
    }
    .sidebar ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .sidebar li {
        margin-bottom: 10px;
    }
    .sidebar a {
        display: flex;
        align-items: center;
        color: #fff;
        text-decoration: none;
        padding: 14px 24px;
        font-size: 18px;
        border-radius: 4px 0 0 4px;
        transition: background 0.2s;
    }
    .sidebar a:hover {
        background: #005fa3;
    }
    .sidebar i {
        margin-right: 12px;
        font-size: 20px;
    }

</style>
