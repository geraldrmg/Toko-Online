<?php 
    include "./login/header.php";
?>
<div class="containe">
    <div class="slide">
        <?php 
        include "koneksi.php";
        $qry_produk=mysqli_query($conn,"select * from produk");
        while($dt_produk=mysqli_fetch_array($qry_produk)){
            ?>
           
            <div class="item" style="background-image: url('./assets/foto_produk/<?=$dt_produk['foto_produk']?>');" >
            <div class="overlay"></div>
           
                <div class="content">
                    
                <!-- <h2 style="position: absolute; top: -210px; left: -80px; color: #fff; background: rgba(6, 31, 6, 0.75); padding: 8px 15px; border-radius: 10px;">Daftar Produk</h2> -->
                    <div class="name"><?=$dt_produk['nama_produk']?></div>
                    <div class="des"><?=substr($dt_produk['deskripsi'], 0,20)?></div>
                    <a href="./Produk/beli_produk.php?id_produk=<?=$dt_produk['id_produk']?>" class="btn btn-primary">Beli</a>
                </div>
        
            </div>
            <?php
        }
        ?>
    </div>
    <div class="button">
        <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
        <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
    </div>
</div>
<?php 
    include "./login/footer.php";
?>

<style>
   *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    background: #eaeaea;
    overflow: hidden;
}



.containe .slide .item{
    width: 200px;
    height: 300px;
    position: absolute;
    top: 50%;
    transform: translate(0, -50%);
    border-radius: 20px;
    box-shadow: 0 30px 50px #000;
    background-position: 50% 50%;
    background-size: cover;
    display: inline-block;
    transition: 0.5s;
    
}

.slide .item:nth-child(1),
.slide .item:nth-child(2){
    top: 0;
    left: 0;
    transform: translate(0, 0);
    border-radius: 20px;
    width: 100%;
    height: 100%;
}


.slide .item:nth-child(3){
    left: 50%;
}
.slide .item:nth-child(4){
    left: calc(50% + 220px);
}
.slide .item:nth-child(5){
    left: calc(50% + 440px);
}

/* here n = 0, 1, 2, 3,... */
.slide .item:nth-child(n + 6){
    left: calc(50% + 660px);
    opacity: 0;
}

.overlay{
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    position: absolute;
    z-index: 0;
}



.item .content{
    position: absolute;
    top: 50%;
    left: 100px;
    width: 300px;
    text-align: left;
    color: #eee;
    transform: translate(0, -50%);
    font-family: system-ui;
    display: none;
    background: rgba(36, 36, 36, 0.758);
    padding: 25px 35px;
    border-radius: 15px;
}


.slide .item:nth-child(2) .content{
    display: block;
}


.content .name{
    font-size: 40px;
    text-transform: uppercase;
    font-weight: bold;
    opacity: 0;
    animation: animate 1s ease-in-out 1 forwards;
}

.content .des{
    margin-top: 10px;
    margin-bottom: 20px;
    opacity: 0;
    animation: animate 1s ease-in-out 0.3s 1 forwards;
}

.content button{
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    opacity: 0;
    animation: animate 1s ease-in-out 0.6s 1 forwards;
}


@keyframes animate {
    from{
        opacity: 0;
        transform: translate(0, 100px);
        filter: blur(33px);
    }

    to{
        opacity: 1;
        transform: translate(0);
        filter: blur(0);
    }
}



.button{
    width: 100%;
    text-align: center;
    position: absolute;
    bottom: 20px;
}

.button button{
    width: 40px;
    height: 35px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    margin: 0 5px;
    border: 1px solid #000;
    transition: 0.3s;
}

.button button:hover{
    background: #ababab;
    color: #fff;
}
</style>

<script>
    let next = document.querySelector('.next')
    let prev = document.querySelector('.prev')

    next.addEventListener('click', function(){
        let items = document.querySelectorAll('.item')
        document.querySelector('.slide').appendChild(items[0])
    })

    prev.addEventListener('click', function(){
        let items = document.querySelectorAll('.item')
        document.querySelector('.slide').prepend(items[items.length - 1]) // here the length of items = 6
    })
</script>

