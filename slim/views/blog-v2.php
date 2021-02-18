<?php $template = __DIR__ . '/templates/default.php'; ?>

<section class="bg-white border-b pt-16 pb-8">
    <div class="container max-w-5xl mx-auto m-8">
        <div class="text-black m-2">
            <h1 class="text-2xl font-bold mb-3">Blog</h1>
            <h2 class="text-xl mb-6">I have many interests in software development and I enjoy writing about then. As such my blog doesn't cover just one topic.</h2>

            <?php if (empty($articles)): ?>
                <p>Sorry - no articles found.</p>
            <?php else: ?>

                <div style="float:left; width:25%" class="categories">
                    <div class="text-xl font-bold mb-6">Topics</div>
                    <?php foreach ($categories as $category): ?>
                        <a href="<?php echo "/blog/category/".$category; ?>" class="btn"><?php echo $category; ?></a><br>
                    <?php endforeach; ?>
                </div>

                <div style="float:left; width:75%">
                    <?php foreach ($articles as $article): ?>
                        <article class="mb-6 pb-3 border-b">
                            <header>
                                <h2 class="text-xl font-bold mb-3"><a href="<?php echo $article->url; ?>"><?php echo $article->title; ?></a></h2>
                            </header>
                            <blockquote class="article-excerpt">
                                <?php echo $article->excerpt; ?>
                                <a href="<?php echo $article->url; ?>" class="float-right border rounded pl-2 pr-2 hover:bg-gray-100">Read more &raquo;</a>
                                <div style="clear:both"></div>
                            </blockquote>
                        </article>
                    <?php endforeach; ?>
                </div>
                <div style="clear:both"></div>
            <?php endif; ?>

            <?php if (!empty($urlPrevPage) || !empty($urlNextPage)): ?>
                <nav class="pagination">
                    <?php if (!empty($urlPrevPage)): ?>
                        <a class="float-left border rounded pl-2 pr-2 hover:bg-gray-100" href="<?php echo $urlPrevPage; ?>">
                            &laquo; Previous Page
                        </a>
                    <?php endif; ?>
                    <?php if (!empty($urlNextPage)): ?>
                        <a class="float-right border rounded pl-2 pr-2 hover:bg-gray-100" href="<?php echo $urlNextPage; ?>">
                            Next Page &raquo;
                        </a>
                    <?php endif; ?>
                    <div class="clear"></div>
                </nav>
            <?php endif; ?>
        </div>
    </div>
</section>

<script src="/themes/kiss/js/prism.js"></script>
