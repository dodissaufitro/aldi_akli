<?php

namespace App\Observers;

use App\Models\BarangMasuk;
use App\Models\Penjualan;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;

class PenjualanObserver
{

    public function created(Penjualan $penjualan)
    {
        $barang = BarangMasuk::where('kode_barang', $penjualan->kode_barang)->first();

        Log::info('Barang ditemukan: ' . $barang);

        if (!$barang) {
            throw new ValidationException("Barang tidak ditemukan.");
        }

        if ($barang->jumlah_masuk < $penjualan->jumlah_barang) {
            throw ValidationException::withMessages([
                'jumlah_barang' => 'Stok barang tidak mencukupi.',
            ]);
        }

        // Kurangi stok barang
        $barang->jumlah_masuk -= $penjualan->jumlah_barang;

        // Log untuk memeriksa perubahan stok
        Log::info('Stok setelah dikurangi: ' . $barang->jumlah_masuk);

        // Simpan perubahan stok
        if (!$barang->save()) {
            throw new \Exception("Gagal mengupdate stok barang.");
        }

        Log::info('Stok berhasil diperbarui.');
    }

    /**
     * Handle the Penjualan "updated" event.
     */
    public function updated(Penjualan $penjualan): void
    {
        $oldJumlah = $penjualan->getOriginal('jumlah_barang');
        $oldKodeBarang = $penjualan->getOriginal('kode_barang');

        // Ambil data barang sesuai kode barang sebelum update
        $barang = BarangMasuk::where('kode_barang', $oldKodeBarang)->first();

        if (!$barang) {
            throw ValidationException::withMessages([
                'kode_barang' => 'Barang tidak ditemukan.',
            ]);
        }

        // Tambahkan kembali stok lama
        $barang->jumlah_masuk += $oldJumlah;

        // Kurangi stok dengan jumlah baru
        $newJumlah = $penjualan->jumlah_barang;
        if ($barang->jumlah_masuk < $newJumlah) {
            throw ValidationException::withMessages([
                'jumlah_barang' => 'Stok barang tidak mencukupi setelah perubahan.',
            ]);
        }

        $barang->jumlah_masuk -= $newJumlah;

        // Simpan perubahan
        $barang->save();
    }

    /**
     * Handle the Penjualan "deleted" event.
     */
    public function deleted(Penjualan $penjualan): void
    {
        $barang = BarangMasuk::where('kode_barang', $penjualan->kode_barang)->first();

        if (!$barang) {
            throw new ValidationException("Barang tidak ditemukan.");
        }

        // Tambahkan kembali stok barang yang dihapus
        $barang->jumlah_masuk += $penjualan->jumlah_barang;

        // Simpan perubahan stok
        if (!$barang->save()) {
            throw new \Exception("Gagal mengupdate stok barang.");
        }
    }

    /**
     * Handle the Penjualan "restored" event.
     */
    public function restored(Penjualan $penjualan): void
    {
        //
    }

    /**
     * Handle the Penjualan "force deleted" event.
     */
    public function forceDeleted(Penjualan $penjualan): void
    {
        //
    }
}
