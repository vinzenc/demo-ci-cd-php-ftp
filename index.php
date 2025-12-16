<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản Lý Sinh Viên - CI/CD Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2 class="text-center text-primary">Danh Sách Sinh Viên (Demo CI/CD)</h2>
    
    <div class="card p-4 my-4 bg-light">
        <form action="add.php" method="POST" class="row g-3">
            <div class="col-md-5">
                <input type="text" name="fullname" class="form-control" placeholder="Họ và tên" required>
            </div>
            <div class="col-md-5">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-success w-100">Thêm Mới</button>
            </div>
        </form>
    </div>

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Họ Tên</th>
                <th>Email</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM students ORDER BY id DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["id"] . "</td>
                            <td>" . $row["fullname"] . "</td>
                            <td>" . $row["email"] . "</td>
                            <td>
                                <a href='delete.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm'>Xóa</a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='4' class='text-center'>Chưa có dữ liệu</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>