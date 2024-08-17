package com.fajaralfarizi.rest_api.controller;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import com.fajaralfarizi.rest_api.model.Lokasi;
import com.fajaralfarizi.service.LokasiService;

import java.util.List;
import java.util.Optional;

@RestController
@RequestMapping("/api/lokasi")
public class LokasiController {

    @Autowired
    private LokasiService lokasiService;

    @GetMapping
    public List<Lokasi> getAllLokasi() {
        return lokasiService.getAllLokasi();
    }

    @GetMapping("/{id}")
    public ResponseEntity<Lokasi> getLokasiById(@PathVariable Long id) {
        Optional<Lokasi> lokasi = lokasiService.getLokasiById(id);
        return lokasi.map(ResponseEntity::ok).orElseGet(() -> ResponseEntity.notFound().build());
    }

    @PostMapping
    public Lokasi createLokasi(@RequestBody Lokasi lokasi) {
        return lokasiService.saveLokasi(lokasi);
    }

    @PutMapping("/{id}")
    public ResponseEntity<Lokasi> updateLokasi(@PathVariable Long id, @RequestBody Lokasi lokasiDetails) {
        Optional<Lokasi> lokasi = lokasiService.getLokasiById(id);
        if (lokasi.isPresent()) {
            Lokasi updatedLokasi = lokasi.get();
            updatedLokasi.setNamaLokasi(lokasiDetails.getNamaLokasi());
            updatedLokasi.setNegara(lokasiDetails.getNegara());
            updatedLokasi.setProvinsi(lokasiDetails.getProvinsi());
            updatedLokasi.setKota(lokasiDetails.getKota());

            lokasiService.saveLokasi(updatedLokasi);
            return ResponseEntity.ok(updatedLokasi);
        } else {
            return ResponseEntity.notFound().build();
        }
    }

    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteLokasi(@PathVariable Long id) {
        lokasiService.deleteLokasi(id);
        return ResponseEntity.noContent().build();
    }
}
