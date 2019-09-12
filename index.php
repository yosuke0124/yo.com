<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>yosuke.com</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>

<body>

<!-- 1.Home Start -->
<div id="home">

<div class="jumbotron jumbotron-extend">
<div class="container-fluid">

<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">yosuke.com</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber"
            aria-expanded="false" aria-label="ナビゲーションの切替">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="Navber">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#home">Home <span class="sr-only">(現位置)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#service">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#work">Work</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skill">Skill</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>

</div><!-- End container -->
</div><!-- End Jumbotron -->
</div><!-- End Home -->


<!-- Start About me -->
<div id="about">

<div class="col-md-12">
        <div class="section-title text-center">
            <h2>About Me</h2>
        </div>
    
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="my-img"><img src="img/me.jpg"></div>
            </div>
            
            <div class="col-md-8">
                <div class="my-text">
                    こんにちは、堺　陽祐（サカイ　ヨウスケ）です。<br>
                    HP製作や、LPページ、WORDPRESS製作を中心に行うWEBデザイナーです。<br>
                    デザインからコーディングまで対応しています。<br>
                    PCサイトからスマホサイトまで、レスポンシブ対応のWEB制作を行っています。<br><br>
    
                    お客様のニーズにあったホームページをお作り致します。<br>
                    お気軽にご相談ください。
                    <hr class="clients-hr">
                    <cite>&#8212; Yosuke Sakai , Web Designer & Enginner</cite>
                </div>
                <div class="my-link text-center padding">
                    <a class="btn btn-outline-dark btn-lg" href="#portfolio">作品集</a>
                    <a class="btn btn-outline-dark btn-lg" href="#contact">問い合わせ</a>
                </div>            
            </div>
        </div>
    </div>

</div><!-- End About me -->

<!-- Start Skill -->
<section id="service" class="module module-gray">
    <div class="container">

        <div class="module-header wow fadeInUp">
            <h2 class="module-title text-center">
                <span>My SKILL</span>
            </h2>
            <div class="module-line"></div>
        </div>

        <div class="row">

            <div class="col-sm-4">
                <div class="iconbox wow fadeInUp">
                    <div class="iconbox-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="iconbox-text">
                        <h3 class="iconbox-title">HTML&CSS</h3>
                        <div class="iconbox-desc">
                            HTML5/CSS3を用いたコーディングが可能です。また、タブレット・スマホでも表示が崩れないレスポンシブ対応も可能です。
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="iconbox wow fadeInUp" data-wow-delay=".2s">
                    <div class="iconbox-icon">
                        <i class="fab fa-bootstrap"></i>
                    </div>
                    <div class="iconbox-text">
                        <h3 class="iconbox-title">Bootstrap4</h3>
                        <div class="iconbox-desc">
                            BootstrapはTwitter社が開発したCSSの「フレームワーク」です。
                            CSS3のメディアクエリを使用し、レイアウトデザインを柔軟に調整できます。
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="iconbox wow fadeInUp" data-wow-delay=".2s">
                    <div class="iconbox-icon">
                        <i class="fab fa-js-square"></i>
                    </div>
                    <div class="iconbox-text">
                        <h3 class="iconbox-title">jQuery</h3>
                        <div class="iconbox-desc">
                            JavaScriptを扱いやすくしたライブラリです。Webサイトに動きをつけることができます。簡単な動作でしたらお任せください。
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="iconbox wow fadeInUp" data-wow-delay=".4s">
                    <div class="iconbox-icon">
                        <i class="fab fa-wordpress"></i>
                    </div>
                    <div class="iconbox-text">
                        <h3 class="iconbox-title">Wordpress</h3>
                        <div class="iconbox-desc">
                            CMS「Wordpress」を利用したWebサイトの構築が可能です。テンプレートテーマを用いたサイト制作。オリジナルテーマ作成。
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="iconbox wow fadeInUp" data-wow-delay=".2s">
                    <div class="iconbox-icon">
                        <i class="fab fa-php"></i>
                    </div>
                    <div class="iconbox-text">
                        <h3 class="iconbox-title">PHP/MySQL</h3>
                        <div class="iconbox-desc">
                            PHPを使ってデータベースと連携したWebサイトを作成することが可能です。
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="iconbox wow fadeInUp" data-wow-delay=".4s">
                    <div class="iconbox-icon">
                        <i class="fab fa-adobe"></i>
                    </div>
                    <div class="iconbox-text">
                        <h3 class="iconbox-title">Photoshop</h3>
                        <div class="iconbox-desc">
                            Photoshopを使ったデザイン制作が可能です。写真の加工、UIパーツ、ロゴ・バナー制作、Webサイトデザインなど。PNG/JPEGなどの書き出しも可能です。
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</section> <!-- End Services  -->

<!-- Start  -->

<div id="portfolio">
    <div class="col-12">

        <div class="row text-center">
        <div class="col-4">

        </div>
        
        
        </div>

    </div>    
</div>

<div id="contact">
    <div class="section-title">
        <h2>CONTACT</h2>
    </div>
    <div class="contact-text">
        <p class="text">制作・ご相談、お気軽にご連絡ください。</p> 
        <p>お問い合わせは、お問い合わせフォームより入力をお願いします。</p> 
    <div class="contact-form">
    <form action="confirm.php" method="post" name="form" onsubmit="return validate()">
            <p>お問い合わせ内容をご入力の上、「確認画面へ」ボタンをクリックしてください。</p>
            <div>
                <div>
                    <label>お名前<span>必須</span></label>
                    <input type="text" name="name" placeholder="例）山田太郎" value="">
                </div>
                <div>
                    <label>ふりがな<span>必須</span></label>
                    <input type="text" name="furigana" placeholder="例）やまだたろう" value="">
                </div>
                <div>
                    <label>メールアドレス<span>必須</span></label>
                    <input type="text" name="email" placeholder="例）guest@example.com" value="">
                </div>
                <div>
                    <label>電話番号<span>必須</span></label>
                    <input type="text" name="tel" placeholder="例）0000000000" value="">
                </div>
                <div>
                    <label>性別<span>必須</span></label>
                    <input type="radio" name="sex" value="男性" checked> 男性
                    <input type="radio" name="sex" value="女性"> 女性
                </div>
                <div>
                    <label>お問い合わせ項目<span>必須</span></label>
                    <select name="item">
                        <option value="">お問い合わせ項目を選択してください</option>
                        <option value="ご質問・お問い合わせ">ご質問・お問い合わせ</option>
                        <option value="ご意見・ご感想">ご意見・ご感想</option>
                    </select>
                </div>
                <div>
                    <label>お問い合わせ内容<span>必須</span></label>
                    <textarea name="content" rows="5" placeholder="お問合せ内容を入力"></textarea>
                </div>
            </div>
            <button type="submit">確認画面へ</button>
        </form>
    </div>
</div>


<div id="footer">
    <p class="copyright text-center">Copyright - Yosuke Sakai, 2019 All Rights Reserved.</p>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>