
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="page.php">Back</a>
    <form action="" method="post">

    </form>
    <?php
    $conn=mysqli_connect("localhost","root","","epms");
    if ($conn) {
        $sql="SELECT * FROM `salary`";
        $res=mysqli_query($conn,$sql);
    }
    ?>
    <table border="1" cellspacing="0px" cellpadding="10px">
        <tr>
            <th>ID</th>
            <th>GROSS SALARY</th>
            <th>TOTAL DEDUCATION</th>
            <th>NET SALARY</th>
            <th>MONTH</th>
            <th colspan="2">ACTION</th>
        </tr>
        <?php
        while ($row=mysqli_fetch_assoc($res)) {
            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['gross_salary'];?></td>
                <td><?php echo $row['total_deducation'];?></td>
                <td><?php echo $row['net_salary'];?></td>
                <td><?php echo $row['month'];?></td>
                <td><a href="update.php?id=<?php echo $row['id'];?>">update</a></td>
                <td><a href="delete.php?id=<?php echo $row['id'];?>">delete</a></td>
            </tr>
            <?php
        }
        ?>
        <tr></tr>
    </table>
</body>
<style>
        body {
            margin: 0;
            padding: 0;
            background:
            min-height: 100vh;
            font-family: 'Segoe UI', Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            color: #fff;
            margin-top: 40px;
            margin-bottom: 24px;
            letter-spacing: 1px;
        }
        table {
            border-collapse: collapse;
            margin: 40px 0 0 0;
            min-width: 700px;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 32px rgba(0,0,0,0.15);
        }
        th, td {
            padding: 16px 20px;
            text-align: center;
        }
        th {
            background: #0074D9;
            color: #fff;
            font-size: 1.1rem;
            letter-spacing: 1px;
        }
        tr:nth-child(even) {
            background: #f4f8fb;
        }
        tr:hover td {
            background: #e6f3ff;
            transition: background 0.2s;
        }
        td {
            color: #333;
            font-size: 1rem;
        }
        @media (max-width: 800px) {
            table {
                min-width: 90vw;
                font-size: 0.95rem;
            }
            th, td {
                padding: 10px 6px;
            }
        }
    </style>
</html>