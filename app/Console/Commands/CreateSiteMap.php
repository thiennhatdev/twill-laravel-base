<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class CreateSiteMap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // create new sitemap object
        $sitemap = \App::make("sitemap");

        // add items to the sitemap (url, date, priority, freq)
        $sitemap->add(\URL::to('/'), '2021-02-25T20:10:00+02:00', '1.0', 'daily');

        // $categories = \DB::table('categorys')->orderBy('created_at', 'desc')->get();

        // foreach ($categories as $category)
        // {
        //     $sitemap->add(env('APP_URL'). "/danhmuc{$category->id}-{$category->slug}", $category->created_at, '0.8', 'daily');
        // }

        // get all news from db
        $news = \DB::table('news')
                    ->where('deleted_at', '=', null)
                    ->orderBy('created_at', 'desc')
                    ->get();

        // add every post to the sitemap
        foreach ($news as $new)
        {
            $slug = Str::slug($new->title);
            $sitemap->add(\URL::to('/'). "/tin-tuc/tin{$new->id}-{$slug}.html", $new->created_at, '0.7', 'daily');
        }

        // get all paints from db
        $paints = \DB::table('paints')
                    ->where('deleted_at', '=', null)
                    ->orderBy('created_at', 'desc')
                    ->get();

        // add every paint to the sitemap
        foreach ($paints as $paint)
        {
            $slug = Str::slug($paint->title);
            $sitemap->add(\URL::to('/'). "/son/sanpham{$paint->id}-{$slug}.html", $paint->created_at, '0.7', 'daily');
        }

        // generate your sitemap (format, filename)
        $sitemap->store('xml', './../sitemap');

        // production
        // $sitemap->store('xml', './../../public_html/sitemap');
    }
}
