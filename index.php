  <?php get_header(); ?>
  <!-- 上記が追記するコード -->


  <!-- About Us -->
  <section id="about">
    <div class="container">
      <div class="row text-center" id="heading">
        <div class="col-md-6 col-md-offset-3 " id="heading-text">
          <h3>About Us</h3>
          <p>Manabi Laboとは</p>
          <hr class="full">
          <br />
        </div>
      </div> <!-- row -->
      <div class="col-md-8 col-md-offset-2">
        <p class="text-center">発想する力を高め、みらいを切りひらいていく人材が育つ場と、ネットワーク形成の場。</p>
        <p>世の中はめまぐるしく変化し、これまで当たり前だった価値観や考え方が、必ずしも正解ではなくなりつつある時代に私たちは、生きています。</p>
        <p>これまでの常識が通用しないなかでは、当たり前を疑いながら、物事を考える力、そして、知識と経験を磨くことに加え、様々なものを組み合わせ発想する力が、ますます重要になってきます。</p>
        <p>Manabi Laboでは、こどもを主体にしながら、親子での学び（感性教育）をつうじて、こどもの直感力を鍛え、発想力豊かな人材が育つ仕組みづくりを目指します。</p>
        <p>ここで学んだ人材が、将来自分のみらいを自ら切りひらくとともに、新しい価値を世の中に生み出せる人材が育つ社会づくりを目指します。</p>
      </div>
    </div> <!-- container -->
  </section> <!-- about us -->


  <!-- Our service -->
  <section id="our_service">
    <div class="container">
      <div class="row text-center" id="heading">
        <div class="col-md-6 col-md-offset-3" id="heading-text">
          <h3>Our SERVICE</h3>
          <p>サービスの特徴</p>
          <hr class="full">
          <br />
        </div>
      </div>
      <div class="main_content">
        <div class="row">
          <div class="col-sm-4 service">
            <div class="about-service">
              <h3 class="text-center">直感を磨く</h3>
              <p class="text-center">
                特定地域をフィールドに、歴史・文化・芸術・農業など、その地域の資産を観察し、整理しながら、みらいを描くプロジェクト学習です。机上で考えるのではなく、五感を刺激することで、直感を磨いていきます。
              </p>
            </div>
          </div>

          <div class="col-sm-4 service">
            <div class="about-service">
              <h3 class="text-center">経験を通じた学び</h3>
              <p class="text-center">
                「教える」教育は行っていません。参加者は地域での経験の中で起きたプロセスを振り返りながら、学びや気づきを抽出し、発想する力を養っていくことを目指します。
                またファシリテーターの働きかけで、参加者の学びや気づきがより深まっていくサポートを行います。
              </p>
            </div>
          </div> <!-- col-sm-4 -->

          <div class="col-sm-4 service">
            <div class="about-service">
              <h3 class="text-center">学びの場をデザイン</h3>
              <p class="text-center">
                Manabi Laboでは、クライアント企業の組織の現状をヒアリングしながら、最適なプログラムをご提案・ご提供します。弊社は、クライアント企業とともに、未来を描いていくパートナーとして、プログラムをコーディネートしていきます。
              </p>
            </div>
          </div> <!-- col-sm-4 -->

        </div> <!-- row -->

      </div> <!-- main_content -->
    </div> <!-- container -->
  </section> <!-- our_service -->

  <!-- Field -->
  <section id="field">
    <div class="container">
      <div class="row text-center" id="heading">
        <div class="bg-image col-md-12">
          <div class="col-md-6 col-md-offset-3" id="heading-text">
            <h3>Field Of Learning</h3>
            <p>学びの場</p>
            <hr class="full">
            <br />
          </div>
        </div>
      </div>
      <div class="row main_content">
        <div class="col-md-6 col-md-offset-3">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <img class="img-circle img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/img/fukuoka.jpg">
            </div>
            <div class="col-md-12">
              <p class="field-name text-center">
                福岡県福岡市 樋井川流域
              </p>

            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <img class="img-circle img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/img/fukushima.jpg">
            </div>
            <div class="col-md-12">
              <p class="field-name text-center">
                福島県
              </p>
            </div>
          </div>
        </div>
      </div>

      <div id="fb-root">
        <script>
          (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.2';
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));
        </script>
        <div>
          <?php
          if (has_post_thumbnail()) {
            echo the_post_thumbnail(array(512, 512));
          } else {
            echo '<img src="', get_site_icon_url(), '">';
          }
          ?>
          <div class="fb-like" data-href="<?php echo get_permalink() ?>" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="false"></div>
        </div>
      </div>
    </div>
  </section> <!-- field -->



  <!-- contact -->
  <section id="contact">
    <div class="container">
      <div class="row text-center" id="heading">
        <div class="bg-image">
          <div class="col-lg-6 col-lg-offset-3 share-text wow animated zoomInDown" id="heading-text">
            <h3 class="text-center">Contact us</h3>
            <p>お問合せ</p>
            <hr class="full">
            <br />
          </div>
        </div>
      </div>
      <div class="row text-center main_content">
        <div class="col-md-6 col-md-offset-3 text-center">
          <form method="post" action="#">
            <div class="form">
              <div class="input-group margin-bottom-sm">
                <span class="input-group-addon">
                  <i class="fa fa-user fa-fw"></i>
                </span>
                <input class="form-control" type="text" placeholder="名前" required>
              </div>
              <div class="input-group margin-bottom-sm">
                <span class="input-group-addon">
                  <i class="fa fa-envelope-o fa-fw"></i>
                </span>
                <input class="form-control" type="text" placeholder="メールアドレス" required>
              </div>
            </div>
            <div class="input-group margin-bottom-sm">
              <span class="input-group-addon">
                <i class="fa fa-comment-o fa-fw"></i>
              </span>
              <textarea class="form-control" rows="6" type="text" placeholder="お問い合わせ内容" required></textarea>
            </div>
            <input class="btn btn-primary send" type="submit" value="送信">
          </form>
        </div>
      </div>

    </div>
  </section> <!-- contacts -->





  <!-- 下記が追記するコード -->
  <?php get_footer(); ?>