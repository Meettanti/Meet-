<!DOCTYPE html>
<html>
<head>
    <title>Internship Details</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; }
        .table-container { background: #fff; padding: 20px; margin: 50px auto; width: 600px; border-radius: 8px; box-shadow: 0 0 10px #ccc; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 12px; border: 1px solid #ddd; text-align: left; }
        th { background: #007bff; color: #fff; }
        tr:nth-child(even) { background: #f2f2f2; }
        .btn { margin-top: 20px; padding: 10px 20px; background: #007bff; color: #fff; border: none; border-radius: 4px; cursor: pointer; text-decoration: none; }
        .btn:hover { background: #0056b3; }
    </style>
</head>
<body>
    <div class="table-container">
        <h2>Internship Details</h2>
        <table>
            <tr>
                <th>Student Name</th>
                <th>Company</th>
                <th>Domain</th>
                <th>Duration</th>
                <th>Status</th>
            </tr>
            <tr>
                <td><?php echo htmlspecialchars($_POST['student']); ?></td>
                <td><?php echo htmlspecialchars($_POST['company']); ?></td>
                <td><?php echo htmlspecialchars($_POST['domain']); ?></td>
                <td><?php echo htmlspecialchars($_POST['duration']); ?></td>
                <td><?php echo htmlspecialchars($_POST['status']); ?></td>
            </tr>
        </table>
        <a href="first.html" class="btn">Add Another Internship</a>
    </div>
</body>
</html>