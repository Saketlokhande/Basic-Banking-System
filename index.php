<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking System</title>

    <link rel="stylesheet" href="index.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="bank-container">
        <div class="content">
            <!--logo-->
            <div class="logo">
                <img src="https://images.unsplash.com/photo-1501167786227-4cba60f6d58f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80">
                <h3><span>Ether</span> bank</h3>
            </div>
            <!--navbar-->
            <nav class="navbar">
                <ul>
                    <li>
                        <span class="icon active"><i class="fa fa-home" aria-hidden="true"></i></span>
                        <span class="title" style="margin-left: -10rem;">Home</span>
                    </li>
                    <li>
                        <span class = "icon"><a href="createuser.php" style="color:black; text-decoration:none;"><i class="fa fa-user-o" aria-hidden="true"></i></a></span>
                        <span class="title">Create user</span>
                    </li>
                    <li>
                        <span class = "icon"><a href="transfermoney.php" style="color:black; text-decoration:none;"><i class="fa fa-university" aria-hidden="true"></i></a></span>
                        <span class="title" style="margin-left: -14.6rem;">Transfer money</span>
                    </li>
                    <li>
                        <span class = "icon"><a href="transactionhis.php" style="color:black; text-decoration:none;"><i class="fa fa-exchange" aria-hidden="true"></i></a></span>
                        <span class="title">History</span>
                    </li>
                </ul>
            </nav>
            <!--Slogan-->
            <div class="slogan">
                <p><span>ETHER</span> BANK offers personal banking, corporate banking & internet banking services</p>
            </div>
            <div class="main">
                <a href="createuser.php"><div class="user">
                    <img src="https://icons-for-free.com/iconfiles/png/512/person+user+icon-1320166085409390336.png" alt="">
                    <p>Create user</p>
                </div>
                </a>

                <a href="transfermoney.php"><div class="user">
                    <img src="https://cdn1.iconfinder.com/data/icons/banking-147/100/money_arrow_conv-512.png" alt="">
                    <p>Transfer Money</p>
                </div>
                </a>

                <a href="transactionhis.php"><div class="user">
                    <img src="https://static.thenounproject.com/png/2429493-200.png" alt="">
                    <p>Transaction History</p>
                </div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>