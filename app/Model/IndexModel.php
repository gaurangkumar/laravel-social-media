<?php
/**
 * @auther        GaurangKumar Parmar <gaurangkumarp@gmail.com>
 */

namespace App\Model;

use Friday\Model\ModelService;

class IndexModel extends ModelService
{
    public function getIndex($params = null, $uri = null)
    {
        $lang = 'en-us';
        $app_name = "Agwis";
        $app_url = "agwis.com";
        $og_image = $brand_image = SERVER_ROOT."logo.png";
        $favicon = SERVER_ROOT."favicon.ico";

        $author = "GaurangKumar";
        $made_by = "GK";
        $keyword_array = [''];
        $keywords = implode(',', $keyword_array);
        $description = "GaurangKumar is full-stack web developer specializing in PHP.";

        $home_title = "GaurangKumar Parmar - Full-Stack Web Developer";

        return [
            'server_root'=>SERVER_ROOT,
            'brand_image'=>$brand_image,
            'favicon'=>$favicon,
            'title'=>$home_title,
            'keyword'=>$keywords,
            'description'=>$description,
            'author'=>$author,
            'og_image'=>$og_image,
        ];
    }
}
