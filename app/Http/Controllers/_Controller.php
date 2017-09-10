<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use CuttingWeb\Core\Feed;
use \App\Objects;

abstract class _Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @var Objects\Page $page
     */
    protected $page;

    /**
     * @var array $data
     */
    protected $data = [];

    /**
     * PageController constructor.
     */
    public function __construct()
    {
//        $feed            = new Feed\Wordpress();
//        $wordpress = $feed->getFromUrl("https://wordpress.cuttingweb.co.uk/feed/");

        $this->page = new Objects\Page([
//            'title' => $wordpress->getTitle(),
        ]);

        $this->data = [
            'page'       => $this->page,
            'navigation' => [
                new Objects\Navigation\Element('Home', '/'),
//                new Objects\Navigation\Element('Blog', '/#blog'),
//                new Objects\Navigation\Element('Portfolio', '/#portfolio'),
//                new Objects\Navigation\Element('Work process', '/#work-process'),
                new Objects\Navigation\Element('Testimonials', '/#testimonials'),
                new Objects\Navigation\Element('About', '/#about'),
                new Objects\Navigation\Element('Contact', '/#contact'),
            ],
        ];
    }
}
