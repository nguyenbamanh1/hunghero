<footer>
    <hr>
    <div class="container" id="lienhe">
        <div class="row">
            <div class="col-6">
                <h3>Mô tả</h3>
                <p>

                </p>
            </div>
            <div class="col-3">
                <h3>Liên hệ</h3>
                <ul>
                    <li>36 Phạm Vănb Đồng - Hà Nội</li>
                    <li>Điện thoại: 555-555-5555</li>
                    <li>Email: info@example.com</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>&copy; 2023 web tải mob keylog của Hùng Hẻo.</p>
            </div>
        </div>
    </div>
</footer>

<div class="modal" tabindex="-1" role="dialog" id="login-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login Form</h5>
                <a href="#" style="text-decoration: none;" class="close" data-dismiss="modal" aria-label="Close">&times;</a>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Upload file -->
<div class="modal" id="uploadFile" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tải lên mod mới</h5>
                <a href="#" style="text-decoration: none;" class="close" data-dismiss="modal" aria-label="Close">&times;</a>
            </div>
            <div class="modal-body">
                <form method="post" action="database/upload.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="mod-name">Tên mod:</label>
                        <input type="text" class="form-control" id="mod-name" placeholder="Nhập tên mod" name="tenMod">
                    </div>
                    <div class="form-group">
                        <label for="mod-desc">Mô tả:</label>
                        <textarea class="form-control" id="mod-desc" rows="3" name="mota"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="mod-tutorial">Hướng dẫn:</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="mod-tutorial" name="mod-tutorial">
                            <label class="custom-file-label" for="mod-tutorial">Chọn file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mod-image">Hình ảnh:</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="mod-image" name="mod-image">
                            <label class="custom-file-label" for="mod-image">Chọn file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mod-file">File zip:</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="mod-file" name="download-file">
                            <label class="custom-file-label" for="mod-file">Chọn file</label>
                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary">Tải lên</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

</div>
</div>
</div>

</body>

</html>