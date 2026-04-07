<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreNewsRequest;
use App\Services\NewsService;

class NewsController extends Controller
{
    protected $newsService;

    // Dependency Injection: Menyuntikkan Service ke dalam Controller
    public function __construct(NewsService $newsService)
    {
        $this->newsService = $newsService;
    }

    /**
     * Menampilkan daftar berita
     */
    public function index()
    {
        $news_list = $this->newsService->getAllNews();
        
        return response()->json([
            'message' => 'Berhasil mengambil daftar berita',
            'data' => $news_list
        ]); // Dalam versi Web (Bukan API), kita pakai: return view('news.index', compact('news_list'));
    }

    /**
     * Menyimpan berita baru
     */
    public function store(StoreNewsRequest $request)
    {
        // Pada titik ini, input PASTI VALID karena sudah melewati satpam (StoreNewsRequest).
        $validatedData = $request->validated();
        
        // Panggil service untuk handle upload gambar & simpan ke database
        $news = $this->newsService->createNews($validatedData);

        return response()->json([
            'message' => 'Berita berhasil dibuat!',
            'data' => $news
        ], 201); // Dalam versi Web, kita pakai: return redirect()->route('news.index')->with('success', 'Berita berhasil dibuat');
    }
}
