<?php
declare(strict_types=1);

namespace Barryosull\Slim;

class Renderer
{
    public function render(string $view, array $data): string
    {
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
}
