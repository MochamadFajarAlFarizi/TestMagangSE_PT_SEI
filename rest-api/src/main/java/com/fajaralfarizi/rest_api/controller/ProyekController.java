package com.fajaralfarizi.rest_api.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import com.fajaralfarizi.rest_api.model.Proyek;
import com.fajaralfarizi.service.ProyekService;

import java.util.List;
import java.util.Optional;

@RestController
@RequestMapping("/api/proyek")
public class ProyekController {

    @Autowired
    private ProyekService proyekService;

    @GetMapping
    public List<Proyek> getAllProyek() {
        return proyekService.getAllProyek();
    }

    @GetMapping("/{id}")
    public ResponseEntity<Proyek> getProyekById(@PathVariable Long id) {
        Optional<Proyek> proyek = proyekService.getProyekById(id);
        return proyek.map(ResponseEntity::ok).orElseGet(() -> ResponseEntity.notFound().build());
    }

    @PostMapping
    public Proyek createProyek(@RequestBody Proyek proyek) {
        return proyekService.saveProyek(proyek);
    }

    @PutMapping("/{id}")
    public ResponseEntity<Proyek> updateProyek(@PathVariable Long id, @RequestBody Proyek proyekDetails) {
        Optional<Proyek> proyek = proyekService.getProyekById(id);
        if (proyek.isPresent()) {
            Proyek updatedProyek = proyek.get();
            updatedProyek.setNamaProyek(proyekDetails.getNamaProyek());
            updatedProyek.setClient(proyekDetails.getClient());
            updatedProyek.setTglMulai(proyekDetails.getTglMulai());
            updatedProyek.setTglSelesai(proyekDetails.getTglSelesai());
            updatedProyek.setPimpinanProyek(proyekDetails.getPimpinanProyek());
            updatedProyek.setKeterangan(proyekDetails.getKeterangan());

            proyekService.saveProyek(updatedProyek);
            return ResponseEntity.ok(updatedProyek);
        } else {
            return ResponseEntity.notFound().build();
        }
    }

    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deleteProyek(@PathVariable Long id) {
        proyekService.deleteProyek(id);
        return ResponseEntity.noContent().build();
    }
}
