<?php

namespace App\Services;

use App\Models\News;
use Illuminate\Support\Facades\Storage;

class NewsService
{
    /**
     * Get all news items
     */
    public function getAllNews()
    {
        return News::latest()->get(); // Mengambil berita dari yang paling baru
    }

    /**
     * Store new news item with thumbnail upload
     */
    public function createNews(array $data)
    {
        // Menyimpan file gambar (jika ada properti file dengan nama 'thumbnail')
        // Ini adalah contoh logic tambahan yang ditaruh di Service
        if (isset($data['thumbnail']) && $data['thumbnail']->isValid()) {
            $path = $data['thumbnail']->store('public/news');
            $data['thumbnail'] = str_replace('public/', 'storage/', $path);
        }

        // Simpan ke database
        return News::create($data);
    }
}
