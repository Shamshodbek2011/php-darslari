<?php
$foydalanuvchilar = [
    ["ism"=> "Shamshodbek",'familiya'=>"Sadullayev",'Kasbi'=>"Dasturchi",'bahosi'=>"7.0"],
    ["ism"=> "Muslim",'familiya'=>"Vapoyev",'Kasbi'=>"Doktor",'bahosi'=>"7.5"],
    ["ism"=> "Ramazon",'familiya'=>"Ramazonev",'Kasbi'=>"menejer",'bahosi'=>"8.0"],
   
    
] 
?>
<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chiroyli Jadval</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: #f3f6fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            max-width: 800px;
            background: #fff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        thead {
            background: linear-gradient(90deg, #007bff, #00c6ff);
            color: white;
        }

        th,
        td {
            padding: 15px 20px;
            text-align: left;
        }

        th {
            text-transform: uppercase;
            letter-spacing: 0.05em;
            font-size: 14px;
        }

        tbody tr {
            border-bottom: 1px solid #eee;
            transition: background 0.3s ease;
        }

        tbody tr:hover {
            background: #f0f8ff;
        }

        td {
            color: #333;
            font-size: 15px;
        }

        /* Responsivlik */
        @media (max-width: 600px) {
            table {
                width: 95%;
            }

            th,
            td {
                padding: 10px;
                font-size: 13px;
            }
        }
    </style>
</head>

<body>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Ism</th>
                <th>Familiya</th>
                <th>Kasb</th>
                <th>Bahosi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($foydalanuvchilar as $key=> $foydalanuvchi): ?>
            <tr>
                <td><?= ++$key?>1</td>
                <td><?= $foydalanuvchi['ism']?></td>
                <td><?= $foydalanuvchi['familiya']?></td>
                <td><?= $foydalanuvchi['Kasbi']?></td>
                <td><?= $foydalanuvchi['bahosi']?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <?php 
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        ?>
    </table>

</body>

</html>