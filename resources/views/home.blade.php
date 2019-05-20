<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <title>Chill Films | Главная</title>
    <style>
    body{
    background-color: #FDE9DA;
    font-family: sans-serif;
    color:#3D3835;
    font-size: 15pt;
    text-decoration: none;
    font-weight: 100;
    margin:0;
    padding:0;
}
a{
    color: #3D3835;
    text-decoration: none;
}
a:visited{
    color: #3D3835;
}
a:active{
    color: #3D3835;
}
a:hover{
    color: #3D3835;
}
ul{
    list-style-type:none;
    margin:0;
    
}
li{
    display:inline-block;
    font-size: 20pt;
    transition: 0.4s;
    padding: 5px 50px;
    color:#FDE9DA;
    
}
li:hover{
    background-color: #E3D1C3;
    color:#3D3835;
}
header{
    background-color: #7D736B;
    position: sticky;
    top: 0;
    padding:5px 0;
    
}

h1{
    font-weight: 200;
    display: inline-block;
    margin:0;
    color:#FDE9DA;
    font-size: 23pt;
    margin-left: 16%;
    
    
}
h2{
    font-weight: 300;
    margin: 20px 10px;
}
.container{
    display:grid;
    grid-template-columns: 1fr 1fr 0.25fr 3fr 1fr ;
    grid-template-rows:  auto 200px ;
    grid-template-areas: 
    ". bar . main ." ;
    margin: 40px 0px;
}
#sidebar{
    grid-area: bar;
}
main{
    grid-area: main;    
}
aside{
    background-color: rgba(238, 193, 155, 0.15);
    margin: 30px 0;
    padding: 20px 10px;
    font-size: 16pt;
    transition: 0.4s;    
}
aside:hover{
    background-color: #E3D1C3;
    color:#3D3835;
}
article{
    background-color:  rgba(238, 193, 155, 0.15);
    margin: 30px 0;
    padding: 20px 20px; 
    font-size: 16pt;   
}
footer{
    text-align: center;
    background-color: #7D736B;
    padding:10px 0;
    position: sticky;
    bottom: 0;
}
.sticky{
    position: sticky;
    top: 135px;
}

.reg{
    padding: 20px 0;
    margin: 10px 0;
    display:none;
    
}
.log{
    padding: 20px 0;
    margin: 10px 0;
    display:none;
}
.btn1{
    display:none;
    transition:0.4s;
}
.btn2{
    display:none;
    transition:0.4s;
}
#style1{
    display:none;
}
#style2{
    display:none;
}
label:hover{
    background-color: #E3D1C3;
    color:#3D3835;
    padding:5px 5px;
}
label{
    transition: 0.3s;
    
}
input{
    padding: 5px 5px;
}
input{
    background: white;
    border:none;
    box-shadow: 0 0 10px rgba(0,0,0,0.3);
    margin: 10px 5px;
}
    </style>
</head>
<body>
        <header>
        <a href="/"><h1>Chill films</h1></a>
        
            
        
        </header>
        <div class="container">
            <div id="sidebar">
            
                <div class="sticky">
                    <a href="/films"><aside>Фильмы</aside></a>
                    <a href="/anime"><aside>Аниме</aside></a>
                    <a href="/serials"><aside>Сериалы</aside></a>

                <input type="radio" id="style1" name="switch" checked>
                <label for="style1">Регистрация </label>
                <input type="radio" id="style2" name="switch">
                <label for="style2"> Вход</label>
            
               <div class="reg">
                    <form action="">
                        <input type="text" placeholder="email">
                        <input type="password" placeholder="password" >
                        <br>
                        <input type="submit" value="Зарегестрироваться">
                    </form>
               </div>
               <br>
               <div class="log">
                    <form action="">
                    <input type="text" placeholder="login">
                        <input type="password" placeholder="password">
                        <br>
                        <input type="submit" value="Войти">
                        </form>
               </div>
               </div>
               
            </div>
            <main>
            <h2> Содержимое</h2>
                <article>
                 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae neque obcaecati rem odit deleniti fugit, impedit quaerat voluptate error, harum fuga eaque vel dolor ut porro incidunt veniam voluptatem fugiat! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum qui, temporibus consectetur maxime amet laboriosam! Quae ea maxime itaque sed minus ducimus, placeat perferendis praesentium ipsam in, impedit, voluptates dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium tempora praesentium neque itaque, dicta tempore doloribus, aliquid autem impedit accusamus laboriosam corrupti necessitatibus sit saepe reiciendis velit at exercitationem inventore! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere repellat cum omnis, odio, molestiae deserunt incidunt illo dolores ea laudantium numquam iste ratione harum, quas magni sunt sit qui! Obcaecati!
                </article>
                <article>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus tempore facere perspiciatis modi, dicta deleniti ullam! Praesentium sapiente illum hic, dignissimos, corporis pariatur optio dolor ullam cumque, dolorum possimus architecto? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo accusamus quasi maxime accusantium inventore totam illo cupiditate expedita commodi dolor natus incidunt earum sequi, eveniet quaerat obcaecati nemo aliquam quisquam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident consequatur quam aut cum adipisci! Accusamus laudantium, voluptatibus, cumque fuga magni quibusdam tempora ullam eius nemo ipsa unde inventore exercitationem eaque?
                </article>
                <article>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus tempore facere perspiciatis modi, dicta deleniti ullam! Praesentium sapiente illum hic, dignissimos, corporis pariatur optio dolor ullam cumque, dolorum possimus architecto? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo accusamus quasi maxime accusantium inventore totam illo cupiditate expedita commodi dolor natus incidunt earum sequi, eveniet quaerat obcaecati nemo aliquam quisquam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident consequatur quam aut cum adipisci! Accusamus laudantium, voluptatibus, cumque fuga magni quibusdam tempora ullam eius nemo ipsa unde inventore exercitationem eaque?
                </article>
                <article>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus vel consectetur cumque laborum, et soluta eveniet nemo quis. Dignissimos iure est nemo. Illum repellendus, nulla harum quas quod magnam dolorum?
                </article>
            </main>
        </div>
        <footer>
            Копирайт компания газпром интертемайнт при пордежке бенедикта кунилингуса
            Твой дед воевал а ты хуй сосал
        </footer>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
    $('#style1').click(function() {
        $('link[rel="stylesheet"]').attr({
            href: 'css/style1.css'
        });
    });

    $('#style2').click(function() {
        $('link[rel="stylesheet"]').attr({
            href: 'css/style2.css'
        });
    });
    
</script>
</body>
</html>