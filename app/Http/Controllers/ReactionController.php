<?php

// File: ReactionController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;

class ReactionController extends Controller
{
    public function react($type, $id)
    {
        $pesan = Pesan::findOrFail($id);

        // Pastikan tipe reaksi adalah like atau love
        if ($type == 'like' || $type == 'love') {
            // Perbarui nilai reaksi
            $pesan->{$type.'_count'}++;
            $pesan->save();

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'Invalid reaction type']);
    }
}
