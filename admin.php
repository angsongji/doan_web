<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='shortcut icon' href='img/iconweb2.ico' />
    <link rel="stylesheet" href="css/admin.css" />
    <?php 
        if(isset($_GET['mode']) && $_GET['mode']=="night")
            echo '<link rel="stylesheet" href="css/admin_night.css" />';
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>MEME</title>
</head>
<body>
    <div class="wrapadmin">
        <nav class="menuadmin">
            <?php require 'pages/menuadmin.php' ?>
        </nav>
        <div class="contentadmin" >
            <div class="headeradmin">
                <?php require 'pages/headeradmin.php' ?>
            </div>
            <div class="name_model" >Tìm kiếm</div>
                <form class="searchadmin" action="">
                    <?php require 'pages/searchadmin.php' ?>
                </form>
                <div class="name_model" >Tổng cộng: <span id="quantity_movies">13</span> phim</div> 
                <div id="content">  
                    <?php //require 'pages/usersadmin.php' ?><!--Trang ql nguoidung-->
                    <?php //require 'pages/moviesadmin.php' ?><!--Trang ql movie-->
                    <?php //require 'pages/lichchieuphimadmin.php' ?><!--Trang ql lichchieuphim-->
                    <div id="lichchieuphim_wrap">
                        <div id="lichchieuphim_header">
                            <span class="lichchieuphim_header_btn btn_left"><i class="fa-solid fa-chevron-left"></i></span>
                            <span class="lichchieuphim_header_btn btn_right"><i class="fa-solid fa-chevron-right"></i></span>
                         <nav id="lichchieuphim_daytime"> 
                            <ul>
                                <li id="lichchieuphim_selected">
                                    <span class="lichchieuphim_day">6</span>
                                    <span class="lichchieuphim_mota">Hôm nay</span>
                                </li>
                                <li >
                                    <span class="lichchieuphim_day">6</span>
                                    <span class="lichchieuphim_mota">Hôm nay</span>
                                </li>
                                <li >
                                    <span class="lichchieuphim_day">6</span>
                                    <span class="lichchieuphim_mota">Hôm nay</span>
                                </li>
                                <li >
                                    <span class="lichchieuphim_day">6</span>
                                    <span class="lichchieuphim_mota">Hôm nay</span>
                                </li>
                            </ul>
                         </nav>
                        </div>
                        <div id="lichchieuphim_content">
                            <div class="lichchieuphim_phim">
                                <img src="img/33735630744753025-jWYfucBwXG3ePh97bM5ReT1q65X.jpg">
                                <div class="lichchieuphim_right">
                                    <div class="lichchieuphim_mota_phim">
                                        <span class="age_movie">13+</span>
                                        <span class="name_movie"> Ten</span>
                                        <span class="type_movie">The loai</span>
                                        
                                    </div>
                                    <div class="lichchieuphim_lichchieu_wrap">
                                        <div class="lichchieuphim_lichchieu">
                                            <span class="time_start">9:00</span>
                                            <span>~<span>
                                            <span class="time_end">14:30</span>
                                        </div>
                                        <div class="lichchieuphim_lichchieu">
                                            <span class="time_start">9:00</span>
                                            <span>~<span>
                                            <span class="time_end">14:30</span>
                                        </div>
                                        <div class="lichchieuphim_lichchieu add_suatchieu">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                </div>
                                <span class="edit_suatchieu"><i class="fa-solid fa-pen-to-square fa-fw"></i></span>
                            </div>
                            <div class="lichchieuphim_phim">
                                <img src="img/33735630744753025-jWYfucBwXG3ePh97bM5ReT1q65X.jpg">
                                <div class="lichchieuphim_right">
                                    <div class="lichchieuphim_mota_phim">
                                        <span class="age_movie">13+</span>
                                        <span class="name_movie"> Ten</span>
                                        <span class="type_movie">The loai</span>
                                        
                                    </div>
                                    <div class="lichchieuphim_lichchieu_wrap">
                                        <div class="lichchieuphim_lichchieu">
                                            <span class="time_start">9:00</span>
                                            <span>~<span>
                                            <span class="time_end">14:30</span>
                                        </div>
                                        <div class="lichchieuphim_lichchieu">
                                            <span class="time_start">9:00</span>
                                            <span>~<span>
                                            <span class="time_end">14:30</span>
                                        </div>
                                        <div class="lichchieuphim_lichchieu add_suatchieu">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                </div>
                                <span class="edit_suatchieu"><i class="fa-solid fa-pen-to-square fa-fw"></i></span>
                            </div>
                            <!--<div id="lichchieuphim_null"><span>Chưa có lịch chiếu vào ngày này</span></div>-->
                            <div class="lichchieuphim_phim add_newmovie" >
                                <i class="fa-solid fa-plus"></i>
                            </div>
                        </div>
                    </div>
                    <?php //require 'pages/dichvuadmin.php' ?><!--Trang ql dichvu-->
                    
                </div>
                <nav id="list_page">
                    <?php require 'pages/list_page_admin.php' ?>
                </nav>
        </div>
    </div>
    <script src="js/admin.js"></script>
</body>
</html>