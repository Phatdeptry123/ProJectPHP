<div class="container mt-3">
    <div class="row">
        <div class="col-md-4">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                    Thông tin tài khoản
                </a>
                <?php
                if (isset($_SESSION['check'])) {
                    extract($_SESSION['check']);
                    if ($role == 1) {
                        echo '<a href="admin/index.php" class="list-group-item list-group-item-action">Truy cập trang Admin</a>';
                    }
                }
                ?>
                <a href="#" class="list-group-item list-group-item-action">Privacy Settings</a>
            </div>
        </div>
        <div class="col-md-8">
            <h1>Thông tin tài khoản</h1>
            <?php
            if (isset($_SESSION['check'])) {
                extract($_SESSION['check']); ?>
                <p>Name:
                    <?= $ten_user ?>
                </p>
                <p>Tên đăng nhập:
                    <?= $account ?>
                </p>
            <?php } ?>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"
    integrity="sha512-nJVDN98kS1+gq3JlTzTUM/Ws/4g4j4xs1hQF/nZhRZLOwWbNJg7Qkz2MFgRtBop/FJcOv7qE3OlyKkl7lZwWpA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>