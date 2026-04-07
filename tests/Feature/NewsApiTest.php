<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\News;

class NewsApiTest extends TestCase
{
    // trait RefreshDatabase akan mereset tabel sebelum tes dijalankan agar data bersih
    use RefreshDatabase;

    /**
     * Test mendapatkan daftar seluruh berita
     */
    public function test_can_get_all_news(): void
    {
        // 1. Arrange: Persiapan data tiruan
        News::create([
            'title' => 'Berita Pertama',
            'thumbnail' => 'storage/news/dummy.jpg',
            'content' => 'Isi konten berita pertama yang sangat panjang'
        ]);

        // 2. Act: Melakukan aksi tembak API ke endpoint yang dibuat di Step 6
        $response = $this->getJson('/api/news');

        // 3. Assert: Memastikan bahwa jawaban sesuai harapan (Status 200 OK & Jumlah Berita 1)
        $response->assertStatus(200);
        $response->assertJsonCount(1, 'data');
        $response->assertJsonFragment([
            'title' => 'Berita Pertama',
        ]);
    }
}
