<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jorenvh\Share\Share;
use function urlencode;

class ShareOtherController extends Share
{
    //
    public function tumblr()
    {
        $url = "https://www.tumblr.com/share/tool?posttype=link&content=".urlencode($this->url)."&title=".urlencode($this->title);
        //$url = "https://www.tumblr.com/widgets/share/tool/preview?shareSource=legacy&canonicalUrl=&posttype=link&content=".$this->url."&url=".$this->url;

        $this->buildLink('tumblr', $url);

        return $this;
    }
}
