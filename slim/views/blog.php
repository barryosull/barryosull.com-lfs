<?php $template = __DIR__ . '/templates/default.php'; ?>

<section class="bg-white border-b pt-8 lg:pt-16 pb-8">
    <div class="w-full container mx-auto max-w-5xl mx-auto m-8">
        <div class="text-black m-2">
            <h1 class="text-2xl font-bold mb-3">Blog: <?php echo $categoryTitle ?></h1>
            <p class="text-lg mb-6">My thoughts on software development.</p>

            <div class="text-xl font-bold mb-4">Categories</div>
            <p class="text-lg mb-3">I have many interests in software development and I enjoy writing about then. As such my blog doesn't cover just one topic.</p>

            <div class="flex flex-col lg:flex-row lg:space-x-4 mb-6">
                <?php foreach ($mainCategories as $category): ?>
                <a class="lg:flex-1 mb-2 text-base text-center text-white py-2 px-2 font-bold rounded-full <?php echo $category['color'] ?> " href="/blog/category/<?php echo $category['slug'] ?>#articles" >
                    <?php echo $category['title'] ?>
                </a>
                <?php endforeach; ?>
            </div>

            <div class="grid grid-cols-4">
                <div class="col-span-4 lg:col-span-1 pb-8">
                    <div class="text-xl font-bold mb-4">Topics</div>
                    <?php foreach ($categories as $category): ?>
                        <div class="inline-block lg:block">
                            <a class="inline-block px-2 mr-2 mb-2 lg:inline-block rounded-full bg-yellow-600 text-white" href="<?php echo "/blog/category/".$category; ?>" class="btn"><?php echo $category; ?></a>
                        </div>
                    <?php endforeach; ?>
                </div>
                   
                <div id="articles" class="col-span-4 lg:col-span-3">
                    <?php if (empty($articles)): ?>
                        <p>Sorry - no articles found.</p>
                    <?php endif; ?>
                    <?php foreach ($articles as $article): ?>
                        <article class="mb-6 py-3 px-6 shadow-md rounded-md">
                            <header>
                                <h2 class="text-xl font-bold mb-3"><a href="<?php echo $article->url; ?>"><?php echo $article->title; ?></a></h2>
                            </header>
                            <blockquote class="article-excerpt overflow-hidden">
                                <?php echo $article->excerpt; ?>
                                <a href="<?php echo $article->url; ?>" class="float-right border rounded mt-2 pl-2 pr-2 bg-white hover:bg-gray-100">Read more &raquo;</a>
                                <div style="clear:both"></div>
                            </blockquote>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
    

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
