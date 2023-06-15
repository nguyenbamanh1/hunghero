<header class="bg-light">
    <div class="container">
        <h1>Tên sản phẩm</h1>
    </div>
</header>

<main class="py-5">
    <div class="container">
        <section>
            <h2>Hướng dẫn sử dụng</h2>
            <hr>
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $query = $conn->query("SELECT * FROM modfiles where `id` = '" . $id . "' limit 1");
                $row = $query ->fetch_assoc();
                if ($query->num_rows > 0 && $row) {
                    if ($row["huongdan"] != null && $row["huongdan"] != "") {
                        $file = '../assets/tutorial/' + $row["huongdan"];
                        $handle = fopen($file, 'r'); // mở tập tin ở chế độ chỉ đọc

                        if ($handle) {
                            while (($line = fgets($handle)) !== false) { // đọc từng dòng cho đến hết file
                                if (str_starts_with($line, '*')) {
                                    echo '</div>
                                    <div>
                                    <p class="font-weight-bold">' . $line . '</p>';
                                } else if(str_ends_with($line, ".png") || str_ends_with($line, ".jpg")){
                                    '<img class="d-block w-100" src="'.$line.'" alt="First slide" width = "400px" height="300px">';
                                }
                                else {
                                    echo '<p class="font-weight-normal">' . $line . '</p>';
                                }
                            }
                            echo '</div>';
                            fclose($handle); // đóng tập tin
                        }
                    }
                }
            }
            ?>

        </section>

        <section>
            <h2>Nút tải xuống</h2>
            <p>Để tải xuống sản phẩm, vui lòng nhấn vào nút bên dưới:</p>
            <?php
                if($row != null){
                    echo '<a href="./assets/downloadfile/'.$row['downloadLink'].'" class="btn btn-primary">Tải xuống</a>';
                }
            ?>
        </section>
    </div>
</main>