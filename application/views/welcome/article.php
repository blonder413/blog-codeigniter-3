<?php
//setlocale(LC_ALL, 'spa_ES');
//setlocale(LC_TIME, 'spa_ES');
//setlocale(LC_TIME, 'spl_ES');
//setlocale(LC_TIME, 'Spanish_Colombia');
setlocale(LC_TIME, 'es_CO.UTF-8');

// $date = date("l, M j \d\e Y G:i", strtotime($article->created_at))
// http://php.net/manual/es/function.strftime.php
$date = strftime("%c", strtotime($article->created_at));
//$date = strftime("%A %e %B de %Y %R", mktime(strtotime($article->created_at)));

// $dateTime = new DateTime();
// $dateTime->setTimeZone(new DateTimeZone('America/Bogota'));
// $date = $dateTime->format('l, M j \d\e Y G:i');

?>

<section class="posts col-md-9">
    <h1><?= $article->title; ?></h1>
    <p><small>
        <span class="glyphicon glyphicon-user">&nbsp;</span>

        <a href="https://plus.google.com/u/0/+JonathanMoralesSalazar" target="_blank" rel="author">
            <?= ucwords($article->created_by); ?>
        </a>
        &nbsp;&nbsp;|&nbsp;&nbsp;
        <span class="glyphicon glyphicon-calendar">&nbsp;</span><?= $date ?>&nbsp;&nbsp;|&nbsp;&nbsp;
        <span class="glyphicon glyphicon-folder-close">&nbsp;</span><?= $article->category_id; ?>&nbsp;&nbsp;
    </small></p>

    <?php
    $updated_at = strftime(date("Y-m-d H:i:s"), strtotime($article->updated_at));

    $diference = date_diff(
                    date_create(date("Y-m-d H:i:s")) ,
                    date_create($updated_at)
                );

    if ($diference->y >= 2):
    ?>
    <p class="alert alert-danger">
      <span class="glyphicon glyphicon-warning-sign"></span>
      Este artículo fue actualizado hace <?= $diference->y ?> años o más. Es probable que el contenido sea obsoleto
      o que la implementación sea diferente.
    </p>
    <?php endif; ?>

    <?= $article->detail; ?>

    <?php if (!empty($article->video)): ?>
    <div class="video-responsive">
        <?= $article->video; ?>
    </div>
    <?php endif; ?>


    <div class="col-md-12">
        <div class="col-md-3">
            <?php if (!empty($article->download)): ?>
            <a href="<?= $article->download ?>" class="btn btn-primary">Descargar</a>
            <?php endif; ?>
        </div>
        <div class="col-md-9">
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_donations">
                <input type="hidden" name="business" value="blonder413@gmail.com">
                <input type="hidden" name="lc" value="ES">
                <input type="hidden" name="item_name" value="blonder413">
                <input type="hidden" name="no_note" value="0">
                <input type="hidden" name="currency_code" value="USD">
                <input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
                <input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_donateCC_LG.gif" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
                <img alt="" border="0" src="https://www.paypalobjects.com/es_ES/i/scr/pixel.gif" width="1" height="1">
            </form>
        </div>
    </div>

    <div class="col-md-12">
        <!--
        <a class="twitter-share-button"
                data-counturl="https://dev.twitter.com/web/tweet-button" data-count="horizontal">
              Tweet
            </a>
        <div class="fb-like"></div>
        -->
        <?php /*echo \ijackua\sharelinks\ShareLinks::widget(
            [
                'viewName' => '/site/shareLinks.php'   //custom view file for you links appearance
            ]
        );*/ ?>

        Compartir:
        <!-- Go to www.addthis.com/dashboard to generate a new set of sharing buttons -->

        <a href="https://api.addthis.com/oexchange/0.8/forward/facebook/offer?url=http%3A%2F%2Fwww.blonder413.com%2Farticulo%2F<?= $article->seo_slug; ?>&pubid=ra-55d90fcb1d66e601&title=<?= $article->title; ?>&nbsp;|&nbsp;Blonder413" target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/facebook.png" border="0" alt="Facebook"/></a>
        <a href="https://api.addthis.com/oexchange/0.8/forward/twitter/offer?url=http%3A%2F%2Fwww.blonder413.com%2Farticulo%2F<?= $article->seo_slug; ?>&pubid=ra-55d90fcb1d66e601&title=<?= $article->title; ?>&nbsp;|&nbsp;Blonder413" target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/twitter.png" border="0" alt="Twitter"/></a>
        <a href="https://api.addthis.com/oexchange/0.8/forward/google_plusone_share/offer?url=http%3A%2F%2Fwww.blonder413.com%2Farticulo%2F<?= $article->seo_slug; ?>&pubid=ra-55d90fcb1d66e601&title=<?= $article->title; ?>&nbsp;|&nbsp;Blonder413" target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/google_plusone_share.png" border="0" alt="Google+"/></a>
        <a href="https://api.addthis.com/oexchange/0.8/forward/linkedin/offer?url=http%3A%2F%2Fwww.blonder413.com%2Farticulo%2F<?= $article->seo_slug; ?>&pubid=ra-55d90fcb1d66e601&title=<?= $article->title; ?>&nbsp;|&nbsp;Blonder413" target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/linkedin.png" border="0" alt="LinkedIn"/></a>
        <a href="https://api.addthis.com/oexchange/0.8/forward/delicious/offer?url=http%3A%2F%2Fwww.blonder413.com%2Farticulo%2F<?= $article->seo_slug; ?>&pubid=ra-55d90fcb1d66e601&title=<?= $article->title; ?>&nbsp;|&nbsp;Blonder413" target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/delicious.png" border="0" alt="Delicious"/></a>
        <a href="https://www.addthis.com/bookmark.php?source=tbx32nj-1.0&v=300&url=http%3A%2F%2Fwww.blonder413.com%2Farticulo%2F<?= $article->seo_slug; ?>&pubid=ra-55d90fcb1d66e601&title=<?= $article->title; ?>&nbsp;|&nbsp;Blonder413" target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/addthis.png" border="0" alt="Addthis"/></a>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <p></p>
            <!-- Google Adsense -->
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- bannerresponsive -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-2208995637216263"
                 data-ad-slot="1780166723"
                 data-ad-format="auto"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <!-- Google Adsense -->
        </div>
    </div>

    <div class="comment-post">
        <h2>Comentar</h2>


        <a name="comments"></a>

        <h2>Comentarios</h2>

        
    </div>

</section>
