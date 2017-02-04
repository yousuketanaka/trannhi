<?php get_header(); ?>

    <main>
        <section id="topslide">
        　<div class="container">
            <div class="row">
                <div class="col-md-4 slidetitle">
                    <h2>いつまでも残る<br>私たちの思い出！</h2>
                </div>
                <div class="col-md-8"></div>
            </div>
        </div>
        </section>
        <section class="secondInfo">
            <div class="container">
                <h2>また戻れる場所</h2>
                <div class="row">
                    <div class="col-md-5 first_description">
                        <h3>私たちの思い出を残すため</h3>
                        <p>私たちは知り合ってから今まで、たくさんの思い出を重ねてきました。進む道は違っても、いつも戻れる場所として、自分の原点を確認するための場所としてこのサイトを作りました。生は、困難なときもありますが、いつも前を向く原点としてこのサイトがありたいと考えています。</p>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5 first_description">
                        <h3>私たちのつながりを残すため</h3>
                        <p>状況、立場、住む場所が変わっても、いつもつながりは保っておきたいと考えています。そして、そのつながりは、離れているからこそ、強くしたいと考えています。利害とは関係なく、いつも思いやりと助けないにあふれた場所を目指します。</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="dousoukai">
            <div class="container">
                <h2>同窓会</h2>
                <div class="row">
                    <div class="col-md-5 second_description">
                        <h3>私たちの足跡</h3>
                        <p>これまでの同窓会の記録です。</p>
                        <p class="button"><a href="<?php echo home_url(); ?>/post">View Detail</a></p>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5 dousouimage">
                        <img src="<?php bloginfo('template_url' ); ?>/img/dousoukai.jpg" />
                    </div>
                </div>
            </div>
        </section>

        <section class="gallery">
            <div class="container">
                <h2>思い出写真</h2>
                <div class="row">
                    <div class="col-md-5 galleryImage">
                        <img src="<?php bloginfo('template_url' ); ?>/img/gallery.jpg" />
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5 third_description">
                       <h3>たくさんの思い出たち</h3>
                        <p>私たちの思い出を集めた写真館です。</p>
                        <p class="button"><a href="<?php echo home_url(); ?>/gallery">View Detail</a></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="association">
            <div class="container">
                <h2>交流</h2>
                <div class="row">
                    <div class="col-md-5 fourth_description">
                        <h3>みんなの広場</h3>
                        <p>いろいろな情報交換をしましょう。将来のこと、家族のこと、子どものこと、たくさん話しましょう。</p>
                        <p class="button"><a href="<?php echo home_url(); ?>/association">View Detail</a></p>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5 associationImage">
                        <img src="<?php bloginfo('template_url' ); ?>/img/dousoukai.jpg" />
                    </div>
                </div>
            </div>
        </section>

        <section class="bookIntro">
            <div class="container">
                <h2>本紹介</h2>
                <div class="row">
                    <div class="col-md-5 bookImage">
                        <img src="<?php bloginfo('template_url' ); ?>/img/gallery.jpg" />
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5 fifth_description">
                       <h3>紹介したい本</h3>
                        <p>ぜひ、みんなに読んでもらいたい本です。。</p>
                        <p class="button"><a href="<?php echo home_url(); ?>/book">View Detail</a></p>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>