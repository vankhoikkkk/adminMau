<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="mainAdmin.css">
</head>

<style>
    .admin-content-right-product-add input,select{
    width: 200px;
    height: 30px;
    display: block;
    margin: 20px 0;
    }

    .admin-content-right-product-add textarea{
    width: 500px;
    height: 230px;
    display: block;
    margin: 20px 0;
    }

    .admin-content-right-product-add button {
    display: block;
    margin-top: 10px;
    height: 30px;
    width: 100px;
    cursor: pointer;
    border: none;
    background-color: brown;
    color: white;
    transition: all 0.1s ease;
}

.admin-content-right-product-add button:hover {
    background-color: transparent;
    border: 1px solid brown;
    color: brown;
}
</style>
<body>
    <header>
        <H1>TOP</H1>
    </header>

    <section class="admin-content">
        <div class="admin-content-left">
            <ul>
                <li><a href="">Danh mục</a>
                    <ul>
                        <li><a href="">Thêm danh mục</a></li>
                        <li><a href="">Danh sách danh mục</a></li>
                    </ul>
                </li>
                <li><a href="">Loại sản phẩm</a>
                    <ul>
                        <li><a href="">Thêm loại sản phẩm</a></li>
                        <li><a href="">Danh sách loại sản phẩm</a></li>
                    </ul>
                </li>
                <li><a href="">Sản phẩm</a>
                    <ul>
                        <li><a href="">Thêm sản phẩm</a></li>
                        <li><a href="">Danh sách sản phẩm</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="admin-content-right">
            <div class="admin-content-right-product-add">
                <h1>Thêm Sản Phẩm</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="text" placeholder="Nhập tên tiêu đề sản phẩm">
                    <select name="" id="">
                        <option value="#">--Chọn danh mục--</option>
                    </select>
                    <select name="" id="">
                        <option value="#">--Chọn loại sản phẩm--</option>
                    </select>
                    <input type="text" placeholder="Nhập giá sản phẩm">
                    <input type="text" placeholder="Nhập giá khuyến mãi">
                    <textarea name="" id="" placeholder="Nhập mô tả sản phẩm"></textarea>
                    <h3>Nhập ảnh đại diện</h3>
                    <input type="file" placeholder="Nhập ảnh đại diện">
                    <h3>Nhập ảnh phụ</h3>
                    <input multiple type="file" placeholder="Nhập ảnh phụ">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>