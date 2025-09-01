<?php
declare(strict_types=1);

namespace Barryosull\Slim;

class Renderer
{
    public function render(string $view, array $data): string
    {
        $data = array_merge($data, $this->makeMetaData($data));

        extract($data);

        ob_start();

        require __DIR__ . "/views/" . $view . ".php";

        $content = ob_get_contents();

        ob_end_clean();

        // Wrap content in defined template
        if (isset($template)) {
            ob_start();

            require $template;

            $content = ob_get_contents();

            ob_end_clean();
        }

        return $content;
    }

    private function makeMetaData(array $data): array 
    {
        if (!isset($data['article'])) {
            // Default
            return [
                'description' => 'Legacy web app development specialist',
                'keywords' => 'Legacy web app development specialist',
                'url' => getenv('DOMAIN'),
                'title' => 'Legacy Web App Specialist',
                'image' => '/images/icon.svg'
            ];
        }

        $article = $data['article'];
        return [
            'description' => $article->excerpt,
            'keywords' => 'Legacy web app development specialist',
            'url' => getenv('DOMAIN') . $article->url,
            'title' => $article->title,
            'image' => $article->coverImage,
        ];
    }
}
