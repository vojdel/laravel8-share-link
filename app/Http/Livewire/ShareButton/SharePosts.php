<?php

namespace App\Http\Livewire\ShareButton;

use App\Models\Gallery;
use Livewire\Component;

class SharePosts extends Component
{

    public $gallerys;

    public function mount()
    {
        $this->gallerys = Gallery::all();
    }

    public function render()
    {
        return view('livewire.share-button.share-posts');
    }
}
