package com.fajaralfarizi.service;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.fajaralfarizi.rest_api.model.Lokasi;
import com.fajaralfarizi.rest_api.repository.LokasiRepository;

import java.util.List;
import java.util.Optional;

@Service
public class LokasiService {

    @Autowired
    private LokasiRepository lokasiRepository;

    // Mengambil semua data lokasi
    public List<Lokasi> getAllLokasi() {
        return lokasiRepository.findAll();
    }

    // Mengambil data lokasi berdasarkan ID
    public Optional<Lokasi> getLokasiById(Long id) {
        return lokasiRepository.findById(id);
    }

    // Menyimpan data lokasi baru
    public Lokasi saveLokasi(Lokasi lokasi) {
        return lokasiRepository.save(lokasi);
    }

    // Mengupdate data lokasi berdasarkan ID
    public Lokasi updateLokasi(Long id, Lokasi lokasiDetails) {
        Optional<Lokasi> lokasiOptional = lokasiRepository.findById(id);
        if (lokasiOptional.isPresent()) {
            Lokasi lokasi = lokasiOptional.get();
            lokasi.setNamaLokasi(lokasiDetails.getNamaLokasi());
            lokasi.setNegara(lokasiDetails.getNegara());
            lokasi.setProvinsi(lokasiDetails.getProvinsi());
            lokasi.setKota(lokasiDetails.getKota());
            return lokasiRepository.save(lokasi);
        } else {
            return null;  // atau bisa lemparkan exception seperti EntityNotFoundException
        }
    }

    // Menghapus data lokasi berdasarkan ID
    public void deleteLokasi(Long id) {
        lokasiRepository.deleteById(id);
    }
}



