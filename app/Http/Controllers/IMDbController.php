<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class IMDbController extends Controller
{
    public function fetchData()
    {
        // Ganti dengan endpoint API IMDb yang sesuai
        $api_endpoint = "https://api.example.com/imdb_endpoint";
        $api_key = "ccd14ef6";
        
        // Mengirim permintaan ke API
        $response = Http::withHeaders([
            'Authorization' => "Bearer $api_key",
        ])->get($api_endpoint);

        // Memeriksa apakah permintaan berhasil
        if ($response->successful()) {
            // Mengambil data dari respons
            $data = $response->json();
            
            // Menyimpan data ke file JSON di storage/app/public/imdb_data.json
            Storage::disk('public')->put('imdb_data.json', json_encode($data, JSON_PRETTY_PRINT));

            return response()->json(['message' => 'Data berhasil diambil dan disimpan ke imdb_data.json'], 200);
        } else {
            return response()->json(['message' => 'Gagal mengambil data', 'status' => $response->status()], $response->status());
        }
    }
}
