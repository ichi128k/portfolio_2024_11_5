
<?php get_header(); ?>
    <main>
        <div class="hero">
            <img class="mainvisual pc-only" src="<?php echo esc_url(get_theme_file_uri('img/mv.png'));?>">
            <img class="mainvisual mob-only" src="<?php echo esc_url(get_theme_file_uri('img/mv-mob.png'));?>">
            <img class="hero-left-logo" src="<?php echo esc_url(get_theme_file_uri('img/top_mv_img01.png'));?>">
        </div>
        <div class="container">
            <section id="about">
                <h1>きいろについて</h1>
                <p class="caption">about Kiiro</p>
                <div class="origins">
                    <div>
                        <h2 class="orange-colored">“きいろ”の由来</h2>
                        <p>
                            〇〇〇〇〇〇〇〇〇〇<br>
                            〇〇〇〇〇〇〇〇〇〇〇〇<br>
                            〇〇〇〇〇〇〇〇〇〇
                        </p>
                    </div>
                    <div>
                        <h2 class="pink-colored">“ロゴ”の由来</h2>
                        <p>
                            〇〇〇〇〇〇〇〇〇〇〇〇<br>
                            〇〇〇〇〇〇〇〇〇〇<br>
                            〇〇〇〇〇〇〇〇〇〇〇〇
                        </p>
                    </div>
                </div>
                <a class="button">きいろについて<span class="right-arrow"></span></a>
            </section>
            <section id="work">
                <h1>事業内容</h1>
                <p class="caption">Service</p>
                <div class="work-details">
                    <div>
                        <h2>
                            児童発達支援事業<br>
                            〇〇〇〇〇　〇〇町教室<br>
                            〇〇〇〇〇　〇〇町教室
                        </h2>
                        <p>
                            勉強についていけない、お友だちとうまく遊べない、<br>
                            集中して物事に取り組めないなど、<br>
                            発達・成長に心配のあるお子さまや、障がいを持ったお子さまを<br>
                            対象とした、児童発達支援サービスです。
                        </p>
                    </div>
                    <img src="<?php echo esc_url(get_theme_file_uri('img/service_img01.png'));?>">
                </div>
                <a class="button">事業内容<span class="right-arrow"></span></a>
            </section>
            <section id="topics">
                <div class="logoset-topics">
                    <img src="<?php echo esc_url(get_theme_file_uri("img/logo.png"));?>">
                    <h1>トピックス</h1>
                    <p class="caption">Topics</p>
                </div>           
                <a href="#" class="topics-company">
                    <div class="topics-bg"></div>
                    <h2>会社概要</h2>
                    <p>Company</p>
                </a>
                <a href="#" class="topics-recruit">
                    <div class="topics-bg"></div>
                    <h2>採用情報</h2>
                    <p>Recruit</p>
                </a>
            </section>
            <section id="contact">
                <h1>お問い合わせ</h1>
                <p class="caption">Contact</p>
                <p class="description-contact">お問い合わせやサービスのお申し込みはこちらから<br>ご相談やご質問などもお気軽にお問い合わせください</p>
                <a href="<?php echo esc_url(home_url("/contact/"));?>" class="button">お問い合わせはこちら<span class="right-arrow"></span></a>
            </section>
        </div>
    </main>
<?php get_footer(); ?>  