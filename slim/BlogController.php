<?php
declare(strict_types=1);

namespace Barryosull\Slim;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class BlogController
{
    const PER_PAGE = 8;

    public function handle(RequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $contentRepository = new ContentRepository();
        $renderer = new Renderer();

        $page = $this->getPage($args);
        $activeCategory = $args['category'] ?? null;

        $articles = $contentRepository->fetchCollection($activeCategory, false);
        $categories = $contentRepository->fetchAllCategories();

        $urlPrevPage = $this->getUrlForPrevPage($page);
        $urlNextPage = $this->getUrlForNextPage($articles, $page, self::PER_PAGE);

        $mainCategories = [
            [
                'title' => 'Legacy',
                'slug' => 'legacy',
                'color' => 'bg-purple-500 hover:bg-purple-400',
            ],
            [
                'title' => 'Architecture',
                'slug' => 'architecture',
                'color' => 'bg-red-500 hover:bg-red-400',
            ],
            [
                'title' => 'Development Strategy',
                'slug' => 'development-strategy',
                'color' => 'bg-green-500 hover:bg-green-400',
            ],
            [
                'title' => 'Event Sourcing',
                'slug' => 'event-sourcing',
                'color' => 'bg-blue-500 hover:bg-blue-400',
            ],
            [
                'title' => 'Implementation',
                'slug' => 'implementation',
                'color' => 'bg-yellow-500 hover:bg-yellow-400',
            ]
        ];

        $categoryTitle = array_reduce($mainCategories, function ($return, $mainCategory) use ($activeCategory) {
           return $mainCategory['slug'] === $activeCategory ? $mainCategory['title'] : $return;
        }, $activeCategory);

        $body = $renderer->render("blog", [
            'hasActiveCategory' => $activeCategory !== null,
            'articles' => array_slice($articles, $page * self::PER_PAGE, self::PER_PAGE),
            'categoryTitle' => $categoryTitle,
            'categories' => $categories,
            'mainCategories' => $mainCategories,
            'title' => "Blog",
            'urlPrevPage' => $urlPrevPage,
            'urlNextPage' => $urlNextPage,
            "uri" => strval($request->getUri())
        ]);

        $response->getBody()->write($body);

        return $response;
    }

    public static function getPageCount(array $articles): int
    {
        return intval(ceil(count($articles)/self::PER_PAGE));
    }

    /**
     * @param array $args
     * @return int
     */
    private function getPage(array $args): int
    {
        return isset($args['page']) ? intval($args['page']) : 0;
    }

    /**
     * @param $page
     * @return null|string
     */
    private function getUrlForPrevPage($page)
    {
        $urlPrevPage = null;
        if ($page > 1) {
            $urlPrevPage = "/blog/page-" . ($page - 1);
        }
        if ($page == 1) {
            $urlPrevPage = "/blog";
        }
        return $urlPrevPage;
    }

    /**
     * @param $articles
     * @param $page
     * @param $perPage
     * @return null|string
     */
    private function getUrlForNextPage($articles, $page, $perPage)
    {
        $urlNextPage = null;
        if (count($articles) > (($page + 1) * $perPage)) {
            $urlNextPage = "/blog/page-" . ($page + 1);
        }
        return $urlNextPage;
    }
}
