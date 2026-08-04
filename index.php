<?php $root_path = "./"; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MinimalNote - シンプルなテキストメディア</title>
    <meta name="description" content="思考を整理し、言葉を届ける。シンプルでクリーンなテキストベースのメディアプラットフォーム。">

    <meta property="og:title" content="MinimalNote - シンプルなテキストメディア">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://example.com/">
    <meta property="og:image" content="https://example.com/assets/images/ogp.jpg">
    <meta property="og:description" content="思考を整理し、言葉を届ける。シンプルでクリーンなテキストベースのメディアプラットフォーム。">

<?php include($root_path . 'include/css.php'); ?>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Blog",
      "name": "MinimalNote",
      "url": "https://example.com/",
      "description": "思考を整理し、言葉を届ける。シンプルでクリーンなテキストベースのメディアプラットフォーム。"
    }
    </script>
</head>
<body>

<?php include($root_path . 'include/header.php'); ?>

    <main class="container">
        <div class="main-layout">

            <div class="timeline">
                <div class="tabs">
                    <span class="tabs__item tabs__item--active" data-target="recommend">おすすめ</span>
                    <span class="tabs__item" data-target="trend">トレンド</span>
                    <span class="tabs__item" data-target="new">新着</span>
                </div>

                <div class="article-list">
                    <article class="article-card">
                        <p class="article-card__date">2026年6月7日</p>
                        <h2 class="article-card__title">文章を書くときに意識している、たった3つのシンプルな原則</h2>
                        <p class="article-card__excerpt">頭の中にあるアイデアを、いかにスムーズに読み手に伝えるか。余計な装飾を削ぎ落とし、言葉の力だけで勝負するための文章術についてまとめました。</p>
                        <div class="article-card__footer">
                            <a href="/category01/" class="article-card__tag">カテゴリー01</a>
                        </div>
                    </article>

                    <article class="article-card">
                        <p class="article-card__date">2026年6月6日</p>
                        <h2 class="article-card__title">リモートワーク3年目でたどり着いた、最高のデスク環境とルーティン</h2>
                        <p class="article-card__excerpt">毎日の作業効率を最大化するために試行錯誤した結果、ガジェットよりも「余白と照明」が大切だという結論に至りました。</p>
                        <div class="article-card__footer">
                            <a href="/category02/" class="article-card__tag">カテゴリー02</a>
                        </div>
                    </article>
                </div>
            </div>

<?php include($root_path . 'include/sidebar.php'); ?>

        </div>
    </main>

<?php include($root_path . 'include/footer.php'); ?>

    <script src="script.js"></script>

</body>
</html>