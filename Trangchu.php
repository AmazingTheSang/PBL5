<!DOCTYPE html>
<html>

<head>
    <title>Web</title>
    <meta charset="UTF-8">
    <link rel="icon" href="685681.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="PBL5/Trangchu.css" type="text/css">

    <body>
        <style>
* {
    font-family: 'Poppins', sans-serif;
}
html {
    background-color: #06121e;
    font-size: 16px;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    min-width: 300px;
    overflow-x: hidden;
    overflow-y: scroll;
    text-rendering: optimizeLegibility;
    text-size-adjust: 100%;
}


#nav {
    background-color: #06121e;
}

#nav ul {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: left;
    box-shadow: 0 0 10px gray;
    margin: 0;
}



#nav ul .navbar-end {
    justify-content: flex-end;
    margin-left: auto;
    align-items: stretch;
    display: flex;
    justify-content: right;
    padding : 10px;
}

#nav ul li {
    padding: 7px;
}

#nav ul li a {
    text-decoration: none;
    color: black;
}

#nav ul li a:hover {
    color: blue;
}

#nav1 .bang{
    padding:50px;
    
}

#nav2 {
    display: flex;
    justify-content: center;
}

#nav2 .logo {
    max-width: 300px;
    height: 500px;
    padding: 30px;
}

#nav3 {
    display: flex;
    justify-content: center;
}

#nav3 .logo {
    max-width: 300px;
    height: 500px;
    padding: 30px;
}

</style>


        <section id="nav">
            <div>

                <ul>
                    <li><a class="navbar-item" href="/">
                        <img width="50" height="50" src="Anh/logo.jpg" alt="Doctruyen logo" class="layout_logo__319hZ">
                    </li>
                    <li><a href="#search">Tìm kiếm</a></li>
                    <li><a href="#truyenhot">Truyện hot</a></li>
                    <li><a href="#truyenle">Truyện lẻ</a></li>
                    <li><a href="#truyenbo">Truyện bộ</a></li>
                    <li><a href="#truyenmoi">Truyện mới</a></li>
                    <div class="navbar-end">
                        <a class="" rel="nofollow" href="/login">Đăng kí</a>
                        <a>/</a>
                        <a class="" rel="nofollow" href="/login">Đăng nhập</a>
                    </div>
                </ul>
                        
            </div>
        </section>
        <section id="nav1">
            <center>
            <div class="timkiem">
            <table class="bang">
                <tr>
                    <th>Thể loại:</th>
                    <th>Quốc gia:</th>
                    <th>Năm:</th>
                    <th>Sắp xếp:</th>
                </tr>
                <tr>
                    <td>
                    <select name="orderby" class="form-control" id="vnkings_cat">
                    <option value="price-desc">--Tất cả--</option>
                    <option value="ngontinh">Ngôn tình</option>
                    <option value="truyenteen">Truyện teen</option>
                    <option value="tienhiep">Tiên hiệp</option>
                    <option value="kiemhiep">Kiếm hiệp</option>
                    <option value="xuyenkhong">Xuyên không</option>
                    <option value="trinhtham">Trinh thám</option>
                    </select>
                    </td>

                    <td>
                    <select name="orderby" class="form-control" id="vnkings_cat">
                    <option value="price-desc">--Tất cả--</option>
                    <option value="vn">Việt Nam</option>
                    <option value="nb">Nhật Bản</option>
                    <option value="tq">Trung Quốc</option>
                    <option value="hq">Hàn Quốc</option>
                    <option value="my">Mỹ</option>
                    <option value="tl">Thái Lan</option>
                    </select>
                    </td>

                    <td>
                    <select name="orderby" class="form-control" id="vnkings_cat">
                    <option value="price-desc">--Tất cả--</option>
                    <option value="price-desc">Trước 2018</option>
                    <option value="menu_order">2018</option>
                    <option value="popularity">2019</option>
                    <option value="rating">2020</option>
                    <option value="date">2021</option>
                    <option value="price">2022</option>
                    </select>
                    </td>

                    <td>
                    <select name="orderby" class="form-control" id="vnkings_cat">
                    <option value="price-desc">--Tất cả--</option>
                    <option value="menu_order">Truyện dịch</option>
                    <option value="popularity">Truyện mới đăng</option>
                    <option value="rating">Truyện xem nhiều</option>
                    <option value="date">Truyện yêu thích</option>
                    <option value="price">Truyện full</option>
                    <option value="price-desc">Mới cập nhật</option>
                    </select>
                    </td>
                </tr>
            </table>
            </div>
            <center>
        </section>
        <section id="nav2">
            <center>
            <div class="container">
                <h1>Truyện đề cử</h1>
                <div class="list-truyen">
                    <img class="logo" src="/PBL5/Anh/1.jpg">
                    <img class="logo" src="/PBL5/Anh/2.jpg">
                    <img class="logo" src="/PBL5/Anh/3.jpg">
                    <img class="logo" src="/PBL5/Anh/4.jpg">
                    <img class="logo" src="/PBL5/Anh/5.jpg">
                    <img class="logo" src="/PBL5/Anh/6.jpg">
                    <img class="logo" src="/PBL5/Anh/7.jpg">
                    <img class="logo" src="/PBL5/Anh/8.jpg">
                    <img class="logo" src="/PBL5/Anh/9.jpg">
                    <img class="logo" src="/PBL5/Anh/10.jpg">
                    
                </div>
            </div>
            </center>
        </section>
        <section id="nav3">
            <center>
            <div class="container">
                <h1>Truyện mới cập nhật</h1>
                <div class="list-truyen">
                    <img class="logo" src="/PBL5/Anh/11.jpg">
                    <img class="logo" src="/PBL5/Anh/12.jpg">
                    <img class="logo" src="/PBL5/Anh/13.jpg">
                    <img class="logo" src="/PBL5/Anh/14.jpg">
                    <img class="logo" src="/PBL5/Anh/15.jpg">
                    
                </div>
            </div>
            </center>
        </section>
    </body>
</head>

</html>