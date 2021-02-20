<?php $template = __DIR__ . '/templates/default.php'; ?>

<section class="bg-white border-b pt-16 pb-8">
    <div class="container max-w-5xl mx-auto m-8">
        <div class="text-black m-2">
            <article class="article">
                <header>
                    <?php if ($article->coverImage):?>
                        <div style="padding-top: 42%; background-size: cover; background-color:#e3dac6;background-image:url(<?php echo $article->coverImage; ?>)"></div>
                    <?php endif; ?>

                    <h1 class="text-3xl font-bold mt-9 mb-6"><?php echo $article->title; ?></h1>

                </header>
                <div class="entry-content prose" style="max-width: max-content">
                    <?php echo (new ParsedownExtra)->parse($article->content); ?>

                    <a href="https://twitter.com/intent/tweet?text=<?php echo $article->title?>&url=http%3A%2F%2Fbarryosull.com%2Fblog%2F<?php echo $article->slug?>&via=barryosull" class="twitter-share-button" data-size="large" data-show-count="false">Tweet</a>

                </div>
            </article>
        </div>
    </div>
</section>

<script src="/themes/kiss/js/prism.js"></script>
