<?php $template = __DIR__ . '/templates/default.php'; ?>

<section class="bg-white border-b pt-8 lg:pt-16 pb-8">
    <div class="container max-w-5xl mx-auto m-8">
        <article class="text-black m-6">
            <?php if(!empty($page->title)): ?>
                <h1 class="font-bold text-2xl lg:text-4xl mb-6"><?php echo $page->title; ?></h1>
            <?php endif; ?>
            <div>
                <?php echo (new Parsedown)->parse($page->content); ?>
            </div>
        </article>
    </div>
</section>
