<?php

namespace App\Http\Livewire\ShareButton;

use App\Models\Gallery;
use LivewireUI\Modal\ModalComponent;
use App\Http\Controllers\ShareOtherController as ShareOther;
use function redirect;

class ShareModal extends ModalComponent
{

    public $buttons;
    public $social;
    public $gallery;

    public function mount(Gallery $gallery)
    {
        $this->buttons = [
            "facebook",
            "twitter",
            "reddit",
            "linkedin",
            "whatsapp",
            "telegram",
            "tumblr"
        ];

        $social = new ShareOther();
        $social->page('http://127.0.0.1:8000', 'Share title');
        $this->social = $social
            ->facebook()
            ->twitter()
            ->reddit()
            ->linkedin()
            ->whatsapp()
            ->telegram()
            ->tumblr()
            ->getRawLinks();

        $this->gallery = $gallery;
            //echo $this->social[$this->buttons[0]];
    }

    public function share($url)
    {
        $this->gallery->increment('share', 1);
        redirect($this->social[$url]);
    }

    public function render()
    {
        return view('livewire.share-button.share-modal');
    }
}
